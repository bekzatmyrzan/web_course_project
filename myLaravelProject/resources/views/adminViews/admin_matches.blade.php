@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>Matches</h2>
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

        <form method="post" action="/admin/add_match">
            @csrf
            <label for="home_club_id">Home club:</label>
            <select class="form-control" name="home_club_id">
                @foreach($data['clubs'] as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>

            <label for="guest_club_id">Guest club:</label>
            <select class="form-control" name="guest_club_id">
                @foreach($data['clubs'] as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>

            <label for="round_id">Number of round:</label>
            <select class="form-control" name="round_id">
                @foreach($data['rounds'] as $item)
                    <option value="{{$item->id}}">{{$item->number}}</option>
                @endforeach
            </select>
            <br>
            <button type="submit" class="btn btn-success">Add new match</button>
        </form>

        <table class="table-striped container-fluid">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Home club</th>
                <th scope="col">Guest club</th>
                <th scope="col">Round</th>
                <th scope="col">        </th>
            </tr>
            </thead>
            <tbody>
            @foreach($data['matches'] as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <th>{{$item->home_club->name}}</th>
                    <th>{{$item->guest_club->name}}</th>
                    <th>{{$item->round->number}}</th>
                    <th>{{$item->name}}</th>
                    <th><a href="{{ url('/admin/admin_match_details',[$item->id])}}">Details</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

