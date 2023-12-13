<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;

class CaptchaController extends Controller
{
    public function generateCaptcha()
    {
        $builder = new CaptchaBuilder;
        $builder->build();
        $captcha = $builder->inline();

        return response()->make($captcha, 200, ['Content-type' => 'image/jpeg']);
    }
}

