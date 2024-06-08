function createHeart() {
    const heart = document.createElement('div');
    heart.classList.add('heart');
    const container = document.querySelector('.container');
    container.appendChild(heart);

    setTimeout(() => {
        heart.remove();
    }, 5000);
}

setInterval(createHeart, 500);
