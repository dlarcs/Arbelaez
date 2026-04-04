const cardData = [
  {
    title: "Unlock Your Creative Flow",
    image: "view/festividades/img_christi/christi.jpeg",
  },
  {
    title: "Design Your Digital Future",
    image: "view/festividades/img_christi/christi1.jpeg",
  },
  {
    title: "Build with Passion, Ship with Pride",
    image: "view/festividades/img_christi/christi2.jpeg",
  },
  {
    title: "Think Big, Code Smart",
    image: "view/festividades/img_christi/christi3.jpeg",
  },
];

const marqueeWrapper = document.getElementById("marqueeWrapper");
const marqueeInner = document.getElementById("marqueeInner");
const marqueeTrack = document.getElementById("marqueeTrack");

/* Duplicate the cards to create the infinite marquee effect */
const allCards = [...cardData, ...cardData];

allCards.forEach((card) => {
  const cardEl = document.createElement("div");
  cardEl.className = "card";

  cardEl.innerHTML = `
    <img src="${card.image}" alt="${card.title}">
    <div class="card-overlay">
      <p>${card.title}</p>
    </div>
  `;

  marqueeTrack.appendChild(cardEl);
});

/* Set the animation duration based on the number of original cards */
marqueeInner.style.setProperty(
  "--marquee-duration",
  `${cardData.length * 2500}ms`
);

/* Pause the animation on hover */
marqueeWrapper.addEventListener("mouseenter", () => {
  marqueeInner.style.animationPlayState = "paused";
});

marqueeWrapper.addEventListener("mouseleave", () => {
  marqueeInner.style.animationPlayState = "running";
});
