<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <title>test</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

  <body>
  <div class="card">
  <div class="card-header">Add a new movie</div>
  <div class="card-body">
      
      <form action="{{ url('create') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Category</label></br>
        <input type="text" name="category" id="Category" class="form-control"></br>
        <label>Director</label></br>
        <input type="text" name="director" id="director" class="form-control"></br>
        <label>Path</label></br>
        <input type="text" name="path" id="path" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
  </div>
</body>
</html>