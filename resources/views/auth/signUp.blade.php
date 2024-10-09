@extends('layout.main')
@section('content')
<div style="display: flex; justify-content: center; align-items: center; height: 50vh;" >
    <form action="{{route('auth.register')}}" method="post" style="width: 300px;">
@csrf

        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
</div>
@endsection

