@extends('users.layouts.default')
@section('title', 'Library Report')
@section('cram')
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Report</li>
        <li class="active">Library</li>
    </ul>
@endsection
@section('contant')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Library Report</h2>
    </div>

    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading text-right">
                            <a href="{{route('user.report')}}" class="btn btn-info btn-rounded">Attendance</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{route('libraryReport')}}" class="btn btn-info btn-rounded">Library</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{route('studentsReport')}}" class="btn btn-info btn-rounded">Students</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            {{-- updated 14-10-2017 by priya--}}
                            <a href="{{route('analystReport')}}" class="btn btn-info btn-rounded">Students Analyst</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           {{-- <a href="{{route('teacherReport')}}" class="btn btn-info btn-rounded">Teachers Analyst</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            --}}{{-- end--}}
                            <a href="{{route('feeCollectionReport')}}" class="btn btn-info btn-rounded">Fee Collection</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- <a href="" class="btn btn-warning btn-rounded">Fee Amount</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="" class="btn btn-danger btn-rounded">Transport Fee</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="" class="btn btn-default btn-rounded">Other Fee</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="" class="btn btn-primary btn-rounded">Print Receipt</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="" class="btn btn-info btn-rounded">Pre Pay Slip</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Library Report Form</h3>
                        <!-- <div class="text-right">
                                    <a href="{{route('list.structure')}}" class="btn btn-info btn-rounded">View</a>
                                </div>  -->
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="get">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Category</label>
                                        <div class="col-md-11">
                                            <select name="category" class="form-control">
                                                <option value="">Select Category</option>
                                                <option value="0">All Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->category}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <button style="margin-top:20px" class="pull-right btn btn-info">Create Report</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @if(count($getCategoryBooks)>0)
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <!--<h3 class="panel-title">Report - {{$students['session']}}</h3>-->
                                <h3 class="panel-title">
                                    @if($categoryNo == 0)
                                        All Categories
                                    @else

                                        @foreach($getCategoryBooks as $key => $category)
                                        @endforeach
                                        {{ ucwords(trans($category->category)) }}'s
                                    @endif
                                    Library Report
                                </h3>
                                <div class="text-right">
                                    {{-- updated 14-10-2017 by priya
                                    <a href="{{route('download')}}" class="btn btn-info btn-rounded">Export</a>--}}
                                    <a href="{{route('reportDownload')}}" class="btn btn-info btn-rounded">Export</a>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Book No</th>
                                            <th>Book Category</th>
                                            <th>Book Name</th>
                                            <th>Author Name</th>
                                            <th>Publisher Name</th>
                                            <th>Purchase Date</th>
                                            <th>Total Quantity</th>
                                            <th>Issued Books</th>
                                            <th>Available Books</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($getCategoryBooks as $key => $book)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $book->book_no }}</td>
                                                <td>{{ $book->category }}</td>
                                                <td>{{ $book->book_name }}</td>
                                                <td>{{ $book->auth_name }}</td>
                                                <td>{{ $book->publisher_name }}</td>
                                                <td>{{ date('d-m-Y',strtotime($book->purchase_date)) }}</td>
                                                <td>{{ $book->no_of_books }}</td>
                                                <td>
                                                    {{ $book->issued_books }}
                                                </td>
                                                <td>
                                                    @if($book->available == '0')
                                                        {{ $book->no_of_books - $book->issued_books  }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>

                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th colspan="4"></th>
                                            <th colspan="3"><center>Total</center></th>
                                            <th>{{ $totalNoBooks }}</th>
                                            <th>{{ $totalIssue }}</th>
                                            <th>{{ $totalAvailability}}</th>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <center><h2>No Datas Found!!!</h2></center>
        @endif

    </div>
@endsection