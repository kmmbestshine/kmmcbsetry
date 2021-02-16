<html>
      <head>
            <title></title>
      <link rel="stylesheet" type="text/css" href="{{url('~admin/css/bootstrap/bootstrap.min.css')}}" />
         
      </head>
      <body>
      <div class="mainDiv" style="width:600px;margin:0px auto">
        <div >
          <div class="modal-content">
            <div class="modal-body" id="printReciept">
                  <div class="row">
                                    
                                    <div class="col-xs-12 text-center">
                                          <h2>{{$get->school_name}}</h2>
                                          <p>{{$get->address}}<br>{{$get->city}}<br>
                                          {{$get->email}}, {{$get->mobile}}</p>
                                          
                                    </div>
                              </div><br>
                              <div class="row">
                                    <div class="col-md-12 text-center"><div class="label label-primary">RECEIPT</div><br></div>
                              </div>
                              <div class="row"  style="margin-top:15px;">
                                    <div class="col-md-12 text-center">
                                    
                                          <table class="table" style="text-align: left;">
                                                <tr>
                                                      <th>Receipt No. :</th>
                                                      <td>{{$get->invoiceNo}}</td>
                                                      <td>&nbsp;</td>
                                                      <th>Date :</th>
                                                      <td>{{$input['date']}}</td>
                                                </tr>
                                                <tr>
                                                      <th>Name :</th>
                                                      <td>{{$get->name}}</td>
                                                      <td>&nbsp;</td>
                                                      <th>Registration :</th>
                                                      <td>{{$get->registration_no}}</td>
                                                </tr>
                                                <tr>
                                                      <th>Father Name :</th>
                                                      <td>{{$get->father_name}}</td>
                                                      <td>&nbsp;</td>
                                                      <th>Class :</th>
                                                      <td>{{$get->class}}</td>
                                                </tr>
                                          </table>
                                    </div>
                              </div>
                              <div class="row">                   
                                    <div class="col-md-12">
                                          <table class="table table-bordered">
                                                <tr>
                                                      <th width="10%">S.No.</th>
                                                      <th>Particular</th>
                                                      <th width="30%">Amount</th>
                                                </tr>
                                                @foreach ($fee as $key=>$fe)
                                                <tr>
                                                      <td>{{$key+1}}</td>
                                                      <td>{{$fe->fee_head}}</td>
                                                      <td>{{$fe->month_fee}}</td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                      <td colspan="2" align="right"><b>Total Annualy</b></td>
                                                      <td><b>{{$annualfee}}</b></td>
                                                </tr>
                                                <tr>
                                                      <td colspan="2" align="right"><b>Total Monthly</b></td>
                                                      <td><b>{{$monthannual}}</b></td>
                                                </tr>                                          
                                                <tr>
                                                      <td colspan="2" align="right"><b>Total</b></td>
                                                      <td><b>{{$get->total_fee}}</b></td>
                                                </tr>
                                                <tr>
                                                      <td colspan="2" align="right"><b>Total Pay</b></td>
                                                      <td><b>{{$get->totalpayment}}</b></td>
                                                </tr>
                                                <tr>
                                                      <td colspan="2" align="right"><b>Discount</b></td>
                                                      <td><b>{{$input['discount']}}</b></td>
                                                </tr>
                                                <tr>
                                                      <td colspan="2" align="right"><b>Now Pay</b></td>
                                                      <td><b>{{$input['pay']}}</b></td>
                                                </tr>
                                          </table>
                                    </div>
                              </div>
                              <p>Your Balance Due - <b>{{$get->balance}}</b></p>
                              <p align="right" style="margin-right:20px;font-weight: bold;">Signed By</p>
            </div>
            <div class="modal-footer">
              
              <button type="button" class="btn btn-primary print">Print</button>
            </div>
          </div>
        </div>
      </div>
         <script type="text/javascript" src="{{url('users/js/plugins/jquery/jquery.min.js')}}"></script>
   <script type="text/javascript" src="{{url('users/js/plugins/jquery/jquery-ui.min.js')}}"></script>
   <script type="text/javascript" src="{{url('users/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <!-- START THIS PAGE PLUGINS-->        
   <script type='text/javascript' src="{{url('users/js/plugins/icheck/icheck.min.js')}}"></script>        
   <script type="text/javascript" src="{{url('users/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
   <script type="text/javascript" src="{{url('users/js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>

   <script type="text/javascript" src="{{url('users/js/plugins/morris/raphael-min.js')}}"></script>
   <script type="text/javascript" src="{{url('users/js/plugins/morris/morris.min.js')}}"></script>       
   <script type="text/javascript" src="{{url('users/js/plugins/rickshaw/d3.v3.js')}}"></script>
   <script type="text/javascript" src="{{url('users/js/plugins/rickshaw/rickshaw.min.js')}}"></script>
   <script type='text/javascript' src="{{url('users/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
   <script type='text/javascript' src="{{url('users/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>                
   <script type='text/javascript' src="{{url('users/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>                
   <script type="text/javascript" src="{{url('users/js/plugins/owl/owl.carousel.min.js')}}"></script>                 

   <script type="text/javascript" src="{{url('users/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>    

   <script type="text/javascript" src="{{url('users/js/plugins/moment.min.js')}}"></script>
   <script type="text/javascript" src="{{url('users/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
   <script type="text/javascript" src="{{url('users/js/plugins/dropzone/dropzone.min.js')}}"></script>
    <!-- <script type="text/javascript" src="{{url('users/js/plugins/fileinput/fileinput.min.js')}}"></script>   -->
    <!-- END THIS PAGE PLUGINS-->        

    <!-- START TEMPLATE -->
   <script type="text/javascript" src="{{url('users/js/actions.js')}}"></script>
   
    </script>     
</body>
