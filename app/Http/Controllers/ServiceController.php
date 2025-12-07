<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use DB;

class ServiceController extends Controller
{
    public function index(){
        $user = Auth::user();
        $userImage = $user->image;
        $username = $user->name;
        $type = $user->type;
        
        return view('admin.service')->with([
            'username'=> $username,
            'user'=> $user,
            'userImage' => $userImage,
            'type'=> $type,
        ]);
    }
}
