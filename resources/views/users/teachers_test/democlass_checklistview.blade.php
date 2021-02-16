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
                            <span >
                            <a href="{{route('teachersRecruitment')}}" class="btn btn-danger" style="float:right">Back</a>
                        </span>
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
                                <h3 class="panel-title">Demo Class Check List</h3>
                                </div>

                        
                            <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <th>Check List</th>
                               <th>Poor (1 Mark)</th>
                               <th>Need Imp (2 Mark)</th>
                                <th>Satisfactory (3 Mark)</th>
                                <th>Good (4 Mark)</th>
                                <th>Excellent (5 Mark)</th>

                            </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td style="width: 2%">1</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="{{$demo_chklst[0]}}" > Indroduction<br></td>
                                  @if($marks[0] == 1)
                                  <td style="width: 5%" align="left">
                                    <input type="checkbox" class="radio" value="$marks[0]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[0]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[0] == 2)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[0]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[0]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[0] == 3)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[0]" name="fooby[1][]" checked /></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[0]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[0] == 4)
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[0]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[0]" name="fooby[1][]" disabled/></td>
                                    @endif
                                  @if($marks[0] == 5)
                                    <td style="width: 5%" align="right">
                                    <input type="checkbox" class="radio" value="$marks[0]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[0]" name="fooby[1][]" disabled/></td>
                                    @endif
                                </tr>
                                 
                                
                                <tr>
                                    <td style="width: 2%">2</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="{{$demo_chklst[1]}}" >Motivation <br></td>
                                  
                                   @if($marks[1] == 1)
                                  <td style="width: 5%" align="left">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" align="left">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[1] == 2)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[1] == 3)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[1] == 4)
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                  @if($marks[1] == 5)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                   @endif
                                </tr>
                                
                                <tr>
                                    <td style="width: 2%">3</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="{{$demo_chklst[2]}}" > Communicative English<br></td>
                                  
                                  @if($marks[2] == 1)
                                  <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[2] == 2)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[2] == 3)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[2] == 4)
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                  @if($marks[2] == 5)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                   @endif
                                </tr>
                                <tr>
                                    <td style="width: 2%">4</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="{{$demo_chklst[3]}}" > Subject Knowledge<br></td>
                                  
                                  @if($marks[3] == 1)
                                  <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[3] == 2)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[3] == 3)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[3] == 4)
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                  @if($marks[3] == 5)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                   @endif
                                </tr>
                                <tr>
                                    <td style="width: 2%">5</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="{{$demo_chklst[4]}}" > Board Work<br></td>
                                  
                                  @if($marks[4] == 1)
                                  <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[4] == 2)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[4] == 3)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[4] == 4)
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                  @if($marks[4] == 5)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                   @endif
                                </tr>
                                <tr>
                                    <td style="width: 2%">6</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="{{$demo_chklst[5]}}" > Body Language<br></td>
                                  
                                  @if($marks[5] == 1)
                                  <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[5] == 2)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[5] == 3)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[5] == 4)
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                  @if($marks[5] == 5)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                   @endif
                                </tr>
                                <tr>
                                    <td style="width: 2%">7</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="{{$demo_chklst[6]}}" > Class Room Management<br></td>
                                  
                                  @if($marks[6] == 1)
                                  <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[6] == 2)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[6] == 3)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[6] == 4)
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                  @if($marks[6] == 5)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                   @endif
                                </tr>
                                <tr>
                                    <td style="width: 2%">8</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="Confidence Level" > Confidence Level<br></td>
                                  
                                  @if($marks[7] == 1)
                                  <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[7] == 2)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[7] == 3)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[7] == 4)
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                  @if($marks[7] == 5)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                   @endif
                                </tr>
                                <tr>
                                    <td style="width: 2%">9</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list[]" value="Audibility Of Teaching" >Audibility Of Teaching<br></td>
                                  
                                  @if($marks[8] == 1)
                                  <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[8] == 2)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[8] == 3)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                   @if($marks[8] == 4)
                                    <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                     @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                    @endif
                                  @if($marks[8] == 5)
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="$marks[1]" name="fooby[1][]" disabled/></td>
                                   @endif
                                </tr>
                               <!-- <div>
                                  <h3>Animals</h3>
                                  <label>
                                    <input type="checkbox" class="radio" value="1" name="fooby[2][]" />Tiger</label>
                                  <label>
                                    <input type="checkbox" class="radio" value="1" name="fooby[2][]" />Sloth</label>
                                  <label>
                                    <input type="checkbox" class="radio" value="1" name="fooby[2][]" />Cheetah</label>
                                </div>-->
                           <!-- <?php $j=1;  ?>
                            <?php for($i = 0; $i< 9; $i++) : ?>
                            <tr>
                                
                               <td style="width: 2%"><?php echo  $j++ ?></td>
                               <td style="width: 10%"><input type="hidden" name="check_list[]" value="{{ $check_list[$i] }}" > {{$check_list[$i]}}<br></td>
                               <td style="width: 5%"><input type="checkbox" name="excellent[]" id= "marks_{{$i}}[]" value="1" > 1<br></td>
                                <td style="width: 5%"><input type="checkbox" name="excellent[]" id= "marks_{{$i}}[]" value="2" > 2<br></td>
                                <td style="width: 5%"><input type="checkbox" name="excellent[]" id= "marks_{{$i}}[]" value="3"  > 3 <br></td>
                                <td style="width: 5%"><input type="checkbox" name="excellent[]" id= "marks_{{$i}}[]" value="4" > 4<br></td>
                                <td style="width: 5%"><input type="checkbox" name="excellent[]" id= "marks_{{$i}}[]" value="5" > 5<br></td>
                            </tr>
                                <?php endfor ?>-->
                           <tbody>
                        </table>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                               <th>S.No</th>
                               <th>Check List</th>
                               <th style="text-align:center">YES</th>
                               <th style="text-align:center">NO</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 2%">1</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list2[]" value="Spelling Mistakes" > Spelling Mistakes<br></td>
                                  
                                  @if($chklst_val[0] == 'yes')
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="yes" name="list2[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="no" name="list2[1][]" disabled/></td>
                                   @endif
                                   @if($chklst_val[0] == 'no')
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="no" name="list2[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="yes" name="list2[1][]" disabled/></td>
                                   @endif
                                  
                                 
                                </tr>
                                <tr>
                                    <td style="width: 2%">2</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list2[]" value="Pronunciation Mistakes" >Pronunciation Mistakes<br></td>
                                  
                                  @if($chklst_val[1] == 'yes')
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="yes" name="list2[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="no" name="list2[1][]" disabled/></td>
                                   @endif
                                   @if($chklst_val[1] == 'no')
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="yes" name="list2[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="no" name="list2[1][]" disabled/></td>
                                   @endif
                                 
                                 
                                </tr>
                                <tr>
                                    <td style="width: 2%">3</td>
                                    <td style="width: 10%"><input type="hidden" name="check_list2[]" value="Hand Writing" >Hand Writing<br></td>
                                  
                                  @if($chklst_val[2] == 'good')
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="good" name="list2[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="poor" name="list2[1][]" disabled/></td>
                                   @endif
                                   @if($chklst_val[2] == 'poor')
                                  <td style="width: 5%">
                                    <input type="checkbox" class="radio" value="good" name="list2[1][]" checked/></td>
                                    @else
                                    <td style="width: 5%" >
                                    <input type="checkbox" class="radio" value="poor" name="list2[1][]" disabled/></td>
                                   @endif
                                 
                                </tr>
                                <div class="row">
                                   <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"><h2>Total Marks</h2></label>
                                        <div class="col-md-9">
                                           <h2>{{$total_marks}}</h2>
                                        </div>
                                    </div>
                                </div>
                                </div>
                           <!-- <?php $j=1; $k=3 ?>
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
                                <td style="width: 5%"><input type="checkbox" name="poor[]" value="poor" > Poor<br></td>-->
                           <tbody>
                        </table>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Remarks</label>
                                        <div class="col-md-9">
                                           <textarea class="form-control" name="remarks" placeholder="Remarks/Observation">{{$remarks}}</textarea>
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
                        
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
// the selector will match all input controls of type :checkbox
// and attach a click event handler 
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});

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












