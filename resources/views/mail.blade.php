@extends('layouts.plantilla')

@section('header')
    Mail
@endsection

@section('mail')
    active
@endsection

@section('main')
<form action="{{url('/formForm')}}" method="POST">
    @csrf
    <div class="form-group mb-4">
        <label>Titulo</label>
        <input type="text" name="title" class="form-control">
    </div>
    
    <div class="form-group mb-4">
        <label>Texto</label>
        <textarea class="form-control" name="text" rows="7"></textarea>
    </div>

    <input type="submit" class="btn btn-dark" value="Enviar">
</form>
@endsection