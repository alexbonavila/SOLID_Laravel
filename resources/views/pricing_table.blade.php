@extends('layouts.app')

@section('htmlheader_title')
    Pricing Table
@endsection
<style>
    .container{
        display: flex;
        display: -webkit-flex;
        flex-flow: row wrap;
        -webkit-flex-flow: row wrap;
    }
    .columna1,
    .columna2,
    .columna3,
    .columna4 {
        width: 100%;
    }
    @media (min-width: 600px) {
        .columna1,
        .columna2 {
            width: 50%;
        }
        .columna3,
        .columna4 {
            width: 50%;
        }
    }
    @media (min-width: 800px) {
        .columna1,
        .columna2,
        .columna3,
        .columna4 {
            width: 25%;
        }
        .container{
            width: 800px;
            margin-right: auto;
            margin-left: auto;
        }
    }
    .pricing-card {
        background: white;
        padding: 10px;
        margin: 10px;
        border: black solid 1px;
        border-radius: 25px;
    }
    .card-header {
        text-align: center;
        border: black solid 1px;
        border-radius: 25px;
        color: white;
        font-size: 20px;
        font-weight: bold;
    }
    .bck-red {
        background: grey;
    }
    .bck-blue {
        background: blue;
    }
    .bck-orange {
        background: red;
    }
    .card-body {
        margin: 10px;
    }
    .card-footer {
        text-align: center;
        border: black solid 1px;
        border-radius: 25px;
        color: white;
    }
    .pricing-link {
        color: white;
        font-weight: bold;
    }
    .price {
        font-size: 15px;
    }
</style>

@section('main-content')

    <div class="container">
        <section class="columna1">

            <div class="pricing-card">

                <div class="card-header bck-red">
                    Free
                    <p class="price">Free</p>
                </div>

                <div class="card-body">
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Dolorem ducimus enim eum ipsam modi, non. Sint!</li>
                    </ul>
                </div>

                <div class="card-footer bck-red">
                    <a class="pricing-link" href="#">BUY</a>
                </div>

            </div>

        </section>

        <section class="columna2">

            <div class="pricing-card">

                <div class="card-header bck-blue">
                    Basic
                    <p class="price">25€/Month</p>
                </div>

                <div class="card-body">

                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Dolorem ducimus enim eum ipsam modi, non. Sint!</li>
                        <li>Animi at eligendi exercitationem illum modi quidem, voluptatem.</li>
                    </ul>
                </div>

                <div class="card-footer bck-blue">
                    <a class="pricing-link" href="#">BUY</a>
                </div>

            </div>

        </section>

        <section class="columna3">

            <div class="pricing-card">

                <div class="card-header bck-orange">
                    Pro
                    <p class="price">100€/Month</p>
                </div>

                <div class="card-body">
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Dolorem ducimus enim eum ipsam modi, non. Sint!</li>
                        <li>Animi consectetur exercitationem modi molestiae nihil ratione recusandae.</li>
                        <li>Animi at eligendi exercitationem illum modi quidem, voluptatem.</li>
                    </ul>
                </div>

                <div class="card-footer bck-orange">
                    <a class="pricing-link" href="#">BUY</a>
                </div>

            </div>

        </section>
    </div>
@endsection