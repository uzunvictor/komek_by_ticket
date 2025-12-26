const closeMenuBtn = document.querySelector('#closeMobileMenuBtn')
const openMenuBtn = document.querySelector('#openMobileMenuBtn')
const mobileMenu = document.querySelector('#mobileMenu')

if (mobileMenu && openMenuBtn && closeMenuBtn) {
    closeMenuBtn.addEventListener('click', function () {
        openMenuBtn.classList.remove('hidden')
        mobileMenu.classList.add('-translate-x-[100%]')
        mobileMenu.classList.remove('translate-x-0')
        closeMenuBtn.classList.remove('animate-pulse')
        document.body.classList.remove('overflow-hidden')
        document.documentElement.classList.remove('overflow-hidden')
    })
    openMenuBtn.addEventListener('click', function () {
        openMenuBtn.classList.add('hidden')
        mobileMenu.classList.add('translate-x-0')
        document.body.classList.add('overflow-hidden')
        openMenuBtn.classList.remove('animate-pulse')
        document.documentElement.classList.add('overflow-hidden')
    })
}