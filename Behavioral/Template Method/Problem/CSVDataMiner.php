<?php

namespace Eduance\Dataminer\Problem;

use Eduance\Dataminer\File;

class CSVDataMiner
{
    public function mine()
    {
        $docDocument = $this->openFile('.../files/document.csv');

        $raw = $this->extractCsvData($docDocument);
        $data = $this->parseCsvData($raw);
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

    protected function parseCsvData()
    {
        return [];
    }

    protected function analyzeData()
    {
        return [];
    }

    protected function extractCsvData(File $file)
    {
        return [];
    }
}