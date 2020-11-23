@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>Positions</h2>
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

        <form method="post" action="/admin/add_position">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Position name" class="form-control">
            <br>
            <button type="submit" class="btn btn-success">Add new position</button>
        </form>
        <br>
        <table class="table-striped container-fluid">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
            </tr>
            </thead>
            <tbody>
            @foreach($positions as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <th>{{$item->name}}</th>
                    <th><a href="#">Details</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

