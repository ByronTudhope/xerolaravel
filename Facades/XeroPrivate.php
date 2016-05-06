<?php
namespace ByronTudhope\XeroLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class XeroPrivate extends Facade
{
    protected static function getFacadeAccessor() { return 'XeroPrivate'; }
}
