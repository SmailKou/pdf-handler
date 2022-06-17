<?php

namespace PdfHandler;

interface KernelInterface
{
    public static function generatePdf(string $name, $type = null): void;
}