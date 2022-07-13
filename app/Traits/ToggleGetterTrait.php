<?php

namespace App\Traits;

trait ToggleGetterTrait
{
    public function getToggle():bool {
        return $this->toggle;
    }
}
