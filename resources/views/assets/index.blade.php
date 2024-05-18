<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title-1">Assets</h2>
                                <div class="overview-wrap">
                                    
                                    <div class="row g-3 align-items-center m-t-10">
                                        <div class="col-auto">
                                            {{-- <form action="{{ route('books.index') }}" method="GET">
                                                <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="Search">
                                            </form> --}}
                                            <div class="container-fluid">
                                                <a href="{{route('assets.create')}}" >Create</a>
                                                <form class="form-inline" action="{{ route('assets.index') }}" method="GET ">
                                                  {{-- <div class="form-group mb-2">
                                                    <input type="search" name="search" class="form-control" placeholder="Search" aria-describedby="password">
                                                  </div> --}}
                                                  <div class="topnav">
                                                  <div class="search-container">
                                                    <form action="/action_page.php">
                                                      <input type="text" placeholder="Search.." name="search">
                                                      <button type="submit">search</i></button>
                                                    </form>
                                                  </div>
                                                  </div>
                                              </form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>asset name</th>
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
                                                <td>{{$asset->asset_tag}}</td>
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