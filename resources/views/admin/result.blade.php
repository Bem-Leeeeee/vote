@extends('admin.component.base')

@section('content')
    <ul class="tab tab-block">
        <li class="tab-item @if($type == 'director') {{'active'}} @endif">
            <a href="{{ url('/admin/vote/result/director') }}">理事会理事</a>
        </li>
        <li class="tab-item @if($type == 'president') {{'active'}} @endif">
            <a href="{{ url('/admin/vote/result/president') }}">理事会会长</a>
        </li>
        <li class="tab-item @if($type == 'vpresident') {{'active'}} @endif">
            <a href="{{ url('/admin/vote/result/vpresident') }}">理事会副会长</a>
        </li>
        <li class="tab-item @if($type == 'secretary') {{'active'}} @endif">
            <a href="{{ url('/admin/vote/result/secretary') }}">理事会秘书长</a>
        </li>
        <li class="tab-item @if($type == 'supervisor') {{'active'}} @endif">
            <a href="{{ url('/admin/vote/result/supervisor') }}">监事会监事长</a>
        </li>
        <li class="tab-item @if($type == 'supervisors') {{'active'}} @endif">
            <a href="{{ url('/admin/vote/result/supervisors') }}">监事会监事</a>
        </li>
    </ul>

    <div class="resulttainer">
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
    @if(count($users) > 0)
    <a href="{{ url('/admin/vote/export/'.$type) }}" class="btn btn-primary btn-action btn-lg delete-btn">
      <i class="icon icon-share"></i>
    </a>
    <p class="tips">导出excel</p>
    @endif
@endsection
