<template>
    <div class="container">
        <button class=" col-lg-2 btn btn-primary " @click="followuser" v-text="buttontext">Follow</button>
    </div>
</template>

<script>
    export default {
        props:['userid','follows'],
        mounted() {
            console.log('Component mounted.')
        },
        data:function(){
            return{
                status:this.follows,
            }
        },
        methods:{
            followuser(){
                axios.post('/follow/'+this.userid)
                .then(
                    response=>{
                        this.status=! this.status;
                    }
                ).catch(
                    errors=>{
                        if(errors.response.status==401){
                            window.location='/login';
                        }
                    }
                );
            }
        },
        computed:{
            buttontext(){
                return (this.status)?'Unfollow':'Follow';
            }
        }
        
    }

</script>
