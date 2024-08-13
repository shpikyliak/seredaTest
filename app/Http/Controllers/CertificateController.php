<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenerateRequest;
use App\Services\PdfGenerator;

/**
 * Class CertificateController
 *
 * @package App\Http\Controllers
 */
class CertificateController extends Controller
{
    /**
     * @param  GenerateRequest  $request
     * @param  PdfGenerator  $pdfGenerator
     *
     * @return \Illuminate\Http\Response
     */
    public function generate(GenerateRequest $request, PdfGenerator $pdfGenerator)
    {
        return $pdfGenerator->getCertificate($request->getCertificateDTO());
    }
}
