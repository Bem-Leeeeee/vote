@extends('admin.component.base')

@section('content')
@foreach($user as $user)
<form action="{{ url('/admin/vote/editUser/'.$user->id) }}" method="post">
    {{csrf_field()}}
    <div class="columns col-oneline flextainer">
        <div class="column col-6 col-xs-6">
            <div class="has-icon-left">
                <input class="form-input" type="text" placeholder="姓名" name="name" value="{{ $user->name}}">
                <i class="form-icon icon icon-arrow-right"></i>
            </div>
        </div>
    </div>
    <div class="columns col-oneline">
        <div class="column col-12 col-xs-12">
            <div class="empty-action">
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
        </div>
    </div>
<div class="columns button-group">
  <div class="column col-4">
      <button type="button" class="btn btn-primary btn-action btn-sm" v-on:click="delCurUserTypeRec('{{ $user->id }}', 'director')">
        <i class="icon icon-delete"></i>
      </button>
      <p>删除"理事会理事"投票记录</p>
  </div>
  <div class="column col-4">
      <button type="button" class="btn btn-primary btn-action btn-sm" v-on:click="delCurUserTypeRec('{{ $user->id }}', 'president')">
        <i class="icon icon-delete"></i>
      </button>
      <p>删除"会长"投票记录</p>
  </div>
  <div class="column col-4">
      <button type="button" class="btn btn-primary btn-action btn-sm" v-on:click="delCurUserTypeRec('{{ $user->id }}', 'vpresident')">
        <i class="icon icon-delete"></i>
      </button>
      <p>删除"副会长"投票记录</p>
  </div>
  <div class="column col-4">
      <button type="button" class="btn btn-primary btn-action btn-sm" v-on:click="delCurUserTypeRec('{{ $user->id }}', 'secretary')">
        <i class="icon icon-delete"></i>
      </button>
      <p>删除"秘书长"投票记录</p>
  </div>
  <div class="column col-4">
      <button type="button" class="btn btn-primary btn-action btn-sm" v-on:click="delCurUserTypeRec('{{ $user->id }}', 'supervisor')">
        <i class="icon icon-delete"></i>
      </button>
      <p>删除"监事长"投票记录</p>
  </div>
  <div class="column col-4">
      <button type="button" class="btn btn-primary btn-action btn-sm" v-on:click="delCurUserTypeRec('{{ $user->id }}', 'supervisors')">
        <i class="icon icon-delete"></i>
      </button>
      <p>删除"监事"投票记录</p>
  </div>
  <div class="column col-4">
      <button type="button" class="btn btn-primary btn-action btn-sm" v-on:click="delCurUserRec('{{ $user->id }}')">
        <i class="icon icon-delete"></i>
      </button>
      <p>删除所有投票记录</p>
  </div>
</div>
</form>
@endforeach
@endsection
