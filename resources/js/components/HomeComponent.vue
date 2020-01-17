<template>
    <div>
        <menu-list></menu-list>
        <div class="text-center">Home</div>
        <div class="psb home-slider">
            <div class="home-slider-left-block">
                <a href="#">
                    <img src="front/img.jpg">
                    <p>Title Movie</p>
                </a>
            </div>
            <div class="psb home-slider-right-block">
                <div class="home-slider-block-arrow">
                    <span class="home-slider-arrow-up">&#8670;</span>
                    <span class="home-slider-arrow-down">&#8671;</span>
                </div>
                <div class="home-slider-block-show">
                    <a href="#">
                        <img src="front/img1.jpg" class="home-slider-img active">
                    </a>
                    <a href="#">
                        <img src="front/img2.jpg" class="home-slider-img">
                    </a>
                    <a href="#">
                        <img src="front/img3.jpg" class="home-slider-img">
                    </a>
                    <a href="#">
                        <img src="front/img1.jpg" class="home-slider-img">
                    </a>
                    <a href="#">
                        <img src="front/img2.jpg" class="home-slider-img">
                    </a>
                    <a href="#">
                        <img src="front/img3.jpg" class="home-slider-img">
                    </a>
                </div>
            </div>
        </div>
        <section>
            <div class="text-center">Block Img new movies</div>
        </section>
        <section>
            <div class="text-center">Rating</div>
            <div class="">
                <div class="">Movies</div>
                <div class="">Cartons</div>
                <div class="">Serials</div>
                <div class="">Anime</div>
            </div>
        </section>
        <section>
            <div class="text-center">News</div>
        </section>
        Block Contacts
    </div>
</template>

<script>
    export default {
        name: "HomeComponent",
        data: () => {
            return {

            }
        },
    }
</script>

<style scoped>

</style>
