<?php
namespace App\Enums;

enum Status: string {
    case New = 'new';
    case InProgress = 'in_progress';
    case Completed = 'completed';
}