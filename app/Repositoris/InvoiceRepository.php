<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 18/01/16
 * Time: 18:01
 */

namespace App\Repositories;
use App\Invoices;

/**
 * Class InvoiceRepository
 * @package App\Repositories
 */
class InvoiceRepository extends Repository
{
    /**
     * @return mixed
     */
    function model()
    {
        return Invoices::class;
    }
}