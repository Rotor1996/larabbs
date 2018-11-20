<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mews\Captcha\Captcha;
use Illuminate\Routing\Controller;

class CaptchaController extends Controller
{
	 public function getCaptcha(Captcha $captcha, $config = 'default')
    {
        ob_clean();
        return $captcha->create($config);
    }
}