<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Http\Requests\StoreOfficeRequest;
use App\Http\Requests\UpdateOfficeRequest;

class OfficeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('Office.index', [
            // 'Offices' => Office::all()  // moze i ovako, dohvaca sve urede
            'Offices' => Office::orderBy('officeCode', 'asc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('Office.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOfficeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOfficeRequest $request) {
        /*
          "officeCode" => "1"
          "city" => "San Francisco"
          "phone" => "+1 650 219 4782"
          "addressLine1" => "100 Market Street"
          "addressLine2" => "Suite 300"
          "state" => "CA"
          "country" => "USA"
          "postalCode" => "94080"
          "territory" => "NA"
          "created_at" => "2022-02-23 17:11:57"
          "updated_at" => "2022-02-23 17:11:57"
         */

//TODO pogledaj kako dobiti greske pomocu messagebag
        $validatedData = $request->validateWithBag('post', [
            //    $validatedData = $request->validate([            
            'city' => ['required', 'max:50'],
            'phone' => ['required', 'max:50'],
            'addressLine1' => ['required', 'max:50'],
            'country' => ['required', 'max:50'],
            'postalCode' => ['required', 'max:15'],
            'territory' => ['required', 'max:10'],
        ]);
        $office = new Office();
        $office->officeCode = $request->officeCode;
        $office->city = $request->city;
        $office->phone = $request->phone;
        $office->addressLine1 = $request->addressLine1;
        $office->addressLine2 = $request->addressLine2;
        $office->state = $request->state;
        $office->country = $request->country;
        $office->postalCode = $request->postalCode;
        $office->territory = $request->territory;

        $office->save(); // sprmanje objekat u bazu podataka

        return redirect()->route('Office.index')
                        ->with('success', 'Office has been created successfully.');
        //dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    //  public function show(Office $office) //nije proslo vjerojatno jer pimrarni ključ nije int i/ili nije imena id
    public function show($id) {
        return view('Office.show', [
            'office' => Office::findOrFail($id)
                //  'office' =>$office  //nije proslo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    //      public function edit(Office $office) { 
    public function edit($id) {

        $office = Office::findOrFail($id);
        return view('Office.edit', compact('office'));
        /*
          return view('Office.edit', [
          'office' => Office::findOrFail($id)
          //  'office' =>$office  //nije proslo
          ]); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOfficeRequest  $request
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateOfficeRequest $request, Office $office) { //vjerojatno $id ???
    public function update(UpdateOfficeRequest $request, $id) {
        $validatedData = $request->validate([
            'city' => ['required', 'max:50'],
            'phone' => ['required', 'max:50'],
            'addressLine1' => ['required', 'max:50'],
            'country' => ['required', 'max:50'],
            'postalCode' => ['required', 'max:15'],
            'territory' => ['required', 'max:10'],
        ]);

        // dohvati postojeći objekt
        $office = Office::findOrFail($id);

        $office->officeCode = $request->officeCode;
        $office->city = $request->city;
        $office->phone = $request->phone;
        $office->addressLine1 = $request->addressLine1;
        $office->addressLine2 = $request->addressLine2;
        $office->state = $request->state;
        $office->country = $request->country;
        $office->postalCode = $request->postalCode;
        $office->territory = $request->territory;

        $office->save(); // spremanje objekat u bazu podataka

        return redirect()->route('Office.index')
                        ->with('success', 'Office has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    //public function destroy(Office $office) {
    public function destroy($id) {
        $office = Office::findOrFail($id);
        $office->delete();
        return redirect()->route('Office.index')
                        ->with('success', 'Office has been deleted successfully');
    }

}
