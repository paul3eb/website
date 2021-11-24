@extends('layout')

@section('content')

<section class="text-gray-600 body-font">
<h1 class="text-5xl pt-20 ml-12 font-medium title-font text-gray-900 mb-6 text-left">Cash Section</h1>  
  <div class="container px-5 py-12 mx-auto">    
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6" src="{{asset('/employee/nopic2.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Rowena M. Inutan</h2>
          <p class="text-2xl leading-relaxed text-base">Cashier</p>
          <p class="text-lg leading-relaxed text-base">Email ad: rowena.inutan@deped.gov.ph</p>
        </div>
      </div>      
    </div>
  </div>

  <div class="container px-5 pt-6 pb-12 mx-auto"> 
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6" src="{{asset('/employee/nopic2.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Mercy Carol T. Hivertas</h2>
          <p class="text-2xl leading-relaxed text-base">Administrative Assistant III</p>
          <p class="text-lg leading-relaxed text-base">Email ad: mercycarol.hivertas@deped.gov.ph</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
      <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6"  src="{{asset('/employee/nopic2.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Sarah Faith M. Opiana</h2>
          <p class="text-2xl leading-relaxed text-base">Administrative Assistant III</p>
          <p class="text-lg leading-relaxed text-base">Email ad: sarahfaith.opiana@deped.gov.ph</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        
      </div>
    </div>

    <h1 class="text-3xl pt-20 font-medium title-font text-gray-900 mb-12 text-left">   Acccountabilities: </h1> 
    <div class="flex-grow sm:text-left text-center my-6 sm:mt-0">        
      <p class="leading-relaxed ml-6 mb-6 text-justify text-2xl">To manage cash collections, disbursements, liquidations and preparation of reports to the accounting office to ensure proper utilization and timely disbursement of funds and liquidation of cash advances to pay for government obligation in accordance with accounting and auditing rules and regulations.</p>      
    </div> 
  </div>
</section>


@stop
