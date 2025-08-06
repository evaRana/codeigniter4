<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
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

    public function add()
    {

    }

}

?>