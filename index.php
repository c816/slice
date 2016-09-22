<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    </head>
    <body>
        <div class="Nav__wrapper">
            <div class="container">
                <div class="Nav">
                    <ul class="Nav__list --header">
                        <li class="Nav__list-item" v-for="item in nav" v-if="!item.footerOnly">
                            <a :href="item.url">
                                {{ item.text }}
                                <i class="fa fa-caret-down" v-show="item.subs"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="Nav__locations">
                        <a href="#"><i class="fa fa-map-marker"></i> Four Locations to Serve You</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="Header__wrapper">
            <div class="container">
                <div class="Header">
                    <div class="Header__logo">
                        <img src="/assets/img/logo.png">
                    </div>

                    <ul class="Header__numbers">
                        <li class="Header__numbers-item --local">(843) 720-0810</li>
                        <li class="Header__numbers-item --toll-free">(888) 250-8674</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="MainGraphic__wrapper">
            <div class="MainGraphic">
                <div class="MainGraphic__slideshow" v-show="showSlideshows">
                    <div class="MainGraphic__slide" v-for="slide in mainGraphicSlides" :style="{ backgroundImage: 'url(' + slide.image + ')' }">
                    </div>
                </div>
                <div class="MainGraphic__overlay">
                    Proudly Serving South Carolina for Over 40 Years.
                </div>
            </div>
        </div>

        <div class="HomeContent__wrapper">
            <div class="container">
                <div class="HomeContent">
                    <div class="HomeContent__text">
                        <p class="HomeContent__text-breakout">As a full-service law firm committed to excellence, Clawson and Staubes, LLC has been providing clients with quality legal services for more than 40 years.</p>
                        <p class="m-b-0">We trace our roots to 1975, when we began as a general civil practice.  Over the years, we have evolved into a full service law firm with offices in two states.  We practice in a wide variety of areas including civil litigation, workers’ compensation, commercial law, bankruptcy, corporate law, estate planning, real estate, and alternative dispute resolution.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="HomeProfiles__wrapper" v-show="showSlideshows">
            <div class="HomeProfiles">

                <div class="HomeProfiles__slideshow" v-for="attorneyGroup in attorneyGroups">
                    <div class="HomeProfile" v-for="attorney in attorneyGroup" :style="{ backgroundImage: 'url(' + attorney.image + ')' }">
                        <a class="HomeProfile__link" href="#">{{ attorney.name }}</a>
                    </div>
                </div>

                <div class="HomeProfiles__slideshow --link">
                    <a class="HomeProfiles__link" href="#">
                        <span class="HomeProfiles__link-span --meet">Meet</span>
                        <span class="HomeProfiles__link-span --the">
                            <span>the</span>
                        </span>
                        <span class="HomeProfiles__link-span --team">Team</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="HomeContent__wrapper">
            <div class="container">
                <div class="HomeContent">
                    <div class="HomeContent__text">
                        <p class="m-b-0">Accidents often leave people confused, overwhelmed and with a sense of helplessness. In addition to coping with physical and emotional trauma, you must sort through the financial hardships associated with lost wages and the costs of medical treatment and recovery. You will have questions about whether you have a right of recovery and how to negotiate the legal process. The Charleston personal injury attorneys at the Clawson and Staubes, LLC: Injury Group will answer your questions and develop a focused legal strategy to pursue a recovery. We have the knowledge, experience, resources and perseverance to help you achieve results.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="HomePractices__wrapper">
            <div class="container">
                <div class="HomePractices">
                    <div class="HomePractices__header">
                        <h1>Our South Carolina Practice Areas</h1>
                    </div>

                    <div class="HomePractices__filter">
                        <div class="input-group">
                            <input class="form-control" placeholder="Filter Your Results" type="text" v-model="practiceAreaFilter">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button" v-on:click="clearPracticeAreaFilter()" v-show="practiceAreaFilter"><i class="fa fa-close"></i></button>
                            </span>
                        </div>
                    </div>

                    <div class="HomePractice__wrapper" v-for="practiceArea in practiceAreas | filterBy practiceAreaFilter in 'name' 'text'">
                        <a class="HomePractice" href="#">
                            <div class="HomePractice__header">
                                {{ practiceArea.name | capitalizeAll }} <i class="fa fa-caret-right"></i>
                            </div>
                            <div class="HomePractice__body">
                                {{ practiceArea.text | capitalize }}.
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="CallToAction__wrapper">
            <div class="container">
                <div class="CallToAction">
                    <div class="CallToAction__text">
                        A Tradition of Success Since 1975.
                    </div>
                    <div class="CallToAction__button">
                        <a class="Button +call-to-action" href="#">Learn More <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="HomePrinciples__wrapper">
            <div class="container">
                <div class="HomePrinciples">
                    <div class="HomePrinciples__header">
                        <h2>Our Principles & Beliefs</h2>
                    </div>

                    <div class="HomePrinciple__wrapper">
                        <a class="HomePrinciple" href="#">
                            1. Client Driven
                        </a>
                    </div>
                    <div class="HomePrinciple__wrapper">
                        <a class="HomePrinciple" href="#">
                            2. Integrity
                        </a>
                    </div>
                    <div class="HomePrinciple__wrapper">
                        <a class="HomePrinciple" href="#">
                            3. Innovative Solutions
                        </a>
                    </div>
                    <div class="HomePrinciple__wrapper">
                        <a class="HomePrinciple" href="#">
                            4. Commitment to Excellence
                        </a>
                    </div>
                    <div class="HomePrinciple__wrapper">
                        <a class="HomePrinciple" href="#">
                            5. Community Involvement
                        </a>
                    </div>
                    <div class="HomePrinciple__wrapper">
                        <a class="HomePrinciple" href="#">
                            6. Proven Leadership
                        </a>
                    </div>
                    <div class="HomePrinciple__wrapper">
                        <a class="HomePrinciple" href="#">
                            7. Teamwork
                        </a>
                    </div>
                    <div class="HomePrinciple__wrapper">
                        <a class="HomePrinciple" href="#">
                            8. Dedicated Advocates
                        </a>
                    </div>
                    <div class="HomePrinciple__wrapper">
                        <a class="HomePrinciple" href="#">
                            9. Effective Communication
                        </a>
                    </div>

                    <div class="HomePrinciples__text">
                        At Clawson and Staubes, LLC: Injury Group, our Charleston attorneys are committed to finding unique solutions to your problems. We will always meet with you in person to discuss the nature of your accident and help you make an informed decision about which course of action will be in your best interest. Our personal injury attorneys will act as vigorous advocates for your interests until a resolution is achieved. Beyond the cases our firm handles, we pride ourselves on the work we do in the Charleston to help make our community a better place to live for everyone.
                    </div>
                </div>
            </div>
        </div>

        <div class="HomeTestimonial__wrapper">
            <div class="container">
                <div class="HomeTestimonial">
                    <ul class="HomeTestimonial__list">
                        <li class="HomeTestimonial__list-item --quote">"Clawson and Staubes represented me on a personal injury matter. The attorneys and paralegals were helpful, compassionate, and responsive."</li>
                        <li class="HomeTestimonial__list-item --source">- Scott W. <span style="color:yellow"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="HomeContent__wrapper">
            <div class="container">
                <div class="HomeContent">
                    <div class="HomeContent__text">
                        <p class="m-b-0">If you or a loved one has been hurt in a preventable accident that was caused by someone else, you should reach out to a Charleston personal injury attorneys at Clawson and Staubes, LLC: Injury Group to talk about what compensation you may now be able to recover with a claim. To speak with a personal injury attorney in Charleston about the particulars of your claim, please call our Charleston offices at (843) 720-0810 today.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="HomeForm__wrapper">
            <div class="container">
                <div class="HomeForm">
                    <div class="HomeForm__inputs">
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Case Type</label>
                                <select class="form-control">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-warning" type="submit">Submit</button>
                            </div>
                            <p>Please review our Disclaimer via the link at the bottom of this page.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="HomeMaps__wrapper">
            <div class="container">
                <div class="HomeMaps">
                    <div class="HomeMaps__header">
                        <h2>Four Locations to Serve You</h2>
                    </div>

                    <div class="HomeMap__wrapper" v-for="location in locations">
                        <a class="HomeMap" href="#">
                            <div class="HomeMap__header">
                                {{ location.city }}
                            </div>
                            <div class="HomeMap__map">
                                <iframe :src="location.map" v-if="location.map"></iframe>
                            </div>
                            <ul class="HomeMap__list">
                                <li>Clawson & Staubes</li>
                                <li>{{ location.streetAddress }}</li>
                                <li>{{ location.city }}, {{ location.state }} {{ location.zip }}</li>
                                <li>{{ location.phone }}</li>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="Footer__wrapper">
            <div class="container">
                <div class="Footer">
                    <ul class="Nav__list --footer">
                        <li class="Nav__list-item" v-for="item in nav">
                            <a :href="item.url">
                                {{ item.text }}
                            </a>
                        </li>
                    </ul>

                    <ul class="Nav__list --footer">
                        <li class="Nav__list-item" v-for="account in socialMediaAccounts">
                            <a href="#">
                                <i class="fa fa-{{ account }}-square"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <script src="/assets/js/app.js"></script>
    </body>
</html>
