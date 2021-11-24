@extends('layout')

@section('content')

<section class="text-gray-600 body-font">
<h1 class="text-5xl pt-20 ml-12 font-medium title-font text-gray-900 mb-6 text-left">Education Facilities Section</h1>  
  <div class="container px-5 py-12 mx-auto">    
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6" src="{{asset('/employee/nopic.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Engr. Elilou L. Jumawan</h2>
          <p class="text-2xl leading-relaxed text-base">Engineer III</p>
          <p class="text-lg leading-relaxed text-base">Email ad: elilou.jumawan@deped.gov.ph</p>
        </div>
      </div>      
    </div>
  </div>

  <div class="container px-5 pt-6 pb-12 mx-auto"> 
    
    <h1 class="text-3xl pt-6 font-medium title-font text-gray-900 mb-12 text-left">  Acccountabilities: </h1> 
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">To provide services to ensure structurally and physically safe buildings, grounds and facilities for the Division Office, schools and learning centers to maintain a conducive physical environment.</p>      
    </div>    
        
    <h1 class="text-3xl pt-12 font-medium title-font text-gray-900 mb-6 text-left">  Specific Functions: </h1> 
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">1. Assess and ensure the structural integrity of all school buildings and facilities.</p>
    </div>
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">2. Assess and ensure that all school building projects are constructed in accordance to the plans, specifications and standards prescribed by DepED.</p>
    </div>
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">3. Provide technical assistance to the BAC in the procurement activities.</p>
    </div>
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">4. Provide technical assistance in the implementation of School-Based Repair and Maintenance Scheme (SBRMS), school development plan, building maintenance and repair, etc.</p>
    </div>
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">5. Maintain an updated and accurate inventory of all existing school buildings and other education facilities.</p>
    </div>
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">6. Recommend to the SDS the construction, rehabilitation and/or demolition of school buildings and other facilities as well as monitor and evaluate these activities.</p>
    </div>
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">7. Provide accurate information and recommendations to Planning office for school site mapping.</p>
    </div>
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">8. Provide accurate information and recommendations to assist Legal Office in school titling.</p>
    </div>
  </div>
</section>

@stop
