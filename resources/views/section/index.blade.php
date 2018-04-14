@extends('layouts.app')
@section('content')
    <table class="table table-bordered">
        <tr>
            <td>name</td>
            <td>note</td>
        </tr>
        @foreach($sections as $section)
            <tr>
                <td>{{$section->name}}</td>
                <td>{{$section->note}}</td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-primary" href="{{route('sections.create')}}">Create</a>
@endsection