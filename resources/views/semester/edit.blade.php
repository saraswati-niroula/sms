@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="row">
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Semester Edit Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('semesters.update',$semester->id)}}">
              @method('PATCH')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Semester Name</label>
                    <input type="text" 
                    name="semester_name"
                    value = {{ $semester->semester_name }}
                    
                    class="form-control" id="semester_name">
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