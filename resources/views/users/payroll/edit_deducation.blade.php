@extends('users.layouts.default')
@section('title', 'Edit Deduction Type')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
        <li><a href="{{route('viewPayrollIndex')}}">Payroll</a></li>
        <li><a href="{{route('get_deduction')}}">Deduction</a></li>
        <li class="active">Edit</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2>Edit Deduction Type</h2>
       </div>
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
                       <strong>Oohh!</strong> {{ Input::old('error') }}
                   </div>
               </div>
           </div>
       @endif
       <div class="page-content-wrap">
          <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h3 class="panel-title">
                              <strong>Edit Deduction</strong>
                          </h3>
                          <div class="text-right">
                              <a href="{{route('viewPayrollIndex')}}" class="btn btn-info btn-rounded">Payroll</a>
                              &nbsp;&nbsp;&nbsp;

                              <a href="{{route('get_deduction')}}" class="btn btn-info btn-rounded">Add Deduction</a>
                              &nbsp;&nbsp;&nbsp;
                              <a href="{{route('add_professional_tax')}}" class="btn btn-info btn-rounded">Add Professional Tax</a>
                              &nbsp;&nbsp;&nbsp;
                          </div>
                      </div>
                      <div class="panel-body">
                      {{-- <form class="form-horizontal" role="form" method="post" action="{{route('postDeduction')}}">
                      --}}
                       <form class="form-horizontal" role="form" method="post" action="{{ route('update_deduction_percentage') }}">
                           {!! csrf_field() !!}
                           <div class="col-md-4">
                               <div class="form-group">
                                   <input type="text" class="form-control" placeholder="Deduction Types" value="{{ ucwords($getDeduction->deduction_type) }}"
                                   disabled>
                                   <input type="hidden" name="deduction" class="form-control" value="{{ ucwords($getDeduction->deduction_type) }}">
                                   @foreach($errors->get('deduction') as $type)
                                       <div class="alert alert-danger my-alert" role="alert">
                                           <button type="button" class="close" data-dismiss="alert">
                                               <span aria-hidden="true">&times;</span>
                                               <span class="sr-only">Close</span>
                                           </button> {{ $type }}
                                       </div>
                                   @endforeach
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group" style="padding-left:15px;">
                                   <input name="percentage" class="form-control" placeholder="Deduction Percentage %"
                                     value="{{ $getDeduction->deduction_percentage }}"     onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" >
                                   @foreach($errors->get('percentage') as $percent)
                                       <div class="alert alert-danger my-alert" role="alert">
                                           <button type="button" class="close" data-dismiss="alert">
                                               <span aria-hidden="true">&times;</span>
                                               <span class="sr-only">Close</span>
                                           </button> {{ $percent }}
                                       </div>
                                   @endforeach
                               </div>
                           </div>
                           <div class="col-md-4 text-center">
                               <input type="hidden" name="deduction_id" value="{{ $getDeduction->id }}">
                               <button type="submit" name="update_deduction" value="updated" class="btn btn-block btn-info">
                                   <i class="fa fa-pencil-square-o fa-left" aria-hidden="true"></i>
                                   Update Deduction
                               </button>
                           </div>
                       </form>
                   </div>
                   </div>
               </div>
           </div>
       </div>
@endsection