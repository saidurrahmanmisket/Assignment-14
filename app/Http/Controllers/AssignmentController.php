<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    // Question 1 answer
    function UserInfo(Request $request):string{
        $name = $request->input('name');
        return $name;
    }
    // Question 2 answer
    function UserAgent(Request $request){
        $userAgent = $request->header('UserAgent');
        return $userAgent;
    }

    // Question 3 answer
    function ApiEndpoint(Request $request){
        $page = $request->query('page',"null");
        if($page !== null){
            return $page;
        }else{
            return "null";
        }
    }
    // Question 4 answer
    function JsonResponse():JsonResponse{
        $data = array(
            "message"=> "Success",
            "data"=>array(
                "name"=> "John Doe",
                "age"=> 25
            )
        );
        return response()->json($data);
    }
    // Question 5 answer
    function FileUploads(Request $request){
        $file=$request->file('avatar');
        $file->move(public_path('uploads'),$file->getClientOriginalName());
        return "file uploaded";
    }
    // Question 6 answer
    function SetCookie(Request $request){
        $rememberToken = $request->cookie('remember_token',null);
        return $rememberToken;
    }
}
