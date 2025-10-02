@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Slider
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-slider')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên slider</label>
                                        <input type="text" name="slider_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên slider">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hình ảnh slider</label>
                                        <input type="file" name="slider_image" class="form-control" id="exampleInputEmail1" placeholder="Nhập hình ảnh ">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả</label>
                                        <textarea style="resize: none" rows="5" name="slider_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả thương hiệu">

                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                        <select name="slider_status" class="form-control input-sm m-bot15">
                                            <option value="0">Ẩn</option>
                                            <option value="1">Hiển thị</option>

                                        </select>
                                    </div>

                                    <button type="submit" name="add_slider" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>
</div>
@endsection
