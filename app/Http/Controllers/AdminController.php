<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use Image;

class AdminController extends Controller
{
    public function Hero(){
        $data = Hero::all();
        return view('Backend.page.hero', compact('data'));
    }

    public function AddHero(Request $request) {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
        ]);
    
        if ($request->file('avatar')->isValid()) {
            $avatar = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move(public_path('upload'), $avatar);
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }
    
        Hero::create([
            'title' => $request->title,
            'description' => $request->description,
            'avatar' => $avatar,
        ]); 
    
        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Inserted Successfully"
        ]);  
    }

    public function UpdateHero(Request $request){
    
         $id = $request->input('id');

         if ($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
            ]);

            if ($request->file('avatar')->isValid()) {
                $avatar = $request->file('avatar')->getClientOriginalName();
                $request->file('avatar')->move(public_path('upload'), $avatar);
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }

            Hero::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'avatar' => $avatar
            ]);


         }else{
            Hero::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description
            ]);
         }



         return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Updated Successfully"
        ]); 



    }

    public function DeleteHero($id)
   {
    $item = Hero::findOrFail($id);
    $item->delete();
    return response()->json(['success' => true]);
   }
    
}