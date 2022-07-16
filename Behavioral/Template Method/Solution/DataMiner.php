<?php

namespace Eduance\Dataminer\Solution;

abstract class DataMiner
{
    /**
     * The file instance.
     *
     * @var File $file
     */
    protected $file;

    /**
     * The raw data.
     *
     * @var string $rawData
     */
    protected $rawData;

    /**
     * The data the file holds.
     *
     * @var array $data
     */
    protected $data;

    /**
     * The in-depth analysis.
     *
     * @var array $analysis
     */
    protected $analysis;

    /**
     * We got two steps: abstract steps which must be implemented by every subclass.
     * Optional steps which already have some default implementation, but can still be overridden if needed.
     * A hook is also an option: a step with an empty body, hooks are placed before and after crucial steps of algorithms,
     * providing subclasses with additional extension points for an algorithm.
     *
     * @param $path
     * @return void
     */
    public function mine($path)
    {
        $this->file = $this->openFile($path);

        $this->rawData = $this->extractData($this->file);

        $this->data = $this->parseData();

        $this->analysis = $this->analyzeData();

        $this->sendReport($this->analysis);

        $this->closeFile($this->file);
    }

    /**
     * Open the file by using the real path.
     *
     * @param $path
     * @return File
     */
    public function openFile($path)
    {
        return new File();
    }

    /**
     * Close the file.
     *
     * @return void
     */
    public function closeFile(File $file)
    {
        // Close file
    }

    /**
     * Extract the data.
     *
     * @param File $file
     * @return mixed
     */
    public function extractData(File $file)
    {
        return $file->contents;
    }

    /**
     * Parse the content.
     *
     * @return mixed
     */
    abstract public function parseData();

    /**
     * Analyze the data.
     *
     * @return mixed
     */
    abstract public function analyzeData();

    /**
     * Send an in-depth report.
     *
     * @param $analysis
     * @return mixed
     */
    abstract public function sendReport($analysis);
}