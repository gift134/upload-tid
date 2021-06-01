@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Site Content
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>        
        <li class="active"><span>Deal Page</span></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Deal Page</h3>

                    
                </div>
                <!-- /.box-header -->
               
               
                <!-- Display Validation Errors -->
                @include('includes.admin.flash-message')
                 <!-- form start -->
                <form action="{{ route('updatedealpg') }}" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>

                    <div class="box-body">

                        <div class="fields-group">
                            <div class="form-group">
                                <label for="site_name" class="col-sm-2 control-label">Top Banner Content </label>
                                <div class="col-sm-8">
                                    <textarea class="textarea ckeditor" required="" placeholder="Content " style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required="" id="deal_pg" name="top_content">{!! Helper::cmstext('deal_pg','DEAL_BANNER_TEXT') !!}</textarea>
                                </div>
                            </div>
                           
                        </div>

                         <div class="fields-group">
                            <div class="form-group">
                                <label for="site_name" class="col-sm-2 control-label">Dtails Page Top Banner Content </label>
                                <div class="col-sm-8">
                                    <textarea class="textarea ckeditor" required="" placeholder="Content " style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required="" id="deal_detail_pg" name="deal_detail_top_content">{!! Helper::cmstext('deal_detail_pg','DEAL_DETAILS_BANNER_TEXT') !!}</textarea>
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