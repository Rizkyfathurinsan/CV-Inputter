@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Skill details</h2>


    <form action="/skill" method='POST'>
        @csrf

        <x-form.text type="hidden" name="user_id" :value="Auth::user()->id" hidden></x-form.text>
        <x-form.text name="name"></x-form.text>
        <x-form.text name="rating"></x-form.text>


        <input type="submit" value="Save and Next">

    </form>

</div>


@endsection
