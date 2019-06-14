<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PagesController extends Controller{
    public function getAbout(){
        return view('pages.about');
    }
    public function getTeachingstaffinfo(){
        return view('pages.teachingstaffinfo');
    }
    public function getNonteachingstaffinfo(){
        return view('pages.non-teachingstaffinfo');
    }
    public function getBoardingstudent(){
        return view('pages.boardingstudent');
    }
    
    public function getDayschoolstudent(){
        return view('pages.dayschoolstudent');
    }
    public function getAnnouncement(){
        return view('pages.announcement');
    }
    public function getGallery(){
        return view('pages.gallery');
    }
    public function getContact(){
        return view('pages.contact');
    }
}