<?php

namespace Utils\Collections;

use IteratorAggregate;

class Collections implements \IteratorAggregate {
    private $items = [];
    
    function __constructor(array $items = [])
    {
        $this->items = $items;
    }

    public function getIterator() {
        return new \ArrayIterator($this->items);
    }
}