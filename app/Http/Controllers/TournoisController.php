<?php

namespace App\Http\Controllers;

use App\Tournois;
use App\News;
use App\Slider;
use App\Jeux;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\TournoiRequest;

class TournoisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $tournois = Tournois::all();
        return view('Admin.tournois.index', compact('tournois'));

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showhome()
    {
        //
        $tournois = Tournois::all();
        $news = News::latest()->take(3)->get();
        $sliders = Slider::take(2)->get();
        $jeux = Jeux::take(4)->get();
        $lastjeu = Jeux::latest()->take(4)->get();
        $bestjeu = Jeux::where('n_rate', '>', 4)->take(4)->get();
        $category = Category::all();
        return view('front.index',compact('tournois', 'news', 'sliders', 'jeux', 'category', 'lastjeu' , 'bestjeu'));

    }
  
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.tournois.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TournoiRequest $request)
    {
        //
        Tournois::create(request()->all());

        return redirect('Admin/tournois');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tournois  $tournois
     * @return \Illuminate\Http\Response
     */
    public function show(Tournois $tournois)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tournois  $tournois
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $tournois = Tournois::find($id);
        return view('Admin.tournois.edit', compact('tournois'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tournois  $tournois
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tournois = Tournois::find($id);

            $tournois->update($request->all());

  
            return redirect()->route('tournois.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tournois  $tournois
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tournois = Tournois::find($id);
     $tournois->delete();

     return redirect('Admin/tournois')->with('success', 'Stock has been deleted Successfully');
    }
}
