@extends('users.layouts.default')
	@section('title', 'Add Professional Tax')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>
		<li><a href="{{route('viewPayrollIndex')}}">Payroll</a></li>
        <li class="active">Professional Tax</li>
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
						</div>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form" >
							<div class="row">
								<div class="col-md-6">
									<label class="col-md-3 control-label">Low Value</label>
									<div class="col-md-9 ">
										<input  type="text" class="form-control getLowSalary" name="from_value" placeholder="Enter the Low Salary Value">
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
												{{--onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"--}}>
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
										<input  class="form-control" name="ptax" placeholder="Enter the Tax Percentage">
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
											<button type="submit" class="btn btn-info" value="submitting" name="submit_pt">
												<i class="fa fa-floppy-o fa-left"></i>
												Add Tax
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
		@if(count($getProfessionalTax)>0)
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title"><center>View Professional Tax Details</center></h3>
							<ul class="panel-controls">
								<li>
									<a href="#" class="panel-collapse">
										<span class="fa fa-angle-down"></span>
									</a>
								</li>
								<li>
									<a href="#" class="panel-refresh">
										<span class="fa fa-refresh"></span>
									</a>
								</li>
								<li>
									<a href="#" class="panel-remove">
										<span class="fa fa-times"></span>
									</a>
								</li>
							</ul>
						</div>
						<div class="panel-body">
							<table class="table datatable">
								<thead>
								<tr>
									<th>#</th>
									<th>Low Value</th>
									<th>High Value</th>
									<th>Tax</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
								</thead>
								<tbody>
								@foreach($getProfessionalTax as $key => $ptax)
									<tr>
										<td>{{ $key+1 }}</td>
										<td>Rs.{{ number_format($ptax->from_salary) }}</td>
										<td>Rs.{{ number_format($ptax->to_salary) }}</td>
										<td>{{ $ptax->tax }}</td>
										<td>
											<a href="{{route('edit_prof_tax', $ptax->id)}}" class="btn btn-info">
												<span class="fa fa-pencil fa-left"></span>
												Edit
											</a>
										</td>
										<td>
											<a href="{{route('delete_prof_tax', $ptax->id)}}" class="btn btn-danger">
												<span class="fa fa-trash fa-left"></span>
												Delete
											</a>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		@endif
	</div>

@endsection