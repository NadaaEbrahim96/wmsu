@extends('layouts.app')
@section('content')
    <a class="btn btn-success" href="{{route('slots.create')}}" >create</a>
    <table class="table table-bordered">
        <tr>
            <td>name</td>
            <td>section</td>
        </tr>
        @foreach($slots as $slot)
            <tr>
                <td>{{$slot->name}}</td>
                <td>{{$slot->name}}</td>
            </tr>
            @endforeach
    </table>
@endsection