<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SharedRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'social' => ['required'],
            'id' => ['required', 'exists:quotes,id'],
            'value' => $this->validation(),
        ];
    }

    private function validation()
    {
        return match ($this->input('social')) {
            'telegram' => $this->telegramRules(),
            'viber' => $this->viberRules(),
            'email' => $this->emailRules(),
        };
    }

    private function telegramRules()
    {
        return ['required', 'string'];
    }

    private function viberRules()
    {
        return ['required', 'string', 'min:10', 'max:13']; // min 0631234567 max +380631234567
    }

    private function emailRules()
    {
        return ['required', 'email'];
    }
}
