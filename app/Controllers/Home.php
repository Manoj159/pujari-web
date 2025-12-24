<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'home';

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
    public function booking_details($slug): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'bookingdetails';

        return view('index', $data);
    }
    public function contact_us(): string
    {
        $data = $this->data;
        $data['pageTitle']       = 'Home';
        $data['pageDescription'] = 'Welcome to Pujari Web';
        $data['page'] = 'contact-us';

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
    

}
