@extends('layouts.base')

@section('title', 'add')

@section('contents')
    <form action="/post" method="post">
        <label>
            <input type="text" name="name">
        </label>
        <label>
            <input type="text" name="description">
        </label>
        <input type="submit" value="GO">
    </form>
@endsection