@extends('layouts.admin_layout')
@section('mainContent')
    <div class="col-9">
        <h6>----------</h6>
        <h2>Admin Page</h2>
        <h2>News</h2>
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

        <form method="post" action="/admin/add_news">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" placeholder="Title of news" class="form-control">

            <label for="text">Text:</label>
            <textarea name="text" id="text" placeholder="Text of news" class="form-control"></textarea>

            <label for="posted_date">Posted date:</label>
            <input type="text" name="posted_date" id="posted_date" placeholder="Date of post" class="form-control">

            <label for="author_id">Role:</label>
            <select class="form-control" name="author_id">
                @foreach($data['users'] as $item)
                    <option value="{{$item->id}}">{{$item->login}}</option>
                @endforeach
            </select>

            <br>
            <button type="submit" class="btn btn-success">Add news</button>
        </form>

        <table class="table-striped container-fluid">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Text</th>
                <th scope="col">Author</th>
                <th scope="col">        </th>
            </tr>
            </thead>
            <tbody>
            @foreach($data['news'] as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <th>{{$item->title}}</th>
                    <th>{{$item->text}}</th>
                    <th>{{$item->author->login}}</th>
                    <th><a href="#">Details</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

