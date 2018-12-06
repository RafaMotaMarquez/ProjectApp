<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Cool kid method
    protected $guarded = []; // This way you enable all the field to be passed.
    // protected $fillable = ['title', 'description']; // This way you only accept certain fields.
}
