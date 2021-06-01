@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Blog 
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>
        <li><a href="#"><i class="fa fa-blogger-b"></i> <span>Blog</span></a></li>
        <li><a href="{{ url('/admin/tag') }}"><i class="fa fa-bars"></i> <span>Tag</span></a></li>
        <li class="active"><i class="fa fa-bars"></i><span>Edit Tag</span></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Tag</h3>

                    <div class="box-tools">            
                        <div class="btn-group pull-right" style="margin-right: 10px">
                            <a class="btn btn-sm btn-info  form-history-back"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
               
               
                <!-- Display Validation Errors -->
                @include('includes.admin.flash-message')
                 <!-- form start -->
                <form action="{{ route('tag.update',$tagdata->id) }}" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>
                    {{ method_field('PUT') }}
                    <div class="box-body">

                        <div class="fields-group">
                            <div class="form-group">
                                <div class="row" style="margin-bottom:15px;">
                                <label for="name" class="col-sm-2 control-label">Tag Name</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="name" id="name" placeholder="Tag Name" value="{{ $tagdata->name }}" required />   
                                    </div>
                                </div>
                                </div>

                                <div class="row" style="margin-bottom:15px;">
                                <label for="name" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="meta_title" id="meta_title" placeholder="Meta Title" value="{{ $tagdata->meta_title }}" required />
                                    </div>
                                </div>
                                </div>

                                <div class="row" style="margin-bottom:15px;">
                                <label for="name" class="col-sm-2 control-label">Meta Description</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="meta_desc" id="meta_desc" placeholder="Meta Description" value="{{ $tagdata->meta_desc }}" required />
                                    </div>
                                </div>
                                </div>

                                <div class="row" style="margin-bottom:15px;">
                                <label for="name" class="col-sm-2 control-label">Meta Keyword</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="meta_keyword" id="meta_keyword" placeholder="Meta Keyword" value="{{ $tagdata->meta_keyword }}" required />
                                    </div>
                                </div>
                                </div>

                            </div>

                          
                        
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                        {{ csrf_field() }}
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                            <div class="btn-group pull-right">
                                <button type="submit" class="btn btn-info pull-right" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Submit">Submit</button>
                            </div>
                            <div class="btn-group pull-left">
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </div>

                    </div>

                    <!-- /.box-footer -->
                </form>
            </div>

        </div>
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->
@endsection
