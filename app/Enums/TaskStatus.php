<?php

namespace App\Enums;

enum TaskStatus: int
{
    case DRAFT = 0;
    case TODO = 1;
    case INPROGRESS = 2;
    case COMPLETED = 3;

    public function label(): string
    {
        return match ($this) {
            self::DRAFT => 'Draft',
            self::TODO => 'To Do',
            self::INPROGRESS => 'In Progress',
            self::COMPLETED => 'Completed',
        };
    }

    public function styles(): string
    {
        return match ($this) {
            self::DRAFT => 'text-zinc-500',
            self::TODO => 'text-blue-500',
            self::INPROGRESS => 'text-yellow-500',
            self::COMPLETED => 'text-green-500',
        };
    }
}
