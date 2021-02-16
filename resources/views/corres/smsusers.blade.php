@extends('admin.layouts.default')
@section('title', 'Sms Username')
@section('content')
    <style type="text/css">

        .page-container .page-content{
            margin-left: 0px !important;
        }

        .widget.widget-item-icon .widget-data {
            padding-left: 162px;
        }
        .widget.widget-item-icon .widget-item-left {
            border-right: 1px solid rgba(0, 0, 0, 0.1);
            margin-right: 16px;
            padding-right: 13px;
        }
        .widget.widget-item-icon .widget-item-left, .widget.widget-item-icon .widget-item-right {
            width: 100px;
            padding: 5px 0px;
            padding-right: 0px;
            text-align: center;
        }
        .profile{
            background: #f7a62b !important;
            padding: 0px !important;
        }
    </style>
    <div class="page-content">
        <div class="container">
            <div class="page-toolbar">
                <div class="page-toolbar-block">
                    <div class="page-toolbar-title">Sms User</div>

                </div>
            </div>
            @if(Input::old('success'))
                <center><p class="alert alert-success pull-right">{{ Input::old('success') }}</p></center>
            @endif
            @if(Input::old('error'))
                <center><p class="alert alert-danger pull-right">{{ Input::old('error') }}</p></center>
            @endif
            @if(Input::old('exist'))
                <center><p class="alert alert-danger pull-right">{{ Input::old('exist') }}</p></center>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-content"><h2><strong>Sms Users</strong> School</h2></div>
                        <div class="block-content controls">
                            <form action="{{route('smsuseradd')}}" method="post" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                <div class="row-form">
                                    <div class="col-md-12">

                                        <div class="col-md-9">
                                            <label><strong>School Name:</strong></label>
                                            <select class="form-control" name="school_id" required>
                                                <option value="">Select Options</option>
                                                @if(isset($schools))
                                                    @foreach($schools as $smsuser)
                                                        <option value="{{$smsuser->id}}">{{$smsuser->school_name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row-form">
                                    <div class="col-md-12">

                                        <div class="col-md-2">
                                            <label><strong>School Username:</strong></label>
                                            <input type="text" class="form-control" placeholder="Username" name="username" required />

                                        </div>
                                        <div class="col-md-2">
                                            <label><strong>School Password:</strong></label>
                                            <input type="text" class="form-control" placeholder="Password" name="password" required />

                                        </div>
                                        <div class="col-md-2">
                                            <label><strong>Sms Type</strong></label>
                                            <select class="form-control" placeholder="Sms Type" name="type">
                                                <option value="2">unicode</option>
                                                <option value="0">text</option>
                                            </select>

                                        </div>
                                        <div class="col-md-3">
                                            <label><strong>Sms Source Name</strong></label>
                                            <input type="text" class="form-control" placeholder="Source" name="smssource" required />

                                        </div>
                                        <div class="col-md-3">
                                            <label><strong>.</strong></label>
                                            <input type="submit" class="btn btn-warning form-control">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    @if(isset($smsusers))
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>SchoolName</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>MobileUser</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @php $i=0; @endphp
                            @foreach($smsusers as $smsuser)

                                <tr>

                                    <td scope="row">@php  $i=$i+1; echo $i; @endphp</td>
                                    <td>{{$smsuser->school_name}}</td>
                                    <td>{{$smsuser->username}}</td>
                                    <td>{{$smsuser->password}}</td>
                                    <td>{{$smsuser->mobileuser}}/{{$smsuser->totalstudent}}<br>
                                        <a href="{{route('exportmobileuser',$smsuser->school_id)}}">Export</a>
                                    </td>
                                    <td><a  onclick="editmodal({{$smsuser->id}})">Edit</a>/<a href="{{route('deletesmsuser', $smsuser->id)}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                                </tr>


                                <tr id="{{$smsuser->id}}" style="display:none">

                                    <form action="{{route('editsmsuser')}}" method="post">
                                        {{csrf_field()}}

                                        <input type="hidden" value="{{$smsuser->id}}" name="userid">


                                        <td><label>Username</label><input type="text" class="form-control" name="username" value="{{$smsuser->username}}"></td>
                                        <td><label>Password</label><input type="text" class="form-control" name="password" value="{{$smsuser->password}}">
                                        </td>
                                        <td><label>Source</label>  <input type="text" class="form-control" name="smssource" value="{{$smsuser->smssource}}"></td>
                                        <td><label>.</label><input type="submit" class="btn btn-primary form-control"></td>
                                    </form>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->


    <script>
        function editmodal(id)
        {
            //alert(id);
            $("#"+id).show();

        }

    </script>
@endsection