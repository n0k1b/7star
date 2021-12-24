new Glider(document.querySelector('.glider'), {
    slidesToShow: 1,
    dots: '#dots',
    draggable: true,
    arrows: {
        prev: '.glider-prev',
        next: '.glider-next'
    },
    settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        duration: 0.25
    }
});
new Glider(document.querySelector('.hot_sales_slider2'), {
    slidesToShow: 3,
    dots: '.sales_dots',
    draggable: true,
    arrows: {
        prev: '.sales_prev',
        next: '.sales_next'
    },
    responsive: [{
            // screens greater than >= 775px
            breakpoint: 775,
            settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: 'auto',
                slidesToScroll: 1,
                itemWidth: 158,
                duration: 0.25
            }
        },
        {
            // screens greater than >= 1024px
            breakpoint: 1035,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                itemWidth: 'auto',
                duration: 0.25
            },
        },
        {
            // screens greater than >= 1024px
            breakpoint: 1360,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                itemWidth: 'auto',
                duration: 0.25
            },
        }
    ]
})