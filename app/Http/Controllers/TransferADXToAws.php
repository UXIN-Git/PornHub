<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferADXToAws extends Controller
{
    public function index(){
        
        $adxFile = "";
        return view('upload', [
            'adxFile' => $adxFile,
        ]);
        // return View::make( 'upload' )->with('adxFile', $adxFile); 
    }
    public function upload(){
        // dd(request()->file('file')->getClientOriginalName());
        $adxFile = request()->file('file')->store(
            'adx-file/'.date('Ymd'),
            's3'
        );
        
        $adxFile = "https://adx.holmesmind.com/$adxFile";
        return view('upload', [
            'adxFile' => $adxFile,
        ]);
        // return View::make( 'upload' )->with('adxFile', $adxFile); 
    }
}