<?php

namespace App\Enums;

enum UserRoleEnum: string
{
    case DEFAULT  = 'Default';
    case ADMIN    = 'Admin';

    public static function toArray(): array
    {
        return [
            self::DEFAULT => 'Default',
            self::ADMIN   => 'Admin',
        ];
    }

    public function label(): string
    {
        return match ($this) {
            self::DEFAULT => 'Padrão',
            self::ADMIN   => 'Administrador',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::DEFAULT => 'gren',
            self::ADMIN   => 'blue',
        };
    }
}
