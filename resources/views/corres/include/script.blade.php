        <script type="text/javascript" src="{{url('~admin/js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('~admin/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{url('~admin/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{url('~admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>        
        
        <script type="text/javascript" src="{{url('~admin/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>        
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;libraries=places"></script>
        <script type="text/javascript" src="{{url('~admin/js/plugins/fancybox/jquery.fancybox.pack.js')}}"></script>                

        <script type="text/javascript" src="{{url('~admin/js/plugins/rickshaw/d3.v3.js')}}"></script>
        <script type="text/javascript" src="{{url('~admin/js/plugins/rickshaw/rickshaw.min.js')}}"></script>
        
        <script type='text/javascript' src="{{url('~admin/js/plugins/knob/jquery.knob.js')}}"></script>
        
        <script type="text/javascript" src="{{url('~admin/js/plugins/daterangepicker/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{url('~admin/js/plugins/daterangepicker/daterangepicker.js')}}">
                
        </script>
        <script type="text/javascript" src="{{url('~admin/js/plugins/datatables/jquery.dataTables.min.js')}}"></script> 
        
        <script type='text/javascript' src="{{url('~admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script type='text/javascript' src="{{url('~admin/js/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js')}}"></script>
        
        <script type="text/javascript" src="{{url('~admin/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{url('~admin/js/demo.js')}}"></script>
        <script type="text/javascript" src="{{url('~admin/js/maps.js')}}"></script>        
        <script type="text/javascript" src="{{url('~admin/js/charts.js')}}"></script>
        <script type="text/javascript" src="{{url('~admin/js/actions.js')}}"></script>  
        <script type="text/javascript" src="{{url('~admin/js/table_plugin.js')}}"></script>  
        <script type="text/javascript">
        $(document).ready(function(){
            $("#userplan_change").on('change',function(){
                $("#Basic").hide();$("#Standard").hide();$("#Premium").hide();
                $("#Edit_plan").show(1000);
                var contents=$("#userplan_change").val();
                $("#editcontent").html('Edit '+  contents + ' plan options');
                $(".modal-title").html('Edit '+contents+ ' plan options');
                $("#"+contents).show();
                $("#usermanualplan").val('');
            });
            $("#Edit_plan").on('click',function(){

                $('#selectPlans').modal('show');
            });


        });
</script>