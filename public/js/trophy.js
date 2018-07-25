$(document).ready(function() {
    $(".circle").circliful({
        animation: 1,
        animationStep: 10,
        foregroundBorderWidth: 5,
        backgroundBorderWidth: 5,
        textSize: 28,
        textStyle: 'font-size: 12px;',
        textColor: '#000',
        progressColor: {20: '#CC9487', 40: '#FA6C00', 60: '#FF6C99'}
    });
});
