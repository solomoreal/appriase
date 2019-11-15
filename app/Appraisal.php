<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appraisal extends Model
{
    protected $fillable = ['reviewer_id','reviewee_id','job_knowledge','work_quality','work_consistencies','enthusiasm','cooperation','attitude','initiative','work_relation',
    'creativity','attendance','productivity','dependability','communication_skill','reviewer_comment'];
}
