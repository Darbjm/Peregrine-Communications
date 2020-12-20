$(document).ready(() => {
  /* Change navbar color when scrolling */
  $(window).scroll(function () {
    if ($(document).scrollTop() > 100) {
      $('.navbar').addClass('scrolled')
    } else {
      $('.navbar').removeClass('scrolled')
    }
});


  /* Change newsletter input placeholder when submitted */  
  $('button.newsletter-button').click(event => {
    event.preventDefault()
    $('input.newsletter-input').attr('placeholder', 'Subscribed')
  })

  /* Logo animation on scroll */
  $(window).scroll(function () {
    $(".navbar-default").toggleClass("navbar-shrink", $(this).scrollTop() > 50)
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

