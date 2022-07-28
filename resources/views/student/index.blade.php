@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Students Information</h3>

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
                      <th>Additional Info</th>
                      <th>Action</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($students as $student)
                  <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                      <table>
                        <tr>
                          <td>Educational Info</td>
                          <td> 
                            @if($student->is_education_info)
                            <a href="{{ route('eduinfos.show',$student->id) }}">Show</a>
                            <a href="{{ route('eduinfos.edit',$student->id) }}">Edit</a>
                            <a href="{{ route('eduinfos.destroy',$student->id) }}">Delete</a>
                            
                            @else
                             <a href="{{ route('student-eduinfo.create',$student->id) }}">
                              Create
                            </a>
                             @endif
                          </td>
</tr>
<tr>
  <td>College Info</td>
  <td> @if($student->is_college_info)
  <a href="{{ route('collegeinfos.create',$student->id) }}">Edit</a>

  <a href="{{ route('collegeinfos.create',$student->id) }}">Delete</a>
                            
                             @else
                             <a href="{{ route('student-collegeinfo.create',$student->id) }}">
                              Create
                            </a>
                             @endif
</td>

</tr>
<td>Family Info</td>
  <td> @if($student->is_family_info)
                             Edit Delete
                             @else
                             <a href="{{ route('student-familyinfo.create',$student->id) }}">
                              Create
                            </a>
                             @endif
</td>

</tr>

</table>
                     
                    </td>
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