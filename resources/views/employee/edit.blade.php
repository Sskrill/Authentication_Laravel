@extends('layout.main')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <form action="{{route('employee.update',$employee->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="exampleInputJob1" class="form-label">Должность</label>
                        <input type="text" name="job" class="form-control" id="exampleInputJob1" value="{{$employee->job}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAge1" class="form-label">Возраст</label>
                        <input type="number" name="age" class="form-control" id="exampleInputAge1" value="{{$employee->age}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
