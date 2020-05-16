<?php

namespace App\Http\Controllers;

use App\Mail\participate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class ParticipateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       //
    public function create()
  {
    //
    return view('front.participate');
  
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $participate )
  {

    $this->validate($participate, [
            'first' => 'required|min:3|string',
            'last' => 'required|min:3|string',
            'email' => 'required|email',
            'status' => 'required|string',
            'game_tour' => 'required',
            'stay_over' => 'required|string',
            'comment' => 'required|min:10|max:1000'
        ]);

        Mail::to('habbarmohamed39@gmail.com')->send(new participate($participate));

        return redirect()->back()->with('message', 'THANK YOU FOR YOUR PARTICIPATE, IT HAS BEEN SENT!');

    
  }


}
