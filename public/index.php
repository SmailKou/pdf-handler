<?php declare(strict_types=1);

use Dompdf\Dompdf;
use PdfHandler\PdfGenerator;

require_once __DIR__ . '/../vendor/autoload.php';

$dompdf = new Dompdf();
$pdfGenerator = new PdfGenerator($dompdf);

$pdfGenerator->generatePdf();