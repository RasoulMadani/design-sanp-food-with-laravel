<?php

namespace App\Http\Requests\Api\Comments;

use Illuminate\Foundation\Http\FormRequest;

class GetCommentsRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'ghaza_id' => 'required_without:restaurant_id|prohibited_unless:restaurant_id,null',
            'restaurant_id' => 'required_without:ghaza_id|prohibited_unless:ghaza_id,null'
        ];
    }
}
