@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">CollegeINfo</h3>

                <div class="card-tools">
                 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Mobile</th>
                      <th>Info</th>
                      <th>Action</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($students as $student)
                  <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->mobile }}</td>
                    <td></td>
                    <td>
                      <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning">
                        <span class="fa fa-edit"></span>
                    </a>
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-info">
                    <span class="fa fa-eye"></span>
                    </a>
                    
                    <form method="POST" action="{{route('students.destroy',$student->id)}}" style="display:inline;">
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