<?php

namespace Sundance\LarachainPromptTemplates\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sundance\LarachainPromptTemplates\LarachainPromptTemplates
 */
class LarachainPromptTemplates extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sundance\LarachainPromptTemplates\LarachainPromptTemplates::class;
    }
}
