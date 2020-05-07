<template>
<div class="card-body">
    <p class="card-text">{{this.match.total_fitghs}}</p>
    <!-- <p class="card-text">{{this.match.wins_(KO)}}</p> -->
    <!-- <p class="card-text">{{this.match.losses_(KO)}}</p> -->
    <!-- <p class="card-text">{{this.match.draws}}</p>
    <p class="card-text">{{this.match.titles_won}}</p> -->
</div>
</template>

<script>
    export default {
        props: ['match'], 
    };
</script>