<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use App\Models\Service;
use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::all();


        return view('admin.pages.booking.list', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->service_id);

        $booking = Booking::all();
        $currentTime = Carbon::parse($request->time);
        foreach ($booking as $item) {

            $booked_date = $item->date;
            $booked_start_time = $item->start_time;
            $booked_end_time = $item->end_time;

            $workshop_id = $item->workshop_id;

            if ($workshop_id == $request->workshop_id) {

                if ($booked_date == $request->date) {

                    if ($currentTime->between($booked_start_time, $booked_end_time, true)) {

                        return redirect()
                            ->back()
                            ->with('success', 'Booking unsuccessful,Time already reserved!');
                    }
                }
            }
        }



        $service_id = $request->service_id;
        $service = Service::where('id', $service_id)->first();
        $service_title=$service->title;
        $duration = $service->duration;
        $time = Carbon::parse($request->time);
        $timenow = $time->format('g:i A');
        $end_time = $time->addMinutes($duration)->format("g:i A");

       $new_booking= Booking::create([
            'user_id' => Auth::id(),
            'vehicle_id' => $request->vehicle_id,
            'service_id' => $request->service_id,
            'workshop_id' => $request->workshop_id,
            'date' => $request->date,
            'start_time' => $timenow,
            'end_time' => $end_time,
            'rate' => $service->charge,
            'status' => 'Pending',
        ]);


        $event_st_time=Carbon::parse( $timenow)->format('Y-m-d H:i:s');
        $event_ed_time=Carbon::parse( $end_time)->format('Y-m-d H:i:s');
        

        Event::create([
            'title' => $service_title,
            'date'=>$new_booking->date,
            'start_time' => $event_st_time,
            'end_time' => $event_ed_time,
            'booking_id'=>$new_booking->id

        ]);

        return redirect()
            ->back()
            ->with('success', 'Your Booking has been successfully Placed!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::findorFail($id);
        return view('admin.pages.booking.list', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
