<!-- <?php
// include "config.php";
session_start();
?>
 -->
<?php include_once 'header.php'; ?>

 <main class="main-container">

    <section class="main-accessibility-section">
        <div  class="instruments " class="pg-wrap" >
              <div class="content">
        <img src="assets/img/comtra.png" class="cen">
        <form style="display:none">
            <input type="text" placeholder="Search our instruments">
            <button type="submit"></button>
        </form>
        <h2>Forex Tradings</h2>
         <div class="prices_forex"></div>
    </div>
        </div>
    </section>

    <section class="acc-section">
        <div class="pg-wrap">
            
           
            <a 
                href="login/index.php" 
                class="btn-t11 -arr-r acc-section__btn -text-s02" 
                data-auto-event-category="cta_click" 
                data-auto-event-action="choose-your-account-type-main"
                ><span class="btn-t11__inner">Start Trading</span>
            </a>
        </div>


        <div class="acc-available">
            <div class="acc-available__title">
                Available&#160;on:
            </div>
            <a href="/downloads" class="acc-available__item -desktop">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve" class="software-platform-icon -desktop">
                    <g>
                        <path class="software-platform-icon__elem" style="fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="
                            M27,22H3c-1.1,0-2-0.9-2-2V5c0-1.1,0.9-2,2-2h24c1.1,0,2,0.9,2,2v15C29,21.1,28.1,22,27,22z"/>
                        
                        <line class="software-platform-icon__elem" style="fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="20" y1="27" x2="10" y2="27"/>
                        <path style="fill:#ffffff;" d="M29,18v1c0,1.7-1.3,3-3,3H4c-1.7,0-3-1.3-3-3v-1"/>
                    </g>
                </svg>
            </a>
            <a href="/downloads" class="acc-available__item -ios">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve" class="software-platform-icon -ios">
                    <g>
                        <path style="fill:#ffffff;"class="software-platform-icon__elem" d="M23.3,16.1c0-3.8,3.1-5.6,3.3-5.6C24.8,7.9,22,7.6,21,7.5c-2.4-0.2-4.6,1.4-5.8,1.4c-1.2,0-3.1-1.3-5-1.3
                            c-2.6,0-5,1.5-6.3,3.7c-2.7,4.5-0.7,11.3,1.9,14.9C7.1,28,8.6,30,10.6,30c1.9,0,2.7-1.2,5-1.2c2.3,0,3,1.2,5,1.2
                            c2.1,0,3.4-1.8,4.7-3.6c1.5-2.1,2.1-4.1,2.1-4.2C27.3,22.1,23.3,20.6,23.3,16.1z"/>
                        <path style="fill:#ffffff;"class="software-platform-icon__elem" d="M19.1,4.7c1-1.2,1.7-3,1.5-4.7c-1.5,0.1-3.3,1-4.4,2.2c-1,1.1-1.8,2.8-1.6,4.5C16.3,6.9,18,5.9,19.1,4.7z"/>
                    </g>
                </svg>
            </a>
            <a href="/downloads" class="acc-available__item -android">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve" class="software-platform-icon -android">
                    <g>
                        <path class="software-platform-icon__elem" style="fill:#ffffff;" d="M18.9,2.5l1.2-2c0.1-0.1,0.1-0.3-0.1-0.4C19.9,0,19.8,0,19.7,0.1l-1.3,2.1c-1-0.4-2.2-0.6-3.4-0.6
                            c-1.2,0-2.4,0.2-3.4,0.6l-1.3-2.1C10.2,0,10,0,9.9,0.1C9.8,0.1,9.7,0.3,9.8,0.5l1.2,2C8.6,3.6,7,6.5,7,9h16
                            C23,6.5,21.3,3.6,18.9,2.5z M11.6,6.8c-0.6,0-1.1-0.5-1.1-1.1c0-0.6,0.5-1.1,1.1-1.1c0.6,0,1.1,0.5,1.1,1.1
                            C12.8,6.3,12.3,6.8,11.6,6.8z M18.4,6.8c-0.6,0-1.1-0.5-1.1-1.1c0-0.6,0.5-1.1,1.1-1.1c0.6,0,1.1,0.5,1.1,1.1
                            C19.5,6.3,19,6.8,18.4,6.8z"/>
                        <path class="software-platform-icon__elem" style="fill:#ffffff;" d="M20.8,24H9.2C8,24,7,23,7,21.8L7,10h16v11.8C23,23,22,24,20.8,24z"/>
                        <path class="software-platform-icon__elem" style="fill:#ffffff;" d="M4,21L4,21c1.1,0,2-0.9,2-2v-7c0-1.1-0.9-2-2-2h0c-1.1,0-2,0.9-2,2v7C2,20.1,2.9,21,4,21z"/>
                        <path class="software-platform-icon__elem" style="fill:#ffffff;" d="M26,21L26,21c1.1,0,2-0.9,2-2v-7c0-1.1-0.9-2-2-2h0c-1.1,0-2,0.9-2,2v7C24,20.1,24.9,21,26,21z"/>
                        <path class="software-platform-icon__elem" style="fill:#ffffff;" d="M18,30L18,30c1.1,0,2-0.9,2-2v-7c0-1.1-0.9-2-2-2h0c-1.1,0-2,0.9-2,2v7C16,29.1,16.9,30,18,30z"/>
                        <path class="software-platform-icon__elem" style="fill:#ffffff;" d="M12,30L12,30c1.1,0,2-0.9,2-2v-7c0-1.1-0.9-2-2-2h0c-1.1,0-2,0.9-2,2v7C10,29.1,10.9,30,12,30z"/>
                    </g>
                </svg>
            </a>
            <a href="/downloads" class="acc-available__item -web">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve" class="software-platform-icon -web">
                    <g>
                        <circle class="software-platform-icon__elem" style="fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" cx="15" cy="15" r="13"/>
                        <line class="software-platform-icon__elem" style="fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="15" y1="2" x2="15" y2="28"/>
                        <line class="software-platform-icon__elem" style="fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="2" y1="15" x2="28" y2="15"/>
                        <line class="software-platform-icon__elem" style="fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="4.1" y1="9" x2="26.4" y2="9"/>
                        <ellipse class="software-platform-icon__elem" style="fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" cx="15" cy="15" rx="6.8" ry="13"/>
                        <line class="" style="fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="4.1" y1="21" x2="26.4" y2="21"/>
                    </g>
                </svg>
            </a>
        </div>
    </section>
   

    <section class="main-accessibility-section">
        <div class="pg-wrap">
          
  
        <div  class="col2 col1_t col1_m trade-img slideimage"  class="cen"  style="z-index:0; margin-left: 19px; ">
            <div class="trade-img1"><img class="tablet_img" src="assets/img/phonelap.png"></div>
         
        </div> 
        <div class="col2 col1_t col1_m">
            <h2>Trade forex, metals, indices and commodities with outstanding support</h2>
            <p>We are here to guide you through your trading journey.<br>Join the growing number of traders who want more from their broker.<br></p>
          
            <br>
            <div class="button_big"><a href="/en/learn-how-to-trade">Find out more</a></div>
         
   
</div>


        </div>
    </section>

    <section class="main-index-section">
     
         
        <div class="award-list-wrap swiper-container js-index-awards-swiper">
            <div class="award-list swiper-wrapper">
                <div class="award-list__item swiper-slide">
                    <div class="award-list__link">
                        <img src="assets/img/common/award/award-06.svg?b3499b2ff0f0bd8c5bc1bc244402fadeb0ce380c" class="award-list__img" width="42" height="57">
                        <span class="award-list__name">Best Forex ECN Broker</span>
                        <span class="award-list__author">UK Forex awards</span>
                        <span class="award-list__year">2017</span>
                        
                    </div>
                  
                </div>
                <div class="award-list__item swiper-slide">
                    <div class="award-list__link">
                         <img src="assets/img/common/award/award-01.svg?5a3bd370f6e9cb570f0852a7ba758af9b2af91db" class="award-list__img" width="42" height="57">
                        <span class="award-list__name">Best Trading Conditions</span>
                        <span class="award-list__author">Forex Report Magazine</span>
                        <span class="award-list__year">2016</span>
                        
                    </div>
                    
                </div>
                <div class="award-list__item swiper-slide">
                    <div class="award-list__link">
                        <img src="assets/img/common/award/award-02.svg?2da6cfad743032647c235a7a9b965091203a8352" class="award-list__img" width="42" height="57">
                        <span class="award-list__name">Best Islamic Account Forex Broker</span>
                        <span class="award-list__author">ForexTraders</span>
                        <span class="award-list__year">2015</span>
                        
                    </div>
                   
                </div>
                <div class="award-list__item swiper-slide">
                    <div class="award-list__link">
                        <img src="assets/img/common/award/award-03.svg?26bfa2e897efb8a5384e64b40a1b2ac6b1d629aa" class="award-list__img" width="42" height="57">
                        <span class="award-list__name">Best ECN Broker Asia</span>
                        <span class="award-list__author">Global Banking and Finance Review</span>
                        <span class="award-list__year">2014</span>
                    </div>
                  
                </div>

                <div class="award-list__item swiper-slide">
                    <div class="award-list__link">
                         <img src="assets/img/common/award/award-04.svg?4dc8401861e2ab9d950a25665c4ea389b403b84b" class="award-list__img" width="42" height="57">
                        <span class="award-list__name">Best Customer Service Broker</span>
                        <span class="award-list__author">FX Empire</span>
                        <span class="award-list__year">2013</span>
                    </div>
                    
                </div>
                <div class="award-list__item swiper-slide">
                    <div class="award-list__link">
                         <img src="assets/img/common/award/award-05.svg?7ab8431801f6cff0ae38b2c2c2144bc07f854577" class="award-list__img" width="42" height="57">
                        <span class="award-list__name">Fastest Growing Micro Forex Broker</span>
                        <span class="award-list__author">Global Banking and Finance Review</span>
                        <span class="award-list__year">2012</span>
                    </div>
                   
                </div>
            </div>
        </div>


      
    </section>


   <!--  <section class="main-option-section">
        <div class="pg-wrap">
    <br/>
    <br/>
            <ul class="main-profit-list">
                <li class="main-profit-list__item">
                    No&#160;commissions on&#160;deposits and&#160;withdrawals
                </li>
                <li class="main-profit-list__item">
                    No&#160;swaps
                </li>
                <li class="main-profit-list__item">
                    No&#160;slippage
                </li>
                <li class="main-profit-list__item">
                    No&#160;delays
                </li>
            </ul>
        </div>
    </section>
 -->






  <!-- <div class="text-center" style="margin-top:2em">
  <div class="row">
        <div class="col-lg-12">
            <span style="font-size:3em;text-align:center;font-weight:100">
                Mishowan<span style="color:#0369e5">.</span>
            </span>
        </div>
    </div> -->

 <!-- 
   <section class="main-option-section">
        <div class="pg-wrap">

  
        <div class="col2 col1_t col1_m trade-img slideimage" style="z-index:0">
            <div class="trade-img1"><img class="tablet_img" src="assets/img/phone_animation_inside.gif"></div>
            <div class="trade-img2"><img class="tablet_img" src="assets/img/phone_animation_outside.png"></div>
            <div class="trade-img3"><img class="tablet_img" src="assets/img/shadow.png"></div>
        </div> 
        <div class="col2 col1_t col1_m">
            <h2>Trade</h2>
            <p>Put your knowledge into action and trade the world's financial markets:</p>
            <ul class="tick_list">
                <li>Regular market updates</li>
                <li>Extensive research portal</li>
                <li>Intuitive and sophisticated platform </li>
                <li>Advanced charting package</li>
                <li>Personal account manager</li>
            </ul>
            <br>
            <div class="button_big"><a href="/en/learn-how-to-trade">Find out more</a></div> 
 
</div>
</div>
</section> -->

<section class="main-accessibility-section">
        <div class="pg-wrap">
   
  
        <h2>Outstanding support</h2>
        <br/>
        <br/>
        <p>Trading the world’s financial markets can be fun, exciting, rewarding and sometimes daunting, especially for new traders.
          Mishovau not only offers access to a wide range of financial instruments, but the support to make you a better trader. 
            Free education and research tools, 24/5 online support and a dedicated account manager to speak to if 
            you want, when you want. Benefit from our combined experience and get the support you need to succeed as a trader. </p>


        <div class="explore_image">
            <div><span>24</span><span class="hide_mobile" style="font-size:40px;">hours</span></div>
            <div class="explore_clock"><img src="assets/img/explore.png"></div>
            <div><span>5</span><span class="hide_mobile" style="font-size:40px;">days</span></div>
        </div>
             
</div>
</section>

<!-- <div class="steps3"><div class="content">
    <h2>Start trading with Mishovau  in 3 easy steps </h2>
    <div class="steps3_image">
        <div class="col3 col1_m">
            <div class="steps3_image_img col2_m"><img src="assets/img/3steps1.png"></div>
            <div class="steps3_image_text col2_m"><span>1. Register</span>Open your Live Trading Account via MyMishovau </div>
        </div>
        <div class="col3 col1_m">
            <div class="steps3_image_img col2_m"><img src="assets/img/3steps2.png"></div>
            <div class="steps3_image_text col2_m"><span>2. Verify</span>Upload your documents to verify your account</div>
        </div>
        <div class="col3 col1_m">
            <div class="steps3_image_img col2_m"><img src="assets/img/3steps3.png"></div>
            <div class="steps3_image_text col2_m"><span>3. Fund</span>Login to MyDestek and fund your account</div>
        </div>
 </div>
    <a href="/en/register" class="button_big">Start trading now</a>
    </div>
</div> -->


<!-- footer -->
<?php include_once 'footer.php';  ?>


 </main>

 <!-- ------------------------------------------------------------------- -->


