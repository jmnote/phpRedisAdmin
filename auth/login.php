<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<form method='post' action='/auth/login_ok.php'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/latest/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
<style>
body { background: #f8f8f8; padding: 60px 0; }
.form-control { margin: 15px 0; }
</style>
</head>
<body>
<div class="container">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="panel-title">phpRedisAdmin</div>
            </div>
            <div class="panel-body">
                <form id="login-form">
                    <div>
                        <input type="text" class="form-control" name="user_id" placeholder="Service name" autofocus>
                    </div>
                    <div>
                        <input type="password" class="form-control" name="user_pw" placeholder="Password">
                    </div>
                    <div>
                        <button type="submit" class="form-control btn btn-primary">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
