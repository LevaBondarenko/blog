<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 27.05.2016
 * Time: 12:13
 */

namespace App\Http\Controllers;

use App\Tjournal;
use App\Weproject;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Flow;
use Illuminate\Support\Facades\View;


class Flow extends BaseController
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $flow = \App\Flow::orderBy('date','DESC')->paginate(5);
        return \Illuminate\Support\Facades\View::make('index')->with('index',$flow);
    }
    public function indexTj()
    {
        $tj = Tjournal::orderBy('date','DESC')->paginate(5);
        return \Illuminate\Support\Facades\View::make('tj')->with('tj',$tj);
    }
    public function indexWp()
    {
        $wp = Weproject::orderBy('date','DESC')->paginate(5);
        return View::make('wp')->with('wp',$wp);
    }
}