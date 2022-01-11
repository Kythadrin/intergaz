function setActiveNavItem() {
    var navItems = document.getElementsByClassName('nav-link');
    var title = document.title;
    
    for (var i = 0; i <= navItems.length; i++) {
        if (navItems[i].textContent == title) {
            navItems[i].classList.add('active');
        }
    }
}