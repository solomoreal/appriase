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
            <img src="{{asset('img/man_in_suit.jpg')}}" alt="" class="img-fluid"/>
                <div class="file btn btn-lg btn-primary">
                    Staff Photo
                    <input type="file" name="file"/>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="profile-head">
                        <h4>
                            Sophia Phone
                        </h4>
                        <h5>
                            Engineer 2
                        </h5> 
                        <form>
                            <h2>performance Evaluation Form</h2>
                            <section class="col-md-8">
                                
                            <div class="form-row ">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">job_knowledge</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Excellent</option>
                                    <option>Good</option>
                                    <option>Poor</option>
                                    <option>Can't Tell</option>
                                  </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">attitude</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                  </select>
                              </div>
                            </div>

                            <div class="form-row ">
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">creativity</label>
                                  <select id="inputState" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">dependability</label>
                                  <select id="inputState" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>...</option>
                                    </select>
                                </div>
                            </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                      <label for="inputEmail4">communication_skill</label>
                                      <select id="inputState" class="form-control">
                                          <option selected>Choose...</option>
                                          <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputPassword4">dependability</label>
                                      <select id="inputState" class="form-control">
                                          <option selected>Choose...</option>
                                          <option>...</option>
                                        </select>
                                       </div>
                                </div>

                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">productivity</label>
                                          <select id="inputState" class="form-control">
                                              <option selected>Choose...</option>
                                              <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">work_relation</label>
                                          <select id="inputState" class="form-control">
                                              <option selected>Choose...</option>
                                              <option>...</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">attendance</label>
                                          <select id="inputState" class="form-control">
                                              <option selected>Choose...</option>
                                              <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">cooperation</label>
                                          <select id="inputState" class="form-control">
                                              <option selected>Choose...</option>
                                              <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">consistency</label>
                                          <select id="inputState" class="form-control">
                                              <option selected>Choose...</option>
                                              <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">enthusiasm</label>
                                          <select id="inputState" class="form-control">
                                              <option selected>Choose...</option>
                                              <option>...</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row col-md-6">
                                          <label for="inputEmail4">work_quality</label>
                                          <select id="inputState" class="form-control">
                                              <option selected>Choose...</option>
                                              <option>...</option>
                                            </select>      
                                    </div>
                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                    <label for="">reviewer_comment</label>
                                    <textarea name="" id="" cols="40" rows="5"></textarea>
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