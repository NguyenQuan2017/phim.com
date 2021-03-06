@extends('admin/master/master')
@section('content')
<div class="wrapper-content ">
  <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
              <div class="row">
                <div><h5>LIST SESSION</h5></div>
                <a href="{{url('admin/seasion/add')}}" class=" col-md-offset-10 col-md-1 btn btn-primary">ADD</a>
                </div>
              </div>
              
              <div class="ibox-content collapse in">
                <div class="widgets-container">
                  <div >
                    <table id="example" class="table  responsive nowrap table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th style="width: 10px;">STT</th>
                          <!-- <th>NAME FILM</th> -->
                          <th>SESSION</th>
                          <th style="width: 100px">ACTION</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php $stt=1; ?>
                        @foreach($seasion as $item)
                        <tr>
                          <td>{{$stt++}}</td>
                          <!-- <td>System Architect</td> -->
                          <td>{{$item['seasion']}}</td>
                           <td> <a href="{{url('admin/seasion/edit',$item['id'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> EDIT</a> <a href="{{url('admin/seasion/delete',$item['id'])}}" class="btn btn-danger confirm"><i class="glyphicon glyphicon-trash "></i> DELETE</a>  </td>
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
