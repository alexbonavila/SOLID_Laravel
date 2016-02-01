<?php


namespace App\Transformers;

class InvoicesTransformer extends Transformer
{
    public function transform($database_invoices)
    {
        return $database_invoices;
    }
}