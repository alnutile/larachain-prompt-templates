<?php

namespace Sundance\LarachainPromptTemplates;

use Sundance\LarachainPromptTemplates\Prompts\PromptToken;

class PromptTemplate extends \Spatie\LaravelData\Data
{
    public function __construct(
        public array $input_variables,
        public string $template,
    ) {
    }

    public function format()
    {
        foreach ($this->input_variables as $promptToken) {
            /** @var PromptToken $promptToken */
            $this->template = str_replace('{'.$promptToken->token.'}', $promptToken->replacement,
                $this->template);
        }

        return $this->template;
    }
}
