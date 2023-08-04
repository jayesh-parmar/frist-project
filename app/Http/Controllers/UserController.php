<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\EmailUser;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    
        //Form for insert Excel Files
        //------------------------

        public function inser_file()
        {
            return view('show_file');
        }

        //Import Excel File
        //------------------------

        public function import(Request $request) 
        {
            $request->validate([
                'file'=>'required'
                 ]);

                Excel::import(new UsersImport, $request->file);

                return redirect('/show_file')->with('success', "Successfully Add New User");
        }


                                //         For CRUD Opration           //
                                //------------------------------------//



    // For Show Email Form
    //----------------------

        public function email_form()
        {
            return view('add_user');
        }


    // For Add User In Data Base
    //------------------------------

        public function add_user(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users', 
            ]);
    
            if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
             }
       
            $data= new EmailUser;
            $data->name=$request->name;
            $data->email=$request->email;
            $data->save();

            return redirect('users')->with('success', "Successfully Add New User");
        }

    // For Fatch Email Data For Edit
    //------------------------------

        public function edit_email($id)
        {

                $data= EmailUser::find($id);
                return view('update_email')->with(['data'=>$data]);
        }

    // For Update Data
    //------------------    

        public function update_email($id,Request $request)
        {

                $data= EmailUser::find($id);
                $data->name=$request->name;
                $data->email=$request->email;
                $data->save();

                return redirect('users')->with('success', "Your Data Is Updated");
        }

    // For Delete User 
    //----------------------

        public function delete_email($id)
        {

                $data= EmailUser::find($id);
                $data->delete();
                return redirect('users')->with('success', "Your Data Is Deleted");
        }

    
}



