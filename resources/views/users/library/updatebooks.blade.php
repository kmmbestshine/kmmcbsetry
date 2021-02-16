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
                <form class="form-horizontal" role="form" method="post" action="{{route('update.library')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Update Books</strong></h3>
                            <div class="text-right">
                                <a href="{{route('user.bookCategory')}}" class="btn btn-primary btn-rounded">Category</a>&nbsp;&nbsp;&nbsp;
                                <a href="{{route('user.issue.book')}}" class="btn btn-primary btn-rounded">Issue Book</a>&nbsp;&nbsp;&nbsp;
                                <a href="{{route('return.book')}}" class="btn btn-info btn-rounded">Return Book</a>&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Acc No</label>
                                        <div class="col-md-9">
                                            <input type="text" name="book_no" class="form-control" value = "{{$books->book_no}}">
                                            <input type="hidden" name="oldbook_no" class="form-control" value = "{{$books->book_no}}">
                                            @foreach($errors->get('book_no') as $book_no)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $book_no }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Title</label>
                                        <div class="col-md-9">
                                        <input type="text" name="book_name" class="form-control" value = "{{$books->book_name}}"/>
                                        @foreach($errors->get('book_name') as $book_name)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $book_name }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Author Name</label>
                                        <div class="col-md-9">
                                        <input type="text" name="auth_name" class="form-control" value = "{{$books->auth_name}}"/>
                                        @foreach($errors->get('auth_name') as $authname)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $authname }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Year of Publication</label>
                                        <div class="col-md-9">
                                        <input type="text" maxlength="4" placeholder="Year" name="pub_date" class="form-control" value = "{{$books->publish_year}}"/>
                                        @foreach($errors->get('pub_date') as $p_date)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $p_date }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Purchase Date</label>
                                        <div class="col-md-9">
                                            <input type="date" name="pdate" class="form-control" value = "{{$books->purchase_date}}">
                                            @foreach($errors->get('pdate') as $pdate)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $pdate }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Subject</label>
                                        <div class="col-md-9">
                                            <input type="text" name="subject" class="form-control" value = "{{$books->book_subject}}" readonly>
                                            <input type="hidden" name="oldsubject_id" class="form-control" value = "{{$books->newsubject_id}}" >
                                            <select name="subject_id" class="form-control">
                                                <option value="">Select Subject</option>
                                                @foreach($subjects as $subject)
                                                    <option value="{{ $subject->id }}">{{ $subject->book_subject }}</option>
                                                @endforeach
                                            </select>
                                            @foreach($errors->get('subject_id') as $subject_id)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $subject_id }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="col-md-3 control-label">Book Category</label>
                                    <div class="col-md-9">
                                        <input type="text" name="categoryname" class="form-control" value = "{{$books->category}}" readonly>
                                        <input type="hidden" name="oldcategory_id" class="form-control" value = "{{$books->newcategory_id}}" >
                                        <select class="form-control"  name="category">
                                            <option value="">Choose Category</option>
                                            @foreach($categories as $cate)
                                                <option value="{{$cate->id}}">{{$cate->category}}</option>
                                            @endforeach
                                        </select>
                                        @foreach($errors->get('category') as $category)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $category }}
                                                </div>
                                            @endforeach
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="col-md-3 control-label">Publisher’s Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="pub_name" class="form-control" value = "{{$books->publisher_name}}">
                                        @foreach($errors->get('pub_name') as $pub_name)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $pub_name }}
                                                </div>
                                            @endforeach
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="col-md-3 control-label">Price <small>(MRP)</small></label>
                                    <div class="col-md-9">
                                        <input type="text" name="price" class="form-control" value = "{{$books->price}}">
                                        @foreach($errors->get('price') as $price)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $price }}
                                                </div>
                                            @endforeach
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">No. of Books</label>
                                        <div class="col-md-9">
                                            <input name="no_of_books" class="form-control" value = "{{$books->no_of_books}}">
                                            @foreach($errors->get('no_of_books') as $nobook)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $nobook }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="col-md-3 control-label">Vendors Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="vendor_name" class="form-control" value = "{{$books->vendor_name}}">
                                        @foreach($errors->get('vendor_name') as $vendor_name)
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> {{ $vendor_name }}
                                                </div>
                                            @endforeach
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                            <br/>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="col-md-5 pull-right">
                                        <input type="hidden" name="book_category" class="form-control" value="{{$books->id}}">
                                            <button type="submit" class="btn btn-info btn-block">Update Book</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                        </div>  
                    </div>
                </form>
            </div>
        </div>
        
       
       
        
    <!--------------  End  ---------------> 
    </div>
@endsection