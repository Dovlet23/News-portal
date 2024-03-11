<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * List articles
     */
    public function index()
    {
        $articles = Articles::all();
        return view('articles/index', [
            'articles' => $articles
        ]);

    }

    /**
     * form create article
     */
    public function create()
    {
        return view('articles/create');
    }

    /**
     * store request in table
     *
     */
    public function  store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:3',
            'body' => ['required', 'string', 'min:10']
        ]);
        $model = Articles::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);
        return redirect()->back();
    }

    /**
     * @param int $id
     * @param Request $request
     *
     */
    public function update(int $id, Request $request)
    {
        $model = Articles::find($id);
        return view('articles/update', [
            'article' => $model
        ]);
    }

    /**
     * show the article
     * @param int $id
     *
     */
    public function show(int $id)
    {

        $model = Articles::find($id);
        return view('articles/show', [
            'article' => $model
        ]);
//       //$model = Articles::where('id', $id)->first();
//        return view('articles/show', [
//            'article' => Articles::find($id)
//        ]);
    }

    /**
     * delete article
     * @param int $id
     *
     */
    public function delete(int $id)
    {

    }
}
