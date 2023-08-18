<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    //

    public function index()
    {
        Redis::set('user_id:1:first_name', 'Sri');
        Redis::set('user_id:2:first_name', 'Guru');
        Redis::set('user_id:3:first_name', 'Sai');
        Redis::set('user_id:4:first_name', 'Swani');
        Redis::set('user_id:5:first_name', 'Manu');


        for ($i = 0; $i <= 5; $i++) {
            print Redis::get('user_id:' . $i . ':first_name') . PHP_EOL;
        }
    }
}
