<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assets</title>
    {{-- <link rel="stylesheet" href="resources/css/assets/index.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

<div class="container" style="max-width: 7000px;">
    @foreach ($detailasset as $da)
    <div class="row">
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Serial</b>{{$da->serial_number}}</li>
            <li class="list-group-item"><b>Category</b></li>
            <li class="list-group-item"><b>Model</b></li>
            <li class="list-group-item"><b>Model No</b></li>
            <li class="list-group-item"><b>Location</b></li>
            <li class="list-group-item"><b>Default Location</b></li>
          </ul>
        </div>
        
        <img src="{{ asset('uploads/'.$da->image) }}" alt="Book cover" class="img-fluid">

      </div>
    
      <div class="col-md-2">
        <a href="{{ URL::previous() }}" class="btn btn-danger">X</a>
      </div>
    </div>
    @endforeach
</div>

</body>
</html>