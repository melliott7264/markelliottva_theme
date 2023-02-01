// An application to put a continuous slide show on the front page.
const heroContentArray = [
  {
    heroHeading: "20th & 21st Centuries",
    imageHref: "https://markelliottvapersonal.local/professional/",
    imageSrc: "/wp-content/uploads/2023/01/ComputerDesk-1-scaled.jpg",
    imageAlt: "Mark Elliott's computer",
    heroText:
      "I have mostly earned my living in Information Technology, both in the 20th and 21st centuries. I have been coding since the early days of personal computers and spent the first 20 or so years of my working life in IT operations, mostly in the role of a systems engineer supporting Intel servers in data centers of various sizes. I also briefly taught technology at the high school and college level in the early 2000's.  After 12 years of trying to make a go of working as a traditional craftsman and artist, I am now back in IT as a developer.  Unless you are extraordinarily talented, productive and lucky, it is very difficult to make a living in the arts, particularly historic arts and crafts.  You have to go where the market is and that is the  technology of the current age.",
  },
  {
    heroHeading: "18th & 19th Centuries",
    imageHref: "https://markelliottvapersonal.local/craftsman/",
    imageSrc: "/wp-content/uploads/2021/09/WPRifle19-1-scaled.jpg",
    imageAlt: "early Virginia flintlock rifle",
    heroText:
      "Since I was a teenager, the love of my life has been the American longrifle and longrifle culture.  Over the years, I have produced many longrifles; although not as many as I would have liked.  I have also produced countless powder horns and shot pouches as well as a few knives.  Unfortunately, these interests represent a limited market, and my productivity was never that high.  Making a good living in the traditional crafts has always been elusive.  Those who do make a living at it, are involved in a lot of different aspects of the craft.",
  },
  {
    heroHeading: "18th & 19th Centuries",
    imageHref: "https://markelliottvapersonal.local/artist/",
    imageSrc:
      "/wp-content/uploads/2019/11/marriage_certificate_20190529_0001-scaled.jpg",
    imageAlt: "fraktur marriage certificate",
    heroText:
      "I have been an artist my entire life producing art in many different media.  I was in the gifted and talent program for art throughout my years in the Hanover County Public Schools, and I would have liked to have made it my vocation.  However, I didn't see a path at the time.  Actually, after tring to make a living at it later in life,  I still don't see a path to a good living.  This is mostly becuase of my focus on historical crafts. It seems that what money there is, is in fine arts.  Currently I pursue my artistic expression in the form of fraktur - 18th and 19th century decorative documents mostly associated with the German-American community.  I also enjoy architectural and landscape photography as the occasion presents itself.",
  },
];

// status flags
let pauseFlag = false;
let currentSlide = 0;

const buildCarousel = (i) => {
  jQuery(document).ready(function () {
    // define carousel slide container - section
    const carouselContainerEl = jQuery("#carousel-container");

    // define buttons element
    navButtonsEl = jQuery("#nav-buttons");
    // empty buttons element so that we don't end up with icons stacked on top of each other
    navButtonsEl.empty();

    // remove existing carouselSlideEl to start fresh
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
      .addClass("slide-image-link")
      .attr("href", heroContentArray[i].imageHref)
      .html(
        "<img class='slide-image' src=" +
          heroContentArray[i].imageSrc +
          " alt=" +
          heroContentArray[i].imageAlt +
          " />"
      );

    // build icon lines
    const leftChevronIcon = jQuery("<i>").addClass(
      "fa-solid fa-circle-chevron-left fa-2xl slide-left-btn"
    );

    const rightChevronIcon = jQuery("<i>").addClass(
      "fa-solid fa-circle-chevron-right fa-2xl slide-right-btn"
    );

    // When paused use play icon -  fa-circle-play
    let pausePlayIcon = "";

    if (pauseFlag === true) {
      pausePlayIcon = jQuery("<i>")
        .attr("id", "slide-play-button")
        .addClass("fa-solid fa-circle-play fa-2xl");
    } else {
      pausePlayIcon = jQuery("<i>")
        .attr("id", "slide-pause-button")
        .addClass("fa-solid fa-circle-pause fa-2xl");
    }

    // build carousel slide p line  - class="slide-text"
    const slideText = jQuery("<p>")
      .addClass("slide-text")
      .text(heroContentArray[i].heroText);

    // append lines to slide and then to slide container
    newCarouselSlideEl.append(slideHeading, slideImage, slideText);

    // append buttons to nav buttons div
    navButtonsEl.append(leftChevronIcon, pausePlayIcon, rightChevronIcon);
  });
};

// must setup setTimeout using Promise/async/await for it to execute properly
const delay = (ms) => new Promise((res) => setTimeout(res, ms));

// function to start carousel passing in the slide index to start
const loadArray = async (slide) => {
  // start carousel at passed slide index
  for (let i = slide; i < heroContentArray.length; i++) {
    // if pause button has been not been pressed
    if (pauseFlag === false) {
      // set current slide to index and pass to function to display slide
      currentSlide = i;
      buildCarousel(currentSlide);
    } else {
      // display current slide
      // need to change pause/play  icon ?  - perhaps need to pull that code out of buildCarousel function?
      buildCarousel(currentSlide);
      return;
    }
    await delay(5000);
  }
  loadArray(0); // infinite loop until navigate away
};

jQuery("#main").on("click", "#slide-pause-button", function (event) {
  pauseFlag = true;
  loadArray(currentSlide);
});

jQuery("#main").on("click", "#slide-play-button", function (event) {
  pauseFlag = false;
  loadArray(currentSlide);
});

jQuery("#main").on("click", ".slide-right-btn", function (event) {
  pauseFlag = true;
  // if at last slide, go to first slide, otherwise increment currentSlide
  if (currentSlide === heroContentArray.length - 1) {
    currentSlide = 0;
  } else {
    currentSlide++;
  }
  loadArray(currentSlide);
});

jQuery("#main").on("click", ".slide-left-btn", function (event) {
  pauseFlag = true;
  // if at first slide, got to last slide, otherwise decrement currentSlide
  if (currentSlide === 0) {
    currentSlide = heroContentArray.length - 1;
  } else {
    currentSlide--;
  }
  loadArray(currentSlide);
});

if (!pauseFlag) {
  loadArray(0);
}
