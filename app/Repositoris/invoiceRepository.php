<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 18/01/16
 * Time: 18:01
 */

namespace App\Repositories;


class invoiceRepository
{
    private function getAllInvoicesFromDatabase()
    {
        return Invoices::all();
    }
}