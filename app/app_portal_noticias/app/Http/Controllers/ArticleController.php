<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

// importando o controller
use App\Models\Article;

// importando a biblioteca de cache
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // inicializando o array de artigos vazio
        $articles = [];

        // // se já existem dados em cache no redis
        // if (Cache::has('ten_last_articles')) {

        //     // obtém os dados a partir do cache redis
        //     $articles = Cache::get('ten_last_articles');
        // } else {

        //     // pesquisando as 10 noticías mais recentes no bd
        //     $articles = Article::orderByDesc('created_at')->limit(10)->get();

        //     // populando o cache redis, com validade de 15 segundos
        //     Cache::put('ten_last_articles', $articles, 15);
        // }

        // forma mais otimizada de realizar o processo descrito acima
        $articles = Cache::remember('ten_last_articles', 15, function () {

            return Article::orderByDesc('created_at')->limit(10)->get();
        });

        // retornando a view com os dados
        return view('article', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
