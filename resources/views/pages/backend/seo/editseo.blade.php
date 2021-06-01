@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Seo
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ url('/admin/seo') }}"><i class="fa fa-bars"></i> <span>Seo</span></a></li>
        <li class="active"><i class="fa fa-bars"></i><span>Edit Seo</span></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Seo</h3>

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
                <form action="{{ route('seo.update',$seodata->id) }}" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>
                    {{ method_field('PUT') }}
                    <div class="box-body">

                        <div class="fields-group">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Page Name</label>
                                <div class="col-sm-8">
                                    {!! ucwords(str_replace(' pg', '', str_replace('_', ' ', $seodata->page_name))) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Meta Title</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="title" id="title" placeholder="Meta Title" value="{{ $seodata->title }}" required />

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Meta Description</label>
                                <div class="col-sm-8">
                                    <textarea class="textarea" placeholder="Meta Description " style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="metadesc" name="metadesc" required="">{!! $seodata->metadesc !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Meta Keyword(s)</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="keyword" id="keyword" placeholder="Meta Keyword(s)" value="{{ $seodata->keyword }}" required />

                                    </div>
                                    <p>Comma separated list of keywords</p>
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
