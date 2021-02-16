@extends('users.layouts.default')
@section('title', 'Bus Stop Wise Fee')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Bus Stop Wise Fee </li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Bus Stop Wise Fee</h2>
        </div>
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
                        <strong>Well done!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="post" action="{{ route('post.busfee.details') }}">
                     {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>View Students</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Bus</label>
                                        <div class="col-md-9">
                                            <select class="form-control busrouteclass" name="bus" >
                                                <option value="">Select Bus</option>
                                                @foreach($getbus as $bus)
                                                    <option value="{{ $bus->id }}">{{ $bus->bus_no }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Route</label>
                                        <div class="col-md-9 bussroutesection">
                                            <select class='form-control homebussroutesection' name='routes' >
                                                <option value=''>Select Route</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                        <div class="panel-heading"> 
                            <div class="form-group fieldGroup">
                                <div class="input-group">
                                    <div class="row">
                                        <label class="col-md-1 control-label"></label>
                                        <div class="col-md-3">
                                            <input type="text" name="boardpoint[]" class="form-control" placeholder="Boarding Point" required/>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="amt[]" class="form-control" placeholder="Enter Amount" required/>
                                        </div>
                                            <div class="input-group-addon"> 
                                                <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true" ></span> Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-2">
                            <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT"/>
                            </div>
                            <div class="col-md-2">
                                        <a href="{{route('get.students.buspayments123')}}" class="btn btn-info btn-lg">Back</a>
                                    </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>

        <br/>
        <div class="row">
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-body">
                    <table  class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Bus No</th>
                                        <th>Route</th>
                                        <th>Boarding</th>
                                        <th>Boarding Delete</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(!empty($boardings))
                                   <?php $j=1;  ?>
                                        @foreach($boardings as $board)
                                        <tr>
                                    <tr>
                                    <td>{{ $j++ }}</td>
                                    <td>{{$board['bus_no']}}</td>
                                    <td>{{$board['route']}}</td>
                                      <td>{{$board['boarding']}}</td>
                                    <th>
                                         <form  method="get" action="{{ route('fee.sion.boardstop.delete') }}"  > 
                                            <input type="hidden" name="boardId" value="{{$board['boardingid']}}"/>
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                        </form>
                                    </th>
                                </tr>
                                @endforeach
                                   @endif
                                </tbody>
                            </table>
                     </div>
                </div>
            </div>
        </div>
        <!--copy of input fields group -->
 <div class="form-group fieldGroupCopy" style="display: none;">
            <div class="input-group">
                <div class="row">
                    <label class="col-md-1 control-label"></label>
                    <div class="col-md-3">
                        <input type="text" name="boardpoint[]" class="form-control" placeholder="Boarding Point" required/>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="amt[]" class="form-control" placeholder="Enter Amount" required/>
                    </div>
                    
                        <div class="input-group-addon"> 
                             <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                        </div>
                        
                    </div>
                </div>
            </div>    
    
                <!-- Bootstrap css library -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!-- Bootstrap js library -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script >
            $(document).ready(function(){
                //group add limit
                var maxGroup = 15;
                
                //add more fields group
                $(".addMore").click(function(){
                    if($('body').find('.fieldGroup').length < maxGroup){
                        var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
                        $('body').find('.fieldGroup:last').after(fieldHTML);
                    }else{
                        alert('Maximum '+maxGroup+' groups are allowed.');
                    }
                });
                
                //remove fields group
                $("body").on("click",".remove",function(){ 
                    $(this).parents(".fieldGroup").remove();
                });
            });
            </script>
    <script type="text/javascript">
        function searchrouteInformation(value) { 

                var srbuss =  $(".busrouteclass").val();
               // alert(srbuss);
                //console.log(srbuss);
            if(srbuss !="")
            {

                    $.post("/busroutes/stud/sect/ajax",
                    {
                    srbuss:srbuss
                    },function(data)
                {
                    console.log(data);
                    alert(data);
                    $(".homebussroutesection").removeAttr('disabled');
                    var cont="<select class='form-control homebussroutesection' name='routes' ><option value=''>Select Route</option>";
                    for(me in data)
                    {
                        alert(data);
                        cont+= "<option value='"+data[me]['id']+"'>"+data[me]['route_name']+"</option>";
                    }
                    $('.bussroutesection').html(cont+"</select>");
                }
                );
            }
            
        }
    </script>
@endsection
