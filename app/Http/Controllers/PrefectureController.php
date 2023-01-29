<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use App\Prefecture;

class PrefectureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
    }

    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $prefectures = Prefecture::find($id);
        $items = Item::all();
        // サブ側最新のお土産で使用
        $latestItems = Item::latest()->limit(3)->get();
        return view('prefectures.show', [
          'title' => 'お土産一覧',
          'prefectures' => $prefectures,
          'items' => $items,
          'latestItems' => $latestItems,
        ]);
    }

  
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
