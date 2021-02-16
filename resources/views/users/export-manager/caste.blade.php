@extends('users.layouts.default')
@section('title', 'Caste')
    @section('cram')
        <div class="page-content-wrap">
            <br/><br/>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Castes</center></h3>
                            <div class="text-right">
                                <a href="{{route('export.caste')}}" class="btn btn-info btn-rounded">Export To Excel</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Caste</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($castes as $caste)
                                        <tr>
                                            <td>{{ $caste->id }}</td>
                                            <td>{{ $caste->caste }}</td>
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