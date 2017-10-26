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
<h1 class="main-result-title">投票结果展示页</h1>
<ul class="tab tab-block main-result-tab">
    <li class="tab-item @if($type == 'director') {{'active'}} @endif">
        <a href="{{ url('/result/director') }}">理事会理事</a>
    </li>
    <li class="tab-item @if($type == 'president') {{'active'}} @endif">
        <a href="{{ url('/result/president') }}">理事会会长</a>
    </li>
    <li class="tab-item @if($type == 'vpresident') {{'active'}} @endif">
        <a href="{{ url('/result/vpresident') }}">理事会副会长</a>
    </li>
    <li class="tab-item @if($type == 'secretary') {{'active'}} @endif">
        <a href="{{ url('/result/secretary') }}">理事会秘书长</a>
    </li>
    <li class="tab-item @if($type == 'supervisor') {{'active'}} @endif">
        <a href="{{ url('/result/supervisor') }}">监事会监事长</a>
    </li>
    <li class="tab-item @if($type == 'supervisors') {{'active'}} @endif">
        <a href="{{ url('/result/supervisors') }}">监事会监事</a>
    </li>
</ul>

<div class="resulttainer main-result-data">
  @foreach($users as $user)
  <div class="total-list-item">
      <p class="tile-title result-title">{{ $user->name }}</p>
      <div class="tile">
          <div class="tile-content">
              <ul class="info-list-item">
                <li>{{ $user->company }}</li>
                <li>{{ $user->department }}</li>
                <li>{{ $user->class }}</li>
              </ul>
              <div class="bar">
                  <!-- data-tooltip="25%" -->
                  <div class="inline">
                    <span>同意：</span><font>{{ $user->agree }} </font>
                    <!-- <span>同意：</span><div class="bar-item"  role="progressbar" style="width:{{ ($user->agree/139)*100  }}%;"><font><font>{{ $user->agree }} </font></font></div> -->
                  </div>
                  <div class="inline">
                    <span>不同意：</span><font>{{ $user->disagree }} </font>
                    <!-- <span>不同意：</span><div class="bar-item"  role="progressbar" style="width:{{ ($user->disagree/139)*100  }}%;"><font><font>{{ $user->disagree }} </font></font></div> -->
                  </div>
                  <div class="inline">
                    <span>弃权：</span><font>{{ $user->waiver }} </font>
                    <!-- <span>弃权：</span><div class="bar-item"  role="progressbar" style="width:{{ ($user->waiver/139)*100  }}%;"><font><font>{{ $user->waiver }} </font></font></div> -->
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endforeach
</div>

</body>
</html>
