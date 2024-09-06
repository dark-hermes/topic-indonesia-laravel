const navmobile = document.querySelector('#nav-mobile');
const navmenu = document.querySelector('#nav-menu');

navmobile.addEventListener('click', function () {
    navmobile.classList.toggle('nav-mobile-active');
    navmenu.classList.toggle('hidden');
});

// Show password
const togglePassword = document.querySelector('#togglepassword');
const password = document.querySelector('#password');

if (togglePassword && password) {
    togglePassword.addEventListener('click', function(e){
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        togglePassword.classList.toggle('fa-eye-slash');
    });
}

// Slider RTI
document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.list .item');
    const thumbnails = document.querySelectorAll('.thumbnail .item');
    let currentIndex = 0;
    const totalItems = items.length;
    const intervalTime = 3000;

    // Function to remove 'active' class from all items
    function resetActiveClasses() {
        items.forEach(item => item.classList.remove('active'));
        thumbnails.forEach(thumbnail => thumbnail.classList.remove('active'));
    }

    // Function to activate an item by index
    function activateItem(index) {
        resetActiveClasses();
        items[index].classList.add('active');
        thumbnails[index].classList.add('active');
    }

    // Function to show the next item
    function showNextItem() {
        currentIndex = (currentIndex + 1) % totalItems;
        activateItem(currentIndex);
    }

    // Function to show the previous item
    function showPrevItem() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        activateItem(currentIndex);
    }

    // Set interval for automatic sliding
    let autoSlide = setInterval(showNextItem, intervalTime);

    // Event listeners for the buttons
    document.getElementById('next').addEventListener('click', () => {
        clearInterval(autoSlide);
        showNextItem();
        autoSlide = setInterval(showNextItem, intervalTime);
    });

    document.getElementById('prev').addEventListener('click', () => {
        clearInterval(autoSlide);
        showPrevItem();
        autoSlide = setInterval(showNextItem, intervalTime);
    });

    // Event listeners for the thumbnails
    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', () => {
            clearInterval(autoSlide);
            activateItem(index);
            currentIndex = index;
            autoSlide = setInterval(showNextItem, intervalTime);
        });
    });
});

// Active navbar
document.addEventListener("DOMContentLoaded", function() {
    const activePage = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-menu a');

    navLinks.forEach(link => {
        if (link.getAttribute('href') === activePage) {
            link.classList.add('active');
        }
    });
});
