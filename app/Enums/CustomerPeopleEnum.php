<?php

namespace App\Enums;

enum CustomerPeopleEnum: string
{
    case PHYSICAL = 'Physical';
    case LEGAL    = 'Legal';

    public static function toArray(): array
    {
        return [
            self::PHYSICAL => 'Physical',
            self::LEGAL    => 'Legal',
        ];
    }

    public function label(): string
    {
        return match ($this) {
            self::PHYSICAL => 'Padrão',
            self::LEGAL    => 'Legalistrador',
        };
    }

    public function colors(): string
    {
        return match ($this) {
            self::PHYSICAL => 'gren',
            self::LEGAL    => 'blue',
        };
    }
}
