<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateStudentRequest
 *
 * @package App\Http\Requests
 */
class CreateStudentRequest extends FormRequest
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
            'firstname'    => 'required|min:3|max:20',
            'lastname'     => 'required|min:3|max:20',
            'image'        => 'required|min:3|max:20',
            'height'       => 'required|integer',
            'classroom_id' => 'required|exists:classrooms,id',
        ];
    }
}
