
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <title>ICO | Change Password</title>
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('public/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
 
                <div class="panel-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    <form class="form-horizontal" method="POST" action="" id="user-password-form" name="user-password-form">
                        {{ csrf_field() }}
 
                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">Current Password</label>
 
                            <div class="col-md-6">
                                <input id="current-password" type="password" class="form-control" name="current-password" required>
 
                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">New Password</label>
 
                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>
 
                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group">
                            <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>
 
                            <div class="col-md-6">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" name="change_pass" id="change_pass" class="btn btn-primary">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 <script src="{{ asset('public/js/jquery-3.1.1.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
     var CONF = {baseurl: '{{url('/')}}'};
     TOOLS = {};
     TOOLS.Loader = '<i class="fa fa-cog fa-spin" aria-hidden="true"></i>';

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
     $('#change_pass').click(function () {
        var _this = $(this);
        TOOLS.dt = $(this).html();
        if ($("#user-password-form").valid()) {
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: CONF.baseurl + '/update_password',
                data: $("#user-password-form").serialize(),
                beforeSend: function () {
                    _this.html(TOOLS.Loader).attr('disabled', true);
                },
                success: function (response) {

                    _this.html(TOOLS.dt).removeAttr('disabled');

                    if (response.status == 'SUCC') {

                        alert(response.message);
                        window.setTimeout(function () {
                            window.location = CONF.baseurl+'/dashboard';
                        }, 1000);
                    }
                    else {
                        alert(response.message);
                    }

                },
                complete: function () {
                    _this.html(TOOLS.dt).removeAttr('disabled');
                }

            });
        }
    });
});
    
</script>
</body>

</html>
