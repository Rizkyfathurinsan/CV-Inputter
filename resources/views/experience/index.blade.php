@extends('layouts.app')

@section('content')

<h2>Work  Summary</h2>

@foreach($experience as $e)
@if ($e->user_id == Auth::user()->id)
<div class="card">
    <div class="card-body">
        <h4 class="card-title"> {{$e->job_title}}  ({{$e->start_date}} to {{$e->end_date}}) </h4>

        <ul>
            <li>{{ $e->employer}}</li>
            <li>{{ $e->city}}</li>
            <li>{{ $e->country}}</li>
        </ul>

    <a  class="btn btn-sm btn-primary" href=" {{route('experience.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('experience.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>

@endif

@endforeach
<div class="mt-2">
    <a class=" btn btn-primary" href=" {{route('experience.create')}} " role="button">+ Add Experience</a>
</div>

<div class="text-right">
    <a class=" btn btn-primary" href=" {{route('skill.index')}} " role="button">Add Skills</a>
</div>


@endsection
