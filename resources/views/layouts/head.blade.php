<head>
<title>แผงควบคุม :: Farmaggie</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{ URL::asset('css/dashboard.css')}}" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='{{ URL::asset('//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Athiti&amp;subset=thai')}}' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{ URL::asset('css/font.css')}}" type="text/css"/>
<link href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="{{ URL::asset('js/jquery2.0.3.min.js')}}"></script>
<script src="{{ URL::asset('js/modernizr.js')}}"></script>
<script src="{{ URL::asset('js/jquery.cookie.js')}}"></script>
<script src="{{ URL::asset('js/screenfull.js')}}"></script>
<script>
  $(function () {
    $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

    if (!screenfull.enabled) {
      return false;
    }



    $('#toggle').click(function () {
      screenfull.toggle($('#container')[0]);
    });
  });
</script>
<!-- charts -->
<script src="{{ URL::asset('js/raphael-min.js')}}"></script>
<script src="{{ URL::asset('js/morris.js')}}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/morris.css')}}">
<!-- //charts -->
<!--skycons-icons-->
<script src="{{ URL::asset('js/skycons.js')}}"></script>
<!--//skycons-icons-->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/table-style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/basictable.css')}}" />
<script type="text/javascript" src="{{ URL::asset('js/jquery.basictable.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').basictable();

    $('#table-breakpoint').basictable({
      breakpoint: 768
    });

    $('#table-swap-axis').basictable({
      swapAxis: true
    });

    $('#table-force-off').basictable({
      forceResponsive: false
    });

    $('#table-no-resize').basictable({
      noResize: true
    });

    $('#table-two-axis').basictable();

    $('#table-max-height').basictable({
      tableWrapper: true
    });
  });
</script>
<!-- //tables -->
</head>
