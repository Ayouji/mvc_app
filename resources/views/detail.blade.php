@extends('layouts.app')

@section('title', 'Details')

@section('content')
<div class="container">
    <h1 class="my-4">Deatils</h1>
        <div class="form-group">
            <label for="inputNom">LastName </label>
            <h4>{{$students->last_name}}</h4>
            <label for="inputPrenom">FirstMidname </label>
            <h4>{{$students->first_midname}}</h4>
            <label for="inputEmail">EnrollmentDate label
            <h4>{{$students->enrollmentdate}}</h4>
            <h3>Course TitleGrade </h3>
        </div>
        <a href="{{ url('/student/edit/'.$students->student_id) }}"> Edit</a> | 
        <a href="{{route('student')}}"> Back to List</a>
</div>
@endsection
