const a = 0;
$(window).scroll(function () {

    const oTop = $('#counter').offset().top - window.innerHeight;
    console.log($('#counter').offset());
    if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter-value').each(function () {
            const $this = $(this),
                countTo = $this.attr('data-count');
            $(this).animate({ fontSize: "28px" }, 2500);
            $({
                countNum: $this.text()
            }).animate({
                countNum: countTo
            },

                {

                    duration: 2500,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });
        });
        a = 1;
    }
});
