<template>
<div>		
  <div class="main-section">

		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar " id="nv">
	    <div class="container">
			<v-btn @click="drawer = !drawer">
				=
			</v-btn>
	      <img src="http://localhost:8000/images/logo.png" id="brand">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <a href="#" class="dropdown-toggle nav-link icon d-flex align-items-center">
                Profile
              </a>
              <div class="dropdown-menu dropdown-menu-left">
                <a href="#" class="dropdown-item"><i class="ion-ios-apps mr-2"></i> All Components</a>
                <a href="#" class="dropdown-item"><i class="ion-ios-document mr-2"></i> Documentation</a>
              </div>
	          <li class="nav-item cta"><a href="#" class="nav-link icon d-flex align-items-center"><i class="ion-ios-cloud-download mr-2"></i> Download</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
  </div>

	<!-- Navigation drawer -->
	<v-navigation-drawer v-model="drawer" temporary id="drawer">
		<v-list-item class="py-2 my-2 px-3">
			<v-list-item-content>
				<v-list-item-title>
					Products
				</v-list-item-title>
			</v-list-item-content>
		</v-list-item>
		<v-list-item class="py-2 my-2 px-3">
			<v-list-item-content>
				<v-list-item-title>
					Moments
				</v-list-item-title>
			</v-list-item-content>
		</v-list-item>
		<v-list-item class="py-2 my-2 px-3">
			<v-list-item-content>
				<v-list-item-title>
					About Us
				</v-list-item-title>
			</v-list-item-content>
		</v-list-item>
		<v-list-item class="py-2 my-2 px-3">
			<v-list-item-content>
				<v-list-item-title>
					Help and Support
				</v-list-item-title>
			</v-list-item-content>
		</v-list-item>
	</v-navigation-drawer>


	  <section class="ftco-section goto-here pb-0">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-12 heading-title">
	          		<h1>Basic Elements</h1>
	        	</div>
	  		</div>
	  	</div>
  	</section>

	  <section class="ftco-section" id="buttons">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-12">
						<h2 class="heading-section">Buttons <br>
							<small>Pick your style</small>
						</h2>
					</div>
					<div class="col-md-12">
						<button type="button" class="btn btn-primary">Default</button>
            <button type="button" class="btn btn-primary btn-round">Round</button>
            <button type="button" class="btn btn-primary btn-round">
              <i class="ion-ios-heart"></i> With Icon
            </button>
            <button type="button" class="btn btn-primary btn-fab btn-round">
              <i class="ion-ios-heart"></i>
            </button>
            <button type="button" class="btn btn-link">Simple</button>
					</div>
				</div>

				<div class="row mb-5">
					<div class="col-md-12">
						<h2 class="heading-section">
							<small>Pick your size</small>
						</h2>
					</div>
					<div class="col-md-12 mb-3">
						<button type="button" class="btn btn-primary btn-sm">Small Size</button>
            <button type="button" class="btn btn-primary">Regular Size</button>
            <button type="button" class="btn btn-primary btn-lg">Large Size</button>
					</div>
					<div class="col-md-12">
						<button type="button" class="btn btn-outline-primary btn-sm">Small Size</button>
            <button type="button" class="btn btn-outline-primary">Regular Size</button>
            <button type="button" class="btn btn-outline-primary btn-lg">Large Size</button>
					</div>
				</div>
				
				<div class="row mb-5">
					<div class="col-md-12">
						<h2 class="heading-section">
							<small>Pick your color</small>
						</h2>
					</div>
					<div class="col-md-12 mb-3">
            <button type="button" class="btn btn-primary">Primary</button>
						<button type="button" class="btn btn-success">Success</button>
						<button type="button" class="btn btn-danger">Danger</button>
						<button type="button" class="btn btn-warning">Warning</button>
						<button type="button" class="btn btn-info">Info</button>
						<button type="button" class="btn btn-light">Light</button>
						<button type="button" class="btn btn-dark">Dark</button>
					</div>
					<div class="col-md-12">
            <button type="button" class="btn btn-outline-primary">Primary</button>
						<button type="button" class="btn btn-outline-success">Success</button>
						<button type="button" class="btn btn-outline-danger">Danger</button>
						<button type="button" class="btn btn-outline-warning">Warning</button>
						<button type="button" class="btn btn-outline-info">Info</button>
						<button type="button" class="btn btn-outline-light">Light</button>
						<button type="button" class="btn btn-outline-dark">Dark</button>
					</div>
				</div>

				<div class="row mb-5">
					<div class="col-md-12">
						<h2 class="heading-section">
							<small>Links</small>
						</h2>
					</div>
					<div class="col-md-12 mb-2">
            <a href="#" class="btn btn-primary btn-link" role="button">Primary link</a>
            <a href="#" class="btn btn-secondary btn-link" role="button">Secondary link</a>
            <a href="#" class="btn btn-success btn-link" role="button">Success link</a>
						<a href="#" class="btn btn-danger btn-link" role="button">Danger link</a>
						<a href="#" class="btn btn-warning btn-link" role="button">Warning link</a>
						<a href="#" class="btn btn-info btn-link" role="button">Info link</a>
						<a href="#" class="btn btn-dark btn-link" role="button">Dark link</a>
					</div>
				</div>

				<div class="row mb-5">
					<div class="col-md-12">
						<h2 class="heading-section">
							<small>Buttons with Dropdown</small>
						</h2>
					</div>
					<div class="col-md-12 mb-2">
            <div class="dropdown d-inline-block">
						  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Dropdown button
						  </button>
						  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="#">Action</a>
						    <a class="dropdown-item" href="#">Another action</a>
						    <a class="dropdown-item" href="#">Something else here</a>
						  </div>
						</div>
						<div class="dropdown d-inline-block">
						  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Dropdown button
						  </button>
						  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="#">Action</a>
						    <a class="dropdown-item" href="#">Another action</a>
						    <a class="dropdown-item" href="#">Something else here</a>
						  </div>
						</div>
						<div class="dropdown d-inline-block">
						  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Dropdown button
						  </button>
						  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="#">Action</a>
						    <a class="dropdown-item" href="#">Another action</a>
						    <a class="dropdown-item" href="#">Something else here</a>
						  </div>
						</div>
					</div>
				</div>

				<div class="row mb-5">
					<div class="col-md-12">
						<h2 class="heading-section">
							<small>Block Level Buttons</small>
						</h2>
					</div>
					<div class="col-md-4 mb-2">
            <button type="button" class="btn btn-warning btn-lg btn-block">Block Level info</button>
						<button type="button" class="btn btn-info btn-lg btn-block">Block Level Success</button>
					</div>
				</div>
			</div>
	  </section>
	  <!-- - - - - -end- - - - -  -->


</div>
</template>

<script>
export default {
	data () {
		return {
			drawer : false
		}
	}
}
</script>

<style scope>
#nv {
	background: red;
}
#brand {
	height: 60px;
	width: 175px;
}

#drawer {
	background: black;
	color: white;
}
</style>