@extends('layout')

@section('content')

<section class="text-gray-600 body-font">
<h1 class="text-5xl pt-20 ml-12 font-medium title-font text-gray-900 mb-6 text-left">Information and Communication Technology Unit</h1>  
  <div class="container px-5 py-12 mx-auto">    
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6" src="{{asset('/employee/arsolon.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Paul E. Arsolon, CoE</h2>
          <p class="text-2xl leading-relaxed text-base">Information Technology Officer I</p>
          <p class="text-lg leading-relaxed text-base">Email ad: paul.arsolon@deped.gov.ph</p>
        </div>
      </div>      
    </div>
  </div>

  <div class="container px-5 pt-6 pb-12 mx-auto"> 
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6" src="{{asset('/employee/nopic.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Franklin N. Maynucas</h2>
          <p class="text-2xl leading-relaxed text-base">Administrative Aide VI</p>
          <p class="text-lg leading-relaxed text-base">Email ad: franklin.maynucas@deped.gov.ph</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6"  src="{{asset('/employee/miras.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Herbert John G. Miras</h2>
          <p class="text-2xl leading-relaxed text-base">Job Order</p>
          <p class="text-lg leading-relaxed text-base">Email ad: herbertjohn.miras@deped.gov.ph</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        
      </div>
    </div>

    <h1 class="text-3xl pt-20 font-medium title-font text-gray-900 mb-12 text-left">  Specific Functions:</h1> 
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">1. Manage and maintain the Information and Communication Technology (ICT) Systems and Infrastructure of the divisions to effectively support operations.</p>
    </div>
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">2. Manage and implement ICT programs and projects in the division to ensure data validity and effective utilization of the systems.</p>      
    </div>
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">3. Formulate plans for the division to effectively allocate the necessary ICT resources of the region to support regional strategy, operations, programs and projects</p>      
    </div>
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">4. Participate and communicate with Central Office and other ICT Units across levels with regard to the implementation of national ICT and ICT-related programs.</p>      
    </div>
  </div>
</section>


@stop
