<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Enums\Invoice;
use App\Enums\Classifed;
use App\Enums\Condition;
use Carbon\Carbon;

class SmallAdsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'small_ads_classified_enum' => ['required',Rule::in(Classifed::cases())],
          // 'small_ads_classified_enum' => ['required', Rule::in(array_map(fn($case) => $case->value, Classifed::cases()))],
            'id' => ['required','integer'],
            'small_ads_categories_id' => ['required','integer'],
            'small_ads_sub_categories_id' => ['required','integer'], // Tutaj dodano wartość dla max
            'date_start' => ['required','date'], // Zakładam, że to powinno być walidowane jako data
            'date_end' => ['required','integer'], // Tutaj sugeruję poprawkę, aby 'date_end' było datą i nie wcześniejsze niż 'date_start'
            'name' => ['required','min:5','max:255'],
            'lead' => ['required','min:5','max:255'],
            'description' => ['required','max:255'],
            'price' => ['required','numeric'], // Zakładam, że cena powinna być numerem
            'items' => ['required','numeric'], // Jeśli 'items' to liczba przedmiotów, to walidacja jako 'numeric'
           'invoice' => ['required', Rule::in(Invoice::cases())],
            'condition' => [ 'string', 'min:4', 'max:35'],
            'contact_phone' => ['required','max:255'],
            'contact_email' => ['required','email'],
        ];
    }
    protected function getValidatorInstance()
    {

        $this->getInputSource()->replace($this->sanitize($this->all()));

        $validator = parent::getValidatorInstance();

        $validator->after(function ($validator) {
            if (!$validator->errors()->isEmpty()) {
                return;
            }

            // Przykład dodatkowej logiki walidacyjnej
            // Uwaga: Upewnij się, że wszystkie używane tutaj pola są odpowiednimi tablicami lub wartościami
            $date_start = Carbon::createFromFormat('Y-m-d H:i', $this->date_start);
            $date_end = $date_start->copy()->addDays($this->date_end);

            if ($date_end->lessThan($date_start)) {
                $validator->errors()->add('date_end', 'Data zakończenia nie może być wcześniejsza niż data rozpoczęcia.');
            }

            $this->merge([
                'id' => (int) $this->id,
                'small_ads_categories_id' => (int) $this->small_ads_categories_id,
                'small_ads_sub_categories_id' => (int) $this->small_ads_sub_categories_id,
                'date_start' => $date_start->format('Y-m-d H:i'),
                'date_end' => $date_end->format('Y-m-d H:i'),
                'items' => (int) $this->items,
            ]);

});
/*
        $validator->after(function ($validator) {
            if (!$validator->errors()->isEmpty()) {
                return;
            }
            
            //dd($this->date_start);
            $date_start = Carbon::createFromFormat('Y-m-d H:i', $this->date_start);
            $date_end = $date_start->copy()->addDays($this->date_end);

            $this->merge([
                'id' => (int) $this->id,
                'small_ads_categories_id' => (int) $this->small_ads_categories_id,
                'small_ads_sub_categories_id' => (int) $this->small_ads_sub_categories_id,
                'date_start' => $date_start->format('Y-m-d H:i'),
                'date_end' => $date_end->format('Y-m-d H:i'),
                'items' => (int) $this->items,
            ]);
       
        });
 */
        return $validator;
    }

     /**
     * Sanitize input data.
     *
     * @param array $inputs
     * @return array
     */
    protected function sanitize(array $inputs)
    {
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
            'small_ads_classified_enum.in' => 'Wybrana klasyfikacja ogłoszenia jest nieprawidłowa.',
            'small_ads_categories_id.required' => 'Musisz wybrać kategorię ogłoszenia.',
            'small_ads_sub_categories_id.required' => 'Musisz wybrać podkategorię ogłoszenia.',
            // Dodaj więcej niestandardowych komunikatów dla innych reguł...
            'invoice.required' => 'Musisz wybrać typ faktury.',
            'invoice.in' => 'Wybrany typ faktury jest nieprawidłowy.',
            'contact_email.required' => 'Adres email jest wymagany.',
            'contact_email.email' => 'Podaj prawidłowy adres email.',

        ];
    }
}
