<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Musician;

class MusicianController extends Controller
{
   public function add()
    {
        return view('admin.musician.create');
    }

    public function create(Request $request)
    {
        
        $this->validate($request, Musician::$rules);

        $musician = new Musician;
        $form = $request->all();

        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        // if (isset($form['image'])) {
        //     $path = $request->file('image')->store('public/image');
        //     $musician->image_path = basename($path);
        // } else {
        //     $musician->image_path = null;
        // }

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        // unset($form['image']);

        // データベースに保存する
        $musician->fill($form);
        $musician->save();

        return redirect('admin/musician/create');
    }

    public function edit($id)
    {
        $post = Musician::find($id);
        
        return view('admin.musician.edit',['post'=>$post]);
    }

    public function update()
    {
        return redirect('admin/musician/edit');
    }


    public function index(Request $request)
    {
       
        $posts = Musician::all();
        
        return view('admin.musician.index', ['posts' => $posts]);
    }
    
    public function show($id)
    {
       
        $post = Musician::find($id);
        
        return view('admin.musician.show', ['post' => $post]);
    }
    
}
