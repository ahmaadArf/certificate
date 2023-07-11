// =====================  Start Form Steps ======================== //
if(document.getElementsByClassName("step").length > null){
  var currentTab = 0;
  showTab(currentTab);
  
  function showTab(n) {
    var steps = document.getElementsByClassName("step");
    steps[n].style.display = "block";
    if (n == 0) {
      // document.getElementById("prevBtn").style.display = "none";
      // document.getElementById("prevBtn").parentElement.style.display = "none";
    } else {
      // document.getElementById("prevBtn").style.display = "inline";
      // document.getElementById("prevBtn").parentElement.style.display = "inline-block";
    }
    if (n == (steps.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Finish";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    fixStepIndicator(n)
  }
  
  function nextPrev(n) {
  var steps = document.getElementsByClassName("step");
    if (n == 1 && !validateForm()) return false;
    steps[currentTab].style.display = "none";
    currentTab = currentTab + n;
    window.scroll({top: 0, behavior: "smooth"})
    if (currentTab >= steps.length) {
      document.getElementById("register_form").submit();
      return false;
    }
    if(currentTab <= 2){
      // ++++++
      // document.querySelectorAll(".step_number span")[currentTab + 1].classList.remove('step_number_active');
      if(currentTab < 2){
        // document.getElementsByClassName("line")[currentTab + 1].classList.remove('step_number_active');
      }
    }
    showTab(currentTab);
  }
  
  function validateForm() {
    var steps, requiredFields, i, valid = true;
    steps = document.getElementsByClassName("step");
    requiredFields = steps[currentTab].querySelectorAll("input[required], select[required]");
    for (i = 0; i < requiredFields.length; i++) {
      if (requiredFields[i].value == "") {
        requiredFields[i].className += " invalid";
        window.scroll({top: 0, behavior: "smooth"})
        valid = false;
      }
    }
    if (valid) {
      if(currentTab <= 2){
          // +++ #11
          // document.querySelectorAll(".step_number span")[currentTab + 1].className += " step_number_active";
          if(currentTab < 2){
            // document.getElementsByClassName("line")[currentTab + 1].className += " step_number_active";
          }
      }
    }
    return valid;
  }
  
  function fixStepIndicator(n) {
    // var i, x = document.getElementsByClassName("step");
    // for (i = 0; i < x.length; i++) {
    //   x[i].className = x[i].className.replace(" active", "");
    // }
    // x[n].className += " active";
  }
}

// =====================  End Form Steps ======================== //



// Select2
$(document).ready(function() {
  $('.js-example-basic-multiple').select2({
      placeholder: 'select service',
      // closeOnSelect: false
  });
});

console.log(document.querySelector('.list-btn'));
// show sidebar 
document.querySelector('.list-btn').onclick =  function () {
  console.log('asd');
  document.querySelector('.left-container').classList.toggle('show-sidebar');
}

