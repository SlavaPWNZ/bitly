<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Links;

class MainController extends Controller
{
    public function index()
    {
        if(isset($_POST["action"]))
        {
            if($_POST["action"] == "Load") return $this->post_load();
            elseif($_POST["action"] == "Create") return $this->post_create();
        }
        else{
            return view('main');
        }
    }
}
