@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h2>Current User:</h2>

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

        <h1>All stadiums:</h1>
        @foreach($stadiums as $item)
            <div class="alert-warning">
                <h6>{{$item->name}}</h6>
                <p>{{$item->address}}</p>
                <p>{{$item->capacity}}</p>
                <p>{{$item->builded_year}}</p>
            </div>
        @endforeach
    </div>
@endsection

