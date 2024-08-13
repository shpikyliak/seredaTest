<?php

namespace App\Http\Requests;

use App\DTO\CertificateDTO;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class GenerateRequest
 *
 * @package App\Http\Requests
 */
class GenerateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "number" => "required|numeric",
            "title" => "required",
            "student_name" => "required",
            "finish_date" => "required|date|",
        ];
    }

    /**
     * @return CertificateDTO
     */
    public function getCertificateDTO()
    {
        return new CertificateDTO(
            $this->number,
            $this->title,
            $this->student_name,
            $this->finish_date
        );
    }
}
