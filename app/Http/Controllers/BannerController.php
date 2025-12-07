<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Banner;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use DB;

class BannerController extends Controller
{
    public function index(){
        $user = Auth::user();
        $userImage = $user->image;
        $username = $user->name;
        $type = $user->type;
        $banners = Banner::all();
        $activeBannersCount = Banner::where('status', 'active')->count();
        
        return view('admin.banner')->with([
            'username'=> $username,
            'user'=> $user,
            'userImage' => $userImage,
            'type'=> $type,
            'banners' => $banners,
            'activeBannersCount' => $activeBannersCount,
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:500|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'type' => 'required|in:desktop,mobile',
        ]);

        if($request->input('type') == 'desktop'){
            $type = 'desktop';
            $subFolder = 'Banners';
        } else {
            $type = 'mobile';
            $subFolder = 'MobileBanners';
        }

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $extension = $img->getClientOriginalExtension();
            $imgName = time().'.'.$extension;

            if (app()->environment('local')) {
                $folderPath = public_path('image/' . $subFolder . '/');
            } else {
                $folderPath = base_path('/image/' . $subFolder . '/');
            }

            if (!file_exists($folderPath)) mkdir($folderPath, 0777, true);
            $fullImagePath = $folderPath . $imgName;

            
            // Image::load($img->getPathname())
            //     ->save($fullImagePath);

            // FINAL SAVE WITHOUT ANY LIBRARY
            $img->move($folderPath, $imgName);

        }
        else{
            return back()->with('error', 'Banner Image not Valid!');
        }

        $banner = new Banner();
        $banner->title = $request->input('title');
        $banner->status = 'Active';
        $banner->image = $imgName;
        $banner->type = $type;
        $banner->created_at = Carbon::now('Asia/Colombo');

        $banner->save();

        return redirect()->back()->with('success', 'Banner created successfully.');
        
    }

    public function sectionBannerStore(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $imgName = 'Section_Banner.jpg';

            if (app()->environment('local')) {
                $folderPath = public_path('image/');
            } else {
                $folderPath = base_path('/image/');
            }

            if (!file_exists($folderPath)) mkdir($folderPath, 0777, true);
            $fullImagePath = $folderPath . $imgName;

            // Delete the image file
            
            if (app()->environment('local')) {
                $imagePath = public_path('image/' . $imgName);
            } else {
                $imagePath = base_path('/image/' . $imgName);
            }

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $img->move($folderPath, $imgName);

        }
        else{
            return back()->with('error', 'Section Banner Image not Valid!');
        }

        return redirect()->back()->with('success', 'Section Banner created successfully.');

    }

    public function whatWeDoStore(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $imgName = 'WhatWeDo.png';

            if (app()->environment('local')) {
                $folderPath = public_path('image/');
            } else {
                $folderPath = base_path('/image/');
            }

            if (!file_exists($folderPath)) mkdir($folderPath, 0777, true);
            $fullImagePath = $folderPath . $imgName;

            // Delete the image file
            
            if (app()->environment('local')) {
                $imagePath = public_path('image/' . $imgName);
            } else {
                $imagePath = base_path('/image/' . $imgName);
            }

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $img->move($folderPath, $imgName);

        }
        else{
            return back()->with('error', 'What We Do Image not Valid!');
        }

        return redirect()->back()->with('success', 'What We Do created successfully.');

    }

    public function update($id){
        $banner = Banner::find($id);
        if(!$banner){
            return redirect()->back()->with('error', 'Banner not found.');
        }

        // Toggle status
        if($banner->status == 'Active'){
            $banner->status = 'Inactive';
        } else {
            $banner->status = 'Active';
        }

        $banner->updated_at = Carbon::now('Asia/Colombo');
        $banner->save();

        return redirect()->back()->with('success', 'Banner status updated successfully.');
    }

    public function delete(Request $request){
        
        $bannerId = $request->input('banner_id');
        $banner = Banner::find($bannerId);
        // dd($bannerId);
        if (!$banner) {
            return redirect()->back()->with('error', 'Banner not found.');
        }

        // Delete the image file
        if ($banner->image) {
            if (app()->environment('local')) {
                $imagePath = public_path('image/Banners/' . $banner->image);
            } else {
                $imagePath = base_path('/image/Banners/' . $banner->image);
            }

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        // Delete the banner record from the database
        $banner->delete();

        return redirect()->back()->with('success', 'Banner deleted successfully.');
    }
}
