import './bootstrap';
import 'swiper/css';
import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';
import '../css/app.css';

const swiper = new Swiper('.mySwiper', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
});