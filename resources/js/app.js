"use strict"

import './bootstrap';
import 'flowbite';

import jQuery from 'jquery';
window.$ = jQuery;

import { MySlider, Lazyload, Header, Footer } from './component';

$(function () {
    MySlider.banner();
    Lazyload.init();
    Header.init();
    Footer.init();
});