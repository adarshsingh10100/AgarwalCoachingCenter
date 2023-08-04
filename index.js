const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('nav ul');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('nav-active');
});

let slideIndex = 1;
showSlide(slideIndex);

function changeSlide(n) {
    showSlide(slideIndex += n);
}

function showSlide(n) {
    const slides = document.getElementsByClassName('slide');
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }
    slides[slideIndex - 1].style.display = 'block';
}

// Automatic slideshow change every 4 seconds
setInterval(function () {
    changeSlide(1);
}, 4000);

// Get all the carousel indicators buttons
const carouselIndicators = document.querySelectorAll('#carousel-indicators button');

// Function to update the active indicator
function updateActiveIndicator(activeIndex) {
    // Remove 'active' class from all indicators
    carouselIndicators.forEach((indicator, index) => {
        indicator.classList.remove('active');
    });

    // Add 'active' class to the current active index
    carouselIndicators[activeIndex].classList.add('active');
}

// Function to start the auto-highlighting
function startAutoHighlighting() {
    let activeIndex = 0;

    // Update the first indicator as active initially
    updateActiveIndicator(activeIndex);

    // Function to update active index and indicator after a delay
    function updateIndexAndIndicator() {
        activeIndex = (activeIndex + 1) % carouselIndicators.length;
        updateActiveIndicator(activeIndex);
    }

    // Set the interval to update the indicators after every 4 seconds
    setInterval(updateIndexAndIndicator, 4000);
}

// Call the function to start auto-highlighting
startAutoHighlighting();

// Combined "DOMContentLoaded" event listener
document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        var row = document.querySelector(".row");
        row.style.opacity = "1";
        row.style.visibility = "visible";
    }, 2000); // 2000 milliseconds = 2 seconds

    const footerAnimation = document.getElementById("footer-animation");
    function showFooterOnScroll() {
        const scrollY = window.scrollY || window.pageYOffset;
        const windowHeight = window.innerHeight;
        if (scrollY > windowHeight * 0.5) {
            footerAnimation.style.opacity = 1;
            footerAnimation.style.visibility = "visible";
        }
    }
    let scrollTimeout;
    window.addEventListener("scroll", function () {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(showFooterOnScroll, 2000); // Wait for 2 seconds before showing the footer
    });

    const selectElement = document.getElementById("options");
    selectElement.addEventListener("change", function () {
        const selectedValue = selectElement.value;
        // Do something with the selected value, like displaying it or performing an action
        console.log("Selected option:", selectedValue);
    });

    // Function to show the form after 3 seconds of scrolling
    function showFormOnScroll() {
        const formSection = document.querySelector(".contact-section");
        const windowHeight = window.innerHeight;
        const sectionTop = formSection.getBoundingClientRect().top;
        if (sectionTop < windowHeight * 0.8) {
            formSection.classList.add("show-form");
        }
    }

    // Set up the form show delay after 3 seconds
    setTimeout(showFormOnScroll, 3000);

    // Show the form if the user scrolls
    window.addEventListener("scroll", function () {
        showFormOnScroll();
    });
});
// ... (Your existing code above)

function submitForm() {
    // Serialize form data to send via AJAX
    const form = document.getElementById('formcon');
    const formData = new FormData(form);
  
    // Prepare and send AJAX request
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "submit_form.php", true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Handle the response from the server here
            // If the form was successfully submitted, show the popup
            const response = xhr.responseText;
            if (response === 'success') {
                const popupContainer = document.getElementById('popupContainer');
                const fsub = '<div class="popup-container v-class-resp" id="popupContainer">...</div>';
                popupContainer.innerHTML = fsub;
                showPopup();
            } else {
                console.error("Error submitting the form.");
            }
        } else {
            console.error("Error submitting the form.");
        }
    };
    xhr.onerror = function () {
        console.error("Error submitting the form.");
    };
    xhr.send(formData);
}

// ... (Your existing code below)
// JavaScript for the pop-up container
// function showPopup() {
//     const popupContainer = document.getElementById('popupContainer');
//     popupContainer.style.display = 'block';
// }

// document.getElementById('closePopupBtn').addEventListener('click', function () {
//     const popupContainer = document.getElementById('popupContainer');
//     popupContainer.style.display = 'none';
// });
function showPopup() {
    document.getElementById("popupContainer").style.display = "block";
}

function closePopup() {
    document.getElementById("popupContainer").style.display = "none";
}

document.getElementById("closePopupBtn").addEventListener("click", closePopup);