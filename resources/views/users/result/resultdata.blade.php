@extends('users.layouts.default')
@section('title', 'View Result')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">View Result</li>
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
                @if(count($students)>0 and $students)
                    @if($students!='intializing')
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Delete - All Student Marks for Subject Wise  </strong></h3>

                            <div class="text-right">
                            </div>
                        </div>
                         

                        <div class="panel-body">
                            <table class="table table-borderd datatable">
                                <thead>
                                    <tr>
                                         @if(count($students)>0)
                                    <form method="get" action="{{route('delete_all_students')}}">
                                         {!! csrf_field() !!}
                                                             
                                                <th>
                                                    Select All
                                                    <input type="checkbox"  id="select_all" value="check"
                                                           onchange=" return select_all_checkbox()">
                                                </th>
                                            @endif
                                        <th>Student Name</th>
                                        <th>Roll No</th>
                                        <th>Date</th>
                                       <!-- <th>Marks</th>-->
                                       <!--  <th>Result</th> -->
                                       <!--  <th>Remarks</th> -->
                                       <!--  <th>Download</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $key => $result)
                                    
                                        <tr>
                                            <td>
                                                        <input type="hidden" name="stu_id[]" value="{{ $result->id }}">
                                                        <input type="checkbox" name="select[]" class="select_all_checkboc_class"
                                                               id="select_all_{{$result->id}}" value="{{ $result->id }}"
                                                               onchange="check_checkboc(this.id)" >
                                            </td>
                                            <td>{{ $result->name }}</td>
                                            <td>{{ $result->roll_no }}</td>
                                            <td>{{ $result->date }}</td>
                                            <td><table class="table table-borderd table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Subject</th>
                                                            <th>Max</th>
                                                            <th>Pass</th>
                                                            <th>Ob.Marks</th>
                                                            <th>Grade</th>
                                                            <th>Result</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if($result->result)
                                                            @foreach($result->result as $rel)

                                                                <tr>
                                                                    
                                                                    <td>{{ $rel->subject_id}}</td>
                                                                    <td>{{ $rel->max_marks }}</td>
                                                                    <td>{{ $rel->pass_marks }}</td>
                                                                    <td>{{ $rel->obtained_marks }}</td>
                                                                    <td>{{ $rel->grade }}</td>
                                                                    <td>{{ $rel->result }}</td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        <tr>
                                                            <td>Total</td>
                                                            <td>{{$result->max_total}}</td>
                                                            <td>{{$result->pass_totol}}</td>
                                                            <td>{{$result->totalObtain}}</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <!-- <td>{{$result->result[0]->result}}</td>
                                            <td>{{$result->result_remarks}}</td> -->
                                            
                                            <td>
                                               <a href="{{route('delete.subject', [$rel->subject_id,$rel->section_id])}}" class="btn btn-danger">Delete</a>

                                               
                                            </td>
                                            </tr>
                                    @endforeach
                                    <!-- @if($students)
                                                <tr>
                                                    <td colspan="12"  align="center">
                                                        <button type="submit" title="Delete All Marks" class="btn btn-danger" name="delete_all" value="ok">
                                                            Delete All
                                                        </button>
                                                        
                                                    </td>


                                                </tr>
                                            @endif-->

                                </tbody>

                            </table> 
                        </div>

                    </div>

                    @else
                        <h2 class="text-success"><center>Select Class, Section and Exam Type</center></h2>  
                    @endif
                @else
                    <h2><center>No Data Found!!!</center></h2>
                @endif
            </div>
        </div>
    </div>
   
     <script type="text/javascript">
        function select_all_checkbox()

        {
            
            if($('#select_all').prop("checked") == true)
            {
                $('.select_all_checkboc_class').prop("checked", true);
            }
            else
            {
                $('.select_all_checkboc_class').prop("checked", false);
            }

        }
        function check_checkboc(id)
        {
            var student = id.split("_");
            var student_id = result[2];
             jQuery.support.cors = true;
            if($('#select_all_'+student_id).prop("checked")== true)
            {
                $('#select_all_'+student_id).prop("checked", true);
            }
            else
            {
                $('#select_all_'+student_id).prop("checked", false);
            }
        }
    </script>
   
@endsection