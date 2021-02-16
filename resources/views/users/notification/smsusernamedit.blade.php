@extends('users.layouts.default')
@section('title', 'Send Sms')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Send Sms</li>
</ul>
@endsection
@section('contant')
    @if(Input::old('success'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> {{ Input::old('success') }}
                    </div>
                </div>
            </div>
        @endif
        @if(Input::old('error'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Oh Snap!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif
    <div class="page-content-wrap">
        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Sms User Name</strong></h3>
                            <h3 style="float:right">
                                <a href="{{route('user.smssend')}}" style="color:inherit"><span class="xn-text">Send Sms</span></a>
                                
                            </h3>
                            
                        </div>
        <div class="row">
            <div class="col-md-12">
                 @if(isset($smsusers))
               <table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>SchoolName</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
@php $i=0; @endphp        
        
        <tr>

            <td scope="row">1.</td>
            <td>{{$smsusers->school_name}}</td>
            <td>{{$smsusers->username}}</td>
            <td>{{$smsusers->password}}</td>
            <td><a  onclick="editmodal({{$smsusers->id}})">Edit</a></td>
        </tr>
        <tr id="{{$smsusers->id}}" style="display:none">
            <form action="{{route('editsmsusername')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" value="{{$smsusers->id}}" name="userid">
                
            <td><label>Username</label><input type="text" class="form-control" name="username" value="{{$smsusers->username}}" readonly></td>
            <td><label>Password</label><input type="text" class="form-control" name="password" value="{{$smsusers->password}}"></td>
            <td><label>.</label><input type="submit" class="btn btn-success form-control" style="background-color: red !important"></td>
            </form>
        </tr>

        
    </tbody>
</table>
@endif
            </div>
        </div>
    </div>
  <script>
    function editmodal(id)
    {
        //alert(id);
        $("#"+id).show();

    }

</script>

@endsection