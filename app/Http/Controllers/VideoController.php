<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use DB;

class VideoController extends Controller
{
    public function index(){
        $user = Auth::user();
        $userImage = $user->image;
        $username = $user->name;
        $type = $user->type;
        $videos = Video::all();
        $activeVideosCount = Video::where('status', 'active')->count();
        
        return view('admin.video')->with([
            'username'=> $username,
            'user'=> $user,
            'userImage' => $userImage,
            'type'=> $type,
            'videos' => $videos,
            'activeVideosCount' => $activeVideosCount,
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'video' => 'required|mimetypes:video/mp4,video/quicktime',
        ]);


        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $extension = $video->getClientOriginalExtension();
            $videoName = time().'.'.$extension;

            if (app()->environment('local')) {
                $folderPath = public_path('videos/');
            } else {
                $folderPath = base_path('/videos/');
            }

            if (!file_exists($folderPath)) mkdir($folderPath, 0777, true);
            $fullVideoPath = $folderPath . $videoName;

            // FINAL SAVE WITHOUT ANY LIBRARY
            $video->move($folderPath, $videoName);

        }
        else{
            return back()->with('error', 'Video not Valid!');
        }

        $video = new Video();
        $video->status = 'Active';
        $video->name = $videoName;
        $video->created_at = Carbon::now('Asia/Colombo');

        $video->save();

        return redirect()->back()->with('success', 'Video created successfully.');
        
    }

    public function update($id){
        $video = Video::find($id);
        if(!$video){
            return redirect()->back()->with('error', 'Video not found.');
        }

        // Toggle status
        if($video->status == 'Active'){
            $video->status = 'Inactive';
        } else {
            $video->status = 'Active';
        }

        $video->updated_at = Carbon::now('Asia/Colombo');
        $video->save();

        return redirect()->back()->with('success', 'Video status updated successfully.');
    }

    public function delete(Request $request){
        
        $videoId = $request->input('video_id');
        $video = Video::find($videoId);
        // dd($videoId);
        if (!$video) {
            return redirect()->back()->with('error', 'Video not found.');
        }

        // Delete the video file
        if ($video->name) {
            if (app()->environment('local')) {
                $videoPath = public_path('videos/' . $video->name);
            } else {
                $videoPath = base_path('/videos/' . $video->name);
            }

            if (File::exists($videoPath)) {
                File::delete($videoPath);
            }
        }

        // Delete the banner record from the database
        $video->delete();

        return redirect()->back()->with('success', 'Video deleted successfully.');
    }
}
