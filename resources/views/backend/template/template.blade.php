
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- header.blade.php -->
     @include('backend.includes.header');

    <!-- info.blade.php -->
    @include('backend.includes.info');

    <!-- css.blade.php -->
    @include('backend.includes.css');

  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('backend.includes.leftpanel');
    
    <!-- ########## END: LEFT PANEL ########## -->
    
    
    <!-- ########## START: HEAD PANEL ########## -->
     @include('backend.includes.headpanel');
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
     @include('backend.includes.rightpanel');
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
     
     <!-- main body section start -->
     @yield('body');
     <!-- main body section end  -->

      <!-- footer.blade.php -->
      @include('backend.includes.footer');

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
   
   <!-- scripts.blade.php -->
   @include('backend.includes.scripts');
   
  </body>
</html>
