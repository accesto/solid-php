<?php

// An example of a code that does not conform to the Interface segregation principle
// Referring to https://accesto.com/blog/solid-php-solid-principles-in-php#InterfaceSegregationPrinciple

interface Exportable
{
    public function getPDF();
    public function getCSV();
}

class Invoice implements Exportable
{
    public function getPDF() {
        // ...
    }
    public function getCSV() {
        // ...
    }
}

class CreditNote implements Exportable
{
    public function getPDF() {
        throw new \NotUsedFeatureException();
    }
    public function getCSV() {
        // ...
    }
}
