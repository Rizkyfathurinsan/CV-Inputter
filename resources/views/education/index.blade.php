@extends('layouts.app')

@section('content')

<div class="mb-2">

<h2>Education Summary</h2>

@foreach($education as $e)

@if ($e->user_id == Auth::user()->id)
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{$e->school_name}} ({{$e->graduation_start_date}} -
            {{$e->graduation_end_date}})</h4>

        <ul>
            <li>{{ $e->degree}}</li>
            <li>{{ $e->field_of_study}}</li>
            <li>{{ $e->school_location}}</li>
        </ul>

        <a class="btn btn-sm btn-primary" href=" {{route('education.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('education.destroy', $e)}}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')

            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>
@endif
@endforeach

</div>
<a class=" btn btn-primary" href=" {{route('education.create')}} " role="button">+ Add another Education</a>

<div class="row mt-3">
    <div class="col text-right">
        <a class=" btn btn-primary" href=" {{route('experience.index')}} " role="button">Add Work History</a>
    </div>
</div>




@endsection
