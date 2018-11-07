<!DOCTYPE html>
<html lang="en">

@include('wedding.partials.head')

<body id="home">

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="inner">
                <span class="icon"><i class="fi flaticon-two"></i></span>
            </div>
        </div>
        <!-- end preloader -->

        <!-- start of hero -->
        @include('wedding.partials.slider')
        <!-- end of hero slider -->

        <!-- Start header -->
        @include('wedding.partials.header')
        <!-- end of header -->

        <!-- start wedding-couple-section -->
        @include('wedding.partials.couple')
        <!-- end wedding-couple-section -->

        <!-- start count-down-section -->
        @include('wedding.partials.countdown')
        <!-- end count-down-section -->

        <!-- start story-section -->
        @include('wedding.partials.story')
        <!-- end story-section -->

        <!-- start cta -->
        @include('wedding.partials.celebrate')
        <!-- end cta -->

        <!-- start inportant-people-section -->
        @include('wedding.partials.party')
        <!-- end inportant-people-section -->

        <!-- start events-section -->
        @include('wedding.partials.details')
        <!-- end events-section -->

        <!-- start getting-there-section -->
        @include('wedding.partials.directions')
        <!-- end getting-there-section -->

        <!-- start gallery-section -->
        @include('wedding.partials.gallery')
        <!-- end gallery-section -->

        <!-- start gift-registration-section -->
        @include('wedding.partials.registration')
        <!-- end gift-registration-section -->

        <!-- start rsvp-section -->
        @include('wedding.partials.rsvp')
        <!-- end rsvp-section -->        

        <!-- start footer -->
        {{-- @include('wedding.partials.footer') --}}
        <!-- end footer -->

    </div>
    <!-- end of page-wrapper -->


    <!-- All JavaScript files
    ================================================== -->
    @include('wedding.partials.foot')

</body>
</html>
