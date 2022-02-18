<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\course;

class homeController extends Controller
{
    public $course;
    public function __construct(course $course)
    {
        $this->course = $course;
    }
    public function index(){
        $course_footer = $this->course->take(3)->get();
        $data_course = $this->course->paginate(6);
        return view('client.home',compact('data_course','course_footer'));
    }
    public function course_single($id){
        if (auth()->check()) {
            $course_footer = $this->course->take(3)->get();
            $item_course = $this->course->find($id);
            return view('client.course-3',compact('item_course','course_footer'));
        }else{
            return redirect()->route('logins.form');
        }
        
    }
    public function about(){
        $course_footer = $this->course->take(3)->get();
        return view('client.about',compact('course_footer'));
    }
    public function contact(){
        $course_footer = $this->course->take(3)->get();
        return view('client.contact',compact('course_footer'));
    }
}
