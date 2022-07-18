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
              <form method="POST" action="{{route('students.update',$student->id)}}">
              <!-- post method is not appropriate and patch cannot be included in form -->
              @method('PATCH')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" 
                    name="name"
                    value = {{ $student->name }}
                    class="form-control" id="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email"
                    name="email"
                    value = {{ $student->email }}
                     class="form-control" id="email" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text"
                    name="phone"
                    value = {{ $student->mobile }}
                     class="form-control" id="phone" placeholder="Enter Mobile Number">
                  </div>
                  <div class="form-group">
                    <label for="picture">Picture</label>
                    <input type="text" 
                    name="picture"
                    value ={{ $student->picture }}
                     class="form-control" id="picture" 
                     placeholder="choose a image" />
                  </div>
                  <div class="form-group">
                    <label for="dob">DOB</label>
                    <input type="text"
                    name="dob"
                    value = {{ $student->dob }}
                     class="form-control" id="dob" 
                     placeholder="Enter your DOB">
                  </div>
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="radio" name="gender" value="M" {{ $student->gender == 'M' ? 'checked': ''}}> Male
                    <input type="radio" name="gender" value="F" {{ $student->gender == 'F' ? 'checked': ''}}> Female
                  </div>
                  <div class="form-group">
                    <label for="citizenship">Citizenship</label>
                    <input type="text" 
                    name="citizenship"
                    value = {{ $student->citizenship }}
                     class="form-control" id="citizenship" 
                     placeholder="choose a image" />
                  </div>
                  <div class="form-group">
                  <label for="blood_group">Choose your Blood Group</label>
                    <select name="blood_group" id="blood_group" placeholder="Blood Group">
                      <option value="A+" {{ $student->blood_group == 'A+' ? 'selected' : ''}}>A+ve</option>
                      <option value="A-" {{ $student->blood_group == 'A-' ? 'selected' : ''}}>A-ve</option>
                      <option value="B+"{{ $student->blood_group == 'B+' ? 'selected' : ''}}>B+ve</option>
                      <option value="B+"{{ $student->blood_group == 'B-' ? 'selected' : ''}}>B-ve</option>
                      <option value="AB+" {{ $student->blood_group == 'AB+' ? 'selected' : ''}}>AB+ve</option>
                      <option value="AB-"{{ $student->blood_group == 'AB-' ? 'selected' : ''}}>AB-ve</option>
                      <option value="O+" {{ $student->blood_group == 'O+' ? 'selected' : ''}}>O+ve</option>
                      <option value="O-"{{ $student->blood_group == 'O-' ? 'selected' : ''}}>O-ve</option>
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
                    value = {{ $student->perm_address }}
                     class="form-control" id="p_address" 
                     placeholder="Enter your Permanent Address">
                  </div>
                  <div class="form-group">
                    <label for="t_address">Temporary Address</label>
                    <input type="text"
                    name="t_address"
                    value = {{ $student->temp_address }}
                     class="form-control" id="t_address" 
                     placeholder="Enter your Temporary Address">
</div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
@endsection