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
    public function create($id)
    {
        //$user = User::findOrFail($id);
        $user = User::findOrFail($id);
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
        $scores = [];
        foreach ($appraisals as $appraisal) {
            //dd($appraisal);
            array_unshift($scores, [$appraisal->job_knowledge,$appraisal->work_quality,$appraisal->work_consistencies,$appraisal->enthusiasm,$appraisal->cooperation,$appraisal->attitude,$appraisal->initiative,$appraisal->work_relation,$appraisal->creativity,$appraisal->attendance,$appraisal->productivity,$appraisal->dependability,$appraisal->communication_skill]);
            
        }
        if(isset($scores[0])){
         $total_score = (array_sum($scores[0]));
         $score = round($total_score/1300 * 100,0);
         $remark = "";
         $comment = "";
         if($score >= 70 ){
             $remark = 'V.Good';
             $comment = 'This rating indicates very high performance, and qualifies the employee for future promotion considerations';
         }elseif($score >= 60 && $score <= 69){
             $remark = 'Good';
             $comment = 'This rating indicates an above average performance, but not recommended for promotion';
         }elseif($score >= 50 && $score <= 59){
            $remark = 'Ok';
            $comment = 'This rating indicates an average performance, Can do better';
        }elseif($score <= 49 && $score <= 0){
            $remark = 'Poor';
            $comment = 'This rating indicates a below average performance, Not good';
        } 
    }else{
        $remark = null;
        $score = null;
        $comment = null;

    }
        
        return view('profile',compact('user','appraisals','score','remark','comment'));
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
    public function update(Request $request)
    {
        //dd($request->all());
        $detail = new EmployeeDetail();
        $detail->user_id = auth()->user()->id;
        $detail->first_name = $request->first_name;
        $detail->middle_name = $request->middle_name;
        $detail->last_name = $request->last_name;
        $detail->department = $request->department;
        $detail->position = $request->position;
        $detail->location = $request->location;
        $detail->salary = $request->salary;
        $detail->age = $request->age;
        $detail->phone = $request->phone;
        $detail->start_date = $request->start_date;

        $detail->save();
        if($request->avatar){
            $detail->addmedia($request->avatar)->toMediaCollection('avatar');
        }

        return redirect(route('profile',['id' => auth()->user()->id]));
    }

    public function appraisalList(){
        $users = User::latest()->paginate(10);
        return view('appraisal_list',compact('users'));
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
