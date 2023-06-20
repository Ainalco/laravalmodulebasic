<?php

namespace Modules\Customers\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('customers::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('customers::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        
        $lastid= Customer::orderBy('customer_id', 'DESC')->first();
        if(empty($lastid)){
		$sl = "cus-0001";
		$mob="1"; 
		}
		else{
		$sl = $lastid->cuntomer_no; 
		$mob=$lastid->customer_id; 
		}
		$supno=explode('-',$sl);
		$nextno=$supno[1]+1;
		$si_length = strlen((int)$nextno); 
		
		$str = '0000';
		$cutstr = substr($str, $si_length); 
		$sino = $supno[0]."-".$cutstr.$nextno;
        
        $data = request()->validate([
            'cuntomer_no' => '',
            'customer_name' => '',
            'customer_email' => '',
            'customer_phone' => '',
            'password' => '',
            'customer_address' => '',
 
        ]);
        $data['cuntomer_no']=$sino;
        $data['password'] = Hash::make($request->password);
         $custoer=Customer::create($data);
         return response()->json([
            'done' => 1,
            'customerinfo' => $custoer,
        ]);
         return 1;
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('customers::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('customers::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
