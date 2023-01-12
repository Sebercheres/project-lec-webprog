<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Type;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('article.index', [
            'articles' => Article::paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create', [
            'types' => Type::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'image' => 'required',
                'type_id' => 'required',
                'image' => 'required',
                'background' => 'required'
            ]
        );

        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/storage/article/images'), $imageName);
        $article->image = $imageName;

        $article->type_id = $request->type_id;

        $imageBackground = time() . '.' . $request->background->extension();
        $request->background->move(public_path('/storage/article/backgrounds'), $imageBackground);
        $article->background = $imageBackground;

        $article->user_id = '1';
        $article->save();
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findorFail($id);
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        return view('article.edit', [
            'article' => Article::find($id),
            'types' => Type::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        // hewo sedank apa anda? - awe
        // lagi liat ini kenapa ada update sama edit weee -odin
        // kan emg ada edit itu buat ke pagenya update itu buat ambil datanya-awe
        // ooh i c i c thank you we
        // ur welcome
        $article = Article::find($id);

        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'image' => 'required',
                'type_id' => 'required',
                'image' => 'file',
                'background' => 'file'
            ]
        );

        $article->title = $request->title;
        $article->description = $request->description;

        if ($request->image != null) {
            unlink(public_path('/storage/article/images/' . $article->image));
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/storage/article/images'), $imageName);
            $article->image = $imageName;
        }

        if ($request->background != null) {
            unlink(public_path('/storage/article/backgrounds/' . $article->background));
            $imageBackground = time() . '.' . $request->background->extension();
            $request->background->move(public_path('/storage/article/backgrounds'), $imageBackground);
            $article->background = $imageBackground;
        }

        $article->type_id = $request->type_id;

        $article->user_id = '1';
        $article->save();
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        unlink(public_path('/storage/article/images/' . $article->image));
        unlink(public_path('/storage/article/backgrounds/' . $article->background));
        $article->delete();
        return redirect()->route('articles.index');
    }
}
