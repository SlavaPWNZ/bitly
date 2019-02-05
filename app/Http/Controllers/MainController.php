<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Links;

class MainController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function store()
    {
        if(isset($_POST["shorten_url"]))
        {
            $domain=env('APP_URL');
            $links = new Links();
            $result = $links->AlreadyHaveURL($_POST["shorten_url"]);
            if (!$result) $result = $links->SaveURL($_POST["shorten_url"]);
            return $domain.$result;
        }
    }
}
