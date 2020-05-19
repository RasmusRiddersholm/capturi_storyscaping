<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
window.addEventListener("scroll", function() { // detect scroll event

  let mySound = document.getElementById("myaudio"); // select audio id
  let lyd = document.getElementById("lyd");
  console.log("Is the #lyd visible or not? " + elFllVsbl(lyd)); // test

// Below: start and stop audio 
  if (elFllVsbl(lyd)) { // if the #lyd div is visible then
    if (!(mySound.curentTime > 0)) {
      mySound.play(); // play audio
    }
  } else {
    mySound.pause();
    mySound.currentTime = 0; // rewind the sound
  }
})

// this function will check whether a tag is visible
function elFllVsbl(el) {
  return (el.getBoundingClientRect().top >= 0 && el.getBoundingClientRect().bottom < window.innerHeight);
}</script>
<!-- end Simple Custom CSS and JS -->
