<!DOCTYPE html>
<html>
<head>
    <title> Pesquisa de satisfação </title>
    <link rel="stylesheet" type="text/css" href="/third_party/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    @stack("headers")
</head>

<body>
    <div class="container">
        @include("base.top_nav_bar")
        <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$panel_title or ''}}</h3>
                    </div>
                    <div class="panel-body">
                        @include("base.side_nav_bar")
                        <div class='col-md-9'>
                            <div class="container-fluid">
                                @yield('content')
                            </div>  
                        </div>
                    </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="/third_party/jquery/jquery.js"></script>
<script type="text/javascript" src="/third_party/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/third_party/jquery/jquery.toaster.js"></script>

<script type="text/javascript">
    $(function(){
        @if(Session::get("msg_txt") && Sessin::get("msg_title"))
            $.toaster({ priority : "{{Session::get('msg_type')}}",
                        title : "{{Session::get('msg_title')}}",
                        message : "{{Session::get('msg_txt')}}",
                       });
        @endif

    });
</script>

@stack("scripts")
</html>



