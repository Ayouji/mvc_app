@extends('layouts.app')

@section('title', 'Details')

@section('content')
<div class="container">
    <h1 class="my-4">Deatils</h1>
        <div class="form-group">
            <label for="inputNom">title </label>
            <h4>{{$courses->title}}</h4>
            <label for="inputPrenom">credit </label>
            <h4>{{$courses->credit}}</h4>
        </div>
        <a href="{{ url('/student/edit/'.$courses->course_id) }}"> Edit</a> | 
        <a href="{{route('student')}}"> Back to List</a>
</div>
@endsection
