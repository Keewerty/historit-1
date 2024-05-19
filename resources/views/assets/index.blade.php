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
    
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-1">Assets</h2>
                        <div class="overview-wrap">
                            
                            <div class="row g-3 align-items-center m-t-10">
                                <div class="col-auto">
                                    <div class="container-fluid">
                                        <a href="{{route('assets.create')}}" >
                                            <button type="button" class="btn_create">
                                                Create
                                            </button>
                                        </a>
                                        <form class="form-inline" action="{{ route('assets.index') }}" method="GET ">
                                          <div class="topnav">
                                          <div class="search-container">
                                            <form action="/action_page.php">
                                              <input type="text" placeholder="Search.." name="search">
                                              <button type="submit">search</i></button>
                                            </form>
                                          </div>
                                          </div>
                                      </form>
                                      <a href="{{route('assets.export')}}">
                                        <button type="button" class="btn_export">Export to Excel</button>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-data3">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Asset Name</th>
                                        <th>Device Image</th>
                                        <th>Asset tag</th>
                                        <th>Serial</th>
                                        <th>Model</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>checked Out To</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($assets as $item => $asset)
                                    <tr>
                                        <td>{{$asset->id}}</td>
                                        <td><a href="/asset/detail/ {{$asset->id}}">{{$asset->asset_tag}}</a></td>
                                        <td>
                                            <img src="{{ asset('uploads/' . $asset->image) }}" width="100">
                                        </td>
                                        <td>{{$asset->asset_tag}}</td>
                                        <td>{{$asset->serial_number}}</td>
                                        <td>{{$asset->model}}</td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            {{-- {{$asset->links() }} --}}
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


<style>
    .btn_create {
        margin-left: 88vw;
    background-color: #e18ae8 !important;
    color: white;
    border: none;
    }
    .btn_export {
        margin-left: 88vw;
        border: none;
    }
</style>