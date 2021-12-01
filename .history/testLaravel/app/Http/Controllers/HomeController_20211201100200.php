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

    public function getData($id = null)
    {
        return "getData " . $id;
    }

    public function update($id)
    {
        return "update " . $id;
    }

    public function upload($id)
    {
        return "upload " . $id;
    }

    public function delete($id)
    {
        return "delete " . $id;
    }
}
