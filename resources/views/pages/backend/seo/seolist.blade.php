@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Seo
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>
        <li class="active"><i class="fa fa-bars"></i><span>Seo</span></li>
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
                        <div class="btn-group pull-right" style="margin-right: 10px">
                            {!! Form::open(array('route' => 'seo.index','method'=>'GET','id'=>'srchfrm')) !!}
                            <input class="form-control" style="float: right; width: 200px;" type="text" name="seacrhby" placeholder="Search" value="{{ $seacrhby }}">
                            {!! Form::close() !!}
                        </div>



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
                                <th>Name</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Keyword</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($seodata as $k => $data)
                            <tr>
                                <td>{{ $k +1 }}</td>
                                <td>{!! ucwords(str_replace(' pg', '', str_replace('_', ' ', $data->page_name))) !!}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ Helper::splittext($data->metadesc,50) }}</td>
                                <td>{{ $data->keyword }}</td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <a href="{{ route('seo.edit',$data->id) }}"> <i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr class="odd">
                                <td valign="top" colspan="6" class="dataTables_empty">No matching records found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="box-footer clearfix">

                    @if(!$seodata->isEmpty())
                    Showing <b>{{ $seodata->firstItem() }}</b> to <b>{{ $seodata->lastItem() }}</b> of <b>{{ $seodata->total() }}</b> entries
                    {{ $seodata->links() }}
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
