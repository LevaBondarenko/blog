<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 27.05.2016
 * Time: 17:23
 */

namespace App\Http\Controllers;
use App\BaseNews;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AddNews extends BaseController
{
    public function index()
    {
        return view('add');
    }
    public function create(){
        return view('admin.index');
    }
    public function store(BaseNews $baseModel, Request $request)
    {
        $baseModel->create($request->all());
        return redirect()->route('create')->with('status', 'Запись добавлена!');
    }
    public function update(){

    }
    public function delete(){

    }
    public function ShowNews()
    {
        $showNews = \App\BaseNews::orderBy('ID','DESC')->paginate(5);
        return \Illuminate\Support\Facades\View::make('BaseNews')->with('showNews',$showNews);
    }
    public function ShowMoreNews($id)
    {
        $showNews = \App\BaseNews::where('ID', $id)->orderBy('ID','DESC')->paginate(5);
        return \Illuminate\Support\Facades\View::make('NewsMore')->with('showNews',$showNews);
    }

}