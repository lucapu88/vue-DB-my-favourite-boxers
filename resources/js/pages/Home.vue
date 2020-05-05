<template>
  <div class="boxer-container">
    <boxe-header></boxe-header>
    <boxer-container></boxer-container>
  </div>
</template>

<script>
 import BoxeHeader from '../components/BoxeHeader';
 import BoxerContainer from '../components/BoxerContainer';
 export default {
   components: {
     BoxeHeader,
     BoxerContainer
   },
   data() {
     return{};
   }
 };
</script>

<style scoped lang="scss" >
  @import '../../sass/variables';
  @import '../../sass/general';
  .boxer-container {
    @include  colorGradient( $primary-color, $secondary-color);
  }
</style>