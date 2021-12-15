<?php

// An example of a code that does conform to the Interface segregation principle
// Referring to https://accesto.com/blog/solid-php-solid-principles-in-php#InterfaceSegregationPrinciple

interface ExportablePdf
{
    public function getPDF();
}

interface ExportableCSV
{
    public function getCSV();
}

class Invoice implements ExportablePdf, ExportableCSV
{
    public function getPDF() {
        //
    }
    public function getCSV() {
        //
    }
}

class CreditNote implements ExportableCSV
{
    public function getCSV() {
        //
    }
}
