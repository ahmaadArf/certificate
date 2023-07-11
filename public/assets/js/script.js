
const btnNext = document.querySelectorAll('.step-click .next');

const btnPrev = document.querySelectorAll('.step-click .prev');
const nbtnPrev = document.querySelectorAll('.lastbtn .prev');
const nbtnNext = document.querySelectorAll('.lastbtn .next');


const allTab = document.querySelectorAll('form .step-tab');
let formStepsNum = 0;


btnNext.forEach((btn) => {
    btn.addEventListener("click", () => {
        var allField = document.getElementById('allField');
        var firstName = document.signUp.fname.value;
        var lastName = document.signUp.lname.value;
        var email = document.signUp.email.value;
        var password = document.signUp.password.value;
        // var companyType = document.signUp.companyType.value;
        var tradingName = document.signUp.trading_name.value;
        var registerName = document.signUp.registered_name.value;
        var postalCode = document.signUp.postal_code.value;
        var address2 = document.signUp.address_2.value;
        var address1 = document.signUp.address_1.value;
        var phone = document.signUp.phone_number.value;
        var city = document.signUp.city.value;
        var country = document.signUp.country_id.value;
        var currency = document.signUp.currency.value;
        var logo = document.signUp.logo.value;
        if (!(firstName == null || firstName == "" || lastName == null || lastName == "" || email == null || email == "" || password == null || password == "") && (formStepsNum == 0)) {
            allField.style.display = 'none';
            formStepsNum++;
            updateFormSteps();
        }
        else  if (!(tradingName == null || tradingName == "" || registerName == null || registerName == "" || tags == null || tags == "" || postalCode == null || postalCode == "" || address2 == null || address2 == "" || address1 == null || address1 == "" || city == null || city == "" || phone == null || phone == "" || country == null || country == "") && (formStepsNum == 1)) {
            allField.style.display = 'none';
            formStepsNum++;
            updateFormSteps();
        }
            // else if (!(postalCode == null || postalCode == "" || address2 == null || address2 == "" || address1 == null || address1 == "" || city == null || city == "" || phone == null || phone == "" || country == null || country == "") && (formStepsNum == 2)) {
            //     allField.style.display = 'none';
            //     formStepsNum++;
            //     updateFormSteps();
        // }
        else {
            allField.style.display = 'block';
            return false
        }


    });
});
nbtnNext.forEach((btn) => {
    btn.addEventListener("click", () => {
        var allField = document.getElementById('allField');
        var firstName = document.signUp.fname.value;
        var lastName = document.signUp.lname.value;
        var email = document.signUp.email.value;
        var password = document.signUp.password.value;
        // var companyType = document.signUp.companyType.value;
        var tradingName = document.signUp.trading_name.value;
        var registerName = document.signUp.registered_name.value;
        var postalCode = document.signUp.postal_code.value;
        var address2 = document.signUp.address_2.value;
        var address1 = document.signUp.address_1.value;
        var phone = document.signUp.phone_number.value;
        var city = document.signUp.city.value;
        var country = document.signUp.country_id.value;
        var currency = document.signUp.currency.value;
        var logo = document.signUp.logo.value;
        if (!(firstName == null || firstName == "" || lastName == null || lastName == "" || email == null || email == "" || password == null || password == "") && (formStepsNum == 0)) {
            allField.style.display = 'none';
            formStepsNum++;
            updateFormSteps();
        }
        else  if (!( tradingName == null || tradingName == "" || registerName == null || registerName == "" || postalCode == null || postalCode == "" || address2 == null || address2 == "" || address1 == null || address1 == "" || city == null || city == "" || phone == null || phone == "" || country == null || country == "") && (formStepsNum == 1)) {
            allField.style.display = 'none';
            formStepsNum++;
            updateFormSteps();
        }
            // else if (!(postalCode == null || postalCode == "" || address2 == null || address2 == "" || address1 == null || address1 == "" || city == null || city == "" || phone == null || phone == "" || country == null || country == "") && (formStepsNum == 2)) {
            //     allField.style.display = 'none';
            //     formStepsNum++;
            //     updateFormSteps();
        // }
        else {
            allField.style.display = 'block';
            return false
        }


    });
});
btnPrev.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum--;
        updateFormSteps();

    });
});

nbtnPrev.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum--;
        updateFormSteps();

    });
});

function updateFormSteps() {
    allTab.forEach((formstep) => {
        formstep.classList.contains("active") &&
        formstep.classList.remove("active");
    });


    allTab[formStepsNum].classList.add("active");
}
var removeFile = function (event) {
    var image = document.getElementById("prefrenceLogoUp");
    image.src ="./img/dummy-image-square.jpg";

};

var loadFile = function (event) {
    var image = document.getElementById("blahNew");
    image.src = URL.createObjectURL(event.target.files[0]);
};

var prefrenceLogo = function (event) {
    var image = document.getElementById("prefrenceLogoUp");
    image.src = URL.createObjectURL(event.target.files[0]);
}
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();


        reader.onload = function (e) {
            $("#uploadLabelText").replaceWith(input.files[0].name);

            // $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#file-upload").change(function(){
    readURL(this);
});

// Sidebar toggle section
$(document).ready(function(){
    $("#toggle,.close-sidenav").click(function(){
        $('.close-sidenav').toggle(),
            $('.sidebar').toggleClass('sidebar-collapse'),
            $('.main').toggleClass('sidebar-deattached')
    });
});

// Submenu Toggle
$(document).ready(function(){
    $(".has-submenu").click(function(){
        const checkChild = $('.has-submenu').children('.submenu')
        if(checkChild){
            $('.submenu',this).toggle(),
                $('.icon-arrow',this).toggleClass('rotate-arrow-icon');
        }
    });
});
