<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\BlogModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Files\File;

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
        // return blog slug 
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
                // "Value" =>  $value,
                $value,
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
        // set if user is admin then he is only one who can use this functionality
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

                // Fetching query title, slug, status 
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

                // fetch data through Pagination 
                return $this->respond($pagination_map);
            }
            // return  a meessage when Blog is not found 
            return $this->fail([
                "message" => "No such a blog found."
            ]);
        }

        // user permission only admin can allow to access this area 
        return $this->fail("You are not allow to access this area.");
    }

    /**
     * delete_blog
     * This functionality works soft delete 
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
            // When blog is delete and still showing in the list then it will show the error 
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
        // set if user is admin then he is only one who can use this functionality
        if (current_user() && current_user()->is('admin')) {
            $blog = $this->blogModel->withDeleted()->find($id);
            if ($blog) {
                // Restore Blog 
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

    /**
     * permanent_delete
     * This functionality works for Permanent Blog delete functionality
     * @param  mixed $id
     * @return void
     */
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

    /**
     * edit_blog
     * Edit blog page data 
     * @param  mixed $blog_id
     * @return void
     */
    public function edit_blog($blog_id)
    {
        if (current_user() && current_user()->is('admin')) {
            $blogModel = $this->blogModel->withDeleted()->find($blog_id);
            if (!$blogModel) return $this->fail("No blog");

            // fetching data from blogs to edit  
            $data = [
                "id" => (int)$blogModel->id,
                "title" => $blogModel->title,
                "slug" => $blogModel->slug,
                "status" => $blogModel->status,
                "image" => $blogModel->image,
                "content" => $blogModel->content,
                "created_at" => $blogModel->created_at,
                "updated_at" => $blogModel->updated_at,
                "deleted_at" => $blogModel->deleted_at
            ];
            return $this->respond($data);
        }

        // user permission only admin can allow to access this area 
        return $this->fail("You are not allow to access this area.");
    }

    /**
     * update_blog
     *
     * Update blog functionality 
     * 
     * @param  mixed $blog_id
     * @return void
     */
    public function update_blog($blog_id)
    {
        if (current_user() && current_user()->is('admin')) {
            $title = $this->request->getVar('title');
            $slug = $this->request->getVar('slug');
            $status = $this->request->getVar('status');
            $content =  $this->request->getVar('content');
            $img = $this->request->getFile('image');

            $findblog = $this->blogModel->find($blog_id);
            $check_slug = $this->blogModel->where('slug', $slug)->first();

            if ($check_slug && $slug != $findblog->slug) return $this->fail("This Slug already exist.");

            if (!$title) return $this->fail("Blog title field is empty.");
            if (!$slug) return $this->fail("Slug title field is empty.");
            if (!$content) return $this->fail("content field is empty.");
            if (!$img) return $this->fail("Thumbnail image is required.");

            if ($img->getName() !== $findblog->image) {
                if ($img->isValid() && !$img->hasMoved()) {
                    $imagName = $img->getName();
                    $img->move('uploads', $imagName);
                }
            }

            $value = [
                "title" => $title,
                "slug" => $slug,
                "status" => $status,
                "image" => $img->getName(),
                "content" => $content
            ];

            $this->blogModel->update($blog_id,  $value);
            return $this->respond(["message" => "Blog updated"]);
        }

        // user permission only admin can allow to access this area 
        return $this->fail("You are not allow to access this area.");
    }

    /**
     * view_blog
     *
     * view blog only single blog 
     * 
     * @param  mixed $slug
     * @return void
     */
    public function view_blog($slug)
    {
        $blogStatus =  $this->blogModel->where('slug', $slug)->find();
        $blog = isset($blog) ? "$blog - " . get_option('Blog_status', $blogStatus) : get_option('Blog_status', $blogStatus);

        if ($blog == true && $blogStatus) {
            // Load view  
            $blog = $this->blogModel->where(['slug' => $slug, 'status' => 'publish'])->first();

            $excerpt = substr(strip_tags($blog->content), 0, 500);
            $excerpt = explode('.', $excerpt);
            $excerpt = $excerpt[0];

            if (strlen($blog->content) > 500) $excerpt = $excerpt . '.';

            if ($blog) {
                return view('frontend/blog/BlogPage', [
                    "title" => $blog->title,
                    "blog" => $blog,
                    "excerpt" => $excerpt,
                ]);
            }
        } else {
            // if blog has delete and if it's not exists  then show 404
            return show_404();
        }
    }

    /**
     * view_all_blog
     * 
     * view all blogs in a single page like a blog list 
     *
     * @return void
     */
    public function view_all_blog()
    {
        $allBlogs = $this->blogModel->findAll();
        $blog = isset($blog) ? "$blog - " . get_option('Blog_status', $allBlogs) : get_option('Blog_status', $allBlogs);

        if ($blog == true && $allBlogs) {
            $data = [
                "blogs" => $allBlogs,
            ];

            // display all pages 
            return view('frontend/blogPage', $data);
        } else {
            // if blogs is not exists then it will show 404 page 
            return show_404();
        }
    }
}
