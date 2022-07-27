@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="row">
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">College Information Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('collegeinfos.update',$collegeinfo->id)}}">
              @method('PATCH')
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="name">TU Registration Number</label>
                    <input type="text" 
                    name="tureg_name"
                    value = {{ $collegeinfo->tureg_number }}
                    class="form-control" id="tureg_number" placeholder="Enter TU registration Number">
                  </div>

                  <div class="form-group">
                    <label for="name">Symbol Number</label>
                    <input type="text" 
                    name="symbol_number"
                    value = {{ $collegeinfo->symbol_number }}
                    class="form-control" id="symbol_number" placeholder="Enter Symbol Number">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
@endsection