/* Function to make the square in the media section responsive */
function adjustSquareHeight() {
  let myHeight = $('section.media').height()
  if (myHeight < 1300) {
    myHeight *= 1.1
  }
  const myString = myHeight + 'px'
  $('div.square-decoration').css('height', myString)
  $('div.square-decoration').css('width', myString)
}

$(document).ready(() => {
  $('button.newsletter-button').click(event => {
    event.preventDefault()
    $('input.newsletter-input').attr('placeholder', 'Subscribed')
  })
  adjustSquareHeight()
})

/* calls adjustSquareHeight anytime the browser window is resized */
$(window).resize(() => {
  adjustSquareHeight()
})