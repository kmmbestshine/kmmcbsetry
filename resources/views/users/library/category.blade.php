@extends('users.layouts.default')
@section('title', 'Book Category')
@section('cram')
<ul class="breadcrumb">
    <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
    <li><a href="">Library</a></li>
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
                <form class="form-horizontal" role="form" method="post" action="{{route('post.category')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Library</strong></h3>
                            <div class="text-right">
                                <a href="{{route('user.library.index')}}" class="btn btn-info btn-rounded">Back</a>&nbsp;&nbsp;&nbsp;
                               
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Book Category</label>
                                        <div class="col-md-4">
                                            <input type="text" name="category" class="form-control" placeholder="Ex.  Books, Journals, Newspapers, Magazines, etc.">
                                            @foreach($errors->get('category') as $book_no)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $book_no }}
                                                </div>
                                            @endforeach
                                        </div>
                                       <!-- <label class="col-md-2 control-label">Book Fine</label>
                                        <div class="col-md-4">
                                            <input type="number" name="fine" class="form-control" placeholder="Per Day">
                                            
                                        </div>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <br>
                                        <div class="col-md-5 pull-right">
                                            <button type="submit" class="btn btn-info btn-block">Add Book</button>
                                        </div>
                                </div>
                            </div>
                            <br/>
                            
                            
                        </div>  
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>category</center></h3>                                
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                      <!--  <th>Fine Per Day</th>-->
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $key=>$cat)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$cat->category}}</td>
                                           <!-- <td>{{$cat->fine}}</td>-->
                                            <td><a href="{{route('deleteCategory', $cat->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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