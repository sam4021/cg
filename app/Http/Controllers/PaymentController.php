<?php

namespace App\Http\Controllers;

use App\Model\ClientPayment;
use App\Model\VendorPayment;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //'id' => Uuid::uuid4(),
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ClientPayment  $clientPayment
     * @return \Illuminate\Http\Response
     */
    public function show(ClientPayment $clientPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ClientPayment  $clientPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientPayment $clientPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ClientPayment  $clientPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientPayment $clientPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ClientPayment  $clientPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientPayment $clientPayment)
    {
        //
    }
}
