<div class="social__cards">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="social__cardsleft">
                    <div class="weather-inline">
                        <ul class="inline-list">
                            <li class="font__fontrols__style">
                                <span id="weather_state">On Campus</span>
                            </li>
                        </ul>
                        <span class="wi {{ $weatherIcon }}" aria-label="{{ $weatherCondition }}" style="font-size: 40px;"></span>

                        <ul class="inline-list">
                            <li class="font__fontrols__style">
                                <span id="weather_temp">{{ $temperature }}°C</span>
                            </li>
                            <li class="font__fontrols__style">
                                <span id="weather_condition">{{ $weatherCondition }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="social__cardsright">
                    <ul class="social__lists">
                        <li>
                            <a href="https://www.facebook.com/EGSPGOI/" target="_blank" title="Visit Our Facebook Page" class="social__icon">
                                <i class="fab fa-facebook-f"></i><span class="sr-only">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://in.linkedin.com/company/egspgoi" target="_blank" title="Visit Our LinkedIn Page" class="social__icon">
                                <i class="fab fa-linkedin-in"></i><span class="sr-only">LinkedIn</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.whatsapp.com/channel/0029VaoAlde2Jl8HS9im7X2G" target="_blank" title="Visit Our Twitter Page" class="social__icon">
                                <i class="fab fa-whatsapp"></i><span class="sr-only">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/egspillay_group_of_institution/?hl=en" target="_blank" title="Visit Our Instagram Page" class="social__icon">
                                <i class="fab fa-instagram"></i><span class="sr-only">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@E.G.S.PillayGroupofInstitution" target="_blank" title="Visit Our YouTube Page" class="social__icon">
                                <i class="fab fa-youtube"></i><span class="sr-only">YouTube</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .inline-list,.social__lists{list-style:none;margin:0;display:flex}.weather-inline{display:flex;align-items:center;gap:10px}.inline-list{align-items:center;gap:10px;padding:0}.font__fontrols__style{font-size:16px;color:#FFF}.weather-icon{font-size:24px;color:#555}#weather_block li{display:inline-block;margin-right:10px}.social__cards{padding:20px 0;background-color:#000000d9}.social__cardsleft{display:flex;align-items:center;color:#fff!important}#weather_block li a,.social__icon{color:#fff;text-decoration:none}.social__cardsright{display:flex;justify-content:flex-end}.social__lists{padding:0;gap:15px}.social__icon{font-size:20px}.social__icon:hover{color:#007bff}.sprite.icon__cloud:before{content:"\f0c2";font-family:'Font Awesome 5 Free';font-weight:900}.sr-only{position:absolute;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}@media screen and (max-width:767px){.social__cardsright{justify-content:flex-start;margin:1rem 0}}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.min.css">
