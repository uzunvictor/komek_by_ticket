const closeMenuBtn = document.querySelector('#closeMobileMenuBtn')
const openMenuBtn = document.querySelector('#openMobileMenuBtn')
const mobileMenu = document.querySelector('#mobileMenu')

if (mobileMenu && openMenuBtn && closeMenuBtn) {
    closeMenuBtn.addEventListener('click', function () {
        mobileMenu.classList.remove('translate-x-0')
        mobileMenu.classList.add('-translate-x-[100%]')
        document.body.classList.remove('overflow-hidden')
        document.documentElement.classList.remove('overflow-hidden')
    })
    openMenuBtn.addEventListener('click', function () {
        mobileMenu.classList.add('translate-x-0')
        document.body.classList.add('overflow-hidden')
        document.documentElement.classList.add('overflow-hidden')
    })
}