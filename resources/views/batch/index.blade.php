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
                      <th style="width: 10px">#</th>
                      <th>Batch Year</th>
                      <th>Faculty Name</th>
                      <th>Action</th>

    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($batches as $batch)
                  <tr>
                  <td>{{ $batch->id }}</td>
                    <td>{{ $batch->batch_year }}</td>
                    <td>{{ $batch->batch_name }}</td>
                    <td>
                    <a href="{{ route('batches.edit', $batch->id) }}" class="btn btn-sm btn-warning">
                        <span class="fa fa-edit"></span>
                    </a>
                    <a href="{{ route('batches.show', $batch->id) }}" class="btn btn-sm btn-info">
                    <span class="fa fa-eye"></span>
                    </a>
                    
                    <form method="POST" action="{{route('batches.destroy',$batch->id)}}" style="display:inline;">
              <!-- post method is not appropriate and patch cannot be included in form -->
              @method('DELETE')
                @csrf
                    
                  <button type="submit" class="btn btn-sm btn-danger" id="detele">
                    <span class="fa fa-trash"></span>
                  </button>
               
              </form> 
</td>

                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection