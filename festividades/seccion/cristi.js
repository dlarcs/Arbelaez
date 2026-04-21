function initMarquee(config) {
  const { wrapperId, innerId, trackId, duration } = config;

  const marqueeWrapper = document.getElementById(wrapperId);
  const marqueeInner   = document.getElementById(innerId);
  const marqueeTrack   = document.getElementById(trackId);

  if (!marqueeWrapper || !marqueeInner || !marqueeTrack) {
    return;
  }

  marqueeInner.style.setProperty("--marquee-duration", duration);

  marqueeWrapper.addEventListener("mouseenter", () => {
    marqueeInner.style.animationPlayState = "paused";
  });

  marqueeWrapper.addEventListener("mouseleave", () => {
    marqueeInner.style.animationPlayState = "running";
  });
}

document.addEventListener("DOMContentLoaded", () => {
  initMarquee({
    wrapperId: "marqueeWrapperCorpus",
    innerId: "marqueeInnerCorpus",
    trackId: "marqueeTrackCorpus",
    duration: "42000ms",
  });

  initMarquee({
    wrapperId: "marqueeWrapperDiablada",
    innerId: "marqueeInnerDiablada",
    trackId: "marqueeTrackDiablada",
    duration: "52000ms",
  });
});
