<?php declare(strict_types=1);

use PdfHandler\Kernel;

require_once __DIR__ . '../vendor/autoload.php';

$kernel = new Kernel();

$name = 'random.pdf';
$kernel->generatePdf($name);