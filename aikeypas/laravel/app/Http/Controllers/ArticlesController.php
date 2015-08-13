<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Controllers\Controller;

use App\Article;
use Carbon\Carbon;


class ArticlesController extends Controller
{
    public function index(){

    	//$articles = Article::all();
    	//$articles = Article::latest('published_at')->get();

    	$articles = Article::latest('published_at')->published()->get();

    	//$articles = Article::latest('published_at')->where('published_at','<=', Carbon::now())->get();

    	//$articles = Article::order_by('published_at','desc')->get(); //Will Not Work

    	//echo "<pre/>";
    	//print_r($articles->toArray());

    	//return $articles;

    	return view('articles.index',compact('articles'));
    }


    function show($id){
    	$article = Article::findOrFail($id);

    	//dd($article);

    	if(is_null($article)){
    		abort(404);
    	}

    	//return $article;
    }

    function create(){

    	return view('articles.create');
    }

    function store(CreateArticleRequest $request){

    	//$input = Request::get('title');
    	//$input = Request::all();

    	/*$article  = new Article;

    	$article->title = $input['title'];
    	$article->body 	= $input['body'];*/

    	//$article = new Article(['title'=>'This is new one from file','body'=>'New Body From file']);

    	//$input['published_at'] = Carbon::now();

    	//Article::create($input);

    	//Article::create(Request::all());

        Article::create($request->all());

    	//return $input;

    	return redirect('articles');
    }
}
