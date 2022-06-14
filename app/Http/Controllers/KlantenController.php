<?php

namespace App\Http\Controllers;

use App\Models\Klanten;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class KlantenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('createCustomer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Redirector|RedirectResponse
     * @throws ValidationException
     */
    public function create(Request $request): Application|RedirectResponse|Redirector
    {

      $this->validate(request(), [
        'klant_voornaam' => 'required',
        'klant_achternaam' => 'required',
        'klant_mobiel' => 'required',
        'klant_straatnaam' => 'required',
        'klant_huisnummer' => 'required',
        'klant_postcode' => 'required',
        'klant_woonplaats' => 'required',
        'klant_email' => 'required'
        ]);

//        dd($request);
        $klant = new Klanten();
        $klant->klant_voornaam = request('klant_voornaam');
        $klant->klant_tussenvoegsel = request('klant_tussenvoegsel');
        $klant->klant_achternaam = request('klant_achternaam');
        $klant->klant_mobiel = request('klant_mobiel');
        $klant->klant_straatnaam = request('klant_straatnaam');
        $klant->klant_huisnummer = request('klant_huisnummer');
        $klant->klant_postcode = request('klant_postcode');
        $klant->klant_woonplaats = request('klant_woonplaats');
        $klant->klant_email = request('klant_email');
//        $klant->user_id = auth()->user()->id;
        $klant->save();

//        return $request->input();

        return redirect('/customer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request): Redirector|RedirectResponse|Application
    {
        $klant = new Klanten();

        $klant->klant_voornaam = $request->klant_voornaam;
        $klant->klant_tussenvoegsel = $request->klant_tussenvoegsel;
        $klant->klant_achternaam = $request->klant_achternaam;
        $klant->klant_mobiel = $request->klant_mobiel;
        $klant->klant_straatnaam = $request->klant_straatnaam;
        $klant->klant_huisnummer = $request->klant_huisnummer;
        $klant->klant_postcode = $request->klant_postcode;
        $klant->klant_woonplaats = $request->klant_woonplaats;
        $klant->klant_email = $request->klant_email;

        $klant->save();
        return redirect()->with('success', 'Klant is toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Klanten  $klanten
     * @return Response
     */
    public function show(Klanten $klanten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klanten  $klanten
     * @return Response
     */
    public function edit(Klanten $klanten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\Klanten  $klanten
     * @return Response
     */
    public function update(Request $request, Klanten $klanten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klanten  $klanten
     * @return Response
     */
    public function destroy(Klanten $klanten)
    {
        //
    }
}
