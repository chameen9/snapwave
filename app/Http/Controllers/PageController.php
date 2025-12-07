<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use DB;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Video;

class PageController extends Controller
{
    public function index(){
        $desktopBanners = Banner::where('status', 'active')->where('type', 'desktop')->get();
        $mobileBanners = Banner::where('status', 'active')->where('type', 'mobile')->get();
        $brands = Brand::where('status', 'active')->get();
        return view('index')->with([
            'desktopBanners' => $desktopBanners,
            'mobileBanners' => $mobileBanners,
            'brands' => $brands,
        ]);
    }

    public function about(){
        $banners = Banner::where('status', 'active')->get();
        $brands = Brand::where('status', 'active')->get();
        return view('about')->with([
            'banners' => $banners,
            'brands' => $brands,
        ]);
    }

    public function portfolio(){
        $banners = Banner::where('status', 'active')->get();
        $brands = Brand::where('status', 'active')->get();
        $videos = Video::where('status', 'active')->get();
        return view('portfolio')->with([
            'banners' => $banners,
            'brands' => $brands,
            'videos' => $videos,
        ]);
    }

    public function sendmessage(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250',
            'contact' => 'required|max:20',
            'date' => 'required|date',
            'message' => 'nullable|string',
        ]);
        
        $sysEmail = "info@snapwave.lk";

        $mailStatus = "System";
        Mail::to($sysEmail)->send(
            new ContactMail(
                $request->name,
                $request->email,
                $request->contact,
                $request->date,
                $request->message,
                $mailStatus
            )
        );
        // send a copy to the user also
        $mailStatus = "Customer";
        Mail::to($request->email)->send(
            new ContactMail(
                $request->name,
                $request->email,
                $request->contact,
                $request->date,
                $request->message,
                $mailStatus
            )
        );

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
