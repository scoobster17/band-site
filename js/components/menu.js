;var band = {};
band.menu = (function() {
            
    // private methods
    var init = function() {
        
        var menuTrigger = document.getElementById('menu-trigger');
        var menu = document.getElementById('menu');

        if (window.addEventListener) {
            menuTrigger.addEventListener('click', function(e) {
                e.preventDefault();
                joose.utils.toggleClass(menu, 'hidden-mobile');
                joose.utils.toggleClass(menuTrigger, 'active');
            });
        }
    };

    // public methods
    return {
        init: init
    }

})();
band.menu.init();
delete band.menu.init;