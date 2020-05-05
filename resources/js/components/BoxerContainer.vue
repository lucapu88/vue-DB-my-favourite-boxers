<template>
    <div class="container-fluid boxers">
        <div class="row">
            <div class="col-12 boxer-contain">
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
    .boxers {
        background-image: url('https://images5.alphacoders.com/798/thumb-1920-798026.jpg');
        background-repeat: no-repeat;
        background-position: top;
        position: fixed;
        height: 100vh;
        overflow-y: scroll;
        .boxer-contain {
            margin-top: 100px;
            display: flex;
            flex-wrap: wrap;
        }
    }
    .boxers::-webkit-scrollbar {
        display: none;
    }


</style>
