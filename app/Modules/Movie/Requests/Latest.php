<?php

namespace App\Modules\Movie\Requests;

class Latest extends AbstractRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            // add your validation rules here
            //
            //'title' => 'required|max:255',
            //'body' => 'required',
        ];
    }


}
