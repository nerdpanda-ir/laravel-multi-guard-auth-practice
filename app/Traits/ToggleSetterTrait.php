<?php

namespace App\Traits;

trait ToggleSetterTrait
{
    public function setToggle(bool $toggle):void {
        $this->toggle = $toggle ;
    }
}
