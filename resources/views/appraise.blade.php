@extends('layouts.app')

@section('page-style')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<style>
    body{
background: -webkit-linear-gradient(left, #fff, #fff);
}
.emp-profile{
padding: 3%;
margin-top: 3%;
margin-bottom: 3%;
border-radius: 0.5rem;
background: #fff;
}
.profile-img{
text-align: center;
}
.profile-img img{
width: 70%;
height: 100%;
}
.profile-img .file {
position: relative;
overflow: hidden;
margin-top: -20%;
width: 70%;
border: none;
border-radius: 0;
font-size: 15px;
background: #212529b8;
}
.profile-img .file input {
position: absolute;
opacity: 0;
right: 0;
top: 0;
}
.profile-head h5{
color: #333;
}
.profile-head h6{
color: #0062cc;
}
.profile-edit-btn{
border: none;
border-radius: 1.5rem;
width: 70%;
padding: 2%;
font-weight: 600;
color: #6c757d;
cursor: pointer;
}
.proile-rating{
font-size: 12px;
color: #818182;
margin-top: 5%;
}
.proile-rating span{
color: #495057;
font-size: 15px;
font-weight: 600;
}
.profile-head .nav-tabs{
margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
font-weight:600;
border: none;
}
.profile-head .nav-tabs .nav-link.active{
border: none;
border-bottom:2px solid #0062cc;
}
.profile-work{
padding: 14%;
margin-top: -15%;
}
.profile-work p{
font-size: 12px;
color: #818182;
font-weight: 600;
margin-top: 10%;
}
.profile-work a{
text-decoration: none;
color: #495057;
font-weight: 600;
font-size: 14px;
}
.profile-work ul{
list-style: none;
}
.profile-tab label{
font-weight: 600;
}
.profile-tab p{
font-weight: 600;
color: #0062cc;
}
</style>
@endsection
@section('content')

<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-img">
            <img src="{{$user->staffDetails ? asset($user->staffDetails->getFirstMedia('avatar')->getFullUrl()) : asset('img/no_image.jpg')}}" alt="" class="img-fluid"/>
                <div class="file btn btn-lg btn-primary">
                    Staff Photo
                    <input type="file" name="file"/>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="profile-head">
                        <h4>
                            {{$user->staffDetails ? $user->staffDetails->first_name." ". $user->staffDetails->last_name : $user->name}}
                        </h4>
                        <h5>
                            {{$user->staffDetails ? $user->staffDetails->position : ""}}
                        </h5> 
                      <form action="{{route('post_appraise')}}" method="POST">
                          @csrf
                            <h2>performance Evaluation Form</h2>
                            <section class="col-md-8">
                            
                            <div class="form-row ">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Job knowledge</label>
                                <select id="inputState" class="form-control" name="job_knowledge">
                                    <option selected disabled>Choose...</option>
                                            <option value="100">Excellent</option>
                                            <option value="60">Good</option>
                                            <option value="10">Poor</option>
                                            <option value="50">Can't Tell</option>
                                  </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Attitude</label>
                                <select id="inputState" class="form-control" name="attitude">
                                    <option selected disabled>Choose...</option>
                                            <option value="100">Excellent</option>
                                            <option value="60">Good</option>
                                            <option value="10">Poor</option>
                                            <option value="50">Can't Tell</option>
                                  </select>
                              </div>
                            </div>

                            <div class="form-row ">
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Creativity</label>
                                  <select id="inputState" class="form-control" name="creativity">
                                      <option selected disabled>Choose...</option>
                                      <option value="100">Excellent</option>
                                      <option value="60">Good</option>
                                      <option value="10">Poor</option>
                                      <option value="50">Can't Tell</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">dependability</label>
                                  <select id="inputState" class="form-control" name="dependability">
                                      <option selected disabled>Choose...</option>
                                      <option value="100">Excellent</option>
                                      <option value="60">Good</option>
                                      <option value="10">Poor</option>
                                      <option value="50">Can't Tell</option>                                   </select>
                                </div>
                            </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                      <label for="inputEmail4">Communication Skill</label>
                                      <select id="inputState" class="form-control" name="communication_skill">
                                          <option selected disabled>Choose...</option>
                                          <option value="100">Excellent</option>
                                          <option value="60">Good</option>
                                          <option value="10">Poor</option>
                                          <option value="50">Can't Tell</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputPassword4">Dependability</label>
                                      <select id="inputState" class="form-control" name="dependability">
                                          <option selected disabled>Choose...</option>
                                          <option value="100">Excellent</option>
                                          <option value="60">Good</option>
                                          <option value="10">Poor</option>
                                          <option value="50">Can't Tell</option>                                        </select>
                                       </div>
                                </div>

                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Productivity</label>
                                          <select id="inputState" class="form-control" name="productivity">
                                              <option selected disabled>Choose...</option>
                                              <option value="100">Excellent</option>
                                              <option value="60">Good</option>
                                              <option value="10">Poor</option>
                                              <option value="50">Can't Tell</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Work Relation</label>
                                          <select id="inputState" class="form-control" name="work_relation">
                                              <option selected disabled>Choose...</option>
                                              <option value="100">Excellent</option>
                                              <option value="60">Good</option>
                                              <option value="10">Poor</option>
                                              <option value="50">Can't Tell</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Attendance</label>
                                          <select id="inputState" class="form-control" name="attendance">
                                              <option selected disabled>Choose...</option>
                                              <option value="100">Excellent</option>
                                              <option value="60">Good</option>
                                              <option value="10">Poor</option>
                                              <option value="50">Can't Tell</option>
                                            </select>
                                        </div>
                                      <input type="hidden" name="reviewee_id" value="{{$user->id}}">
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Co-operation</label>
                                          <select id="inputState" class="form-control" name="cooperation">
                                              <option selected disabled>Choose...</option>
                                              <option value="100">Excellent</option>
                                              <option value="60">Good</option>
                                              <option value="10">Poor</option>
                                              <option value="50">Can't Tell</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">consistency</label>
                                          <select id="inputState" class="form-control" name="work_consistencies">
                                              <option selected disabled>Choose...</option>
                                              <option value="100">Excellent</option>
                                              <option value="60">Good</option>
                                              <option value="10">Poor</option>
                                              <option value="50">Can't Tell</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Enthusiasm</label>
                                          <select name="enthusiasm" id="inputState" class="form-control">
                                            <option selected disabled>Choose...</option>
                                            <option value="100">Excellent</option>
                                            <option value="60">Good</option>
                                            <option value="10">Poor</option>
                                            <option value="50">Can't Tell</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6" >
                                          <label for="inputEmail4">Work Quality</label>
                                          <select id="inputState" name="work_quality" class="form-control">
                                              <option selected disabled>Choose...</option>
                                              <option value="100">Excellent</option>
                                              <option value="60">Good</option>
                                              <option value="10">Poor</option>
                                              <option value="50">Can't Tell</option>
                                            </select> 

                                    </div>

                                    <div class="form-group col-md-6" >

                                      <label for="inputEmail4">Initiative</label>
                                      <select id="inputState" class="form-control" name="initiative">
                                          <option selected disabled>Choose...</option>
                                          <option value="100">Excellent</option>
                                          <option value="60">Good</option>
                                          <option value="10">Poor</option>
                                          <option value="50">Can't Tell</option>
                                        </select>                                              
                                </div>
                              </div>
                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                    <label for="">Comment</label>
                                    <textarea name="reviewer_comment" id="" cols="40" rows="5"></textarea>
                                        </div>
                                    </div>
                            
                              <button type="submit" class="btn btn-primary btn-block">Submit Evaluation</button>
                            
                        </section>
                          </form>
                
            </div>
        </div>
    </div>
  
</div>
  
  @endsection