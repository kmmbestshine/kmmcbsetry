@extends('users.layouts.default')
@section('title', 'Gallery')
@section('cram')
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li class="active">Gallery</li>
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
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>All Gallries</center></h3>
                            <div class="text-right">
                                <a href="{{route('user.gallery')}}" class="btn btn-info btn-rounded">Add Gallery</a>
                            </div>                              
                        </div>
                        <div class="panel-body">
                            <div style="overflow: auto">
                        <table style="border: 1px solid black" class="table datatable table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Event</th>
                                        <th>Date</th>
                                        <th>Images</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($galleries as $key => $gallery)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $gallery->event }}</td>
                                            <td>{{ $gallery->date }}</td>
                                            <td>
                                                <div class="row" id="my-images">
                                                    @foreach($gallery->hasManyImages as $images)
                                                        <div class="col-md-3">
                                                            <img src="{{url($images->image)}}" alt="Snow" class="img-thumbnail" width="100px" height="100px">
                                                        </div>
                                                    @endforeach
                                                    <!-- The image zoomed in will be put inside the tag below, you should keep it in your HTML file in order to show your images -->
                                                <div class="modal"></div>
                                                </div>
                                                
                                            </td>
                                            <td><a href="{{route('edit.gallery', $gallery->id)}}" class="btn btn-info">Edit</a></td>
                                            <td><a href="{{route('delete.gallery', $gallery->id)}}" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
    </div>
<style>
   .modal {
    display: none;
    background: #000;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: .8;
}

.modal .modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -120px;
    margin-left: -150px;
    color: #fff;
}

.modal img, .modal span {
    z-index: 10;
}
   </style>
   <script>
   var images = document.querySelectorAll('#my-images img'),
    modal = document.querySelector('.modal');

// Loops through the all the images selected...
images.forEach(function (image) {
    // When the image is clicked...
    image.addEventListener('click', function(event) {
        modal.innerHTML = '<div class="modal-content"><img src="' + event.target.src + '"><br><span>' + event.target.alt + '</span></div>';
        modal.style.display = 'block';
    });
});

// When the user clicks somewhere in the "modal" area it automatically closes itself
modal.addEventListener('click', function () {
    this.style.display = 'none';
});
   </script>
@endsection