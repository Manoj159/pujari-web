<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        return view('user/login');
    }
    public function signup()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // save user to database
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->insert($data);
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Account created successfully!'
        ]);
    }
    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // check user in database
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $user = $builder->where('email', $email)->get()->getRow();

        if ($user && password_verify($password, $user->password)) {
            // set session
            $token = bin2hex(random_bytes(16));
            session()->set('token', $token);
            $logdata = [
                'token' => $token,
                'token_creation_time' => date('Y-m-d H:i:s'),
                'token_expiry_time' => date('Y-m-d H:i:s', strtotime('+720 hour')),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $db->table('users')->where('id', $user->id)->update($logdata);
            session()->set('user_logged_in', true);
            session()->set('user_name', $user->name);
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Login successful!'
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Invalid email or password'
            ]);
        }
    }
    public function dashboard()
    {
        return view('user/dashboard');
    }
    public function order_details()
    {
        return view('user/order_details');
        
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/user-auth/login');
    }

    public function profile()
    {
        // get user details from database
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $user = $builder->where('token', session()->get('token'))->get()->getRow();
        $userDetails = $db->table('user_details')->where('user_id', $user->id)->get()->getRow();
        return $this->response->setJSON([
            'success' => true,
            'data' => [
                'user' => $user,
                'details' => $userDetails
            ]
        ]);
        
    }
}
