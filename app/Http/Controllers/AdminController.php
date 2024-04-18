<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\FAQ;
use App\Models\IconBox;
use App\Models\Product;
use App\Models\Stack;
use App\Models\Technology;
use Illuminate\Http\Request;
use App\Models\Hero;
use Image;

class AdminController extends Controller
{
    public function Hero()
    {
        $data = Hero::all();
        return view('Backend.page.hero', compact('data'));
    }

    public function AddHero(Request $request)
    {
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

    public function UpdateHero(Request $request)
    {

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


        } else {
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

    public function IconBox()
    {
        $data = IconBox::all();
        return view('Backend.page.iconbox', compact('data'));
    }

    public function AddIconBox(Request $request)
    {
       

        IconBox::create([
            'title' => $request->title,
            'icon' => $request->icon
        ]);

        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Inserted Successfully"
        ]);
    }


    public function UpdateIconBox(Request $request)
    {

        $id = $request->input('id');

        IconBox::findOrFail($id)->update([
            'title' => $request->title,
            'icon' => $request->icon
        ]);



        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Updated Successfully"
        ]);



    } 


    public function DeleteIconBox($id)
    {
        $item = IconBox::findOrFail($id);
        $item->delete();
        return response()->json(['success' => true]);
    }

    public function WorkExperience()
    {
        $data = Experience::all();
        return view('Backend.page.work_experience', compact('data'));
    }

    public function AddExperience(Request $request){

        Experience::create([
            'company_name' => $request->company_name,
            'designation' => $request->designation,
            'date' => $request->date,
            'responsiblity' => $request->responsiblity
        ]);

        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Inserted Successfully"
        ]);

    }

    public function UpdateExperience(Request $request)
    {

        $id = $request->input('id');

        Experience::findOrFail($id)->update([
            'company_name' => $request->company_name,
            'designation' => $request->designation,
            'date' => $request->date,
            'responsiblity' => $request->responsiblity
        ]);



        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Updated Successfully"
        ]);



    } 

    public function DeleteExperience($id)
    {
        $item = Experience::findOrFail($id);
        $item->delete();
        return response()->json(['success' => true]);
    }  


    public function Technology()
    {
        $data = Technology::all();
        return view('Backend.page.technology', compact('data'));
    }  

    public function AddTechnology(Request $request)
    {
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

        Technology::create([
            'name' => $request->name,
           
            'avatar' => $avatar,
        ]);

        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Inserted Successfully"
        ]);
    }  


    public function UpdateTechnology(Request $request)
    {

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

            Technology::findOrFail($id)->update([
                'name' => $request->name,
                'avatar' => $avatar
            ]);


        } else {
            Technology::findOrFail($id)->update([
                'name' => $request->name,
                
            ]);
        }



        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Updated Successfully"
        ]);



    }  


    public function DeleteTechnology($id)
    {
        $item = Technology::findOrFail($id);
        $item->delete();
        return response()->json(['success' => true]);
    }  

    public function FAQ()
    {
        $data = FAQ::all();
        return view('Backend.page.faq', compact('data'));
    } 
    
    
    public function AddFAQ(Request $request){

        FAQ::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Inserted Successfully"
        ]);

    }  


    public function UpdateFAQ(Request $request)
    {

        $id = $request->input('id');

        FAQ::findOrFail($id)->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);



        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Updated Successfully"
        ]);



    } 


    public function DeleteFAQ($id)
    {
        $item = FAQ::findOrFail($id);
        $item->delete();
        return response()->json(['success' => true]);
    }  

    public function STACK()
    {
        $data = Stack::all();
        return view('Backend.page.stack', compact('data'));
    }  


    public function AddStack(Request $request){

        Stack::create([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Inserted Successfully"
        ]);

    }  


    public function UpdateStack(Request $request)
    {

        $id = $request->input('id');

        Stack::findOrFail($id)->update([
            'name' => $request->name,
        ]);



        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Updated Successfully"
        ]);



    } 


    public function DeleteStack($id)
    {
        $item = Stack::findOrFail($id);
        $item->delete();
        return response()->json(['success' => true]);
    }  


    public function Product()
    {
        $data = Product::all();
        $stack = Stack::all();
        return view('Backend.page.product', compact('data', 'stack'));
    }  


    public function AddProduct(Request $request)
    {
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

        Product::create([
            'stack_id' => $request->stack_id,
            'name' => $request->name,
            'avatar' => $avatar,
            'title' => $request->title
        ]);

        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Inserted Successfully"
        ]);
    }  



    public function UpdateProduct(Request $request)
    {

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

            Product::findOrFail($id)->update([
                'title' => $request->title,
                'name' => $request->name,
                'avatar' => $avatar,
                'stack_id' => $request->stack_id
            ]);


        } else {
            Product::findOrFail($id)->update([
                'title' => $request->title,
                'name' => $request->name,
                'stack_id' => $request->stack_id
            ]);
        }



        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => "Data Updated Successfully"
        ]);



    }


    public function DeleteProduct($id)
    {
        $item = Product::findOrFail($id);
        $item->delete();
        return response()->json(['success' => true]);
    }  





}