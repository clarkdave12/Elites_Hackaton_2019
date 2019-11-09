<template>
<div>		
  <div class="main-section">

		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar " id="nv">
	    <div class="container">
			<v-btn  @click="drawer = !drawer">
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

<div class="main-newsfeed">
	<div>
		<a>Name</a>
	</div>

</div>

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