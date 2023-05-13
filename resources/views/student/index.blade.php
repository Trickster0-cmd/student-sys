@extends('student.layout')
 
@section('content')
&nbsp;
<div class="container">
    <div class="row justify-content-center" style="display: flex;">
        <div class="col-md-8">
            <div class="card" style="width:65rem; margin-left: -150px">
                <div class="card-header text-center">{{ __('Student Management') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
       
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    &nbsp;
    <table class="table table-bordered text-center">
        <tr>
            <th>ID</th>
            <th width="150px">First Name</th>
            <th width="150px">Middle Name</th>
            <th width="150px">Last Name</th>
            <th>Address</th>
            <th>Department</th>
            <th>Course</th>
            <th>Year</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->StudentID }}</td>
            <td>{{ $student->StudentFName }}</td>
            <td>{{ $student->StudentMName }}</td>
            <td>{{ $student->StudentLName }}</td>
            <td>{{ $student->StudentAddress }}</td>
            <td>{{ $student->Department }}</td>
            <td>{{ $student->Course }}</td>
            <td>{{ $student->Year }}</td>
            <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    &nbsp;
    <div class="col-lg-12">
            <div class="text-center">
                <a class="btn btn-success btn-lg" href="{{ route('students.create') }}"> Add New Student</a>
            </div>
        </div>
  
    {!! $students->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
    
      
@endsection