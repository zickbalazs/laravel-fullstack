<?php

namespace App\Http\Controllers;

use App\Models\TrainingDay;
use Illuminate\Http\Request;

class TrainingDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', ["data"=>TrainingDay::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $day = new TrainingDay;
        $day->day = $request->day;
        $day->description = $request->description;
        $day->from = $request->from;
        $day->to = $request->to;
        $day->done = $request->has('done');
        $day["created_at"] = time();
        $day->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrainingDay  $trainingDay
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        return view('mod', ["data"=>TrainingDay::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrainingDay  $trainingDay
     * @return \Illuminate\Http\Response
     */
    public function update(string $id, Request $request)
    {
        $day = TrainingDay::find($id);
        $day->day = $request->day;
        $day->description = $request->description;
        $day->from = $request->from;
        $day->to = $request->to;
        $day->done = $request->has('done');
        $day["updated_at"] = time();
        $day->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrainingDay  $trainingDay
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        TrainingDay::destroy($id);
        return redirect('/');
    }
    public function delete(string $id){
        return view('delete', ["data"=>TrainingDay::find($id)]);
    }
}
