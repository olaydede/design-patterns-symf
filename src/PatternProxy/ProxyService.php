<?php
namespace App\PatternProxy;

use JetBrains\PhpStorm\Pure;

class ProxyService implements Intermediable
{
    public RealService $realService;
    public string $cachedExecution = '';

    #[Pure] public function __construct()
    {
        $this->realService = new RealService();
    }

    /**
     * @return string
     */
    public function prepare(): string
    {
        if ($this->realService->status === RealServiceStatuses::UNPREPARED) {
            return $this->realService->prepare();
        }
        return 'Prepared. Took me 0 seconds.';
    }

    /**
     * @return string
     */
    public function execute(): string
    {
        if (! $this->cachedExecution) {
            $executionString = $this->realService->execute();
            $this->cachedExecution = $executionString;
            return $executionString;
        } else {
            return "FROM PROXY: \n" . $this->cachedExecution;
        }
    }

    /**
     * @return bool
     */
    public function clean(): bool
    {
        return $this->realService->clean();
    }
}
