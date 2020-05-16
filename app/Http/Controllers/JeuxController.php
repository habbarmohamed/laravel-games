<?php

namespace App\Http\Controllers;

use App\Jeux;
use App\News;
use App\Category;
use App\Http\Requests\JeuxRequest;
use Illuminate\Http\Request;


class JeuxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        //
        $jeux = Jeux::all();
        return view('Admin.jeux.index', compact('jeux'));
    
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showgame() 
    {

        $jeux = Jeux::all();
        $nbrjeux = Jeux::latest()->take(4)->get();
        $news = News::latest()->take(3)->get();
        return view('front.help',compact('jeux', 'news', 'nbrjeux'));

    }

    public function showblog()
    {
        $news = News::latest()->take(3)->get();
        $jeux = Jeux::orderBy('name_jeu', 'asc')->paginate(12);
        $category = Category::all();
        return view('front.reviews',compact('news','jeux','category'));
    }

    public function pagegames($id)
    {
        $jeux = Jeux::where('id_jeu',$id)->first();
        return view('front.newspage', compact('jx'));
    }

    public function showgames($id)
    {
        $jeux = Jeux::where('id_jeu',$id)->first();
        $random = Jeux::all()->random(6);

        $category = Category::all();
        return view('front.speed', compact('jeux', 'category', 'random'));
    }

    public function showdatareviews($id)
    {
        $jeux = Jeux::where('id_jeu',$id)->first();
        $category = Category::all();
        $latestrev = Jeux::all()->random(6);
        return view('front.speed', compact('jeux', 'category', 'latestrev'));
    }

    public function showinfos()
    {
        $jeux = Jeux::all();
        return view('front.pubg', compact('jeux'));
    }

    public function randomjeux()
    {
        $random = Jeux::all()->random(10);
        return view('front.speed', compact('random'));
    }

    public function helpgame() 
    {

        $jeux = Jeux::all();
        $nbrjeux = Jeux::latest()->take(4)->get();
        $news = News::latest()->take(3)->get();
        return view('front.help',compact('jeux', 'news', 'nbrjeux'));

    }

    

    // public function shownav() 
    // {
    //     $category = Category::all();
    //     return view('layouts.navbar', compact('category'));
    // }

    public function create()
    {
        //
        $cats = Category::all();
        return view('Admin.jeux.create' , compact('cats'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JeuxRequest $request)
    {
        //
        Jeux::create(request()->all());

        return redirect('Admin/jeux');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jeux  $jeux
     * @return \Illuminate\Http\Response
     */
    public function show(Jeux $jeux)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jeux  $jeux
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $jeux = Jeux::find($id);
        $cats = Category::all();
        return view('Admin.jeux.edit',compact('jeux','cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jeux  $jeux
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $jeux = Jeux::find($id);

            $jeux->update($request->all());

  
            return redirect()->route('jeux.index')
                        ->with('success','Jeux updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jeux  $jeux
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jeux = Jeux::find($id);
     $jeux->delete();

     return redirect('Admin/jeux')->with('success', 'Stock has been deleted Successfully');
    }
}
