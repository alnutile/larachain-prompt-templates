<?php

namespace Sundance\LarachainPromptTemplates\Prompts;

use Spatie\LaravelData\Data;

class PromptToken extends Data
{
    public function __construct(
        public string $token,
        public string $replacement
    ) {
    }
}
