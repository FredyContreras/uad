<?php

namespace App\Models\Roster;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table;
    protected $primaryKey = 'employee_id';

    public function __construct()
    {
      $this->table = config('constants.schema').'.employee';
    }
}
