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
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{'sendsmsclass'}}" enctype="">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Send Sms</strong></h3>
                            <h3 style="float:right">
                                <a href="{{route('user.smsusernamedit')}}" style="color:inherit">
                                <span class="xn-text">View SmsUser</span></a> 
                            </h3>
                            
                        </div>
                        <div class="panel-body" ng-app="smsapp">
                            <div class="row" ng-controller="sendsms">
                                <div class="col-md-12">
                                    <h4>Sms Send Type</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group" >
                                        <div class="col-md-3">
                                        </div>
                                        <div class="form-check  col-md-3" >
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" 
                                            name="smstype" 
                                             ng-click="selectsmstype(0)" id="" value="Allsms" checked>
                                            All Class
                                          </label>
                                        </div>

                                        <div class="form-check col-md-3">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" 
                                            name="smstype" 
                                            ng-click="selectsmstype(1)" id="" value="classwise" >
                                             Select Class 
                                          </label>
                                        </div>
                                       

                                    </div>


                                    
                                </div>
                                <div class="col-md-12 " ng-if="types==1" style="margin-top:10px; margin-left: 178px">
                                    
                                   <div class="col-md-6" style="height: 300px;overflow:scroll;"> 
                                    @if(isset($array))
                                        @foreach($array as $key => $class)
                                                     <div class="form-check col-md-12" >

                                                        <table class="table">
                                                            <tr>
                                                                <td > <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="classname[]" id="" 
                                                        value="{{$key}}">
                                                        {{$key}}
                                                      </label></td>
                                                         @foreach($class as $section)
                                                           <td style="width:10px"> <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="section[{{$key}}][]" id="" 
                                                        value="{{$section->sectionid}}" checked>
                                                        {{$section->section}}
                                                      </label></td>
                                                      
                                                      @endforeach
                                                            <tr>
                                                        </table>
             

                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                               
                                    
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group " >
                                        <textarea style="border-radius:1px;height:100px;" class="form-control" name="description" placeholder="Description" required></textarea>
                                    </div>
                                    </div>
                                 </div>
                              <div class="form-group col-md-12">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                       <input name="" id=""  style="float:right;" class="btn btn-Success" type="submit" value="Send Sms">
                                    </div>
                                    </div>
                                 </div>
                            </div>
                            <br/>
                            
                               <!--  <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-info btn-lg">Send Sms</button>
                                </div> -->
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
            var smsapp= angular.module('smsapp',[]);
            smsapp.controller('sendsms',function($scope,$http){
                //console.log('hi');
                $scope.types=0;
                $scope.selectsmstype=function(type)
                {
                    $scope.types=type;

                } 

            });
    </script>

@endsection