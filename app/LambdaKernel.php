<?php


namespace App;

use Illuminate\Foundation\Console\Kernel;
use Throwable;

class LambdaKernel extends Kernel
{

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
