// An application to put a continuous slide show on the front page.
const heroContentArray = [
  {
    heroHeading: "IT Professional",
    imageHref: "https://markelliottvapersonal.local/professional/",
    imageSrc: "/wp-content/uploads/2023/01/ComputerDesk-1-scaled.jpg",
    imageAlt: "Mark Elliott's computer",
    heroText:
      "Mark Elliott has mostly earned his living in Information Technology. He spent the first 20 or so years of his working life in IT operations, mostly in the role of a systems engineer supporting Intel servers in data centers of various sizes. He also briefly taught technology at the high school and college level in the early 2000's.  After 12 years of trying to make a go of working as a traditional craftsman and artist, he is now back in IT as a developer.  Unless you are extraordinarily talented and productive, one has to go where the market is to make a decent living.",
  },
  {
    heroHeading: "Craftsman",
    imageHref: "https://markelliottvapersonal.local/craftsman/",
    imageSrc: "/wp-content/uploads/2021/09/WPRifle19-1-scaled.jpg",
    imageAlt: "early Virginia flintlock rifle",
    heroText:
      "Since he was a teenager, the love of Mark's life has been the American longrifle and longrifle culture.  Over the years, Mark has produced many longrifles; although not as many as he would have liked.  He has also produced countless powder horns and shot pouches as well as a few knives.  Unfortunately, these interests comprise a limited market, and Mark's productivity was never that high.  Making a good living in the traditional crafts has always been elusive.  Those who do make a living at it, are involved in a lot of different aspects of the craft.",
  },
  {
    heroHeading: "Artist",
    imageHref: "https://markelliottvapersonal.local/artist/",
    imageSrc:
      "/wp-content/uploads/2019/11/marriage_certificate_20190529_0001-scaled.jpg",
    imageAlt: "fraktur marriage certificate",
    heroText:
      "Mark has been an artist his entire life producing art in many different media.  He was in the gifted and talent program for art throughout his years in the Hanover County Public Schools.  He would have liked to have made it his profession but didn't see a path at the time.  At this late stage in his life, he still sees it only as an avocation as opposed to a profession that can produce an adequate living. This is mostly becuase of the media and genre on which Mark chose to focus.  Mark currently pursues his art in the form of fraktur - 18th and 19th century decorative documents mostly associated with the German-American community. He also enjoys architectural and landscape photography as the occasion presents itself.",
  },
];

const buildCarousel = (i) => {
  jQuery(document).ready(function () {
    // define carousel slide container - section
    const carouselContainerEl = jQuery("#carousel-container");

    // remove existing carouselSlideEl
    if (jQuery(".carousel-slide")) {
      jQuery(".carousel-slide").remove();
    }

    // rebuild carousel-slide div
    const newCarouselSlideEl = jQuery("<div>").addClass("carousel-slide");
    carouselContainerEl.append(newCarouselSlideEl);

    // build carousel slide h2 line
    const slideHeading = jQuery("<h2>")
      .addClass("slide-heading")
      .text(heroContentArray[i].heroHeading);

    // build carousel slide a/img line  - class="slide-image"
    const slideImage = jQuery("<a>")
      .addClass("slide-image")
      .attr("href", heroContentArray[i].imageHref)
      .html(
        "<img src=" +
          heroContentArray[i].imageSrc +
          " alt=" +
          heroContentArray[i].imageAlt +
          " />"
      );

    // build icon lines
    const leftChevronIcon = jQuery("<i>").addClass(
      "fa-solid fa-circle-chevron-left fa-2xl"
    );
    const rightChevronIcon = jQuery("<i>").addClass(
      "fa-solid fa-circle-chevron-right fa-2xl"
    );

    // build carousel slide p line  - class="slide-text"
    const slideText = jQuery("<p>")
      .addClass("slide-text")
      .text(heroContentArray[i].heroText);

    // append lines to slide and then to slide container
    newCarouselSlideEl.append(
      slideHeading,
      slideImage,
      leftChevronIcon,
      rightChevronIcon,
      slideText
    );
  });
};

// must setup setTimeout using Promise/async/await for it to execute properly
const delay = (ms) => new Promise((res) => setTimeout(res, ms));

const loadArray = async () => {
  for (let i = 0; i < heroContentArray.length; i++) {
    buildCarousel(i);
    await delay(7000);
  }
  loadArray(); // infinite loop until navigate away
};

loadArray();
