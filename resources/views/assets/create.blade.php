<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Assets</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="post" action="{{route('assets.store')}}" enctype='multipart/form-data'>
                                            @csrf

                                            <label class="form-label">Assets Tag</label>
                                            <div class="form-floating mb-3">
                                                
                                                <input type="text" class="form-control" id="inputtag" placeholder="tag" name="asset_tag">
                                                
                                            </div>

                                            <label class="form-label">Serial</label>
                                            <div class="form-floating mb-3">
                                                
                                                <input type="text" class="form-control" id="inputserial" name="serial_number">
                                                
                                            </div>

                                            <label class="form-label">Model</label>
                                            <div class="form-floating mb-3">
                                                
                                                <input type="text" class="form-control" id="inputmodel" placeholder="Select a Model" name="model">
                                                
                                            </div>

                                            <label class="form-label">Status</label>
                                            <div class="form-floating mb-3">
                                                
                                                <input type="text" class="form-control" id="inputstatus" placeholder="Select Status" name="status">
                                                
                                            </div>
                                            
                                            <label class="form-label">Notes</label>
                                            <div class="form-floating mb-3">
                                                
                                                <input type="textarea" class="form-control" id="inputnotes" name="notes">
                                                
                                            </div>
                                            
                                            <label class="form-label">Upload Image</label>
                                            <div class="form-floating mb-3">
                                                
                                                <input type="file" class="form-control" id="inputcover" placeholder="Select Files" name="image">
                                            </div>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>

        </body>
        </html>