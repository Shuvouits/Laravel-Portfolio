<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Experience;
use App\Models\FAQ;
use App\Models\Hero;
use App\Models\IconBox;
use App\Models\Product;
use App\Models\Stack;
use App\Models\Technology;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        $hero = Hero::first();
        $icon_data = IconBox::all();
        $experience_data = Experience::all();
        $technology = Technology::all();
        $stack = Stack::all();
        $faq = FAQ::all();
        $product = Product::all();
        return view('Frontend.index', compact('hero','icon_data', 'experience_data', 'technology', 'stack', 'faq', 'product'));
    }

    public function NotFound(){
        return view('FrontEnd.notFound');
    }

    public function Contact(Request $request){
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect()->back()->with('messages', [
            'type' => 'success',
            'text' => 'Email Sent Successfully'
        ]);
        

    }
}
