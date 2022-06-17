<?php declare(strict_types=1);

namespace PdfHandler;

use Dompdf\Dompdf;

final class PdfGenerator implements PdfGeneratorInterface
{
    /**
     * @param Dompdf
     */
    protected $dompdf;

    public function __construct(Dompdf $dompdf)
    {
        $this->dompdf = $dompdf;
    }

    public static function generatePdf(): void
    {
        $html = file_get_contents(__DIR__ . '/../templates/node.html.twig');
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream();
    }
}