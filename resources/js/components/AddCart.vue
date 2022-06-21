<template>
    <div>
        <button class="main-btn" v-on:click.prevent="addToCart()">Add to Cart</button>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                //
            }
        },
        props:['productId', 'userId'],
        methods:{

            async addToCart(){
                // Checking if user is logged in
                if(this.userId == 0){
                    this.$toastr.e('You need to Login to buy;');
                    return;
                }

                // Add item to if user is logged in

                let tab = await axios.post('/cart', {
                    'productId': this.productId,
                });

                this.$root.$emit('changeInCart', tab.data.items)
            }
        },
        mounted() {
            console.log('Add to Cart Butoon Component mounted.')
        }
    }
</script>

