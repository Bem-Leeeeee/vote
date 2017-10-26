@extends('admin.component.base')

@section('content')

    @if (session('status'))
        <div class="toast toast-error" style="margin-bottom: 10px;">
            {{ session('status') }}
        </div>
    @endif


    <div class="form-group">
      <label class="form-switch">
        <p id="state" hidden="hidden">{{ $state }}</p>
        <input id="checkbox" type="checkbox" :checked="checked" v-on:click="alocked()">
        <i class="form-icon"></i> 投票开关
      </label>
    </div>
@endsection
