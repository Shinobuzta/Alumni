<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('assets/css/bootstrap.css') }}
        {{ HTML::style('assets/css/justified-nav.css') }}
        {{ HTML::style('assets/css/homepage.css') }}
        {{ HTML::style('assets/font-awesome/css/font-awesome.css') }}
    </head>
    <body>
    	@include('site_objects.home.head')

      <br>
		@include('site_objects.home.tab-navi')        
        <br>
        
      
    <div class="col-lg-9">
            <div class="well">
              <form class="bs-example form-horizontal">
                <fieldset>
                  <legend><h2><span class="label label-default">
                  	<i class="fa fa-th-large"></i>&nbsp;Photos</span></h2></legend>
                  	<div class="col-md-12">
  						<a href="#" class="thumbnail">
                    		<img src="assets/img/hello.jpg" class="img-thumbnail">
                    	</a>
 					</div>
 					<div class="col-md-4">
  						<a href="#" class="thumbnail">
                    		<img src="assets/img/im.jpg" class="img-thumbnail">
                    	</a>
                    </div>
					<div class="col-md-4"> 					
  						<a href="#" class="thumbnail">
                    		<img src="assets/img/im.jpg" class="img-thumbnail">
                    	</a>
 					</div>
 					<div class="col-md-4">
  						<a href="#" class="thumbnail">
                    		<img src="assets/img/im.jpg" class="img-thumbnail">
                    	</a>
 					</div>
                  
                </fieldset>
              </form>
            </div>
          </div>
        </div>
        

        @include('site_objects.home.sidebar')
        </div>
   		@include('site_objects.home.footer')
  		

		{{ HTML::script('assets/js/admin-navigation.js') }}
        {{ HTML::script('assets/js/alumni-navigation.js') }}
        {{ HTML::script('assets/js/jquery.js') }}
		{{ HTML::script('assets/js/bootstrap.min.js') }}
		{{ HTML::script('assets/js/holder.js') }}
    </body>
</html>