<?php
declare(strict_types=1);
namespace App\Http\Validators;

final class UpdateAdPromotionValidator extends Validator
{
    protected function rules(): array
    {
        return [
            'id.*' => 'required|integer|min:1',
            'dateEnd'=> 'required|integer|min:1|max:30',
            'recomended' => 'in:none,Promocja!,Bestseller,Wyprzedaż',
            'highlighted' => 'required|in:#ffffff,#c8cdff,#ffc8dd,#c8ffdf,#eac8ff,#fff7c8'            
        ];
    }

    public function messages()
    {
        return [
            'id.*' => 'pole wymagane<br>',
            'dateEnd'=> 'niepoprawna wartosc<br>',
            'recomended' => 'błędna wartość<br>',
            'highlighted' => 'błędna wartość<br>'
        ];
    }
}