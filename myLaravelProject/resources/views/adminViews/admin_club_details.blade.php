@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>Club Details</h2>
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

        <form method="post" action="/admin/edit_club">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$data['club']->id}}">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Name of club" class="form-control" value="{{$data['club']->name}}">

            <label for="club_logo_picture">Logo url:</label>
            <input type="text" name="club_logo_picture" id="club_logo_picture" placeholder="Club logo picture" class="form-control" value="{{$data['club']->club_logo_picture}}">

            <label for="founded_year">Founded year:</label>
            <input type="number" name="founded_year" id="founded_year" placeholder="Founded year" class="form-control" value="{{$data['club']->founded_year}}">

            <label for="city_id">City:</label>
            <select class="form-control" name="city_id">
                @foreach($data['cities'] as $item)
                    <option value="{{$item->id}}" @if($data['club']->city->id==$item->id) selected @endif>{{$item->name}}</option>
                @endforeach
            </select>

            <label for="stadium_id">Stadium:</label>
            <select class="form-control" name="stadium_id">
                @foreach($data['stadiums'] as $item)
                    <option value="{{$item->id}}" @if($data['club']->stadium->id==$item->id) selected @endif>{{$item->name}}</option>
                @endforeach
            </select>
            <br>
            <button type="submit" class="btn btn-success" style="float: left">Save</button>
        </form>
        <form method="post" action="/admin/admin_delete_club/{{$data['club']->id}}">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$data['club']->id}}">
            <button type="submit" class="btn btn-danger" style="float: right">Delete</button>
        </form>


    </div>
@endsection

