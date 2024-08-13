<?php

namespace App\Services;

use App\DTO\CertificateDTO;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

/**
 * Class PdfGenerator
 *
 * @package App\Services
 */
class PdfGenerator
{
    /**
     * @param  CertificateDTO  $certificateDTO
     *
     * @return \Illuminate\Http\Response
     */
    public function getCertificate(CertificateDTO $certificateDTO)
    {
        $qrCode = base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate(env("CERTIFICATE_LINK") . $certificateDTO->number));

        $pdf = Pdf::loadView('pdf.certificate', compact(['certificateDTO', 'qrCode']));

        return $pdf->download();
    }
}
