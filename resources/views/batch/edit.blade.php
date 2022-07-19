@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="row">
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Batch Edit Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('batches.update',$batch->id)}}">
                @method("PATCH")
                @csrf
                <div class="card-body">

                
                <div class="form-group">
                    <label for="name">Batch Name</label>
                    <input type="text" 
                    name="batch_name"
                    value = {{ $batch->batch_name }}
                    class="form-control" id="batch_name">
                  </div>

                  <div class="form-group">
                    <label for="name">Batch Year</label>
                    <input type="text" 
                    name="batch_year"
                    value = {{ $batch->batch_year }}
                    
                    class="form-control" id="batch_year">
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