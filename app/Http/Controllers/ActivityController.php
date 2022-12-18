<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\CulturalRight;
use App\Models\Expertise;
use App\Models\Nac;
use Illuminate\Http\Request;

/**
 * Class ActivityController
 * @package App\Http\Controllers
 */
class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
   
     */
    public function index()
    {
 

     $activities= Activity::join('cultural_rights','cultural_rights.id','=','activity.cultural_rights')
                  ->join('expertises','activity.expertises','=','expertises.id')
                   ->join('nacs','nacs.id','=','activity.nac_id')
   ->get(['activity.*','nacs.nacs','expertises.expertises','cultural_rights.cultural_rights' ]);

        //dd($activities);
        return view('activity.index', compact('activities'));
            
    }

    
    public function create()
    {
        $activity = new Activity();
        $CulturalRight=CulturalRight::all();
        $Nac = Nac::all();
        $Expertises = Expertise::all();
       
        return view('activity.create', compact('activity','CulturalRight','Nac','Expertises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $activity = Activity::create($request->all());

        return redirect()->route('activities.index')
            ->with('success', 'Activity created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::find($id);

        return view('activity.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     
     */
    public function edit($id)
    {
        $activity = Activity::find($id);
       $CulturalRight=CulturalRight::all();
        $Nac = Nac::all();
        $Expertises = Expertise::all();
        return view('activity.edit', compact('activity','CulturalRight','Nac','Expertises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $resSave=[];
     $resSave['activity_name']=$request->activity_name;
     $resSave['start_time']=$request->start_time;
    $resSave['final_hour']=$request->final_hour;
    $resSave['activity_date']=$request->activity_date;
     $resSave['cultural_rights']=$request->cultural_rights;
    $resSave['nac_id']=$request->nac_id;
    $resSave['expertises']=$request->expertises;


   
      
         $resSave=Activity::where('id', $id)->update($resSave);

        return redirect()->route('activities.index')
            ->with('success', 'Activity updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $activity = Activity::find($id)->delete();

        return redirect()->route('activities.index')
            ->with('success', 'Activity deleted successfully');
    }
}
