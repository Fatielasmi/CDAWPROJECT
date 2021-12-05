<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\film;
use App\Models\media;
use App\Models\commentaires;
use App\Models\media_playlist;
use App\Models\playList;
use App\Models\favoris;
use Illuminate\Support\Facades\Auth;
use App\Models\watchList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class listeMediasController extends Controller
{
    public function afficher(){
        return view('index');
    }
   
    public function GoTVShows(){
        $userId = Auth::id();
        $user=User::where('id',$userId)->get();
        $movies1=media::orderBy('YEAR', "DESC")->paginate(5);
        $movies2=media::orderBy('YEAR', "ASC")->paginate(5);
        $movies3=media::orderBy('id', "DESC")->paginate(5);
        $movies4=media::orderBy('id', "ASC")->paginate(5);
        return view('shows')->with('movies1',$movies1)->with('movies2',$movies2)
        ->with('movies3',$movies3)->with('movies4',$movies4)->with('user',$user);
    }
    public function GoMovies(){
        $userId = Auth::id();
        $user=User::where('id',$userId)->get();
        $movies1=media::orderBy('id', "DESC")->paginate(5);
        $movies2=media::orderBy('YEAR', "DESC")->paginate(5);
        $movies3=media::orderBy('YEAR',"<", "2000")->paginate(5);
        $movies4=media::orderBy('id', "ASC")->paginate(5);
        return view('movies')->with('movies1',$movies1)->with('movies2',$movies2)
        ->with('movies3',$movies3)->with('movies4',$movies4)->with('user',$user);
    }
    public function GoKids(){
        $userId = Auth::id();
        $user=User::where('id',$userId)->get();
        return view('kids')->with('user',$user);
    }
    public function GoMangas(){
        $userId = Auth::id();
        $user=User::where('id',$userId)->get();
        return view('mangas')->with('user',$user);
    }
    public function GoMusic(){
        $userId = Auth::id();
        $user=User::where('id',$userId)->get();
        return view('music')->with('user',$user);
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
    // afficher 
    public function Viewmovie($id){
    $media= media::where('id',$id)->get();
    $cat= category::where('id',$media[0]->category_id)->first()->name;
  
        $CommentUser = DB::table('users')
        ->Join('commentaires', 'users.id', '=', 'commentaires.user_id')
        ->where('media_id', $id)->get();

     
         return view('info')->with('media',$media)->with('cat',$cat)->with('CommentUser',$CommentUser);
        
    }
 //les deux methodes: affichage des films se trouvant dans la BD 
    public function test(){
        $userId = Auth::id();
        $user=User::where('id',$userId)->get();
        $films=media::all();
        $lastFilm = media::where('YEAR','>','2000')->orderBy('YEAR', "ASC")->paginate(5);
        $TopFilm = media::orderBy('ID')->paginate(5);
        $CommingFilm = media::orderBy('YEAR', "DESC")->paginate(5); 
        return view('dashboard')->with('lastFilm',$lastFilm)->with('TopFilm',$TopFilm)
        ->with('CommingFilm',$CommingFilm)->with('user',$user);
    }
    
    // ....
    public function getinfo(Request $request){
        $Name=$request->input('name');
        $films= media::where('title','like',"%".$Name."%")->first();
        return view('info')->with('films',$films);
    }
  
// deconnexion du user   
    public function deconnexion(){
       auth()->logout();
       return redirect('/index');
    }
// chercher un film 
    public function search(){
        $Search=request()->input('Search');
        
       $medias= media::where('title','like',"%$Search%")
             
             ->paginate(6);

            return view('medias.search')->with('medias',$medias);
     }
 //stocker le commentaire du user dans la BD
     public function Store($id){
        $pseudo=request('pseudo');           
        $userId = Auth::id();
                 
        DB::table('commentaires')->insert([
            "user_id"=> $userId,
            "media_id"=>$id,
            "text"=>$pseudo,
           
           ]);
 
         return back();
     }
//ajouter le film dans favoris 
public function addFavoris($id){
  
  $userId = Auth::id();
  DB::table('favoris')->insert([
    "user_id"=> $userId,
    "media_id"=>$id,
   ]);
   $medias = DB::table('media')
   ->Join('favoris', 'favoris.media_id', '=', 'media.id')
   ->where('user_id', $userId)->get();
  
  return view('medias.favoris')->with('medias',$medias);
 }
 //ajouter le film dans playlist
public function  PForm($id){
  
   $medias=media::where('id',$id)->get();
   $userId = Auth::id();
   $playlist=playlist::where('user_id',$userId)->get();
    
   return view('medias.playlistForm')->with('medias',$medias)->with('playlist',$playlist);
   }
  
  public function addToPlayList(Request $request ,$id){
      ///je dois inserer dans media_playlist 
      $req=$request->input('nom');
      $playL=playlist::where('name',$req)->get();
     
      DB::table('media_playlist')->insert([
        "playlist_id"=>$playL[0]->id,
        "media_id"=>$id,
        ]);
        $media=media_playlist::where('playlist_id',$playL[0]->id)->get();
        $medias = DB::table('media')
   ->Join('media_playlist', 'media_playlist.media_id', '=', 'media.id')
   ->where('playlist_id',$playL[0]->id)->get();
    return view('medias.playList')->with('playlist',$playL)->with('medias',$medias);
  }
 
 
  public function GoPlayList(){

    $userId = Auth::id();
    $playlist=playlist::where('user_id',$userId)->get();
   
    
   
      return view('medias.ChoixPlaylist')->with('playlist', $playlist);
}
public function dataPlaylist($id){

 $medias = DB::table('media')
    ->Join('media_playlist', 'media_playlist.media_id', '=', 'media.id')
     ->Join('playlist','playlist.id', '=', 'media_playlist.playlist_id')
    ->where('playlist_id',$id)
    ->get();
    return view('medias.playList')->with('medias',$medias);
}


  //creer une playlist ..
public function create_playlist(Request $request ,$id){
    $req=$request->input('nom');
    
    $userId = Auth::id();
    DB::table('playlist')->insert([
      "name"=>$req,
      "user_id"=>$userId,
      ]);
      return back();
}

// ajouter le film dans la BD et l'afficher 
public function addWatchlist($id){
  
    $userId = Auth::id();
    DB::table('watchlist')->insert([
      "user_id"=> $userId,
      "media_id"=>$id,
     ]);
     $medias = DB::table('media')
     ->Join('watchlist', 'watchlist.media_id', '=', 'media.id')
     ->where('user_id', $userId)->get();
    
    return view('medias.watchlist')->with('medias',$medias);
    

   }
   //photo de profil 
  public function Viewprofil(){
    $userId = Auth::id();
    $user=User::where('id',$userId)->get();
    return view('profile')->with('user',$user);
    
  }
  public function changeprofil(Request $request){
    
    
    print_r($_FILES);
  }
  public function UserEditProfile(Request $req){

    // $nom = $req->input('nom');
    // $prenom = $req->input('prenom');
    // $email = $req->input('email');
    //  $id = $req->input('id');
    // $image = $req->input('image');
   
   if ($req->hasfile('image')){
    $id = Auth::id();
       $file = $req->file('image');
       $extension = $file->getClientOriginalExtension();
       $filename = time().'.'.$extension;
       $file->move('assets/img/',$filename);
       User::where('id', $id)->update(['profile_photo_path'=>$filename]);
       return redirect('/profil');
   }
   else {
       return $req;
       User::where('id', $id)->update(['profile_photo_path'=>'']);

   }



}

public function GoFavoris(){
    $userId = Auth::id();
    $user=User::where('id',$userId)->get();
   $medias = DB::table('media')
   ->Join('favoris', 'favoris.media_id', '=', 'media.id')
   ->where('user_id', $userId)->get();
  
  return view('medias.favoris')->with('medias',$medias)->with('user',$user);

}
public function GoWatchlist(){
    $userId = Auth::id();
    $medias = DB::table('media')
    ->Join('watchlist', 'watchlist.media_id', '=', 'media.id')
    ->where('user_id', $userId)->get();
   
   return view('medias.watchlist')->with('medias',$medias);

}
}
