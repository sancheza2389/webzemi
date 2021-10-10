//
//
//       **** HEADER ANIMATIONS ****
//
//
$(window).scroll(function(){
  if ($(this).scrollTop() >= 50){
    $('.nav').addClass('nav-scrolled');
  } else {
    $('.nav').removeClass('nav-scrolled');
  }
})
//Mobile nav menu toggle
function navMenu() {

  let open = document.querySelector('.open-'),//<span>menu</span> within the parent menu box div
      close = document.querySelector('.close-'),//<span>close</span> within the parent menu box div. Disabled by default
      menu = document.querySelector('.menu-sml'),//The nav menu links. By default, it is located off screen, and will slide down once the menu box div is clicked
      slideDown = "translateY(70px)",//CSS to make the menu slide into view
      slideUp = "translateY(-210px)";//CSS to make the menu slide back out of view /DEFAULT/

  if(close.classList.contains('disabled')){//Is the <span>close</span> disabled. /DEFAULT/
    close.classList.remove('disabled');//Removed ".disabled" class from <span>close</span>
    open.classList.add('disabled');//Adds ".disabled" class to <span>menu</span>
    menu.style.transform = slideDown;//Slides the menu into view
    menu.style.borderBottom = "3px solid rgba(8, 191, 23,.8)";//Adds bottom border to the menu
    menu.style.opacity = "1";

  } else {
    close.classList.add('disabled');
    open.classList.remove('disabled');
    menu.style.transform = slideUp;
    menu.style.borderBottom = "none";
    menu.style.opacity = "0";

  }

}
//smooth scrolling links
$(function() {
  $('a[href*=\\#]:not([href=\\#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
//
//
//       **** Form Validation ****
//
//
$(document).ready(function(){

  const constraints = {//validates that the fields are not empty
    name: {presence:{allowEmpty: false}},
    email: {presence:{allowEmpty: false}, email: true},//requires valid email address
    message: {presence:{allowEmpty: false}}
  };

  const form = document.getElementById('form');

  form.addEventListener('submit', function(event){

    const formValues = {
      name: form.elements.name.value,
      email: form.elements.email.value,
      message: form.elements.message.value
    };

    const errors = validate(formValues, constraints);

    if(errors){
      event.preventDefault();
      const errorMessage = Object
                           .values(errors)
                           .map(function(fieldValues){ return fieldValues.join(', ')})
                           .join("\n");
      alert(errorMessage);
    }
  }, false);

});
