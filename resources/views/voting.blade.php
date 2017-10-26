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
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
      ]) !!};
    </script>
</head>
<body>

<div id="VotingApp" style="position: absolute; width: 100%; height: 100%;">
    <div class="panel-header text-center">
        <a href="{{ url('/vote') }}" class="btn btn-action btn-primary btn-lg circle page-back"><i class="icon icon-arrow-left"></i></a>
        <!-- <figure class="avatar avatar-lg">
            <img src="{{ url('/avatar/logo.png') }}" alt="Avatar">
        </figure> -->
        <div class="panel-title vote-panel-title h5 mt-10">深圳技师学院校友会</div>
        <div class="panel-title vote-panel-title h5 mt-10">第一届{{ $typename }}选票</div>
        <!-- <div class="panel-title vote-panel-title h5 mt-10">{{ $typename }}</div> -->
        <!-- <div class="panel-title vote-panel-title h5 mt-10">深圳技师学院校友会</div> <div class="panel-title vote-panel-title h5 mt-10">第一届理事会理事选票   理事会会长   理事会副会长    监事会监事长</div> -->
        <div class="panel-subtitle" style="color: red;" >
            {{--<div v-show="isVote" style="display: none;">你将投给: @{{ name }}</div>--}}
            {{--<div v-show="! isVote">请选择</div>--}}
        </div>
        <div class="form-autocomplete">
            {{--<label class="chip">--}}
            {{--<img src="img/avatar-1.png" class="avatar avatar-sm" alt="Thor Odinson" />--}}
            {{--Thor Odinson--}}
            {{--<a href="#" class="btn btn-clear" aria-label="Close" role="button"></a>--}}
            {{--</label>--}}

            <!-- autocomplete real input box -->

        </div>
    </div>    <!--头-->

    <div class="container flex-content">
        <div class="columns" style="text-align: center;">
            <div class="column col-12 col-xs-12">
                <div class="panel" style="height: 100%;width: 100%;">
                    <div class="panel-body" style="padding: 0;overflow: inherit;">
                        @foreach($users as $key => $user)
                                <div class="tile tile-centered">
                                    <div class="tile-content">
                                        <div class="tile-title big">{{ $user->name }}</div>
                                    </div>
                                    <div class="tile-action" v-on:click.once="clickVoteBar('{{ $count }}', '{{ $username }}')">
                                        <!-- <p class="linfo">电子信息技术系</p> -->
                                        <p class="linfo">{{ $user->class }}</p>
                                        <p class="linfo">{{ $user->company }}</p>
                                        <label class="form-radio">
                                            <input type="radio" name="{{ $user->name }}" v-model="state.{{ $user->name }}" value="agree">
                                            <i class="form-icon"></i> 同意
                                        </label>
                                        <label class="form-radio">
                                            <input type="radio" name="{{ $user->name }}" v-model="state.{{ $user->name }}" value="disagree">
                                            <i class="form-icon"></i> 不同意
                                        </label>
                                        <label class="form-radio">
                                            <input type="radio" name="{{ $user->name }}" v-model="state.{{ $user->name }}" value="waiver">
                                            <i class="form-icon"></i> 弃权
                                        </label>
                                    </div>
                                </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>    <!--body-->
    <div class="panel-footer">   <!--脚-->
        <button class="btn btn-primary btn-block" type="submit" :disabled="disabled" v-on:click="vote">投票</button>
    </div>
</div>


{{--<script src="{{ url('/js/jquery.min.js') }}"></script>--}}
<script src="{{ url('/js/vue.js') }}"></script>
<script src="{{ url('/js/axios.min.js') }}"></script>
<script type="application/javascript">
    var VotingApp = new Vue({
        el: '#VotingApp',
        data: {
            isCheck: false,
            isVote: false,
            type: '{{ $type }}',
            showSearch: false,
            text: '',
            items: [],
            width: 100,
            name: '',
            transform: 0,
            state: {},
            arrlength: '',
            count: ''
        },
        mounted: function() {
          axios.defaults.headers.common = {
              'X-CSRF-TOKEN': window.Laravel.csrfToken,
              'X-Requested-With': 'XMLHttpRequest'
          };
        },
        methods: {
            clickVoteBar: function (count, name) {
                this.arrlength = 1
                // console.log(this.state)
                for (var length in this.state)
                {
                    this.arrlength++
                }
                // console.log(this.arrlength)
                this.count = count
                if(this.arrlength == this.count){
                    this.isVote = true
                }
                this.showSearch = false
                this.name = name
            },
            test: function() {
                alert('1')
            },
            vote: function () {
              this.state = JSON.stringify(this.state)
              // alert(JSON.stringify(this.state.length))
              // console.log(this.stateLen)
                var r=confirm("你将确认选票")
                if (r==true)
                {
                    axios({
                        method: 'post',
                        url: '/vote/'+this.type+'/'+this.name,
                        data: {
                          state: this.state
                        }
                    })
                    .then(function (response) {
                            //console.log(response);
                            if (response.data.code == 301) {
                                window.location.href=response.data.url
                            }else if (response.data.code == 304){
                                alert("投票已完成,无法更改。如非本人投票请联系管理员。")
                                window.location.href=response.data.url
                            }else if(response.data.code == 305){
                                alert("选择未完成，请重新检查后选票。")
                                window.location.href=response.data.url
                            }
                    })
                    .catch(function (error) {
                        alert(error)
                        console.log(error)
                    });
                }else{
                    location.reload()
                }
            },
            focus: function () {
                this.showSearch = true
                this.width = 83
                this.transform = 1
                console.log('focus')
            },
            blur: function () {
                this.showSearch = false
                console.log('blur')
            },
            cancel: function() {
                this.width = 100
                this.transform = 0
                this.showSearch = false
            }
        },
        computed: {
            disabled: function () {
                return this.isVote ? false : true
            },
            noResult: function() {
                if (this.items.length > 0) {
                    return false
                }
                return true
            }
        }
    })
</script>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
</script>
<script type="text/javascript">
var scroll = false
$("body").on("touchstart", function(e) {
    // e.preventDefault();
    startX = e.originalEvent.changedTouches[0].pageX,
    startY = e.originalEvent.changedTouches[0].pageY;
});
$(".flex-content").scrollTop(10);
if( $(".flex-content").scrollTop()>0 ){
    scroll = true
}else{
    $(".panel-header").removeClass("dropup");
    scroll = false
}

if (scroll) {
  $("body").on("touchmove", function(e) {
      // e.preventDefault();
      moveEndX = e.originalEvent.changedTouches[0].pageX,
      moveEndY = e.originalEvent.changedTouches[0].pageY,
      X = moveEndX - startX,
      Y = moveEndY - startY;

      if ( Math.abs(Y) > Math.abs(X) && Y > 0) {
          // alert("top 2 bottom");
          $(".panel-header").removeClass("dropup");
          // $(".panel-footer").removeClass("dropdown");
      }
      else if ( Math.abs(Y) > Math.abs(X) && Y < 0 ) {
          // alert("bottom 2 top");
          $(".panel-header").addClass("dropup");
          // $(".panel-footer").addClass("dropdown");
      }
  });
}
</script>
</body>
</html>
