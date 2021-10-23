<?php
declare(strict_types=1);

namespace Org\FirstBundle\Service;

class MyService
{
    private string $foo;

    public function __construct(string $foo)
    {
        $this->foo = $foo;
    }
}
