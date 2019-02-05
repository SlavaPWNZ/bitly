<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    public $timestamps = FALSE;
    public $result=[];

    public function Generator(){
        //тут пытался написать генератор с буквами, но это долго =)
        $time=time();
        return $time;
    }

    public function SaveURL($redirect_to){
        $newlink=$this->Generator();
        $row = new Links;
        $row->redirect_to = $redirect_to;
        $row->link = $newlink;
        $row->save();
        return $newlink;
    }

    public function AlreadyHaveURL($redirect_to){
        $result=Links::where('redirect_to', $redirect_to)->first();
        if (!empty($result)) {
            return $result->link;
        }
        else {
            return false;
        }
    }

    public function GetRedirectTo($link){
        $result=Links::where('link', $link)->first();
        if (!empty($result)) {
            return $result->redirect_to;
        }
        else {
            return false;
        }
    }

}
