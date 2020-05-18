<template>
    <div class="card boxerContainer mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img :src="boxer.poster" class="card-img" :alt="boxer.name +' '+'photo'">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">{{this.boxer.name}}</h4>
                    <p class="card-text">{{this.boxer.birthday}}</p>
                    <p class="card-text">{{this.boxer.description}}</p>
                    <!-- <match v-for="(match, index) in matches" :key='index' :match='match'></match> -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // import Match from './Match';
    export default {
        //  components: {
        //     Match
        // },
        props: ['boxer'],
         data () {
            return {
                // matches: [],
            }
        },
        mounted() {
            // let that = this;
            // axios.get("/api/matches").then(function(response){
            //     that.matches = response.data;
            //     console.log(that.matches);
            // });
        },
    };
</script>

<style lang="scss" scoped>
     @import '../../sass/variables';
     @import '../../sass/general';
    .boxerContainer {
        padding: 10px;
        margin: 0 20px;
        font-size: 17px;
        img {
            height: 450px;
            width: 350px;
        }
        @include background-rgba;
        .description {
            padding: 5px;
            height: 180px;
            overflow-y: auto;
        }
    }
    //CUSTOM SCROLLBAR
    /* width */
    .description::-webkit-scrollbar {
    width: 11px;
    }
    /* Track */
    .description::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px $tertiary-color;
    border-radius: 10px;
    }
    /* Handle */
    .description::-webkit-scrollbar-thumb {
    background: $primary-color;
    border-radius: 10px;
    }
    /* Handle on hover */
    .description::-webkit-scrollbar-thumb:hover {
    background: $secondary-color;
    }

</style>