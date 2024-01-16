@extends('layout')
@section('content')
<h1>új kategoria</h1>
@error('name')
<div class="alert alert-warning">{{$message}}</div>
@enderror
<form action="{{route('ujadatok')}}" method="post">
    @csrf
    <fieldset>
        <label for="name"> Auto név:</label>
        <input type="text" name="name" id="name"> 
        <br>
        <label for="name"> Márka:</label>
        <input type="text" name="name" id="name"> 
        <br>
        <label for="name"> Évjárat:</label>
        <input type="date" name="name" id="name"> 
        <br>
        <label for="name"> Km:</label>
        <input type="number" name="name" id="name"> 
        <br>
        <label for="name"> Max km/h:</label>
        <input type="number" name="name" id="name"> 
    </filedset>
    <br>
    <button type="submit">ment</button>
</form>
@endsection