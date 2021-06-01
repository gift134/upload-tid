@extends('layouts.main')
@section('content')


<section id="search_intro" class="d-flex align-items-center">

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-8">
                <h1 style="margin-bottom:50px;">Here are the list of Cities in {{$state_name}}</h1>
                <h2>Enter your zip code to see providers in your area.</h2>
                    <div>
                        <form class="form-inline" action="{{ url('search') }}">
                            <div class="form-box">
                            @csrf
                            <input type="number" id="zip" placeholder="Enter your Zip code" name="zip">
                            <button type="submit">Search</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

    </div>

  </section>

 <section>
    <div class="container">

        <h2>There are {{$state_cities->Total()}} City by Zip Code in {{$state_name}}.</h2>
        <h3>Find the available providers in your location.</h3>

<!-- table -->
  <table>
  <!-- head -->
  <thead>
    <tr>
      <th>Zip Code</th>
	        <th>City</th>
            <th>ABBR</th>
            <th></th>
    </tr>
  </thead>

  <!-- body -->
  <tbody>

   @foreach ($state_cities as $list_content)
    <tr>
     <td>
               <h3>{{$list_content->zip_code}}   </h3>
              </td>
			  <td>{{$list_content->city}}</td>
			  <td>{{ $list_content->state_abbr }}</td>
              <td><a href="{{ URL::to('/providers',array(str_replace(' ', '-', $state_name),str_replace(' ', '-', $list_content->city ),$list_content->zip_code))}}" class="btn btn-primary btn-lg active" >View Details</a></td>
    </tr>
   @endforeach
  </tbody>
</table>

{{ $state_cities->links() }}

</div>

  </section>


  @endsection
