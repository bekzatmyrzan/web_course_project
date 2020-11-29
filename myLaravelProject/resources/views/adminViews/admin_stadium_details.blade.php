@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>Stadium Details</h2>
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

        <form method="post" action="/admin/edit_stadium">
            @csrf
            <input type="hidden" name="id" value="{{$stadium->id}}">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Name of stadium" class="form-control" value="{{$stadium->name}}">

            <label for="address">Address:</label>
            <input type="text" name="address" id="address" placeholder="Address of stadium" class="form-control" value="{{$stadium->address}}">

            <label for="capacity">Capacity:</label>
            <input type="number" name="capacity" id="capacity" placeholder="Capacity of stadium" class="form-control" value="{{$stadium->capacity}}">

            <label for="builded_year">Builded year:</label>
            <input type="number" name="builded_year" id="builded_year" placeholder="Builded year:" class="form-control" value="{{$stadium->builded_year}}">
            <br>
            <button type="submit" class="btn btn-success" style="float: left">Save</button>
        </form>
        <form method="post" action="/admin/admin_delete_stadium/{{$stadium->id}}">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$stadium->id}}">
            <button type="submit" class="btn btn-danger" style="float: right">Delete</button>
        </form>


    </div>
@endsection

