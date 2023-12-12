@extends('layout')
@section('content')
<h1>új kategoria</h1>
@error('name')
<div class="alert alert-warning">{{$message}}</div>
@enderror
<form action="{{route('adatka.store')}}" method="post">
    @csrf
    <fieldset>
        <label for="name"> auto név:</label>
        <input type="text" name="name" id="name"> 
    </filedset>
    <button type="submit">ment</button>
</form>
@endsection