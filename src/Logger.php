<?php

namespace Anso\Framework\Contract;

interface Logger
{
    public function log(string $data): void;
}