@extends('layout')
@section('content')
@error('name')
<div class="alert alert-warning">{{$message}}</div>
@enderror
<form action="{{route('edit',$adatok->id)}}" methode="post">
    @csrf
    methode('PUT')
    <fieldset>
        <label for="name">  Név:</label>
        <input type="text" name="name" id="name" value="{{old('name',$adatok->Név)}}">
        <label for="name"> Márka: </label>
        <input type="text" name="Márka" id="Márka" value="{{old('Márka',$adatok->Márka)}}">  
        <label for="name"> Évjárat: </label>
        <input type="date" name="Évjárat" id="Évjárat" value="{{old('Évjárat',$adatok->Évjárat)}}">  
        <label for="name"> Km: </label>
        <input type="number" name="Km" id="Km" value="{{old('Km',$adatok->km)}}">  
        <label for="name"> Max Km/h: </label>
        <input type="number" name="Km/h" id="Km/h" value="{{old('Km/h',$adatok->Maxkmh)}}">  
    </filedset>
    <button type="submit">ment</button>
</form>
@endsection