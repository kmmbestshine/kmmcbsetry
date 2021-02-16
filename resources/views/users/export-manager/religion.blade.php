@extends('users.layouts.default')
@section('title', 'Religion')
    @section('cram')
        <div class="page-content-wrap">
            <br/><br/>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Religion</center></h3>
                            <div class="text-right">
                                <a href="{{route('export.religion')}}" class="btn btn-info btn-rounded">Export To Excel</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Religion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($religions as $religion)
                                        <tr>
                                            <td>{{ $religion->id }}</td>
                                            <td>{{ $religion->religion }}</td>
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