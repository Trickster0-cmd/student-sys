@extends('department.layout')
  
@section('content')
&nbsp;
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('View Department') }}</div>

                <div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2> Show Department</h2>
            </div>
            
        </div>
    </div>
    &nbsp;
    <div class="row" style="margin-left: 20px;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $department->DepartmentID }}
            </div>
        </div>&nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                {{ $department->DepartmentName }}
            </div>
        </div> &nbsp;
        <div class="text-center" style="margin-lef:-20px;">
                <a class="btn btn-primary btn-lg" href="{{ route('departments.index') }}"> Back</a>
            </div>
    </div>
@endsection