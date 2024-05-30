<?php

declare(strict_types=1);

namespace PHPOMG\Form\Field;

use PHPOMG\Form\ItemInterface;

class Hidden implements ItemInterface
{
    private $name;
    private $value;

    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function __toString(): string
    {
        $name = htmlspecialchars($this->name);
        $value = htmlspecialchars($this->value);
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
