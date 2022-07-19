@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="row">
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Faculty Edit Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('faculties.update',$faculty->id)}}">
              @method('PATCH')
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="name">Faculty code</label>
                    <input type="text" 
                    name="faculty_code"
                    value = {{ $faculty->faculty_code }}
                    class="form-control" id="faculty_code" placeholder="Enter Faculty code">
                  </div>

                  <div class="form-group">
                    <label for="name">Faculty Name</label>
                    <input type="text" 
                    name="faculty_name"
                    value = {{ $faculty->faculty_name }}
                    
                    class="form-control" id="faculty_name" placeholder="Enter Faculty Name">
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