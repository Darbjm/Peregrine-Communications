$(document).ready(() => {

    /* Change navbar color when scrolling */
    $(window).scroll(() => {
        const scrollPercent = ($(document).scrollTop() / 100)

        // if user has scrolled to the top make nav clear and change logo ect
        if (scrollPercent < 2.5) {
            $('.logo-text').css({ fontSize: '1rem', transition: '2.0s' })
            $('.path-logo').css({ fill: '#ffffff', transition: '2.0s' })
            $('.svg-logo').css({ marginBottom: '10px', transition: '2.0s' })
            $('.svg-logo').css({ height: '29px', transition: '2.0s' })
            $('.nav-container').css({ paddingTop: '30px', transition: '2.0s' })
            $('.navbar').css({ backgroundColor: '#e7eeec00', transition: '2.0s' })
            $('.nav-link').css({ color: '#ffffff', transition: '2.0s' })
            $('.nav-border').css({ borderTop: '#ffffff 1px solid', transition: '2.0s' })
            $('.nav-border').css({ borderBottom: '#ffffff 1px solid', transition: '2.0s' })
            $('.diamond').css({ backgroundColor: '#f8ee9a' })
            $('.nav-link').mouseenter(function() {
                $(this).css({ color: '#f8ee9a', transition: '0s' })
            }).mouseleave(function() {
                $(this).css({ color: '#ffffff', transition: '0s' })
            })
        }

        // if user has scrolled down make nav colored and turn logo green ect
        if (scrollPercent > 2.5) {
            $('.diamond').css({ backgroundColor: '#00B3AE' })
            $('.logo-text').css({ fontSize: '0', transition: '2.0s' })
            $('.path-logo').css({ fill: '#005d44', transition: '2.0s' })
            $('.svg-logo').css({ marginBottom: '0px', transition: '2.0s' })
            $('.svg-logo').css({ height: '15px', transition: '2.0s' })
            $('.nav-container').css({ paddingTop: '15px', transition: '2.0s' })
            $('.navbar').css({ backgroundColor: '#e7eeec', transition: '2.0s' })
            $('.nav-link').css({ color: '#484848', transition: '2.0s' })
            $('.nav-border').css({ borderTop: '#E3E3E3 1px solid', transition: '2.0s' })
            $('.nav-border').css({ borderBottom: '#ffffff00 1px solid', transition: '2.0s' })
            $('.nav-link').mouseenter(function() {
                $(this).css({ color: '#00B3AE' })
            }).mouseleave(function() {
                $(this).css({ color: '#484848' })
            })
            $('.navbar-toggler::after').css({ backgroundColor: '#005d44', transition: '2.0s' })
        }
    })

    /* Change navbar on open */
    $('button.navbar-toggler').click(() => {
        $('button.navbar-toggler').toggleClass('navbar-toggler-clicked')
        $('button.navbar-toggler').toggleClass('navbar-toggler-unclicked')
        $('span.1').toggleClass('transform-rotate--45')
        $('span.2').toggleClass('display-none')
        $('span.3').toggleClass('display-none')
        $('nav.navbar').toggleClass('navbar-expanded')
        $('a.nav-link').toggleClass('text-white')
        $('.path-logo').toggleClass('fill-white')
        $('.logo-text').toggleClass('display-none')
        $('div.nav-border').toggleClass('border-yellow')
        $('.diamond').toggleClass('display-none')
        $('.first-nav-row').toggleClass('margin-bottom')
        $('a.nav-link').toggleClass('upper')
        $('.menu-title').toggleClass('display-block')
        $('.nav-footer').toggleClass('display-flex')
        $('nav.navbar').toggleClass('max-height')
    })

    /* Change navbar button on click */
    $('button.navbar-toggler-clicked').click(() => {
        $('.navbar-toggler-clicked').css({ display: 'none' })
        $('.navbar-toggler').css({ display: 'flex' })
    })

    /* Change newsletter input placeholder when submitted */  
    $('button.newsletter-button').click(event => {
        event.preventDefault()
        $('input.newsletter-input').attr('placeholder', 'Subscribed')
    })

    /* Logo animation on scroll */
    $(window).scroll(() => {
        $('.navbar-default').toggleClass('navbar-shrink', $(this).scrollTop() > 50)
    })

    /* Function to make the square in the media section responsive */
    function adjustSquareHeight() {
        let sectionHeight = $('section.media').height()
        if (sectionHeight < 1000) {
            sectionHeight *= 1.1
        }
        if (sectionHeight > 1000 && sectionHeight < 1666) {
            sectionHeight *= 0.9
        }

        if (sectionHeight > 1665) {
            sectionHeight *= 0.8
        }
        const myString = sectionHeight + 'px'
        $('div.square-decoration').css('height', myString)
        $('div.square-decoration').css('width', myString)
    }

    /* Make article images same height as test */
    function adjustArticleImages() {
        if ($(window).width() < 769 && $(window).width() > 539) {
            const articleHeight = $('.article-card-bottom').outerHeight()
            $('.article-image').css({ height: articleHeight })
        }
        if ($(window).width() > 768) {
            $('.article-image').css({ height: '100%' })
        }
    }

    /* Make article images same height as test */
    if ($(window).width() < 768 && $(window).width() > 539) {
        const articleHeight = $('.article-card-bottom').outerHeight()
        $('.article-image').css({ height: articleHeight })
    }


    /* calls adjustSquareHeight anytime the browser window is resized */
    $(window).resize(() => {
        adjustSquareHeight()
        adjustArticleImages()
    })

    adjustArticleImages()
    adjustSquareHeight()
})

/* Keep viewport at the top of the page on load */
$(window).on('beforeunload',() => {
    $(window).scrollTop(0)
})