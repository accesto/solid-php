<?php

// An example of a code that does conform to the Open/closed principle
// Referring to https://accesto.com/blog/solid-php-solid-principles-in-php#OpenClosedPrinciple

interface Comunicatable
{
    public function speak(): string;
}

class Dog implements Comunicatable
{
    public function speak(): string
    {
        return 'woof woof';
    }
}

class Duck implements Comunicatable
{
    public function speak(): string
    {
        return 'quack quack';
    }
}

class Fox implements Comunicatable
{
    public function speak(): string
    {
        return 'ring-ding-ding-ding-dingeringeding!, Wa-pa-pa-pa-pa-pa-pow!';
    }
}

class Communication
{
    public function communicate(Comunicatable $animal): string
    {
        return $animal->speak();
    }
}
