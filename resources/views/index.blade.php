<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>校友会投票</title>
    <link rel="stylesheet" href="{{ url('/css/spectre.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/spectre-exp.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/spectre-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/style.css') }}" />
    <style>
        .column {
            margin: 10px 0 0;
        }
    </style>
</head>
<body>



<div class="container index_con">

    <center>
        <h4 style="margin: 1.2rem 0 0; font-size: 1.2rem;">校友会投票认证</h4>
    </center>

    <div class="columns" style="text-align: center;">
        <div class="column col-9 col-xs-12">
            <div class="empty login-empty">
                <div class="empty-icon logo">
                    <!-- <i class="icon icon-people"></i> -->
                    <img src="{{ url('/avatar/logo.png') }}" alt="">
                </div>

                <p class="empty-subtitle">投票系统认证</p>

                @if (session('status'))
                    <div class="toast toast-error" style="margin-bottom: 10px;">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ url('/check') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-input" type="text" name="name" id="name" placeholder="姓名" />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" style="margin-top: 1.6rem; width: 100%;">登陆</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
