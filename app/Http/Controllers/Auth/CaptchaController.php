<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function getCaptcha()
    {
        $builder = new CaptchaBuilder;
        session(['phrase' => $builder->getPhrase()]);
        $builder->build();

        header('Content-type: image/jpeg');
        $builder->output();
    }

}
