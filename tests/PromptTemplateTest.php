<?php

use function PHPUnit\Framework\assertEquals;
use Sundance\LarachainPromptTemplates\Prompts\PromptToken;
use Sundance\LarachainPromptTemplates\PromptTemplate;

it('can replace 1 item', function () {
    $template = <<<'EOD'
I want you to act as a naming consultant for new companies.
What is a good name for a company that makes {product}?
EOD;

    $input_variables = [
        new PromptToken(
            'product',
            'colorful socks'
        ),
    ];
    $dto = new PromptTemplate(
        $input_variables,
        $template
    );

    assertEquals('I want you to act as a naming consultant for new companies.
What is a good name for a company that makes colorful socks?', $dto->format());
});
