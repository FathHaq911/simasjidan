<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\Date;
use Illuminate\Http\Request;

class CashController extends Controller
{
    public function index()
    {
        // get nama hari
        $hari = Date::getHari();
        // $bulan = Date::getBulan();

        //get Uang Cash
        $cash = Cash::all();
        
        $t_debit = 0;
        $t_kredit = 0;

        foreach($cash as $item){
            $t_debit    +=  $item->debit;
            $t_kredit   +=  $item->kredit;
        }
        
        $t_kas = $t_debit - $t_kredit;


        //render view 
        return view('pages.cash.cash', compact('cash', 'hari', 't_debit', 't_kredit', 't_kas'));
    }
    
    public function create()
    {
        // return view('pages.cash.add-cash');
    }

    public function store(Request $request)
    {
        
        // Validasi Debit Kredit String ke Integer

        $debit = 0;
        if (strlen($request->debit) > 8) {
            $debit = (int)$request->debit * 1000000;
        } elseif (strlen($request->debit) > 4) {
            $debit = (int)$request->debit * 1000;
        } 

        $kredit = 0;
        if (strlen($request->kredit) > 8) {
            $kredit = (int)$request->kredit * 1000000;
        } elseif (strlen($request->kredit) > 4) {
            $kredit = (int)$request->kredit * 1000;
        } 


        // create cash
        Cash::create([
            'name'    => $request->name,
            'debit'   => $debit,
            'kredit'  => $kredit,
            'note'    => $request->note,
        ]);

        //redirect to index
        return redirect()->route('cash.index');
    }

    public function show(Cash $cash)
    {
        //
    }

    public function edit(Cash $cash)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Cash $cash)
    {
        $this->validate($request, [
            'name'      => 'required|min:5',
            'debit'     => 'required|min:3',
            'kredit'    => 'required|min:3',
            'note'      => 'required|min:5',
        ]);

        //update Cash
        $cash->update([
            'name'     => $request->name,
            'debit'    => $request->debit,
            'kredit'    => $request->kredit,
            'note'    => $request->note,
        ]);

        //redirect to index
        // return redirect()->route('pages.cash.cash');

    }

    public function destroy(Cash $cash)
    {
        $cash->delete();

        return redirect()->route('/cash');
    }

}
