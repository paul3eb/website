@extends('layout')

@section('content')

<section class="text-gray-600 body-font">
<h1 class="text-5xl pt-20 ml-12 font-medium title-font text-gray-900 mb-6 text-left">Learning Resource Management Section</h1>  
  <div class="container px-5 py-12 mx-auto">    
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6" src="{{asset('/employee/nopic.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Ernie M. Aguan</h2>
          <p class="text-2xl leading-relaxed text-base">Education Program Supervisor</p>
          <p class="text-lg leading-relaxed text-base">Email ad: ernie.aguana@deped.gov.ph</p>
        </div>
      </div>      
    </div>
  </div>

  <div class="container px-5 pt-6 pb-24 mx-auto"> 
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6" src="{{asset('/employee/nopic.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Neil Edward D. Diaz</h2>
          <p class="text-2xl leading-relaxed text-base">Project Development Officer II</p>
          <p class="text-lg leading-relaxed text-base">Email ad: neiledward.diaz@deped.gov.ph</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
      <div class="bg-gray-100 p-6 rounded-lg">
          <img class="rounded object-cover object-center mb-6"  src="{{asset('/employee/nopic.jpg')}}" style="width: 250px; height: 300px" alt="content">          
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">Charline V. Udani</h2>
          <p class="text-2xl leading-relaxed text-base">Librarian II</p>
          <p class="text-lg leading-relaxed text-base">Email ad: charline.udani@deped.gov.ph</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        
      </div>
    </div>

    <h1 class="text-4xl pt-20 font-medium title-font text-gray-900 mb-6 text-left"> Specific Functions: </h1> 
    <p class="text-2xl text-justify leading-relaxed text-base">1. Manage the implementation of policies, guidelines, standards and specifications in the procurement, development, production and utilization of learning resources.
    <br>2. Evaluate, quality assure and approved localized learning resources for the use of schools, LCs and the School’s Division Office (SDO).
    <br>3. Develop materials for various delivery systems through the use ICT-enbale solutions.
    <br>4. Provide technical assistance to schools and LCs in development, production, storage, distribution, and utilization of learning.
    <br>5. Oversee the Uitlization of processes to support access to teaching and learning  resources.</p>

   </div>
</section>


@stop
