<?php
declare(strict_types=1);
namespace app\Http\Validators;

final class CreateAdsPhotoValidator extends Validator
{
    protected function rules(): array
    {
        return [
            'file.*' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
        ];
    }

    public function messages()
    {
        return [
            'file.*.mimes' => 'Niepoprawny format pliku, dopuszczamy tylko pliki jpeg, jpg<br>',
            'file.*.required' => 'wrzuć jakiś plik ze zdjęciem!<br>',
            'file.*.max' => 'Przekroczony maksymalny rozmiar pliku<br>'
        ];
    }
}
