<?php

namespace App\Http\Controllers;

use App\News;
use App\Jeux;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
     public function footerTop() 
    {
        $jeux = Jeux::latest()->take(3)->get();
        $news = News::latest()->take(3)->get();
        return view('front.contact',compact('jeux', 'news'));

    }

 


    public function index()
    {
        //
        $news = News::all();
        return view('Admin.news.index', compact('news'));
    }

    // public function shownews() {

    //     $news = News::take(3)->get();

    //     return view('front.index', compact('news'));
    // } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


   public function pagenews()
   {
        $tabnews = News::orderBy('most_read', 'DESC')->get();
        $news = News::orderBy('date_news', 'DESC')->paginate(10);
        $jeux = Jeux::where('n_rate', '>', 4)->take(4)->get();
        return view('front.newspage', compact('tabnews', 'news', 'jeux'));
   }

   public function shownews($id)
   {
        $news = News::where('id_news', $id)->first();
        return view('front.newspage' , compact('news'));
   }

   

   // public function showdropdown()
   // {
   //      $news = News::all();
   //      return view('layouts.navbar', compact('news'));
   // }

    public function newsblog($id) 
    {   $jeux = Jeux::all();
        $category = Category::orderBy('id_cat', 'DESC')->get();
        $newes = News::where('id_news',$id)->first();
        $newest = News::latest()->take(1)->get();
        $news = News::orderBy('date_news', 'DESC')->get();
        return view('front.news', compact('jeux', 'category', 'newes', 'newest', 'news'));
    }

   

    public function create()
    {
        //
        return view('Admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        //
        News::create(request()->all());

        return redirect('Admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $news = News::find($id);
        return view('Admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $news = News::find($id);

            $news->update($request->all());

  
            return redirect()->route('news.index')
                        ->with('success','News updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $news = News::find($id);
     $news->delete();

     return redirect('Admin/news')->with('success', 'Stock has been deleted Successfully');
    }
}
