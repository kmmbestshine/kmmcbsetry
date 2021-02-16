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
                                        <label class="col-md-3 control-label"> Upload Documents</label>
                                        <div class="col-md-9">
                                           <input type="file" name="images[]" id="images" class="form-control" multiple>
                                            <small class="text-warning">You can use ctr (cmd) to select multiple images like AADHAR,PAN,PASSBOOK, SERVICE CERTIFICATES</small>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <br>
                          
                            
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
                                     <table id="myTable" style="border: 1px solid black" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                 <th> Degree</th>
                 <th> Title</th>
                 <th> Cert No</th>
                 <th> Ser No</th>
                 <th> Issue Date</th>
                 <th> Delete</th>
                </tr>
                </thead>
            <tbody>
            <?php $j=1; ?>
              <tr>
                  
                  <td>
                      <input type="text" class="fname" name="degree[]" placeholder="Enter Degree" required/>
                  </td>
                  <td>
                      <input type="text" class="fname" name="title[]" placeholder="Enter  Title" required/>
                  </td>
                  <td>
                      <input type="text" class="fname" name="certNo[]" placeholder="Enter Certificate No"  />
                  </td>
                  <td>
                      <input type="text" class="fname" name="serNo[]" placeholder="Enter Serial No"  />
                  </td>
                   <td>
                      <input type="date" class="fname" name="issuedt[]" placeholder="Enter Issue Date"  />
                  </td>
                 
                  <td>
                      <input type="button" value="Delete" class="btn btn-danger remove"/>
                  </td>
              </tr>
              
              </tbody>
          </table>
          <p>
              <input type="button" value="Insert row" class="btn btn-info">
          </p>               
                            </div>
                        </div>
                            <br>
                           
                            <div class="row">
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('apmt.approved.list')}}" class="btn btn-danger">Back</a>
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

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script type="text/javascript">
$('#myTable').on('click', 'input[type="button"]', function () {
    $(this).closest('tr').remove();
})
$('p input[type="button"]').click(function () {
    $('#myTable').append('<tr><td><input type="text" class="fname" name="degree[]" placeholder="Enter Degree" required/></td><td><input type="text" class="fname" name="title[]" placeholder="Enter Title" required/></td><td><input type="text" class="fname" name="certNo[]" placeholder="Enter Certificate No"  /></td><td><input type="text" class="fname" name="serNo[]" placeholder="Enter Serial No"  /></td><td><input type="date" class="fname" name="issuedt[]" placeholder="Enter Issue Date"  /><td><input type="button" value="Delete" class="btn btn-danger remove"/></td></tr>')
});
    </script>
    <script>
function deleteRow(id,row) {
    document.getElementById(id).deleteRow(row);
}

function insRow(id) {  
    var filas = document.getElementById("myTable").rows.length;
    var x = document.getElementById(id).insertRow(filas);
    var y = x.insertCell(0);
    var z = x.insertCell(1);
    y.innerHTML = '<input type="text" id="fname">';
    z.innerHTML ='<button id="btn" name="btn" > Delete</button>';
}
</script>
 <script>
        document.getElementById('iban').addEventListener('input', function (e) {
            e.target.value = e.target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
        });
  </script>
@endsection