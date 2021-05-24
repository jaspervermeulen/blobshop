// require('./style.css');
{
  const init = () => {
    const ctaButton = document.querySelector('.info__cta--btn');
    const newsletterForm = document.querySelector('.newsletter__form');
    newsletterForm.addEventListener('submit', handleFormSubmit);
    if (ctaButton != undefined) {
      ctaButton.addEventListener('click', handleCtaButtonClick);
    }

    window.addEventListener('scroll', handleScrollTop)

    document.querySelector('.scrolltotop').addEventListener('click', handleScrollTopClick)
  }

  const handleScrollTop = e => {
    let scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;
    if (scrollTop < 50) {
      document.querySelector('.scrolltotop').style.opacity = '0';
    } else {
      document.querySelector('.scrolltotop').style.opacity = '1';
    }
  };

  const handleScrollTopClick = () => {
    window.scroll({
      top: 0,
      left: 0,
      behavior: 'smooth'
    });
  }

  const handleFormSubmit = () => {
    console.log('form submitted')
  }

  const handleCtaButtonClick = e => {
    e.preventDefault();
    window.scroll({
      top: 600,
      left: 0,
      behavior: 'smooth'
    });
  }

  init();
}
