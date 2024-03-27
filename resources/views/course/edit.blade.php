@extends('layouts.app')

@section('title', 'edit')

@section('content')
<div class="container">
    <h1 class="my-4">Edit</h1>
        <div class="form-group">
        <form action="{{ url('course/update/'.$course->course_id) }}" method="post">
            @csrf
            @method('PUT')
            <label >title </label>
            <input type="text" class="form-control" name="last_name" value="{{$course->title}}">
            <label >credit </label>
            <input type="text" class="form-control" name="first_midname" value="{{$course->credit}}">
            <button type="submit" class="btn btn-secondary mt-4">Save</button>
        </form>
        </div> 
        <a href="{{route('course.index')}}"> Back to List</a>
</div>
@endsection