@extends('admin_layout')
@section('admin_content')
 <div id="page-wrapper">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Nhà cung cấp</h1>
                            <?php
                            $message = Session::get('message');
                            if($message){
                              echo '<span class="text-alert">',$message,'</span>';
                              Session::put('message',null);
                             }
                              ?>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" action="{{URL::to('/save-nhacungcap')}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Tên nhà cung cấp</label>
                                                    <input class="form-control" name="ten_nhacungcap">
                                                </div>
                                                 <div class="form-group">
                                                    <label>Số điện thoại</label>
                                                    <input class="form-control" name="sdt_nhacungcap">
                                                </div>
                                                  <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" name="email_nhacungcap">
                                                </div>
                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <input type="file" name="hinh_nhacungcap">
                                                </div>
                                                <button type="submit" name="add_nhacungcap" class="btn btn-space btn-primary">Thêm nhà cung cấp</button>
                                            </form>
                                        </div>
@endsection