<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kontribusi;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexs()
    {
        return view('main_project.homepage');
    }
    public function kontribusi(Request $request){
        $kontribusi = new kontribusi();
        $kontribusi->user_id = Auth::user()->id;
        $kontribusi->judul = $request->judul;
        $kontribusi->artikel = $request->artikel;
        $file = $request->file('foto');

        $filename = Auth::user()->id.Auth::user()->name.RAND().'.'.$file->getClientOriginalExtension();
        $kontribusi->foto = $filename;
        $destination = 'kontribusi';
        $file->move($destination,$filename);
        $kontribusi->save();
        return redirect('/kontribusis');
    }
    public function kontribusilist(Request $request){
        $kontribusi = kontribusi::all();

        if($request->has('judul')){
            $kontribusi = kontribusi::where('judul','like','%'.$request->judul.'%')->get();
        }
        return view('main_project.kontribusilist',['kontribusis' => $kontribusi]);
    }
}

