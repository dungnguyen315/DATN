@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục bài viết
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-category-post')}}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên danh mục bài viết</label>
                                        <input type="text" name="cate_post_name" onkeyup="ChangeToSlug();" id="slug" class="form-control"  placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Slug</label>
                                        <input type="text" name="cate_post_slug" class="form-control" id="convert_slug" placeholder="slug">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả danh mục bài viết</label>
                                        <textarea style="resize: none" rows="5" name="cate_post_desc" class="form-control" id="ckeditor2" placeholder="Mô tả danh mục">

                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                        <select name="cate_post_status" class="form-control input-sm m-bot15">
                                            <option value="0">Ẩn</option>
                                            <option value="1">Hiển thị</option>

                                        </select>
                                    </div>

                                    <button type="submit" name="add_category_post" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>
</div>
@endsection
