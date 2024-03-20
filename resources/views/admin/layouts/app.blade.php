<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Header -->
        @include('admin.layouts.header')
	</head>



	<body class="no-skin">

		<!-- Navbar -->
		@include('admin.layouts.navbar')


		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>



            <!-- sidebar -->
            @include('admin.layouts.sidebar')   



            {{-- page body  --}}
			<div class="main-content">
                @yield('content')
			</div>




            {{-- footer  --}}
			<div class="footer">
                @include('admin.layouts.footer')
			</div>




			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div>




        <!-- Javascript -->
        @include('admin.layouts.js')

	</body>
</html>























