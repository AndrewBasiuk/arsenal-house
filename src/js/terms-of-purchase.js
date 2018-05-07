var termsOfPurchase = (function(){

    var tabsBtnsContainer = document.querySelector('.js-terOfpur__tabs');
    var tabsBtns = document.querySelectorAll('.js-terOfpur__tab');
    var tabsContents = document.querySelectorAll('.js-terOfpur__tabs_content');
    tabsBtnsContainer.addEventListener('click', function(e) {
        if(!this.classList.contains('terOfpur__tab-active')) {
            tabsBtns.forEach(function(tab) {
                tab.classList.remove('terOfpur__tab-active')
            });
            tabsContents.forEach(function(tabContent) {
                tabContent.style.display = 'none';
            });
            tabsContents[e.target.dataset.tabindex].style.display = 'block';
            tabsBtns[e.target.dataset.tabindex].classList.add('terOfpur__tab-active');
        }
    });
})();