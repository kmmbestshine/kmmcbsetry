@extends('users.layouts.default')
@section('title', 'Session')
    @section('cram')

        <div class="page-content-wrap">
            <br/><br/>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Sessions</center></h3>
                            <div class="text-right">
                                <a href="{{route('export.session')}}" class="btn btn-info btn-rounded">Export To Excel</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Session</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sessions as $key => $session)
                                        <tr>
                                            <td>{{ $session->id }}</td>
                                            <td>{{ $session->session }}</td>
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