@extends('layouts.master')

@section('content')
    <h1>Links</h1>
        @foreach($links as $link)
            <a href="{{$link->url}}">{{$link->title}}</a>
            <p>{{$link->description}}</p>
            <hr>
        @endforeach
        <form action="{{route('post_link')}}" method="POST">
            @csrf
            <labe>Title: <br>
                <input type="text" name="title"  placeholder="Type here your title">
            </labe><br>
            <label> Description: <br>
                <input type="text" name="description" placeholder="Type here your description">
            </label><br>
            <label>Link: <br>
                <input type="text" name="link"  placeholder="Paste here your link">
            </label><br>
            <input type="submit" name="submit" value="Submit">
        </form>
@endsection
