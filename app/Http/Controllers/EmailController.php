<?php

namespace App\Http\Controllers;

use App\Mail\TestUserMail;
use App\Mail\UserMail;
use App\Models\EmailUser;
use App\Models\SendEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{


    // Show Email Form
    //--------------------------

    public function send_email()
    {
        return view('mail.send_email');
    }
    

    //Fatch User Data From Database
    //------------------------------

    public function index()
    {
        $users = EmailUser::select('*')
                        ->orderBy('id','DESC')
                        ->paginate(30);

        return view('users', compact('users'));
    }  


    // Send Email To multipal Users
    //------------------------------

    public function send_content(Request $request)
    {

           $users= EmailUser::select('*')->get();
           $validator = Validator::make($request->all(), [
            'subject' => 'required',
            'content' => 'required', 
            'image' => 'required',    
           ]);
        
          $data=$request->all();
    
          if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();}

            $name=[];
            $email=[];
            foreach($users as $user)
            {
                $name=$user->name;
                $email=$user->email;   
            }

            $subject=[
                'subject'=>$request->subject ];
            $data=[
                'subject'=>$request->subject,
                'content'=>$request->content,
                'image'=>$request->file('image')->store('images'),
             ];
            

            Mail::to($email)->send(new TestUserMail($data,$subject,$name));

            return redirect()->back()->with('success', "Your Email is send "); 
        
    }

    
}