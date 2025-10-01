<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class PostsController extends Controller
{
    
    public function index(){
        return view('posts.index');
        // viewファイルの中の　posts ファイルから使う
    }

       public function post(Request $request){
        // webphpの行先と合わせないとエラーになる
        // バリエーション項目の便利セットが大文字リクエスト、ブレードから送られてきた（入力した）情報・・・投稿した人や日時も含まれてるのは＄リクエスト
        // 下記はバリエーション（条件付け）の型
        $request->validate([
              'word' => 'required|max:150|min:1',
            //   name属性、指示の内容　の順番です、入力必須、150まで1以上
            // unique:authors,XXX　を使うと同じもの入力不可：テーブル名,カラム名
        ]);
        $user_id = Auth::id();
        dd($user_id);
        // ログインしているユーザーの情報を取りたいとき
        $post = $request->input('post');
        Posts::create(['post' => $post,'user_id' => $user_id]);
        // テーブル名：：登録する指示、テーブル名の中のカラム名、登録したいもの

        return redirect('/top');
       }

}
