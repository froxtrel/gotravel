<?php include('./public/header.php');?>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


    <!-- PAGE WRAP -->
    <div id="page-wrap">
        <!-- PRELOADER -->
        <div class="preloader"></div>
        <!-- END / PRELOADER -->

        <!-- HEADER PAGE -->
        <header id="header-page">
            <div class="header-page__inner">
                <div class="container">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="<?php echo base_url();?>"><!-- <img src="images/logo.png" alt=""> --><b><?php echo $brandtop;?></b></a>
                    </div>
                    <!-- END / LOGO -->
                    
                    <?php include('./public/nav_menu.php');?>
                    
                    <!-- SEARCH BOX -->
                    <div class="search-box">
                        <span class="searchtoggle"><i class="awe-icon awe-icon-search"></i></span>
                        <form class="form-search">
                            <div class="form-item">
                                <input type="text" value="Search &amp; hit enter">
                            </div>
                        </form>
                    </div>
                    <!-- END / SEARCH BOX -->


                    <!-- TOGGLE MENU RESPONSIVE -->
                    <a class="toggle-menu-responsive" href="#">
                        <div class="hamburger">
                            <span class="item item-1"></span>
                            <span class="item item-2"></span>
                            <span class="item item-3"></span>
                        </div>
                    </a>
                    <!-- END / TOGGLE MENU RESPONSIVE -->

                </div>
            </div>
        </header>
        <!-- END / HEADER PAGE -->
        
        <!-- HERO SECTION -->
        <section class="hero-section">
            <div id="slider-revolution">
                <ul>
                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 1">
                        <img src="https://chinesenewyear2017.info/wp-content/uploads/2016/11/chinese-new-year-2017-rooster-1.png" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-1" data-x="500" data-y="230" data-speed="700" data-start="1500" data-easing="easeOutBack">
                          WAVEHUNTERASIA
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">GONG XI FAT CHAI</div>
                        
                        <a href="http://localhost/gofar/html/destinations-trip.html#" class="tp-caption sfb fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">Book now</a>
                    </li>

<!--  temporary hidden          -->          

                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 2">
                        <img src="https://scontent-kut2-1.xx.fbcdn.net/v/t31.0-8/12489457_10154052523384349_5957258425204783285_o.jpg?oh=13860cc11189c5a1b2b52a3ca97af9ea&oe=59055F7D" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption  sft fadeout slider-caption-sub slider-caption-sub-2" data-x="center" data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                          Check out the top weekly destination
                        </div>

                        <div class="tp-caption sft fadeout slider-caption slider-caption-2" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="2000">
                            Travel with us
                        </div>
                        
                        <a href="#" class="tp-caption sft fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="370" data-easing="easeOutBack" data-speed="700" data-start="2200">Book now</a>
                    </li>

                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 3">
                        <img src="https://scontent-kut2-1.xx.fbcdn.net/v/t31.0-8/12489457_10154052523384349_5957258425204783285_o.jpg?oh=13860cc11189c5a1b2b52a3ca97af9ea&oe=59055F7D" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption lfl fadeout slider-caption slider-caption-3" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="1500">
                            Gofar
                        </div>
                        
                        <div href="#" class="tp-caption lfr fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2000">Take you to every corner of the world</div>
                    </li> 

                </ul>
            </div>
        </section>
        <!-- END / HERO SECTION -->


        <!-- SEARCH TABS -->
        <section>
            <div class="container">
                <div class="awe-search-tabs tabs">
                    <ul>
                        <li>
                            <a href="#awe-search-tabs-1">
                                <i class="awe-icon awe-icon-briefcase"></i>
                            </a>
                        </li>
                        <!-- FUTURE UPGRADE -->
                        <!-- <li>
                            <a href="#awe-search-tabs-2">
                                <i class="awe-icon awe-icon-hotel"></i>
                            </a>
                        </li>     -->                    
                    </ul>
                    <div class="awe-search-tabs__content tabs__content">
                        <div id="awe-search-tabs-1" class="search-flight-hotel">
                            <h2>BOOK TOUR</h2>

                           <?php echo form_open('book/confirm');?>

                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>CATEGORY</label>
                                        <div class="form-item">
                                            <select class="awe-select" name="tour-category" id="tour-category" required="true">
                                                <option>Choice</option>
                                                <option value="RF">RAFTING</option>
                                                <option value="SK">SEA KAYAKING</option>
                                               <!--  <option value="MC">MOUNTAIN CLIMB</option>
                                                <option value="CT">COMBO TOUR</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>CHOOSE TOUR</label>
                                        <div class="form-item">
                                            <select class="awe-select" name="tour-select" id="tour-select" required="true">
                                                <option>Please pick category first</option>                                              
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>TOUR DATE</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-calendar"></i>
                                            <input type="text" class="awe-calendar" value="Check in" name="tour-date" required="true">
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>CONTACT NO</label>
                                        <div class="form-item">
                                           <div class="form-item">
                                            <input type="text" name="tour-contact" required="true" >
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>ADULT</label>
                                        <div class="form-item">
                                            <input type="number" name="tour-adult" required="true" >
                                        </div>
                                        <span>12 yo and above</span>
                                    </div>
                                    <div class="form-elements">
                                        <label>KIDS</label>
                                        <div class="form-item">
                                            <input type="number" name="tour-child" required="true" >
                                        </div>
                                        <span>0-11 yo</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>NATIONALITY</label>
                                        <div class="form-item">
                                          <select class="awe-select" name="tour-nation" required="true">
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia, Plurinational State of</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Côte d'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curaçao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.S.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>PICK UP HOTEL</label>
                                        <div class="form-item">
                                            <input type="text" name="tour-hotel" required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="CHECK" id="send" name="send" >
                                </div>
                            </form>
                        </div>
                       <!--  FUTURE UPGRADE -->
                        <!-- <div id="awe-search-tabs-2" class="search-hotel">
                            <h2>CUSTOM TOUR</h2>
                            <form id="tour-form">
                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>Destinations</label>
                                        <div class="form-item">
                                            <select class="awe-select">
                                                <option>All types</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>Check in</label>
                                        <div class="form-item">
                                            <select class="awe-select">
                                                <option>All types</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>Check out</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-calendar"></i>
                                            <input type="text" class="awe-calendar" value="Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>Guest</label>
                                        <div class="form-item">
                                            <select class="awe-select">
                                                <option>All types</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Request Tour">
                                </div>

                            </form>
                        </div>                      -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SEARCH TABS -->

        <!-- MASONRY -->
        <section class="masonry-section-demo">
            <div class="container">
                <div class="destination-grid-content">
                    <div class="section-title">
                        <h3><b>WAVEHUNTERASIA TOUR AND DESTINATION</b></h3>
                    </div>
                    <div class="row">
                        <div class="awe-masonry">
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="https://scontent-kut2-1.xx.fbcdn.net/v/t31.0-8/15874796_10155111692589349_1114950788944753947_o.jpg?oh=518cc5a91adaec62bf2d3ae23c8fc528&oe=58FF78B2" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">KIULU RIVER RAFTING</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">RAFTING </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">RM160</span>
                                    FROM 
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="http://wavehuntersasia.com/reserve/beta/img/r002.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">EX-KIULU RIVER RAFTING</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">RAFTING</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">RM130</span>
                                    FROM
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="http://wavehuntersasia.com/reserve/beta/img/r001.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">PADAS WHITE WATER RAFTING</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">RAFTING</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">RM230</span>
                                    FROM
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="https://scontent-kut2-1.xx.fbcdn.net/v/t31.0-8/12489457_10154052523384349_5957258425204783285_o.jpg?oh=13860cc11189c5a1b2b52a3ca97af9ea&oe=59055F7D" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">EX-PADAS RIVER RAFTING</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">RAFTING</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">RM180</span>
                                    FROM
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="http://wavehuntersasia.com/reserve/beta/img/sk001.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">SUNSET KAYAKING</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">SEA KAYAKING</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">RM120</span>
                                    FROM
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="http://wavehuntersasia.com/reserve/beta/img/sk002.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">MAMUTIK ISLANDS</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">SEA KAYAKING</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count">RM250</span>
                                    FROM
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                        </div>
                    </div>
                    <div class="more-destination">
                        <a href="#">MORE TOUR</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / MASONRY -->

        <section class="sale-flights-section-demo">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="sale-flights-tabs tabs">
                            <ul>
                                <li><a href="#sale-flights-tabs-1">Hot trips</a></li>
                                <!-- temporary hidden <li><a href="#sale-flights-tabs-2">Recent items</a></li> -->
                            </ul>
                            <div class="sale-flights-tabs__content tabs__content">
                                <div id="sale-flights-tabs-1">
                                    
                                <!-- ITEM -->
                                <div class="trip-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="http://wavehuntersasia.com/reserve/beta/img/sk002.jpg" alt="">
                                        </div>
                                        <div class="trip-icon">
                                            <img src="<?php echo base_url();?>/public/images/trip.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="#">SEA KAYAKING @ TUN KU ABDUL RAHMAN</a>
                                            </h2>
                                        </div>
                                        <div class="item-list">
                                            <ul>
                                                
                                                <li>2 days, 1 night</li>
                                            </ul>
                                        </div>
                                        <div class="item-footer">
                                            <div class="item-rate">
                                                <span>10 Fantastic</span>
                                            </div>
                                            <div class="item-icon">
                                               
                                                <i class="awe-icon awe-icon-car"></i>
                                                <i class="awe-icon awe-icon-food"></i>
                                                <i class="awe-icon awe-icon-level"></i>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            Adult Only
                                            <ins>
                                                <span class="amount">RM390</span>
                                            </ins>
                                            <del>
                                                <span class="amount">RM400</span>
                                            </del>
                                    
                                        </div>
                                        <a href="#" class="awe-btn">Book now</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="trip-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="http://wavehuntersasia.com/reserve/beta/img/sk001.jpg" alt="">
                                        </div>
                                        <div class="trip-icon">
                                            <img src="<?php echo base_url();?>/public/images/trip.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="#">SUNSET SEA KAYAKING </a>
                                            </h2>
                                        </div>
                                        <div class="item-list">
                                            <ul>
                                                
                                                <li>1 days</li>
                                            </ul>
                                        </div>
                                        <div class="item-footer">
                                            <div class="item-rate">
                                                <span>10 Fantastic</span>
                                            </div>
                                            <div class="item-icon">
                                               
                                                <i class="awe-icon awe-icon-car"></i>
                                                <i class="awe-icon awe-icon-food"></i>
                                                <i class="awe-icon awe-icon-level"></i>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            Adult Only
                                            <ins>
                                                <span class="amount">RM120</span>
                                            </ins>
                                            <del>
                                                <span class="amount">RM150</span>
                                            </del>
                                    
                                        </div>
                                        <a href="#" class="awe-btn">Book now</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                  <!-- ITEM -->
                                <div class="trip-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="http://wavehuntersasia.com/reserve/beta/img/r001.jpg" alt="">
                                        </div>
                                        <div class="trip-icon">
                                            <img src="<?php echo base_url();?>/public/images/trip.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="#">EX-KIULU RIVER RAFTING</a>
                                            </h2>
                                        </div>
                                        <div class="item-list">
                                            <ul>
                                                
                                                <li>2 days, 1 night</li>
                                            </ul>
                                        </div>
                                        <div class="item-footer">
                                            <div class="item-rate">
                                                <span>10 Fantastic</span>
                                            </div>
                                            <div class="item-icon">
                                               
                                                <i class="awe-icon awe-icon-car"></i>
                                                <i class="awe-icon awe-icon-food"></i>
                                                <i class="awe-icon awe-icon-level"></i>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            PRICE FROM
                                            <ins>
                                                <span class="amount">RM130</span>
                                            </ins>
                                            <del>
                                                <span class="amount">RM160</span>
                                            </del>
                                    
                                        </div>
                                        <a href="#" class="awe-btn">Book now</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                  
                                </div>
                               <!-- temporary hidden <div id="sale-flights-tabs-2">
                                    
                                    <table class="sale-flights-tabs__table">
                                        <tbody>
                                            <tr>
                                                <td class="sale-flights-tabs__item-flight">
                                                    <div class="image-wrap">
                                                        <img src="images/thumb/40-40.jpg" alt="">
                                                    </div>
                                                    <div class="td-content">
                                                        <div class="title">
                                                            <h3>Lufthansa</h3>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <span class="from">HAN <i class="awe-icon awe-icon-arrow-right"></i></span>
                                                                <span class="to">SVO</span>
                                                            </li>
                                                            <li>
                                                                <span class="from">SVO <i class="awe-icon awe-icon-arrow-right"></i></span>
                                                                <span class="to">JFK</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="line"></div>
                                                </td>
                                                <td class="sale-flights-tabs__item-depart">
                                                    <h4>Depart</h4>
                                                    <ul>
                                                        <li>10:25</li>
                                                        <li>10:25</li>
                                                    </ul>
                                                    <div class="line"></div>
                                                </td>
                                                <td class="sale-flights-tabs__item-arrive">
                                                    <h4>Arrive</h4>
                                                    <ul>
                                                        <li>12:30</li>
                                                        <li>12:30</li>
                                                    </ul>
                                                    <div class="line"></div>
                                                </td>
                                                <td class="sale-flights-tabs__item-duration">
                                                    <h4>Duration</h4>
                                                    <ul>
                                                        <li>38h5m</li>
                                                        <li>38h5m</li>
                                                    </ul>
                                                    <div class="line"></div>
                                                </td>
                                                <td class="sale-flights-tabs__item-choose">
                                                    <span class="amount">$5,923</span>
                                                    <a href="#" class="awe-btn">Choose</a>
                                                    <div class="line"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sale-flights-tabs__item-flight">
                                                    <div class="image-wrap">
                                                        <img src="images/thumb/40-40.jpg" alt="">
                                                    </div>
                                                    <div class="td-content">
                                                        <div class="title">
                                                            <h3>Lufthansa</h3>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <span class="from">HAN <i class="awe-icon awe-icon-arrow-right"></i></span>
                                                                <span class="to">SVO</span>
                                                            </li>
                                                            <li>
                                                                <span class="from">SVO <i class="awe-icon awe-icon-arrow-right"></i></span>
                                                                <span class="to">JFK</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="sale-flights-tabs__item-depart">
                                                    <h4>Depart</h4>
                                                    <ul>
                                                        <li>10:25</li>
                                                        <li>10:25</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-arrive">
                                                    <h4>Arrive</h4>
                                                    <ul>
                                                        <li>12:30</li>
                                                        <li>12:30</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-duration">
                                                    <h4>Duration</h4>
                                                    <ul>
                                                        <li>38h5m</li>
                                                        <li>38h5m</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-choose">
                                                    <span class="amount">$5,923</span>
                                                    <a href="#" class="awe-btn">Choose</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sale-flights-tabs__item-flight">
                                                    <div class="image-wrap">
                                                        <img src="images/thumb/40-40.jpg" alt="">
                                                    </div>
                                                    <div class="td-content">
                                                        <div class="title">
                                                            <h3>Lufthansa</h3>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <span class="from">HAN <i class="awe-icon awe-icon-arrow-right"></i></span>
                                                                <span class="to">SVO</span>
                                                            </li>
                                                            <li>
                                                                <span class="from">SVO <i class="awe-icon awe-icon-arrow-right"></i></span>
                                                                <span class="to">JFK</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="sale-flights-tabs__item-depart">
                                                    <h4>Depart</h4>
                                                    <ul>
                                                        <li>10:25</li>
                                                        <li>10:25</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-arrive">
                                                    <h4>Arrive</h4>
                                                    <ul>
                                                        <li>12:30</li>
                                                        <li>12:30</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-duration">
                                                    <h4>Duration</h4>
                                                    <ul>
                                                        <li>38h5m</li>
                                                        <li>38h5m</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-choose">
                                                    <span class="amount">$5,923</span>
                                                    <a href="#" class="awe-btn">Choose</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sale-flights-tabs__item-flight">
                                                    <div class="image-wrap">
                                                        <img src="images/thumb/40-40.jpg" alt="">
                                                    </div>
                                                    <div class="td-content">
                                                        <div class="title">
                                                            <h3>Lufthansa</h3>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <span class="from">HAN <i class="awe-icon awe-icon-arrow-right"></i></span>
                                                                <span class="to">SVO</span>
                                                            </li>
                                                            <li>
                                                                <span class="from">SVO <i class="awe-icon awe-icon-arrow-right"></i></span>
                                                                <span class="to">JFK</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="sale-flights-tabs__item-depart">
                                                    <h4>Depart</h4>
                                                    <ul>
                                                        <li>10:25</li>
                                                        <li>10:25</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-arrive">
                                                    <h4>Arrive</h4>
                                                    <ul>
                                                        <li>12:30</li>
                                                        <li>12:30</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-duration">
                                                    <h4>Duration</h4>
                                                    <ul>
                                                        <li>38h5m</li>
                                                        <li>38h5m</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-choose">
                                                    <span class="amount">$5,923</span>
                                                    <a href="#" class="awe-btn">Choose</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sale-flights-tabs__item-flight">
                                                    <div class="image-wrap">
                                                        <img src="images/thumb/40-40.jpg" alt="">
                                                    </div>
                                                    <div class="td-content">
                                                        <div class="title">
                                                            <h3>Lufthansa</h3>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <span class="from">HAN <i class="awe-icon awe-icon-arrow-right"></i></span>
                                                                <span class="to">SVO</span>
                                                            </li>
                                                            <li>
                                                                <span class="from">SVO <i class="awe-icon awe-icon-arrow-right"></i></span>
                                                                <span class="to">JFK</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="sale-flights-tabs__item-depart">
                                                    <h4>Depart</h4>
                                                    <ul>
                                                        <li>10:25</li>
                                                        <li>10:25</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-arrive">
                                                    <h4>Arrive</h4>
                                                    <ul>
                                                        <li>12:30</li>
                                                        <li>12:30</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-duration">
                                                    <h4>Duration</h4>
                                                    <ul>
                                                        <li>38h5m</li>
                                                        <li>38h5m</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-choose">
                                                    <span class="amount">$5,923</span>
                                                    <a href="#" class="awe-btn">Choose</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sale-flights-tabs__item-flight">
                                                    <div class="image-wrap">
                                                        <img src="images/thumb/40-40.jpg" alt="">
                                                    </div>
                                                    <div class="td-content">
                                                        <div class="title">
                                                            <h3>Lufthansa</h3>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <span class="from">HAN <i class="awe-icon awe-icon-arrow-right"></i></span>
                                                                <span class="to">SVO</span>
                                                            </li>
                                                            <li>
                                                                <span class="from">SVO <i class="awe-icon awe-icon-arrow-right"></i></span>
                                                                <span class="to">JFK</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="sale-flights-tabs__item-depart">
                                                    <h4>Depart</h4>
                                                    <ul>
                                                        <li>10:25</li>
                                                        <li>10:25</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-arrive">
                                                    <h4>Arrive</h4>
                                                    <ul>
                                                        <li>12:30</li>
                                                        <li>12:30</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-duration">
                                                    <h4>Duration</h4>
                                                    <ul>
                                                        <li>38h5m</li>
                                                        <li>38h5m</li>
                                                    </ul>
                                                </td>
                                                <td class="sale-flights-tabs__item-choose">
                                                    <span class="amount">$5,923</span>
                                                    <a href="#" class="awe-btn">Choose</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="awe-services">
                            <h2>Why your friends like our services?</h2>
                            <ul class="awe-services__list">
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        Profesional Guides
                                        <span>Certified by International Rafting Federation (IRF)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        10 Years In Rafting Industries
                                        <span>since 2007</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        Global support/Live Chats
                                        <span>Anytime and any where</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        Manage your bookings online
                                        <span>Anytime and any where</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="video-wrapper embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1Nlcm6hPWGI"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include('./public/footer.php');?>

    