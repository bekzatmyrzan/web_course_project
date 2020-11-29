@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>Cities</h2>
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

        <form method="post" action="/admin/add_city">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Name of city" class="form-control">
            <br>
            <button type="submit" class="btn btn-success">Add new city</button>
        </form>

        <h1>All cities:</h1>
        @foreach($cities as $item)
            <div class="alert-warning">
                <h6>{{$item->name}}</h6>
            </div>
        @endforeach

        <table class="table-striped container-fluid">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cities as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <th>{{$item->name}}</th>
                    <th><a href="{{ url('/admin/admin_city_details',[$item->id])}}">Details</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

