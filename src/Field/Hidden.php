<?php

declare(strict_types=1);

namespace PHPOMG\Form\Field;

use PHPOMG\Form\ItemInterface;
use Stringable;

class Hidden implements ItemInterface
{
    private $name;
    private $value;

    public function __construct(string $name, string|int|float|bool|null|Stringable $value)
    {
        $this->name = $name;
        $this->value = (string)$value;
    }

    public function __toString(): string
    {
        $name = htmlspecialchars($this->name);
        $value = is_string($this->value) ? htmlspecialchars($this->value) : $this->value;
        $str = <<<str
<input type="hidden" name="{$name}" value="{$value}">
<script>
(function() {
    document.currentScript.previousElementSibling.parentElement.style.display = 'hidden';
})()
</script>
str;
        return $str;
    }
}
