<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model //model เวลาเรียก
{
    protected $fillable =[
          'username',
          'birthday',
          'position',
          'division', 
          'division_id',
          'telephone',
          'salary',
          'gender',
     ];
}
