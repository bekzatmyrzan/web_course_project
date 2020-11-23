@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>Rounds</h2>
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

        <form method="post" action="/admin/add_round">
            @csrf
            <label for="number">Number:</label>
            <input type="number" name="number" id="number" placeholder="Number of round" class="form-control">
            <br>
            <button type="submit" class="btn btn-success">Add new round</button>
        </form>

        <table class="table-striped container-fluid">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Number</th>
                <th scope="col">Details</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rounds as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <th>{{$item->number}}</th>
                    <th><a href="#">Details</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

