<?php

namespace Sundance\LarachainPromptTemplates;

class FewShotPromptTemplate extends \Spatie\LaravelData\Data
{

    /**
     * @param PromptTemplate[] $promptTemplates
     */
    public function __construct(
        public array $promptTemplates,
        public ?string $prefix,
        public PromptTemplate $suffix,
    )
    {

    }

    public function format(string $input) {
        $results = [];
        $results[] = $this->prefix;

        foreach($this->promptTemplates as $index => $promptTemplate) {
            $results[] = $promptTemplate->format();
        }

        $results[] = $this->suffix->format();

        return implode("\n", $results);
    }
}
