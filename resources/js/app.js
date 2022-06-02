require('./bootstrap');
import $ from 'jquery';
import Swal from 'sweetalert2'

// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

// init Swiper:
const swiper = new Swiper('#header-slide', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 0,
    direction: 'horizontal',
    loop: true,
    grabCursor: true,
    lazy: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },

    // Navigation
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        480: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
    },
});


const swiperComments = new Swiper("#comments", {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 0,
    direction: 'horizontal',
    loop: true,
    grabCursor: true,
    lazy: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },
    breakpoints: {
        480: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
    },
});

// Controle Scroll
function controleScroll() {
    let nav = document.querySelector('nav');
    if (document.documentElement.scrollTop > 64) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
}

// Döküman hazır olduktan sonra yapılacak işlersin
document.addEventListener('DOMContentLoaded', function (e) {
    $('button[type="submit"]').attr('disabled', 'disabled');
    controleScroll();
});

// Scroll olunca navigasyona gölge ekleme
document.addEventListener('scroll', function () {
    controleScroll();
});


let sideButton = document.querySelector('.side-button');
let closeButton = document.querySelector('.close-button');
let overlay = document.querySelector('.overlay');
let sideNav = document.querySelector('.side-nav');

// Open Menu
let menuOpen;
function openMenu() {
    menuOpen = true;
    overlay.classList.add('active');
    sideNav.classList.add('active');
    document.body.classList.add('side-bar-open');
}

// Close Menu
function closeMenu() {
    menuOpen = false;
    overlay.classList.remove('active');
    sideNav.classList.remove('active');
    document.body.classList.remove('side-bar-open');
}

sideButton.addEventListener('click', function () {
    if (!menuOpen) {
        openMenu();
    }
});
closeButton.addEventListener('click', function () {
    if (menuOpen) {
        closeMenu();
    }
});
overlay.addEventListener('click', function () {
    if (menuOpen) {
        closeMenu();
    }
});

$('.collapse').click(function (e) {
    if (e.target.getAttribute('class') === 'collapse-header') {
        e.target.nextElementSibling.classList.toggle('collapse-active');
    }
});

const validateEmail = email => {
    return email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};

const validateNum = number => {
    return number.match(/^\d+$/);
};

function controlePost(formEl, enter = false) {
    let errFormEl = 0;
    let formElValNull = 0;
    let errEmail = false;
    for (let elID in formEl) {
        ++errFormEl;
        ++formElValNull
        let el = $(`#${formEl[elID]}`);
        if (el.val().trim().length === 0) {
            el.addClass('invalid');
            $('#form-alert-message').html('Please do not leave any blank spaces in the form.');
        } else {
            --formElValNull;
            if (el.attr('type') === 'email') {
                if (!validateEmail(el.val().trim())) {
                    formElValNull === 0 ? $('#form-alert-message').html('Please enter a valid email address.') :
                        null;
                    el.addClass('invalid');
                    errEmail = true;
                } else {
                    formElValNull === 0 ? $('#form-alert-message').html(null) : null;
                    --errFormEl;
                    el.removeClass('invalid');
                }
            } else {
                if (el.attr('type') === 'phone') {
                    if (!validateNum(el.val().trim())) {
                        (formElValNull === 0 && !errEmail) ? $('#form-alert-message').html(
                            'Please enter a valid phone number.') : null;
                        el.addClass('invalid');
                    } else {
                        (formElValNull === 0 && !errEmail) ? $('#form-alert-message').html(null) : null;
                        --errFormEl;
                        el.removeClass('invalid');
                    }
                } else {
                    --errFormEl;
                    el.removeClass('invalid');
                }
            }
        }
    }
    if (errFormEl === 0) {
        $('button[type="submit"]').removeAttr('disabled');
    } else {
        $('button[type="submit"]').attr('disabled', 'disabled');
    }
}

$('form').keyup(function (e) {
    const formEl = [
        'name',
        'email',
        'phone',
        'message'
    ];
    controlePost(formEl);

    // Enter'a basılınca
    if (e.originalEvent.key === 'Enter' && e.originalEvent.code === 'Enter' && e.originalEvent.keyCode ===
        13) {
        e.preventDefault();
        controlePost(formEl, true);
    }
});

$('form').submit(function (e) {
    e.preventDefault();
    let formData = {
        "name": $('#name').val(),
        "email": $('#email').val(),
        "phone": $('#phone').val(),
        "message": $('#message').val(),
    };
    let button = $('button[type="submit"]');
    $.ajax({
        type: 'post',
        url: $('form').attr('action'),
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        beforeSend: function () {
            button.attr('disabled', 'disabled');
            button.html(`
            <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
            </div>`);
        },
        complete: function () {
            button.html(`Submit Your Request`);
            $('form')[0].reset();
        },
        success: function (data) {
            data.response === 'success' ? Swal.fire({
                title: 'Success!',
                text: 'Your appointment application has been sent successfully.',
                icon: 'success',
                confirmButtonText: 'Close'
            }) : Swal.fire({
                title: 'Ooops!',
                text: 'There is a problem. Please try again!',
                icon: 'error',
                confirmButtonText: 'Close'
            });
        },
        error: function (err) {
            Swal.fire({
                title: 'Ooops!',
                text: 'There is a problem. Please try again!',
                icon: 'error',
                confirmButtonText: 'Close'
            });
        },
    });
});


$('.contact-message-button').click(function (e) {
    (async () => {

        const { value: inputName } = await Swal.fire({
            title: swAlertName,
            input: 'text',
            inputAttributes: {
                autocapitalize: 'words',
            },
            inputPlaceholder: swAlertName,
            confirmButtonText: swAlertContinue,
            showCancelButton: true,
            cancelButtonText: swAlertCancel,
            inputValidator: (value) => {
                if (!value.trim()) {
                    return swAlertNameInvalid
                }
            }
        });
        if (inputName) {
            const { value: inputEmail } = await Swal.fire({
                title: swAlertEmail,
                input: 'email',
                inputPlaceholder: swAlertEmail,
                confirmButtonText: swAlertContinue,
                showCancelButton: true,
                cancelButtonText: swAlertCancel,
                validationMessage: swAlertEmailInvalid
            });
            if (inputName && inputEmail) {
                const { value: inputPhone } = await Swal.fire({
                    title: swAlertPhone,
                    input: 'tel',
                    inputPlaceholder: swAlertPhone,
                    confirmButtonText: swAlertContinue,
                    showCancelButton: true,
                    cancelButtonText: swAlertCancel,
                    inputValidator: (value) => {
                        if (!value.trim()) {
                            return swAlertPhoneNullInvalid
                        } else if (!validateNum(value.trim())) {
                            return swAlertPhoneInvalid
                        }
                    }
                });
                if (inputName && inputEmail && inputPhone) {
                    const { value: inputMessage } = await Swal.fire({
                        title: swAlertMessage,
                        input: 'text',
                        inputPlaceholder: swAlertMessage,
                        confirmButtonText: swAlertSubmitText,
                        showCancelButton: true,
                        cancelButtonText: swAlertCancel,
                        inputValidator: (value) => {
                            if (!value.trim()) {
                                return swAlertMessageInvalid
                            }
                        }
                    });
                    if (inputName && inputEmail && inputPhone && inputMessage) {
                        let data = {
                            name: inputName,
                            email: inputEmail,
                            phone: inputPhone,
                            message: inputMessage,
                        };
                        $.ajax({
                            type: 'post',
                            url: $('form').attr('action'),
                            data: data,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            dataType: 'json',
                            beforeSend: function () {
                                Swal.fire({
                                    html: `<div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                    </div>`,
                                    showCloseButton: false,
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    focusConfirm: true,
                                    backdrop: false,
                                });
                                $('body').css('overflow', 'hidden');
                            },
                            complete: function () {
                                $('body').css('overflow-y', 'auto');
                            },
                            success: function (data) {
                                data.response === 'success' ? Swal.fire({
                                    title: swAlertSuccTitle,
                                    text: swAlertSuccMessage,
                                    icon: 'success',
                                    confirmButtonText: swAlertClose
                                }) : Swal.fire({
                                    title: 'Ooops!',
                                    text: swAlertErrMessage,
                                    icon: 'error',
                                    confirmButtonText: swAlertClose
                                });
                            },
                            error: function (err) {
                                Swal.fire({
                                    title: 'Ooops!',
                                    text: swAlertErrMessage,
                                    icon: 'error',
                                    confirmButtonText: swAlertClose
                                });
                            },
                        });
                    }
                }
            }
        }
    })()
});
