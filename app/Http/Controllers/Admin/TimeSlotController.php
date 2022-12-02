<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Block;
use App\Models\SlotDay;
use App\Models\TimeSlot;
use Ramsey\Uuid\Type\Time;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Doctrine\CarbonDoctrineType;

class TimeSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function slotDays()
    {
        $days = SlotDay::all();
        return view('admin.slot-days.index', compact('days'));
    }
    public function slots($day)
    {
        $slots = TimeSlot::where('slot_day_id', $day)->get();
        return view('admin.time-slots.index', compact('slots'));
    }

    public function change($day)
    {
        $slot = SlotDay::find($day);
        if ($slot->active == 1) {
            $slot->update(['active' => 0]);
        } else {
            $slot->update(['active' => 1]);
        }
        return back();
    }

    public function changetime($day)
    {
        $time = TimeSlot::find($day);
        if ($time->active == 1) {
            $time->update(['active' => 0]);
        } else {
            $time->update(['active' => 1]);
        }
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = SlotDay::where('active', 1)->get();
        return view('admin.time-slots.create', compact('days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'day_id' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
        $start_time = $request->start_time;
        $end_time = $request->end_time;

        foreach ($start_time as $key => $start_time) {
            $slot = TimeSlot::create([
                'slot_day_id' => $request->day_id,
                'start_time' => $request->start_time[$key],
                'end_time' => $request->end_time[$key],
            ]);
        }

        return redirect()->route('admin.slot_days.index', $request->day_id)->with('success','Success! A new time slot added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeSlot $time_slot)
    {
        $days = SlotDay::where('active', 1)->get();
        return view('admin.time-slots.edit', compact('time_slot', 'days'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeSlot $time_slot)
    {
        $time_slot->update([
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);
        if($request->filled('day_id')){
            $time_slot->slot_day_id = $request->day_id;
            $time_slot->save();
        }

        return redirect()->route('admin.slot_days.index', $time_slot->slot_day_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeSlot $time_slot)
    {
        $time_slot->delete();

        return redirect()->route('admin.slot_management');
    }

    public function blockList(Request $request)
    {
        $blocks = Block::all();
        return view('admin.time-slots.block', compact('blocks'));
    }

    public function blockListAdd(Request $request)
    {

        Block::insert(['date' => $request->date]);
        return back();
        // Carbon::create($request->date)->format('d M Y');
    }

    public function blockListDelete($date)
    {
        Block::where('date', $date)->delete();
        return back();
    }


    public function getTimeSlot(Request $request)
    {
        $block = Block::all();
        foreach ($block as $date)

            if (Carbon::create($request->date)->format('d M Y') == Carbon::create($date->date)->format('d M Y'))
                return response()->json(['slots' => '']);
        $day = Carbon::create($request->date)->format('l');
        $date = Carbon::create($request->date)->toDateString();
        $slots = TimeSlot::whereHas('day', function ($query) use ($day) {
            $query->where(['name' => $day, 'active' => '1']);
        })->whereDoesntHave('bookings', function ($query) use ($date) {
            $query->where(['date'=> $date
            // , 'active'=>1
            ]);
        })->where('active', 1)->get();
        return response()->json(['slots' => $slots]);
    }
}
