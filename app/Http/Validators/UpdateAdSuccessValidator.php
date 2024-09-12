<?php
declare(strict_types=1);
namespace App\Http\Validators;

final class UpdateAdSuccessValidator extends Validator
{
    protected function rules(): array
    {
        return [

            'id' => 'required|integer|min:1',
            'payment_id'=> 'required|integer|min:1',
            'section'=> 'required|in:ads,cars,estates,jobs,services,lost'

        ];
    }

    public function messages()
    {
        return [
            'id' => 'pole wymagane<br>',
        ];
    }
}
