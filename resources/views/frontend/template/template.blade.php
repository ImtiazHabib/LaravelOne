<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- metas.blade.php -->
        @include('frontend.includes.metas')
   
    <!-- topscript.blade.php -->
        @include('frontend.includes.topscript')


    <!-- css.blade.php -->
        @include('frontend.includes.css')


    </head>

    <body data-spy="scroll" data-target=".navbar-default" data-offset="100">
       
       @yield('body');

            <!--Footer-->
            
        <!-- footer.blade.php -->
        @include('frontend.includes.footer')

                   </div> 
        </div>

        <!-- script.blade.php -->
        @include('frontend.includes.script')

       </body>
</html>

