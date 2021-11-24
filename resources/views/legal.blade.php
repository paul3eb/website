@extends('layout')

@section('content')

<section class="text-gray-600 body-font">
<h1 class="text-5xl pt-20 ml-12 font-medium title-font text-gray-900 mb-6 text-left">Legal Section</h1>  
  <div class="container px-5 py-12 mx-auto">    
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6" src="{{asset('/employee/yap.png')}}"style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Atty. Anthony Yap</h2>
          <p class="text-2xl leading-relaxed text-base">Attorney</p>
          <p class="text-lg leading-relaxed text-base">Email ad: anthony.yap@deped.gov.ph</p>
        </div>
      </div>      
    </div>
  </div>

  <div class="container px-5 pt-6 pb-12 mx-auto">     

    <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-left"> Specific Functions:</h1>

    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">1. Provide legal advice and render legal opinions to the SDS, ASDS, officials of the Division in relation to the performance of their functions.</p>
    </div>
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">2. Interpret laws and rules affecting the operation of various division programs.</p>      
    </div>
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">3. Prepare and review contracts, MOAs and instruments to which the Division or any of its offices and school is a party, and interprets the provisions therein.</p>      
    </div>
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">4. Evaluate complaints filed, conducts investigation and draft decisions and orders of cases against non-teaching personnel within the Division.</p>      
    </div>
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">5. Conduct investigations of complaints against teaching personnel as may be delegated by the regional office.</p>      
    </div>
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">6. Draft actions/endorsements on complaints and letters for signature of the SDS in accordance with the provisions of the law and DepED rules and regulations.</p>      
    </div>
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">7. Represent the Division in court cases, when deputized by the OSG.</p>      
    </div>
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">8. Perform such other functions as may be delegated by the Superintendent.</p>      
    </div>
  </div>
</section>


@stop
