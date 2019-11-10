<template>

    <div class="container-fluid">

        <div class="row">

                <div class="col-md-4 entry">
                    <!-- col1 -->
                    <br/>
                    <br/>
                    <div class="image-wrap justify-content-center " style="text-align:center">
                        <img src="http://localhost:8000/images/image-3.jpg" alt="Thumbnail Image" style="width: 40%" class="rounded-circle img-fluid image" >
                            <br/><div style="font-weight:bold;" ><h2 class="FA">{{user.name}}</h2><h5 class="FA">Licensed: {{ user.licensed }}</h5></div>
                            <div style="text" >Referral Code: {{ user.referal_code }} </div>
                            <hr/>
                    </div>

					<!-- with icons -->
						<div class="tabulation-2">
							<ul class="nav nav-pills nav-fill d-md-flex d-block">
							  <li class="nav-item">
								  <a><button type="button" class="btn btn-primary btn-round">
									<i class="ion-ios-home"></i>
									</button></a>
							  </li>

							  <li class="nav-item">
								<a><button type="button" class="btn btn-primary btn-round">
									<i class="ion-ios-globe"></i>
									</button></a>	  
							  </li>
							 
							  <li class="nav-item">
								  <a><button type="button" class="btn btn-primary btn-round">
									<i class="ion-ios-mail"></i>
									</button></a>
							  </li>

							   <li class="nav-item">
								  <a><button type="button" class="btn btn-primary btn-round">
									<i class="ion-ios-notifications"></i>
									</button></a>
							  </li>
							</ul>
							<div class="tab-content rounded mt-2">
							  <div class="tab-pane container p-4 active" id="home1">
							  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							  </div>
							</div>
						</div>
						<!-- with icons -->

                    <!-- Accordion -->
                    <!-- <div class="col-md-6 entry"> -->
						
						<div id="accordion" class="myaccordion w-100 text-center">

						  <div class="card">
						    <div class="card-header" id="headingOne">
						      <h2 class="mb-0">
						        <button class="d-flex align-items-center justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Insurance Plans
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						      <div class="card-body text-left">
								  <ul>
									  <li><h4> AIA ALL-IN-ONE </h4></li>
									  <li><h4> FUTURE SCHOLAR </h4></li>
									  <li><h4> INCOME ASSURE 7 </h4></li>
								  </ul>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header" id="headingTwo">
						      <h2 class="mb-0">
						        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Savings
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						      <div class="card-body text-left">
								  <h3><strong> PHP 25000 </strong></h3>
						      </div>
						    </div>
						  </div>

                          <div class="card" v-if="user.licensed == 'yes'">
						    <div class="card-header" id="headingTwo">
						      <h2 class="mb-0">
						        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          History/Transactions
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						      <div class="card-body text-left">
							      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						      </div>
						    </div>
						  </div>

                          <div class="card" v-if="user.licensed == 'yes'">
						    <div class="card-header" id="headingTwo">
						      <h2 class="mb-0">
						        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						          Recruit
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						      <div class="card-body text-left">
								  <li v-for="r in recruits" :key="r.id">
									  {{ r.name }}
								  </li>
						      </div>
						    </div>
						  </div>

						</div>
					<!-- </div> -->
                    <!-- End of Accordion -->
                </div>
                

                <div class="col-md-8 entry">
                <!-- col2 -->
                    <br/>
                    <prof />
                </div>
        </div>
    </div>
</template>

<script>
import prof from './profile.vue'
export default {
	components: {
		prof,
	},
	
	data () {
		return {
			user: [],
			recruits: []
		}
	},



	created () {
		const data = {
			'Accept': 'application/json',
			'Authorization': 'Bearer ' + localStorage.getItem('token')
		}

		axios.get('http://localhost:8000/api/user', {headers: data})
			.then(({data}) => {
				this.user = data

				axios.get('http://localhost:8000/api/recruit/' + data.id)
					.then(({data}) => {
						for(let i = 0; i < data.length; i++) {
							axios.get('http://localhost:8000/api/recruits_name/' + data[i].code_getter)
								.then(({data}) => {
									this.recruits.push(data)
								})
								.catch(error => {
									console.log(error.response)
								})
						}
					})
					.catch(error => {
						console.log(error.response)
					})
			})
			.catch(error => {
				console.log(error.response)
			})
	}
}
</script>

<style scoped>

	* {
		color: black;

	}

    .entry{
        justify-content: center;
    }
    .FA{
        color:black;
    }
   
</style>
