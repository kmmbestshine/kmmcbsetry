@extends('users.layouts.default')
@section('title', 'Teachers Recruitment')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Teachers Recruitment</li>
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
        @if($msg)
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> {{ $msg }}
                    </div>
                </div>
            </div>
        @endif
    <div class="page-content-wrap">
       <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="get">
                    <div class="panel panel-default">
                        <div class="text-right">
                                <a href="{{route('apmt.approved.list')}}" class="btn btn-info btn-rounded">Appointment Approved List</a>
                                &nbsp;&nbsp;&nbsp;
                                 <a href="{{route('create.job.school')}}" class="btn btn-info btn-rounded">Add New School</a>
                                &nbsp;&nbsp;&nbsp;
                            </div>
                    </div>
                </form>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                
                    <div class="panel panel-default">
                        <h3 class="panel-title"><strong>Test Attended Staff List </strong></h3>
                        <div class="panel-body">
                            <div style="height: 1000px;overflow: scroll;">
                            <table style="border: 1px solid black" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Staff Type</th>
                                        <th>Mobile No</th>
                                        <th>View Profile</th>
                                        <th>Online Test</th>
                                        <th>Demo Class</th>
                                        <th>Personal Interview</th>
                                        <th>Analyst</th>
                                        <th>Status</th>
                                        <th>Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $j=1; ?>
                                    @if($bio_answernew)
                                    @foreach($bio_answernew as $key => $data)
                                   
                                    <?php 
                                        $democlass = DB::table('bio_democlass_chklst')->where('staff_id', $data->id)->count();
                                        $personal = DB::table('bio_personal_interview')->where('staff_id', $data->id)->count();
                                        $onlinetest = DB::table('bio_results')->where('teacher_id', $data->id)->count();
                                        $status = DB::table('biodata')->where('id', $data->id)->select('staff_status')->first();
                                        
                                    ?>
                                        <tr>
                                            <td>{{ $j++ }}</td>
                                            
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->type }}</td>
                                            <td>{{ $data->contact_no }}</td>
                                            <td>
                                                <a href="{{route('view.staffprofile', $data->id)}}" class="btn btn-primary" >View Profile</a>
                                            </td>
                                            <td>
                                               @if($onlinetest > 0)
                                                    <a href="{{route('interview.test.result',$data->id)}}" class="btn btn-warning"  > Completed</a>
                                                    @else
                                                    <a href="{{route('interview.test.result',$data->id)}}" class="btn btn-danger"  >Online Test</a>
                                                     @endif
                                            </td>
                                            <td>
                                                @if($democlass > 0)
                                                    <a href="{{route('democlass_checklistview',$data->id)}}" class="btn btn-warning"  >Attended</a>
                                                    @else
                                                    <a href="{{route('democlass_checklist',$data->id)}}" class="btn btn-primary"  >Demo Class</a>
                                                     @endif
                                            </td>
                                            <td>
                                                @if($personal > 0)
                                                    <a href="{{route('personal_interviewview',$data->id)}}" class="btn btn-warning"  >Attended</a>
                                                    @else
                                                    <a href="{{route('personal_interview',$data->id)}}" class="btn btn-danger"  >Personal Interview</a>
                                                     @endif
                                                
                                            </td>
                                            <td>
                                                <a href="{{route('corres.sugession', $data->id)}}" class="btn btn-primary">Analysis</a>
                                            </td>
                                            <td>
                                                @if($status->staff_status != "")
                                                    <a href="" class="btn btn-warning" disabled>{{$status->staff_status}}</a>
                                                    @else
                                                    <a href="" class="btn btn-warning" disabled>"To Be Updated"</a>
                                                     @endif
                                                
                                            </td>
                                            <td>
                                                <a href="{{route('corres.staff.delete', $data->id)}}" class="btn btn-danger">delete</a>
                                            </td>
                                            
                                            
                                        </tr>
                                    @endforeach
                                    
                                    @endif
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
               <!-- <div class="panel panel-default">
                        <h3 class="panel-title"><strong>Test Not Attended Staff List </strong></h3>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Mobile No</th>
                                        <th>View Profile</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    @if($all_not_taken_exam)
                                    @foreach($all_not_taken_exam as $key => $data2)
                                    @foreach($data2 as $key => $get)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $get->name }}</td>
                                            <td>{{ $get->contact_no }}</td>
                                            <td>
                                                <a href="{{route('view.staffprofile', $get->id)}}" class="btn btn-primary" >View Profile</a>
                                            </td>
                                            <td>
                                                <a href="{{route('corres.staff.delete', $get->id)}}" class="btn btn-danger">delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>-->
            </div>
        </div>
    </div>
@endsection
<style>
table, th, td {
  border: 1px solid black;
}
</style>