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
        
          <a href="{{route('dashboard')}}" class="btn btn-primary my-3 mb-2">Back To Dashboard</a>
            <div class="profile-img">
            <img src="{{$user->staffDetails ? asset($user->staffDetails->getFirstMedia('avatar')->getFullUrl()) : asset('img/no_image.jpg')}}" alt="" class="img-fluid"/>
                <div class="file btn btn-lg btn-primary">
                     Photo
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
                      
                            <h2>Edit Your Profile Here</h2>
                            <section class="col-md-8">
                                    <form action="{{route('post_edit_profile')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                            <div class="form-row ">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">First Name</label>
                                <input id="inputState" class="form-control" name="first_name">
                                    
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Middle Name</label>
                                <input id="inputState" class="form-control" name="middle_name">
                              </div>
                            </div>

                            <div class="form-row ">
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Last Name</label>
                                  <input id="inputState" class="form-control" name="last_name">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Department</label>
                                  <input id="inputState" class="form-control" name="department">                     </div>
                            </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                      <label for="inputEmail4">Position</label>
                                      <input id="inputState" class="form-control" name="position">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputPassword4">Office Location</label>
                                      <input id="inputState" class="form-control" name="location">                  
                                    </div>
                                </div>

                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Age</label>
                                          <input id="inputState" class="form-control" name="age" type="number">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Salary</label>
                                          <input id="inputState" class="form-control" name="salary" type="number">
                                        </div>
                                    </div>

                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Employment Date</label>
                                          <input id="inputState" class="form-control" name="start_date" type="date">
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                                <label for="inputEmail4">Photo</label>
                                                <input id="inputState" class="form-control" name="avatar" type="file">
                                              </div>
                                    </div> 
                                    <div class="form-row ">
                                            <div class="form-group col-md-6">
                                              <label for="inputEmail4">Phone Numner</label>
                                              <input id="inputState" class="form-control" name="phone" type="text">
                                            </div>
                                            
                                            
                                        </div>                 
                              <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </section>                                
            </div>
        </form>
        </div>
    </div>
  
</div>
  
  @endsection