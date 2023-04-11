@extends('layouts.main')
@section('content')
<div>
    <div>
        <a href="{{route('instruct.create')}}" class="btn btn-info mb-3">Add one</a>
    </div>
    @foreach($instructs as $instruct)
    <div><a href="{{route('instruct.show', $instruct->id)}}">{{$instruct->id}}.{{$instruct->title}}</a></div>
    @endforeach
</div>
@endsection

