<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    
    protected $fillable = array('parent_id','order','nom');
    public static $rules=array('parent_id'=>'required|min:2',
                                'order'=>'required|min:1',
                                'nom'=>'required|min:2'


  );
}
