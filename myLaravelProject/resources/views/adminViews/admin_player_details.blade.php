@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>Player Details</h2>
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

        <form method="post" action="/admin/edit_player">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$data['player']->id}}">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Player name" class="form-control" value="{{$data['player']->name}}">

            <label for="surname">Surname:</label>
            <input type="text" name="surname" id="surname" placeholder="Player surname" class="form-control" value="{{$data['player']->surname}}">

            <label for="birthday">Birthday:</label>
            <input type="text" name="birthday" id="birthday" placeholder="Player birthday" class="form-control" value="{{$data['player']->birthday}}">

            <label for="club_id">Club:</label>
            <select class="form-control" name="club_id">
                @foreach($data['clubs'] as $item)
                    <option value="{{$item->id}}" @if($data['player']->club->id==$item->id) selected @endif>{{$item->name}}</option>
                @endforeach
            </select>

            <label for="position_id">Position:</label>
            <select class="form-control" name="position_id">
                @foreach($data['positions'] as $item)
                    <option value="{{$item->id}}" @if($data['player']->position->id==$item->id) selected @endif>{{$item->name}}</option>
                @endforeach
            </select>
            <br>
            <button type="submit" class="btn btn-success" style="float: left">Save</button>
        </form>
        <form method="post" action="/admin/admin_delete_player/{{$data['player']->id}}">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$data['player']->id}}">
            <button type="submit" class="btn btn-danger" style="float: right">Delete</button>
        </form>


    </div>
@endsection

