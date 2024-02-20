<?php
declare(strict_types=1);
namespace App\Http\Validators;

final class CreateOrUpdatePaymentValidator extends Validator
{
    protected function rules(): array
    {
        return [
            'id' => '',
            'name' => 'required|min:10|max:255',
            'lead' => 'required|min:30|max:255',
            'description' => 'required|min:30|max:2500',
            'adsCategoriesId' => 'required|integer|min:1',
            'adsSubCategoriesId' => 'required|integer|min:1',
            'dateStart' => 'required|date|date_format:Y-m-d|after:yesterday',
            'dateEnd' => 'required|integer|min:1|digits_between: 1,30',
            'price' => 'required|numeric',
            'invoice' => 'required|in:Nie wystawiam faktury,Faktura VAT,Faktura Vat-marża,Faktura bez VAT',
            'adsClassifiedEnum' => 'required|in:sprzedam,kupię,oddam,zamienie'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'pole <b>nazwa</b> jest wymagane!<br>',
            'name.min' => 'pole <b>nazwa</b> musi zawierać wiecej niż 10 znaków (i mniej niż 255!)<br>',
            'name.max' => 'pole <b>nazwa</b> musi zawierać mniej niż 255 znaków (i więcej niż 10!)<br>',
            'lead.required' => 'pole <b>lid</b> jest wymagane!<br>',
            'lead.min' => 'pole <b>lid</b> musi zawierać wiecej niż 30 znaków (i mniej niż 255!)<br>',
            'lead.max' => 'pole <b>lid</b> musi zawierać mniej niż 255 znaków (i więcej niż 30!)<br>',
            'description.required' => 'pole <b>opis</b> jest wymagane!<br>',
            'description.min' => 'pole <b>opis</b> musi zawierać wiecej niż 30 znaków (i mniej niż 2500!)<br>',
            'description.max' => 'pole <b>opis</b> musi zawierać mniej niż 2500 znaków (i więcej niż 30!)<br>',
            'dateStart.required' => 'Pole <b>data start</b> jest niepoprawne<br>',
            'dateStart.date_format' => 'niepoprawny format <b>data start</b>',
            'dateStart.after' => 'Pole  <b>data startowa</b> ogłoszenia nie może być z datą wsteczną!',
            'dateEnd.required' => 'Pole <b>data end</b> musi być późniejsza niż data start',
            'adsSubCategoriesId:required' => 'nie wybrałeś podkategorii',
            'adsSubCategoriesId:min:1' => 'nie wybrałeś podkategorii',
            'invoice:required' => 'pole z rodzajem rachunku jest wymagane',
            'price:required' => 'pole <b>cena</b> jest wymagane',
            'price:max' => 'Chyba troche przesadziłeś z <b>ceną</b> ',
            'invoice:in' => 'niepoprawna wartość w polu rodzaj rachunku'
        ];
    }
}