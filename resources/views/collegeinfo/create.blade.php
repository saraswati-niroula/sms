@extends('welcome')
@section('content_header')

@endsection

@section('main_content')
<div class="row">
<div class="col-md-12">
    <p>Create Educational Information for {{ $student->name }}</p>
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">College Information Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('collegeinfos.store')}}">
                @csrf
                <input type="hidden" name="student_id" value= {{ $id }} />
                <div class="card-body">
                <div class="form-group">
                    <label for="name">TU Registration Number</label>
                    <input type="text" 
                    name="tureg_name"
                    class="form-control" id="tureg_number" placeholder="Enter TU registration Number">
                  </div>

                  <div class="form-group">
                    <label for="name">Symbol Number</label>
                    <input type="text" 
                    name="symbol_number"
                    class="form-control" id="symbol_number" placeholder="Enter Symbol Number">
                  </div>

                  <div class="formp-group">
                    <lable>Batch</label>
                    <select name="batch_id" class="form-control">
                      @foreach($batches as $batch)
                      <option value={{ $batch->id }}> {{ $batch->batch_year }} : {{ $batch->batch_name }}</option>
                      @endforeach
</select>
                  </div>
                  <div class="formp-group">
                    <lable>Faculty</label>
                    <select name="faculty_id" class="form-control">
                      @foreach($faculties as $faculty)
                      <option value={{ $faculty->id }}> {{ $faculty->faculty_code }} : {{ $faculty->faculty_name }}</option>
                      @endforeach
</select>
                  </div>
                  <div class="formp-group">
                    <lable>Semester</label>
                    <select name="semester_id" class="form-control">
                      @foreach($semesters as $semester)
                      <option value={{ $semester->id }}>{{ $semester->semester_name }}</option>
                      @endforeach
</select>
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