<template>
    <button class="  btn btn-primary "  @click="followuser" v-text="buttontext"  ></button>
</template>

<script>
    export default {
        
        mounted() {
            console.log('Component mounted.')
        },
        data:function(){
            return{
                status:window.follows,
            }
        },
        methods:{
            followuser(){
                axios.post('/follow/'+window.userid)
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

