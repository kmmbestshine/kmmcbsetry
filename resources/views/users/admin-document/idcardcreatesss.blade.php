@extends('users.layouts.default')
@section('title', 'Collection')
@section('cram')
<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="card">
      <div class="logo1">
            <img class="img-responsive" alt="student-image" src="{{ asset($schoolname->image) }}" >
            <img class="img-responsive" alt="student-image" src="{{ asset($students->avatar) }}" style="border: 3px solid orange">
         </div>
     <!-- <div class="logo">
        <img class="img-responsive" alt="student-image" src="{{ asset($students->avatar) }}" >
      </div>-->
      <h3><p>{{ $students->student_name}}</p></h3>
      <h6 style="text-align:center">{{ $students->class   }}-{{$students->section}}</h6>
      
      <p><strong>
            Parent &nbsp;&nbsp;  : {{$students->name}}</br>
            Address  : {{$students->address}}</br>
            DOB  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    : {{$students->dob}}</br>
             Cell  No &nbsp;: {{$students->mobile}}</br></strong>
      </p>
      <div class="social">
         <img src="{{url('images/sign.png')}}" width="50" height="30" >
      <p>CORRESPONDENT</p>
      </div>
    </div>
  </body>
</html>
<style type="text/css">
 .card {
  border: 1px solid black;
  background-color: white;
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
}
.card {
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 100px;
  margin-left: 100px;
  
}
.card {
  width: 250px;
  height: 450px;
  padding: 50px;
  
}
.card {
  border-right: 10px solid orange;
  border-bottom: 10px solid blue;
  border-left: 10px solid yellow;
  border-top: 10px solid green;
}

.logo {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
   border: 3px solid orange;
}
.logo1 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 45%;
  border-radius: 43px;

}
.social {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 5%;
  border-radius: 5px;
}


</style>
@endsection


