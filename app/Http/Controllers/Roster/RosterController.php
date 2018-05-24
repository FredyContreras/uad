<?php

namespace App\Http\Controllers\Roster;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Roster\Employee;


class RosterController extends Controller
{
    public function test()
    {
        $first = Employee::first();
        $first->gender = 'Fem';
        $first->save();
        dd(Employee::first()->audits);
    }
}
