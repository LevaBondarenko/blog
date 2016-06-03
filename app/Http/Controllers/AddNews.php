<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 27.05.2016
 * Time: 17:23
 */

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class AddNews extends BaseController
{
    public function index()
    {
        return view('add');
    }
    public function create(){
        return view('create');
    }
    public function update(){

    }
    public function delete(){

    }
}