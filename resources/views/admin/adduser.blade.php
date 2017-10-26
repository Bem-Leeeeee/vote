@extends('admin.component.base')

@section('content')

    @if (session('status'))
        <div class="toast toast-error" style="margin-bottom: 10px;">
            {{ session('status') }}
        </div>
    @endif


<form action="{{ url('/admin/adduser') }}" method="post">
    {{csrf_field()}}
    <div class="columns col-oneline flextainer">
        <div class="column col-6 col-xs-6">
            <div class="has-icon-left">
                <input class="form-input" type="text" placeholder="姓名" name="name">
                <i class="form-icon icon icon-arrow-right"></i>
            </div>
        </div>
    </div>
    <div class="columns col-oneline">
        <div class="column col-12 col-xs-12">
            <div class="empty-action">
                <button class="btn btn-primary" type="submit">添加</button>
            </div>
        </div>
    </div>

</form>
@endsection
