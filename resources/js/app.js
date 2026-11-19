import './bootstrap';

const description = document.querySelector('#project-description');
const counter = document.querySelector('.project-counter');

if (description && counter) {
    const updateCounter = () => {
        counter.textContent = `${description.value.length}/1000`;
    };

    description.addEventListener('input', updateCounter);
    updateCounter();
}
