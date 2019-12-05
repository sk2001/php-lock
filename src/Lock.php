<?php

namespace TH\Lock;

use Psr\Log\LoggerInterface;

interface Lock
{
    /**
     * Acquire a lock on the resource
     *
     * @return void
     * @throws \RuntimeException thrown if the lock could not be acquired
     */
    public function acquire();

    /**
     * Release lock on the resource. If the lock has not been acquired, does nothing.
     *
     * @return void
     * @throws \RuntimeException thrown if the lock could not be released
     */
    public function release();
}
