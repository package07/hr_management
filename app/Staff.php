<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model //model เวลาเรียก
{
    protected $fillable =[
          'username',
          'brithday',
          'position',
          'division', 
          'division_id',
          'telephone',
          'salary',
     ];
}
