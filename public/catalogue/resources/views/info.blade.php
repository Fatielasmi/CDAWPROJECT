<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <title>test</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

  <body>


<section style="margin-top: 0px;" class="pt-5 pb-5">
        
        <div class="row">
            <div class="col-5">

                <img style="margin: 50px ; margin-bottom:30px; width: 500px;height: 400px;"
                    src='<?php echo $films[0]->path; ?>'>
                <div style="margin-left: 180px;"> <a class="btn btn-primary" href="#" role="button"> Like </a>
                    <button class="btn btn-danger" type="button">Dislike</button>
                </div>
            </div>
            <div class="col-5" style="color: white;">
                <div style="background-color: #252850; margin: 50px; height: 400px;" class="card  text-white mb-3">
                    <div class="card-header display-2"><?php echo $films[0]->name; ?></div>
                    <div class="card-body">
                        <h4 class="card-title">INFORMATIONS </h4>
                        <p class="card-text">
                        <div style="margin-left: 50px ;">
                            <div class="row">
                                <div class="col-4">
                                    <div style="margin-bottom: 7px ;">Category :</div>
                                    <div style="margin-bottom: 7px ;">Director : </div>
                                    <div style="margin-bottom: 7px ;">Description : </div>
                                </div>
                           
                            
                                <div class="col-8">
                                    <div style="margin-bottom: 7px ;"> <?php 
                                    $info=$films[0]->category_id; ?>
                                    {{$cat=App\Models\category::where('id',$info)->first()->name}}
                                    </div>
                                    <div style="margin-bottom: 7px ;"><?php echo $films[0]->director; ?> </div>
                                   
                                </div>
                            </div>


                        </div>
                        </p>
                    </div>
                </div>


            </div>
        </div>
      
        <form>
            <div class="form-group" style="margin-left: 70px;margin-right: 70px;">
                <label style="color: black;"for="message">Comment :</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
            <div class="float-sm-right" style="margin-right: 70px;"><button class="btn btn-primary"
                    type="submit">Submit</button></div>

        </form>


    </section>
</body>
</html>