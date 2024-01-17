var author2 = document.getElementById('author2');
var author3 = document.getElementById('author3');
var author4 = document.getElementById('author4');
var addAuthorBtn = document.getElementById('addAuthor');

var btn1 = document.getElementById('btn1');
var btn2 = document.getElementById('btn2');
var btn3 = document.getElementById('btn3');

author2.style.display = "none";
author3.style.display = "none";
author4.style.display = "none";

function addAuthor2() {
    author2.style.display = "block";
    btn1.style.display="none";      
}

function addAuthor3() {
    author3.style.display = "block";
    btn2.style.display = "none";
}

function addAuthor4() {
    author4.style.display = "block";
    btn3.style.display = "none";
}

addAuthorBtn.addEventListener('click', function () {
    if (author2.style.display === "none") {
        addAuthor2();
    } else if (author3.style.display === "none") {
        addAuthor3();
    } else if (author4.style.display === "none") {
        addAuthor4();
    }
});

// Rest of your code remains unchanged
const scriptURL = 'https://script.google.com/macros/s/AKfycbzIrrR1HGwWXorgUG09Qy2UuSbVk5y2KnLsMg_omda32rbGLugg7lmdKxk8EzpwMatG/exec';
const form = document.forms['google-sheet'];

// Add a reference to the loading element
const loading = document.querySelector('.loading');

// Add an event listener to the form submit button
form.addEventListener('submit', e => {
    e.preventDefault();

    // Show the loading animation
    loading.style.display = 'block';

    fetch(scriptURL, { method: 'POST', body: new FormData(form) })
        .then(response => {
            // Hide the loading animation
            loading.style.display = 'none';
            alert("Thank you for registering! We have received your registration and will send you a confirmation email shortly. ");
            form.reset();
        })
        .catch(error => {
            console.error('Error!', error.message);
            // Hide the loading animation
            loading.style.display = 'none';
        });
});

const datetimeField = form.querySelector('#datetime');

// Get current date and time
const now = new Date();
const year = now.getFullYear();
const month = String(now.getMonth() + 1).padStart(2, '0');
const day = String(now.getDate()).padStart(2, '0');
const hours = String(now.getHours()).padStart(2, '0');
const minutes = String(now.getMinutes()).padStart(2, '0');
const seconds = String(now.getSeconds()).padStart(2, '0');
datetimeField.value = `${hours}:${minutes} | ${day}-${month}-${year} `;

function generateRegistrationKey() {
    // Get the number of registrations already submitted
    var numRegistrations = Number(document.getElementById('num-registrations').value);

    // Generate the new registration key
    var keyPrefix = "EC";
    var keySuffix = numRegistrations + 100;
    var registrationKey = keyPrefix + keySuffix;

    // Update the hidden field with the new key
    document.getElementById('registration-key').value = registrationKey;

    // Increment the number of registrations counter
    document.getElementById('num-registrations').value = numRegistrations + 1;
}
