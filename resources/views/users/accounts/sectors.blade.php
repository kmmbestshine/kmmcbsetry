@extends('users.layouts.default')
@section('title', 'Category')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Category</li>
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
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="form-horizontal" action="{{route('acc.add.storeSector')}}" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">@lang('Category Name')</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ (!empty($sector->name))?$sector->name:old('name') }}" placeholder="@lang('Category Name')" required>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="col-md-4 control-label">@lang('Category Type')</label>

                                <div class="col-md-6">
                                    <select  class="form-control" name="type">
                                        <option value="income">@lang('Income')</option>
                                        <option value="expense">@lang('Expense')</option>
                                    </select>

                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('type') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-1">
                                <button type="submit" class="btn btn-danger">@lang('Save')</button>
                                </div>
                                <div class="col-md-3">
                                <a href="{{route('accounts.index')}}" class="btn btn-info btn-lg">Back</a>
                        </div>
                            </div>
                             
                            </form>
            </div>
        </div>
        <div class="row">
                <div class="col-md-9">
                    <h3>@lang('All Created Category')</h3>
                    <table class="table table-data-div table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>@lang('S.No')</th>
                                <th>@lang('Category Name')</th>
                                <th>@lang('Type')</th>
                               <th>@lang('Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $j=1; ?>
                        @foreach ($sectors as $sector)
                            <tr>
                                 <td><?php echo  $j++ ?></td>
                                <td>{{$sector->name}}</td>
                                <td>{{$sector->type}}</td>
                               <td>
                                    <a href="{{url('accounts/delete-sector/'.$sector->id)}}" class="btn btn-danger btn-xs" role="button">@lang('Delete')</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

    

@endsection