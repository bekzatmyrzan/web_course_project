@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>User Details</h2>
        <h6>----------</h6>

        @if($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="/admin/edit_user">
            @csrf
            <input type="hidden" name="id" value="{{$data['user']->id}}">
            <label for="login">Login:</label>
            <input type="email" name="login" id="login" placeholder="Login of user" class="form-control" value="{{$data['user']->login}}">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="password of user" class="form-control" value="{{$data['user']->password}}">

            <label for="role_id">Role:</label>
            <select class="form-control" name="role_id">
                @foreach($data['roles'] as $item)
                    <option value="{{$item->id}}" @if($data['user']->role->id==$item->id) selected @endif>{{$item->name}}</option>
                @endforeach
            </select>
            <br>
            <button type="submit" class="btn btn-success" style="float: left">Save</button>
        </form>
        <form method="post" action="/admin/admin_delete_user/{{$data['user']->id}}">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$data['user']->id}}">
            <button type="submit" class="btn btn-danger" style="float: right">Delete</button>
        </form>


    </div>
@endsection

