<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Log;
use App\Models\InvoiceRow;
use App\Models\Material;




class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
        $invoices_temp = array() ;
            foreach ($invoices as $invoice => $val){
                $rows_temp = array() ;
                if($val['invoice_rows'] != '0'){
                    $val['invoice_rows'] = trim($val['invoice_rows'], '[');
                    $val['invoice_rows'] = trim($val['invoice_rows'],']');
                    $val['invoice_rows'] = explode(',',$val['invoice_rows']);
                    Log::warning($val['invoice_rows']);
                    foreach($val['invoice_rows'] as $rowNum){                  
                        $row = InvoiceRow::find($rowNum);
                        $material = Material::find($row['material_id']);
                        $row_temp = [
                            'material' => $material['name'],
                            'price' => $material['price'],
                            'amount' => $row['amount']
                        ];
                        array_push($rows_temp, $row_temp);
                        }
                    
                    $invoice_temp = $val;
                    Log::warning(gettype($invoice_temp));

                    $invoice_temp->rows = $rows_temp;
                    // $invoice['invoice_rows'] = $rows_temp;
                    array_push($invoices_temp, $invoice_temp);
                }     
            }
        return response()->json($invoices_temp);
    }

    public function create()
    {
        //
    }
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
            Log::warning($total);
           

        }
        $invoice->total = $total;
        Log::warning($invoice_rows_temp);
        $invoice->invoice_rows = $invoice_rows_temp;
        Log::warning('HELP');
        Log::info($invoice);
        $invoice->save();
        
        return response()->json($total);
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
        $found = Invoice::find($id);
        Log::info($invoice);
        return response()->json($found);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        $found = Invoice::find($id);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {   Log::warning('test');
        Log::info($invoice);
        Log::error($request);
        $invoice->transport = $request['transport'];
        $invoice->delivery = $request['delivery'];
        $invoice->save();

        // $invoice_edit = Invoice::find($request->input('id'));
        // $invoice_edit->status_id = $request->input('id');
        // $invoice_edit->save();

        return response()->json($invoice);

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
