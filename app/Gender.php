<?php

namespace App;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum Gender: string implements HasLabel, HasIcon
{
    case Male = 'male';
    case Female = 'female';

    public function getLabel(): ?string
    {
        return $this->name;
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Male => 'fas-mars',
            self::Female => 'fas-venus',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Male => 'info',
            self::Female => 'danger',
        };
    }
}
