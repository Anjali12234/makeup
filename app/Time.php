<?php

namespace App;

enum Time:string
{
    case AM = 'AM';
    case PM = 'PM';
   
    public function label(): string
    {
        return self::getLabel($this);
    }

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::AM => 'AM',
            self::PM => 'PM',
          
          
        };
    }
}
