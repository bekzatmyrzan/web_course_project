@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>Match Details</h2>
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

        <form method="post" action="/admin/edit_match">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$data['match']->id}}">
            <label for="home_club_id">Home club:</label>
            <select class="form-control" name="home_club_id">
                @foreach($data['clubs'] as $item)
                    <option value="{{$item->id}}" @if($data['match']->home_club->id==$item->id) selected @endif>{{$item->name}}</option>
                @endforeach
            </select>

            <label for="guest_club_id">Guest club:</label>
            <select class="form-control" name="guest_club_id">
                @foreach($data['clubs'] as $item)
                    <option value="{{$item->id}}" @if($data['match']->guest_club->id==$item->id) selected @endif>{{$item->name}}</option>
                @endforeach
            </select>

            <label for="round_id">Number of round:</label>
            <select class="form-control" name="round_id">
                @foreach($data['rounds'] as $item)
                    <option value="{{$item->id}}" @if($data['match']->round->id==$item->id) selected @endif>{{$item->number}}</option>
                @endforeach
            </select>
            <br>
            <button type="submit" class="btn btn-success" style="float: left">Save</button>
        </form>
        <form method="post" action="/admin/admin_delete_club/{{$data['match']->id}}">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$data['match']->id}}">
            <button type="submit" class="btn btn-danger" style="float: right">Delete</button>
        </form>


    </div>
@endsection

