<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\CollegeStudent;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use Session;

class PendaftaranController extends Controller
{
    public function index()
    {
        $id_user = Auth::user()->id;

        $collage = CollegeStudent::where(["user_id"=>$id_user])->get()->all();
        foreach($collage as $row){
            if($row){
                return view("mahasiswa.pendaftaran", ["row"=>$row]);
            }else{
                Session::flash('message', "Special message goes here");
                return redirect("mahasiswa/profile");
            }
        }
    }
}
