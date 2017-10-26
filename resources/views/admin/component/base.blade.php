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
        @media (min-width: 768px){
            .container {
                width: 750px;
            }
        }
        @media (min-width: 992px){
            .container {
                width: 970px;
            }
        }
        @media (min-width: 1200px){
            .container {
                width: 1170px;
            }
        }
        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
    </style>
</head>
<body>
<div id="adminApp" class="container">
    <header class="navbar" style="margin-top: 30px; margin-bottom: 30px;">
        <section class="navbar-section">
            <a href="#" class="btn btn-link">投票系统后台管理</a>
            {{--<a href="#" class="btn btn-link">Examples</a>--}}
        </section>
        <section class="navbar-center">
            <div class="logo">
              <img src="{{ url('/avatar/logo.png') }}" alt="Spectre.css">
            </div>
        </section>
        {{--<section class="navbar-section">--}}
            {{--<a href="#" class="btn btn-link">Twitter</a>--}}
            {{--<a href="#" class="btn btn-link">GitHub</a>--}}
        </section>
    </header>

    <div class="columns">
        <div class="column col-2 col-xs-12">
            <ul class="nav">
                <li class="nav-item active">
                    <a href="{{ url('/admin/switch') }}" class="form-icon">投票开关</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/adduser') }}">添加选举人</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/users') }}">管理选举人</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/addelector') }}">添加被选举人</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/electors') }}">管理被选举人</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/vote/result/director') }}">投票结果</a>
                </li>
            </ul>
        </div>
        {{--style="background: #f8f9fa;">--}}
        <div class="column col-10 col-xs-12">
            <div class="empty">
                <div class="empty-icon">
                    <i class="icon icon-people"></i>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
</div>


<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
  ]) !!};
</script>
<script src="{{ url('/js/jquery.min.js') }}"></script>
<script src="{{ url('/js/vue.js') }}"></script>
<script src="{{ url('/js/axios.min.js') }}"></script>
<script type="application/javascript">

    axios.defaults.headers.common = {
        'X-CSRF-TOKEN': window.Laravel.csrfToken,
        'X-Requested-With': 'XMLHttpRequest'
    };

    var adminApp = new Vue({
        el: '#adminApp',
        data: {
            state: '',
            width: 100,
            transform: 0
        },
        mounted: function(){
          //open
          if($('#state').text() == 'open'){
            this.state = false
          }else{
            this.state = true
          }
        },
        methods: {
            deleteUser: function (id) {
                axios({
                    method: 'post',
                    url: '/admin/vote/deluser/' + id
                })
                .then(function (response) {
                        if (response.data.code == 301) {
                            window.location.href = response.data.url
                        }
                        console.log('error --- ' + response);
                })
                .catch(function (error) {
                        console.log(error);
                });
            },
            delElector: function (id) {
                axios({
                    method: 'post',
                    url: '/admin/vote/delelector/' + id
                })
                .then(function (response) {
                        if (response.data.code == 301) {
                            window.location.href = response.data.url
                        }
                        console.log('error --- ' + response);
                })
                .catch(function (error) {
                        console.log(error);
                });
            },
            alocked: function () {
                //item.state = !item.state;
                    let state = $('#checkbox').is(':checked')
                    axios({
                        method: 'post',
                        url: '/admin/vote/switch',
                        data: {
                          state : state
                        }
                    })
                    .then(function (response) {
                            console.log(response);
                    })
                    .catch(function (error) {
                            console.log(error);
                    });
            },
            delAllRec: function () {
                axios({
                    method: 'post',
                    url: '/admin/vote/delAllRec'
                })
                .then(function (response) {
                    if (response.data.code == 301) {
                        alert('删除成功');
                    }
                })
                .catch(function (error) {
                        console.log(error);
                });
            },
            delCurUserRec: function (id) {
                axios({
                    method: 'post',
                    url: '/admin/vote/delCurUserRec/' + id
                })
                .then(function (response) {
                    if (response.data.code == 301) {
                        alert('删除成功');
                    }
                })
                .catch(function (error) {
                        console.log(error);
                });
            },
            delCurElectorRec: function (id) {
                axios({
                    method: 'post',
                    url: '/admin/vote/delCurElectorRec/' + id
                })
                .then(function (response) {
                    if (response.data.code == 301) {
                        alert('删除成功');
                    }
                })
                .catch(function (error) {
                        console.log(error);
                });
            },
            delCurUserTypeRec: function (id, type) {
                axios({
                    method: 'post',
                    url: '/admin/vote/delCurUserTypeRec/' + id + '/' + type
                })
                .then(function (response) {
                    if (response.data.code == 301) {
                        alert('删除成功');
                    }
                })
                .catch(function (error) {
                        console.log(error);
                });
            }
        },
        computed: {
            checked: function () {
                return this.state ? false : true
            },
        }
    })
</script>
</body>
</html>
