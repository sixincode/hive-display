<?php

namespace Sixincode\HiveDisplay\Commands;

use Illuminate\Console\Command;

class HiveDisplayCommand extends Command
{
    public $signature = 'hive-display';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
