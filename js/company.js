const next_click=document.querySelectorAll(".next_button");

const main_form=document.querySelectorAll(".main");

const step_list = document.querySelectorAll(".travel-bar li");

const num = document.querySelector(".step-number");

let formnumber=0;

    next_click.forEach(function(next_click_form){
    next_click_form.addEventListener('click',function(){
    if(!validateform()){

    }
    formnumber++;
    updateform();
    progress_forward();
    contentchange();

    });

  });

let back_click=document.querySelectorAll(".back_button");

back_click.forEach(function(back_click_form){

back_click_form.addEventListener('click',function(){

formnumber--;

updateform();

progress_backward();

contentchange();

});

});

let submit_click=document.querySelectorAll(".submit_button");

submit_click.forEach(function(submit_click_form){

submit_click_form.addEventListener('click',function(){

formnumber++;

updateform();

});

});

  function updateform(){

  main_form.forEach(function(mainform_number){

  mainform_number.classList.remove('active');

  })

  main_form[formnumber].classList.add('active');

  }

  function progress_forward(){

  step_list[formnumber].classList.add('active');

  }

  function progress_backward(){

  step_list[formnumber].classList.remove('active');


}

let step_num_content=document.querySelectorAll(".step-number-content");

function contentchange(){

step_num_content.forEach(function(content){

content.classList.remove('active');

content.classList.add('d-none');

});

}

function validateform(){

validate=true;

let validate_inputs=document.querySelectorAll(".main.active");

return validate;

}

function deselect(e) {
    $('.pop').slideFadeToggle(function() {
      e.removeClass('selected');
    });    
  }
  
  $(function() {
    $('#contact').on('click', function() {
      if($(this).hasClass('selected')) {
        deselect($(this));               
      } else {
        $(this).addClass('selected');
        $('.pop').slideFadeToggle();
      }
      return false;
    });
  
    $('.close-form').on('click', function() {
      deselect($('#contact'));
      return false;
    });
  });
  
  $.fn.slideFadeToggle = function(easing, callback) {
    return this.animate({ opacity: 'toggle', height: 'toggle' }, 'fast', easing, callback);
  };
  let acc = document.getElementsByClassName("accordion");
  let i;
  for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
      panel.style.display = "none";
      } else {
      panel.style.display = "block";
      }
  });
  }
// show select //
  $(function() {
    $('#colorselector').change(function(){
      $('.colors').hide();
      $('#' + $(this).val()).show();
    });
  });
  $(function() {
    $('#booking').change(function(){
      $('.king').hide();
      $('#' + $(this).val()).show();
    });
  });
  $(function() {
    $('#colorselector').change(function(){
      $('.colors').hide();
      $('#' + $(this).val()).show();
    });
  });
  $(function() {
    $('#tradebox').change(function(){
      $('.tra').hide();
      $('#' + $(this).val()).show();
    });
  });
  // add //
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

  let company = document.getElementsByClassName("jurisdiction");
  let x;
  for (x = 0; x < company.length; x++) {
    company[x].addEventListener("click", function() {
      this.classList.toggle("active");
      var test = this.nextElementSibling;
      if (test.style.display === "none") {
      test.style.display = "block";
      } else {
      test.style.display = "none";
      }
  });
  }
