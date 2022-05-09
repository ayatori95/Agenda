<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required|min:3',
            'start' =>  'date_format:Y-m-d H:i:s|before:end',
            'end' =>  'date_format:Y-m-d H:i:s|after:start'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Preencha o campo Titulo',
            'title.min'=> 'Titulo necessita de pelo menos 03 caracteres!',
            'start.date_format' => 'Preencha uma data com valor valido!',
            'start.before' => 'A data/Hora inicial deve ser menor que a final.',
            'end.date_format' => 'Preencha uma data com valor valido!',
            'end.after' => 'A data/Hora final deve ser maior que a inicial.',
        ];
    }
}
