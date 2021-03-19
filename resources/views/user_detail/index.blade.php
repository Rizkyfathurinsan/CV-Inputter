@extends('layouts.app')

@section('content')

<h2>User Detail</h2>

@foreach($details as $e)
@if ($e->user_id == Auth::user()->id)


<div class="card">
    <div class="card-body">
    <h2 class="card-title"> {{$e->fullname}}</h2>

        <ul style="list-style-type:none;">
            <li>E-mail  : {{$e->email}}</li>
            <li>Phone   : {{$e->phone}}</li>
            <li>Address : {{$e->address}}</li>

        </ul>
        <h4> {{$e->summary}}</h4>

        <a class="btn btn-sm btn-primary" href=" {{route('user-detail.edit', $e)}} " role="button">Edit</a>

        <form action="{{route('user-detail.destroy', $e)}}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')

            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>

<div class="text-right mt-3">
    <a class="btn btn-primary " href=" {{route('education.index')}} " role="button">Add Education</a>
</div>
@else 
        
        <a name="" id="" class="btn btn-primary" href=" {{route('user-detail.create')}} " role="button">Build your CV Now</a>
        @break
@endif
@endforeach

@endsection
