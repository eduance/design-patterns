<?php

interface Builder
{
    public function reset();
    public function buildStepA();
    public function buildStepB();
    public function buildStepZ();
    public function getResult();
}