@extends('layouts.app')
@section('content')
    <form action="{{route('slots.store')}}" method="POST">
        {{csrf_field()}}
        <input class="name" name="name">
        <select name="section_id">
            @foreach( $sections as $section)
                <option value="{{$section->id}}">
                    {{$section->name}}
                </option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-success">save</button>
    </form>
@endsection