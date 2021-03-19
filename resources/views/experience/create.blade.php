@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Work details</h2>


    <form action="/experience" method='POST'>
        @csrf

        <x-form.text type="hidden" name="user_id" :value="Auth::user()->id" hidden></x-form.text>
        <x-form.text name="job_title"></x-form.text>
        <x-form.text name="employer"></x-form.text>
        <x-form.text name="city"></x-form.text>
        <x-form.text name="country"></x-form.text>
        <x-form.text type="date" name="start_date"></x-form.text>
        <x-form.text type="date" name="end_date"></x-form.text>

        <input type="submit" class="btn btn-success" value="Save">

    </form>

</div>


@endsection
