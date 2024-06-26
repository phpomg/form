<?php

declare(strict_types=1);

namespace PHPOMG\Form\Field;

use Stringable;

class Option implements Stringable
{
    private $label = '';
    private $value = '';
    private $selected = false;
    private $disabled = false;

    public function __construct(string $label, string|int|float|bool|null|Stringable $value, bool $selected = false, bool $disabled = false)
    {
        $this->label = $label;
        $this->value = (string)$value;
        $this->selected = $selected;
        $this->disabled = $disabled;
    }

    public function __toString()
    {

        $res = '<option';
        $res .= ' value="' . htmlspecialchars($this->value) . '"';
        if ($this->selected) {
            $res .= ' selected';
        }
        if ($this->disabled) {
            $res .= ' disabled';
        }
        $res .= '>';
        $res .= htmlspecialchars($this->label);
        $res .= '</option>';

        return $res;
    }
}
