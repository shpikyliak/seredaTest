<?php

namespace App\DTO;

/**
 * Class CertificateDTO
 *
 * @package App\DTO
 */
class CertificateDTO
{
    /**
     * @var
     */
    public $number;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $student_name;
    /**
     * @var
     */
    public $finish_date;

    /**
     * CertificateDTO constructor.
     *
     * @param $number
     * @param $title
     * @param $student_name
     * @param $finish_date
     */
    public function __construct($number, $title, $student_name, $finish_date)
    {
        $this->number = $number;
        $this->title = $title;
        $this->student_name = $student_name;
        $this->finish_date = $finish_date;}
}
