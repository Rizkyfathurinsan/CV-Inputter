<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Resume</title>

    <style>
        body {
            font-size: 17px;

        }

        h2 {
            font-weight: 100;
            padding: 20px 0;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .container {
            width: 70%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">

        <section class="heading">

        @foreach($details as $e)
        @if($e->user_id == Auth::user()->id)


            <h2>{{$e->fullname}}</h2>

            <p>Email: {{$e->email}}</p>
            <p>Phone: {{$e->phone}}</p>
            <p>Address: {{$e->address}}</p>



            <h2 class="sum">Summary</h2>


            <h3>{{$e->summary}}</h3>
        @endif
        @endforeach


        </section>


        <section class="education">

            <h2>Education</h2>

            @foreach($education as $e)
            @if($e->user_id == Auth::user()->id)

            <h4> Degree: {{$e->degree}}</h4>

            <p>School: {{$e->school_name}} </p>
            <p>Start Date: {{$e->graduation_start_date}} </p>
            <p>Graduation Date: {{$e->graduation_end_date}} </p>
            @endif
            @endforeach
        </section>


        <section class="work">

            <h2>Work History</h2>

            @foreach($experience as $work)
            @if($work->user_id == Auth::user()->id)

            <h3>
                Job Title: {{$work->job_title}}
            </h3>
            <p>Employer: {{$work->employer}} </p>
            <p>Start Date: {{$work->start_date}} </p>
            <p>End Date: {{$work->end_date}} </p>
            @endif
            @endforeach
        </section>



        <section class="skills">

            <h2>Skills</h2>

            @foreach($skill as $s)
            @if($s->user_id == Auth::user()->id)

            <h4> {{$s->name}} ({{$s->rating}} out of 5)</h4>
            @endif
            @endforeach
        </section>

    </div>
</body>

</html>
