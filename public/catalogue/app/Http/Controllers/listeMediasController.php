<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\film;
use App\Models\media;
use App\Models\commentaires;
use App\Models\watchList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class listeMediasController extends Controller
{
    public function afficher(){
        return view('index');
    }
    public function movie(){
        return view('movie');
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
    public function Viewmovie($id){
    $media= media::where('id',$id)->get();
    $cat= category::where('id',$media[0]->category_id)->first()->name;
    // $comment=commentaires::where('media_id',$id)->get();
      $comment = DB::table('commentaires')->where('media_id', $id)->get();
      

     
         return view('info')->with('media',$media)->with('cat',$cat)->with('comment',$comment);
        
    }
 //les deux methodes juste pour afficher la description des films : test
    public function test(){
        $films=media::all();
        $lastFilm = media::where('YEAR','>','2000')->paginate(5);
        $TopFilm = media::orderBy('ID')->paginate(5);
        $CommingFilm = media::orderBy('YEAR', "DESC")->paginate(5);
       

        // $MPFilm = DB::table('media')
        // ->rightJoin('watchlist', 'media.id', '=', 'watchlist.media_id')
        // ->select('media_id','count(user_id) as score')
        // ->groupBy('media_id')
        // ->orderBy('score')
        // ->paginate(5); 
        return view('test')->with('lastFilm',$lastFilm)->with('TopFilm',$TopFilm)
        ->with('CommingFilm',$CommingFilm);
    }
    
    public function getinfo(Request $request){
        $Name=$request->input('name');
        $films= media::where('title','like',"%".$Name."%")->first();
        return view('info')->with('films',$films);
    }
  
  
    public function deconnexion(){
       auth()->logout();
       return redirect('/index');
    }

    public function search(){
        $Search=request()->input('Search');
        // dd($Search);
       $medias= media::where('title','like',"%$Search%")
             
             ->paginate(6);

            return view('medias.search')->with('medias',$medias);
     }

}
