@extends('users.layouts.default')
@section('title', 'Section')
    @section('cram')
        <div class="page-content-wrap">
            <br/><br/>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">    
                            <h3 class="panel-title">Sections</h3>    
                            <div class="text-right">
                                <div class="text-right">
                                <a href="{{route('export.section')}}" class="btn btn-info btn-rounded">Export To Excel</a>
                            </div>
                            </div>                      
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Section</th>
                                        <th>Class Id</th>
                                        <th>Class</th>
                                        <th>Subjects</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sections as $section)
                                        <tr>
                                            <td>{{ $section['id'] }}</td>
                                            <td>{{ $section['section'] }}</td>
                                            <td>{{ $section['class_id'] }}</td>
                                            <td>{{ $section['class'] }}</td>
                                            <td>{{ $section['subjects'] }}</td>
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