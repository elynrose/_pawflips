<?php

namespace App\Http\Requests;

use App\Models\PhotoUpdate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePhotoUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('photo_update_create');
    }

    public function rules()
    {
        return [
            'booking_id' => [
                'required',
                'integer',
            ],
            'photo' => [
                'required',
            ],
            'comment' => [
                'string',
                'required',
            ],
            'user_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
