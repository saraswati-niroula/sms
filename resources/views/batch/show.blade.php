@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Batch Information</h3>

                <div class="card-tools">
                <button type="button" onsubmit="{{route('batches.create')}}" class="btn btn-block btn-info btn-flat">ADD</button>

                  <!-- <ul class="pagination pagination-sm float-right"> -->
                    <!-- <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li> -->
                  <!-- </ul> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Batch Year</th>
                      <th>Faculty Name</th>
                   

    
                    </tr>
                  </thead>
                  <tbody>
                  
                  <tr>
                  <td>{{ $batch->id }}</td>
                    <td>{{ $batch->batch_year }}</td>
                    <td>{{ $batch->batch_name }}</td>

                  </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection