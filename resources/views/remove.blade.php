@extends('layouts.app')

@section('title', 'Delete')

@section('content')
<div class="container">
    <h1 class="my-4">Delete</h1>
    <form method="get" action="{{ route('student') }}">
        
        <div class="form-group">
            <h3>Are you sure you want to delete this?</h3>
            <label for="inputNom">LastName </label>
            <h4>{{$students->last_name}}</h4>
            <label for="inputPrenom">FirstMidname </label>
            <h4>{{$students->first_midname}}</h4>
            <label for="inputEmail">EnrollmentDate label
            <h4>{{$students->enrollmentdate}}</h4>
            <button type="submit" class="btn btn-success">Delete </button>
        </div>
        </form>
        <a href="{{route('student')}}"> Back to List</a>
</div>
@endsection
