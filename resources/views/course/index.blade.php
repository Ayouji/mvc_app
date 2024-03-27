@extends('layouts.app')

@section('title', 'Students')

@section('content')
<div class="container">
    <h1 class="my-4">Courses</h1>
    <a class="btn btn-primary mb-3" href="{{ route('course.create') }}">Create New</a>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Number</th>
                    <th>Title</th>
                    <th>Credits</th>
                    <th>Departement</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $item)
                <tr>
                        
                    <td><a href="{{ url('/course/edit/'.$item->course_id) }}">Edit</a> 
                    | <a href="{{route('course.detail', $item['course_id'])}}">Details</a> 
                    | <a href="{{ url('/course/delete/'.$item->course_id) }}">Delete</a></td>
                    <td></td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->credit}}</td>
                    <td>{{$item->department->name}}</td>
            </tr>
                @endforeach
                        </tbody>
                    </table>
                </div>
</div>
@endsection
