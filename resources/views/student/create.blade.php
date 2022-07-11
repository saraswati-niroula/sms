@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="row">
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Student Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('students.store')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" 
                    name="name"
                    class="form-control" id="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email"
                    name="email"
                     class="form-control" id="email" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text"
                    name="phone"
                     class="form-control" id="phone" placeholder="Enter Mobile Number">
                  </div>
                  <div class="form-group">
                    <label for="picture">Picture</label>
                    <input type="text" 
                    name="picture"
                     class="form-control" id="picture" 
                     placeholder="choose a image" />
                  </div>
                  <div class="form-group">
                    <label for="dob">DOB</label>
                    <input type="text"
                    name="dob"
                     class="form-control" id="dob" 
                     placeholder="Enter your DOB">
                  </div>
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="radio" name="gender" value="M"> Male
                    <input type="radio" name="gender" value="F"> Female
                  </div>
                  <div class="form-group">
                    <label for="citizenship">Citizenship</label>
                    <input type="text" 
                    name="citizenship"
                     class="form-control" id="citizenship" 
                     placeholder="choose a image" />
                  </div>
                  <div class="form-group">
                  <label for="blood_group">Choose your Blood Group</label>
                    <select name="blood_group" id="blood_group" placeholder="Blood Group">
                      <option value="A+">A+ve</option>
                      <option value="A+">A-ve</option>
                      <option value="A+">B+ve</option>
                      <option value="A+">B-ve</option>
                      <option value="A+">AB+ve</option>
                      <option value="A+">AB-ve</option>
                      <option value="A+">O+ve</option>
                      <option value="A+">O-ve</option>
                    </select> 
                  </div>
                  <!-- <div class="form-group">
                    <label for="fathers_name">Father's Name</label>
                    <input type="text"
                    name="fathers_name"
                     class="form-control" id="fathers_name" 
                     placeholder="Enter your Fathers Name">
                  </div>
                  <div class="form-group">
                    <label for="mothers_name">Mother's Name</label>
                    <input type="text"
                    name="mothers_name"
                     class="form-control" id="mothers_name" 
                     placeholder="Enter your Mothers Name">
                  </div> -->
                  <div class="form-group">
                    <label for="p_address">Permanent Address</label>
                    <input type="text"
                    name="p_address"
                     class="form-control" id="p_address" 
                     placeholder="Enter your Permanent Address">
                  </div>
                  <div class="form-group">
                    <label for="t_address">Temporary Address</label>
                    <input type="text"
                    name="t_address"
                     class="form-control" id="t_address" 
                     placeholder="Enter your Temporary Address">
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