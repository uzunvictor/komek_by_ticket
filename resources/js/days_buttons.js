const daysButtons = document.querySelectorAll('#daysButtons > button')

if (daysButtons) {
    daysButtons.forEach(b => b.addEventListener('click', function () {
        daysButtons.forEach(
            b => {
                b.classList.remove('bg-[#E92B43]', 'border-[#E92B43]', 'text-white', 'font-medium', 'active:bg-red-800', 'hover:bg-red-600');
                b.classList.add('bg-white', 'text-black', 'border-[#E7E7EC]', 'active:bg-gray-200', 'hover:bg-gray-200')
            }
        );
        b.classList.remove('bg-white', 'text-black', 'border-[#E7E7EC]', 'active:bg-gray-200', 'hover:bg-gray-200')
        b.classList.add('bg-[#E92B43]', 'border-[#E92B43]', 'text-white', 'font-medium', 'active:bg-red-800', 'hover:bg-red-600');
    }))
}