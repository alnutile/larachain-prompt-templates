<?php

use function PHPUnit\Framework\assertEquals;
use Sundance\LarachainPromptTemplates\FewShotPromptTemplate;
use Sundance\LarachainPromptTemplates\Prompts\PromptToken;
use Sundance\LarachainPromptTemplates\PromptTemplate;

it('test few show', function () {
    $prefix = 'Give the antonym of every input';

    $template = <<<'EOD'
Word: {word}
Antonym: {antonym}
EOD;

    $input_variables = [
        new PromptToken(
            'word',
            'happy'
        ),
        new PromptToken(
            'antonym',
            'sad'
        ),
    ];

    $promptTemplates1 = new PromptTemplate(
        $input_variables,
        $template
    );

    $input_variables = [
        new PromptToken(
            'word',
            'tall'
        ),
        new PromptToken(
            'antonym',
            'short'
        ),
    ];

    $promptTemplates2 = new PromptTemplate(
        $input_variables,
        $template
    );

    $input_variables = [
        new PromptToken(
            'word',
            'big'
        ),
        new PromptToken(
            'antonym',
            ''
        ),
    ];

    $template = <<<'EOD'
Word: {word}
Antonym:
EOD;

    $suffix = new PromptTemplate($input_variables, $template);

    $dto = new FewShotPromptTemplate(
        [$promptTemplates1, $promptTemplates2],
        $prefix,
        $suffix
    );

    $expected = <<<'EOD'
Give the antonym of every input
Word: happy
Antonym: sad
Word: tall
Antonym: short
Word: big
Antonym:
EOD;

    assertEquals($expected, $dto->format('big'));
});
