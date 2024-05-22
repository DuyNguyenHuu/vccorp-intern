<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }
    public function passes($attribute, $value){
        return strtoupper($value)===$value;
    }
    public function message(){
        return 'The :attribute must be uppercase.';
    }
}