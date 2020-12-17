<?php


namespace App;

use App\Models\User;
use Illuminate\Foundation\Console\Kernel;
use Throwable;
use \Illuminate\Contracts\Foundation\Application;
use \Illuminate\Contracts\Events\Dispatcher;

class LambdaKernel extends Kernel
{

    public function __construct(Application $app, Dispatcher $events)
    {
        parent::__construct($app, $events);
    }

    /**
     * @param $event
     * @return int
     */
    public function work($event): int
    {
        try {
            $this->bootstrap();

            logger($event);

            return 0;

        } catch (Throwable $e) {

            $this->reportException($e);

            return 1;
        }
    }

}
