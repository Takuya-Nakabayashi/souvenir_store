<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Item;
use App\Prefecture;
use App\Like;
use App\User;

class ItemController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $count = Item::all()->count();
        $items = Item::all();
        $prefectures = Prefecture::all();
        $likeItems = Item::withCount('likes')->orderBy('likes_count', 'desc')->limit(10)->get();
        // サブ側最新のお土産で使用
        $latestItems = Item::latest()->limit(3)->get();
        return view('items.index',[
            'items' => $items,
            'prefectures' => $prefectures,
            'prefecture_items' => Item::prefecture_items()->get(),
            'count' => $count,
            'likeItems' => $likeItems,
            'latestItems' => $latestItems,
            ]);
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
        $items = Item::find($id);
         // サブ側最新のお土産で使用
        $latestItems = Item::latest()->limit(3)->get();
        return view('items.show' ,[
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
    public function toggleLike($id){
        $user = \Auth::user();
        $item = Item::find($id);
        if($item->isLikedBy($user)){
            // いいねの取り消し
            $item->likes->where('user_id', $user->id)->first()->delete();
            // \Session::flash('success', 'いいねを取り消しました');
        } else {
            // いいねを設定
            Like::create([
                'user_id' => $user->id,
                'item_id' => $item->id,
            ]);
            // \Session::flash('success', 'いいねしました');
        }
        return redirect()->route('items.show', $id);
    }
   public function searchItems(Request $request){
        // サブ側最新のお土産で使用
        $latestItems = Item::latest()->limit(3)->get();
       
        // 検索機能
        $keyword = $request->input('keyword');
        if(empty($keyword)){
            $items =Item::paginate(100);
        }else{
            $query = Item::query()
                ->where('name', 'LIKE', "%{$keyword}%");
            $items = $query->latest()->paginate(100);
        }
       
       return view('items.search', [
           'title' => '検索結果',
           'items' => $items,
           'keyword' => $keyword,
           'latestItems' => $latestItems,
           ]);
   }
}
