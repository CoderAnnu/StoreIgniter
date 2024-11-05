<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\PageModel;
use CodeIgniter\API\ResponseTrait;


class PageController extends BaseController
{

    use ResponseTrait;
    // assign the private variable coz this is showing the error in VScode 
    private $pageModel;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->pageModel = new PageModel();
    }

    /**
     * slug_generator
     * slug page generator  
     * 
     * @param  mixed $keyword
     * @return void
     */
    function slug_generator($keyword)
    {
        $slug = createUrlSlug($keyword);

        // check slug is exist or not 
        $is_exist = $this->pageModel->where('slug', $slug)->first();

        // check if exist then create slug 
        if ($is_exist) {
            $index = 1;
            while ($is_exist) {
                $slug = createUrlSlug($keyword) . '-' . $index;
                $is_exist = $this->pageModel->where('slug', $slug)->first();
                $index++;
            }
        }

        // Return generated slug 
        return $this->respond([
            "slug" => $slug
        ]);
    }

    /**
     * view_page
     *
     * @param  mixed $slug
     * @return void
     */
    public function view_page($slug)
    {
        $page =  $this->pageModel->where([
            'slug' => $slug,
            'status' => 'publish'
        ])->first();

        if ($page) {
            // Display view pages 
            return view('frontend/page', [
                "title" => $page->title,
                "page" => $page
            ]);
        }
        // if page is not exist then this will show 404 error page 
        return show_404();
    }

    public function create_page()
    {
        if (current_user() && current_user()->is('admin')) {
            $title = $this->request->getVar('title');
            $slug = $this->request->getVar('slug');
            $status = $this->request->getVar('status');
            $description  = $this->request->getVar('description');

            if (!$title) return $this->fail("Page Title field is empty");

            /**  if slug is already exists **/
            $check = $this->pageModel->where('slug', $slug)->first();

            if ($check)  return $this->fail("This slug already exists.");

            if (!$slug) return $this->fail("Page slug field is empty");

            if (!$status) return $this->fail("Please select status field");

            if (!$description) return $this->fail("Description field is empty");

            $value = [
                "title" => $title,
                "slug" => $slug,
                "status" => $status,
                "description" => $description
            ];

            $this->pageModel->insert($value);

            // Respond Status 201 success page 
            return $this->respond([
                "page" => $value,
                "message" => "Page add Successfully"
            ]);
        }
    }

    /**
     * get_pages
     * page filter 
     *
     * @return void
     */
    public function get_pages()
    {
        if (current_user() && current_user()->is('admin')) {

            $pageModel = $this->pageModel->withDeleted()->findAll();

            if ($pageModel) {
                $query = $this->request->getGet('query');
                $per_page = ($this->request->getGet('per_page')) ? $this->request->getGet('per_page') : 25;
                $filter = ($this->request->getGet('filter') && in_array($this->request->getGet('filter'), ['all', 'active', 'deleted'])) ? $this->request->getGet('filter') : 'all';

                $pageModel = $this->pageModel;

                // show only all pages 
                if ($filter == 'all') {
                    $pageModel->withDeleted();
                }

                // To show only active page data 
                if ($filter == 'active') {
                    $pageModel->where([
                        "status" => 'active'
                    ]);
                }

                // To show only deleted page data 
                if ($filter == 'deleted') {
                    $pageModel->withDeleted();
                    $pageModel->where([
                        "deleted_at !=" => null
                    ]);
                }

                if ($query) {
                    $pageModel->like('title', $query);
                    $pageModel->orLike('slug', $query);
                    $pageModel->orLike('status', $query);
                }

                // Items 
                $items = $pageModel->paginate($per_page);

                // Modifier 
                $its = [];

                // Modifier 
                foreach ($items as $page) {
                    $its[] = $page->getPageBasicInfo();
                }

                $pagination_map = [
                    "current_page" => null,
                    "total_pages" => null,
                    "total_items" => 0,
                    "next_page" => false,
                    "items" => $its
                ];

                // Pager 
                $pager = $pageModel->pager;

                $pagination_map['current_page'] = $pager->getCurrentPage();
                $pagination_map['total_items'] = $pager->getTotal();
                $pagination_map['next_page'] = false;

                // Modify Get Data 
                if ($pager->hasMore()) {
                    $next_page = $pagination_map['current_page'] + 1;
                    $_GET['page'] = $next_page;
                    $pagination_map['next_page'] = base_url('api/user') . '?' . http_build_query($_GET);
                }
                return $this->respond($pagination_map);
            }
            return $this->fail([
                "message" => "NO such a page found."
            ]);
        }
        //  This functionality only for Admin user 
        return $this->fail("You are not allowed to access this area.");
    }

    /**
     * edit_page
     * Edit page functionality only for admin
     * 
     * @param  mixed $page_id
     * @return void
     */
    public function edit_page($page_id)
    {
        if (current_user() && current_user()->is('admin')) {

            $pageModel = $this->pageModel->withDeleted()->find($page_id);
            if (!$pageModel) return $this->fail("No such a page exists.");

            // fetching data fields 
            $data = [
                "id" => (int)$pageModel->id,
                "title" => $pageModel->title,
                "slug" => $pageModel->slug,
                "status" => $pageModel->status,
                "description" => $pageModel->description,
                "created_at" => $pageModel->created_at,
                "updated_at" => $pageModel->updated_at,
                "deleted_at" => $pageModel->deleted_at
            ];
            return $this->respond($data);
        }

        // This feature only for Admin user 
        return $this->fail("You are not allowed to access this area.");
    }

    /**
     * update_page
     * Update page data 
     * this feature only for admin  
     * @param  mixed $page_id
     * @return void
     */
    public function update_page($page_id)
    {
        if (current_user() && current_user()->is('admin')) {
            $title =  $this->request->getVar('title');
            $slug = $this->request->getVar('slug');
            $status = $this->request->getVar('status');
            $description = $this->request->getVar('description');

            $findPage  = $this->pageModel->find($page_id);

            $check = $this->pageModel->where('slug', $slug)->first();
            if ($check && $slug != $findPage->slug) return $this->fail("This slug is already exists.");

            if (!$title) return $this->fail("Page title field is empty");

            if (!$slug) return $this->fail("Slug fields is empty");

            if (!$description) return $this->fail("Description feild is empty");

            // data fields values 
            $value = [
                "title" => $title,
                "slug" => $slug,
                "status" => $status,
                "description" => $description
            ];
            // Update value fields data 
            $this->pageModel->update($page_id, $value);
            return $this->respond(["message" => "Page Updated"]);
        }
        // Only admin can use this functionality 
        return $this->fail("You are not allowed to access this area.");
    }

    /**
     * delete_page
     *
     * @param  mixed $id
     * @return void
     */
    public function delete_page($id)
    {
        if (current_user() && current_user()->is('admin')) {
            $page = $this->pageModel->find($id);
            if ($page) {
                $page->delete();
                return $this->respondDeleted([
                    "message" => "Page has been deleted",
                    "page" => $page->getPageBasicInfo()
                ]);
            }
            return $this->fail("Page doesn't exist");
        }
        // Only Admin can access this features
        return $this->fail("You are not allowed to aceess this area.");
    }

    /**
     * resItore_page
     *
     * @param  mixed $id
     * @return void
     */
    public function restore_page($id)
    {
        if (current_user() && current_user()->is('admin')) {
            $page = $this->pageModel->withDeleted()->find($id);
            if ($page) {
                // Restore Page 
                $page->restore();
                return $this->respond([
                    "message" => "Page has been restored",
                    "page" => $page->getPageBasicInfo()
                ]);
            }
        }
        // This feature only for Admin user 
        return  $this->fail("You are not allowed to access this area.");
    }
    
    /**
     * permanent_delete
     *
     * @param  mixed $id
     * @return void
     */
    public function permanent_delete($id)
    {
        if (current_user() && current_user()->is('admin')) {
            $db = db_connect();

            $sql = "DELETE FROM pages WHERE id = $id";
            $deleted = $db->query($sql);
            return $this->respondDeleted([
                "Deleted" => $deleted,
                "message" => "Page has been deleted permanetly "
            ]);
        }
        // Only admin can delete page permanentlty 
        return $this->fail("You are not allowed to access this area.");
    }
}
