<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Log;
use App\Models\InvoiceRow;



class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json("Hello");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceRequest $request)
    {
        $materials = $request->input('materials');
        info($materials);
        $invoice = Invoice::create([
            'client_id' => 1,
            'delivery_address' => '1234 calle ave ',
            'total'=>'0',
            'status_id'=> 1
            
        ]);

        // Log::info($invoice->id);
        $total = '0';
        $invoice_rows_temp = array();
        foreach ($materials as $row => $val ){
            // Log::warning($row);
            // Log::error($val);
            $material = Material::find($val['material_id']);
            $invoice_row = InvoiceRow::create([
                'invoice_id' => $invoice->id,
                'amount' => $val['amount'],
                'material_id' => $val['material_id']
            ]);
            array_push($invoice_rows_temp, $invoice_row->id);
            $price = (float)$val['amount'] * (float)$material->price;
            $total = $total + $price;
           

        }
        $invoice->invoice_rows = $invoice_rows_temp;
        $invoice->save();
        
        return response()->json($materials);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
       // dd($id);
    //    $invoice = Invoice::find($id);
        Log::info($invoice);
        return response()->json($invoice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        $invoice_edit = Invoice::find($request->input('id'));
        $invoice_edit->status_id = $request->input('id');
        $invoice_edit->save();

        return response()->json($invoice_edit);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
