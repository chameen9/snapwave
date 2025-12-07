<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Brand;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use DB;

class BrandController extends Controller
{
    public function index(){
        $user = Auth::user();
        $userImage = $user->image;
        $username = $user->name;
        $type = $user->type;
        $brands = Brand::all();
        $activeBrandsCount = Brand::where('status', 'active')->count();

        
        return view('admin.brand')->with([
            'username'=> $username,
            'user'=> $user,
            'userImage' => $userImage,
            'type'=> $type,
            'brands' => $brands,
            'activeBrandsCount' => $activeBrandsCount,
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:500|min:3',
            'url' => 'required|max:500|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $extension = $img->getClientOriginalExtension();
            $imgName = time().'.'.$extension;

            if (app()->environment('local')) {
                $folderPath = public_path('image/Brands/');
            } else {
                $folderPath = base_path('/image/Brands/');
            }

            if (!file_exists($folderPath)) mkdir($folderPath, 0777, true);
            $fullImagePath = $folderPath . $imgName;

            
            // Image::load($img->getPathname())
            //     ->save($fullImagePath);

            // FINAL SAVE WITHOUT ANY LIBRARY
            $img->move($folderPath, $imgName);

        }
        else{
            return back()->with('error', 'Brand Image not Valid!');
        }

        $brand = new Brand();
        $brand->name = $request->input('name');
        $brand->url = $request->input('url');
        $brand->status = 'Active';
        $brand->image = $imgName;
        $brand->created_at = Carbon::now('Asia/Colombo');

        $brand->save();
        return redirect()->back()->with('success', 'Brand created successfully.');
        
    }

    public function update($id){
        $brand = Brand::find($id);
        if(!$brand){
            return redirect()->back()->with('error', 'Brand not found.');
        }

        // Toggle status
        if($brand->status == 'Active'){
            $brand->status = 'Inactive';
        } else {
            $brand->status = 'Active';
        }

        $brand->updated_at = Carbon::now('Asia/Colombo');
        $brand->save();

        return redirect()->back()->with('success', 'Brand status updated successfully.');
    }

    public function delete(Request $request){
        
        $brandId = $request->input('brand_id');
        $brand = Brand::find($brandId);
        // dd($brandId);
        if (!$brand) {
            return redirect()->back()->with('error', 'Brand not found.');
        }

        // Delete the image file
        if ($brand->image) {
            if (app()->environment('local')) {
                $imagePath = public_path('image/Brands/' . $brand->image);
            } else {
                $imagePath = base_path('/image/Brands/' . $brand->image);
            }

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        // Delete the banner record from the database
        $brand->delete();

        return redirect()->back()->with('success', 'Brand deleted successfully.');
    }
}
