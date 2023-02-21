import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import { Autoplay, Navigation, Pagination } from "swiper";
import Swiper from "swiper";
Swiper.use([Autoplay, Navigation, Pagination]);
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
