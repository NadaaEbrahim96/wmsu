@extends('layouts.app')
@section('content')
    name / price / color / model / image
    <a class="btn btn-primary" href="{{route('products.create')}}">create</a>
@endsection