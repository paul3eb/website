@extends('layout')

@section('content')

<section class="text-gray-600 body-font">
<h1 class="text-5xl pt-20 ml-12 font-medium title-font text-gray-900 mb-6 text-left">Budget Section</h1>  
  <div class="container px-5 py-12 mx-auto">    
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6" src="{{asset('/employee/nopic.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Lilli Ann R. Siason</h2>
          <p class="text-2xl leading-relaxed text-base">Administrative Officer V</p>
          <p class="text-lg leading-relaxed text-base">Email ad: lilliann.siason@deped.gov.ph</p>
        </div>
      </div>      
    </div>
  </div>

  <div class="container px-5 pt-6 pb-12 mx-auto"> 
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6" src="{{asset('/employee/nopic.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Precious Mae C. Gaquit</h2>
          <p class="text-2xl leading-relaxed text-base">Administrative Assistant III</p>
          <p class="text-lg leading-relaxed text-base">Email ad: preciousmae.gaquit@deped.gov.ph</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6" src="{{asset('/employee/nopic.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Suzeth R. Sernicula</h2>
          <p class="text-2xl leading-relaxed text-base">Administrative Assistant III</p>
          <p class="text-lg leading-relaxed text-base">Email ad: suzeth.sernicula@deped.gov.ph</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6"  src="{{asset('/employee/nopic.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Ivy Joy W. Tijol</h2>
          <p class="text-2xl leading-relaxed text-base">Administrative Assistant II</p>
          <p class="text-lg leading-relaxed text-base">Email ad: ivyjoy.tijol@deped.gov.ph</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        
      </div>
    </div>

    <h1 class="text-3xl pt-20 font-medium title-font text-gray-900 mb-12 text-left">  Acccountabilities: </h1> 
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">To provide DO management with economical, efficient, and effective accounting services to ensure the cost-effective utilization of financial resources of the division.</p>      
    </div>
        
    <h1 class="text-3xl pt-12 font-medium title-font text-gray-900 mb-12 text-left">  Specific Functions: </h1> 
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">1. Plan and manage the effective and efficient use of all fiscal resources of the schools division in accordance with existing rule.</p>
    </div>
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">2. Tap and utilize resources available at the schools division level to support the implementation of programs and projects at the schools division level or at the school/LC level.</p>
    </div>
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">3. Supervise and coordinate the budget and fiscal activities of units within the schools division.</p>
    </div>
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">4. Coordinate planning and budgeting activities of the schools division.</p>
    </div>     
  </div>
</section>


@stop
