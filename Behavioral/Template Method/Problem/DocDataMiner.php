<?php

namespace Eduance\Dataminer\Problem;

use Eduance\Dataminer\File;

class DocDataMiner
{
    public function mine()
    {
        $docDocument = $this->openFile('.../files/document.doc');

        $raw = $this->extractDocData($docDocument);
        $data = $this->parseDocData($raw);
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

    protected function parseDocData()
    {
        return [];
    }

    protected function analyzeData()
    {
        return [];
    }

    protected function extractDocData(File $file)
    {
        return [];
    }
}