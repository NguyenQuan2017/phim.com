@extends('admin/master/master')
@section('content')
<div class="wrapper-content ">
  <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
              <div class="row">
                <div><h5>USER </h5></div>
              
                </div>
              </div>
              
              <div class="ibox-content collapse in">
                <div class="widgets-container">
                  <div >
                    <table id="example" class="table  responsive nowrap table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th style="width: 10px;">STT</th>
                          <th>USERNAME</th>
                          <th>NAME</th>
                          <th>EMAIL</th>
                          <th>AVATAR</th>
                            <th>LEVEL</th>
                          <th style="width: 100px">ACTION</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php $stt=1; ?>
                          @foreach($users as $item)
                        <tr>
                          <td>{{$stt++}}</td>
                          <td>{{$item['username']}}</td>
                          <th>{{$item['name']}}</th>
                          <td>{{$item['email']}}</td>
                          <td>{{$item['avatar']}}</td>
                          <td>{{$item['level']}}</td>
                           <td > <a href="{{url('admin/user/edit/'.$item['id'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> EDIT</a> <a href="{{url('admin/user/delete/'.$item['id'])}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash "></i> DELETE</a>  </td>
                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
@stop
