<template>
    <div>
        <form @submit.prevent="login">
            <label>Email</label>
            <input type="text" v-model="user.email"><br>
            <label>Password</label>
            <input type="password" v-model="user.password"><br>
            <button type="submit">Login</button>
        </form>
    </div>
</template>

<script>
export default {
    data () {
        return {
            user: {
                email: '',
                password: ''
            }
        }
    },

    methods: {
        login() {

            const data = {
                grant_type: 'password',
                client_id: '2',
                client_secret: 'OSSdTmRMG9vFUSLKmw4JvoZnJstsqcwYdH43KmwL',
                username: this.user.email,
                password: this.user.password
            }

            axios.post('http://localhost:8000/oauth/token', data)
                .then(({data}) => {
                    window.localStorage.setItem('token', data.access_token)

                    const head = {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + data.access_token
                    }

                    axios.get('http://localhost:8000/api/user', {headers: head})
                        .then(response => {
                            console.log(response.data)
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
}
</script>