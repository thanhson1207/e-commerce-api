<?php

namespace App\Http\Requests\Order;

use App\Http\Requests\CustomFormRequest;

class GetCartRequest extends CustomFormRequest
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
            'limit' => 'required|integer|min:1|max:20',
        ];
    }
}
