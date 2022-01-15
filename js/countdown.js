// Set the date we're counting down to
var countDownDate = new Date("Jan 23, 2022 10:13:25").getTime();
var timer = $('#timer');
var timerCeremony = $('#timer-ceremony');

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="timer"
  timer.find('#timer-day').text(days);
  timer.find('#timer-hour').text(hours);
  timer.find('#timer-minute').text(minutes);
  timer.find('#timer-second').text(seconds);
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    timer.hide();
    timerCeremony.text("In Ceremony").show();
  }
}, 1000);

var btnOpen = $('#btn-open');


var formAdd = $('#form-add');
var inputNama = formAdd.find('#input-nama');
var inputAddress = formAdd.find('#input-address');
var inputUcapan = formAdd.find('#input-gratitude');
var buttonSubmit = formAdd.find('button');
var notification = formAdd.find('#notification');
var notificationAlert = new bootstrap.Alert(notification.get(0));

$(window).on('load', function () {
  $('.content').show();
});

$(function () {
  btnOpen.one('click', function (e) {
    console.log('aa');
    $('.splash').fadeOut("slow");
  });

  formAdd.on('submit', function (e) {
    e.preventDefault();

    inputNama.attr('disabled', true);
    inputAddress.attr('disabled', true);
    inputUcapan.attr('disabled', true);
    buttonSubmit.attr('disabled', true);

    var success = false;
    var message = 'Gagal menambahkan ucapan kamu, silahkan coba dalam beberapa saaat lagi.';

    $.ajax({
      url: '/add.php',
      method: 'POST',
      data: formAdd.serialize(),
    })
      .done(function (response) {
        success = response && response.success;
        message = response && response.message ? response.message : message;
      })
      .fail(function (xhr, statusMessage) {
        // 
      })
      .always(function () {
        console.log('aa');

        inputNama.attr('disabled', false);
        inputAddress.attr('disabled', false);
        inputUcapan.attr('disabled', false);
        buttonSubmit.attr('disabled', false);

        notification
          .toggleClass('alert-danger', !success)
          .toggleClass('alert-success', success);

        notification.find('#notification-message').text(message);

        notification.removeClass('d-none').addClass('show');

        setTimeout(function () {
          notification.addClass('d-none').removeClass('show');
          notification.find('#notification-message').text('-');
        }, 1500);
      });
  });
})