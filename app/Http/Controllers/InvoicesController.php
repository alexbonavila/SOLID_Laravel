<?php

namespace App\Http\Controllers;

use App\Repositories\InvoiceRepository;

use App\Http\Requests;
use App\Repositories\RepositoryInterface;
use App\Transformers\InvoicesTransformer;

class InvoicesController extends Controller
{
    /**
     * @var InvoiceRepository
     */
    protected $repo;

    /**
     * InvoicesController constructor.
     * @param $repo
     */
    public function __construct(RepositoryInterface $repo, InvoicesTransformer $invoicesTransform)
    {
        $this->invoicesTransform = $invoicesTransform;
        $this->repo = $repo;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $invoices = $this->invoicesTransform->transform($this->repo->all());

        return view('invoices',compact('invoices'));
    }
}
