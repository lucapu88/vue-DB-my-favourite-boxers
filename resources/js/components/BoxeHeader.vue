<template>
    <div class="boxe-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://www.dangertrainingcenter.it/wp-content/uploads/2018/06/blog-boxe.png">
                </div>
                <div class="col-sm-6 text-right mt-3">
                    <h1>My 10 favorite boxers</h1>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    @import '../../sass/variables';
    $headerHeight: 80px;
    .boxe-header {
        background-color: black;
        height: $headerHeight;
        line-height: $headerHeight;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        img {
            height: 75px;
            width: 95px;
        }
    }
</style>