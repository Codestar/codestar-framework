//
// Twitter Share Button
window.twttr = (function (d,s,id) {
  var t, js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return; js=d.createElement(s); js.id=id; js.async=1;
  js.src="https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);
  return window.twttr || (t = { _e: [], ready: function(f){ t._e.push(f) } });
}(document, "script", "twitter-wjs"));

//
// Lightbox for screenshts
baguetteBox.run('.csf-screenshots-gallery');

//
// Toogle down for mobile menu
var toggleTrigger = document.getElementById('toggle-trigger');
var container     = document.getElementById('toggle-dropdown');
var toggleHandler = function( event ) {
  event.preventDefault();

  if ( !container.classList.contains('active') ) {
    container.classList.add('active');
  } else {
    container.classList.remove('active');
  }
}

toggleTrigger.addEventListener('click', toggleHandler, false);
toggleTrigger.addEventListener('touchstart', toggleHandler, false);
