@extends('department.layout')
 
@section('content')
&nbsp;
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Department Management') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
        <div class="col-lg-12 margin-tb">
            
        </div>
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
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($departments as $department)
        <tr>
            <td>{{ $department->DepartmentID }}</td>
            <td>{{ $department->DepartmentName }}</td>
            <td>
                <form action="{{ route('departments.destroy',$department->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('departments.show',$department->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('departments.edit',$department->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="text-center">
                <a class="btn btn-success btn-lg" href="{{ route('departments.create') }}"> Add New Department</a>
            </div>
    {!! $departments->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
    
      
@endsection