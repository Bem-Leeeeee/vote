@extends('admin.component.base')

@section('content')

@if (session('status'))
    <div class="toast toast-error" style="margin-bottom: 10px;">
        {{ session('status') }}
    </div>
@endif

<form action="{{ url('/admin/addelector') }}" method="post">
    {{csrf_field()}}
    <div class="columns col-oneline flextainer">
        <div class="column col-3 col-xs-3">
            <div class="has-icon-left">
                <input class="form-input" type="text" placeholder="姓名" name="name">
                <i class="form-icon icon icon-arrow-right"></i>
            </div>
        </div>
        <div class="column col-3 col-xs-3">
            <div class="has-icon-left">
                <input class="form-input" type="text" placeholder="公司及职务" name="company">
                <i class="form-icon icon icon-arrow-right"></i>
            </div>
        </div>
        <div class="column col-3 col-xs-3">
            <div class="has-icon-left">
                <input class="form-input" type="text" placeholder="系部" name="department">
                <i class="form-icon icon icon-arrow-right"></i>
            </div>
        </div>
        <div class="column col-3 col-xs-3">
            <div class="has-icon-left">
                <input class="form-input" type="text" placeholder="班级" name="class">
                <i class="form-icon icon icon-arrow-right"></i>
            </div>
        </div>
    </div>
    <div class="form-group">
        <select class="form-select" name="type">
            <option value="director">理事会理事</option>
            <option value="president">理事会会长</option>
            <option value="vpresident">理事会副会长</option>
            <option value="secretary">理事会秘书长</option>
            <option value="supervisor">监事会监事长</option>
            <option value="supervisors">监事会监事</option>
        </select>
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
