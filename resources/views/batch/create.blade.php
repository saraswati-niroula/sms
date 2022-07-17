@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="row">
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Batch Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('batches.store')}}">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="name">Batch name</label>
                    <input type="text" 
                    name="batch_name"
                    class="form-control" id="batch_name" placeholder="Enter Batch Name">
                  </div>

                  <div class="form-group">
                    <label for="name">Batch Year</label>
                    <input type="text" 
                    name="batch_year"
                    class="form-control" id="batch_year" placeholder="Enter Batch Year">
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