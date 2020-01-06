<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class TimeController extends Controller
{
    public function main()
    {
        $dt = Carbon::now();
        $minNow = $dt->minute;
        if ($minNow % 2 == 0) {
            return "Welcome to PornHub";
        } else {
            return '403 Forbidden';
        }
    }
}
