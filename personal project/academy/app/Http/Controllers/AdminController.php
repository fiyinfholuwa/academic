<?php

namespace App\Http\Controllers;

use App\Models\AskCategory;
use App\Models\AskGpt;
use App\Models\Country;
use App\Models\CourseCategory;
use App\Models\Destination;
use App\Models\ProgramCourse;
use App\Models\ResourceBook;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Status;
use App\Models\AdminRole;
use App\Models\NewApplication;
use Mail;
use App\Models\Consultation;
use Illuminate\Support\Facades\Hash;
use App\Mail\RegisterationEmail;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function user_view(){
        $users = User::where('user_type', '=', 1)->get();
        return view('backend.user_view', compact('users'));
    }

    public function user_add_view(){
        return view('backend.user_add');
    }

    public function admin_user_edit($id){
        $user = User::findOrFail($id);
        return view('backend.user_edit', compact('user'));
    }


    public function admin_user_block(Request $request, $id){
        $user = User::findOrFail($id);
        $user->block = $request->status;
        $user->save();
        $notification = array(
            'message' => 'User Successfully blocked',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_user_delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        $notification = array(
            'message' => 'User Successfully deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }



    public function admin_user_save(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => 'required',
            'alt_phone' => 'required',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);

        $min = 100000;
        $max = 999999;
        $randomNumber = rand($min, $max);
        $password = "student".$randomNumber;
        $add_user = new User;
        $add_user->first_name = $request->first_name;
        $add_user->last_name= $request->last_name;
        $add_user->email = $request->email;
        $add_user->phone = $request->phone;
        $add_user->alt_phone = $request->alt_phone;
        $add_user->address= $request->address;
        $add_user->country = $request->country;
        $add_user->city = $request->city;
        $add_user->user_type = 1;
        $add_user->password = Hash::make($password);
        $add_user->save();

        $message = 'Dear ' . $request->first . ',' . PHP_EOL . PHP_EOL .
        'Please Find attach below to your login detail. thank you.';
         $mailData = [
            'password' => $password,
            'message' => $message,
            'email' => $request->email
        ];
        Mail::to($request->email)->send(new RegisterationEmail($mailData));
        $notification = array(
            'message' => 'User Successfully saved',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_user_update(Request $request, $id){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'alt_phone' => 'required',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);
        $update_user = User::findOrFail($id);
        $update_user->first_name = $request->first_name;
        $update_user->last_name= $request->last_name;
        $update_user->email = $request->email;
        $update_user->phone = $request->phone;
        $update_user->alt_phone = $request->alt_phone;
        $update_user->address= $request->address;
        $update_user->country = $request->country;
        $update_user->city = $request->city;
        $update_user->save();
        $notification = array(
            'message' => 'User Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('user.view')->with($notification);
    }
    public function consultation_all(){
        $consultations= Consultation::all();
        $statuses = Status::all();
        return view('backend.consultation_all', compact('consultations', 'statuses'));
    }

    public function consultation_delete($id){
        $consultation= Consultation::findOrFail($id);
        $consultation->delete();
        $notification = array(
            'message' => 'Consultation Successfully deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function counsellor_view(){
        return view('backend.counsellor_view');
    }

    public function admin_counsellor_save(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => 'required',
        ]);

        $min = 100000;
        $max = 999999;
        $randomNumber = rand($min, $max);
        $password = "counsellor".$randomNumber;
        $add_user = new User;
        $add_user->first_name = $request->first_name;
        $add_user->last_name= $request->last_name;
        $add_user->email = $request->email;
        $add_user->phone = $request->phone;
        $add_user->user_type = 1;
        $add_user->password = Hash::make($password);
        $add_user->save();

        $message = 'Dear ' . $request->first . ',' . PHP_EOL . PHP_EOL .
        'Please Find attach below to your login detail. thank you.';
         $mailData = [
            'password' => $password,
            'message' => $message,
            'email' => $request->email
        ];
        Mail::to($request->email)->send(new RegisterationEmail($mailData));
        $notification = array(
            'message' => 'Counsellor Successfully saved',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function counsellor_update(Request $request, $id){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email'],
            'phone' => 'required',
        ]);

        $update_user = User::findOrFail($id);
        $update_user->first_name = $request->first_name;
        $update_user->last_name= $request->last_name;
        $update_user->email = $request->email;
        $update_user->phone = $request->phone;
        $update_user->user_type = 1;
        $update_user->save();
        $notification = array(
            'message' => 'Counsellor Successfully updated',
            'alert-type' => 'success'
        );
        return redirect()->route('counsellor.all')->with($notification);
    }

    public function admin_counsellor_block(Request $request, $id){
        $user = User::findOrFail($id);
        $user->block = $request->status;
        $user->save();
        $notification = array(
            'message' => 'Counsellor Successfully blocked',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_counsellor_delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        $notification = array(
            'message' => 'Counsellor Successfully deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function counsellor_edit($id){
        $user = User::findOrFail($id);
        return view('backend.counsellor_edit', compact('user'));
    }

    public function counsellor_all(){
        $users = User::where('user_type', '=', 1)->get();
        return view('backend.counsellor_all', compact('users'));
    }

    public function application_view(){
        return view('backend.application_view');
    }

    public function application_all(){
        $applications = NewApplication::all();
        $counsellors = User::where('user_type', '=', 1)->get();
        $statuses = Status::all();
        return view('backend.application_all', compact('applications', 'counsellors', 'statuses'));
    }

    public function status_view(){
        $statuses = Status::all();
        return view('backend.status_view', compact('statuses')) ;
    }

    public function status_add(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $add_status = new Status;
        $add_status->name = $request->name;
        $add_status->save();
        $notification = array(
            'message' => 'Status Successfully saved',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function status_delete($id){

        $delete_status =  Status::findOrFail($id);
        $delete_status->delete();
        $notification = array(
            'message' => 'Status Successfully deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function status_edit($id){

        $status =  Status::findOrFail($id);
        $statuses = Status::all();
        return view('backend.status_edit', compact('statuses', 'status'));
    }

    public function status_update(Request $request, $id){
        $update_status =  Status::findOrFail($id);
        $update_status->name = $request->name;
        $update_status->save();
        $notification = array(
            'message' => 'Status Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('status.view')->with($notification);
    }

    public function admin_profile_view(){
        return view('backend.admin_profile_view');
    }

    public function admin_profile_update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();
        $notification = array(
            'message' => 'Profile successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_password_update(Request $request){
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = auth()->user();

        $notification = array(
            'message' => 'The current password is incorrect.',
            'alert-type' => 'error'
        );
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with($notification);
        }
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        $notification = array(
            'message' => 'Password successfully changed',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }

    public function logout(){
        Session::flush();
         Auth::logout();
        return Redirect()->route('home');
    }


    public function admin_application_save(Request $request){

        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'mobile' => 'required'
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
        $add_application->mark_sheet_11_12 = $path_mark_sheet_11_12;
        $add_application->mark_sheet_10 = $path_mark_sheet_10;
        $add_application->birth_certificate = $path_birth_certificate;
        $add_application->passport = $path_passport;
        $add_application->app_uid = "ID".$randomID;
        $add_application->user_id = Auth::user()->id;
        $add_application->status = "pending";
        $add_application->save();
        $notification = array(
            'message' => 'Application successfully saved',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }

    public function admin_application_assigned(Request $request, $id){
        $app = NewApplication::findOrFail($id);
        $app->assigned_id = $request->assigned_id;
        $app->save();
        $notification = array(
            'message' => 'Counsellor successfully assigned to this application.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_application_status(Request $request, $id){
        $app = NewApplication::findOrFail($id);
        $app->status = $request->status;
        $app->save();
        $notification = array(
            'message' => 'Status successfully assigned to this application.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_application_edit($id){
        $app = NewApplication::findOrFail($id);
        return view('backend.application_edit', compact('app'));
    }


    public function admin_application_update(Request $request, $id){

        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'mobile' => 'required'
        ]);

        // dd("hello");
        $update_application =  NewApplication::findOrFail($id);
    if ($request->hasFile('previous_work')) {
        $previous_work = $request->file('previous_work');
        $extension = $previous_work->getClientOriginalName();
        $filename = $extension;
        $file_unique_name = uniqid();
        $previous_work->storeAs( '/previous_work' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
        $path_previous_work = "storage/previous_work/" . $file_unique_name . "_ancile" . "." .$filename;
    }else{
        $path_previous_work = $update_application->previous_work;
    }

    if ($request->hasFile('gre_score')) {
        $gre_score = $request->file('gre_score');
        $extension = $gre_score->getClientOriginalName();
        $filename = $extension;
        $file_unique_name = uniqid();
        $gre_score->storeAs( '/gre_score' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
        $path_gre_score = "storage/gre_score/" . $file_unique_name . "_ancile" . "." .$filename;
    }else{
        $path_gre_score = $update_application->gre_score;
    }

    if ($request->hasFile('certification')) {
        $certification = $request->file('certification');
        $extension = $certification->getClientOriginalName();
        $filename = $extension;
        $file_unique_name = uniqid();
        $certification->storeAs( '/certification' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
        $path_certification = "storage/certification/" . $file_unique_name . "_ancile" . "." .$filename;

    }else{
        $path_certification = $update_application->certification;
    }

    if ($request->hasFile('recommendation')) {
        $recommendation = $request->file('recommendation');
        $extension = $recommendation->getClientOriginalName();
        $filename = $extension;
        $file_unique_name = uniqid();
        $recommendation->storeAs( '/recommendation' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
        $path_recommendation = "storage/recommendation/" . $file_unique_name . "_ancile" . "." .$filename;
    }else{
        $path_recommendation = $update_application->recommendation;
    }

    if ($request->hasFile('mark_sheet_11_12')) {
        $mark_sheet_11_12 = $request->file('mark_sheet_11_12');
        $extension = $mark_sheet_11_12->getClientOriginalName();
        $filename = $extension;
        $file_unique_name = uniqid();
        $mark_sheet_11_12->storeAs( '/mark_sheet_11_12' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
        $path_mark_sheet_11_12 = "storage/mark_sheet_11_12/" . $file_unique_name . "_ancile" . "." .$filename;
    }else{
        $path_mark_sheet_11_12 = $update_application->mark_sheet_11_12;
    }


    if ($request->hasFile('mark_sheet_10')) {
        $mark_sheet_10 = $request->file('mark_sheet_10');
        $extension = $mark_sheet_10->getClientOriginalName();
        $filename = $extension;
        $file_unique_name = uniqid();
        $mark_sheet_10->storeAs( '/mark_sheet_10' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
        $path_mark_sheet_10 = "storage/mark_sheet_10/" . $file_unique_name . "_ancile" . "." .$filename;
    }else{
        $path_mark_sheet_10 = $update_application->mark_sheet_10;
    }

    if ($request->hasFile('birth_certificate')) {
        $birth_certificate = $request->file('birth_certificate');
        $extension = $birth_certificate->getClientOriginalName();
        $filename = $extension;
        $file_unique_name = uniqid();
        $birth_certificate->storeAs( '/birth_certificate' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
        $path_birth_certificate = "storage/birth_certificate/" . $file_unique_name . "_ancile" . "." .$filename;
    }else{
        $path_birth_certificate= $update_application->birth_certificate;
    }

    if ($request->hasFile('passport')) {

        $passport = $request->file('passport');
        $extension = $passport->getClientOriginalName();
        $filename = $extension;
        $file_unique_name = uniqid();
        $passport->storeAs( '/passport' , "/" . $file_unique_name . "_ancile" . "." .$filename, 'public');
        $path_passport = "storage/passport/" . $file_unique_name . "_ancile" . "." .$filename;
    }else{
        $path_passport = $update_application->passport;
    }
        $update_application->full_name = $request->full_name;
        $update_application->email = $request->email;
        $update_application->mobile = $request->mobile;
        $update_application->gre_score = $path_gre_score;
        $update_application->previous_work = $path_previous_work;
        $update_application->certification = $path_certification;
        $update_application->extra_curriculum = $request->extra_curriculum;
        $update_application->recommendation = $path_recommendation;
        $update_application->mark_sheet_11_12 = $path_mark_sheet_11_12;
        $update_application->mark_sheet_10 = $path_mark_sheet_10;
        $update_application->birth_certificate = $path_birth_certificate;
        $update_application->passport = $path_passport;
        $update_application->user_id = Auth::user()->id;
        $update_application->save();
        $notification = array(
            'message' => 'Application successfully updated',
            'alert-type' => 'success'
        );
        return redirect()->route('application.all')->with($notification);

    }

    public function admin_counsellor_applications($id){
        $applications = NewApplication::where('assigned_id', '=', $id)->get();
        $counsellors = User::where('user_type', '=', 1)->get();
        $statuses = Status::all();
        $user = User::findorFail($id);
        return view('backend.application_counsellor', compact('applications', 'counsellors', 'statuses', 'user'));
    }

    public function admin_consultation_status(Request $request, $id){
        $app = Consultation::findOrFail($id);
        $app->status = $request->status;
        $app->save();
        $notification = array(
            'message' => 'Status successfully assigned to this consultation.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function admin_application_delete($id){
        $app = NewApplication::findOrFail($id);
        $app->delete();
        $notification = array(
            'message' => 'Application successfully deleted.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function role_view(){
        $roles = AdminRole::all();
        return view('backend.role_view', compact('roles')) ;
    }

    public function role_add(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $add_role = new AdminRole;
        $add_role->name = $request->name;
        $add_role->save();
        $notification = array(
            'message' => 'role Successfully saved',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function role_delete($id){

        $delete_role =  AdminRole::findOrFail($id);
        $delete_role->delete();
        $notification = array(
            'message' => 'Role Successfully deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function role_permission($id){
        $role =  AdminRole::findOrFail($id);
        return view('backend.role_permission', compact('role'));
    }

    public function role_permission_set(Request $request, $id){
        $role =  AdminRole::findOrFail($id);
        $role->permission = $request->permission;
        $role->save();
        $notification = array(
            'message' => 'Permission Successfully Set',
            'alert-type' => 'success'
        );
        return redirect()->route('role.view')->with($notification);
    }

    public function role_edit($id){

        $role =  AdminRole::findOrFail($id);
        $roles = AdminRole::all();
        return view('backend.role_edit', compact('roles', 'role'));
    }

    public function role_update(Request $request, $id){
        $update_role =  AdminRole::findOrFail($id);
        $update_role->name = $request->name;
        $update_role->save();
        $notification = array(
            'message' => 'Role Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('role.view')->with($notification);
    }



    public function admin_manager_view(){
        $roles = AdminRole::all();
        $users = User::whereNotNull('user_role')->where('user_type', 2)->get();
        return view('backend.admin_manager_view', compact('roles', 'users'));
    }

    public function admin_admin_manager_save(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => 'required',
            'user_role' => 'required',
        ]);

        $min = 100000;
        $max = 999999;
        $randomNumber = rand($min, $max);
        $password = "admin_manager".$randomNumber;
        $add_user = new User;
        $add_user->first_name = $request->first_name;
        $add_user->last_name= $request->last_name;
        $add_user->email = $request->email;
        $add_user->phone = $request->phone;
        $add_user->user_role = $request->user_role;
        $add_user->user_type = 2;
        $add_user->password = Hash::make($password);
        $add_user->save();

        $message = 'Dear ' . $request->first . ',' . PHP_EOL . PHP_EOL .
        'Please Find attach below to your login detail. thank you.';
         $mailData = [
            'password' => $password,
            'message' => $message,
            'email' => $request->email
        ];
        Mail::to($request->email)->send(new RegisterationEmail($mailData));
        $notification = array(
            'message' => 'Admin Manager Successfully saved',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function admin_manager_update(Request $request, $id){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'user_role' => 'required'
        ]);

        $update_user = User::findOrFail($id);
        $update_user->first_name = $request->first_name;
        $update_user->last_name= $request->last_name;
        $update_user->email = $request->email;
        $update_user->phone = $request->phone;
        $update_user->user_type = 2;
        $update_user->user_role = $request->user_role;
        $update_user->save();
        $notification = array(
            'message' => 'Admin Manager Successfully updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin_manager.view')->with($notification);
    }

    public function admin_admin_manager_block(Request $request, $id){
        $user = User::findOrFail($id);
        $user->block = $request->status;
        $user->save();
        $notification = array(
            'message' => 'Admin Manager Successfully blocked',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_admin_manager_delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        $notification = array(
            'message' => 'Admin Manager Successfully deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_manager_edit($id){
        $user = User::findOrFail($id);
        $roles = AdminRole::all();
        $users = User::whereNotNull('user_role')->where('user_type', 2)->get();
        return view('backend.admin_manager_edit', compact('user', 'users', 'roles'));
    }

    public function admin_manager_all(){
        $users = User::where('user_type', '=', 1)->get();
        return view('backend.admin_manager_all', compact('users'));
    }


    public function manage_country_view(){
        $countries = Country::all();
        return view('backend.manage_country', compact('countries'));
    }

    public function manage_country_edit($id){
        $country = Country::findOrFail($id);
        $countries = Country::all();
        return view('backend.manage_country_edit', compact('country', 'countries'));
    }

    public function manage_country_add(Request $request){
        $request->validate([
            'name' => 'required',
            'flag' => 'required'
        ]);

        $image = $request->file('flag');
        $extension = $image->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $directory = 'uploads/flag/';
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }
        $image->move($directory, $filename);
        $path = $directory . $filename;
        $country = new Country;
        $country->name = $request->name;
        $country->flag = $path;
        $country->save();
        $notification = array(
            'message' => 'Country Successfully Added',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function manage_country_delete($id){
        $country =  Country::findOrFail($id);
        $filePath = $country->flag;
        File::delete(public_path($filePath));
        $country->delete();
        $notification = array(
            'message' => 'Country Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function manage_country_update(Request $request, $id){
        $request->validate([
            'name' => 'required'
        ]);
        $country = Country::findOrFail($id);
        if ($request->hasFile('flag')){
            $image = $request->file('flag');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $directory = 'uploads/flag/';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $image->move($directory, $filename);
            $path = $directory . $filename;
        }else{
            $path = $country->flag;
        }

        $country->name = $request->name;
        $country->flag = $path;
        $country->save();
        $notification = array(
            'message' => 'Country Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('manage.country.view')->with($notification);
    }

    public function admin_testimonial_view(){
        $countries = Country::all();
        return view('backend.testimonial_view', compact('countries'));
    }

    public function admin_testimonial_save(Request $request){
        $request->validate([
            'full_name' => 'required',
            'image' => 'required',
            'country' => 'required',
            'link'=> 'required'
        ]);

        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $directory = 'uploads/testimonials/';
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }
        $image->move($directory, $filename);
        $path = $directory . $filename;
        $testimonial = new Testimonial;
        $testimonial->full_name = $request->full_name;
        $testimonial->image = $path;
        $testimonial->link = $request->link;
        $testimonial->country_id = $request->country;
        $testimonial->save();
        $notification = array(
            'message' => 'Testimonial Successfully Added',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_testimonial_all()
    {
        $testimonials = Testimonial::all();
        return view('backend.testimonial_all', compact('testimonials'));
    }

    public function admin_testimonial_edit($id){
        $countries = Country::all();
        $testimonial = Testimonial::findOrFail($id);
        return view('backend.testimonial_edit', compact('countries','testimonial'));
    }


    public function admin_testimonial_update(Request $request, $id){
        $request->validate([
            'full_name' => 'required',
            'country' => 'required',
            'link'=> 'required'
        ]);
        $testimonial = Testimonial::findOrFail($id);
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $directory = 'uploads/testimonials/';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $image->move($directory, $filename);
            $path = $directory . $filename;
        }else{
            $path = $testimonial->image;
        }
        $testimonial->full_name = $request->full_name;
        $testimonial->image = $path;
        $testimonial->link = $request->link;
        $testimonial->country_id = $request->country;
        $testimonial->save();
        $notification = array(
            'message' => 'Testimonial Successfully Added',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.testimonial.all')->with($notification);
    }

    public function admin_testimonial_delete($id){
        $testimony =  Testimonial::findOrFail($id);
        $filePath = $testimony->image;
        File::delete(public_path($filePath));
        $testimony->delete();
        $notification = array(
            'message' => 'Testimonial Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_askgpt_view()
    {
        $askgpts = AskCategory::all();
        return view('backend.askgpt_view', compact('askgpts'));
    }
    public function admin_askgpt_edit($id)
    {
        $askgpts = AskCategory::all();
        $askgpt = AskGpt::findOrFail($id);
        return view('backend.askgpt_edit', compact('askgpts', 'askgpt'));
    }

    public function admin_askgpt_save(Request $request)
    {
        $request->validate([
            'askgpt_id' => 'required',
            'question' => 'required',
            'answer' => 'required'
        ]);
        $askgpt = new AskGpt;
        $askgpt->askgpt_id = $request->askgpt_id;
        $askgpt->question = $request->question;
        $askgpt->answer = $request->answer;
        $askgpt->save();
        $notification = array(
            'message' => 'Askgpt Successfully Added',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }

    public function admin_askgpt_all(){
        $askgpts = AskGpt::all();
        return view('backend.askgpt_all', compact('askgpts'));
    }


    public function admin_askgpt_update(Request $request, $id)
    {
        $request->validate([
            'askgpt_id' => 'required',
            'question' => 'required',
            'answer' => 'required'
        ]);
        $askgpt =  AskGpt::findOrFail($id);
        $askgpt->askgpt_id = $request->askgpt_id;
        $askgpt->question = $request->question;
        $askgpt->answer = $request->answer;
        $askgpt->save();
        $notification = array(
            'message' => 'Askgpt Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.askgpt.all')->with($notification);

    }

    public function admin_askgpt_delete($id){
        $askgpt =  AskGpt::findOrFail($id);
        $askgpt->delete();
        $notification = array(
            'message' => 'AskGpt Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function admin_resource_view(){
        $countries = Country::all();
        return view('backend.resource_view', compact('countries'));
    }

    public function admin_resource_save(Request $request){
        $request->validate([
            'country_id' => 'required',
            'image' => 'required',
            'pdf' => 'required',
        ]);

        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $directory = 'uploads/resources/image/';
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }
        $image->move($directory, $filename);
        $path1 = $directory . $filename;
        $pdf = $request->file('pdf');
        $extension = $pdf->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $directory = 'uploads/resources/pdf/';
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }
        $pdf->move($directory, $filename);
        $path2 = $directory . $filename;
        $resource = new ResourceBook;
        $resource->country_id = $request->country_id;
        $resource->image = $path1;
        $resource->pdf = $path2;
        $resource->save();
        $notification = array(
            'message' => 'Resource Successfully Added',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_resource_all()
    {
        $resources = ResourceBook::all();
        return view('backend.resource_all', compact('resources'));
    }

    public function admin_resource_edit($id){
        $countries = Country::all();
        $resource = ResourceBook::findOrFail($id);
        return view('backend.resource_edit', compact('countries','resource'));
    }


    public function admin_resource_update(Request $request, $id){
        $request->validate([
            'country_id' => 'required'
        ]);
        $resource = ResourceBook::findOrFail($id);
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $directory = 'uploads/resources/image/';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $image->move($directory, $filename);
            $path1 = $directory . $filename;
        }else{
            $path1 = $resource->image;
        }
        if($request->hasFile('pdf')){
            $pdf = $request->file('pdf');
            $extension = $pdf->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $directory = 'uploads/resources/pdf/';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $pdf->move($directory, $filename);
            $path2 = $directory . $filename;
        }else{
            $path2 = $resource->pdf;
        }

        $resource->country_id = $request->country_id;
        $resource->image = $path1;
        $resource->pdf = $path2;
        $resource->save();
        $notification = array(
            'message' => 'Resource Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.resource.all')->with($notification);
    }
    public function admin_resource_delete($id){
        $resource =  ResourceBook::findOrFail($id);
        $filePath1 = $resource->image;
        $filePath2 = $resource->pdf;
        File::delete(public_path($filePath1));
        File::delete(public_path($filePath2));
        $resource->delete();
        $notification = array(
            'message' => 'Resource Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_course_view(){
        $courses = CourseCategory::all();
        return view('backend.course_view', compact('courses'));
    }

    public function admin_course_edit($id){
        $courses = CourseCategory::all();
        $course = ProgramCourse::findOrFail($id);
        return view('backend.course_edit', compact('courses', 'course'));
    }

    public function admin_course_save(Request $request){
        $request->validate([
            'course_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'about' => 'required',

        ]);
        $url_slug = strtolower($request->title);
        $label_slug= preg_replace('/\s+/', '-', $url_slug);
        $course = new ProgramCourse;
        $course->course_id = $request->course_id;
        $course->title= $request->title;
        $course->description= $request->description;
        $course->duration= $request->duration;
        $course->entry_score= $request->entry_score;
        $course->entry_score2= $request->entry_score2;
        $course->about= $request->about;
        $course->slug= $label_slug;
        $course->save();
        $notification = array(
            'message' => 'Course Successfully Added',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_course_all(){
        $courses = ProgramCourse::all();
        return view('backend.course_all', compact('courses'));
    }

    public function admin_course_update(Request $request, $id){
        $request->validate([
            'course_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'about' => 'required',
        ]);
        $url_slug = strtolower($request->title);
        $label_slug= preg_replace('/\s+/', '-', $url_slug);
        $course = ProgramCourse::findOrFail($id);
        $course->course_id = $request->course_id;
        $course->title= $request->title;
        $course->description= $request->description;
        $course->duration= $request->duration;
        $course->entry_score= $request->entry_score;
        $course->entry_score2= $request->entry_score2;
        $course->about= $request->about;
        $course->slug= $label_slug;
        $course->save();
        $notification = array(
            'message' => 'Course Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.course.all')->with($notification);
    }

    public function admin_course_delete($id){
        $course = ProgramCourse::findOrFail($id);
        $course->delete();
        $notification = array(
            'message' => 'Course Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }



    public function admin_destination_view(){
        $countries = Country::all();
        return view('backend.destination_view', compact('countries'));
    }

    public function admin_destination_save(Request $request){
        $request->validate([
            'country_id' => 'required',
            'image' => 'required',
            'pdf' => 'required',
        ]);
        $baseUrl = request()->getSchemeAndHttpHost();
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $directory = 'uploads/destinations/image/';
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }
        $image->move($directory, $filename);
        $path1 = $baseUrl."/".$directory . $filename;
        $pdf = $request->file('pdf');
        $extension = $pdf->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $directory = 'uploads/destinations/pdf/';
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }
        $pdf->move($directory, $filename);
        $path2 = $baseUrl."/".$directory . $filename;
        $destination = new Destination;
        $destination->country_id = $request->country_id;
        $destination->image = $path1;
        $destination->pdf = $path2;
        $destination->info = $request->info;
        $destination->save();
        $notification = array(
            'message' => 'Destination Successfully Added',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_destination_all()
    {
        $destinations = Destination::all();
        return view('backend.destination_all', compact('destinations'));
    }

    public function admin_destination_edit($id){
        $countries = Country::all();
        $destination = Destination::findOrFail($id);
        return view('backend.destination_edit', compact('countries','destination'));
    }


    public function admin_destination_update(Request $request, $id){
        $request->validate([
            'country_id' => 'required'
        ]);
        $baseUrl = request()->getSchemeAndHttpHost();
        $destination = Destination::findOrFail($id);
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $directory = 'uploads/destinations/image/';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $image->move($directory, $filename);
            $path1 = $baseUrl."/".$directory . $filename;
        }else{
            $path1 = $destination->image;
        }
        if($request->hasFile('pdf')){
            $image->move($directory, $filename);
            $path1 = $baseUrl."/".$directory . $filename;
            $pdf = $request->file('pdf');
            $extension = $pdf->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $directory = 'uploads/destinations/pdf/';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $pdf->move($directory, $filename);
            $path2 = $baseUrl."/".$directory . $filename;
        }else{
            $path2 = $destination->pdf;
        }

        $destination->country_id = $request->country_id;
        $destination->image = $path1;
        $destination->pdf = $path2;
        $destination->info = $request->info;
        $destination->save();
        $notification = array(
            'message' => 'Destination Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.destination.all')->with($notification);
    }
    public function admin_destination_delete($id){
        $destination =  Destination::findOrFail($id);
        $filePath1 = ltrim(parse_url($destination->image, PHP_URL_PATH), '/');
        $filePath2 = ltrim(parse_url($destination->pdf, PHP_URL_PATH), '/');
        File::delete(public_path($filePath1));
        File::delete(public_path($filePath2));
        $destination->delete();
        $notification = array(
            'message' => 'Destination Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


}
