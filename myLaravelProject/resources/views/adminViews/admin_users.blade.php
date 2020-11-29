@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>Users</h2>
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

        <form method="post" action="/admin/add_user">
            @csrf
            <label for="login">Login:</label>
            <input type="email" name="login" id="login" placeholder="Login of user" class="form-control">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="password of user" class="form-control">

            <label for="role_id">Role:</label>
            <select class="form-control" name="role_id">
                @foreach($data['roles'] as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>

            <br>
            <button type="submit" class="btn btn-success">Add new user</button>
        </form>

        <table class="table-striped container-fluid">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Login</th>
                <th scope="col">Password</th>
                <th scope="col">Role</th>
                <th scope="col">        </th>
            </tr>
            </thead>
            <tbody>
            @foreach($data['users'] as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <th>{{$item->login}}</th>
                    <th>{{$item->password}}</th>
                    <th>{{$item->role->name}}</th>
                    <th><a href="{{ url('/admin/admin_user_details',[$item->id])}}">Details</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

