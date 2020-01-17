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
            <div class="home-rating">
               <a href="" class="home-rating-link">
                   <img src="front/img.jpg" class="home-rating-img">
                   <p class="home-rating-title">Title</p>
               </a>
                <a href="" class="home-rating-link">
                    <img src="front/img1.jpg" class="home-rating-img">
                    <p class="home-rating-title">Title1</p>
                </a>
                <a href="" class="home-rating-link">
                    <img src="front/img2.jpg" class="home-rating-img">
                    <p class="home-rating-title">Title2</p>
                </a>
                <a href="" class="home-rating-link">
                    <img src="front/img3.jpg" class="home-rating-img">
                    <p class="home-rating-title">Title3</p>
                </a>
                <a href="" class="home-rating-link">
                    <img src="front/img.jpg" class="home-rating-img">
                    <p class="home-rating-title">Title4</p>
                </a>
                <a href="" class="home-rating-link">
                    <img src="front/img2.jpg" class="home-rating-img">
                    <p class="home-rating-title">Title5</p>
                </a>
            </div>
        </section>
        <section>
            <div class="text-center">Rating</div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="movie-tab" data-toggle="tab" href="#movie" role="tab" aria-controls="home" aria-selected="true">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="cartons-tab" data-toggle="tab" href="#cartons" role="tab" aria-controls="profile" aria-selected="false">Cartons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="serials-tab" data-toggle="tab" href="#serials" role="tab" aria-controls="contact" aria-selected="false">Serials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="anime-tab" data-toggle="tab" href="#anime" role="tab" aria-controls="contact" aria-selected="false">Anime</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="movie" role="tabpanel" aria-labelledby="home-tab">
                    <div class="home-tab">
                        <a href="" class="home-tab-link">
                            <img src="front/img.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img1.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title1</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img2.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title2</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img3.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title3</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img.jpg" class="home-tab-img">
                            <p class="home-rating-title">Title4</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img2.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title5</p>
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade" id="cartons" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="home-tab">
                        <a href="" class="home-tab-link">
                            <img src="front/img1.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img1.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title1</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img2.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title2</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img3.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title3</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title4</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img2.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title5</p>
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade" id="serials" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="home-tab">
                        <a href="" class="home-tab-link">
                            <img src="front/img2.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img1.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title1</p>
                        </a>
                        <a href="" class="home-rating-link">
                            <img src="front/img2.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title2</p>
                        </a>
                        <a href="" class="home-rating-link">
                            <img src="front/img3.jpg" class="home-rating-img">
                            <p class="home-rating-title">Title3</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img.jpg" class="home-tab-img">
                            <p class="home-rating-title">Title4</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img2.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title5</p>
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade" id="anime" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="home-tab">
                        <a href="" class="home-tab-link">
                            <img src="front/img3.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img1.jpg" class="home-tab-img">
                            <p class="home-rating-title">Title1</p>
                        </a>
                        <a href="" class="home-rating-link">
                            <img src="front/img2.jpg" class="home-rating-img">
                            <p class="home-tab-title">Title2</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img3.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title3</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title4</p>
                        </a>
                        <a href="" class="home-tab-link">
                            <img src="front/img2.jpg" class="home-tab-img">
                            <p class="home-tab-title">Title5</p>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <section>
            <div class="text-center">News</div>
            <div class="home-news">
                <a href="" class="home-news-link">
                    <img src="front/img.jpg" class="home-news-img">
                    <div class="home-news-info">
                        <p class="home-news-title">Title</p>
                        <p class="home-news-description">Short description</p>
                    </div>
                </a>
                <a href="" class="home-news-link">
                    <img src="front/img1.jpg" class="home-news-img">
                    <div class="home-news-info">
                        <p class="home-news-title">Title1</p>
                        <p class="home-news-description">Short description</p>
                    </div>
                </a>
                <a href="" class="home-news-link">
                    <img src="front/img2.jpg" class="home-news-img">
                    <div class="home-news-info">
                        <p class="home-news-title">Title1</p>
                        <p class="home-news-description">Short description</p>
                    </div>
                </a>
                <a href="" class="home-news-link">
                    <img src="front/img3.jpg" class="home-news-img">
                    <div class="home-news-info">
                        <p class="home-news-title">Title1</p>
                        <p class="home-news-description">Short description</p>
                    </div>
                </a>

            </div>
        </section>
        <footer-list></footer-list>
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
