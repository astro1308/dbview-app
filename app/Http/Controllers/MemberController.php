<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //
    function show()
    {
        $data= Member::all();
        return view('list',['Members'=>$data]);
    }
    //
    function addData(Request  $req)
    {
        $member= new Member;
        $member->name=$req->name;
        $member->fname=$req->fname;
        $member->age=$req->age;
        $member->save();
        return redirect ('add');
    }
}
