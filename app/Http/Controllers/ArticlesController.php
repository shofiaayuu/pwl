<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\ArticlesModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('articles.create_articles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        ArticlesModel::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' => $image_name,
        ]);
        return 'Artikel berhasil disimpan';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(ArticlesModel $articles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = ArticlesModel::find($id);

        return view('articles.edit',['articles' => $articles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articles = ArticlesModel::find($id);

        $articles->title = $request->title;
        $articles->content = $request->content;

        if ($articles->featured_image && file_exists(storage_path('app/public/' . $articles->featured_image))) {
            \Storage::delete('public/' .$articles->featured_image);
        }
        $image_name = $request->file('image')->store('images','public');
        $articles->featured_image = $image_name;

        $articles->save();
        return 'Artikel berhasil diubah';



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticlesModel $articles)
    {
        //
    }

    public function cetak_pdf(){
        $articles = ArticlesModel::all();
        $pdf = PDF::loadview('articles.articles_pdf', ['articles' =>$articles]);
        return $pdf->stream();
    }
}
