@extends('layouts.app')
@section('content')
    <form method="POST" action="{{route('sections.store')}}">
        {{csrf_field()}}
        <input class="form-control col-md-3" placeholder="name" name="name" >
        <input class="form-control col-md-3" name="note" placeholder="note">
        <input class="btn btn-primary" type="submit" value="save">
    </form>
@endsection