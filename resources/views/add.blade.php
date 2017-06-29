@extends('layouts.base')

@section('title', 'add')

@section('contents')
    <form action="/add" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label>
            <input type="text" name="name">
        </label>
        <label>
            <input type="text" name="description">
        </label>
        <input type="submit" value="GO">
    </form>
@endsection