@extends('users.layouts.default')
@section('title', 'Demo Class')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Demo Class</li>
</ul>
@endsection
@section('contant')
        @if(\Session::has('success'))
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>{!! \Session::get('success') !!} </strong> 
                </div>
            </div>
        @endif
         @if(\Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>{!! \Session::get('error') !!} </strong> 
                </div>
            </div>
        @endif
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Demo Class Check List</h3>
                        </div>
                        <div class="panel-body">
                           <div id="printDiv">
                           
                            <div class="panel-heading" align="center">
                            <h3 >{{$school->school_name}}</h3>
                        </div>
                        <form method="post" action="{{route('user.democlass.checklist',$biodata->id)}}">
                            {!! csrf_field() !!}
                            <div class="panel-body">
                                <div class="panel-heading">
                                <h3 class="panel-title">Demo Clas Check List</h3>
                                </div>
                        <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Staff</label>
                                        <div class="col-md-9">
                                            <select class="form-control workclass" name="staffid">
                                                <option value="">Select Staff</option>
                                                @foreach($biodata as $data)
                                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        
                            <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <th>Check List</th>
                               <th>Poor</th>
                               <th>Need Imp</th>
                                <th>Satisfactory</th>
                                <th>Good</th>
                                <th>Excellent</th>
                            </tr>
                            </thead>
                            <tbody>
                                
                            <?php $j=1;  ?>
                            <?php for($i = 0; $i< 9; $i++) : ?>
                            <tr>
                                
                               <td style="width: 2%"><?php echo  $j++ ?></td>
                               <td style="width: 10%"><input type="hidden" name="check_list[]" value="{{ $check_list[$i] }}" > {{$check_list[$i]}}<br></td>
                               <td style="width: 5%"><input type="checkbox" name="excellent[]" value="1" > 1<br></td>
                                <td style="width: 5%"><input type="checkbox" name="excellent[]" value="2" > 2<br></td>
                                <td style="width: 5%"><input type="checkbox" name="excellent[]" value="3"  > 3 <br></td>
                                <td style="width: 5%"><input type="checkbox" name="excellent[]" value="4" > 4<br></td>
                                <td style="width: 5%"><input type="checkbox" name="excellent[]" value="5" > 5<br></td>
                            </tr>
                                <?php endfor ?>
                           <tbody>
                        </table>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <th>Check List</th>
                               <th>YES</th>
                               <th>NO</th>
                            </tr>
                            </thead>
                            <tbody>
                                
                            <?php $j=1; $k=3 ?>
                            <?php for($i = 0; $i<2 ; $i++) : ?>
                            <tr>
                                
                               <td style="width: 2%"><?php echo  $j++ ?></td>
                               <td style="width: 10%"><input type="hidden" name="check_list2[]" value="{{ $check_list1[$i] }}" > {{$check_list1[$i]}}<br></td>
                               <td style="width: 5%"><input type="checkbox" name="poor[]" value="yes" > Yes<br></td>
                                <td style="width: 5%"><input type="checkbox" name="poor[]" value="no" > No<br></td>
                                
                            </tr>
                                <?php endfor ?>
                                <td style="width: 2%"><?php echo  $k ?></td>
                               <td style="width: 10%"><input type="hidden" name="check_list2[]" value="Hand Writing" > Hand Writing<br></td>
                                <td style="width: 5%"><input type="checkbox" name="poor[]" value="good" > Good<br></td>
                                <td style="width: 5%"><input type="checkbox" name="poor[]" value="poor" > Poor<br></td>
                           <tbody>
                        </table>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Remarks</label>
                                        <div class="col-md-9">
                                           <textarea class="form-control" name="remarks" placeholder="Remarks/Observation"></textarea>
                                            @foreach($errors->get('description') as $description)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $description }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                               <th><input type="submit"name="amt" class="btn btn-primary" value='SUBMIT' ></th>
                        </div>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">


  $("#btn-mail").change(function () 
  {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});   
function check_checkboc(id)
        {
            var fee = id.split("_");
            var fee_id = fee[2];
            if($('#select_all_'+fee_id).prop("checked")== true)
            {
                $('#select_all_'+fee_id).prop("checked", true);
            }
            else
            {
                $('#select_all_'+fee_id).prop("checked", false);
            }
        }  
</script>
<script type="text/javascript">

function printScreen(divID) {
    //Get the HTML of div
    var divElements = document.getElementById(divID).innerHTML;
    //Get the HTML of whole page
    var oldPage = document.body.innerHTML;
    var SchoolName = $(".school-name").attr("attr-name");
    //Reset the page's HTML with div's HTML only
    document.body.innerHTML = 
      "<html><head><title>"+SchoolName+"</title></head><body>" + 
      divElements + "</body>";

    //Print Page
    window.print();

    //Restore orignal HTML
    document.body.innerHTML = oldPage;
}
 </script>
 
@endsection












