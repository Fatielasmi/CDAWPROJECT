<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <title>MStore</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

  <body>


<section style="margin-top: 0px;" class="pt-5 pb-5">
        
        <div class="row">
            <div class="col-5">
               
                <img style="margin: 50px ; margin-bottom:30px; width: 500px;height: 400px;"
                    src=' {{$media[0]->image}}'>
                <div style="margin-left: 180px;"> <a class="btn btn-primary" href="#" role="button"> Like </a>
                    <button class="btn btn-danger" type="button">Dislike</button>
                </div>
            </div>
            <div class="col-7" style="color: white;">
                <div style="background-color: #FF8D1B; margin: 50px; height: 400px;" class="card  text-white mb-3">
               
                    <div class="card-header display-2"></div>
                   
                    <div class="card-body">
                        <h4 class="card-title">INFORMATIONS </h4>
                        <p class="card-text">
                        <div style="margin-left: 50px ;">
                            <div class="row">
                                <div class="col-4">
                                    <div style="margin-bottom: 7px ;">Category :</div>
                                    <div style="margin-bottom: 7px ;">Release date: </div>
                                    <div style="margin-bottom: 7px ;">Description : </div>
                                </div>
                           
                            
                                <div class="col-8">
                                    <div style="margin-bottom: 7px ;"> {{$cat}}
                                    
                                    </div>
                                    <div style="margin-bottom: 7px ;">{{$media[0]->year;}} </div>
                                    <div style="margin-bottom: 7px ;">{{ $media[0]->description; }}  </div>
                                   
                                </div>
                            </div>


                        </div>
                        </p>
                    </div>
                </div>


            </div>
        </div>
        
      
        <form action='../info/{{$media[0]->id}}' method='POST'>
            @csrf
            <div class="form-group" style="margin-left: 70px;margin-right: 70px;">
                <label style="color: black;"for="message">Comment :</label>
                <textarea class="form-control" id="message" rows="3" name='pseudo' ></textarea>
            </div>
            <div class="float-sm-right" style="margin-right: 70px;"><button class="btn btn-primary"
                    type="submit">Submit</button></div>

        </form>

        <div>
            <h1>Commentaires</h1>
           
          
          
            <div>
           
            @foreach($CommentUser as $cu)
            
       <h3>{{$cu->name}}</h3>
      
                <p>{{$cu->text}}</p>
</div>

      
            @endforeach
</div>


    </section>

</body>
</html>