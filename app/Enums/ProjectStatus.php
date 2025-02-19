<?php

namespace App\Enums;

enum ProjectStatus: int
{
    case INPROGRESS = 1;
    case COMPLETED = 2;

    public function label(): string
    {
        return match ($this) {
            self::INPROGRESS => 'In progress',
            self::COMPLETED => 'Completed',
        };
    }

    public function styles(): string
    {
        return match ($this) {
            self::INPROGRESS => 'text-blue-500',
            self::COMPLETED => 'text-green-500',
        };
    }
}
