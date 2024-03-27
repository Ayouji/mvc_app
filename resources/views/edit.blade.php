@extends('layouts.app')

@section('title', 'edit')

@section('content')
<div class="container">
    <h1 class="my-4">Edit</h1>
        <div class="form-group">
        <form action="{{ url('student/update/'.$student->student_id) }}" method="post">
            @csrf
            @method('PUT')
            <label >LastName </label>
            <input type="text" class="form-control" name="last_name" value="{{$student->last_name}}">
            <label >FirstMidname </label>
            <input type="text" class="form-control" name="first_midname" value="{{$student->first_midname}}">
            <label >EnrollmentDate label
            <input type="text" class="form-control" name="enrollmentdate" value="{{$student->enrollmentdate}}">
            <button type="submit" class="btn btn-secondary mt-4">Save</button>
        </form>
        </div> 
        <a href="{{route('student')}}"> Back to List</a>
</div>
@endsection