<?php
namespace App\Enums;

enum Role: int
{
    case Admin = 1;
    case Vendor = 2;
    case Customer = 3;
}