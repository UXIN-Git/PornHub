<?php

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function main()
    {
        $tomorrow = date("Y-m-d", strtotime("+1 day"));

        // echo '123';
        $json = '{
            "PEH": {
                "Latitude": "23.569031",
                "SiteId": "78",
                "UV": "7"
            },
            "KMN": {
                "Latitude": "24.432133",
                "SiteId": "77",
                "UV": "7"
            },
            "MZW": {
                "Latitude": "26.160469",
                "SiteId": "75",
                "UV": "6"
            }}';
            $dejson = json_decode($json, true);
            foreach ($dejson as $key => $value) {
                # code...
                if ($key == 'PEH'){
                    $arr_v = [];
                    foreach ($value as $keya => $valuea) {
                        $valueaSub = substr($valuea, 0, 6);
                        array_push($arr_v, "$keya-$valueaSub");
                        
                    }
                
            }
        }
        dd(implode($arr_v,","));
    }
}
