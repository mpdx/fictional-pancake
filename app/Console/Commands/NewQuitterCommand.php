<?php

namespace App\Console\Commands;

use App\Models\Quit;
use Carbon\Carbon;
use Illuminate\Console\Command;

class NewQuitterCommand extends Command
{
    protected $signature = 'quitter {employee?}';

    public function handle()
    {
        $employee = $this->anticipate('Who quitted / wants to quit this time?',
            [$this->argument('employee')]
        );

        $when = $this->ask('And when?', 'now');

        if (!$this->confirm('Is that correct?')) {
            return;
        }

        with(new Quit)
            ->fill([
                'employee' => $employee,
                'created_at' => Carbon::parse($when),
            ])
            ->save();
    }
}
