<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
   
<link href="../../public/css/profil.css" rel="stylesheet">
</head>

<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="wrapper">
    <div class="left">
    <h4>Alex William</h4>

        <img  src="../../../public/assets/img/{{$user[0]->profile_photo_path}}">    
                   <div>{{$user[0]->profile_photo_path}}</div>
                           
                      <form action="{{ url('/user/edit')}}" method="post" enctype="multipart/form-data">
                
                                <input name="image" type="file" class="custom-file-input" >
                                <!-- <label class="custom-file-label" style='margin-left:0px'>Choose ...</label> -->
                             <input style='margin-top:0px' type="submit" class="btn " value="submit">
                              
                      </form>
                         
    </div>

  
               

 <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
            <form action="">
             <div class="form-group">
                   <label for="nom">Name</label>
                   <input type="email" class="form-control" id="name"  name="email" value="{{$user[0]->name}}">
             </div>
             <div class="form-group">
                   <label for="email">Email:</label>
                   <input type="email" class="form-control" id="email" placeholder="" name="email" value="{{$user[0]->email}}">
             </div>
   
    <input type="submit" value=" Update">
  </form>
             
            </div>
        </div>
    </div>
</div>
</body>


</html><!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
   
<link href="../../public/css/profil1.css" rel="stylesheet">
</head>

<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="wrapper">
    <div class="left">
    <h4>Alex William</h4>

        <img src="../../../public/assets/img/{{$user[0]->image}}" alt="user" width="100">
        
         
            <div class="form-group">
                                        
                              <div class="form-group">
                            <div class="custom-file">
                                <input name="image" type="file" class="custom-file-input">
                                <label class="custom-file-label" style='margin-left:0px'>Choose ...</label>
                                <div>
                            </div>

                               <div class="modal-footer">

                                    <input style='margin-top:0px' type="submit" class="btn btn-success" value="Edit">
                                </div>
                         </div>
    </div>
</div>
  
                </div>

 <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
            <form action="">
             <div class="form-group">
                   <label for="nom">Name</label>
                   <input type="email" class="form-control" id="name"  name="email">
             </div>
             <div class="form-group">
                   <label for="email">Email:</label>
                   <input type="email" class="form-control" id="email" placeholder="" name="email">
             </div>
   
    <input type="submit" value=" Update">
  </form>
             
            </div>
        </div>
    </div>
</body>


</html>