<?php

namespace App\Rules;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;

class MatchPassword implements Rule
{
    public $guard;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($guard='web')
    {
        $this->guard = $guard;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $guard=$this->guard;
        return Hash::check($value, authUser($guard)->password);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The current password  does not correct.';
    }
}
