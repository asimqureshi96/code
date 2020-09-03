<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"
></script>
@extends('layout/center-column')

@section('content')
    <div class="text-center">
        <div class="grey-section mb-4">
            <h3>
                Visitor Registration
            </h3>
            @if (config('buzz.paid_show'))

                <p class="mb-0">You can register for your ticket below</p>
            @else

                <p class="normal-text mb-0">Choose from one of the options below to obtain your free ticket</p>
            @endif
        </div>

        <h5>{{ transUi('Register Manually') }}</h5>
        <div class="container desktopFooter">
            <div class="text-center row desktopFooter">
                <div class="col-md-4 desktopFooter">
                    <div class="welcomeButtons mt-2 desktopFooter" id="visitorbutton">
                        <a
                            href="step/1/?type=visitor"
                        >
                            <p id="visitorbuttonheader" class="welcomeButtonsText mt-2"><i class="fa fa-user"></i><br>VISITOR BUYER</p>

                            <p id="visitorbuttonText" class="normal-text-button desktopFooter">

                                Suitable for Event Planners, PAs/EAs, Agencies and HR/Office Professionals <br>
                                You must be responsible for the booking or management of events

                            </p> </a>
                    </div>

                </div>
                <div class="col-md-4 desktopFooter">
                    <div class="welcomeButtons mt-2 desktopFooter"  id="supplierbutton">
                        <a
                            href="step/1/?type=supplier"
                        >
                            <p id="supplierbuttonheader" class="welcomeButtonsTextsup mt-2"><i class="fa fa-building"></i><br>SUPPLIER</p>

                            <p id="supplierbuttonText" class="normal-text-button desktopFooter">

                                Suitable for Hoteliers, Caterers and Event Suppliers<br>
                                You must be currently working within the events or hospitality industries


                            </p> </a>
                    </div>

                </div>
                <div class="col-md-4 desktopFooter">
                    <div class="welcomeButtons mt-2 desktopFooter" id="vipbutton">
                        <a
                            href="step/1/?type=vip" style="text-decoration: white; color: white;"
                        >
                            <p id="vipbuttonheader"  class="welcomeButtonsText mt-2"><i class="fa fa-star"></i><br>VIP <br> BUYER</p>

                            <p id="vipbuttonText" class="normal-text-button-vip">
                               <span class="normal-text-button-vip desktopText"><br>
                  Suitable for event professionals who meet the VIP Buyer Criteria
View the full criteria
 </span> <a
                                    href="https://www.venuesandevents.co.uk/visit/hosted-buyers"
                                    class="normal-text-button desktopFooter"
                                    style="color: white; font-weight: bold"
                                    target="_blank"
                                >here</a>
                            </p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center col-md-12">

        <div class="welcomeButtons mt-2 mobileFooter"  id="supplierbutton">
            <a
                href="step/1/?type=supplier"
            >
                <p id="buttonText" class="welcomeButtonsText mt-2">VISITOR</p>

        </div>
        <div class="welcomeButtons mt-2 mobileFooter"  id="supplierbutton">
            <a
                href="step/1/?type=supplier"
            >
                <p id="buttonText" class="welcomeButtonsText mt-2">SUPPLIER</p>

        </div>
        <div class="welcomeButtons mobileFooter" id="vipbutton">
            <a
                href="step/1/?type=vip" style="text-decoration: white; color: white;"
            >
                <p id="buttonText" class="welcomeButtonsText mt-3">VIP BUYER</p>
            </a>
        </div
        </div>

        <div class="mt-4 row separator">
            <div><span>or</span></div>
        </div>

        @if(config('buzz.social_reg_enabled'))
            <h5>{{ transUi('Register Socially') }}</h5>

            @include('partials.social-reg')

        @endif
        @if (passwordIsEnabled())
            <div class="grey-section fit-to-bottom mt-4">
                <p class="mb-1">{{ transUi('Already registered for this year\'s show') }}?</p>
                <a href="{{ route('auth::login') }}">{{ transUi('Login to your registration') }}</a>
            </div>
        @endif
    </div>
@endsection
<script>
$(document).ready(function() {
    $('#visitorbuttonText').css('display', 'none');
    $('#supplierbuttonText').css('display', 'none');
    $('#vipbuttonText').css('display', 'none');

    $('#vipbutton').mouseenter(function() {
        $(this).addClass('welcomeButtonsHover');
        $('#vipbuttonText').css('display', 'block');
        $('#vipbuttonheader').css('display', 'none');
    });
    $('#vipbutton').mouseleave(function() {
        $(this).removeClass('welcomeButtonsHover');
        $('#vipbuttonText').css('display', 'none');
        $('#vipbuttonheader').css('display', 'block');
    });

    $('#supplierbutton').mouseenter(function() {
        $(this).addClass('welcomeButtonsHover');
        $('#supplierbuttonText').css('display', 'block');
        $('#supplierbuttonheader').css('display', 'none');
    });
    $('#supplierbutton').mouseleave(function() {
        $(this).removeClass('welcomeButtonsHover');
        $('#supplierbuttonText').css('display', 'none');
        $('#supplierbuttonheader').css('display', 'block');
    });
    $('#visitorbutton').mouseenter(function() {
        $(this).addClass('welcomeButtonsHover');
        $('#visitorbuttonText').css('display', 'block');
        $('#visitorbuttonheader').css('display', 'none');
    });
    $('#visitorbutton').mouseleave(function() {
        $(this).removeClass('welcomeButtonsHover');
        $('#visitorbuttonText').css('display', 'none');
        $('#visitorbuttonheader').css('display', 'block');
    });
});
</script>
