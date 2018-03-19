(function () {
    var slideshowSpan = document.querySelectorAll('.home-slideshow span'),
        slideshow_length = slideshowSpan.length,
        counter = 0,  // Loop counter;
        slideShowPauser = false;    // Used to pause the interval timer

    // Set all elements to unload
    for (counter = 0; counter < slideshow_length; counter++) {
        slideshowSpan[counter].className = "unload";
    }

    // Set the last element to load
    slideshowSpan[slideshow_length - 1].className = "load";

    // Get the opaque element counter running by setting it to the last element
    var opaque_element = slideshow_length - 1;

    setInterval(function () {
        if (slideShowPauser == false) {
            for (counter = 0; counter < slideshow_length; counter++) {
                // Set the opacity of the next element
                opaque_element = (slideshowSpan[counter].className == "load") ?
                    ((opaque_element + 1) % slideshow_length) : opaque_element;

                // Set the currently active element to unload
                slideshowSpan[counter].className = "unload";
            }
            // Set the new element (which is the next element to load
            slideshowSpan[opaque_element].className = "load";

        } else {
            slideShowPauser = false;
        }
    }, 5000);

    // Buttons for controlling the slideshow
    var upButton = document.querySelector('#arrow-up'),
        downButton = document.querySelector('#arrow-down');

    upButton.addEventListener('click', function () {
        slideShowPauser = true; // Pause the slideshow

        for (counter = 0; counter < slideshow_length; counter++) {
            opaque_element = (slideshowSpan[counter].className == "load") ?
                ((opaque_element + 1) % slideshow_length) : opaque_element;

            slideshowSpan[counter].className = "unload";
        }
        slideshowSpan[opaque_element].className = "load";
    }, false);

    downButton.addEventListener('click', function () {
        slideShowPauser = true; // Pause the slideshow

        for (counter = 0; counter < slideshow_length; counter++) {

            /* Reduce the opaque_element counter by 1. But if the opaque_element counter is already set to 0, send it
             * to the last element
             */
            opaque_element = (slideshowSpan[counter].className == "load") ?
                (opaque_element == 0) ?
                    (slideshow_length - 1) : (opaque_element - 1) :
                opaque_element;

            slideshowSpan[counter].className = "unload";
        }
        slideshowSpan[opaque_element].className = "load";
    }, false);
}());