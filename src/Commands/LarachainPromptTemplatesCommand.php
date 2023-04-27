<?php

namespace Sundance\LarachainPromptTemplates\Commands;

use Illuminate\Console\Command;

class LarachainPromptTemplatesCommand extends Command
{
    public $signature = 'larachain-prompt-templates';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
