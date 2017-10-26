@extends('admin.component.base')

@section('content')
    <table class="table table-striped table-hover text-center">
      <thead>
      <tr>
          <th>姓名</th>
          <th>操作</th>
      </tr>
      </thead>
    </table>
    <div class="tabletainer">
      <table class="table table-striped table-hover text-center table-data">
          <!-- <thead>
          <tr>
              <th>姓名</th>
              <th>操作</th>
          </tr>
          </thead> -->
          <tbody>
          @foreach($users as $user)
              <tr class="active">
                  <td>{{ $user->name }}</td>
                  <td>
                      <button class="btn btn-primary btn-action btn-sm" v-on:click="deleteUser('{{ $user->id }}')">
                          <i class="icon icon-cross"></i>
                      </button>
                      <a href="{{ url('/admin/vote/editUser/'.$user->id) }}" class="btn btn-primary btn-action btn-sm">
                          <i class="icon icon-people"></i>
                      </a>
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>
    </div>
    <div class="column col-md-12">
        <button class="btn btn-primary btn-action btn-lg delete-btn" v-on:click="delAllRec()">
          <i class="icon icon-delete"></i>
        </button>
        <p class="tips">删除所有选举人投票记录</p>
    </div>

    {{--<div class="modal modal-sm active">--}}
        {{--<div class="modal-overlay"></div>--}}
        {{--<div class="modal-container" role="document">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="btn btn-clear float-right" aria-label="Close"></button>--}}
                {{--<div class="modal-title h5">删除人员</div>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<div class="content">--}}
                    {{--你确定要删除xxx吗?--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="modal-footer">--}}
                {{--<button class="btn btn-primary">确定</button>--}}
                {{--<button class="btn btn-link">对不起</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
