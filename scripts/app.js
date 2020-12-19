/* Function to make the square in the media section responsive */
function adjustSquareHeight() {
  const myHeight = $('section.media').height()
  const myString = (myHeight * 1.1) + 'px'
  $('div.square-decoration').css('height', myString)
  $('div.square-decoration').css('width', myString)
}

$(document).ready(() => {
  adjustSquareHeight()
})

/* calls adjustSquareHeight anytime the browser window is resized */
$(window).resize(() => {
  adjustSquareHeight()
})