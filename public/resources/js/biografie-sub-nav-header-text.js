const biografieSection = document.querySelector('#biografie-sectie');
const impactSection   = document.querySelector('#impact-sectie');
const bronnenSection  = document.querySelector('#bronnen-sectie');
const header           = document.querySelector('.header-text');

function updateHeaderFor(id) {
    if (id === 'biografie-sectie') {
        header.textContent = 'BIOGRAFIE';
    } else if (id === 'impact-sectie') {
        header.textContent = 'IMPACT';
    } else if (id === 'bronnen-sectie') {
        header.textContent = 'BRONNEN';
    }
}

if (header) {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                updateHeaderFor(entry.target.id);
            }
        });
    }, {threshold: 0.5});

    [biografieSection, impactSection, bronnenSection].forEach(el => {
        if (el) observer.observe(el);
    });
}
