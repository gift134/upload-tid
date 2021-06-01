@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Site Content
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>        
        <li class="active"><span>{{ ucwords($pagename)}}</span></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ ucwords($pagename)}}</h3>

                   
                </div>
                <!-- /.box-header -->
               
               
                <!-- Display Validation Errors -->
                @include('includes.admin.flash-message')
                 <!-- form start -->
                <form action="{{ route('updatepage',$pagename) }}" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>

                    <div class="box-body">
                        <p class="alert alert-info">Don't Change anything between [] if any.</p>
                        <div class="fields-group">
                            @forelse($cms as $k => $data)
                            <div class="form-group">
                                <label for="site_name" class="col-sm-2 control-label">{{ str_replace('_', ' ', $data->page_text_key) }}</label>
                                <div class="col-sm-8">
                                    <textarea class="textarea ckeditor" placeholder="Content " style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required="" id="{{ $data->page_text_key }}" name="{{ $data->page_text_key }}">{!! $data->page_text !!}</textarea>
                                </div>
                            </div>
                            @empty
                            @endforelse
                           
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