<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Status;
use App\Models\AppChat;
use Illuminate\Http\Request;
use App\Models\NewApplication;
use Auth;
class CounsellorController extends Controller
{
    public function counsellor_profile_view(){
        return view('counsellor.counsellor_profile_view');
    }

    public function counsellor_profile_update(Request $request, $id){
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

    public function counsellor_password_update(Request $request){
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

    public function counsellor_application_assigned(){
        $applications = NewApplication::where('assigned_id', '=', Auth::user()->id)->get();
        $counsellors = User::where('user_type', '=', 1)->get();
        $statuses = Status::all();
        return view('counsellor.application_all', compact('applications', 'counsellors', 'statuses'));
    }

    public function counsellor_application_edit($id){
        $app = NewApplication::findOrFail($id);
        return view('counsellor.application_edit', compact('app'));
    }

    public function counsellor_application_chat($id){
        $app = NewApplication::findOrFail($id);
        $chats = AppChat::where('app_id', '=', $id)->get();
        return view('counsellor.application_chat', compact('app', 'chats'));
    }

    public function counsellor_application_chat_save(Request $request){
        $chat = new AppChat;
        $chat->app_id = $request->app_id;
        $chat->message = $request->message;
        $chat->user_type = $request->user_type;
        $chat->user_id = $request->user_id;
        $chat->counsellor_status= "read";
        $chat->save();
        $notification = array(
            'message' => 'Message Sent',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
