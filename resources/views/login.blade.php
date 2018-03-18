
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <title>ICO | Login</title>
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('public/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name" style="font-size: 90px;">Panel</h1>

            </div>
            <h3>Welcome to the dashboard</h3>
            <p>Perfectly designed and precisely prepared admin panel.
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="" method="post" name="login_form" id="login_form">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password"  name="password" id="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="button" class="btn btn-primary block full-width m-b" name="login" id="login">Login</button>
            </form>
<!--             <p class="m-t"> <small>ICO app framework base on Bootstrap 3 &copy; 2014</small> </p>
 -->        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('public/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
    var CONF = {baseurl: '{{url('/')}}'};
    TOOLS = {};
    TOOLS.Loader = '<i class="fa fa-cog fa-spin" aria-hidden="true"></i>';

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $(document).on('click', '#login', function () {
        var _this = $(this);
        TOOLS.dt = _this.html();
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: CONF.baseurl + '/post_login',
                data: $("#login_form").serialize(),
                beforeSend: function () {
                    _this.html(TOOLS.Loader).attr('disabled', true);
                },
                success: function (response) {
                    if (response.status == 'SUCC') {
                         window.location.href = CONF.baseurl+"/dashboard";
                    }
                    else {
                       alert(response.message);
                    }

                },
                complete:function() {
                     _this.html(TOOLS.dt).removeAttr('disabled');
                }

            });

    });
    </script>
</body>

</html>
