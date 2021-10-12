<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; //←追加。DB接続に必要なクラスをインポートする。

class PostController extends Controller
{
    public function post(Request $request)
    {
        $items = DB::select('select * from reviews');
        return view('post', ['items' => $items]);
    }

    //こちらを追加。formの値を取得し$paramに代入
    public function create(Request $request) {
        $param = [
            'live_date' => $request->live_date, //取得したいデータをinput要素のname属性
            'musician' => $request->musician,
            'venue' => $request->venue,
            'text' => $request->text,
        ];
        //DBに接続しデータを挿入する。第１パラメータにSQL文、第２に$paramを。
        DB::insert('insert into reviews (live_date, musician, venue, text, created_at) values (:live_date, :musician, :venue, :text, NOW())', $param);
        //トップページに遷移する
        return redirect('/');
    }
}
