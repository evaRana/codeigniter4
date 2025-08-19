<?php

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Api\User_model as UserModel;

class User extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */

    protected $format = 'json';
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel(); // load model
    }

    public function index()
    {
        // Fetch all users
        $data = $this->userModel->get_records('tbl_users', [], 'name,email');

        // $singleUser = $this->userModel->get_single_record('tbl_users', [], '*');

        // foreach ($data as $key => $value) {
        //     $data[$key]['name'] = ucfirst($value['name']);
        // }
        return $this->respond([
            'status'  => true,
            'data'    => $data,
            // 'singleUser' => $singleUser['name']
        ]);
    }

}
