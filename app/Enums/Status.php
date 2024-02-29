<?php
namespace App\Enums;

enum Status: string {

    case unfinished = 'unfinished';
    case active = 'active';
    case disabled = 'disabled';
    case removed ='removed';
    case blocked = 'blocked';
    
}