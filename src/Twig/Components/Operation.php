<?php

declare(strict_types=1);

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\Metadata\UrlMapping;

#[AsLiveComponent]
class Operation
{
    use DefaultActionTrait;

    #[LiveProp(writable: true, url: new UrlMapping('op', true))]
    public string $operator = '+';

    #[LiveProp(writable: true, url: new UrlMapping(mapPath: true))]
    public int $input1 = 0;

    #[LiveProp(writable: true, url: new UrlMapping(mapPath: true))]
    public int $input2 = 0;

    #[LiveProp(writable: true, url: true)]
    public int $input3 = 0;

    #[LiveProp(writable: true)]
    public int $input4 = 0;

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