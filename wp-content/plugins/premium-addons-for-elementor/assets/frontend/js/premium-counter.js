(function ($) {

    var PremiumCounterHandler = function ($scope, $) {

        var $counterElement = $scope.find(".premium-counter"),
            isHScrollWidget = $counterElement.closest(".premium-hscroll-temp"),
            counterSettings = $counterElement.data(),
            incrementElement = $counterElement.find(".premium-counter-init"),
            iconElement = $counterElement.find(".icon");

        if (!isHScrollWidget.length) {
            // unsing IntersectionObserverAPI.
            var eleObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        $(incrementElement).numerator(counterSettings);

                        $(iconElement).addClass("animated " + iconElement.data("animation"));

                        eleObserver.unobserve(entry.target); // to only excecute the callback func once.
                    }
                });
            });

            eleObserver.observe($counterElement[0]);
            // elementorFrontend.waypoint($counterElement, function () {

            //     $(incrementElement).numerator(counterSettings);

            //     $(iconElement).addClass("animated " + iconElement.data("animation"));

            // });
        } else {

            $(window).on("scroll", function () {

                if ($(window).scrollTop() >= isHScrollWidget.data("scroll-offset")) {
                    $(incrementElement).numerator(counterSettings);

                    $(iconElement).addClass("animated " + iconElement.data("animation"));
                }

            });

        }

    };

    $(window).on('elementor/frontend/init', function () {
        elementorFrontend.hooks.addAction('frontend/element_ready/premium-counter.default', PremiumCounterHandler);
    });
})(jQuery);

