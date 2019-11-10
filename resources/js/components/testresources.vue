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

	<div class="container" id="comments">
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6 px-3 py-3 my-2" id="blocks">
				<h5 class="user-name"> User name </h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, quos consectetur harum quis ducimus facere assumenda at fuga suscipit recusandae voluptatibus omnis ab earum adipisci sit vero rerum laudantium rem.</p>
				<v-divider></v-divider>
				<div class="row">
					<div class="col-lg-4">
						<button class="comment-button" @click="toggleComments"> {{ buttonLabel }} </button>
					</div>
				</div>

				<!-- Actual comment -->
				<v-divider></v-divider>
				<div v-if="commentShow">
					<h6> <strong> Comments: </strong> </h6>
					<div class="row">
						<div class="col-lg-12">
							<header> <strong> Name of the commentor </strong> </header>
							this is the comment Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus provident quidem fuga repellendus! Animi pariatur voluptatem, excepturi expedita modi sapiente aperiam soluta. Facere nobis ad neque reprehenderit commodi enim dolor.
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
</div>
</template>

<script>
export default {
	data () {
		return {
			drawer : false,
			commentShow: false,
			buttonLabel: 'Show comments'
		}
	},

	methods: {
		toggleComments() {
			if(!this.commentShow) {
				this.commentShow = true
				this.buttonLabel = 'Hide comments'
			}
			else {
				this.commentShow = false
				this.buttonLabel = 'Show comments'
			}
		}
	}
}
</script>

<style scope>

#comments {
	margin-top: -150px;
}

.comment-button {
	background: none;
	border: 1px solid black;
	color: black;
	border-radius: 50px;
	padding: 5px 10px;
}

.comment-button:hover {
	background: skyblue;
	border: none;

}

.user-name {
	color:black;
}

#blocks {
	background: skyblue;
}

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