// Navbar Black BG on Scroll...
document.addEventListener('scroll', function (event) {
  if( $(this).scrollTop()) {
      $('.navbar').addClass('navbar-dark bg-black');
    } else {
      $('.navbar').removeClass('navbar-dark bg-black');
    }
});

$('.home').click(function(){
  $('.navbar').removeClass('navbar-dark bg-black');
});
$('.link').click(function(){
  $('.navbar').addClass('navbar-dark bg-black');
});

// Close Mobile Dropdown on menu click...
$('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});

// Active menu onScroll...
// $(document).ready(function () {
//   $(document).on("scroll", onScroll);
//   //smoothscroll
//   $('#navbarNavDropdown ul li a[href^="#"]').on('click', function (e) {
//       e.preventDefault();
//       $(document).off("scroll");
//
//       $('a').each(function () {
//           $(this).removeClass('active');
//       })
//       $(this).addClass('active');
//
//       var target = this.hash,
//           menu = target;
//       $target = $(target);
//       $('html, body').stop().animate({
//           'scrollTop': $target.offset().top-70
//       }, 500, 'swing', function () {
//           //window.location.hash = target;
//           $(document).on("scroll", onScroll);
//       });
//   });
// });

function onScroll(event){
  var scrollPos = $(document).scrollTop();
  $('#navbarNavDropdown a').each(function () {
      var currLink = $(this);
      var refElement = $(currLink.attr("href"));
      if (refElement.position().top-80 <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
          $('#navbarNavDropdown ul li a').removeClass("active");
          currLink.addClass("active");
      }
      else{
          currLink.removeClass("active");
      }
  });
}

$('.go-contact').click(function(){
  $('html, body').animate({
    scrollTop: $("#Contact").offset().top-70
  }, 2000);
});




$('.required').blur(function(){
  var val = $(this).val();
  if(val == ''){
    $(this).addClass('invalide-input');
  }
  else{
    $(this).removeClass('invalide-input');
  }
});

$('.required2').blur(function(){
  var val = $(this).val();
  if(val == ''){
    $(this).addClass('invalide-input');
  }
  else{
    $(this).removeClass('invalide-input');
  }
});

$('.email').blur(function(){
  var val = $(this).val();
  var email_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(!email_format.test(val)){
    $(this).addClass('invalide-input');
  }
  else{
    $(this).removeClass('invalide-input');
  }
});

$('.mobile').blur(function(){
  var val = $(this).val();
  var mobile_format = /^[6-9][0-9]{9}$/;
  if(!mobile_format.test(val)){
    $(this).addClass('invalide-input');
  }
  else{
    $(this).removeClass('invalide-input');
  }
});

document.getElementById("btn_contact").addEventListener('click', function(event){
  var contact_firstname = $('#contact_firstname').val();
  var contact_lastname = $('#contact_lastname').val();
  var conatact_email = $('#conatact_email').val();
  var contact_phone = $('#contact_phone').val();
  var contact_message = $('#contact_message').val();
  var mobile_format = /^[6-9][0-9]{9}$/;
  var email_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  $('.required').each(function(){
    var val = $(this).val();
    if(val == ''){
      $(this).addClass('invalide-input');
    }
    else{
      $(this).removeClass('invalide-input');
    }
  });

  if(contact_firstname == '' || contact_lastname == '' || conatact_email == '' || contact_phone == '' || contact_message == '' ||
  !email_format.test(conatact_email) || !mobile_format.test(contact_phone)){
    // Blank...
  }
  else{
    $('#form_contact').submit();
  }
});

$('#btn_quote').click(function(){
  var name = $('#name').val();
  var email = $('#email').val();
  var subject = $('#subject').val();
  var massege = $('#massege').val();
  var email_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  $('.required2').each(function(){
    var val = $(this).val();
    if(val == ''){
      $(this).addClass('invalide-input');
    }
    else{
      $(this).removeClass('invalide-input');
    }
  });

  if(name == '' || email == '' || subject == '' || massege == '' ||  !email_format.test(email)){
    // Blank...
  }
  else{
    $('#form_quote').submit();
  }
});


// // Go to top..
// $('#go-top').on( "click", function() {
//     $('html, body').animate({scrollTop: 0});
//     return false;
// });


// // whatsapp change link if mobile...
// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
//     document.getElementById("wa-sticky").href = "https://api.whatsapp.com/send?phone=+919158995505";   //change url
//     document.getElementById("wa-sticky").target = "_blank";     //change target
// }
