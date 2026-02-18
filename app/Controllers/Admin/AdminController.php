<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Database;

use function PHPSTORM_META\type;

class AdminController extends BaseController
{
    protected $db;
    public function __construct()
    {
        if(!session()->get('admin_logged_in') && !session()->get('admin_token')){
            return redirect()->to('/auth/admin-login/');
        }
        
    }

    public function dashboard()
    {
        $data['page'] = 'dashboard';
        return view('admin/index', $data);
    }
    public function logout(){
        session()->destroy();
        return redirect()->to('/auth/admin-login/');
    }

    public function index(): ResponseInterface
    {
        return redirect()->to('/admin/dashboard/');
    }
    public function products()
    {
        $data['page'] = 'product';
        return view('admin/index', $data);
    }
    public function pandits()
    {
        $data['page'] = 'pandits';
        $panditsModel = new \App\Models\Pandits();
        $data['pandits'] = $panditsModel->findAll();
        return view('admin/index', $data);
    }
    public function faqlist()
    {
        
        $data['page'] = 'faqlist';
        $faqsModel = new \App\Models\Faqs();
        $data['faqs'] = $faqsModel->findAll();
        return view('admin/index', $data);
    }
    public function contacts()
    {
        $data['page'] = 'contact';
        $contactrequestsModel = new \App\Models\Contactrequests();
        $data['contacts'] = $contactrequestsModel->findAll();
        return view('admin/index', $data);
    }
    public function addProduct()
    {
        if ($this->request->getMethod() !== 'POST') {
            $data['page'] = 'addproduct';
            return view('admin/index', $data);
        }
        // Validation rules
        $rules = [
            'name' => 'required|min_length[3]',
            'description' => 'required|min_length[10]',
            'selling_price' => 'required|decimal',
            'mrp_price' => 'required|decimal',
            'stock' => 'required|integer',
            'product_image' => 'uploaded[product_image]|is_image[product_image]|max_size[product_image,2048]',
        ];
        if (! $this->validate($rules)) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $this->validator->getErrors()
            ]);
        }
        $data = [
            'name' => $this->request->getPost('name'),
            'slug' => url_title($this->request->getPost('name'), '-', true),
            'description' => $this->request->getPost('description'),
            'selling_price' => $this->request->getPost('selling_price'),
            'kit_details' => $this->request->getPost('kit_details'),
            'kit_count' => $this->request->getPost('kit_count'),
            'mrp_price' => $this->request->getPost('mrp_price'),
            'stock' => $this->request->getPost('stock'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        // Image upload (PUBLIC path)
        $image = $this->request->getFile('product_image');
        if ($image && $image->isValid()) {
            $newName = $image->getRandomName();
            $image->move(FCPATH . 'uploads/products/', $newName);
            $data['product_image'] = $newName;
        }
        // Insert into DB
        $productsModel = new \App\Models\Products();
        if (! $productsModel->insert($data)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Database insert failed'
            ]);
        }
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Product added successfully'
        ]);
    }
public function addPandit()
{
    if ($this->request->getMethod() !== 'POST') {
        $data['page'] = 'addpandit';
        return view('admin/index', $data);
    }

    // Validation rules
    $rules = [
        'name' => 'required|min_length[3]',
        'profile_image' => 'uploaded[profile_image]|is_image[profile_image]|max_size[profile_image,2048]',
        'experience_years' => 'required|integer|min_length[1]|max_length[2]',
        'specialization' => 'required|min_length[3]',
        'bio' => 'required|min_length[10]|max_length[500]',
    ];

    if (! $this->validate($rules)) {
        return $this->response->setJSON([
            'status' => 'error',
            'errors' => $this->validator->getErrors()
        ]);
    }
    $data = [
        'name' => $this->request->getPost('name'),
        'experience_years' => $this->request->getPost('experience_years'),
        'bio' => $this->request->getPost('bio'),
    ];

    // Process specialization array
    $specialization = $this->request->getPost('specialization');
    if (is_array($specialization)) {
        $data['specialization'] = implode(',', $specialization);
    }

    // Image upload (PUBLIC path)
    $image = $this->request->getFile('profile_image');
    if ($image && $image->isValid()) {
        $newName = $image->getRandomName();
        $image->move(FCPATH . 'uploads/pandits/', $newName);
        $data['profile_image'] = $newName;
    }

    // Insert into DB
    $panditsModel = new \App\Models\Pandits();

    if (! $panditsModel->insert($data)) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Database insert failed'
        ]);
    }

    return $this->response->setJSON([
        'status' => 'success',
        'message' => 'Pandit added successfully'
    ]);
}

    public function addFaq()
    {
        if ($this->request->getMethod() !== 'POST') {
            $data['page'] = 'addfaq';
            return view('admin/index', $data);
        }
        // Validation rules
        $rules = [
            'question' => 'required|min_length[5]',
            'answer' => 'required|min_length[10]',
        ];
        if (! $this->validate($rules)) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $this->validator->getErrors()
            ]);
        }
        $data = [
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        // Insert into DB
        $faqsModel = new \App\Models\Faqs();
        if (! $faqsModel->insert($data)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Database insert failed'
            ]);
        }
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'FAQ added successfully'
        ]);
    }
    public function addblog()
    {
        if ($this->request->getMethod() !== 'POST') {
            $data['page'] = 'addblog';
            return view('admin/index', $data);
        }
        // Validation rules
        $rules = [
            'title' => 'required|min_length[3]',
            'meta_description' => 'required|min_length[10]|max_length[300]',
            'meta_keywords' => 'required|min_length[3]|max_length[255]',
            'content' => 'required|min_length[20]',
            'blog_image' => 'uploaded[blog_image]|is_image[blog_image]|max_size[blog_image,2048]',
        ];
        if (! $this->validate($rules)) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $this->validator->getErrors()
            ]);
        }
        $data = [
            'title' => $this->request->getPost('title'),
            'slug' => url_title($this->request->getPost('title'), '-', true),
            'meta_description' => $this->request->getPost('meta_description'),
            'meta_keywords' => $this->request->getPost('meta_keywords'),
            'content' => $this->request->getPost('content'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        // Image upload (PUBLIC path)
        $image = $this->request->getFile('blog_image');
        if ($image && $image->isValid()) {
            $newName = $image->getRandomName();
            $image->move(FCPATH . 'uploads/blogs/', $newName);
            $data['blog_image'] = $newName;
        }
        // Insert into DB
        $blogsModel = new \App\Models\Blogs();
        if (! $blogsModel->insert($data)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Database insert failed'
            ]);
        }
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Blog added successfully'
        ]);
    }
    public function bloglist()
    {
        $blogsModel = new \App\Models\Blogs();
        $data['blogs'] = $blogsModel->findAll();
        $data['page'] = 'bloglist';
        return view('admin/index', $data);
    }
    public function bookings()
    {
        $data['page'] = 'bookings';
        return view('admin/index', $data);
    }
    public function bookingDetails()
    {
        $data['page'] = 'bookingdetails';
        return view('admin/index', $data);
    }
    public function orderdetails()
    {
        $data['page'] = 'orderdetails';
        return view('admin/index', $data);
    }
    public function orderhistory()
    {
        $data['page'] = 'orderhistory';
        return view('admin/index', $data);
    }
    public function orders()
    {
        $data['page'] = 'orders';
        return view('admin/index', $data);
    }
    public function addPooja()
    {
        if ($this->request->getMethod() === 'POST') {
            // Handle form submission here (validation, saving to DB, etc.)
            $rules = [
                'name' => 'required|min_length[3]',
                'description' => 'required|min_length[10]',
                'pooja_type' => 'required',
                'duration_minutes' => 'required|integer',
                'language' => 'required',
                'samagri_included' => 'required',
                'market_price' => 'required|decimal',
                'price' => 'required|decimal',
                'pooja_description' => 'required|min_length[20]',
                'significance' => 'required|min_length[20]',
                'full_desc' => 'required|min_length[50]',
                'meta_title' => 'required|min_length[5]',
                'meta_description' => 'required|min_length[10]|max_length[300]',
                'meta_keyword' => 'required|min_length[3]|max_length[255]',
                // Add more validation rules as needed
            ];
            if (! $this->validate($rules)) {
                return $this->response->setJSON([
                    'status' => 'error',
                    'errors' => $this->validator->getErrors()
                ]);
            }
            // If validation passes, save the pooja details to the database
            $data = [
                'name' => $this->request->getPost('name'),
                'slug' => url_title($this->request->getPost('name'), '-', true),
                'description' => $this->request->getPost('description'),
                'pooja_type' => $this->request->getPost('pooja_type'),
                'duration_minutes' => intval($this->request->getPost('duration_minutes')),
                'language' => $this->request->getPost('language'),
                'samagri_included' => $this->request->getPost('samagri_included'),
                'samagri_list' => $this->request->getPost('samagri_list'),
                'samagri_price' => floatval($this->request->getPost('samagri_price')),
                'market_price' => floatval($this->request->getPost('market_price')),
                'price' => floatval($this->request->getPost('price')),
                'pooja_description' => $this->request->getPost('pooja_description'),
                'significance' => $this->request->getPost('significance'),
                'full_desc' => $this->request->getPost('full_desc'),
                'meta_title' => $this->request->getPost('meta_title'),
                'meta_description' => $this->request->getPost('meta_description'),
                'meta_keywords' => $this->request->getPost('meta_keyword'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            //print_r(gettype($data['price'])); exit;
            // insert into db and get insert id
            $poojasModel = new \App\Models\Poojas();
            $inserted = $poojasModel->insert($data);
            if (! $inserted) {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Database insert failed'
                ]);
            }
            // save poojafaqs if any
            $questions = $this->request->getPost('faq_question');
            $answers   = $this->request->getPost('faq_answer');
            if ($questions && is_array($questions) && $answers && is_array($answers)) {
                $poojaFaqsModel = new \App\Models\PoojaFaqs();
                foreach ($questions as $index => $question) {
                    if (isset($answers[$index])) {
                        $poojaFaqsModel->insert([
                            'pooja_id' => $poojasModel->getInsertID(),
                            'question' => $question,
                            'answer' => $answers[$index],
                            'created_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s'),
                        ]);
                    }
                }
            }

            // insert pooja images if any
            $poojaId = $poojasModel->getInsertID();
            $images = $this->request->getFiles();
            if ($images) {
                foreach ($images['pooja_images'] as $image) {
                    if ($image && $image->isValid()) {
                        $newName = $image->getRandomName();
                        $image->move(FCPATH . 'uploads/poojas/', $newName);
                        // save image record in pooja_images table
                        $poojaImagesModel = new \App\Models\PoojaImaages();
                        $poojaImagesModel->insert([
                            'pooja_id' => $poojaId,
                            'image_path' => $newName,
                            'created_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s'),
                        ]);
                    }
                }
            }
            // For now, just return a success response
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Pooja added successfully'
            ]);
        }
        $data['page'] = 'addpooja';
        return view('admin/index', $data);
    }
    
public function poojaList()
{
    $this->db = Database::connect();
    $builder = $this->db->table('pooja');

    $builder->select(
        'pooja.*,
        (
            SELECT image_path
            FROM pooja_images
            WHERE pooja_images.pooja_id = pooja.id
            ORDER BY pooja_images.id ASC
            LIMIT 1
        ) AS image_path'
    );

 
    $data['poojas'] = $builder->get()->getResultArray();
    $data['page']   = 'poojalist';
    // print_r($data['poojas']);
    // exit;

    return view('admin/index', $data);
}


}