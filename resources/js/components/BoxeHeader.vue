<template>
    <div class="boxe-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://www.cinematographe.it/wp-content/uploads/2020/03/Il-grande-match-cover.jpg">
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
            height: 60px;
        }
    }
</style>