@extends('parent.layouts.default')
@section('title', 'Dashboard')
@section('contant')
 <ul class="breadcrumb">
                <li><a href="#">Home</a></li>                    
                <li class="active">Dashboard</li>
            </ul>
            <!-- END BREADCRUMB -->                       
            
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">                 
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-users"></span>
                            </div>                             
                            <div class="widget-data text-center">
                                <div class="widget-int num-count">{{$totalLeave}}</div>
                                <div class="widget-title">Total Leave</div>
                            </div>      
                            <div class="widget-controls">                                
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">
                                @if($todayAttenace)
                                {{$todayAttenace->attendance}}
                                @else
                                --
                                @endif</div>
                                <div class="widget-title">Today Attendance</div>
                            </div>
                            <div class="widget-controls">                                
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget widget-info widget-padding-sm">
                            <div class="widget-big-int plugin-clock">00:00</div>                            
                            <div class="widget-subtitle plugin-date">Loading...</div>
                            <div class="widget-controls">                                
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>                           
                        </div>
                    </div>
                </div>
                <!-- END WIDGETS -->                    
                
                <div class="row">
                                      
                    <div class="col-md-4">
                        
                        <!-- START PROJECTS BLOCK -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title-box">
                                    <h3>Homework</h3>
                                    <span>Today Homework</span>
                                </div>                                    
                                <ul class="panel-controls" style="margin-top: 2px;">
                                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                        </ul>                                        
                                    </li>                                        
                                </ul>
                            </div>
                            <div class="panel-body panel-body-table">
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="50%">Subject</th>
                                                <th width="20%">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                            
                                                                                        
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!-- END PROJECTS BLOCK -->
                        
                    </div>

                     <div class="col-md-4">
                        
                        <!-- START PROJECTS BLOCK -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title-box">
                                    <h3>Leave Request</h3>
                                    <span>Last 5 Request</span>
                                </div>                                    
                                <ul class="panel-controls" style="margin-top: 2px;">
                                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                        </ul>                                        
                                    </li>                                        
                                </ul>
                            </div>
                            <div class="panel-body panel-body-table">
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="50%">Request Time</th>
                                                <th width="20%">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                                                                           
                                           
                                                                                        
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!-- END PROJECTS BLOCK -->
                        
                    </div>

                     <!-- <div class="col-md-4">
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title-box">
                                    <h3>Homework</h3>
                                    <span>Today Homework</span>
                                </div>                                    
                                <ul class="panel-controls" style="margin-top: 2px;">
                                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                        </ul>                                        
                                    </li>                                        
                                </ul>
                            </div>
                            <div class="panel-body panel-body-table">
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="50%">Subject</th>
                                                <th width="20%">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Joli Admin</strong></td>
                                                <td><span class="label label-danger">Developing</span></td>
                                               
                                            </tr>
                                                                                           
                                           
                                                                                        
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div> -->
                </div>
                
                
    <!-- START DASHBOARD CHART -->
    <div class="chart-holder" id="dashboard-area-1" style="height: 200px;"></div>
    <div class="block-full-width">
     
    </div>                    
    <!-- END DASHBOARD CHART -->
    
</div>
<!-- END PAGE CONTENT WRAPPER -->                                
</div>            
<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

@endsection