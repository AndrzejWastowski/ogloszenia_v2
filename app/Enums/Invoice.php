<?php
namespace App\Enums;

enum Invoice: string {
    case NieWystawiamFaktury = 'Nie wystawiam faktury';
    case FakturaVAT = 'Faktura VAT';
    case FakturaVatMarża = 'Faktura Vat-marża';
    case FakturaBezVAT = 'Faktura bez VAT';
}
