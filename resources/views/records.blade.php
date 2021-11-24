@extends('layout')

@section('content')

<section class="text-gray-600 body-font">
<h1 class="text-5xl pt-20 ml-12 font-medium title-font text-gray-900 mb-6 text-left">Records Section</h1>  
  <div class="container px-5 py-12 mx-auto">    
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6" src="{{asset('/employee/nopic.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Jayson J. Jumangit</h2>
          <p class="text-2xl leading-relaxed text-base">Administration Officer IV</p>
          <p class="text-lg leading-relaxed text-base">Email ad: jayson.jumangit@deped.gov.ph</p>
        </div>
      </div>      
    </div>
  </div>

  <div class="container px-5 pt-6 pb-12 mx-auto"> 
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6" src="{{asset('/employee/nopic.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Josephine Nacis</h2>
          <p class="text-2xl leading-relaxed text-base">Administrative Assistant III</p>
          <p class="text-lg leading-relaxed text-base">Email ad: josephine.nacis@deped.gov.ph</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6"  src="{{asset('/employee/nopic.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Eldito C. Loquinio</h2>
          <p class="text-2xl leading-relaxed text-base">Administrative Aide VI</p>
          <p class="text-lg leading-relaxed text-base">Email ad: eldito.loquinio@deped.gov.ph</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        
      </div>
    </div>

    <h1 class="text-3xl pt-20 font-medium title-font text-gray-900 mb-12 text-left">   Acccountabilities: </h1> 
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">To provide the organization with the information from documents and records as reference in its operations by managing the system relating to acceptance, encoding, releasing, creation, utilization, retention, preservation and disposal of records.</p>      
    </div> 
  </div>
</section>


@stop
