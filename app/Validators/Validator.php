<?php
declare(strict_types=1);
namespace App\Http\Validators;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Contracts\Validation\Validator as ValidationContract;
abstract class Validator
{
    /**
     * @var ValidationFactory
     */
    protected $validationFactory;
    /**
     * @var array
     */
    protected $messages = [];
    abstract protected function rules(): array;
    public function __construct(ValidationFactory $validationFactory)
    {
        $this->validationFactory = $validationFactory;
    }
    public function create(array $data): ValidationContract
    {
        return $this->validationFactory->make($data, $this->rules(), $this->messages);
    }
}