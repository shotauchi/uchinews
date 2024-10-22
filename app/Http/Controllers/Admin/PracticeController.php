<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function add()
    {
        return view('admin.practice.create');
    }
    public function create(Request $request)
    {
        // // Validationを行う
        // $this->validate($request, Practice::$rules);

        // $practice = new Practice;
        // $form = $request->all();

        // // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        // if (isset($form['/admin/practice/create'])) {
        //     $path = $request->file('/admin/practice/create')->store('public/admin/practice/create');
        //     $practice->fill = basename($form);
        // } else {
        //     $practice->fill = null;
        // }

        // // フォームから送信されてきた_tokenを削除する
        // unset($form['_token']);
        // // フォームから送信されてきたimageを削除する
        // unset($form['image']);

        // // データベースに保存する
        // $practice->fill($form);
        // $practice->save();
        // admin/news/createにリダイレクトする
        return redirect('admin/practice/create');
    }
}
