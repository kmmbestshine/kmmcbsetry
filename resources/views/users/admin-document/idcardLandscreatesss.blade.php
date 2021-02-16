@extends('users.layouts.default')
@section('title', 'Collection')
@section('cram')
<!DOCTYPE html>
<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet"> 
<div class="id-card-wrapper">
  <div class="id-card">
    <div class="profile-row">
      <div class="dp">
        <div class="dp-arc-outer"></div>
        <div class="dp-arc-inner">
          
        </div>
        <img class="img-responsive" alt="student-image" src="{{ asset($students->avatar) }}" style="border: 3px solid orange">
        
      </div>
      
      <div class="desc">
            <img class="img-responsive" alt="student-image" src="{{ asset($schoolname->image) }}" >
            <p></p>
        <p>{{$students->student_name}}</p>
            <p style="text-align:center">{{ $students->class   }}-{{$students->section}}</p>
            <p>{{$students->address}}</p>
            <p>{{$students->mobile}}</p>
            <p></p>
            <!--<img src="{{url('images/sign.png')}}" width="50" height="30" >-->
      <p style="text-align:right">CORRESPONDENT</p>
      </div>
    </div>
  </div>
</div>


<style type="text/css">


body {
  margin:0px;
}
.id-card-wrapper {
  height: 100vh;
  width:100%;
  background-color: #091214;
  display: flex;
}
.id-card {
  flex-basis: 100%;
  max-width: 30em;
  border: 1px solid rgb(97, 245, 245);
  margin: auto;
  color: #fff;
  padding: 1em;
  background-color: #0A2129;
  box-shadow: 0px 0px 3px 1px #12a0a0, inset 0px 0px 3px 1px #12a0a0;
}

.profile-row {
  display: flex;
}
.profile-row .dp {
  flex-basis: 33.3%;
  position: relative;
  margin: 24px;
  align-self: center;


}
.profile-row .desc {
  flex-basis: 66.6%;
}

.profile-row .dp img {
  max-width: 100%;
  border-radius: 50%;
  display: block;
  box-shadow: 0px 0px 4px 3px #12a0a0;


}
.profile-row .desc {
  padding: 1em;
}

.profile-row .dp .dp-arc-inner {
  position: absolute;
  width: 100%;
  height: 100%;
  
  border-top-color: #0AE0DF;
  border-radius: 50px;
  top: -6px;
  left: -6px;


 
}
.profile-row .desc {
  font-family: 'Orbitron', sans-serif;
  color: #ecfcfb;
  text-shadow: 0px 0px 4px #12a0a0;
  letter-spacing: 1px;
}
.profile-row .desc h6 {
  margin: 0px;
}
.profile-row .desc img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 65%;
  border-radius: 50%;
  align-self: center;

}
</style>

@endsection


