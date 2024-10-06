@extends('layout.main')
@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{route('employee.create')}}" class="btn btn-primary">Create one</a>
        </div>

        <ul class="list-group">
            @foreach($employees as $employee)
                <li class="list-group-item">
                    <a href="{{route('employee.show', $employee->id)}}">{{$employee->id}}. {{$employee->name}}</a>
                </li>
            @endforeach
        </ul>

        <div class="d-flex justify-content-center mt-4">
            {{$employees->links('pagination::bootstrap-4')}}
        </div>
    </div>
@endsection


