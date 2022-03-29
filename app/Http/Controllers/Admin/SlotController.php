<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Interval;
use App\Models\Service;
use App\Models\Slot;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Carbon\CarbonPeriod;
use DateTime;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()


    {



        return view('admin.pages.workshop.slot.slotadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function getTimeSlot($interval, $start_time, $end_time)
{
    $start = new DateTime($start_time);
    $end = new DateTime($end_time);
    $startTime = $start->format('H:i');
    $endTime = $end->format('H:i');
    $i=0;
    $time = [];
    while(strtotime($startTime) <= strtotime($endTime)){
        $start = $startTime;
        $end = date('H:i',strtotime('+'.$interval.' minutes',strtotime($startTime)));
        $startTime = date('H:i',strtotime('+'.$interval.' minutes',strtotime($startTime)));
        $i++;
        if(strtotime($startTime) <= strtotime($endTime)){
            $time[$i]['slot_start_time'] = $start;
            $time[$i]['slot_end_time'] = $end;
        }
    }
    return $time;
}
    
    
    
     public function store(Request $request)
    {

            $start_time=$request->slot_start_time;
            $interval=$request->slot_duration;
            $end_time=$request->slot_end_time;
            $slots = self::getTimeSlot($interval,  $start_time,  $end_time);
             $slot= Slot::create([
                    'service_id'=>$request->service_id,
              ]);
           
            foreach($slots as $key=> $i){
          
                    $start_time = $i['slot_start_time'];
                    $end_time = $i['slot_end_time'];
                    $interval= new Interval();
                    $interval->slot_id=$slot->id;
                    $interval->start_time=$start_time;
                    $interval->end_time=$end_time;
                    $interval->status=1;
                    $interval->save();
                    
                }
         dd('done');
    
      
        
       
        // if($request->number_of_slot >= 1 && $request->number_of_slot <= 5 ){

        //     for ($i=0; $i < $request->number_of_slot ; $i++) {

        //       $slot= Slot::create([
        //             'service_id'=>$request->service_id,
        //       ]);
              
        
                
                
                
        //     }


        // };
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
    public function create_slot($id)
    {
    $service= Service::findOrFail($id);
    return view('admin.pages.workshop.slot.slotadd',compact('service'));
    }

}
