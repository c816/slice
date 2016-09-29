import _ from 'underscore';
import Vue from 'vue';
import VueResource from 'vue-resource';

let markdown = require('markdown').markdown;

Vue.use(VueResource);

let app = new Vue({
    computed: {
        slides: {
            get() {
                let arr = this.raw.split("* * *");

                return _.shuffle(arr);
            }
        },
        slidesLength: {
            get() {
                return this.slides.length;
            }
        }
    },
    data: {
        raw: '',
        slideIndex: 0
    },
    el: 'html',
    methods: {
        backward() {
            if(this.slideIndex !== 0) {
                return this.slideIndex--;
            } else {
                return this.slideIndex = (this.slidesLength - 1);

            }
        },
        forward() {
            if(this.slideIndex < (this.slidesLength - 1)) {
                return this.slideIndex++;
            } else {
                return this.slideIndex = 0;
            }
        }
    },
    ready() {
        this.$http.get('./assets/files/content.html').then((response) => {
            this.raw = response.body;
        });
    }
});
