<?php

class Director
{
    /**
     * Given type.
     *
     * @var string
     */
    protected string $type;

    public function __construct(protected Builder $builder)
    {
    }

    /**
     * Change the builder.
     *
     * @param $builder
     * @return void
     */
    public function changeBuilder($builder)
    {
        $this->builder = $builder;
    }

    /**
     * For given type, make the builder.
     *
     * @param string $type
     * @return void
     */
    public function make(string $type)
    {
        $this->builder->reset();
        $this->builder->buildStepB();

        if(! $type === 'simple') {
            $this->builder->buildStepZ();
        }
    }
}