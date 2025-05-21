document.addEventListener('DOMContentLoaded', function () {
    const topButtons = document.getElementById('top-buttons');
    const capsule = document.getElementById('capsule');

    function checkScrollPosition() {
        const capsuleTop = capsule.getBoundingClientRect().top;
        const topButtonsBottom = topButtons.getBoundingClientRect().bottom;
        
        if (topButtonsBottom >= capsuleTop) {
            topButtons.classList.add('hidden');
        } else {
            topButtons.classList.remove('hidden');
        }
        }

    window.addEventListener('scroll', checkScrollPosition);
    window.addEventListener('resize', checkScrollPosition);
    checkScrollPosition();
});

const list = document.querySelector('.social-list');
document.querySelector('.scroll-right').addEventListener('click', () => {
  list.scrollBy({ left: 80, behavior: 'smooth' });
});
document.querySelector('.scroll-left').addEventListener('click', () => {
  list.scrollBy({ left: -80, behavior: 'smooth' });
});

