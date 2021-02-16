@extends('admin.layouts.default')
@section('title', 'Dashboard')
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
select{
    color: black;
}
.page-container .page-head {
    background:#f7a62b;
        border-top: 1px solid #f7a62b;
    border-bottom: 1px solid #f7a62b;
}
.page-container .page-navigation .page-navigation-info {
    border-bottom: 1px solid #676c71;
    background: #f7a62b;
}
.page-container .page-navigation {
    background: #f7a62b;
}



</style>
<div class="page-content">
    <div class="container">
        <div class="page-toolbar">                
            <div class="page-toolbar-block">
                <div class="page-toolbar-title">Dashboard</div>
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
        <div class="page-content-wrap" style="margin-top: 10px;">
     <div class="row">
                <div class="col-md-4">
                    <div class="widget widget-info widget-padding-sm">
                        <div class="widget-big-int plugin-clock">00:00</div>                            
                        <div class="widget-subtitle plugin-date">Loading...</div>                          
                    </div>
                </div>
                
                <div class="col-md-4">
                    <a href="view/school">
                        <div class="widget widget-default widget-item-icon">
                            <div class="col-md-12" style="text-align: center;"><h3>Total School </h3></div>
                          <div class="widget-item-left">
                               <div class="widget-int num-count">{{(count($school)-1)}}
                                    </div>
                                <div class="widget-title">School</div>
                            </div>    
                            <div class="widget-data">
                                <div class="widget-int num-count" style="margin-top: 5px;">{{$school['student']}}
                                    </div>
                                <div class="widget-title">Student</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                   <a href="view/school?Category=0">
                        <div class="widget widget-default widget-item-icon">
                            <div class="col-md-12" style="text-align: center;"><h3>Demo School </h3></div>
                          <div class="widget-item-left">
                               <div class="widget-int num-count">{{(count($DemoSchool)-1)}}
                                    </div>
                                <div class="widget-title">School</div>
                            </div>    
                            <div class="widget-data">
                                <div class="widget-int num-count" style="margin-top: 5px;">{{$DemoSchool['student']}}
                                    </div>
                                <div class="widget-title">Student</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                   <a href="view/school?Category=1">
                        <div class="widget widget-default widget-item-icon">
                            <div class="col-md-12" style="text-align: center;"><h3>Regular School </h3></div>
                          <div class="widget-item-left">
                               <div class="widget-int num-count">{{(count($RegularSchool)-1)}}
                                    </div>
                                <div class="widget-title">School</div>
                            </div>    
                            <div class="widget-data">
                                <div class="widget-int num-count" style="margin-top: 5px;">{{$RegularSchool['student']}}
                                    </div>
                                <div class="widget-title">Student</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                   <a href="view/school?Status=1">
                        <div class="widget widget-default widget-item-icon">
                            <div class="col-md-12" style="text-align: center;"><h3>Active School </h3></div>
                          <div class="widget-item-left">
                               <div class="widget-int num-count">{{(count($ActiveSchool)-1)}}
                                    </div>
                                <div class="widget-title">School</div>
                            </div>    
                            <div class="widget-data">
                                <div class="widget-int num-count" style="margin-top: 5px;">{{$ActiveSchool['student']}}
                                    </div>
                                <div class="widget-title">Student</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                   <a href="view/school?Status=0">
                        <div class="widget widget-default widget-item-icon">
                            <div class="col-md-12" style="text-align: center;"><h3>InActive School </h3></div>
                          <div class="widget-item-left">
                               <div class="widget-int num-count">{{(count($InActiveSchool)-1)}}
                                    </div>
                                <div class="widget-title">School</div>
                            </div>    
                            <div class="widget-data">
                                <div class="widget-int num-count" style="margin-top: 5px;">{{$InActiveSchool['student']}}
                                    </div>
                                <div class="widget-title">Student</div>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>                  
           
        <div class="block-full-width"></div>
        </div>
</div>
</div>
@endsection
  