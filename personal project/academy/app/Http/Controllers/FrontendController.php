<?php

namespace App\Http\Controllers;

use App\Models\AskCategory;
use App\Models\AskGpt;
use App\Models\Consultation;
use App\Models\CourseCategory;
use App\Models\Destination;
use App\Models\ProgramCourse;
use App\Models\ResourceBook;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){

        $testimonials = Testimonial::take(3)->get();
        $course_category = CourseCategory::all();
        $destinations = Destination::take(4)->get();
        return view('frontend.home', compact('course_category', 'testimonials','destinations'));
    }
    public function courses(){
        $course_category = CourseCategory::all();
        return view('frontend.course', compact('course_category'));
    }
    public function courses_category($name){
        $course_info = CourseCategory::where('course_code', '=', $name)->first();
        $courses = ProgramCourse::where('course_id', '=', $course_info->id)->get();
        return view('frontend.course_cat', compact('courses'));
    }
    public function courses_detail($title){
        $course = ProgramCourse::where('slug', '=', $title)->first();
        return view('frontend.course_detail', compact('course'));
    }
    public function resources(){
        $resources = ResourceBook::all();
        return view('frontend.resources', compact('resources'));
    }

    public function faq(){
        $category = AskCategory::all();
        return view('frontend.faq', compact('category'));
    }
    public function faq_category_d($ask_name){
        $ask_info = AskCategory::where('ask_code', '=', $ask_name)->first();
        $asks = AskGpt::where('askgpt_id', '=', $ask_info->id)->get();
        return view('frontend.faq_result', compact('asks', 'ask_info'));
    }
    public function about(){
        return view('frontend.about');
    }
    public function consultation(){
        return view('frontend.consultation');
    }

    public function auth_login(){
        return view('frontend.login');
    }
    public function auth_register(){
        return view('frontend.register');
    }

    public function consultation_add(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email'],
            'phone' => 'required',
            'country' => 'required',
            'education_level' => 'required',
        ]);
        $consultation = new Consultation;
        $consultation->first_name = $request->first_name;
        $consultation->last_name = $request->last_name;
        $consultation->email = $request->email;
        $consultation->phone = $request->phone;
        $consultation->country = $request->country;
        $consultation->education_level = $request->education_level;
        $consultation->save();
        $notification = array(
            'message' => 'Consultation request successfully sent, we will get back to you shortly',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function destination_detail($id){
        $destination = Destination::findOrFail($id);
        return view('frontend.destination_detail', compact('destination'));
    }
}