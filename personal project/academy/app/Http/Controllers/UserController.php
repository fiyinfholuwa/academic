<?php

namespace App\Http\Controllers;

use App\Models\AppChat;
use App\Models\NewApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(){
        $applications = NewApplication::where('user_id', '=', Auth::user()->id)->get();
        return view('frontend.profile', compact('applications'));
    }

    public function user_application(){

        return view('frontend.application');
    }

    public function user_track($id){
        $application = NewApplication::findOrFail($id);
        return view('frontend.track', compact('application'));
    }
    public function user_chat($id){
        $chats = AppChat::where('app_id', '=', $id)->get();
        $application = NewApplication::findOrFail($id);
        return view('frontend.chat', compact('application', 'chats'));
    }

    public function user_application_save(Request $request){

        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'dob' => 'required',
            'program' => 'required',
            'course' => 'required',
            'country' => 'required',
            'year' => 'required',
        ]);

        $randomID = rand(100000, 999999);

        // dd("hello");
        $add_application = new NewApplication;
        if ($request->hasFile('previous_work')) {
            $previous_work = $request->file('previous_work');
            $extension = $previous_work->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $previous_work->storeAs( '/previous_work' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_previous_work = "storage/previous_work/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_previous_work = NULL;
        }

        if ($request->hasFile('gre_score')) {
            $gre_score = $request->file('gre_score');
            $extension = $gre_score->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $gre_score->storeAs( '/gre_score' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_gre_score = "storage/gre_score/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_gre_score = NULL;
        }

        if ($request->hasFile('certification')) {
            $certification = $request->file('certification');
            $extension = $certification->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $certification->storeAs( '/certification' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_certification = "storage/certification/" . $file_unique_name . "_ancile" . "." .$filename;

        }else{
            $path_certification = NULL;
        }

        if ($request->hasFile('recommendation')) {
            $recommendation = $request->file('recommendation');
            $extension = $recommendation->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $recommendation->storeAs( '/recommendation' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_recommendation = "storage/recommendation/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_recommendation = NULL;
        }

        if ($request->hasFile('mark_sheet_11_12')) {
            $mark_sheet_11_12 = $request->file('mark_sheet_11_12');
            $extension = $mark_sheet_11_12->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $mark_sheet_11_12->storeAs( '/mark_sheet_11_12' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_mark_sheet_11_12 = "storage/mark_sheet_11_12/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_mark_sheet_11_12 = NULL;
        }


        if ($request->hasFile('mark_sheet_10')) {
            $mark_sheet_10 = $request->file('mark_sheet_10');
            $extension = $mark_sheet_10->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $mark_sheet_10->storeAs( '/mark_sheet_10' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_mark_sheet_10 = "storage/mark_sheet_10/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_mark_sheet_10 = NULL;
        }

        if ($request->hasFile('birth_certificate')) {
            $birth_certificate = $request->file('birth_certificate');
            $extension = $birth_certificate->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $birth_certificate->storeAs( '/birth_certificate' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_birth_certificate = "storage/birth_certificate/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_birth_certificate= NULL;
        }

        if ($request->hasFile('passport')) {

            $passport = $request->file('passport');
            $extension = $passport->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $passport->storeAs( '/passport' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_passport = "storage/passport/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_passport = NULL;
        }
        $add_application->full_name = $request->full_name;
        $add_application->email = $request->email;
        $add_application->mobile = $request->mobile;
        $add_application->gre_score = $path_gre_score;
        $add_application->previous_work = $path_previous_work;
        $add_application->certification = $path_certification;
        $add_application->extra_curriculum = $request->extra_curriculum;
        $add_application->recommendation = $path_recommendation;
        $add_application->dob = $request->dob;
        $add_application->mark_sheet_11_12 = $path_mark_sheet_11_12;
        $add_application->mark_sheet_10 = $path_mark_sheet_10;
        $add_application->birth_certificate = $path_birth_certificate;
        $add_application->passport = $path_passport;
        $add_application->app_uid = "ID".$randomID;
        $add_application->program = $request->program;
        $add_application->course= $request->course;
        $add_application->country= $request->country;
        $add_application->year= $request->year;
        $add_application->user_id = Auth::user()->id;
        $add_application->status = "pending";
        $add_application->save();
        $notification = array(
            'message' => 'Application successfully saved',
            'alert-type' => 'success'
        );
        return redirect()->route('profile')->with($notification);

    }


    public function user_chat_add(Request $request){
        $chat = new AppChat;

        if ($request->hasFile('pdf')){
            $image = $request->file('pdf');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $directory = 'uploads/chats/';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $image->move($directory, $filename);
            $path = $directory . $filename;
        }else{
            $path = NULL;
        }
        $chat->app_id = $request->app_id;
        $chat->message = $request->message;
        $chat->user_type ="user";
        $chat->user_id = Auth::user()->id;
        $chat->pdf = $path;
        $chat->user_status= "read";
        $chat->save();
        $notification = array(
            'message' => 'Message Sent',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function user_application_edit($id){
        $application = NewApplication::findOrFail($id);
        return view('frontend.application_edit', compact('application'));
    }

    public function user_application_update(Request $request, $id){

        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'dob' => 'required',
            'program' => 'required',
            'course' => 'required',
            'country' => 'required',
            'year' => 'required',
        ]);

        $randomID = rand(100000, 999999);

        // dd("hello");
        $add_application = NewApplication::findOrFail($id);
        if ($request->hasFile('previous_work')) {
            $previous_work = $request->file('previous_work');
            $extension = $previous_work->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $previous_work->storeAs( '/previous_work' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_previous_work = "storage/previous_work/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_previous_work = NULL;
        }

        if ($request->hasFile('gre_score')) {
            $gre_score = $request->file('gre_score');
            $extension = $gre_score->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $gre_score->storeAs( '/gre_score' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_gre_score = "storage/gre_score/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_gre_score = NULL;
        }

        if ($request->hasFile('certification')) {
            $certification = $request->file('certification');
            $extension = $certification->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $certification->storeAs( '/certification' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_certification = "storage/certification/" . $file_unique_name . "_ancile" . "." .$filename;

        }else{
            $path_certification = NULL;
        }

        if ($request->hasFile('recommendation')) {
            $recommendation = $request->file('recommendation');
            $extension = $recommendation->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $recommendation->storeAs( '/recommendation' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_recommendation = "storage/recommendation/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_recommendation = NULL;
        }

        if ($request->hasFile('mark_sheet_11_12')) {
            $mark_sheet_11_12 = $request->file('mark_sheet_11_12');
            $extension = $mark_sheet_11_12->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $mark_sheet_11_12->storeAs( '/mark_sheet_11_12' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_mark_sheet_11_12 = "storage/mark_sheet_11_12/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_mark_sheet_11_12 = NULL;
        }


        if ($request->hasFile('mark_sheet_10')) {
            $mark_sheet_10 = $request->file('mark_sheet_10');
            $extension = $mark_sheet_10->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $mark_sheet_10->storeAs( '/mark_sheet_10' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_mark_sheet_10 = "storage/mark_sheet_10/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_mark_sheet_10 = NULL;
        }

        if ($request->hasFile('birth_certificate')) {
            $birth_certificate = $request->file('birth_certificate');
            $extension = $birth_certificate->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $birth_certificate->storeAs( '/birth_certificate' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_birth_certificate = "storage/birth_certificate/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_birth_certificate= NULL;
        }

        if ($request->hasFile('passport')) {

            $passport = $request->file('passport');
            $extension = $passport->getClientOriginalName();
            $filename = $extension;
            $file_unique_name = uniqid();
            $passport->storeAs( '/passport' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
            $path_passport = "storage/passport/" . $file_unique_name . "_ancile" . "." .$filename;
        }else{
            $path_passport = NULL;
        }
        $add_application->full_name = $request->full_name;
        $add_application->email = $request->email;
        $add_application->mobile = $request->mobile;
        $add_application->gre_score = $path_gre_score;
        $add_application->previous_work = $path_previous_work;
        $add_application->certification = $path_certification;
        $add_application->extra_curriculum = $request->extra_curriculum;
        $add_application->recommendation = $path_recommendation;
        $add_application->mark_sheet_11_12 = $path_mark_sheet_11_12;
        $add_application->mark_sheet_10 = $path_mark_sheet_10;
        $add_application->birth_certificate = $path_birth_certificate;
        $add_application->passport = $path_passport;
        $add_application->program = $request->program;
        $add_application->course= $request->course;
        $add_application->country= $request->country;
        $add_application->year= $request->year;
        $add_application->dob = $request->dob;

        $add_application->app_uid = "ID".$randomID;
        $add_application->user_id = Auth::user()->id;
        $add_application->save();
        $notification = array(
            'message' => 'Application successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('profile')->with($notification);

    }


}
