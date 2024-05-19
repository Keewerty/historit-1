<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container vh-100 d-flex justify-content-center align-items-center">
    @foreach ($detailasset as $da)
    <div class="row align-items-center">
      <div class="col-md-6 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Serial: </b>{{$da->serial_number}}</li>
            <li class="list-group-item"><b>Category: </b>{{$da->category}}</li>
            <li class="list-group-item"><b>Model: </b>{{$da->model}}</li>
            <li class="list-group-item"><b>Model No: </b></li>
            <li class="list-group-item"><b>Location: </b></li>
            <li class="list-group-item"><b>Default Location: </b></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center">
        <img src="{{ asset('uploads/'.$da->image) }}" alt="Asset Image" class="img-fluid">
      </div>
      <div class="col-12 text-center mt-3">
        {{-- <a href="{{ URL::previous() }}" class="btn btn-danger">X</a> --}}
        {{-- <a href="{{route('asset.destroy', $da->id)}}"><button type="button" class="btn btn-danger">Delete</button></a> --}}
      </div>
    </div>
    @endforeach
</div>

</body>
</html>

<style>
  body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

.vh-100 {
    height: 100vh;
}

</style>