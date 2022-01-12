<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'univ',
        'facu',
        'year',
        'graduate',
        'pref',
        'school_name',
        'way',
        'univlife',
    ];

    public function user(){
        return $this->belongsTo('App/Models/User');
    }
}
