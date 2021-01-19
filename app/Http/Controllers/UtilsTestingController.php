<?php

namespace App\Http\Controllers;

use App\Models\UtilsTesting;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Ramsey\Uuid\Uuid;

class UtilsTestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        return Uuid::uuid6()->getInteger();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UtilsTesting  $utilsTesting
     * @return Response
     */
    public function show(UtilsTesting $utilsTesting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UtilsTesting  $utilsTesting
     * @return Response
     */
    public function edit(UtilsTesting $utilsTesting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UtilsTesting  $utilsTesting
     * @return Response
     */
    public function update(Request $request, UtilsTesting $utilsTesting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UtilsTesting  $utilsTesting
     * @return Response
     */
    public function destroy(UtilsTesting $utilsTesting)
    {
        //
    }
}
