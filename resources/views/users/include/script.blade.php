</div>      

<script type="text/javascript" src="{{url('users/js/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('users/js/plugins/jquery/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{url('users/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- START THIS PAGE PLUGINS-->        
 <script type='text/javascript' src="{{url('users/js/plugins/icheck/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{url('users/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{url('users/js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>

<script type="text/javascript" src="{{url('users/js/plugins/morris/raphael-min.js')}}"></script>
<script type="text/javascript" src="{{url('users/js/plugins/morris/morris.min.js')}}"></script>       
<script type="text/javascript" src="{{url('users/js/plugins/rickshaw/d3.v3.js')}}"></script>
<script type="text/javascript" src="{{url('users/js/plugins/rickshaw/rickshaw.min.js')}}"></script>
<script type='text/javascript' src="{{url('users/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script type='text/javascript' src="{{url('users/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>                
<script type='text/javascript' src="{{url('users/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>                
<script type="text/javascript" src="{{url('users/js/plugins/owl/owl.carousel.min.js')}}"></script>                 

<script type="text/javascript" src="{{url('users/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>    

<script type="text/javascript" src="{{url('users/js/plugins/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('users/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{url('users/js/plugins/dropzone/dropzone.min.js')}}"></script>
 <!-- <script type="text/javascript" src="{{url('users/js/plugins/fileinput/fileinput.min.js')}}"></script>   -->
<!-- END THIS PAGE PLUGINS-->        

<!-- START TEMPLATE -->
<script type="text/javascript" src="{{url('users/js/settings.js')}}"></script>
<script type="text/javascript" src="{{url('users/js/plugins.js')}}"></script>        
<script type="text/javascript" src="{{url('users/js/actions.js')}}"></script>
<script type="text/javascript" src="{{url('users/js/demo_dashboard.js')}}"></script>
<script type="text/javascript" src="{{url('users/js/school.js')}}"></script>
<script type="text/javascript" src="{{url('users/js/canvasjs.min.js')}}"></script>

<script type="text/javascript" src="{{url('assets/js/main.js')}}"></script>
<script type="text/javascript">

var seriesData = [[], [], []];
var random = new Rickshaw.Fixtures.RandomData(8);

for (var i = 0; i < 8; i++) {
 random.addData(seriesData);
}

var rlc = new Rickshaw.Graph({
 element: document.getElementById("charts-lines"),
 renderer: 'line',
 min: 50,
 series: [{color: "#33414E", data: seriesData[0], name: 'New York'},
     {color: "#1caf9a", data: seriesData[1], name: 'London'},
     {color: "#B64645", data: seriesData[2], name: 'Tokyo'}]
});

rlc.render();

var hoverDetail = new Rickshaw.Graph.HoverDetail({graph: rlc});
</script>     
</body>
</html>
