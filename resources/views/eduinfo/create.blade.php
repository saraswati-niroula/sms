@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="row">
  <div class="col-md-12">
    <p>Create Educational Information for {{ $student->name }}</p>
  </div>
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Students Eduacational Information</h3>
              </div>

              <form method="POST" action="{{route('eduinfos.store')}}">
                @csrf
                <input type="hidden" name="student_id" value= {{ $id }} />
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Board</label>
                    <input type="text" 
                    name="board"
                    class="form-control" id="board" placeholder="Enter Board">
                  </div>
                  <div class="form-group">
                    <label for="email">Institute Name</label>
                    <input type="text"
                    name="institute_name"
                     class="form-control" id="institute_name" placeholder="Enter Institute Name">
                  </div>
                  <div class="form-group">
                    <label for="email">Percentage or GPA</label>
                    <input type="text"
                    name="per_cgpa"
                     class="form-control" id="per_cgpa" placeholder="Enter Percentage">
                  </div>
                  <div class="form-group">
                    <label for="phone">Symbol Number</label>
                    <input type="text"
                    name="symbol_number"
                     class="form-control" id="symbol_number" placeholder="Enter Symbol Number">
                  </div>
                  <div class="form-group">
                    <label for="picture">Passed Year</label>
                    <input type="text" 
                    name="passed_year"
                     class="form-control" id="passed_year" 
                     placeholder="Enter Passed Year" />
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
@endsection