<?php

namespace App\Controllers\Api;

use App\Models\BlogModel;
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class BlogController extends BaseController
{
    use ResponseTrait;

    private $blogModel;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->blogModel = new BlogModel();
    }

    /**
     * blog_slug_generator
     * This is blog slug generator this works to generate blog slugs
     *
     * @param  mixed $keyword
     * @return void
     */
    public function blog_slug_generator($keyword)
    {
        $slug = createUrlSlug($keyword);
        $is_exist = $this->blogModel->where("slug", $slug)->first();

        if ($is_exist) {
            $i = 1;
            while ($is_exist) {
                $slug = createUrlSlug($keyword) . '-' . $i;
                $is_exist = $this->blogModel->where("slug", $slug)->first();
                $i++;
            }
        }
        return $this->respond([
            "slug" => $slug
        ]);
    }

    /**
     * add_blog
     * Only Admin can Add blog
     *
     * @return void
     */
    public function add_blog()
    {
        // If user is admin then this will work
        if (current_user() && current_user()->is('admin')) {
            // Getting the fields data through the fields
            $title = $this->request->getVar('title');
            $slug = $this->request->getVar('slug');
            $content = $this->request->getVar('content');
            $status = $this->request->getVar('status');
            $img = $this->request->getFile('image');
            $is_exist = $this->blogModel->where("slug", $slug);

            // Validation of these fields if is empty then it will show the error 
            if (!$is_exist) return $this->fail("This slug is already exist.");
            if (!$title) return $this->fail("Empty title field");
            if (!$slug) return $this->fail("Empty Slug Field");
            if (!$content) return $this->fail("Empty content field");
            if (!$status) return $this->fail("Please select the Status");
            if (!$img) return $this->fail("Image is required");

            // if Blog image or Thumnail image is added in a post then it will store in uplods folder 
            if ($img->isValid() && !$img->hasMoved()) {
                $imagName = $img->getName();
                $img->move('uploads', $imagName);
            }

            // Define the Blogs Values
            $value = [
                "title" => $title,
                "slug" => $slug,
                "content" => $content,
                "status" => $status,
                "image" => $img->getName(),
            ];

            // Insert the blogs values  
            $this->blogModel->insert($value);

            // Respond 201 Success message Code  
            return $this->respond([
                "success" => "Blog Created Successfully",
                "Value" =>  $value,
            ]);
        };
    }

    /**
     * all_blogs
     * Display all blogs with filter 
     * @return void
     */
    public function all_blogs()
    {
        if (current_user() && current_user()->is('admin')) {
            $blogModel = $this->blogModel->withDeleted()->findAll();

            if ($blogModel) {
                $query = $this->request->getGet('query');
                $per_page = ($this->request->getGet('per_page')) ? $this->request->getGet('per_page') : 25;
                $filter = ($this->request->getGet('filter') && in_array($this->request->getGet('filter'), ['all', 'active', 'deleted'])) ? $this->request->getGet('filter') : 'all';

                $blogModel = $this->blogModel;

                // All Blogs 
                if ($filter == 'all') {
                    $blogModel->withDeleted();
                }

                // active blogs 
                if ($filter == 'active') {
                    $blogModel->where([
                        "status" => 'publish'
                    ]);
                }

                if ($filter == 'deleted') {
                    $blogModel->withDeleted();
                    $blogModel->where([
                        "deleted_at !=" => null
                    ]);
                }

                if ($query) {
                    $blogModel->like('title', $query);
                    $blogModel->orLike('slug', $query);
                    $blogModel->orLike('status', $query);
                }

                // Items of the page 
                $items = $blogModel->paginate($per_page);

                // Modifier 
                $its = [];

                foreach ($items as $blog) {
                    $its[] = $blog->getBlogBasicInfo();
                }

                // Pagination 
                $pagination_map = [
                    "current_page" => null,
                    "total_pages" => null,
                    "total_items" => 0,
                    "next_page" => false,
                    "items" => $its
                ];

                // Create a pages data format
                $pager = $blogModel->pager;

                // Types and format which is show in pagination
                $pagination_map['current_page'] = $pager->getCurrentPage();
                $pagination_map['total_items'] = $pager->getTotal();
                $pagination_map['next_page'] = false;

                // Modify Get Data 
                if ($pager->hasMore()) {
                    $next_page = $pagination_map['current_page'] + 1;
                    $_GET['page'] = $next_page;
                    $pagination_map['next_page'] = base_url('api/blog') . '?' . http_build_query($_GET);
                }

                // return  a meessage when Blog is not found 
                return $this->fail([
                    "message" => "No such a blog found."
                ]);
            }
            // user permission only admin can allow to access this area 
            return $this->fail("You are not allow to access this area.");
        }
    }

    /**
     * delete_blog
     *
     * @param  mixed $id
     * @return void
     */
    public function delete_blog($id)
    {
        // set if user is admin then he is only one who can use this functionality
        if (current_url() && current_user()->is('admin')) {

            $blog = $this->blogModel->find($id);
            if ($blog) {
                $blog->delete();
                return $this->respondDeleted([
                    "message" => "Blog has been deleted",
                    "blog" => $blog->getBlogBasicInfo()
                ]);
            }
            return $this->fail("Blog doesn't exist");
        }
        // user permission only admin can allow to access this area 
        return $this->fail("You are not allow to access this area.");
    }

    /**
     * restore_blog
     *
     * @param  mixed $id
     * @return void
     */
    public function restore_blog($id)
    {
        if (current_user() && current_user()->is('admin')) {
            $blog = $this->blogModel->withDeleted()->find($id);
            if ($blog) {
                $blog->restore();
                return $this->respond([
                    "message" => "Blog has been restored",
                    "blog" => $blog->getBlogBasicInfo()
                ]);
            }
        }

        // user permission only admin can allow to access this area 
        return $this->fail("You are not allow to access this area.");
    }

    public function permanent_delete($id)
    {
        if (current_user() && current_user()->is('admin')) {
            $db = db_connect();

            // Get all data from the DB
            $sql = "DELETE FROM blogs WHERE id = $id";
            $deleted = $db->query($sql);
            return $this->respondDeleted([
                "Delete" => $deleted,
                "message" => "Blog has been deleted permanently",
            ]);
        }

        // user permission only admin can allow to access this area 
        return $this->fail("You are not allow to access this area.");
    }
}
