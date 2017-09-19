<?php

namespace BlackBits\Formbuilder;

use Illuminate\Support\Facades\Facade;


class FormbuilderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Formbuilder';
    }
}