<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public $fillable = [
    	'title', 'subtitle', 'imgcover', 'answer',
    ];
}
