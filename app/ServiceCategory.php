<?php

namespace App;

enum ServiceCategory:string
{
    case Makeup = 'Makeup';
    case Mehndi = 'Mehndi';
    case Nail_Extension = 'NailExtension';
    case Facial = 'Facial';
 

    public function label(): string
    {
        return self::getLabel($this);
    }  

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::Makeup => 'makeup',
            self::Mehndi => 'mehndi',
            self::Nail_Extension => 'nail_extension',
            self::Facial => 'facial',
           
        };
    }

    public static function getValuesWithLabels(): array
    {
        return array_reduce(self::cases(), function ($result, $case) {
            $result[$case->value] = $case->label();
            return $result;
        }, []);
    }
}
