@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>Clubs</h2>
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

        <form method="post" action="/admin/add_club">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Name of club" class="form-control">

            <label for="club_logo_picture">Logo url:</label>
            <input type="text" name="club_logo_picture" id="club_logo_picture" placeholder="Club logo picture" class="form-control">

            <label for="founded_year">Founded year:</label>
            <input type="number" name="founded_year" id="founded_year" placeholder="Founded year" class="form-control">

            <label for="city_id">City:</label>
            <select class="form-control" name="city_id">
                @foreach($data['cities'] as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>

            <label for="stadium_id">Stadium:</label>
            <select class="form-control" name="stadium_id">
                @foreach($data['stadiums'] as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>

            <br>
            <button type="submit" class="btn btn-success">Add new club</button>
        </form>

        <h1>All clubs:</h1>
        @foreach($data['clubs'] as $item)
            <div class="alert-warning">
                <h6>{{$item->name}}</h6>
                <p>{{$item->club_logo_picture}}</p>
                <p>{{$item->founded_year}}</p>
                <p>{{$item->city->name}}</p>
                <p>{{$item->stadium->name}}</p>
            </div>
        @endforeach
    </div>
@endsection

