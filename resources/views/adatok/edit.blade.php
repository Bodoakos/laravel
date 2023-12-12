@extends('layout')
@section('content')
@error('name')
<div class="alert alert-warning">{{$message}}</div>
@enderror
<form action="{{route('adatka.updtade',$adatok->id)}}" methode="post">
    @csrf
    methode('PUT')
    <fieldset>
        <label for="name"> Kategória név:</label>
        <input type="text" name="name" id="name" value="{{old('name',$adatok->name)}}"> 
    </filedset>
    <button type="submit">ment</button>
</form>
@endsection