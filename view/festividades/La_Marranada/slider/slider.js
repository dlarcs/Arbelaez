/**
 * Slider accesible y responsive
 * - Auto-play cada 10s
 * - Pausa al hover y al enfocar con teclado
 * - Navegación por flechas, puntos, teclado, y swipe táctil
 */

class Slider {
	constructor(root, {
		interval = 10000
	} = {}) {
		this.root = root;
		this.track = root.querySelector('.slider__track');
		this.slides = Array.from(root.querySelectorAll('.slide'));
		this.prevBtn = root.querySelector('.slider__btn--prev');
		this.nextBtn = root.querySelector('.slider__btn--next');
		this.dots = Array.from(root.querySelectorAll('.dot'));
		this.viewport = root.querySelector('.slider__viewport');

		this.index = 0;
		this.intervalTime = interval;
		this.timer = null;

		this.bind();
		this.play();

		// Observa redimensionamiento para fijar el ancho correcto (opcional con flex, pero útil en algunos layouts)
		new ResizeObserver(() => this.goto(this.index, false)).observe(this.root);
	}

	bind() {
		// Botones
		this.prevBtn.addEventListener('click', () => this.prev());
		this.nextBtn.addEventListener('click', () => this.next());

		// Puntos
		this.dots.forEach(dot => {
			dot.addEventListener('click', () => this.goto(+dot.dataset.index));
		});

		// Teclado (cuando el viewport tiene foco)
		this.viewport.addEventListener('keydown', (e) => {
			if (e.key === 'ArrowLeft') this.prev();
			if (e.key === 'ArrowRight') this.next();
		});

		// Hover / Focus: pausar
		['mouseenter', 'focusin'].forEach(ev => this.root.addEventListener(ev, () => this.pause()));
		['mouseleave', 'focusout'].forEach(ev => this.root.addEventListener(ev, () => this.play()));

		// Swipe táctil
		this.#bindTouch();
	}

	play() {
		if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
		this.clear();
		this.timer = setInterval(() => this.next(), this.intervalTime);
	}
	pause() {
		this.clear();
	}
	clear() {
		if (this.timer) {
			clearInterval(this.timer);
			this.timer = null;
		}
	}

	prev() {
		this.goto((this.index - 1 + this.slides.length) % this.slides.length);
	}
	next() {
		this.goto((this.index + 1) % this.slides.length);
	}

	goto(i, animate = true) {
		this.index = i;
		const offset = -i * this.root.clientWidth;
		if (!animate) this.track.style.transition = 'none';
		this.track.style.transform = `translate3d(${offset}px,0,0)`;
		// force reflow to re-enable transition later if it was disabled
		if (!animate) requestAnimationFrame(() => (this.track.style.transition = ''));

		// Estado visual
		this.slides.forEach((s, idx) => s.classList.toggle('is-current', idx === i));
		this.dots.forEach((d, idx) => d.classList.toggle('is-active', idx === i));
		this.dots.forEach((d, idx) => {
			d.setAttribute('aria-selected', String(idx === i));
		});
	}

	#bindTouch() {
		let startX = 0,
			currentX = 0,
			isDown = false,
			startTime = 0;

		const onStart = (x) => {
			isDown = true;
			startX = currentX = x;
			startTime = Date.now();
			this.pause();
		};
		const onMove = (x) => {
			if (!isDown) return;
			currentX = x;
			const dx = currentX - startX;
			this.track.style.transition = 'none';
			const base = -this.index * this.root.clientWidth;
			this.track.style.transform = `translate3d(${base + dx}px,0,0)`;
		};
		const onEnd = () => {
			if (!isDown) return;
			isDown = false;
			const dx = currentX - startX;
			const dt = Date.now() - startTime;
			const threshold = this.root.clientWidth * 0.18; // 18% del ancho o swipe rápido
			const quick = dt < 250 && Math.abs(dx) > 30;

			this.track.style.transition = '';
			if (dx > threshold || (dx > 0 && quick)) this.prev();
			else if (dx < -threshold || (dx < 0 && quick)) this.next();
			else this.goto(this.index); // volver

			this.play();
		};

		// Eventos táctiles
		this.root.addEventListener('touchstart', e => onStart(e.touches[0].clientX), {
			passive: true
		});
		this.root.addEventListener('touchmove', e => onMove(e.touches[0].clientX), {
			passive: true
		});
		this.root.addEventListener('touchend', onEnd);

		// Eventos mouse (drag suave opcional)
		this.root.addEventListener('mousedown', e => onStart(e.clientX));
		window.addEventListener('mousemove', e => onMove(e.clientX));
		window.addEventListener('mouseup', onEnd);
	}
}

// Inicializar
window.addEventListener('DOMContentLoaded', () => {
	const sliderEl = document.querySelector('.slider');
	new Slider(sliderEl, {
		interval: 10000
	}); // 10s
});
