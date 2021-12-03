  
  
  <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/plugins/jquery/jquery.min.js"></script>
    
    <script src="{{asset('../assets/plugins/popper/popper.min.js')}}"></script>
    <script src="{{asset('../assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('js/waves.js')}}"></script>
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <script src="{{asset('../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('../assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{asset('../assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('../assets/plugins/echarts/echarts-all.js')}}"></script>
    <script src="{{asset('../assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('../assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('../assets/plugins/moment/moment.js')}}"></script>
    <script src='{{asset('../assets/plugins/calendar/dist/fullcalendar.min.js')}}'></script>
    <script src="{{asset('../assets/plugins/calendar/dist/jquery.fullcalendar.js')}}"></script>
    <script src="{{asset('../assets/plugins/calendar/dist/cal-init.js')}}"></script>
    <script src="{{asset('../assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('../assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    
    <script src="{{asset('../assets/plugins/datatables/datatables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
   
    
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>