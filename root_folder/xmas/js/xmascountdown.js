//set var for currentYear, current date, christmas day, and countdown
 var currentYear = new Date().getFullYear();
 var now = new Date();
 var xmas = new Date('12/25/' + currentYear + ' 00:00:00');
 var countdown = xmas - now;
 
 //when doc loads call doCountdown to set the text when page loads
$(document).ready(function () {
 doCountdown();
 
 //Then call doTimer which calls the doCountdown every second
 doTimer();
 
 console.log(newyears - now);
 });
var t;
 function doTimer() {
 doCountdown();
 t = setTimeout('doTimer()', 1000);
 }
 
 // does the math for time before xmas. 
function doCountdown() {
 now = new Date();
 countdown = xmas - now;
var ms = countdown / 1000;
var sec = Math.floor(ms % 60)
 ms /= 60;
var min = Math.floor(ms % 60)
 ms /= 60;
var hr = Math.floor(ms % 24)
 ms /= 24;
 var day = Math.floor(ms);
var div = $('div.countdown');
 if (countdown > 0) { // Not yet Christmas display countdown
 div.html(day + ' days, ' + hr + ' hours, ' + min + ' minutes and ' + sec + ' seconds' + ' until Christmas!!!');
 div.removeClass('merryxmas');
 } else if (countdown > -86400000) { // Christmas! Stop showing at 12:00:00
 div.html('Merry Christmas!');

 } else { // Christmas has passed. Update xmas date to next year
 xmas = new Date('12/25/' + (currentYear + 1) + ' 00:00:00');
 }
}
