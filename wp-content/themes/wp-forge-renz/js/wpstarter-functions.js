/*!
 * This is where you can add all of your functions to make things like sliders, lightboxes and any cool java scripts to work.
 * By adding them here, they will not be lost when updating WP-Forge
 *
 * I have included an example below. This will add the ".round" class to any button with the ".button" class, giving the edges a round appearance. You can remove
 */

jQuery(document).ready(function() {	// start loading all functions

    console.log('Doc ready');
   // initAccordion();
    initScrollScript();

}); // end loading all functions

// accordeon script
function initAccordion(){
    jQuery("#accordion_slider").zAccordion({
        width: 1024,
        speed: 600,
        slideClass: "slider",
        slideWidth: 600,
        height: 400
    });
    console.log('zaccordion hurray');
}

//start the header-scroll animation

function initScrollScript() {
    console.log('here in scroll');
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 300,
            header = document.querySelector(".header-logo");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
            console.log('here in scroll'.distanceY);
        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}

//orbit slider settings

jQuery(document).foundation({
    orbit: {
        animation: 'slide', // Sets the type of animation used for transitioning between slides, can also be 'fade'
        timer_speed: 10000, // Sets the amount of time inround milliseconds before transitioning a slide
        pause_on_hover: true, // Pauses on the current slide while hovering
        resume_on_mouseout: true, // If pause on hover is set to true, this setting resumes playback after mousing out of slide
        next_on_click: true, // Advance to next slide on click
        animation_speed: 500, // Sets the amount of time in milliseconds the transition between slides will last
        stack_on_small: false,
        navigation_arrows: true,
        slide_number: false,
        slide_number_text: 'of',
        container_class: 'orbit-container',
        stack_on_small_class: 'orbit-stack-on-small',
        next_class: 'orbit-next', // Class name given to the next button
        prev_class: 'orbit-prev', // Class name given to the previous button
        timer_container_class: 'orbit-timer', // Class name given to the timer
        timer_paused_class: 'paused', // Class name given to the paused button
        timer_progress_class: 'orbit-progress', // Class name given to the progress bar
        timer_show_progress_bar: true, // If the progress bar should get shown (false skips computation)
        slides_container_class: 'orbit-slides-container', // Class name given to the
        bullets_container_class: 'orbit-bullets',
        slide_selector: 'li', // Default is '*' which selects all children under the container
        bullets_active_class: 'active', // Class name given to the active bullet
        slide_number_class: 'orbit-slide-number', // Class name given to the slide number
        caption_class: 'orbit-caption', // Class name given to the caption
        active_slide_class: 'active', // Class name given to the active slide
        orbit_transition_class: 'orbit-transitioning',
        bullets: true, // Does the slider have bullets visible?
        circular: true, // Does the slider should go to the first slide after showing the last?
        timer: true, // Does the slider have a timer active? Setting to false disables the timer.
        variable_height: false, // Does the slider have variable height content?
        swipe: true,
       // before_slide_change: noop, // Execute a function before the slide changes
       // after_slide_change: noop // Execute a function after the slide changes
    }
});
