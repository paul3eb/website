<!-- ============= COMPONENT ============== -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 	<div class="container-fluid">
 		<a class="navbar-brand" href="#">DepEd DavNor</a>
  		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>
  	<div class="collapse navbar-collapse" id="main_nav">
	

	<ul class="navbar-nav">
		<li class="nav-item active mx-2"> <a class="nav-link" href="{{url('index')}}">Home </a> </li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle mx-2" href="#" data-bs-toggle="dropdown">  About  </a>
		    <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="{{url('ourdivision')}}"> Our Division </a></li>
				<li><a class="dropdown-item" href="{{url('orgchart')}}"> Organizational Chart </a></li> 
				<li><a class="dropdown-item" href="{{url('programs')}}"> Programs </a></li>
				<li><a class="dropdown-item" href="{{url('citizencharter')}}"> Citizen's Charter </a></li>       
  			</ul>
		</li>
    	<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle mx-2" href="#" data-bs-toggle="dropdown">  Profile  </a>
		    <ul class="dropdown-menu">			  
			  <li><a class="dropdown-item" href="#"> Schools Division Office  <span class="glyphicon glyphicon glyphicon-triangle-right float-right"></span></a> 
			  	<ul class="submenu dropdown-menu">
					<li><a class="dropdown-item" href="{{url('sdsoffice')}}"> SDS Office </a></li>
					<li><a class="dropdown-item" href="{{url('asdsoffice')}}"> ASDS Office </a></li> 
					<li><a class="dropdown-item" href="{{url('legal')}}"> Legal </a></li>
					<li><a class="dropdown-item" href="{{url('ict')}}"> ICT </a></li>
					<li><a class="dropdown-item" href="#"> Administrative <span class="glyphicon glyphicon glyphicon-triangle-right float-right"></a>
						<ul class="submenu dropdown-menu">
							<li><a class="dropdown-item" href="{{url('adminoffice')}}"> Office of the AO </a></li>
							<li><a class="dropdown-item" href="{{url('cashier')}}"> Cashier </a></li>
							<li><a class="dropdown-item" href="{{url('personnel')}}"> Personnel </a></li>
							<li><a class="dropdown-item" href="{{url('records')}}"> Records </a></li>
							<li><a class="dropdown-item" href="{{url('supply')}}"> Property and Supply </a></li>
							<li><a class="dropdown-item" href="{{url('genservices')}}"> General Services </a></li> 
						</ul>
                	<li><a class="dropdown-item" href="#">Finance <span class="glyphicon glyphicon glyphicon-triangle-right float-right"> </a>
						<ul class="submenu dropdown-menu">
							<li><a class="dropdown-item" href="{{url('accounting')}}"> Accounting </a></li>
							<li><a class="dropdown-item" href="{{url('budget')}}"> Budget </a></li>                  
						</ul>    
					</li>				    
				</ul>
			  </li>
			  <li><a class="dropdown-item" href="#"> - School Governance and Operations Division <span class="glyphicon glyphicon glyphicon-triangle-right"></a> 
			  	 <ul class="submenu dropdown-menu">
           			<li><a class="dropdown-item" href="{{url('sgodchief')}}">Office of the SGOD Chief</a></li>
					<li><a class="dropdown-item" href="{{url('moneval')}}"> &nbsp;&nbsp;&nbsp; School Management Monitoring and Evaluation </a></li>
					<li><a class="dropdown-item" href="{{url('socmob')}}"> &nbsp;&nbsp;&nbsp; Social Mobilization and Networking </a></li>
					<li><a class="dropdown-item" href="{{url('planres')}}"> &nbsp;&nbsp;&nbsp; Planning and Research </a></li>
					<li><a class="dropdown-item" href="{{url('educfac')}}"> &nbsp;&nbsp;&nbsp; Education Facilities </a></li>
					<li><a class="dropdown-item" href="{{url('health')}}"> &nbsp;&nbsp;&nbsp; School Health </a></li>				        
				    </li>				    
				</ul>
			  </li>
			  <li><a class="dropdown-item" href="#"> - Curriculum and Implementation Division <span class="glyphicon glyphicon glyphicon-triangle-right float-right"></a>
			  	 <ul class="submenu dropdown-menu">
					<li><a class="dropdown-item" href="{{url('cidoffice')}}">  Office of the CID Chief </a></li>
					<li><a class="dropdown-item" href="{{url('lrms')}}"> &nbsp;&nbsp;&nbsp; Learning Resource Management </a></li>
					<li><a class="dropdown-item" href="{{url('eps')}}"> &nbsp;&nbsp;&nbsp; Instructional Management </a></li>
					<li><a class="dropdown-item" href="{{url('psds')}}"> &nbsp;&nbsp;&nbsp; District Instructional Supervision </a></li>				        
				    </li>				    
				  </ul>
			  </li>
		    </ul>
		</li>
    	<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle mx-2" href="#" data-bs-toggle="dropdown">  School Links  </a>
		    <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#"> Public Schools</a></li>
				<li><a class="dropdown-item" href="#"> &nbsp;&nbsp;&nbsp;   Elementary <span class="glyphicon glyphicon glyphicon-triangle-right float-right"></a>
                    <ul class="submenu dropdown-menu">
           			    <li><a class="dropdown-item" href="#">District</a></li>
					    <li><a class="dropdown-item" href="{{url('elementary')}}"> &nbsp;&nbsp;&nbsp; Asuncion </a></li>
					    <li><a class="dropdown-item" href="{{url('elementary')}}"> &nbsp;&nbsp;&nbsp; B.E. Dujali </a></li>
					    <li><a class="dropdown-item" href="{{url('elementary')}}"> &nbsp;&nbsp;&nbsp; Carmen </a></li>
					    <li><a class="dropdown-item" href="{{url('elementary')}}"> &nbsp;&nbsp;&nbsp; Kapalong East </a></li>
					    <li><a class="dropdown-item" href="{{url('elementary')}}"> &nbsp;&nbsp;&nbsp; Kapalong West </a></li>
                        <li><a class="dropdown-item" href="{{url('elementary')}}"> &nbsp;&nbsp;&nbsp; Langilan </a></li>
                        <li><a class="dropdown-item" href="{{url('elementary')}}"> &nbsp;&nbsp;&nbsp; New Corella </a></li>
                        <li><a class="dropdown-item" href="{{url('elementary')}}"> &nbsp;&nbsp;&nbsp; San Isidro </a></li>
                        <li><a class="dropdown-item" href="{{url('elementary')}}"> &nbsp;&nbsp;&nbsp; Sto. Tomas East </a></li>
                        <li><a class="dropdown-item" href="{{url('elementary')}}"> &nbsp;&nbsp;&nbsp; Sto. Tomas West </a></li>
                        <li><a class="dropdown-item" href="{{url('elementary')}}"> &nbsp;&nbsp;&nbsp; Talaingod </a></li>
				        </li>				    
				    </ul>
				<li><a class="dropdown-item" href="{{url('secondary')}}"> &nbsp;&nbsp;&nbsp;   Secondary </a></li>
				<li><a class="dropdown-item" href="{{url('integrated')}}"> &nbsp;&nbsp;&nbsp;   Integrated </a></li>
				<li><a class="dropdown-item" href="{{url('private')}}"> Private Schools </a></li>
  			</ul>
		</li>
    	<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle mx-2" href="#" data-bs-toggle="dropdown">  Resources  </a>
		    <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="{{url('calendar')}}"> Calendar of Activities </a></li>
				<li><a class="dropdown-item" href="{{url('forms')}}"> Forms </a></li>
				<li><a class="dropdown-item" href="#"> Issuances <span class="glyphicon glyphicon glyphicon-triangle-right float-right"></a>
					<ul class="submenu dropdown-menu">
					<li><a class="dropdown-item" href="{{url('advisory')}}"> Division Advisories </a></li>
					<li><a class="dropdown-item" href="#"> Division Memoranda <span class="glyphicon glyphicon glyphicon-triangle-right"></span></a>
						<ul class="submenu dropdown-menu">
							<li><a class="dropdown-item" href="{{url('numbered')}}"> Numbered </a></li>
							<li><a class="dropdown-item" href="{{url('unnumbered')}}"> Unnumbered </a></li>                          
						</ul>                           
					</ul>            
				<li><a class="dropdown-item" href="{{url('multimedia')}}"> Multimedia </a></li> 
				<li><a class="dropdown-item" href="{{url('resourcematerials')}}"> Resource Materials </a></li>
				<li><a class="dropdown-item" href="{{url('rpms')}}"> RPMS </a></li>
  			</ul>
		</li>
    	<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle mx-2" href="#" data-bs-toggle="dropdown">  Procurement  </a>
		    <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="{{url('bidding')}}"> Bids and Awards </a></li>
				<li><a class="dropdown-item" href="{{url('app')}}"> Annual Procurement </a></li>
				<li><a class="dropdown-item" href="{{url('earlyproc')}}"> Early Procurement Activities </a></li>
				<li><a class="dropdown-item" href="{{url('procmonitoring')}}"> Procurement Monitoring </a></li> 
  			</ul>
		</li>	
    	<li class="nav-item active mx-2"> <a class="nav-link" href="{{url('contact')}}"> Contact Us </a> </li>	
	</ul>

	

  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>

<!-- ============= COMPONENT END// ============== -->
