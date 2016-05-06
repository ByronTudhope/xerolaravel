<?php
namespace ByronTudhope\XeroLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class XeroInvoice extends Facade
{
    protected static function getFacadeAccessor() { return 'XeroInvoice'; }
}
