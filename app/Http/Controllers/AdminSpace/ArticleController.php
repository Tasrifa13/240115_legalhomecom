<?php

namespace App\Http\Controllers\AdminSpace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function view_create()
    {
    	return view("panel.article.create");
    }

    public function view_update()
    {
    	return view("panel.article.update");
    }

    public function view_list()
    {
    	return view("panel.article.list");
    }

    public function post_delete(Request $request){
    	$data = array();
        
        try {
            $article_id = $request->article;

            if(strlen($article_id) == 0){
                $article_id = 0;
            }
            $data['article_id'] = $article_id;
        } catch(\Exception $e){
            $article_id = 0;
        }

        $rules = [
            'article_id' => 'exists:article, article_id'
        ];
        
        $validator = Validator::make($data, $rules);
        if(!$validator->passes()){
            $data['error'] = $validator->messages();
            return $data;
        }
        try{
            $record = ArticleModel::find($article_id);
            $record->delete();
        } catch(Exception $exception){
            $data['error'] = array('data ini tidak bisa dihapus');
            return $data;
        }
    }

    public function post_create(Request $request){
    	echo "Rafi's work";
    }

    public function post_update(Request $request){
    	
        {
            
            $request->validate([
                'title' => 'required|string',
                'image' => 'required|string',
                'isi'   => 'required|string',
            ]);

             
            Article::create([
                'title' => $request->input('title'),
                'image' => $request->input('image'),
                'isi'   => $request->input('isi'),
            ]);

            return redirect()->back()->with('success', 'Article created successfully.');
        }
  }

}

