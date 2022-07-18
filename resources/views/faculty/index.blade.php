@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Faculty Information</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Faculty code</th>
                      <th>Faculty Name</th>
                      <th>Action</th>

    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($faculties as $faculty)
                  <tr>
                  <td>{{ $faculty->id }}</td>
                    <td>{{ $faculty->faculty_code }}</td>
                    <td>{{ $faculty->faculty_name }}</td>
                    <td>
                      <a href="{{ route('faculties.edit', $faculty->id) }}">
                        Edit
                    </a>
                    <a href="{{ route('faculties.show', $faculty->id) }}">
                       Show
                    </a>
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