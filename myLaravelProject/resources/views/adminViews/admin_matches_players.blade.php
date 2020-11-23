@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>Matches Players</h2>
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

        <form method="post" action="/admin/add_match_player">
            @csrf
            <label for="match_id">Match:</label>
            <select class="form-control" name="match_id">
                @foreach($data['matches'] as $item)
                    <option value="{{$item->id}}">{{$item->home_club->name}} - {{$item->guest_club->name}}</option>
                @endforeach
            </select>

            <label for="scored_player_id">Scored Player:</label>
            <select class="form-control" name="scored_player_id">
                @foreach($data['players'] as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>

            <label for="assisted_player_id">Assisted Player:</label>
            <select class="form-control" name="assisted_player_id">
                @foreach($data['players'] as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>

            <label for="goal_time">Time of goal scored:</label>
            <input type="text" name="goal_time" id="goal_time" placeholder="Goal time:" class="form-control">
            <br>
            <button type="submit" class="btn btn-success">Add new match player</button>
        </form>

        <table class="table-striped container-fluid">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Match</th>
                <th scope="col">Scored player</th>
                <th scope="col">Assisted player</th>
                <th scope="col">Goal time</th>
                <th scope="col">        </th>
            </tr>
            </thead>
            <tbody>
            @foreach($data['matches_players'] as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <th>{{$item->match->home_club->name}} - {{$item->match->guest_club->name}}</th>
                    <th>{{$item->scored_player->name}}</th>
                    <th>{{$item->assisted_player->name}}</th>
                    <th>{{$item->goal_time}}</th>
                    <th><a href="#">Details</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

