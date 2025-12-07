<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserCredentialsMail;
use Spatie\Image\Image;
use Spatie\Image\Enums\CropPosition;
use Spatie\Image\Enums\Fit;

use DB;

class UserController extends Controller
{
    public function profile(){
        $user = auth()->user();
        $user = Auth::user();
        $userImage = $user->image;
        $username = $user->name;
        $type = $user->type;

        $categories = [];

        return view('admin.profile', compact('user', 'username', 'type', 'categories', 'userImage'));
    }

    public function updateProfile(Request $request){

        $user = auth()->user();
        if ($request->new_password || $request->password || $request->confirm_password) {
            $request->validate([
                'name' => 'required|string|max:255',
                'new_password' => 'required|min:6|same:confirm_password',
                'password' => 'required',
                'confirm_password' => 'required|min:6',
                'image' => 'image|mimes:jpeg,png,jpg',
            ]);
            if ($request->hasFile('image')) {
                $img = $request->file('image');
                $extension = $img->getClientOriginalExtension();
                $imgName = time().'.'.$extension;

                // dd(app()->environment());
                // ✅ Adjust folder path depending on environment
                if (app()->environment('local')) {
                    $folderPath = public_path('adminassets/images/users/');
                } else {
                    $folderPath = base_path('/adminassets/images/users/');
                }
                // $folderPath = base_path('../public_html/adminassets/images/users/');
                if (!file_exists($folderPath)) mkdir($folderPath, 0777, true);

                $fullImagePath = $folderPath . $imgName;

                // Determine the smallest dimension from original image
                $originalImage = Image::load($img->getPathname());
                $size = min($originalImage->getWidth(), $originalImage->getHeight());

                // Save 180x180 version
                Image::load($img->getPathname())
                    ->crop($size, $size, CropPosition::Center)
                    ->resize(256, 256)
                    ->save($fullImagePath);

                $user->image = $imgName;
            }

            $user->name = $request->input('name');
            $user->password = bcrypt($request->input('new_password'));
            $user->save();

            return redirect()->back()->with('success', 'Profile and password updated successfully.');
        }

        else{
            $request->validate([
                'name' => 'required|string|max:255',
                'image' => 'image|mimes:jpeg,png,jpg',
            ]);

            
            if ($request->hasFile('image')) {
                $img = $request->file('image');
                $extension = $img->getClientOriginalExtension();
                $imgName = time().'.'.$extension;

                if (app()->environment('local')) {
                    $folderPath = public_path('adminassets/images/users/');
                } else {
                    $folderPath = base_path('/adminassets/images/users/');
                }

                if (!file_exists($folderPath)) mkdir($folderPath, 0777, true);

                $fullImagePath = $folderPath . $imgName;

                // Determine the smallest dimension from original image
                $originalImage = Image::load($img->getPathname());
                $size = min($originalImage->getWidth(), $originalImage->getHeight());

                // Save 180x180 version
                Image::load($img->getPathname())
                    ->crop($size, $size, CropPosition::Center)
                    ->resize(256, 256)
                    ->save($fullImagePath);

                $user->image = $imgName;
            }

            $user->name = $request->input('name');
            $user->save();

            return redirect()->back()->with('success', 'Profile updated successfully.');
        }
    }

    public function index(){
        $users = User::all();

        $user = Auth::user();
        $userImage = $user->image;
        $username = $user->name;
        $type = $user->type;

        $usersCount = User::all()->count();

        return view('admin.users', compact('users', 'username', 'type', 'usersCount', 'user','userImage'));
    }

    public function store(Request $request){
        $request->validate([
            'user_email' => 'required|email|unique:users,email',
        ]);

        $password = Str::random(8); // Generate a random 8-character password

        $user = new User();
        $user->name = $request->input('user_name');
        $user->email = $request->input('user_email');
        $user->password = bcrypt($password); // Hash the generated password
        $user->type = $request->input('user_role');
        $user->save();

        // Send email to the user with their credentials
        Mail::to($user->email)->send(new NewUserCredentialsMail($user->name, $password, $user->email));

        return redirect()->back()->with('success', 'User created successfully and credentials sent to email.');
    }
}
