<?php
namespace App\PatternProxy;

class RealService implements Intermediable
{
    public RealServiceStatuses $status = RealServiceStatuses::UNPREPARED;

    public function prepare()
    {
        sleep(3);
        $this->status = RealServiceStatuses::PREPARED;
        return 'Prepared. Took me 3 seconds.';
    }

    public function execute()
    {
        $executionString = '';
        for ($i = 0; $i < 100; $i++) {
            $executionString .= 'executing...\n';
        }
        return $executionString;
    }

    public function clean()
    {
        $this->status = RealServiceStatuses::UNPREPARED;
        return true;
    }

}