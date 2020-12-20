$(document).ready(() => {

    /* Change navbar color when scrolling */
    $(window).scroll(() => {
        const scrollPercent = ($(document).scrollTop() / 100)

        // if user has scrolled to the top make nav clear and change logo
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
        }

        // if user has scrolled down make nav colored and turn logo green
        if (scrollPercent > 2.5) {
            $('.logo-text').css({ fontSize: '0', transition: '2.0s' })
            $('.path-logo').css({ fill: '#005d44', transition: '2.0s' })
            $('.svg-logo').css({ marginBottom: '0px', transition: '2.0s' })
            $('.svg-logo').css({ height: '15px', transition: '2.0s' })
            $('.nav-container').css({ paddingTop: '15px', transition: '2.0s' })
            $('.navbar').css({ backgroundColor: '#e7eeec', transition: '2.0s' })
            $('.nav-link').css({ color: '#484848', transition: '2.0s' })
            $('a.nav-link').hover(() => {
                $( this ).css({ color: '#00B3AE' })
                $('.diamond').css({ backgroundColor: '#00B3AE' })
            })
            $('.nav-border').css({ borderTop: '#E3E3E3 1px solid', transition: '2.0s' })
            $('.nav-border').css({ borderBottom: '#ffffff00 1px solid', transition: '2.0s' })
        }
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
        const myString = sectionHeight + 'px'
        $('div.square-decoration').css('height', myString)
        $('div.square-decoration').css('width', myString)
    }
  

    /* calls adjustSquareHeight anytime the browser window is resized */
    $(window).resize(() => {
        adjustSquareHeight()
    })

    adjustSquareHeight()
})

/* Keep viewport at the top of the page on load */
$(window).on('beforeunload',() => {
    $(window).scrollTop(0)
})