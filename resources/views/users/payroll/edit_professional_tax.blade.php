@extends('users.layouts.default')
	@section('title', 'Edit Professional Tax')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
		<li><a href="{{route('viewPayrollIndex')}}">Payroll</a></li>
		<li><a href="{{route('add_professional_tax')}}">Professional Tax</a></li>
        <li class="active">Edit</li>
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
						<h3 class="panel-title">
							<strong>Professional Tax</strong>
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
						<form class="form-horizontal" role="form" >
							<div class="row">
								<div class="col-md-6">
									<label class="col-md-3 control-label">Low Value</label>
									<div class="col-md-9 ">
										<input  type="text" class="form-control getLowSalary" name="from_value"
												value="{{ trim($getProfTax->from_salary) }}" placeholder="Enter the Low Salary Value">
										@foreach($errors->get('from_value') as $pfrom)
											<div class="alert alert-danger my-alert" role="alert">
												<button type="button" class="close" data-dismiss="alert">
													<span aria-hidden="true">&times;</span>
													<span class="sr-only">Close</span>
												</button> {{ $pfrom }}
											</div>
										@endforeach
									</div>
								</div>
								<div class="col-md-6">
									<label class="col-md-3 control-label">High Value</label>
									<div class="col-md-9 getHighSalary">
										<input  class="form-control getHighSalary" name="to_value" placeholder="Enter the High Salary Value"
												value="{{ trim($getProfTax->to_salary) }}"		{{--onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"--}}>
										@foreach($errors->get('to_value') as $pto)
											<div class="alert alert-danger my-alert" role="alert">
												<button type="button" class="close" data-dismiss="alert">
													<span aria-hidden="true">&times;</span>
													<span class="sr-only">Close</span>
												</button> {{ $pto }}
											</div>
										@endforeach
									</div>
									<div class="col-md-12 displayHighValue"></div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<label class="col-md-3 control-label">Prof Tax</label>
									<div class="col-md-9">
										<input  class="form-control" name="ptax" placeholder="Enter the Tax Percentage"
										value="{{ trim($getProfTax->tax) }}">
										@foreach($errors->get('ptax') as $pttax)
											<div class="alert alert-danger my-alert" role="alert">
												<button type="button" class="close" data-dismiss="alert">
													<span aria-hidden="true">&times;</span>
													<span class="sr-only">Close</span>
												</button> {{ $pttax }}
											</div>
										@endforeach
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-12 pull-right">
										<center>
											<input type="hidden" value="{{$getProfTax->id}}" name="prof_id">
											<button type="submit" class="btn btn-info" value="updating" name="submit_pt">
												<i class="fa fa-pencil-square-o fa-left"></i>
												Update Tax
											</button>
										</center>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection