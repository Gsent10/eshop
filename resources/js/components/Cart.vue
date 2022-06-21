<template>
    <li class="nav-card-item">
        <a class="btn btn-secondary btn-lg" href="/cart">Cart {{itemCount}}</a>
    </li>
</template>

<script>
    export default {
        data(){
            return{
                itemCount: '',
            }
        },
        mounted() {
            console.log('Cart Icon Link Component mounted.'),

            this.$root.$on('changeInCart', (item) => {
                this.itemCount = item
            })
        },
        methods:{
            // Update cart value on page load
            async getCartItemsOnPageLoad(){
                let tab = await axios.post('/cart');
                this.itemCount = tab.data.items
            }
        },
        created(){
            this.getCartItemsOnPageLoad();
        }
    }
</script>
