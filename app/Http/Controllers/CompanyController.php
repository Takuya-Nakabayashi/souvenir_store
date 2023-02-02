<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        // サブ側最新のお土産で使用
        $latestItems = Item::latest()->limit(3)->get();
        return view('companies.index',[
            'latestItems' => $latestItems,
        ]);
    }
}
