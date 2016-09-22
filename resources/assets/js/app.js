window.$ = window.jQuery = require('jquery');
require('jquery-cycle2/build/jquery.cycle2.min.js');
require('imagesloaded');

import _ from 'underscore';
import faker from 'faker';
import Vue from 'vue';

let app = new Vue({
    computed: {
        attorneyGroups: {
            get() {
                let attorneys = _.shuffle(this.attorneys);
                return _.groupBy(attorneys, (attorney, index) => {
                    return Math.floor(index / 10);
                });
            }
        }
    },
    data: {
        attorneys: [],
        locations: [
            {
                city: 'Charleston',
                map: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.261520819071!2d-79.90452558481572!3d32.86479938094573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88fe6fe9330d013b%3A0xc21a10d6eef17499!2sClawson+and+Staubes%2C+LLC%3A+Injury+Group!5e0!3m2!1sen!2sus!4v1458159842359',
                phone: '(843) 720-0810',
                state: 'SC',
                streetAddress: '126 Seven Farms Drive #201',
                zip: '29492'
            },
            {
                city: 'Charlotte',
                map: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.735409486088!2d-80.8850005490333!3d35.16321896571682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88569ec412b1242f%3A0x896985e7373f976c!2sClawson+%26+Staubes%2C+PLLC!5e0!3m2!1sen!2sus!4v1452543677738',
                phone: '(704) 940-9128',
                state: 'NC',
                streetAddress: '756 Tyvola Road #130',
                zip: '28217'
            },
            {
                city: 'Columbia',
                map: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.379192648054!2d-81.03360767657387!3d34.00847635550744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f8a4d5c4a26e0b%3A0x11192d2081601c91!2sClawson+and+Staubes%2C+LLC!5e0!3m2!1sen!2sus!4v1452541680068',
                phone: '(800) 774-8242',
                state: 'SC',
                streetAddress: '1612 Marion Street #200',
                zip: '29201'
            },
            {
                city: 'Greenville',
                map: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3274.1452936408!2d-82.38793204903978!3d34.85257638248006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885831dc7bdb6fbd%3A0xd388eb9d42fbe12e!2sClawson+%26+Staubes+LLC!5e0!3m2!1sen!2sus!4v1452543472339',
                phone: '(864) 331-8940',
                state: 'SC',
                streetAddress: '1000 E North Street #200',
                zip: '29601'
            }
        ],
        mainGraphicSlides: [
            {
                image: 'http://placehold.it/1600x600/000000'
            },
            {
                image: 'http://placehold.it/1600x600/666666'
            },
            {
                image: 'http://placehold.it/1600x600/333333'
            },
            {
                image: 'http://placehold.it/1600x600/999999'
            }
        ],
        nav: [
            {
                footerOnly: true,
                text: 'Home',
                url: '/home'
            },
            {
                text: 'About',
                url: '/about'
            },
            {
                text: 'Attorneys',
                url: '/attorneys'
            },
            {
                text: 'Practice Areas',
                url: '/practice-areas',
                subs: [
                    {
                        text: 'Alpha',
                        url: '/alpha'
                    },
                    {
                        text: 'Bravo',
                        url: '/bravo'
                    },
                    {
                        text: 'Charlie',
                        url: '/charlie'
                    }
                ]
            },
            {
                footerOnly: true,
                text: 'Results',
                url: '/results'
            },
            {
                footerOnly: true,
                text: 'Testimonials',
                url: '/testimonials'
            },
            {
                text: 'News',
                url: '/news'
            },
            {
                text: 'Contact',
                url: '/contact'
            },
            {
                footerOnly: true,
                text: 'Disclaimer',
                url: '/disclaimer'
            },
            {
                footerOnly: true,
                text: 'Sitemap',
                url: '/sitemap'
            },
            {
                footerOnly: true,
                text: 'Login',
                url: '/wp-login.php'
            }
        ],
        practiceAreaFilter: '',
        practiceAreas: [],
        showSlideshows: false,
        socialMediaAccounts: [
            'facebook',
            'google-plus',
            'linkedin',
            'twitter'
        ]
    },
    el: 'html',
    filters: {
        capitalizeAll(str) {
            return str.replace(/\b\w/g, function(l){ return l.toUpperCase() });
        }
    },
    methods: {
        clearPracticeAreaFilter() {
            this.$set('practiceAreaFilter', '');
        }
    },
    ready() {
        _.each(_.range(24), (value) => {
            this.practiceAreas.push({
                name: faker.lorem.words(2),
                text: faker.lorem.words(15)
            });
        });

        _.each(_.range(40), (value) => {
            let color = faker.internet.color();
            this.attorneys.push({
                image: 'http://placehold.it/480x480/' + color.slice(1, 7),
                name: faker.name.findName()
            });
        });

        $('body').imagesLoaded({ background: true }, () => {
            $('.MainGraphic__slideshow').cycle({
                autoHeight: '3:1',
                slides: '.MainGraphic__slide'
            });
            $('.HomeProfiles__slideshow').cycle({
                autoHeight: '1:1',
                pauseOnHover: '.HomeProfiles__wrapper',
                slides: '.HomeProfile'
            });
            this.$set('showSlideshows', true);
        });
    }
});
