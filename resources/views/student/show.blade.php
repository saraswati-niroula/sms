@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Information</h3>

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
                      <th style="width: 10px">ID</th>
                      
                      <th>Student Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>Blood_group</th>
                    </tr>
                  </thead>
                  <tbody>
                
                  <tr>
                  <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->mobile }}</td>
                    <td>{{ $student->gender}}</td>
                    <td>{{ $student->blood_group }}</td>
              
                  </tr>
        
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection