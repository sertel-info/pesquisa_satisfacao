<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SessionController extends Controller
{
    public static function flashMessage($type, $title, $message){
    	Session::flash("msg_type", $type);
    	Session::flash("msg_title", $title);
    	Session::flash("msg_txt", $message);
    }
}
