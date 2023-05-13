@extends('student.layout')
  
@section('content')
&nbsp;
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('View Student') }}</div>

                <div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2> Show student</h2>
            </div>
        </div>
    </div>
    &nbsp;
    <div class="row" style="margin-left:5px;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $student->StudentID }}
            </div>
        </div>&nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                {{ $student->StudentFName }}
            </div>
        </div> &nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12">   
            <div class="form-group">
                <strong>Middle Name:</strong>
                {{ $student->StudentMName }}
            </div>
        </div> &nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
                <strong>Last Name:</strong>
                {{ $student->StudentLName }}
            </div>
        </div> &nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12">    
            <div class="form-group">
                <strong>Address:</strong>
                {{ $student->StudentAddress }}
            </div>
        </div> &nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
                <strong>Department:</strong>
                {{ $student->Department }}
            </div>
        </div> &nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
                <strong>Course:</strong>
                {{ $student->Course }}
            </div>
        </div> &nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
                <strong>Year:</strong>
                {{ $student->Year }}
            </div>
        </div>&nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
                <strong>Note:</strong>
                The student is enrolled
            </div>
        </div>&nbsp;
        <div class="text-center">
                <a class="btn btn-primary btn-lg" href="{{ route('students.index') }}"> Back</a>
            </div>
    </div>
@endsection