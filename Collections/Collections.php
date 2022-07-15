<?php

namespace Utils\Collections;

use IteratorAggregate;

class Collections implements IteratorAggregate {
    function __constructor(public array $items = [])
    {
        
    }
}