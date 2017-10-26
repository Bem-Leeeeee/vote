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
            -webkit-box-ordinal-group: x;
        }
        .columns{
            -webkit-flex-direction: inherit;
            -moz-flex-direction: inherit;
            -ms-flex-direction: inherit;
            -o-flex-direction: inherit;
            flex-direction: inherit;
            -webkit-flex-wrap: wrap;
            -moz-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            -o-flex-wrap: wrap;
            flex-wrap: wrap;
            display: -webkit-flex;
        }
    </style>
</head>
<body>



<div class="container list-content">
    <center>
      <div class="logo" style="margin: 1.2rem 0 0.5rem;">
        <img src="{{ url('/avatar/logo.png') }}" alt="">
      </div>
        <h1 style="margin: 0.5rem 0 0.5rem; font-size: 1rem; font-family:'微软雅黑';font-weight: 100;">深圳技师学院校友会</h1>
        <h6 style="font-family:'微软雅黑';font-weight: 100;">第一届会员代表大会第一次全体会议选票</h6>
        <!-- <small class="label" style="margin-bottom: 0.6rem;">投票者： {{ session('name') }}</small> -->
    </center>
    <div class="columns" style="text-align: center;">

        @if (session('status'))
            <div class="column col-12">
                <div class="toast toast-error" style="margin-bottom: 10px;">
                    {{ session('status') }}
                </div>
            </div>
        @endif

        @foreach($voteCount as $type=>$count)
                <div class="column col-6">
                    <a href="{{ url('/vote/'.$type) }}" class="btn super-btn">{{ $transform[$type] }}

                        @if($count == 1)
                            {{--<button class="btn btn-link btn-action">--}}
                            {{--<i class="icon icon-check"></i>--}}
                            {{--</button>--}}
                            <img class="finish green" src="{{ url('/avatar/finish.png') }}" alt="">
                        @else
                            <img class="finish gray" src="{{ url('/avatar/finish.png') }}" alt="">
                        @endif
                    </a>

                </div>
        @endforeach
    </div>
</div>
</body>
</html>
