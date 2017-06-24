@extends('admin/master/master')
@section('content')
<div class="wrapper-content ">
  <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
              <div class="row">
                <div><h5>LIST FILM</h5></div>
                <a href="{{url('admin/film/add')}}" class=" col-md-offset-10 col-md-1 btn btn-primary">ADD</a>
                </div>
              </div>
              
              <div class="ibox-content collapse in">
                <div class="widgets-container">
                  <div >
                    <table id="example" class="table  responsive nowrap table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th style="width: 10px;">STT</th>
                          <th>NAME</th>
                          <th>TITLE</th>
                          <th>CONTENT</th>
                          <th>IMAGES</th>
                          <th style="width: 100px">ACTION</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php $stt=1; ?>
                      @foreach($films as $item)
                        <tr>
                          <td>{{$stt++}}</td>
                          <td>{{$item['name_films']}}</td>
                          <td>{{$item['title']}}</td>
                          <td>{{$item['content']}}</td>
                          <td>{{$item['images']}}</td>
                           <td > <a href="{{url('admin/film/edit',$item['id'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> EDIT</a> <a href="{{ url('admin/film/delete',$item['id']) }}" class="btn btn-danger confirm"><i class="glyphicon glyphicon-trash " ></i> DELETE</a>  </td>
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
