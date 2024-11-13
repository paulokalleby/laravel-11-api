<?php

namespace App\Enums;

enum VehicleFuelEnum: string
{
    case FLEX     = 'Flex';
    case GASOLINE = 'Gasoline';
    case ALCOHOL  = 'Alcohol';
    case ELETRIC  = 'Eletric';
    case HYBRID   = 'Hybrid';

    public static function toArray(): array
    {
        return [
            self::FLEX     => 'Flex',
            self::GASOLINE => 'Gasoline',
            self::ALCOHOL  => 'Alcohol',
            self::ELETRIC  => 'Eletric',
            self::HYBRID   => 'Hybrid',
        ];
    }

    public function label(): string
    {
        return match ($this) {
            self::FLEX     => 'Flex',
            self::GASOLINE => 'Gasolina',
            self::ALCOHOL  => 'Álcool',
            self::ELETRIC  => 'Elétrico',
            self::HYBRID   => 'Híbrido',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::FLEX     => 'bg-success',
            self::GASOLINE => 'bg-warning',
            self::ALCOHOL  => 'bg-rimary',
            self::ELETRIC  => 'bg-info',
            self::HYBRID   => 'bg-danger',
        };
    }
}
