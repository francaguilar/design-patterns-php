<?php

namespace Codenip\Behavioral\Iterator;

class SimpleIterator implements \Iterator, \Countable
{
    public function __construct(
        /** @var array <int, mixed> */
        private readonly array $elements,
        private int $position = 0
    )
    {
    }

    public function current(): mixed
    {
        return $this->elements[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->elements[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function count(): int
    {
        return count($this->elements);
    }
}