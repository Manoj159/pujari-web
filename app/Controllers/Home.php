<?php

namespace App\Controllers;
use Config\Database;

class Home extends BaseController
{
    private $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        
        
    }
    public function index(): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $pandits = new \App\Models\Pandits();
        $poojas = new \App\Models\Poojas();
        $data['pandits'] = $pandits->where('status', 1)->findAll(5);
        $data['poojas'] = $poojas->get_poojas();
        $data['page'] = 'home';
        // print_r($data['poojas']); exit;

        return view('index', $data);
    }
    public function about_us(): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'about-us';

        return view('index', $data);
    }
    public function blogs(): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'blogs';

        return view('index', $data);
    }
    public function blog($slug): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'blog-details';

        return view('index', $data);
    }

public function contact_us()
{
    if ($this->request->getMethod() === 'post') {

        $validation = \Config\Services::validation();
        $validation->setRules([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|valid_email',
            'subject'    => 'required',
            'message'    => 'required'
        ]);

        if (!$validation->run()) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => implode('<br>', $validation->getErrors()),
                'csrf'    => csrf_hash()  
            ]);
        }

        $contactRequestsModel = new \App\Models\Contactrequests();
        $contactRequestsModel->insert([
            'name'    => $this->request->getPost('first_name') . ' ' . $this->request->getPost('last_name'),
            'email'   => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ]);

        return $this->response->setJSON([
            'status'  => 'success',
            'message' => 'Your contact request has been submitted successfully.',
            'csrf'    => csrf_hash() 
        ]);
    }

    $data = $this->data;
    $data['pageTitle']        = 'Home';
    $data['pageDescription'] = 'Welcome to Pujari Web';
    $data['page']            = 'contact-us';

    return view('index', $data);
}


    public function disclaimers(): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'disclaimers';
        return view('index', $data);
    }

    public function faqs(): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'faq';
        return view('index', $data);
    }

    public function our_pandits(): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'our-pandits';
        return view('index', $data);
    }

    public function pandit_greater(): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'pandit-greater';
        return view('index', $data);
    }

    public function privacy_policy(): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'privacy-policy';
        return view('index', $data);
    }
    public function products(): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'products';
        return view('index', $data);
    }
    public function pooja_list(): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'pooja-list';
        return view('index', $data);
    }

    public function terms(): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'terms';
        return view('index', $data);
    }
    
    public function bookingdetails(): string
    {
        $this->db = Database::connect();
        $pooja = $this->db->table('pooja')
                    ->select('*')
                    ->where('slug', $this->request->getGet('pooja'))
                    ->limit(1)
                    ->get()
                    ->getRowArray();
        $pooja_images = $this->db->table('pooja_images')
                    ->select('image_path')
                    ->where('pooja_id', $pooja['id'])
                    ->get()
                    ->getResultArray();
        $pooja_faqs = $this->db->table('pooja_faqs')
                    ->select('question, answer')
                    ->where('pooja_id', $pooja['id'])
                    ->get()
                    ->getResultArray();
        
        $pooja['faqs'] = $pooja_faqs;
        $pooja['images'] = $pooja_images;
        $data['pooja'] = $pooja;
        //print_r( $data['pooja']); exit;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'bookingdetails';
        return view('index', $data);
    }

}
