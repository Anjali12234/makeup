<?php

namespace App;

enum ServiceType: string
{
    case Makeup = 'Makeup';
    case Mehndi = 'Mehndi';
    case Nail_Extension = 'Nail Extension';
    case Facial = 'Facial';
    public function label(): string
    {
        return self::getLabel($this);
    }

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::Makeup => 'Makeup',
            self::Mehndi => 'Mehndi',
            self::Nail_Extension => 'Nail Extension',
            self::Facial => 'Facial',
          
        };
    }
}
