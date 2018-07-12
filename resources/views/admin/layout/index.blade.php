<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Trang Quản Trị dành cho trang web của tôi">
      <meta name="author" content="">
      <title>Trang Quản Trị</title>
      <!-- Define default CSS path (you will run into CSS error without this) -->
      <base href="{{ asset('') }}">
      <!-- Bootstrap Core CSS -->
      <!--Open Sans Font [ OPTIONAL ]-->
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
      <!--Bootstrap Stylesheet [ REQUIRED ]-->
      <link href="admin_assets/css/bootstrap.min.css" rel="stylesheet">
      <!--Nifty Stylesheet [ REQUIRED ]-->
      <link href="admin_assets/css/nifty.min.css" rel="stylesheet">
      <!--Nifty Premium Icon [ DEMONSTRATION ]-->
      <link href="admin_assets/css/demo/nifty-demo-icons.min.css" rel="stylesheet">
      <!--=================================================-->
      <!--Pace - Page Load Progress Par [OPTIONAL]-->
      <link href="admin_assets/plugins/pace/pace.min.css" rel="stylesheet">
      <script src="admin_assets/plugins/pace/pace.min.js"></script>
      <!--Demo [ DEMONSTRATION ]-->
      <link href="admin_assets/css/demo/nifty-demo.min.css" rel="stylesheet">
      <!--Custom scheme [ OPTIONAL ]-->
      <link href="admin_assets/css/themes/type-c/theme-navy.min.css" rel="stylesheet">
      <!--thêm css bang datatable -->
      <!--=================================================-->
      <!--Pace - Page Load Progress Par [OPTIONAL]-->
      <link href="admin_assets/plugins/pace/pace.min.css" rel="stylesheet">
      <script src="admin_assets/plugins/pace/pace.min.js"></script>
      <!--Demo [ DEMONSTRATION ]-->
      <link href="admin_assets/css/demo/nifty-demo.min.css" rel="stylesheet">
      <!--DataTables [ OPTIONAL ]-->
      <link href="admin_assets/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
      <link href="admin_assets/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">
      <!--hết thêm-->
      <!--Font Awesome [ OPTIONAL ]-->
      <link href="admin_assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!--===========them table footable======================================-->
      <!--Nifty Premium Icon [ DEMONSTRATION ]-->
      <link href="admin_assets/css/demo/nifty-demo-icons.min.css" rel="stylesheet">
      <!--Pace - Page Load Progress Par [OPTIONAL]-->
      <link href="admin_assets/plugins/pace/pace.min.css" rel="stylesheet">
      <!--FooTable [ OPTIONAL ]-->
      <link href="admin_assets/plugins/fooTable/css/footable.core.css" rel="stylesheet">
      <!--=================================================-->
      <!--Animate.css [ OPTIONAL ]-->
      <link href="admin_assets/plugins/animate-css/animate.min.css" rel="stylesheet">
      <!--=================================================-->
      <!--Nestable List [ OPTIONAL ]-->
      <link href="admin_assets/plugins/nestable-list/nestable-list.min.css" rel="stylesheet">
      <!--=================================================-->   
       
           <!-- Bootstrap Core CSS
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
       

   </head>
   <body>
      <div id="container" class="effect aside-float aside-bright mainnav-lg page">
         <div class="boxed">
            <!-- Header -->
            @include('admin.layout.header')
            @include('admin.layout.sidebar')    
            <!-- Page Content -->
            @yield('content')
            <!-- End Page Content -->
         </div>
      </div>
      <!-- /#wrapper -->
      <!-- SCROLL PAGE BUTTON -->
      <!--===================================================-->
      <button class="scroll-top btn">
      <i class="pci-chevron chevron-up"></i>
      </button>
      <!--===================================================-->
      <!--=================================================-->
      <script src="admin_assets/dist/js/extra.js"></script>
      <!--Demo script [ DEMONSTRATION ]-->
      <script src="admin_assets/js/demo/nifty-demo.min.js"></script>
      <!--Flot Chart [ OPTIONAL ]-->
      <script src="admin_assets/plugins/flot-charts/jquery.flot.min.js"></script>
      <script src="admin_assets/plugins/flot-charts/jquery.flot.categories.min.js"></script>
      <script src="admin_assets/plugins/flot-charts/jquery.flot.orderBars.min.js"></script>
      <script src="admin_assets/plugins/flot-charts/jquery.flot.tooltip.min.js"></script>
      <script src="admin_assets/plugins/flot-charts/jquery.flot.resize.min.js"></script>
      <!--Specify page [ SAMPLE ]-->
      <script src="admin_assets/js/demo/dashboard-2.js"></script>
      <!--them bang datatableeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->
      <script src="admin_assets/js/jquery.min.js"></script>
      <!--BootstrapJS [ RECOMMENDED ]-->
      <script src="admin_assets/js/bootstrap.min.js"></script>
      <!--NiftyJS [ RECOMMENDED ]-->
      <script src="admin_assets/js/nifty.min.js"></script>
      <!--Demo script [ DEMONSTRATION ]-->
      <script src="admin_assets/js/demo/nifty-demo.min.js"></script>
      <!--DataTables [ OPTIONAL ]-->
      <script src="admin_assets/plugins/datatables/media/js/jquery.dataTables.js"></script>
      <script src="admin_assets/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
      <script src="admin_assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
      <!--DataTables Sample [ SAMPLE ]-->
     <!-- <script src="admin_assets/js/demo/tables-datatables.js"></script> -->
      <!--=================================================-->
      <!--Icons [ SAMPLE ]-->
      <script src="admin_assets/js/demo/icons.js"></script>
      <!--dinh dang van ban-->
      <!-- <script type="text/javascript" language="javascript" src="admin_asset/ckeditor/ckeditor.js" ></script>
         <script type="text/javascript" language="javascript" src="admin_asset/ckeditor/ckfinder/ckfinder.js" ></script> -->
      <script src="{{ asset('admin_assets/ckeditor/ckeditor.js') }}"></script>
      <script src="{{ asset('admin_assets/ckfinder/ckfinder.js') }}"></script>
      <script>
         CKEDITOR.replace( 'editor', {
                 filebrowserBrowseUrl: '{{ asset('admin_assets/ckfinder/ckfinder.html') }}',
                 filebrowserImageBrowseUrl: '{{ asset('admin_assets/ckfinder/ckfinder.html?type=Images') }}',
                 filebrowserFlashBrowseUrl: '{{ asset('admin_assets/ckfinder/ckfinder.html?type=Flash') }}',
                 filebrowserUploadUrl: '{{ asset('admin_assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                 filebrowserImageUploadUrl: '{{ asset('admin_assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                 filebrowserFlashUploadUrl: '{{ asset('admin_assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
             } );
      </script>

      
      <!--===========them table footable======================================-->
      <!--FooTable [ OPTIONAL ]-->
      <script src="admin_assets/plugins/fooTable/dist/footable.all.min.js"></script>
      <!--FooTable Example [ SAMPLE ]-->
      <script src="admin_assets/js/demo/tables-footable.js"></script>
      <!--=================================================-->
      <!--Bootbox Modals [ OPTIONAL ]-->
      <script src="admin_assets/plugins/bootbox/bootbox.min.js"></script>

      <!--Modals [ SAMPLE ]-->
      <script src="admin_assets/js/demo/ui-modals.js"></script>
      <!--=================================================-->
    
     
      <!--Nestable List [ OPTIONAL ]-->
      <script src="admin_assets/plugins/nestable-list/jquery.nestable.js"></script>
      <!--=================================================-->
      <script>
         $(document).on('nifty.ready', function () {
             
         var updateOutput = function(e, target){
         var list   = e.length ? e : $(e.target), output = list.data('output');
         if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
         } else {
            output.val('JSON browser support required for this demo.');
         }
         },
         
         basicLog = $('#demo-nestable-logs'),
         handlerLog = $('#demo-nestable-handler-logs'),
         transparentLog = $('#demo-nestable-trans-logs');
         
         
         
         // Activate Nestable for basic list
         // =========================================
         $('#demo-nestable').nestable({group: 1}).on('change', function(e, target){
         updateOutput(e);
         
         // Print logs
         basicLog.val(basicLog.val() + 'Sort : ' + target.data('id') + "\n");
         });
         
         
         $('#demo-nestable-multi-1, #demo-nestable-multi-2').nestable({group: 2}).on('change', updateOutput);
         
         // Activate Nestable for handler list
         // =========================================
         $('#demo-nestable-handler').nestable({group: 3}).on('change', function(e, target){
         updateOutput(e);
         
         // Print logs
         handlerLog.val(handlerLog.val() + 'Sort : ' + target.data('id') + "\n");
         });
         
         $('#demo-nestable-theme-1').nestable({group: 10});
         $('#demo-nestable-theme-2').nestable({group: 11});
         $('#demo-nestable-theme-3').nestable({group: 12});
         $('#demo-nestable-theme-4').nestable({group: 13});
         
         // Output initial serialised data
         // =========================================
         updateOutput($('#demo-nestable').data('output', $('#demo-nestable-output')));
         updateOutput($('#demo-nestable-handler').data('output', $('#demo-nestable-handler-output')));
         updateOutput($('#demo-nestable-multi-1').data('output', $('#demo-nestable-multi-1-output')));
         updateOutput($('#demo-nestable-multi-2').data('output', $('#demo-nestable-multi-2-output')));
         
         
         });

      </script>	


  

 <script src="admin_assets/dist/js/extra.js"></script>


      
   </body>
</html>