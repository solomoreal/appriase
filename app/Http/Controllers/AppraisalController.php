<?php

namespace App\Http\Controllers;

use App\Appraisal;
use App\User;
use Illuminate\Http\Request;
use App\EmployeeDetail;

class AppraisalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        //$user = User::findOrFail($id);
        $user = new User();
        return view('appraise',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        Appraisal::create([
            'reviewer_id' => auth()->user()->id,
            'reviewee_id' => $request->reviewee_id,
            'job_knowledge' => $request->job_knowledge,
            'work_quality' => $request->work_quality,
            'work_consistencies' => $request->work_consistencies,
            'enthusiasm' => $request->enthusiasm,
            'cooperation' => $request->cooperation,
            'attitude' => $request->attitude,
            'initiative' => $request->initiative,
            'work_relation' => $request->work_relation,
            'creativity' => $request->creativity,
            'attendance' => $request->attendance,
            'productivity' => $request->productivity,
            'dependability'=> $request->dependability,
            'communication_skill' => $request->communication_skill,
            'reviewer_comment' => $request->reviewer_comment,
            ]);

            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appraisal  $appraisal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $appraisals = $user->appraisals;
        return view('profile',compact('user','appraisals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appraisal  $appraisal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edit_profile',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appraisal  $appraisal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appraisal $appraisal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appraisal  $appraisal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appraisal $appraisal)
    {
        //
    }
}
