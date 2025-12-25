const tabButtons = document.querySelectorAll('ul#tab_buttons li.tab-button');
const tabPanels = document.querySelectorAll('#tab_panels > div');

if (tabButtons && tabPanels) {
    tabButtons.forEach((tabBtn) => {
        tabBtn.addEventListener('click', () => {
            const tabId = tabBtn.getAttribute('data-id');
           
            for (const btn of tabButtons) {
                if (btn.dataset.id !== tabId) {
                    btn.classList.remove('border-b-[#FF0000]')
                    continue
                }
                btn.classList.add('border-b-[#FF0000]')
            }
            
            for (const panel of tabPanels) {
                if (panel.dataset.id !== tabId) {
                    panel.classList.add('hidden');
                    continue
                }
                panel.classList.remove('hidden');
            }
        });
    });
}