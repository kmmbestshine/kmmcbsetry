@extends('users.layouts.default')
@section('title', 'Selected Staff')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Selected Staff</li>
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
            
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Selected Staff</strong></h3>
                            <?php $bioselected = DB::table('bio_selected')
                            ->where('staff_id',$biodata->id)
                            ->first();  ?>
                             <a href="{{route('staff.appoint.download', $bioselected->id)}}" class="btn  btn-info">Appointment Order</a>
                        </div>
                        
                            <div class="panel-body">
                                <form action="{{route('postSelectedStaff')}}" method="post">
                                {!! csrf_field() !!}
                                    <div class="row">
                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Staff Name</label>
                                        <div class="col-md-9">
                                           <input type="text" class="form-control" name="staff_name" value="{{$biodata->name}}" disabled></input>
                                           <input type="hidden" class="form-control" name="staff_id" value="{{$biodata->id}}" ></input>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">School Name</label>
                                        <div class="col-md-9">
                                           <select class="form-control" name="school" required>
                                                <option value=''>Choose School</option>
                                                @foreach($bioschool as $school)
                                                <option value="{{$school->school_name}}">{{$school->school_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                        
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date Of Joining</label>
                                        <div class="col-md-9">
                                           <input type="date" name="date" class="form-control">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Designation</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="designation" required>
                                                <option value=''>Choose Designation</option>
                                               <option value="Principal">Principal</option>
                                                <option value="XSEED Teacher">XSEED Teacher</option>
                                                <option value="Mother Teacher">Mother Teacher</option>
                                                <option value="Office Staff">Office Staff</option>
                                                <option value="PG Language Staff">PG Language Staff</option>
                                                <option value="HSC & NEET Staff">HSC & NEET Staff</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                        
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contract Period</label>
                                        <div class="col-md-9">
                                           <input class="form-control" type="text" name="period" placeholder="Contract Period"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Grade</label>
                                        <div class="col-md-9">
                                           <input class="form-control" type="text" name="grade" placeholder="Grade"></input>
                                            
                                        </div>
                                    </div>
                                </div>
                                        
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Salary</label>
                                        <div class="col-md-9">
                                           <input class="form-control" type="text" name="salary" placeholder="Salary"></input>
                                            
                                        </div>
                                    </div>
                                </div>
                                    </div><br>
                                    <div class="row">
                                        
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-9 control-label">Aditional Condition</label>
                                        <div class="col-md-9">
                                           <textarea id="summernoteone" name="add_condition" placeholder='Enter Description'> </textarea>
                                            
                                        </div>
                                    </div>
                                </div>

                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12 pull-center">
                                            <button class="btn btn-primary pull-center">Issue Appointment Letter</button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('teachersRecruitment')}}" class="btn btn-danger">Back</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        
                        
                    </div>
            </div>
        </div>
    </div>
    </div>
    <script>
    tinymce.init({
        // General options
        selector: '#summernoteone',
        plugins: ['lists advlist',' textcolor'],
       // plugins: ['lists advlist',' textcolor','link image code fullscreen imageupload','uploadimage'],
        //toolbar: "forecolor backcolor",
        //toolbar: 'undo redo | insert | styleselect | fontselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | imageupload | code | fullscreen | print preview media | forecolor backcolor emoticons | codesample | mybutton',
        toolbar: 'undo redo | insert | styleselect | fontselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview media | forecolor backcolor emoticons | codesample | mybutton',
       // toolbar2: 'print preview media | forecolor backcolor emoticons | codesample | mybutton',
        height : "250"
    });

</script>
@endsection