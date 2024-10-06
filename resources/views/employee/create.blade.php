@extends('layout.main')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{route('employee.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Имя сотрудника</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" >
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputJob1" class="form-label">Должность</label>
                        <input type="text" name ="job" class="form-control" id="exampleInputJob1">
                        @error('job')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAge1" class="form-label">Возраст</label>
                        <input type="number" name="age" class="form-control" id="exampleInputAge1">
                        @error('age')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
