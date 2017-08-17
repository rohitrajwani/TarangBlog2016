<?php

namespace App\Http\Controllers;


use App\Post;

use Validator;

use Auth;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

use Illuminate\Contracts\Auth\Authenticatable as Gaurd;

use App\Http\Requests;


class postController extends Controller
{   
    
    
    public function checkLogin(){
        // validate the info, create rules for the inputs
        $rules = array(
            'name'    => 'required', // make sure the email is an actual email
            'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('/cms/admin')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'username' => Input::get('name'),
                'password' => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {
                // validation successful!
                return Redirect::to('/admin/options');

            } else {        
                
                //echo "Access Denied!! Please check your credentials!!";
                return Redirect::to('/cms/admin')->with('alert-failure','Login Error!! Please check your Credentials');

            }

        }
    }
    
    public function createPost(Request $request){

        $post = new Post;  

        $title = $request->heading;
        $i = 0;
        
        while($i < strlen($title)){
            if($title[$i] == " "){
                $title[$i] = "-";
            }
            $i++;
        }
        
        $title = strtolower($title);
        
        $post->url = $title;
        $post->heading = $request->heading;
        $post->body = $request->body;
        
        $post->save();
        
        return back();
    }
    
    public function displayPost(){
        
        $posts = \DB::table('posts')->orderBy('id','asc')->get();
        
        return view('index',compact('posts'));
        
    }
    
    public function viewPost($url){
        
        $post = \DB::table('posts')->where('url',$url)->first();
        
        return view('post',compact('post'));
        
    }
    
    public function editPostDisplay(){
        
        if(!Auth::check()){
            echo 'UnAthenticated Access!! Login To Continue';
            return view('cms.admin');
        }
        
        $posts = \DB::table('posts')->get();
        
        return view('cms.edit_post_display',compact('posts'));
        
    }
    
    public function editPost($heading){
        
        $post = \DB::table('posts')->where('heading',$heading)->first();
        
        return view('cms.edit_post',compact('post'));
    }
    
    public function editPostInDB(Request $req){
        
        \DB::table('posts')->where('id',$req->id)->update(['heading' => $req->heading]);
        \DB::table('posts')->where('id',$req->id)->update(['body' => $req->body]);
        
        echo "<script>alert('Edit Successful')</script>";
        
        $posts = \DB::table('posts')->get();
        
        return view('cms.edit_post_display',compact('posts'));
    }
}
