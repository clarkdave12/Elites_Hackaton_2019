<template>
	<div>
		<form @submit.prevent="register()">
			<label>Name</label>
			<input type="text" v-model="user.name"><br>
			<label>Email</label>
			<input type="text" v-model="user.email"><br>
			<label>Password</label>
			<input type="password" v-model="user.password"><br>
			<label>Confirm Password</label>
			<input type="password" v-model="confirm"><br>
			<label>referal</label>
			<input type="text" v-model="user.referal">
			<button type="submit">register</button>
		</form>
	</div>
</template>

<script>
export default {
	data () {
		return {
			user: {
				name: '',
				email: '',
				password: '',
				referal: ''
			},
			confirm: ''
		}
	},

	methods: {
		register() {
			axios.post('http://localhost:8000/api/register', this.user)
				.then(response => {
					this.$router.push('/login')
				})
				.catch(error => {
					console.log(error.response)
				})
		}
	}
}
</script>