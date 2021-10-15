var TIME_TO_TRIGGER_CTA_EFFECT = 2; // In seconds

document.addEventListener("DOMContentLoaded", function (event) {
    var ctaHeroBtn = document.getElementById("cta-hero-btn");

    if (ctaHeroBtn !== undefined) {
        setTimeout(function () {
            ctaHeroBtn.classList.add("force");
            setTimeout(function() {
                ctaHeroBtn.classList.remove("force");
            }, 1000);
        }, TIME_TO_TRIGGER_CTA_EFFECT * 1000);
    }
});