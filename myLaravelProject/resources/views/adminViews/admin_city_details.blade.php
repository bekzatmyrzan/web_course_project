{{--@extends('layouts.admin_layout')--}}
{{--@section('mainContent')--}}
{{--    <div class="col-9">--}}
{{--        <h6>----------</h6>--}}
{{--        <h2>Admin Page</h2>--}}
{{--        <h2>City Details</h2>--}}
{{--        <h6>----------</h6>--}}

{{--        @if($errors->any())--}}
{{--            <div class="alert-danger">--}}
{{--                <ul>--}}
{{--                    @foreach($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form method="post" action="/admin/edit_city">--}}
{{--            @csrf--}}
{{--            <label for="name">Name:</label>--}}
{{--            <input type="text" name="name" id="name" placeholder="Name of stadium" class="form-control" value="{{$city->name}}">--}}
{{--            <br>--}}
{{--            <button type="submit" class="btn btn-success">Save</button>--}}
{{--        </form>--}}

{{--        <h1>All cities:</h1>--}}
{{--        @foreach($cities as $item)--}}
{{--            <div class="alert-warning">--}}
{{--                <h6>{{$item->name}}</h6>--}}
{{--            </div>--}}
{{--        @endforeach--}}

{{--    </div>--}}
{{--@endsection--}}

