<?php
namespace App\Enums;
enum EnumVoteType:string
{
    case Like = 'like';
    case Dislike = 'dislike';
    public static function getValues(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }
}
