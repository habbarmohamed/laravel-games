<?php

namespace App\Http\Controllers;

use App\Mail\contactForm;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Jeux;
use App\Category;
use App\News;


class ContactController extends Controller
{
    //
    public function create()
  {
    //
    $jeux = Jeux::latest()->take(4)->get();
    $news = News::latest()->take(4)->get();
    return view('front.contact', compact('jeux', 'news'));
  
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $data )
  {

    $this->validate($data, [
            'name' => 'required|min:3|string',
            'email' => 'required|email',
            'message' => 'required|min:10|max:1000'
        ]);

        Mail::to('habbarmohamed39@gmail.com')->send(new contactForm($data));

        return redirect()->back()->with('message', 'THANK YOU FOR YOUR MESSAGE, IT HAS BEEN SENT!');

    
  }
  
  
  
    
}
