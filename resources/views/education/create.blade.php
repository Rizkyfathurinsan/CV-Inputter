@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Education details</h2>


    <form action="/education" method='POST'>
        @csrf

        
        <x-form.text type="hidden" name="user_id" :value="Auth::user()->id" hidden></x-form.text>
        <x-form.text name="school_name"></x-form.text>
        <x-form.text name="school_location"></x-form.text>
        <x-form.text name="degree"></x-form.text>
        <x-form.text name="field_of_study"></x-form.text>
        <x-form.text type="date" name="graduation_start_date"></x-form.text>
        <x-form.text type="date" name="graduation_end_date"></x-form.text>

        <input type="submit" class="btn btn-success" value="Save Education">

    </form>

</div>


@endsection
