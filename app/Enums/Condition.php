<?php
namespace App\Enums;

enum Condition: string {
    case nowe = 'Nowe';
    case uzywane = 'Używane';
    case powystawowe = 'Powystawowe';
    case po_zwrocie = 'Po zwrocie';
    case odnowione = 'Odnowione';

}
