<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main(Request $request, $aaa, $ccc)
    {
        $zzz = array($aaa,$ccc);
        $this -> changeValue($zzz);
        return $this->mySelf($zzz);
    }
    private function changeValue(&$zzz)
    {
        $zzz[1] = 'fuck';
    }
    // function自己用
    private function mySelf($zzz)
    {
        return "Welcome to PornHub$zzz[0]  ' -----'  $zzz[1]";
    }
}
