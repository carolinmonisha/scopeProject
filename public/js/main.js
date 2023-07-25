(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        dots: false,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });
    
})(jQuery);

$(document).ready(function(){
    // Countries
    var country_arr = new Array("Select Country","AUSTRALIA","INDIA","NEW ZEALAND","USA","UAE","MAURITIUS","QATAR");

    $.each(country_arr, function (i, item) {
        $('#country').append($('<option>', {
            value: i,
            text : item,
        }, '</option>' ));
    });

    // States
    var s_a = new Array();
    s_a[0]="Select State";
    s_a[1]="Select State|QUEENSLAND|VICTORIA";
    s_a[2]="Select State|ANDHRAPRADESH|KARNATAKA|TAMILNADU|DELHI|GOA|W-BENGAL|GUJARAT|MADHYAPRADESH|MAHARASHTRA|RAJASTHAN";
    s_a[3]="Select State|AUCKLAND";
    s_a[4]="Select State|NEWJERSEY|ILLINOIS";
    s_a[5]="Select State|DUBAI";
    s_a[6]="Select State|MAURITIUS";
    s_a[7]="Select State|DOHA|WAKHRA";

    // Cities
    var c_a = new Array();
    c_a['QUEENSLAND']="BRISBANE";
    c_a['VICTORIA']="MELBOURNE";
    c_a['ANDHRAPRADESH']="HYDERABAD";
    c_a['KARNATAKA']="BANGLORE";
    c_a['TAMILNADU']="CHENNAI";
    c_a['DELHI']="DELHI";
    c_a['GOA']="GOA";
    c_a['W-BENGAL']="KOLKATA";
    c_a['GUJARAT']="AHMEDABAD1|AHMEDABAD2|AHMEDABAD3|BARODA|BHAVNAGAR|MEHSANA|RAJKOT|SURAT|UNA";
    c_a['MADHYAPRADESH']="INDORE";
    c_a['MAHARASHTRA']="MUMBAI|PUNE";
    c_a['RAJASTHAN']="ABU";
    c_a['AUCKLAND']="AUCKLAND";
    c_a['NEWJERSEY']="EDISON";
    c_a['ILLINOIS']="CHICAGO";
    c_a['MAURITIUS']="MAURITIUS";
    c_a['DUBAI']="DUBAI";
    c_a['DOHA']="CORNICHE|ALMANSOORA";
    c_a['WAKHRA']="ALBEEDA";


    $('#country').change(function(){
        var c = $(this).val();
        var state_arr = s_a[c].split("|");
        $('#state').empty();
        $('#city').empty();
        if(c==0){
            $('#state').append($('<option>', {
                value: '0',
                text: 'Select State',
            }, '</option>'));
        }else {
            $.each(state_arr, function (i, item_state) {
                $('#state').append($('<option>', {
                    value: item_state,
                    text: item_state,
                }, '</option>'));
            });
        }
        $('#city').append($('<option>', {
            value: '0',
            text: 'Select City',
        }, '</option>'));
    });

    $('#state').change(function(){
        var s = $(this).val();
        if(s=='Select State'){
            $('#city').empty();
            $('#city').append($('<option>', {
                value: '0',
                text: 'Select City',
            }, '</option>'));
        }
        var city_arr = c_a[s].split("|");
        $('#city').empty();

        $.each(city_arr, function (j, item_city) {
            $('#city').append($('<option>', {
                value: item_city,
                text: item_city,
            }, '</option>'));
        });


    });
});

