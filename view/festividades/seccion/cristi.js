/* -----------------------------------------
   Image data for each festive gallery
----------------------------------------- */
const galleriesData = {
  corpus: [
    {
      title: "Corpus Christi",
      image: "../../view/festividades/img_christi/christi.jpeg",
    },
    {
      title: "Corpus Christi",
      image: "../../view/festividades/img_christi/christi1.jpeg",
    },
    {
      title: "Corpus Christi",
      image: "../../view/festividades/img_christi/christi2.jpeg",
    },
    {
      title: "Corpus Christi",
      image: "../../view/festividades/img_christi/christi3.jpeg",
    },
  ],

  diablada: [
    {
      title: "La Diablada",
      image: "../../view/festividades/img_diablada/diablada1.jpeg",
    },
    {
      title: "La Diablada",
      image: "../../view/festividades/img_diablada/diablada2.jpeg",
    },
    {
      title: "La Diablada",
      image: "../../view/festividades/img_diablada/diablada3.jpeg",
    },
    {
      title: "La Diablada",
      image: "../../view/festividades/img_diablada/diablada4.jpeg",
    },
  ],

  cumple: [
    {
      title: "Cumpleaños de Arbeláez",
      image: "../../view/festividades/img_cumple/cumple1.jpeg",
    },
    {
      title: "Cumpleaños de Arbeláez",
      image: "../../view/festividades/img_cumple/cumple2.jpeg",
    },
    {
      title: "Cumpleaños de Arbeláez",
      image: "../../view/festividades/img_cumple/cumple3.jpeg",
    },
    {
      title: "Cumpleaños de Arbeláez",
      image: "../../view/festividades/img_cumple/cumple4.jpeg",
    },
  ],
};

/* -----------------------------------------
   Reusable marquee builder
----------------------------------------- */
function initMarquee(config) {
  const {
    wrapperId,
    innerId,
    trackId,
    cards,
  } = config;

  const marqueeWrapper = document.getElementById(wrapperId);
  const marqueeInner   = document.getElementById(innerId);
  const marqueeTrack   = document.getElementById(trackId);

  if (!marqueeWrapper || !marqueeInner || !marqueeTrack || !Array.isArray(cards) || !cards.length) {
    return;
  }

  /* Duplicate the cards so the marquee can loop continuously */
  const allCards = [...cards, ...cards];

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

  /* Set a duration based on the number of original cards */
  marqueeInner.style.setProperty(
    "--marquee-duration",
    `${cards.length * 2500}ms`
  );

  /* Pause on hover */
  marqueeWrapper.addEventListener("mouseenter", () => {
    marqueeInner.style.animationPlayState = "paused";
  });

  marqueeWrapper.addEventListener("mouseleave", () => {
    marqueeInner.style.animationPlayState = "running";
  });
}

/* -----------------------------------------
   Initialise all marquees
----------------------------------------- */
document.addEventListener("DOMContentLoaded", () => {
  initMarquee({
    wrapperId: "marqueeWrapperCorpus",
    innerId: "marqueeInnerCorpus",
    trackId: "marqueeTrackCorpus",
    cards: galleriesData.corpus,
  });

  initMarquee({
    wrapperId: "marqueeWrapperDiablada",
    innerId: "marqueeInnerDiablada",
    trackId: "marqueeTrackDiablada",
    cards: galleriesData.diablada,
  });

  initMarquee({
    wrapperId: "marqueeWrapperCumple",
    innerId: "marqueeInnerCumple",
    trackId: "marqueeTrackCumple",
    cards: galleriesData.cumple,
  });
});
