<?php

namespace Qinjd\Dingxiang\Facades;

use Illuminate\Support\Facades\Facade;

class DXCaptcha extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dxcaptcha';
    }
}
