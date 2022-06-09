<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Theme;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    // Index Page
    public function index(){
      
        $latest_news = News::latest()->where('status', 1)->take(3)->get();
        $news_latest = News::latest()->where('status', 1)->paginate(3);
        $theme = Theme::first();
        $categories = Category::where('status', 1)->where('parent_id', 0)->get();
        $categories_news_views = News::orderBy('view_count', 'DESC')->take(5)->get();
      
      return view('index', compact('latest_news', 'news_latest','theme',  'categories', 'categories_news_views'));
    }

    //news single

    public function newsSingle($slug){
       $news_detail = News::Where('slug', $slug)->first();
       return view ('newsSingle' , compact('news_detail'));
    }
}
