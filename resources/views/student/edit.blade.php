@extends('student.layout')
   
@section('content')
&nbsp;
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Edit Student') }}</div>

                <div class="card-body">
            <div class="row">
                 <div class="col-lg-12 margin-tb">
                    <div class="text-center">
                      <h2>Edit student</h2>
                    </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
        There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                <input type="text" name="StudentID" class="form-control" placeholder="ID" value="{{ $student->StudentID }}" required>
            </div>
         </div>&nbsp;
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                <input type="text" name="StudentFName" class="form-control" placeholder="First Name" value="{{ $student->StudentFName }}" required>
            </div>
         </div>&nbsp;
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Middle Name:</strong>
                <input type="text" name="StudentMName" class="form-control" placeholder="Middle Name" value="{{ $student->StudentMName }}" required>
            </div>
         </div>&nbsp;
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:</strong>
                <input type="text" name="StudentLName" class="form-control" placeholder="Last Name" value="{{ $student->StudentLName }}" required>
            </div>
         </div>&nbsp;
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="StudentAddress" class="form-control" placeholder="Address" value="{{ $student->StudentAddress }}" required>
            </div>
         </div>&nbsp;
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                <input type="text" name="Department" class="form-control" placeholder="Department" value="{{ $student->Department }}" required>
            </div>
         </div>&nbsp;
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                <input type="text" name="Course" class="form-control" placeholder="Course" value="{{ $student->Course }}" required>
            </div>
         </div>&nbsp;
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Year:</strong>
                <input type="text" name="Year" class="form-control" placeholder="Year" value="{{ $student->Year }}" required>
            </div>
         </div>&nbsp;
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>&nbsp;
            <div class="text-center">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
         </div>
   
    </form>
@endsection