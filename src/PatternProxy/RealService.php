<?php
namespace App\PatternProxy;

class RealService implements Intermediable
{
    public RealServiceStatuses $status = RealServiceStatuses::UNPREPARED;

    /**
     * @return string
     */
    public function prepare(): string
    {
        sleep(3);
        $this->status = RealServiceStatuses::PREPARED;
        return 'Prepared. Took me 3 seconds.';
    }

    /**
     * @return string
     */
    public function execute(): string
    {
        return str_repeat("Executing...\n", 10);
    }

    /**
     * @return bool
     */
    public function clean(): bool
    {
        $this->status = RealServiceStatuses::UNPREPARED;
        return true;
    }
}
