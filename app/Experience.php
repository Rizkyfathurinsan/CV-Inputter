<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['user_id','job_title', 'employer', 'city', 'country', 'start_date', 'end_date'];
}
