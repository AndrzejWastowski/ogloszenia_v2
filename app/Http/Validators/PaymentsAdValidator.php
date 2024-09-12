<?php
declare(strict_types=1);
namespace App\Http\Validators;

final class PaymentsAdValidator extends Validator
{
    protected function rules(): array
    {
        return [
            'id' => 'required|integer|min:1',
            'section'=> 'required|integer|min:1|max:30',
            'price' => 'required|float|min:0'
        ];
    }

    public function messages()
    {
        return [
            'id' => 'błędny identyfikator ogłoszenia<br>',
            'section'=> 'nie ma takiej sekcji ogłoszeń<br>',
            'price' => 'niepoprawna wartość / cena<br>'

        ];
    }
}
