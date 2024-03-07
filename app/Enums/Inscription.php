<?php
namespace App\Enums;

enum Inscription: string {
    case none = 'none';
    case promocja = 'Promocja!';
    case wyprzedaz = 'Wyprzedaż';
    case przecena = 'Przecena';
    case bestseller = 'Bestseller';

}
//'none','Promocja!','Wyprzedaż','Przecena','Bestseller'
