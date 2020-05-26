var bar = new ProgressBar.Line('#load', {
    easing: 'easeInOut',
    duration: 6500,
    color: '#5AEDE0',
    trailColor: '#eee',
    from: {color: '#5AEDE0'},
    to: {color: '#5AEDE0'},
});

bar.animate(1.0);  // Number from 0.0 to 1.0


AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({

  duration: 1400, // values from 0 to 3000, with step 50ms

});
