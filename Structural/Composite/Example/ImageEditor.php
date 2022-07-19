<?php

class ImageEditor
{
    protected $all;

    public function load()
    {
        $this->all = new CompoundGraphic();
        $this->all->add(new Dot(1, 2));
        $this->all->add(new Circle(5, 3, 10));
    }

    public function groupSelected($components)
    {
        $group = new CompoundGraphic();

        foreach ($components as $component) {
            $group->add($component);
            $this->all->remove($component);
        }

        $this->all->add($group);
        $this->all->draw();
    }
}