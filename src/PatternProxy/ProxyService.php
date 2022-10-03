<?php
namespace App\PatternProxy;

class ProxyService implements Intermediable
{
    public RealService $realService;
    public string $cachedExecution = '';

    public function __construct()
    {
        $this->realService = new RealService();
    }

    public function prepare()
    {
        if ($this->realService->status === RealServiceStatuses::UNPREPARED) {
            return $this->realService->prepare();
        }
        return 'Prepared. Took me 0 seconds.';
    }

    public function execute()
    {
        if (! $this->cachedExecution) {
            $executionString = $this->realService->execute();
            $this->cachedExecution = $executionString;
            return $executionString;
        } else {
            return 'FROM PROXY: '.$this->cachedExecution;
        }
    }

    public function clean()
    {
        return $this->realService->clean();
    }

}