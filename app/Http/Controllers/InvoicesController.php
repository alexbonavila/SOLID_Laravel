<?php

namespace App\Http\Controllers;

use App\Invoices;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class InvoicesController extends Controller
{

    protected $repo;

    /**
     * InvoicesController constructor.
     * @param $repo
     */
    public function __construct($repo)
    {
        $this->repo = $repo;
    }


    //
    public function index()
    {
        if(!Auth::check()){
            return "Forbidden";
        }

        $invoiceRepo = new invoiceRepository();

        $database_invoices =$this->getAllInvoicesFromDatabase();

        $invoices = $this->transform($database_invoices);

        return view('invoices',compact('invoices'));
    }



    private function transform($database_invoices)
    {
        return $database_invoices;
    }
}
