
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
                                            <div class="form-floating mb-3">
                                                
                                                <label class="form-label">Assets Tag</label>
                                                <input type="text" class="form-control" id="inputtag" placeholder="tag" name="asset_tag">
                                                
                                            </div>

                                            <div class="form-floating mb-3">
                                                <label class="form-label">Serial</label>
                                                <input type="text" class="form-control" id="inputserial" name="serial_number">
                                                
                                            </div>

                                            <div class="form-floating mb-3">
                                                <label class="form-label">Model</label>
                                                <input type="text" class="form-control" id="inputmodel" placeholder="Select a Model" name="model">
                                                
                                            </div>

                                            <div class="form-floating mb-3">
                                                <label class="form-label">Status</label>
                                                <input type="text" class="form-control" id="inputstatus" placeholder="Select Status" name="status">
                                                
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <label class="form-label">Notes</label>
                                                <input type="text" class="form-control" id="inputnotes" name="notes">
                                                
                                            </div>

                                            <div class="form-floating mb-3">
                                                <label class="form-label">Upload Image</label>
                                                <input type="file" class="form-control" id="inputcover" placeholder="Select Files" name="image">
                                                
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
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