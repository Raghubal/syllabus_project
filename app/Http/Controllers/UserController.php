<?php

namespace App\Http\Controllers;
use App\Models\post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
public function list(){

$data = post::all();
return view('data',['data'=>$data]);
}

    public function filt(Request $request){
        $data=DB::table('posts');

        if($request->year!=null){
            $data=$data->where('posts.year','like',$request->year);
        }

        if($request->semester!=null){
            $data=$data->where('posts.semester','like',$request->semester);
        }


        if($request->department!=null){
            $data=$data->where('posts.department','like',$request->department);
        }


        if($request->program!=null){
            $data=$data->where('posts.program','like',$request->program);
        }
        $data=$data->get();

        return view('filt',['data'=>$data]);
    }
}

