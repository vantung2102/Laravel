<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        return "home";
    }

    public function getData($id)
    {
        return "getData " . $id;
    }

    public function update($id)
    {
        return "update " . $id;
    }

    public function upload()
    {
    }

    public function delete()
    {
    }
}
