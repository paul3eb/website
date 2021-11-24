@extends('layout')

@section('content')

<section class="text-gray-600 body-font">
    <h1 class="text-5xl pt-20 ml-12 font-medium title-font text-gray-900 mb-6">Our Division</h1>   
    <div class="container px-5 py-16 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">      
        <img src="{{asset('/images/organizationalchart.jpg')}}"   class="img-fluid" alt="" usemap="#Map"/>     
      </div>
    
  </div>
  
  <map name="Map" id="Map">
    <area shape="rect" coords="198,26,472,92" href="#" />
    <area shape="rect" coords="609,163,669,185" href="#" />
    <area shape="rect" coords="609,190,669,209" href="#" />
    <area shape="rect" coords="448,161,573,183" href="#" />
    <area shape="rect" coords="342,163,424,184" href="#" />
    <area shape="rect" coords="369,352,523,401" href="#" />
    <area shape="rect" coords="18,352,186,401" href="#" />
  </map>
  
</section>

@stop
