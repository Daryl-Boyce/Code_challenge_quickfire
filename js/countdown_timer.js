// Set the date we're counting down to
var countDownDate = new Date("Aug 15, 2027 21:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for hours, minutes and seconds
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  function two_digits(n){
    return (n < 10 ? "0" : "") + n;
}

  // Display the result in the element with id="demo"
  document.getElementById("countdown_timer").innerHTML = two_digits(hours) + ":" + two_digits(minutes) + ":" + two_digits(seconds);

  // If the count down is finishes write text to explain so
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown_timer").innerHTML = "EXPIRED";
  }
}, 1000);

