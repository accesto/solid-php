<?php

// An example of a code that does not conform to the Open/closed principle
// Referring to https://accesto.com/blog/solid-php-solid-principles-in-php#OpenClosedPrinciple

class Dog
{
    public function bark(): string
    {
        return 'woof woof';
    }
}

class Duck
{
    public function quack(): string
    {
        return 'quack quack';
    }
}

class Fox
{
    public function whatDoesTheFoxSay(): string
    {
        return 'ring-ding-ding-ding-dingeringeding!, Wa-pa-pa-pa-pa-pa-pow!';
    }
}

class Communication
{
    public function communicate($animal): string
    {
        switch (true) {
            case $animal instanceof Dog:
                return $animal->bark();
            case $animal instanceof Duck:
                return $animal->quack();
            case $animal instanceof Fox:
                return $animal->whatDoesTheFoxSay();
            default:
                throw new \InvalidArgumentException('Unknown animal');
        }
    }
}
