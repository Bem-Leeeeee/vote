@extends('admin.component.base')

@section('content')
@foreach($user as $user)
<form action="{{ url('/admin/vote/editElector/'.$user->id) }}" method="post">
    {{csrf_field()}}
    <div class="columns col-oneline flextainer">
        <div class="column col-3 col-xs-3">
            <div class="has-icon-left">
                <input class="form-input" type="text" placeholder="姓名" name="name" value="{{ $user->name }}">
                <i class="form-icon icon icon-arrow-right"></i>
            </div>
        </div>
        <div class="column col-3 col-xs-3">
            <div class="has-icon-left">
                <input class="form-input" type="text" placeholder="公司及职务" name="company" value="{{ $user->company }}">
                <i class="form-icon icon icon-arrow-right"></i>
            </div>
        </div>
        <div class="column col-3 col-xs-3">
            <div class="has-icon-left">
                <input class="form-input" type="text" placeholder="系部" name="department" value="{{ $user->department }}">
                <i class="form-icon icon icon-arrow-right"></i>
            </div>
        </div>
        <div class="column col-3 col-xs-3">
            <div class="has-icon-left">
                <input class="form-input" type="text" placeholder="班级" name="class" value="{{ $user->class }}">
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
  <!-- <div class="column col-3 col-md-6">
      <button type="button" class="btn btn-primary btn-action btn-lg" v-on:click="delCurElectorRec('{{ $user->id }}')">
        <i class="icon icon-delete"></i>
      </button>
      <p>删除当前被选举人投票记录</p>
    </div> -->
</form>
@endforeach
@endsection
