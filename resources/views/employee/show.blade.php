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
        <div class="row mt-3">
            <div class="col-md-12 ml-auto">
                <a href="{{route('employee.edit',$employee->id)}}" class="btn btn-primary mb-3">Edit one</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ml-auto">
                <a class="btn btn-primary mb-3" href="{{route('employee.index')}}">Back</a>
            </div>
        </div>
    </div>
@endsection
