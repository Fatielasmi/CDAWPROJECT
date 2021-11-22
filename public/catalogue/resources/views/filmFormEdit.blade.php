
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <title>test</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

  <body>

<div class="card">

  <div class="card-header">Edit your film</div>
  <div class="card-body">
      
      <form action="{{ url('edit/' .$films->id) }}" method="post">
        {!! csrf_field() !!}
        @method("POST")
        <input type="hidden" name="id" id="id" value="{{$films->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$films->name}}" class="form-control"></br>
        <label>Director</label></br>
        <input type="text" name="director" id="director" value="{{$films->director}}" class="form-control"></br>
        <label>category</label></br>
        <input type="text" name="category" id="address" value="{{$films->category_id}}" class="form-control"></br>
        <label>path</label></br>
        <input type="text" name="path" id="mobile" value="{{$films->path}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</body>
</hml>