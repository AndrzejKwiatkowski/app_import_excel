<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'postac', 'entuzjazm', 'kreatywnosc', 'blyskotliwosc', 'spokoj_wewnetrzny' 
   ];
}
