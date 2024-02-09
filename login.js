const notification = document.querySelector('#notification');


notification.addEventListener('click', () => {
setTimeout(() => notification.classList.add('vn-fade-leave-to'), 1000);
});
