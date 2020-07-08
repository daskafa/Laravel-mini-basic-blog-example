<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models

use App\Models\data2;
use App\Models\category;

class dataController extends Controller
{
    public function index(){
      $category = category::all();
      // dd($category);
      $data = data2::orderBy('id', 'desc')->get();
      return view('welcome', compact('data', 'category'));
    }

    public function create(){
      $category = category::all();
      return view('create', compact('category'));
    }

    public function createPost(Request $request){
      $request->validate([
        'title' => 'min:3'
      ]);

      $data2 = new data2;
      $data2->title = $request->title;
      $data2->category_id = $request->categories;
      // if (isset($request->category_id)) {
      //   return 'kategori gelmedi';
      // }
      $data2->save();
      return redirect()->route('homepage');
    }

    public function update($id){
      $data2 = data2::findOrFail($id);
      $category = category::all();
      return view('update', compact('data2', 'category'));
    }

    public function updatePost(Request $request, $id){
      $data2 = data2::findOrFail($id);
      $data2->title = $request->title;
      $data2->category_id = $request->categories;
      $data2->save();
      return redirect()->route('homepage');
    }

    public function single($title){
      $data2 = $title;
      // dd($data);
      return view('single')->with('buisimlekullanilacak', $data2);
    }

    public function delete($id){
      $data2 = data2::find($id);
      $data2->delete();
      return redirect()->route('homepage');
    }


}
