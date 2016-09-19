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
        <div class="container">
            <div class="row">
                <div class="col-xs-12 p-y-1 text-xs-right clearfix">
                    <img class="img-fluid" src="/assets/img/building-champions.png">
                </div>
                <div class="col-xs-12 text-xs-right clearfix">
                    <a href="#" v-on:click="backward()"><i class="fa fa-arrow-left"></i></a> &nbsp; <a href="#" v-on:click="forward()"><i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="col-xs-12 clearfix" v-for="slide in slides" v-show="slideIndex == $index">
                    {{{ slide }}}
                </div>
            </div>
        </div>

        <script src="/assets/js/app.js"></script>
    </body>
</html>
