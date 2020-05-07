<template>
    <div class="container-fluid boxers" id="boxe">
        <div class="row">
            <div class="col-12 boxer-contain" >
                <boxerT v-for="(boxer, index) in boxers" :key='index' :boxer='boxer'></boxerT>
                <button class="topBtn rounded-pill" v-on:click="goTop()">GO TOP</button>
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
            axios.get("/api/boxers").then(function(response){  //vado a richiamare gli elementi del mo database convertiti in una sorta di API
                self.boxers = response.data;
                // console.log(self.boxers); 
            });
        },
         methods: {
            goTop() { //al click viene richiamata questa funzione
                var goTop = document.getElementById('boxe'); //racchiudo in una variabile l'id del contenitore padre
                goTop.scrollTop = 0; //riporto il contenitore in posizione 0 sull'asse Y
            }
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
            .topBtn {
                position: fixed;
                bottom: 5px;
                right: 25px;
                padding: 10px;
                font-size: 20px;
                color: #C80303;
                border: 2px solid #C80303;
                background-color: black;
                &:hover {
                cursor: pointer;
                color: white;
                }
            }
        }
    }
    .boxers::-webkit-scrollbar {
        display: none;
    }


</style>
