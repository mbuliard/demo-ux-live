<?php

declare(strict_types=1);

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
class Operation
{
    use DefaultActionTrait;

    #[LiveProp(writable: true, url: true)]
    public string $operator = '+';

    #[LiveProp(writable: true, url: true)]
    public int $input1 = 0;

    #[LiveProp(writable: true, url: true)]
    public int $input2 = 0;

    public function result(): int
    {
        switch ($this->operator) {
            case '+':
                return $this->input1 + $this->input2;
            case '-':
                return $this->input1 - $this->input2;
            case '*':
                return $this->input1 * $this->input2;
            default:
                throw new \LogicException('Invalid operation');
        }
    }

}