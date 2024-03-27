@extends('layouts.app')

@section('title', 'Students')

@section('content')
<div class="container">
    <h1 class="my-4">Students</h1>
    <a class="btn btn-primary mb-3" href="{{ route('student.create') }}">Create New</a>
    <form action="/student" method="get">
    <div class="form-group">
        <label for="searchByName">Find by name:</label>
        <input type="search" class="form-control" id="searchByName" name="search" placeholder="Search by name .... ">
    </div>
    <input type="submit" class="btn btn-primary mb-3" value="search" />
</form>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Enrollment Date</th>
                </tr>
            </thead>
            <tbody>
                        @forelse ($student as $item)
                        <tr>
                        
                            <td><a href="{{ url('/student/edit/'.$item->student_id) }}">Edit</a> 
                            | <a href="{{route('student.detail', $item['student_id'])}}">Details</a> 
                            | <a href="{{ url('/student/delete/'.$item->student_id) }}">Delete</a></td>
                            <td>{{$item->last_name}}</td>
                            <td>{{$item->first_midname}}</td>
                            <td>{{$item->enrollmentdate}}</td>
                        @empty
                    </tr>
                        <tr>
                            <td>Not Found !!!</td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
</div>
@endsection
