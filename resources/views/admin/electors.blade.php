@extends('admin.component.base')

@section('content')
    <table class="table table-striped table-hover table_head">
      <thead>
      <tr>
        <th>姓名</th>
        <th>被选职位</th>
        <th>公司及职位</th>
        <th>系部</th>
        <th>班级</th>
        <th>操作</th>
      </tr>
      </thead>
    </table>
    <div class="tabletainer">
      <table class="table table-striped table-hover table_data">
          <tbody>
          @foreach($users as $user)
              <tr class="active">
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->typename }}</td>
                  <td>{{ $user->company }}</td>
                  <td>{{ $user->department }}</td>
                  <td>{{ $user->class }}</td>
                  <td>
                      <button class="btn btn-primary btn-action btn-sm" v-on:click="delElector('{{ $user->id }}')">
                          <i class="icon icon-cross"></i>
                      </button>
                      <a href="{{ url('admin/vote/editElector/'.$user->id) }}" class="btn btn-primary btn-action btn-sm">
                          <i class="icon icon-people"></i>
                      </button>
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
        <p class="tips">删除所有被选举人投票记录</p>
    </div>
@endsection
