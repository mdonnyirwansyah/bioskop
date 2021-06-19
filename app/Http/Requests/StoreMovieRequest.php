<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
            'title' => 'required|max:255',
            'starring' => 'required|max:255',
            'director' => 'required|max:255',
            'censor_rating_id' => 'required',
            'genre_id' => 'required',
            'synopsis' => 'required',
            'language' => 'required|max:255',
            'duration' => 'required|max:255',
            'banner' => 'required|image|max:2048',
            'since' => 'required',
            'trailer_link' => 'url',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'title',
            'starring' => 'starring',
            'director' => 'director',
            'censor_rating_id' => 'consor rating',
            'genre_id' => 'genre',
            'synopsis' => 'synopsis',
            'language' => 'language',
            'duration' => 'duration',
            'banner' => 'banner',
            'since' => 'since',
            'trailer_link' => 'trailer link',
        ];
    }
}
