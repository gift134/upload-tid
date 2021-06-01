@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        CMS 
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li> 
        <li><i class="fa fa-database"></i><span>CMS</span></li>      
        <li class="active"><i class="fa fa-bars"></i><span>cms</span></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">

                    <h3 class="box-title"></h3>

                    <div class="pull-right">
                        

                    </div>

                    <span>
                        <a class="btn btn-sm btn-primary grid-refresh"><i class="fa fa-refresh"></i> Refresh</a>
                    </span>

                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <!-- Display Validation Errors -->
                    @include('includes.admin.flash-message')
                    <table class="table table-hover">
                        
                        <thead>
                             <tr>                                
                                <th>ID</th>
                                <th>Page</th>
                                <th>Content</th>
                                <th>Status</th>  
                                <th>Action</th>                             
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($cmsdata as $k => $data)
                            <tr>                                
                                <td>{{ $k +1 }}</td>
                                <td>{{ $data->heading }}</td>
                                <td>{!! $data->content !!}</td>
                                <td><span class="label label-success">Active</span></td>      
                                <td>
                                    <a href="{{ route('cms.edit',$data->id) }}"> <i class="fa fa-edit"></i></a>                                    
                                </td>                          
                            </tr>
                            @empty
                            <tr class="odd">
                                <td valign="top" colspan="4" class="dataTables_empty">No matching records found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="box-footer clearfix">
                    Showing <b>{{ $cmsdata->firstItem() }}</b> to <b>{{ $cmsdata->lastItem() }}</b> of <b>{{ $cmsdata->total() }}</b> entries

                    @if(!$cmsdata->isEmpty())
                    {{ $cmsdata->links() }}
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->
@endsection