<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function __construct()
    {
        if(session()->get('admin_logged_in')){
            return redirect()->to('/admin/dashboard/');
        }
        
    }

   public function login(){
        if(session()->get('admin_logged_in')){
            return redirect()->to('/admin/dashboard/');
        }
        return view('admin/login');
    }
    public function log_in(){
        $username = $this->request->getPost('username');
        // verify credentials
        $this->db = \Config\Database::connect();
        $adminData = $this->db->table('managers')->where('username', strtolower($username))->get()->getRow();




        if($username === $adminData->username && password_verify($this->request->getPost('password'), $adminData->password)){
            $token = bin2hex(random_bytes(32));
            session()->set('admin_logged_in', true);
            session()->set('admin_token', $token);
            session()->set('user_role',$adminData->role);
            $this->db->table('managers')->where('username', strtolower($username))->update(['token' => $token]);

            return json_encode(['status' => 'success', 'message' => 'Login successful. Redirecting...']);
        } else {
            session()->setFlashdata('error', 'Invalid username or password.');
            return json_encode(['status' => 'error', 'message' => 'Invalid username or password.']);
        }
    }
}