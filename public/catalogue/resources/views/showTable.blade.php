

<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <title>show Films</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

  <body>
  <div class="container" style="margin-left:0px">
        <div class="row" style="margin-right:0px;width:1200px;margin-left:12px">
            <div class="col-ms-12">
                <div class="card">
                    <div class="card-header " > <strong>The movie Database </strong></div>
                    <div class="card-body">
                        <a href="{{ url('/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New movie
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Director</th>
                                        <th>Category</th>
                                        <th>Path</th>
                                    </tr>
                                    </thead>
                                <tbody>
                                @foreach($films as $film)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $film->id }}</td>
                                        <td>{{ $film-> name}}</td>
                                        <td>{{ $film-> director}}</td>
                                        <td>{{ $film-> category_id}}</td>
                                        <td>{{ $film-> path}}</td>
                                        
                                        <td>
                                            <a href="{{ url('/info/' . $film->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/edit/' . $film->id ) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                           <form method="POST" action="{{ url('/film' . '/' . $film->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
   
  </body>
</html>
