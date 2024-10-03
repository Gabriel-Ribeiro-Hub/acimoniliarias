document.addEventListener('DOMContentLoaded', function() {

    // If the comparison slider is present on the page lets initialise it
    if (document.querySelector(".comparison-slider")) {
        let compSlider = document.querySelectorAll(".comparison-slider");

        // Let's loop through the sliders and initialise each of them
        compSlider.forEach(function(slider) {
            let compSliderWidth = slider.offsetWidth + "px";
            slider.querySelector(".resize img").style.width = compSliderWidth;
            drags(slider.querySelector(".divider"), slider.querySelector(".resize"), slider);
        });

        // If the user resizes the window, let's update our variables and resize our images
        window.addEventListener("resize", function() {
            let compSliderWidth = compSlider.offsetWidth + "px";
            compSlider.querySelector(".resize img").style.width = compSliderWidth;
        });
    }
});

// This is where all the magic happens
// This is a modified version of the pen from Ege Görgülü - https://codepen.io/bamf/pen/jEpxOX - and you should check it out too.
function drags(dragElement, resizeElement, container) {

    // This creates a variable that detects if the user is using touch input instead of the mouse.
    let touched = false;
    window.addEventListener('touchstart', function() {
        touched = true;
    });
    window.addEventListener('touchend', function() {
        touched = false;
    });

    // Clicp the image and move the slider on interaction with the mouse or the touch input
    dragElement.addEventListener("mousedown", function(e) {

        // Add classes to the elements - good for CSS animations if you need it to
        dragElement.classList.add("draggable");
        resizeElement.classList.add("resizable");

        // Create vars
        let startX = e.pageX ? e.pageX : e.touches[0].pageX;
        let dragWidth = dragElement.offsetWidth;
        let posX = dragElement.offsetLeft + dragWidth - startX;
        let containerOffset = container.offsetLeft;
        let containerWidth = container.offsetWidth;
        let minLeft = containerOffset + 10;
        let maxLeft = containerOffset + containerWidth - dragWidth - 10;

        // Add event listener on the divider element
        document.addEventListener("mousemove", function(e) {

            // If the user is not using touch input, let's preventDefault to prevent the user from selecting the images as they move the slider around.
            if (!touched) {
                e.preventDefault();
            }

            let moveX = e.pageX ? e.pageX : e.touches[0].pageX;
            let leftValue = moveX + posX - dragWidth;

            // Stop the divider from going over the limits of the container
            if (leftValue < minLeft) {
                leftValue = minLeft;
            } else if (leftValue > maxLeft) {
                leftValue = maxLeft;
            }

            let widthValue = (leftValue + dragWidth / 2 - containerOffset) * 100 / containerWidth + "%";

            dragElement.style.left = widthValue;

            document.addEventListener("mouseup", function() {
                dragElement.classList.remove("draggable");
                resizeElement.classList.remove("resizable");
            });

            resizeElement.style.width = widthValue;

        });

        document.addEventListener("mouseup", function() {
            dragElement.classList.remove("draggable");
            resizeElement.classList.remove("resizable");
        });

    });
}

