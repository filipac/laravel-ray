<?php

namespace Spatie\LaravelRay\DumpRecorder;

class MultiDumpHandler
{
    protected array $handlers = [];

    public function dump($value)
    {
        foreach ($this->handlers as $handler) {
            $handler($value);
        }
    }

    public function addHandler(callable $callable = null): self
    {
        $this->handlers[] = $callable;

        return $this;
    }
}
