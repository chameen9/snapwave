<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Video;
use DB;

class AdminController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        $userImage = $user->image;
        $username = $user->name;
        $type = $user->type;
        $desktopBanners = Banner::where('type', 'desktop')->where('status','Active')->get();
        $mobileBanners = Banner::where('type', 'mobile')->where('status','Active')->get();
        $banners = Banner::where('status','Active')->get();
        
        $brands = Brand::all();
        $videos = Video::all();

        $bannersCount = Banner::count();
        $brandsCount = Brand::count();
        $videosCount = Video::count();
        
        return view('admin.index')->with([
            'username'=> $username,
            'user'=> $user,
            'userImage' => $userImage,
            'type'=> $type,
            'banners' => $banners,
            'desktopBanners' => $desktopBanners,
            'mobileBanners' => $mobileBanners,
            'brands' => $brands,
            'videos' => $videos,
            'bannersCount' => $bannersCount,
            'brandsCount' => $brandsCount,
            'videosCount' => $videosCount,
        ]);
    }
}
