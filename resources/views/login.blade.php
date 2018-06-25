@include('head')
<div class="login-box">
    <div class="login-logo">
        <b>管理系统</b>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <form action="/login" method="post">
            <div class="form-group has-feedback">
                <input type="input" class="form-control flat" placeholder="Username" name="username" value="">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control flat" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4 col-md-offset-4">
                    <button type="submit" class="btn btn-primary btn-block flat">Login</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
@include('tail')
