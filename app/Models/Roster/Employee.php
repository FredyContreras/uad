<?php

namespace App\Models\Roster;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Employee extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table;
    protected $primaryKey = 'employee_id';

    public function __construct()
    {
      $this->table = config('constants.schema').'.employee';
    }
}
