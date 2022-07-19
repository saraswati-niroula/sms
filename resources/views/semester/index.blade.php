@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Faculty Information</h3>

                <div class="card-tools">
                  <!-- <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      
                      <th>Semester Name</th>
                      <th>Created By</th>

                      <th>Action</th>

    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($semesters as $semester)
                  <tr>
                  <td>{{ $semester->id }}</td>
                    <td>{{ $semester->semester_name }}</td>
                    <td>{{ $semester->created_by }}</td>
                    <td>
                    <a href="{{ route('semesters.edit', $semester->id) }}" class="btn btn-sm btn-warning">
                        <span class="fa fa-edit"></span>
                    </a>
                    <a href="{{ route('semesters.show', $semester->id) }}" class="btn btn-sm btn-info">
                    <span class="fa fa-eye"></span>
                    </a>
                    
                    
                    <form method="POST" action="{{route('semesters.destroy',$semester->id)}}" style="display:inline;">
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