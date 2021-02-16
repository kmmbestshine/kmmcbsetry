@extends('users.layouts.default')
@section('title', 'Add Document')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Document</li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('post.upload.document',$bio_selected->id)}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Document</strong></h3>
                            
                        </div>
                        <div class="panel-body">
                            
                                <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name</label>
                                        <div class="col-md-9">
                                           <input type="text" name="name" class="form-control" value="{{$bio_selected->name}}" disabled>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> School Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="school_name" class="form-control" value="{{$bio_selected->school_name}}" disabled>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> AADHAR CARD Image</label>
                                        <div class="col-md-9">
                                           <input type="file" name="aadharimage" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> AADHAR CARD PDF</label>
                                        <div class="col-md-9">
                                           <input type="file" name="aadharpdf" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> PAN CARD Image</label>
                                        <div class="col-md-9">
                                           <input type="file" name="panimage" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> PAN CARD PDF</label>
                                        <div class="col-md-9">
                                           <input type="file" name="panpdf" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> BANK PASS BOOK Image</label>
                                        <div class="col-md-9">
                                           <input type="file" name="bankimage" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> BANK PASS BOOK PDF </label>
                                        <div class="col-md-9">
                                           <input type="file" name="bankpdf" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> SERVICE CERTIFICATE Image</label>
                                        <div class="col-md-9">
                                           <input type="file" name="expimage" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> SERVICE CERTIFICATE PDF</label>
                                        <div class="col-md-9">
                                           <input type="file" name="exppdf" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Original Certificate </label>
                                        <div class="col-md-9">
                                            <select>
                                                <option value="">Select Certificate</option>
                                            <option value="red">Yes</option>
                                            <option value="green">No</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="red box"><strong>Enter Original Document Details :</strong>
                                    <div class="row">
                                        <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Degree</label>
                                        <div class="col-md-3">
                                            <input  id="designation_value" name="degree" class="form-control" placeholder="Degree">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Title</label>
                                        <div class="col-md-3">
                                            <input   name="title" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Cert No</label>
                                        <div class="col-md-3">
                                            <input   name="certNo" class="form-control" placeholder="Certificate No">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Ser No</label>
                                        <div class="col-md-3">
                                            <input   name="serNo" class="form-control" placeholder="Serial No">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Issue Date</label>
                                        <div class="col-md-3">
                                            <input type="date"  name="issuedt" class="form-control" placeholder="Issue Date">
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="green box"><strong> One Month Salary</strong>
                                </div>
                            </div>
                            <br>
                           
                            <div class="row">
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                                </div>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
    </script>
@endsection