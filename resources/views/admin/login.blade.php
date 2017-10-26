@extends('admin.component.base')

@section('content')

    <p class="empty-subtitle">后台系统认证</p>

    @if (session('status'))
        <div class="toast toast-error" style="margin-bottom: 10px;">
            {{ session('status') }}
        </div>
    @endif
<form action="{{ url('/admin/login') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <input class="form-input" type="text" id="input-example-1" placeholder="admin" value="admin">
    </div>
    <div class="form-group">
        <input class="form-input" type="password" id="input-example-2" placeholder="密码" name="password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">登陆</button>
    </div>
</form>
@endsection