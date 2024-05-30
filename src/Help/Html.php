<?php

declare(strict_types=1);

namespace PHPOMG\Form\Help;

use PHPOMG\Form\ItemInterface;
use Stringable;

class Html implements ItemInterface
{
    private $html = '';

    public function __construct(string|Stringable $html)
    {
        $this->html = $html;
    }

    public function __toString(): string
    {
        return $this->html . '';
    }
}
