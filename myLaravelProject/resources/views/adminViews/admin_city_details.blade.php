@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>City Details</h2>
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

        <form method="post" action="/admin/edit_city">
            @csrf
            <label for="name">Name:</label>
            <input type="hidden" name="id" id="id" value="{{$city->id}}">
            <input type="text" name="name" id="name" placeholder="Name of stadium" class="form-control" value="{{$city->name}}">
            <br>
            <button type="submit" class="btn btn-success" style="float: left">Save</button>
        </form>
        <form method="post" action="/admin/admin_delete_city/{{$city->id}}">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$city->id}}">
            <button type="submit" class="btn btn-danger" style="float: right">Delete</button>
        </form>


    </div>
@endsection

