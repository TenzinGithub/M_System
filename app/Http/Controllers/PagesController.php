<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PagesController extends Controller{
    public function getAbout(){
        return view('pages.about');
    }

    public function getContact(){
        return view('pages.contact');
    }
    public function getStaffinfo(){
        return view('pages.staffinfo');
    }
    public function getStudentinfo(){
        return view('pages.studentinfo');
    }
}