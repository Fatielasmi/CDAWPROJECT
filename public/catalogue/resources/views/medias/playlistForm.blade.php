


<body>

  
 
<div>
  <h2>Your Playlists </h2>
        @foreach($playlist as $play)
       <div> {{$play->name}} </div>
        @endforeach
</div>
 

<form action="../playlist/{{$medias[0]->id}}" method="POST">
        @csrf
        <label for="nom">choose your playList name : </label>
        
     
        <input selected type="text" name="nom" id="nom">
     
        <input type="submit" value="submit !">
    </form>
<h2>OR Creat New PlayList </h2>
<form action="../create_playlist/{{$medias[0]->id}}" method="POST">
        @csrf
        <label for="nom">Enter your  playList's name : </label>
        <input type="text" name="nom" id="nom">
        <input type="submit" value="submit !">
    </form>
</body