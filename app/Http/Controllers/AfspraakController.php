<?php

namespace App\Http\Controllers;

use App\Models\Afspraak;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class AfspraakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {

        $afspraken = DB::table('afspraaks')->get();
        $usedDates = [];
        foreach($afspraken as $afspraak){
            $tijdExplode = explode(':', $afspraak->tijd_afspraak);
            $tijdHour = ltrim($tijdExplode[0], '0').':'.$tijdExplode[1];
            $usedDates[$afspraak->datum_afspraak][] = $tijdHour;
        }

        return view('afspraak')->with('usedDates', json_encode($usedDates));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function create()
    {
        this->validate(request(), [
            'klant_voornaam' => 'required',
            'klant_achternaam' => 'required',
            'klant_mobiel' => 'required',
            'klant_straatnaam' => 'required',
            'klant_huisnummer' => 'required',
            'klant_postcode' => 'required',
            'klant_woonplaats' => 'required',
            'klant_email' => 'required|unique:klantens',
        ]);

        $afspraak = new Afspraak();


        $afspraak->save();

        return redirect('/afspraak');
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
     * @param  \App\Models\Afspraak  $afspraak
     * @return \Illuminate\Http\Response
     */
    public function show(Afspraak $afspraak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Afspraak  $afspraak
     * @return \Illuminate\Http\Response
     */
    public function edit(Afspraak $afspraak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Afspraak  $afspraak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Afspraak $afspraak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Afspraak  $afspraak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afspraak $afspraak)
    {
        //
    }

    public function afspraak(Request $request)
    {
        $afspraak = new Afspraak();
        $afspraak->afspraak_datum = $request->afspraak_datum;
        $afspraak->afspraak_tijd = $request->afspraak_tijd;
        $afspraak->afspraak_omschrijving = $request->afspraak_omschrijving;
        $afspraak->afspraak_klant_id = $request->afspraak_klant_id;
        $afspraak->save();
        return redirect()->with('success', 'Afspraak is toegevoegd');
    }

    public function paymentView(): Factory|View|Application
    {
        $query = DB::table('afspraaks')->get();

        return view('payment')->with('afspraaks', $query);
    }

    public function getPayment(): Collection
    {

//        DB::select('SELECT * FROM afspraak');
//        return $query;
    }
}
