@include('users.include.head')
<body>
<p style="position: fixed; right:5px; bottom:0px; z-index: 9999">V-1.0.5</p>
	@if(Route::currentRouteName() != 'user.feeCollection')
    <div class="page-container">
    @endif
    
    	@if(Auth::user()->type == 'school')   
			@include('users.include.navbar')
		@endif
		@if(Auth::user()->type == 'user_role')
			@include('users.include.userrolenav')
		@endif
		@if(Auth::user()->type == 'teacher')
			@include('users.include.teachernav')
		@endif			
		@yield('contant')
		@include('users.include.script')
		<script type="text/javascript">$('#myModal').modal('show')</script>
	</div>

</body>