<?php
declare(strict_types=1);

namespace Org\Service;

class MyRegularService
{
    private $bar;

    public function __construct($bar)
    {
        $this->bar = $bar;
    }
}
