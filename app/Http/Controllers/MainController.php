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
            $result['link'] = $links->AlreadyHaveURL($_POST["shorten_url"]);
            $result['have'] = true;
            if (!$result['link']) {
                $result['link'] = $links->SaveURL($_POST["shorten_url"]);
                $result['have'] = false;
            }
            $result['link']=$domain.$result['link'];
            return $result;
        }
    }

    public function redirect($link)
    {
        $links = new Links();
        $result = $links->GetRedirectTo($link);
        if ($result){
            return redirect($result);
        }
        else{
            abort(404);
        }
    }
}
