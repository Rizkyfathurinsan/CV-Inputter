@extends('layouts.app')

@section('content')

<h2>Skill  Summary</h2>

@foreach($skill as $e)
@if ($e->user_id == Auth::user()->id)

<div class="card">
    <div class="card-body">
        <h4 class="card-title"> {{$e->name}} ( {{$e->rating}} )</h4>


    <a  class="btn btn-sm btn-primary" href=" {{route('skill.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('skill.destroy', $e)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>
@endif

@endforeach

<div class="mt-2">
    <a href=" {{route('skill.create')}} ">+ Add skill</a>
</div>


<div class="text-right">
    <a class=" btn btn-primary" href=" {{route('resume.index')}} " role="button"> View CV </a>
</div>


@endsection
