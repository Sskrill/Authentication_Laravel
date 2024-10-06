@extends('layout.main')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 ml-auto">
                <div>Id : {{$employee->id}}</div>
                <div>Name : {{$employee->name}}</div>
                <div>Age : {{$employee->age}}</div>
                <div>Job : {{$employee->job}}</div>
            </div>
        </div>

        <!-- Buttons Section - Buttons now go below the data and are aligned to the left -->
        <div class="row mt-3">
            <div class="col-md-12">
                <!-- Delete Button: Form should not have 'btn' class -->
                <form action="{{route('employee.destroy', $employee->id)}}" method="POST" class="mb-3">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger" style="width: 150px;">
                </form>
                <!-- Edit Button -->
                <a href="{{route('employee.edit', $employee->id)}}" class="btn btn-primary mb-3 d-block" style="width: 150px;">Edit one</a>
                <!-- Back Button -->
                <a href="{{route('employee.index')}}" class="btn btn-primary mb-3 d-block" style="width: 150px;">Back</a>
            </div>
        </div>
    </div>
@endsection
