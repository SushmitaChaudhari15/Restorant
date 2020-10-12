<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table2 extends Model
{
    use HasFactory;
      
 

    protected $table ="garden";
    public $timestamps= false;
 
 
    protected $fillable = [
     'name', 'email', 'people','date','number','coment',
 ];
 
}
