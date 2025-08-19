<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AdminModel as AdminModel;

class Dashboard extends BaseController
{

    protected $adminModel;
    protected $session;
    protected $validation;
    protected $request;
    public function __construct()
    {
        $this->adminModel = new AdminModel(); // load model
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();
        $this->request = \Config\Services::request();
        helper(['form', 'url']);
    }

    public function login()
    {
        $response  = ['message' => ''];

        // If already logged in, redirect to dashboard
        if ($this->session->get('is_admin_logged_in')) {
            return redirect()->to(base_url('admin/dashboard'));
        }

        if ($this->request->getMethod() === 'POST') {
            $data = $this->request->getPost();

            if ($data['user_id'] === 'newAdmin' && $data['password'] === 'nww@it8fol') {
                $guard = md5(rand(100000, 999999));

                $this->session->set([
                    'is_admin_logged_in' => true,
                    'admin_id'           => $data['user_id'],
                    'role'               => 'A',
                    'guard'              => $guard,
                ]);

                return redirect()->to(base_url('admin/dashboard'));
            } else {
                $response['message'] = '❌ Invalid Credentials';
            }
        }

        // Load login view
        return view('admin/login', $response);
    }

    public function logout()
    {
        $session = session();
        $session->destroy(); // Destroy all session data

        return redirect()->to(base_url('admin/login'))->with('message', '✅ Logged out successfully');
    }

    // public function login()
    // {
    //     helper(['form', 'url']);


    //     $response  = ['message' => ''];

    //     // If already logged in, redirect
    //     if ($this->session->get('is_admin_logged_in')) {
    //         return redirect()->to(base_url('admin/dashboard'));
    //     }

    //     if ($this->request->getMethod() === 'post') {
    //         // Form validation rules
    //         $rules = [
    //             'user_id'  => 'required|trim',
    //             'password' => 'required|trim',
    //         ];

    //         if ($this->validate($rules)) {
    //             $data = $this->request->getPost();

    //             if ($data['user_id'] === 'newAdmin' && $data['password'] === 'nww@it8fol') {
    //                 $guard = md5(rand(100000, 999999));

    //                 $this->session->set([
    //                     'is_admin_logged_in' => true,
    //                     'admin_id'           => $data['user_id'],
    //                     'role'               => 'A',
    //                     'guard'              => $guard,
    //                 ]);

    //                 return redirect()->to(base_url('admin/dashboard'));
    //             } else {
    //                 $response['message'] = 'Invalid Credentials';
    //             }
    //         } else {
    //             $response['message'] = 'Invalid Validation!';
    //         }
    //     }

    //     // load login view
    //     return view('admin/login', $response);
    // }

    public function index(): string
    {
        return view('admin/dashboard');
    }

    public function create(): string
    {
        return view('admin/createproject');
    }


    public function report(): string
    {
        return view('admin/report');
    }

    public function profile(): string
    {
        return view('admin/userprofile');
    }


    public function texteditor(): string
    {
        return view('admin/texteditor');
    }

    public function add() {}
}
