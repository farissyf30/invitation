// require('./bootstrap');
import * as bootstrap from 'bootstrap'
import $ from 'jquery';
window.$ = window.jQuery = $;

import AOS from 'aos';
import 'aos/dist/aos.css';

$(document).ready(function () {
    AOS.init({
        duration: 1200,
    });

})