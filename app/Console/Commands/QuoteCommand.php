<?php

namespace App\Console\Commands;

use App\Action\QuoteCreateAction;
use App\DTO\QuoteData;
use App\Http\Requests\QuoteRequest;
use Illuminate\Console\Command;

class QuoteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:create {description}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create quote';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(QuoteCreateAction $action)
    {
        $request = new QuoteRequest([
            'description' => $this->argument('description')
        ]);

        $request->validate($request->rules());

        $action(QuoteData::formRequest($request));
    }
}
