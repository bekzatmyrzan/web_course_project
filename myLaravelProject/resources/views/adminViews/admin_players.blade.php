@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>Players</h2>
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

        <form method="post" action="/admin/add_player">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Player name" class="form-control">

            <label for="surname">Surname:</label>
            <input type="text" name="surname" id="surname" placeholder="Player surname" class="form-control">

            <label for="birthday">Birthday:</label>
            <input type="text" name="birthday" id="birthday" placeholder="Player birthday" class="form-control">

            <label for="club_id">Club:</label>
            <select class="form-control" name="club_id">
                @foreach($data['clubs'] as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>

            <label for="position_id">Position:</label>
            <select class="form-control" name="position_id">
                @foreach($data['positions'] as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            <br>
            <button type="submit" class="btn btn-success">Add new player</button>
        </form>
        <br>
        <table class="table-striped container-fluid">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Birthday</th>
                <th scope="col">Position</th>
                <th scope="col">Club</th>
                <th scope="col">Details</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data['players'] as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <th>{{$item->name}}</th>
                    <th>{{$item->surname}}</th>
                    <th>{{$item->birthday}}</th>
                    <th>{{$item->position->name}}</th>
                    <th>{{$item->club->name}}</th>
                    <th><a href="#">Details</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

