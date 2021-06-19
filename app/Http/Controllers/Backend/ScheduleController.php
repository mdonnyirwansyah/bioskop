<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ScheduleRequest;
use App\Models\Movie;
use App\Models\Schedule;
use App\Models\Theater;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.schedule.index', ['schedules' => Schedule::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.schedule.create', ['theaters' => Theater::all(), 'movies' => Movie::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScheduleRequest $request)
    {
        try {
            Schedule::create(request()->all());

            return redirect('admin/schedules')->with('success', 'Added data schedule has been successfully');
        } catch (\Throwable $th) {
            return redirect('admin/schedules')->with('error', $th);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        return view('backend.schedule.edit', ['schedule' => $schedule, 'movies' => Movie::all(), 'theaters' => Theater::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        try {
            $schedule->update(request()->all());

            return redirect('admin/schedules')->with('success', 'Updated data schedule has been successfully');
        } catch (\Throwable $th) {
            return redirect('admin/schedules')->with('error', $th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        try {
            $schedule->delete();

            return back()->with('success', 'Deleted data sch$schedule has been successfully');
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }
}
