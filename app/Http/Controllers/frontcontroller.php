<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontcontroller extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function faq(){
        return view('front.faq');
    }
    public function faqDocs(){
        return view('front.recovery-document');
    }
}
