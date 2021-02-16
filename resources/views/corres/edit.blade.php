@extends('admin.layouts.default')
@section('title', 'Input School Name')
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
                <div class="page-toolbar-subtitle">Update School</div>
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
                    <div class="block-content"><h2><strong>Update</strong> School</h2></div>
                    <div class="block-content controls">
                        <form action="{{route('updateSchool')}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="row-form">
                                <div class="col-md-6">
                                    <div class="col-md-3"><strong>School Name:</strong></div>
                                    <div class="col-md-9">
                                        <input type="hidden" name="id" value="{{ $school->id }}">
                                        <input type="text" class="form-control" placeholder="Enter School Name" name="school_name" value="{{ $school->school_name }}">
                                        @foreach($errors->get('school_name') as $school_name)
                                            <p class="error pull-right">{{ $school_name }}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-3"><strong>School Email:</strong></div>
                                <div class="col-md-9"><input type="email" class="form-control" placeholder="Enter School Email Address" name="school_email" value="{{ $school->email }}">
                                    @foreach($errors->get('school_email') as $school_email)
                                        <p class="error pull-right">{{ $school_email }}</p>
                                    @endforeach
                                </div>
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="col-md-6">
                                    <div class="col-md-3"><strong>School Contact No</strong></div>
                                <div class="col-md-9"><input type="text" class="form-control" placeholder="Enter School Contact Number" name="school_mobile" value="{{ $school->mobile }}">
                                    @foreach($errors->get('school_mobile') as $school_mobile)
                                        <p class="error pull-right">{{ $school_mobile }}</p>
                                    @endforeach
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-3"><strong>School Address:</strong></div>
                                <div class="col-md-9"><input type="text" class="form-control" placeholder="Enter School Address" name="school_address" value="{{ $school->address }}">
                                    @foreach($errors->get('school_address') as $school_address)
                                        <p class="error pull-right">{{ $school_address }}</p>
                                    @endforeach
                                </div>
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="col-md-6">
                                    <div class="col-md-3"><strong>School City:</strong></div>
                                <div class="col-md-9"><input type="text" class="form-control" placeholder="Enter School City" name="school_city" value="{{ $school->city }}">
                                    @foreach($errors->get('school_city') as $school_city)
                                        <p class="error pull-right">{{ $school_city }}</p>
                                    @endforeach
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-3"><strong>School Image:</strong></div>
                                    <div class="col-md-5">
                                        <input type="file" class="form-control" name="school_image">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{url($school->image)}}" class="img-thumbnail" width="150px" height="150px">
                                    </div>
                                </div>
                                  <div class="col-md-6">
                                   <!--  <div class="col-md-3"> --><!-- </div> -->
                                <div class="col-md-9">
                                    <label><strong>School Plan:</strong></label>
                                    <select name="userplan" id="userplan_change" class="form-control">
                                        <option value="">Select Plan</option>
                                        <option value="Basic" {{($school->userplan == 'Basic') ? 'selected':''}}>Basic</option>
                                        <option value="Standard" {{($school->userplan == 'Standard') ? 'selected':''}}>Standard</option>
                                        <option value="Premium" {{($school->userplan == 'Premium') ? 'selected':''}}>Premium</option>
                                    </select>
                                    <a  id="Edit_plan" href="" data-toggle="modal" >
                                        <label id="editcontent">Edit {{$school->userplan}} plan Options </label></a>
                                </div>
                                <input type="hidden" id="usermanualplan" name="usermanualplan" value="{{$school->userplanAdded}}">
                                </div>
                                <div class="col-md-6">
                                    
                                <div class="col-md-9">
                                    <label><strong>School Category:</strong></label>
                                    <select name="Categorys" class="form-control">
                                        <option value="0" {{($school->schoolcategory == '0') ? 'selected':''}}>Demo</option>
                                        <option value="1" {{($school->schoolcategory == '1') ? 'selected':''}}>Regular</option>
                                        
                                    </select>
                                </div>

                                </div>
                                 <div class="col-md-6">
                                      <div class="col-md-9">
                                    <label><strong>School Status:</strong></label>
                                    <select name="schoolstatus" class="form-control">
                                         <option value="0" {{($school->schoolstatus == '0') ? 'selected':''}}>InActive</option>
                                        <option value="1" {{($school->schoolstatus == '1') ? 'selected':''}}>Active</option>
                                       
                                        
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-warning btn-lg pull-right">Update School</button>
                                    </div>
                                </div>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="selectPlans" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>

      <div class="modal-body">
        <div class="row">
           <div id="Basic" style="display: {{($school->userplan == 'Basic') ? 'block' : 'none'}}">
                @foreach($schooluserplans as $schooluserbasic)
                <div class="col-md-3"  style="padding: 5px;margin: 10px;">
                <input type="checkbox" id="{{$schooluserbasic->id}}" onchange="plansadd(basicitem,{{$schooluserbasic->id}})" style="padding: 3px;margin: 5px;" {{ ($schooluserbasic->Basic == '1') ? 'checked="checked"; disabled="true"'  : '' }} {{ (in_array($schooluserbasic->id,
                (explode(',', $school->userplanAdded)))) ? 'checked="checked"' : '' }}>
                {{$schooluserbasic->Modules}}
                </div>
                 @endforeach
            </div>     
             <div id="Standard" style="display: {{($school->userplan == 'Standard') ? 'block':'none'}}">
                @foreach($schooluserplans as $schooluserstandard)
                <div class="col-md-3"  style="padding: 5px;margin: 10px;">
                <input type="checkbox" id="{{$schooluserbasic->id}}" onchange="plansadd(standarditem,{{$schooluserstandard->id}})" style="padding: 3px;margin: 5px;" {{ ($schooluserstandard->Standard == '1') ? 'checked="checked"; disabled="true"'  : '' }} {{ (in_array($schooluserstandard->id,
                (explode(',', $school->userplanAdded)))) ? 'checked="checked"' : '' }}>
                {{$schooluserstandard->Modules}}
                </div>
                 @endforeach
            </div>
             <div id="Premium" style="display: {{ ($school->userplan == 'Premium') ? 'block':'none'}}">
                @foreach($schooluserplans as $schooluserpremium)
                <div class="col-md-3"  style="padding: 5px;margin: 10px;">
                <input type="checkbox" id="{{$schooluserbasic->id}}" onchange="plansadd(Premiumitem,{{$schooluserpremium->id}})" style="padding: 3px;margin: 5px;" {{ ($schooluserpremium->Premium == '1') ? 'checked="checked"; disabled="true"'  : '' }} {{ (in_array($schooluserpremium->id,
                (explode(',', $school->userplanAdded)))) ? 'checked="checked"' : '' }}>
                {{$schooluserpremium->Modules}}
                </div>
                 @endforeach
            </div>     
                

       </div>
       <!--  --> 
       <!--  <p>Some text in the modal.</p> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>  
    <script type="text/javascript">

            //var i =0;
             var basicitem=[];
            var standarditem=[];   
            var Premiumitem=[];
                var k=0;
            function plansadd(items,id)
            {
                //console.log($.inArray(id, items));
                if(k==0){
                var valuserplan=$("#usermanualplan").val();
                if(valuserplan != ""){
                    var valuserplan=valuserplan.split(",");
                    for(var i=0;i<valuserplan.length;i++)
                    {
                    items.push(eval(valuserplan[i]));    
                    }
                }
                  k=k+1;
                }
                //console.log(items);
                var val=$.inArray(id, items);
                if(val < 0)
                {
                     items.push(id);                  
                         
                }
                else
                {
                      items.splice($.inArray(id, items),1);  
                      //console.log('remove');
                }
               // console.log(items);
                var uniqueNames = [];
                $.each(items, function(i, el){
                    if($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
                });
                items=[];
                items.push(uniqueNames);
                $("#usermanualplan").val(items);                                                       
            }


    </script>

  </div>
</div>
@endsection