<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\film;
use Illuminate\Http\Request;

class listeMediasController extends Controller
{
    public function afficher(){
        return view('index');
    }
    public function getForm(){
       $films= film::all();
      
       return view ('showTable')->with('films', $films);
    }
    public function create()
    {
        $categories= category::all();
        return view('create')->with('categories',$categories);
    }
 
    public function addFilm(Request $req){
        $name = $req->input("name");
        $director = $req->input("director");
        $category = $req->input("category");
        $path = $req->input("path");
       
        $data = [
            'name'=>$name,
            'director'=>$director,
            'category_id'=>$category,
            'path'=>$path

        ];
       film::create($data);
   
        print_r($req->input());
       
     
    return redirect('getForm');

    }

    public function edit($id)
    {
        $films = film::find($id);
        return view('filmFormEdit')->with('films', $films);
    }


    public function EditFilm(Request $req, $id){

        $name = $req->input("name");
        $name = $req->input("name");
        $director = $req->input("director");
        $category = $req->input("category");
        $path = $req->input("path");

       film::where('id', $id)->update(['name' => $name,'director'=>$director,'category_id'=>$category,'path'=>$path]);
       //print_r($req->input());
       return redirect('getForm');
   

    }

    public function destroy($id)
    {
        film::destroy($id);
        return redirect('getForm')->with('flash_message', 'Contact deleted!');  
    }

    public function viewFilm($id){

        $films = film::where('id', $id)->get();
        return view('info',['films'=>$films]);
        
    }
 
}
