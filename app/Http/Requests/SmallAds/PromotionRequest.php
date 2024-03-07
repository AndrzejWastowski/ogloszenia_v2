<?php

namespace App\Http\Requests\SmallAds;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Validator;
use App\Models\User;
use App\Enums\Invoice;
use App\Enums\Classifed;
use App\Enums\Condition;
use App\Enums\Inscription;
use App\Enums\Highlighted;
use Carbon\Carbon;

class PromotionRequest extends FormRequest
{
    private $modifiedData = [];
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'promoted' => filter_var($this->promoted, FILTER_VALIDATE_BOOLEAN),
        ]);
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => ['required','integer'],
            'date_start' => ['required','date'], // Tutaj sugeruję poprawkę, aby 'date_end' było datą i nie wcześniejsze niż 'date_start'
            'date_end' => ['required','integer'], 
            'highlighted' => ['required',Rule::in(Highlighted::cases())],
            'inscription' => ['required', Rule::in(Inscription::cases())],
            //'inscription' => ['required', Rule::in(array_map(fn($case) => $case->value, Inscription::cases()))],
            //'inscription' => ['required', Rule::in('none','promocja','wyprzedaz','przecena','bestseller')],

            'promoted' => ['sometimes','boolean'],
        ];
    }
    //
     /**
     * Sanitize input data.
     *
     * @param array $inputs
     * @return array
     */
    protected function sanitize(array $inputs)
    {
       // dd('sanitize'.$inputs);
        // Tutaj definiujesz, jak chcesz przetworzyć dane.
        // Na przykład, trimuj wszystkie stringi.
        foreach ($inputs as $key => $value) {
            if (is_string($value)) {
                $inputs[$key] = trim($value);
            }
        }

        return $inputs;
    }

    public function messages()
    {
        return [
            'small_ads_classified_enum.required' => 'Wybór klasyfikacji ogłoszenia jest wymagany.',
            'date_start.in' => 'Wybrana klasyfikacja ogłoszenia jest nieprawidłowa.',
            'small_ads_categories_id.required' => 'Musisz wybrać kategorię ogłoszenia.',
            'small_ads_sub_categories_id.required' => 'Musisz wybrać podkategorię ogłoszenia.',
            // Dodaj więcej niestandardowych komunikatów dla innych reguł...
            'invoice.required' => 'Musisz wybrać typ faktury.',
            'invoice.in' => 'Wybrany typ faktury jest nieprawidłowy.',
            'contact_email.required' => 'Adres email jest wymagany.',
            'contact_email.email' => 'Podaj prawidłowy adres email.',
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     */
     public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $data = $validator->getData();
            //{{ dd($data); }}
            $date_start = Carbon::createFromFormat('Y-m-d H:i:s', $data['date_start']);
            $date_end = $date_start->copy()->addDays($data['date_end']);
            $date_end = $date_end->format('Y-m-d H:i:s');
            $data['id'] = (int) $data['id'];           
         //   $data['items'] = (int) $data['items'];
            



            // Dodaj datę końcową do danych walidacji
            $validator->setData(array_merge($data, ['date_end' => $date_end]));


        });
    }
}
