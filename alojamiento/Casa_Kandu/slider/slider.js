class Slider {
  constructor(root, { interval = 10000 } = {}) {
    if (!root) return;

    this.root = root;
    this.track = root.querySelector('.slider__track');
    this.slides = [...root.querySelectorAll('.slide')];
    this.prevBtn = root.querySelector('.slider__btn--prev');
    this.nextBtn = root.querySelector('.slider__btn--next');
    this.dots = [...root.querySelectorAll('.dot')];

    this.index = 0;
    this.interval = interval;
    this.timer = null;

    this.init();
  }

  init() {
    this.prevBtn?.addEventListener('click', () => this.prev());
    this.nextBtn?.addEventListener('click', () => this.next());

    this.dots.forEach((dot, index) => {
      dot.addEventListener('click', () => this.goTo(index));
    });

    this.root.addEventListener('mouseenter', () => this.pause());
    this.root.addEventListener('mouseleave', () => this.play());

    this.play();
    this.update();
  }

  prev() {
    this.index = this.index === 0 ? this.slides.length - 1 : this.index - 1;
    this.update();
  }

  next() {
    this.index = this.index === this.slides.length - 1 ? 0 : this.index + 1;
    this.update();
  }

  goTo(index) {
    this.index = index;
    this.update();
  }

  update() {
    this.track.style.transform = `translateX(-${this.index * 100}%)`;

    this.dots.forEach((dot, index) => {
      const active = index === this.index;
      dot.classList.toggle('is-active', active);
      dot.setAttribute('aria-selected', active);
    });
  }

  play() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    this.pause();
    this.timer = setInterval(() => this.next(), this.interval);
  }

  pause() {
    if (!this.timer) return;

    clearInterval(this.timer);
    this.timer = null;
  }
}

window.addEventListener('DOMContentLoaded', () => {
  new Slider(document.querySelector('.slider'), {
    interval: 10000
  });
});
