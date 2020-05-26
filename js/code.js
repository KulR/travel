let button = document.querySelector('.promo__button');
let wrap_form = document.querySelector('.wrap-form');
let cross = document.querySelector("i[class='fa fa-times']");

let wrap_faq = document.querySelectorAll(".wrapper-faq");
let wrap_panel = document.querySelector(".wrap-panel");


let faq_panel = wrap_panel.querySelectorAll(".faq-panel");
let faq_answer = wrap_panel.querySelectorAll(".faq-answer");
let form = document.querySelector('form');

form.onsubmit = function(e){
    e.preventDefault();
    let form_name = this.querySelector('input[name="name"]');
    let form_email = this.querySelector('input[name="email"]');
    let form_tel = this.querySelector('input[name="tel"]');
    let error_msg = this.querySelector('.error');
    let error_name = this.querySelector('.error_name');
    let error_email = this.querySelector('.error_email');
    let error_tel = this.querySelector('.error_tel');
    if(form_name.value === ""  || form_email.value === "" || form_tel.value === "") {
        error_msg.innerHTML = "что-то пустое, надо заполнить";
    } else {
        error_msg.innerHTML = "Всё классно";
        form.submit();
    }

    if(form_name.value === ""){
        error_name.innerHTML = "имя пусто";
        form_name.style.borderColor = "red";
    } else {
        form_name.style.borderColor = "green";
        error_name.innerHTML = "";
    }

    if(form_email.value === ""){
        error_email.innerHTML = "email пуст";
        form_email.style.borderColor = "red";
    } else {
        form_email.style.borderColor = "green";
        error_email.innerHTML = "";
    }

    if(form_tel.value === ""){
        error_tel.innerHTML = "телефон пуст";
        form_tel.style.borderColor = "red";
    } else {
        form_tel.style.borderColor = "green";
        error_tel.innerHTML = "";
    }

};





button.onclick = function () {
    wrap_form.style.display = "flex";
};

cross.onclick = function () {
    wrap_form.classList.add('zoomOut');
    setTimeout(() => {
        wrap_form.style.display = "none";
        wrap_form.classList.remove('zoomOut');
    }, 1000);
};

for(let i = 0; i < faq_answer.length; i++){
    faq_panel[i].onclick = function () {
        faq_answer[i].classList.toggle('visible')
    }
}


//prevent close authorization window
// let count = 0;
// cross.onmouseover = function () {
//     if(count === 0) {
//         alert('Don\'t go away! Please stay here!');
//     } else if(count === 1){
//         alert('another message');
//     }
//     count++;
// };

// faq_panel.forEach(function (item, i, arr) {
// item.onclick = function () {
//     faq_answer[i].classList.toggle('visible')
// }
// });


// function purge() {
//     for(let j = 0; j < faq_answer.length; j++){
//         if(faq_answer[j].classList.contains('visible')){
//             faq_answer[j].classList.remove('visible');
//         }
//     }
// }
//
// for(let i = 0; i < faq_answer.length; i++){
//     faq_panel[i].onclick = function () {
//         purge();
//         faq_answer[i].classList.toggle('visible')
//
//     }
// }