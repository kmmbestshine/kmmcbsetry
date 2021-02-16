@extends('users.layouts.default')
@section('title', 'Fee Frequency')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Fee Frequency</li>
    </ul>
    @endsection
    @section('contant')
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Fee Frequencies</h2>
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
                        <strong>Well done!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="page-content-wrap">
            <div class="row">
                <div class="gether-box col-md-12">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="">Fee Collection</a>
                            <a href="">Fee Structure</a>
                            <a href="">Fee Frequency</a>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
           <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <form class="form-horizontal" role="form" method="post" action="{{route('post.frequency')}}">
                            {!! csrf_field() !!}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="frequency" class="form-control" placeholder="Frequency">
                                </div>
                                @foreach($errors->get('frequency') as $frequency)
                                    <div class="alert alert-danger">{{ $frequency }}</div>
                                @endforeach
                            </div>
                            <div class="col-md-4 text-center">
                                <button type="submit" class="btn btn-info">Add Frequency</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Blood Groups</center></h3>
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
                                        <th>Frequency</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($frequencies as $key => $frequency)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $frequency->frequency }}</td>
                                            <td>
                                                <a href="{{route('edit.frequency', $frequency->id)}}" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{route('delete.frequency', $frequency->id)}}" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
@endsection