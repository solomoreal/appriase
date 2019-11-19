<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Detail</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
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
</head>
<body>
        <div class="container emp-profile">
        <a href="{{route('dashboard')}}" class="btn btn-primary my-3 mb-2">Back To Dashboard</a>
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                            <img src="{{$user->staffDetails ? asset($user->staffDetails->getFirstMedia('avatar')->getFullUrl()) : asset('img/no_image.jpg')}}" alt=""/>
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
                                    <p class="proile-rating">Evaluation Score : <span>{{$score}}%({{$remark}})</span></p>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                        <a href="{{route('edit_profile',['id' => $user->id])}}" class="profile-edit-btn" >Edit profile</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-work">
                                <p>WORK LINK</p>
                            <a href="">{{$user->email}}</a><br/>
                                
                                <p>SKILLS</p>
                                <a href="">Web development</a><br/>
                                <a href=""> UI/UX </a><br/>
                                
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Staff Id</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Staff0034</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$user->staffDetails ? $user->staffDetails->first_name." ". $user->staffDetails->last_name : $user->name}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                <p>{{$user->email}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Phone</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$user->staffDetails ? $user->staffDetails->phone : ""}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Department</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$user->staffDetails ? $user->staffDetails->department : ""}}</p>
                                                </div>
                                            </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Experience</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Expert</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Salary</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$user->staffDetails ? $user->staffDetails->salary : ""}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Employment Date</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$user->staffDetails ? $user->staffDetails->start_date : ""}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Recent performance Score</label>
                                                </div>
                                                <div class="col-md-6">
                                                <p>{{$score}}%</p>
                                                </div>
                                            </div>
                                            
                                            </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>About Evaluation</label><br/>
                                            <p>{{Auth::user()->name}} was evaluated by {{count($appraisals)}} Employee(s)</p> 
                                            <p></p>
                                        <h2>Overall Rating: {{$score}}%({{$remark}})</h2>
                                        <p>{{$comment}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>           
            </div>
</body>
</html>
<!------ Include the above in your HEAD tag ---------->

