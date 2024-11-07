<?php

namespace Sinagadiory\PhpComposer\Data;

class Person
{
    public function __construct(
        public string $name,
        public string $address,
    )
    {
    }
}
