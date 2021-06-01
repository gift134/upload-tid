@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Site Configurations 
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>        
        <li class="active"><span>Site Configurations</span></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Site Configurations</h3>

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
                <form action="{{ route('updateconfig') }}" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>

                    <div class="box-body">

                        <div class="fields-group">
                            <div class="form-group">
                                <label for="site_name" class="col-sm-2 control-label">Site Name</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="site_name" id="site_name" placeholder="Site Name" value="{{ $user->site_name }}" required />
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="site_email" class="col-sm-2 control-label">Site Email</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                        <input type="email" class="form-control email" name="site_email" id="site_email" placeholder="Site Email" value="{{ $user->site_email }}" required />
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="site_phone" class="col-sm-2 control-label">Site Phone Number</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" class="form-control phone" name="site_phone" id="site_phone" placeholder="Site Phone Number (444) 444-4444" value="{{ $user->site_phone }}" required />
                                        
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