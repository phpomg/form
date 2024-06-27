<?php

declare(strict_types=1);

namespace PHPOMG\Form\Help;

use PHPOMG\Form\ItemInterface;
use Stringable;

class Html implements ItemInterface
{
    private $html = '';

    public function __construct(string|int|float|bool|null|Stringable $html)
    {
        $this->html = (string)$html;
    }

    public function __toString(): string
    {
        return $this->html;
    }
}
