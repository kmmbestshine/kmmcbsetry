@extends('users.layouts.default')
@section('title', 'Subject')
    @section('cram')
        <div class="page-content-wrap">
            <br/><br/>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Subjects</center></h3>
                            <div class="text-right">
                                <a href="{{route('export.subject')}}" class="btn btn-info btn-rounded">Export To Excel</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Subject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($subjects as $subject)
                                        <tr>
                                            <td>{{ $subject->id }}</td>
                                            <td>{{ $subject->subject }}</td>
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