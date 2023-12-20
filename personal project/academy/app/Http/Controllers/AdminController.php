<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Status;
use Mail;
use App\Models\Consultation;
use Illuminate\Support\Facades\Hash;
use App\Mail\RegisterationEmail;

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
        return view('backend.consultation_all', compact('consultations'));
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
        $update_user->user_type = 2;
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
        $users = User::where('user_type', '=', 2)->get();
        return view('backend.counsellor_all', compact('users'));
    }

    public function application_view(){
        return view('backend.application_view');
    }

    public function application_all(){
        return view('backend.application_all');
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
}
