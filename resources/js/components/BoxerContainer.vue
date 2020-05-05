<template>
    <div class="container">
        <div class="row">
            <div class="col-12 boxer-container">
                <boxerT v-for="(boxer, index) in boxers" :key='index' :boxer='boxer'></boxerT>
            </div>
        </div>
    </div>
</template>
<script>
    import BoxerT from './BoxerT';
    export default {
        components: {
            BoxerT
        },
        data () {
            return {
                boxers: []
            }
        },
        mounted() {
            let self = this;
            axios.get("/api/boxers").then(function(response){ 
                self.boxers = response.data;
            });
        }
    };
</script>

<style lang="scss" scoped>
    .boxer-container {
        margin-top: 100px;
        display: flex;
        flex-wrap: wrap;
    }

</style>
