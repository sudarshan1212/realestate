<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="shortcut icon" href="house.webp" type="image/x-icon">            
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>        
        <link rel="stylesheet" href="swiper-bundle.min.css">        
        <link rel="stylesheet" href="styles.css">
        <title>Responsive real state website</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    Estate<i class='bx bxs-home-alt-2' ></i>
                </a>
                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class='bx bx-home-alt-2' ></i>
                                <span>Home</span>
                                </a>
                        </li>
                        <li class="nav__item">
                            <a href="#popular" class="nav__link">

                                <i class='bx bx-building-house' ></i>
                                <span>Residence</span>
                            </a>
                        </li>
                         <li class="nav__item">
                            <a href="#value" class="nav__link">

                                <i class='bx bx-award' ></i>
                                <span>Value</span>
                            </a>
                        </li> 
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">

                                <i class='bx bxs-phone'></i>
                                <span>Contact</span>
                            </a> 
                        </li>
                    </ul>
                </div>
                <!--==================== theme ====================-->
                <i class='bx bx-moon change-theme' id="theme-button"></i>

                <a href="index.php" class="button nav__button">
                   Logout
                   </a>
            
            </nav>
        </header>
        <main class="main">
            <section class="home section" id="home">
               <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__title">
                            Discover <br> Most Suitable <br> Property
                        </h1>
                        <p class="home__description">
                             Find a variety of properties that suit you very easily,
                            Forget all difficulties in findingaresidence for you
                         </p>
                         <form action="" class="home__search">
                            <i class='bx bxs-map'></i>
                             <input type="search" placeholder="Search by location..." class="home__search-input">
                             <button class="button">Search</button>
                         </form>
                         <div class="home__value">
                            <div>
                               <h1 class="home__value-number">
                                  9K <span>+</span>
                               </h1>
                               <span class="home__value-description">
                                  Premium <br> Product
                               </span>
                            </div>
                            <div>
                                <h1 class="home__value-number">
                                   2K <span>+</span>
                                </h1>
                                <span class="home__value-description">
                                   Happy <br> Customer
                                </span>
                             </div>
                             <div>
                                <h1 class="home__value-number">
                                   28K <span>+</span>
                                </h1>
                                <span class="home__value-description">
                                   Awards <br> Winning
                                </span>
                             </div>
                         </div>
                    </div>
                    <div class="home__container container grid">
                        <div class="home_data">
                        </div>
                
                        <div class="home__images">
                            <div class="home__orbe"></div>
                            <div class="home__img">
                                <img src="home.jpg" alt="">
                            </div>                                                                  
                        </div>
                </div>                
            </section>
            <section class="logos section">
                <div class="logos__container container grid">
                    <div class="logos__img">
                       <img src="logo1.png" alt="">
                    </div>
                    <div class="logos__img">
                       <img src="logo2.png" alt="">
                    </div>
                    <div class="logos__img">
                       <img src="logo3.png" alt="">
                    </div>
                    <div class="logos__img">
                       <img src="logo4.png" alt="">
                    </div>
                 </div>                
            </section>
            <section class="section" id="popular">
                <div class="container">
                    <span class="section__subtitle">Best Choise</span>
                    <h2 class="section__title">
                        Popular Residences<span>.</span>
                    </h2>
                   <div class="popular__container swiper">
                        <div class="swiper-wrapper ">
                            <article class="popular__card swiper-slide">
                            <img src="popular1.jpg" alt="" class="popular__img">
                            <div class="popular_data">
                                <h2 class="popular__price">
                                    <span>$</span>66,356
                                </h2>
                                <h3 class="popular title">
                                    Garden City Assat
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores,
                                    Lima-Perú Av. Sol #9876
                             </div>
                            </article>                            
                            <article class="popular__card swiper-slide">
                            <img src="popular2.jpg" alt="" class="popular__img">
                            <div class="popular_data">
                                <h2 class="popular__price">
                                    <span>$</span>35,159
                                </h2>
                                <h3 class="popular title">
                                    Gables Luxurious House
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores,
                                    Lima-Perú Av. Sol #9876
                             </div>
                            </article>
                            <article class="popular__card swiper-slide">
                            <img src="popular3.jpg" alt="" class="popular__img">
                            <div class="popular_data">
                                <h2 class="popular__price">
                                    <span>$</span>75,043
                                </h2>
                                <h3 class="popular title">
                                    Garden Orchard City
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores,
                                    Lima-Perú Av. Sol #9876
                             </div>
                            </article>
                            <article class="popular__card swiper-slide">
                            <img src="popular4.jpg" alt="" class="popular__img">
                            <div class="popular_data">
                                <h2 class="popular__price">
                                    <span>$</span>62,024
                                </h2>
                                <h3 class="popular title">
                                    Luxurious City Garden
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores,
                                    Lima-Perú Av. Sol #9876
                             </div>
                            </article>
                            <article class="popular__card swiper-slide">
                            <img src="popular5.jpg" alt="" class="popular__img">
                            <div class="popular_data">
                                <h2 class="popular__price">
                                    <span>$</span>47,043
                                </h2>
                                <h3 class="popular title">
                                    Aliva Private Garden
                                </h3>
                                <p class="popular__description">
                                    Street The Garden City Of Miraflores,
                                    Lima-Perú Av. Sol #9876
                             </div>
                            </article>                            
                        </div>
                        <div class="swiper-button-next">
                            <i class='bx bx-chevron-right'></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class='bx bx-chevron-left'></i>
                        </div>
                    </div>
                </div>                
            </section>
            <section class="value section" id="value">
                <div class="value__container container grid">
                    <div class="value__images">
                        <div class="value__orbe"></div>
                        <div class="value__img">
                            <img src="value.jpg" att="">
                        </div>
                    </div>
                    <div class="value__content">
                        <div class="value__data">
                            <span class="section__subtitle">Our Value</span>
                            <h2 class="section__title">
                               Value We Give To You<span>.</span>
                            </h2>
                            <p class="value__description">
                               We always ready to help by providing the best service for you
                               We believe a_good place to live can make your life better.
                            </p>
                        </div>
                        <div class="value__accordion">
                            <div class="value__accordion-item">
                                <header class="value__accordion-header">
                                    <i class='bx bxs-shield-x value__accordion-icon' ></i>
                                    <h3 class="value__accordion-title">
                                        Best interest rates on the market

                                    </h3>
                                    <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>

                                </header>
                                <div class="value__accordion-content">
                                    <p class="value__accordion-description">
                                          <br>  Price we provides is the best for you,
                                       we guarantee no price changes on your property due
                                       to various unexpected costs that may come.
                                    </p>
                                </div>
                            </div>
                            <div class="value__accordion-item">
                                <header class="value__accordion-header">
                                    <i class='bx bxs-x-square value__accordion-icon'></i>
                                    <h3 class="value__accordion-title">
                                        Prevent unstable prices
                                    </h3>
                                    <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                                </header>
                                <div class="value__accordion-content">
                                    <p class="value__accordion-description">
                                        <br> Price we provides is the best for you,
                                       we guarantee no price changes on your property due
                                       to various unexpected costs that may come.
                                    </p>
                                </div>
                            </div>
                            <div class="value__accordion-item">
                                <header class="value__accordion-header">
                                    <i class='bx bxs-bar-chart-square value__accordion-icon'></i>
                                    <h3 class="value__accordion-title">
                                        Best prices on the market 
                                    </h3>
                                    <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                                </header>
                                <div class="value__accordion-content">
                                    <p class="value__accordion-description">
                                        <br>Price we provides is the best for you,
                                       we guarantee no price changes on your property due
                                       to various unexpected costs that may come.
                                    </p>
                                </div>
                            </div>
                            <div class="value__accordion-item">
                                <header class="value__accordion-header">
                                    <i class='bx bxs-check-square value__accordion-icon'></i>
                                    <h3 class="value__accordion-title">
                                        Security of your data
                                    </h3>
                                    <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                                </header>
                                <div class="value__accordion-content">
                                    <p class="value__accordion-description">
                                        <br>Price we provides is the best for you,
                                       we guarantee no price changes on your property due
                                       to various unexpected costs that may come.
                                    </p>
                                </div>
                            </div>
                         </div>        
                     </div>
                </div>                
            </section>
            <section class="contact section" id="contact">
                <div class="contact__container container grid">
                    <div class="contact__images">
                       <div class="contact__orbe"></div>
                        <div class="contact__img">
                           <img src="contact.png"alt="">
                        </div>
                    </div>
                    <div class="contact__content">
                        <div class="contact__data">
                           <span class="section__subtitle">Contact Us</span>
                           <h2 class="section__title">
                            Easy to Contact us<span>.</span>
                        </h2>
                            <p class="contact__description">
                                Is there a problem finding your dream home? Needa
                                guide in buying first home? or needaconsultation
                                on residential issues? just contact us.
                              </p>                        
                        </div>                     
                     <div class="contact__card">
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class='bx bxs-phone-call'></i>
                                 <div>
                                      <h3 class="contact__card-title">
                                          Call
                                      </h3>
                                      <p class="contact__card-description">
                                        022.321.165.19
                                      </p>
                                    </div>
                                 </div>
                                 <button class="button contact__card-button">
                                     Call Now
                                 </button>
                            </div>
                            <div class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class='bx bxs-message-rounded-dots'></i>
                                     <div>
                                          <h3 class="contact__card-title">
                                              Chat
                                          </h3>
                                          <p class="contact__card-description">
                                            022.321.165.19    
                                          </p>
                                        </div>
                                     </div>
                                     <button class="button contact__card-button">
                                         Chat Now
                                     </button>
                                </div>
                                <div class="contact__card-box">
                                    <div class="contact__card-info">
                                        <i class='bx bxs-video'></i>
                                         <div>
                                              <h3 class="contact__card-title">
                                                  Video Call
                                              </h3>
                                              <p class="contact__card-description">
                                                022.321.165.19        
                                              </p>
                                            </div>
                                         </div>
                                         <button class="button contact__card-button">
                                            Video Call
                                         </button>
                                    </div>
                                    <div class="contact__card-box">
                                    <div class="contact__card-info">
                                        <i class='bx bxs-envelope' ></i>
                                         <div>
                                              <h3 class="contact__card-title">
                                                  Message
                                              </h3>
                                              <p class="contact__card-description">
                                                022.321.165.19        
                                              </p>
                                            </div>
                                         </div>
                                         <button class="button contact__card-button">
                                            Message Now
                                         </button>
                                    </div>
                        </div>
                    </div>
                 </div>            
            </section>
            <section class="subscribe section">
                <div class="subscribe__container container">
                    <h1 class="subscribe__title">
                       Get Started with Estate
                    </h1>
                   <p class="subscribe__description">
                       Subscribe and find super attractive price
                       quotes from us, Find your residence soon
                    </p>
                    <a href="#" class="button subscribe__button">
                       Get Started
                    </a>
                 </div>                
            </section>
        </main>
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="#" class="footer__logo">
                         Estate<i class='bx bxs-home-alt-2' ></i>
                    </a>
                    <p class="footer__description">
                        Our vision is to make all people <br>
                        the best place to live for them.
                      </p>
                </div> 
                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">
                            About
                        </h3>
                        <ul class="footer__links">
                            <li>
                                <a href="" class="footer__link">About Us</a>
                            </li>
                            <li>
                                <a href="" class="footer__link"> Features</a>
                            </li><li>
                                <a href="" class="footer__link">News & Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">
                            Company
                        </h3>
                        <ul class="footer__links">
                            <li>
                                <a href="" class="footer__link">How We Work?</a>
                            </li>
                            <li>
                                <a href="" class="footer__link">Capital</a>
                            </li><li>
                                <a href="" class="footer__link">Security</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">
                            Support

                        </h3>
                        <ul class="footer__links">
                            <li>
                                <a href="" class="footer__link">FAQs</a>
                            </li>
                            <li>
                                <a href="" class="footer__link">Support center</a>
                            </li><li>
                                <a href="" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">
                            Follow us
                        </h3>
                        <ul class="footer__social">
                            <a href="https://www.facebook.com/" target="_blank" 
                            class="footer__social-link">
                                <i class='bx bxl-facebook-circle' ></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" 
                            class="footer__social-link">
                                <i class='bx bxl-instagram-alt' ></i>
                            </a>
                            <a href="https://www.pinterest.com/" target="_blank" 
                            class="footer__social-link">
                            <i class='bx bxl-twitter' ></i>
                            </a>                            
                        </ul>
                    </div>
                 </div>
            </div>
            <div class="footer__info container">
                <span class="footer__copy">
                    &#169; akash. All rigths reserved
                </span>
                <div class="foote__privacy">
                    <a href="#">Terms & Agreements</a>
                    <a href="#">Privacy Policy</a>
                </div>                                                                                                                 
            </div>
        </footer>       
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-chevrons-up'></i>
         </a>        
        <script src="scrollreveal.min.js"></script>        
        <script src="swiper-bundle.min.js"></script>        
        <script src="ciiii.js"></script>
        <script src="C:\xampp\htdocs\programs\ciiii.js"></script>


    </body>
</html>
<script>
    function scrollHeader(){
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 50) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)
var swiperPopular = new Swiper(".popular__container", {
    spaceBetween: 32,
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});
/*=============== VALUE ACCORDION ===============*/
const accordionItems = document.querySelectorAll ('.value__accordion-item')
accordionItems.forEach((item) =>{
    const accordionHeader=item.querySelector('.value__accordion-header')
    accordionHeader.addEventListener('click', () =>{
        const openItem = document.querySelector('.accordion-open')
        toggleItem(item)        
        if(openItem && openItem!== item){
            toggleItem(openItem)
        }
    })
})
const toggleItem=(item) =>{
    const accordionContent=item.querySelector('.value__accordion-content')    
    if(item.classList.contains('accordion-open')){
        accordionContent.removeAttribute('style')
        item.classList.remove('accordion-open')
    }else{
        accordionContent.style.height=accordionContent.scrollHeight+'px'
        
        item.classList.add('accordion-open')
    }
}
/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
              sectionTop = current.offsetTop - 58,
              sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)
/*=============== SHOW SCROLL UP ===============*/
function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 350) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp) 
/*=============== DARK LIGHT THEME ===============*/ 
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-sun'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx bx-moon' : 'bx bx-sun'


if (selectedTheme) {
  
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'bx bx-moon' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
   
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})


/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
    origin:'top',
   distance:'60px',
   duration:2500,
   delay:400,
   reset:true
   
    
})
sr.reveal(`.home__title,.popular__container,.subscribe__container,.footer__container`)
sr.reveal(`.home__description,.footer__info`,{delay:50})
sr.reveal(`.home__search`,{delay:50})
sr.reveal(`.home__value`,{delay:50})
sr.reveal(`.home__images`,{delay:50,origin:'bottom'})
sr.reveal(`.logos__img`,{interval: 50})
sr.reveal(`.value__images,.contact__content`,{origin:'left'})
sr.reveal(`.value__content,.contact__images`,{origin:'right'})

</script>