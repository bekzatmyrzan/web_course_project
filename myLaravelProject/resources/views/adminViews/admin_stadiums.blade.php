@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>Stadiums</h2>
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

        <form method="post" action="/logout">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>

        <form method="post" action="/admin/add_stadium">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Name of stadium" class="form-control">

            <label for="address">Address:</label>
            <input type="text" name="address" id="address" placeholder="Address of stadium" class="form-control">

            <label for="capacity">Capacity:</label>
            <input type="number" name="capacity" id="capacity" placeholder="Capacity of stadium" class="form-control">

            <label for="builded_year">Builded year:</label>
            <input type="number" name="builded_year" id="builded_year" placeholder="Builded year:" class="form-control">
            <br>
            <button type="submit" class="btn btn-success">Add new stadium</button>
        </form>

        <table class="table-striped container-fluid">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Capacity</th>
                <th scope="col">Build year</th>
                <th scope="col">Details</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stadiums as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <th>{{$item->name}}</th>
                    <th>{{$item->address}}</th>
                    <th>{{$item->capacity}}</th>
                    <th>{{$item->builded_year}}</th>
                    <th><a href="{{ url('/admin/admin_stadium_details',[$item->id])}}">Details</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

