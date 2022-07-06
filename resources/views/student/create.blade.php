@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="row">
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" 
                    name="name"
                    class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email"
                    name="email"
                     class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text"
                    name="phone"
                     class="form-control" id="exampleInputPassword1" placeholder="Enter Mobile Number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">DOB</label>
                    <input type="text"
                    name="dob"
                     class="form-control" id="exampleInputPassword1" 
                     placeholder="Enter your DOB">
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div> -->
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
@endsection