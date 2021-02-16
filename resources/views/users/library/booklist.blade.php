@extends('users.layouts.default')
@section('title', 'Library')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li class="active">Library</li>
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
    <!------- updated 28-9-2017 by priya -------->
    
    <div class="page-content-wrap">
        
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> 
                       
                            <h3 class="panel-title"><center>View Books</center></h3>
                             <div class="text-right">
                                <a href="{{route('user.library.index')}}" class="btn btn-info btn-rounded">Back</a>&nbsp;&nbsp;&nbsp;
                            </div>
                        
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="{{route('list.book.lib')}}" method="post">
                            {!! csrf_field() !!}
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="book_category">
                                        <option value="">Select Book Category</option>
                                        <option value="all">All Category</option>
                                        @foreach($categories as $cate)
                                            <option value="{{$cate->id}}">{{$cate->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4  ">
                            <div class="form-group">
                                <div class="col-md-10 pull-right">
                                    <button type="submit" class="btn btn-info btn-block">Get Books</button>
                                </div>
                            </div>          
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @if($books)
        <div class="row">
            <div class="col-md-12">
                <h3 class="panel-title"><center>View Books - {{$category}} Category</center></h3>
                <div class="panel panel-info">
                    <div class="panel-body">
                        <div style="overflow: scroll;">
                            <table class="table datatable table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Acc No</th>
                                    <th>Book Title</th>
                                    <th>Subject</th>
                                    <th>Author Name</th>
                                    <th>Publisher Name</th>
                                    <th>Price</th>
                                    <th>Availability</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($books as $key => $book)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $book->book_no }}</td>
                                        <td>{{ $book->book_name }}</td>
                                        <td>{{ $book->subject }}</td>
                                        <td>{{ $book->auth_name }}</td>
                                        <td>{{ $book->publisher_name }}</td>
                                        <td>{{ $book->price }}</td>
                                        <td>
                                            <!-- @if($book->available=='0')
                                                Available
                                            @else
                                                Not Available
                                            @endif -->
                                            @if($book->available == '0')
                                                @if($book->issued_books  > 0)
                                                {{ $book->no_of_books - $book->issued_books  }} / {{ $book->no_of_books }}
                                                @else
                                                {{ $book->no_of_books }}
                                                @endif
                                                Available
                                            @else
                                                Not Available
                                            @endif
                                        </td>
                                        
                                        <td>
                                            <a href="{{route('edit.books', $book->id)}}" class="btn btn-info">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{route('deleteBook', $book->id)}}" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
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
        @else
            <center><h2>No Books Found!!!</h2></center>
        @endif
        
    <!--------------  End  ---------------> 
    </div>
@endsection