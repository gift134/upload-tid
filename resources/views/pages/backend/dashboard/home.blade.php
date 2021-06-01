@extends('layout.app')

@section('content')
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        {{-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-cubes"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Providers</span>
              <span class="info-box-number">{{Helper::dashboard_count('provider')}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div> --}}
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-tags"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Blogs</span>
              <span class="info-box-number">{{ Helper::dashboard_count('blog') }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        {{-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-database"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Technology</span>
              <span class="info-box-number">{{Helper::dashboard_count('technology')}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div> --}}
        <!-- /.col -->
        {{-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-sliders"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Deals</span>
              <span class="info-box-number">{{Helper::dashboard_count('deal')}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div> --}}
        <!-- /.col -->
      </div>

      {{-- <div class="row">
        <!-- Left col -->
            <div class="col-md-12">

              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Most Popular Internet Providers</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                      <tr>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Status</th>
                      </tr>
                      </thead>
                      <tbody>
                      @forelse(Helper::most_popular_providers() as $k => $data)
                      <tr>
                        <td>
                          @if(!is_null($data->providerdetails->logo_file_name))
                            <a href="{{ URL::to('/provider',$data->providerdetails->slug) }}" target="_blank"><img src="{{asset('public/logos/'.$data->providerdetails->logo_file_name) }}" alt="{{ $data->providerdetails->name }}" style="
                          max-width: 150px;
                          height: auto;
                          "/ ></a>
                          @endif
                        </td>
                        <td>{{ $data->providerdetails->name }}</td>
                        <td>{{ $data->providerdetails->phone }}</td>
                        <td><span class="label label-success">{{ $data->providerdetails->status }}</span></td>
                      </tr>
                      @empty
                      <tr class="odd">
                          <td valign="top" colspan="4" class="dataTables_empty">No matching records found</td>
                      </tr>
                      @endforelse

                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="{{ url('admin/providers') }}" class="btn btn-sm btn-info btn-flat pull-right">View All Providers</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!-- /.box -->
            </div>
        <!-- /.col -->

      </div> --}}
        <!-- /.col -->

     {{-- <div class="row">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Most ISP Connected States</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Coverage</th>
                    <th>Avg Downlaod</th>
                    <th>Providers</th>
                  </tr>
                  </thead>
                  <tbody>
                  @forelse(Helper::most_isp_connected_states() as $k => $data)
                  <tr>
                    <td>
                      <a href="{{ URL::to('/search/state',array($data->abbr,$data->name)) }}" target="_blank">{{ $data->name }}</a>
                    </td>
                    <td>{{ $data->broadband_coverage }}</td>
                    <td>{{ $data->avg_download }}</td>
                    <td><span class="label label-success">{{ $data->providers }}</span></td>
                  </tr>
                  @empty
                  <tr class="odd">
                      <td valign="top" colspan="4" class="dataTables_empty">No matching records found</td>
                  </tr>
                  @endforelse

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="{{ url('admin/states') }}" class="btn btn-sm btn-info btn-flat pull-right">View All States</a>
            </div>
            <!-- /.box-footer -->

          </div>
        </div>

        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Providers by Technology's</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>No. Of provder(s)</th>
                    <th>status</th>
                  </tr>
                  </thead>
                  <tbody>
                  @forelse(Helper::most_popular_technologies() as $k => $data)
                  <tr>
                    <td>
                      {{ $k+1 }}
                    </td>
                    <td><a href="{{ URL::to('provider?tech=').$data->name}}" target="_blank">{{ $data->name }}</a></td>
                    <td>
                      {{ Helper::provider_by_technology($data->name) }}
                    </td>
                    <td><span class="label label-success">Active</span></td>
                  </tr>
                  @empty
                  <tr class="odd">
                      <td valign="top" colspan="4" class="dataTables_empty">No matching records found</td>
                  </tr>
                  @endforelse

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="{{ url('admin/providers') }}" class="btn btn-sm btn-info btn-flat pull-right">View All Providers</a>
            </div>
            <!-- /.box-footer -->

          </div>
        </div>


     </div>    --}}


    </section>
    <!-- /.content -->
@endsection

