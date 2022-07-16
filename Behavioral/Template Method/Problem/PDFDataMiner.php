<?php

namespace Eduance\Dataminer\Problem;

use Eduance\Dataminer\File;

class PDFDataMiner
{
    public function mine()
    {
        $docDocument = $this->openFile('.../files/document.csv');

        $raw = $this->extractPdfData($docDocument);
        $data = $this->parsePdfData($raw);
        $analysis = $this->analyzeData($data);

        $this->closeFile($docDocument);
    }

    protected function openFile($path)
    {
        return new File($path);
    }

    protected function closeFile(File $file)
    {
        // closeFile
    }

    protected function parsePdfData()
    {
        return [];
    }

    protected function analyzeData()
    {
        return [];
    }

    protected function extractPdfData(File $file)
    {
        return [];
    }
}