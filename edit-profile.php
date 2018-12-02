<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page"/>
    <meta name="robots" content="index, follow"/>
    <title>NationsBook</title>

    <!-- Stylesheets
    ================================================= -->
    <?php include "style.php" ?>


</head>
<body>

<!-- Header
================================================= -->
<?php include "header.php" ?>
<!--Header End-->
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="timeline-cover"
                     style="background: url(images/covers/3.jpg) no-repeat; background-position: center; background-size: cover;">
                    <!--Timeline Menu for Large Screens-->
                    <div class="change-photo-btn cover-time-btn">
                        <div class="photoUpload">
                            <span><i class="fa fa-picture-o"></i> Change Cover Image</span>
                            <input type="file" class="upload file-upload ">
                        </div>
                    </div>
                    <div class="timeline-nav-bar hidden-sm hidden-xs">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-info profile-info-time profile-info-time-big">
                                    <div class="edit-profile-photo">
                                        <img class="profile-pic pic2 img-responsive profile-photo"
                                             src="images/user-avatar.jpg " alt="">
                                        <div class="change-photo-btn">
                                            <div class="photoUpload">
                                                <span><i class="fa fa-upload"></i> Chose image</span>
                                                <input type="file" class="upload file-upload up2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-info-time-name">
                                        <h3>Hamza Abo aitah</h3>
                                        <p class="text-muted">Creative Director</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <ul class="list-inline profile-menu">
                                    <?php include 'profile-menu.php'?>
                                </ul>
                                <ul class="follow-me list-inline">
                                    <li>1,299 people following her</li>
                                    <li>
                                        <button class="btn-primary">Add Friend</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--Timeline Menu for Large Screens End-->

                    <!--Timeline Menu for Small Screens-->
                    <div class="navbar-mobile hidden-lg hidden-md">
                        <div class="profile-info profile-info-time">
                            <div class="edit-profile-photo">
                                <img class="profile-pic pic3 img-responsive profile-photo" src="images/user-avatar.jpg"
                                     alt="">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Chose image</span>
                                        <input type="file" class="upload file-upload up3">
                                    </div>
                                </div>
                            </div>
                            <h4>Hamza Abo aitah</h4>
                            <p class="text-muted">Creative Director</p>
                        </div>
                        <div class="mobile-menu">
                            <ul class="list-inline">
                                <?php include 'profile-menu.php'?>
                            </ul>
                            <button class="btn-primary">Add Friend</button>
                        </div>
                    </div><!--Timeline Menu for Small Screens End-->

                </div>

            </div>
        </div>
    </div>
    <div id="page-contents" class="timeline-container">

        <div class="container">
            <div class="row">

                <!-- Newsfeed Common Side Bar Left
                ================================================= -->

                <div class="col-md-2 static add-container">
                    <div class="suggestions sticky-sidebar">
                        <div class="my-Add">
                            <img class="img-responsive" src="images/p.png" alt="">
                        </div>
                        <div class="my-Add">
                            <img class="img-responsive" src="images/p.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <ul class="edit-menu list-inline nav-tabs" role="tablist">
                        <li role="presentation" class="active" ><i class="icon ion-ios-information-outline"></i><a  href="#edit-profile" aria-controls="edit-profile" role="tab" data-toggle="tab">Basic Information</a></li>
                        <li role="presentation" ><i class="icon ion-ios-briefcase-outline"></i><a  href="#edit-profile-work-edu" aria-controls="edit-profile" role="tab" data-toggle="tab">Education and Work</a></li>
                        <li role="presentation" ><i class="icon ion-ios-settings"></i><a  href="#edit-profile-settings" aria-controls="edit-profile" role="tab" data-toggle="tab">Account Settings</a></li>
                        <li role="presentation" ><i class="icon ion-ios-locked-outline"></i><a  href="#edit-profile-password" aria-controls="edit-profile" role="tab" data-toggle="tab">Change Password</a></li>
                    </ul>
                    <div class="clearfix"></div>

                    <div class="line"></div>
                    <div class="clearfix"></div>
                        <!-- Basic Information
                        ================================================= -->
                        <div class="px-15 edit-profile-container">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="edit-profile">
                                    <div class="block-title">
                                        <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Edit basic information</h4>
                                        <div class="line"></div>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="edit-block">
                                        <form name="basic-info" id="basic-info" class="form-inline">
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <label for="firstname">First name</label>
                                                    <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="First name" value="John">
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <label for="lastname" class="">Last name</label>
                                                    <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name" value="Doe">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <label for="username" class="">Username</label>
                                                    <input id="username" class="form-control input-group-lg" type="text" name="username" title="Enter last name" placeholder="Username" value="username">
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <label for="email">My email</label>
                                                    <input id="email" class="form-control input-group-lg" type="text" name="Email" title="Enter Email" placeholder="My Email" value="">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <p class="custom-label"><strong>Date of Birth</strong></p>
                                                <div class="form-group col-sm-3 col-xs-6">
                                                    <label for="month" class="sr-only"></label>
                                                    <select class="form-control" id="day">
                                                        <option value="Day">Day</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                        <option>13</option>
                                                        <option>14</option>
                                                        <option>15</option>
                                                        <option>16</option>
                                                        <option>17</option>
                                                        <option>18</option>
                                                        <option selected="">19</option>
                                                        <option>20</option>
                                                        <option>21</option>
                                                        <option>22</option>
                                                        <option>23</option>
                                                        <option>24</option>
                                                        <option>25</option>
                                                        <option>26</option>
                                                        <option>27</option>
                                                        <option>28</option>
                                                        <option>29</option>
                                                        <option>30</option>
                                                        <option>31</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-3 col-xs-6">
                                                    <label for="month" class="sr-only"></label>
                                                    <select class="form-control" id="month">
                                                        <option value="month">Month</option>
                                                        <option>Jan</option>
                                                        <option>Feb</option>
                                                        <option>Mar</option>
                                                        <option>Apr</option>
                                                        <option>May</option>
                                                        <option>Jun</option>
                                                        <option>Jul</option>
                                                        <option>Aug</option>
                                                        <option>Sep</option>
                                                        <option>Oct</option>
                                                        <option>Nov</option>
                                                        <option selected="">Dec</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-6 col-xs-12">
                                                    <label for="year" class="sr-only"></label>
                                                    <select class="form-control" id="year">
                                                        <option value="year">Year</option>
                                                        <option selected="">2000</option>
                                                        <option>2001</option>
                                                        <option>2002</option>
                                                        <option>2004</option>
                                                        <option>2005</option>
                                                        <option>2006</option>
                                                        <option>2007</option>
                                                        <option>2008</option>
                                                        <option>2009</option>
                                                        <option>2010</option>
                                                        <option>2011</option>
                                                        <option>2012</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group gender">
                                                <span class="custom-label"><strong>I am a: </strong></span>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked="">Male
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">Female
                                                </label>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <label for="city"> My city</label>
                                                    <input id="city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="Your city" value="New York">
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <label for="country">My country</label>
                                                    <select class="form-control" id="country">
                                                        <option value="country">Country</option>
                                                        <option value="AFG">Afghanistan</option>
                                                        <option value="ALA">Ƭand Islands</option>
                                                        <option value="ALB">Albania</option>
                                                        <option value="DZA">Algeria</option>
                                                        <option value="ASM">American Samoa</option>
                                                        <option value="AND">Andorra</option>
                                                        <option value="AGO">Angola</option>
                                                        <option value="AIA">Anguilla</option>
                                                        <option value="ATA">Antarctica</option>
                                                        <option value="ATG">Antigua and Barbuda</option>
                                                        <option value="ARG">Argentina</option>
                                                        <option value="ARM">Armenia</option>
                                                        <option value="ABW">Aruba</option>
                                                        <option value="AUS">Australia</option>
                                                        <option value="AUT">Austria</option>
                                                        <option value="AZE">Azerbaijan</option>
                                                        <option value="BHS">Bahamas</option>
                                                        <option value="BHR">Bahrain</option>
                                                        <option value="BGD">Bangladesh</option>
                                                        <option value="BRB">Barbados</option>
                                                        <option value="BLR">Belarus</option>
                                                        <option value="BEL">Belgium</option>
                                                        <option value="BLZ">Belize</option>
                                                        <option value="BEN">Benin</option>
                                                        <option value="BMU">Bermuda</option>
                                                        <option value="BTN">Bhutan</option>
                                                        <option value="BOL">Bolivia, Plurinational State of</option>
                                                        <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="BIH">Bosnia and Herzegovina</option>
                                                        <option value="BWA">Botswana</option>
                                                        <option value="BVT">Bouvet Island</option>
                                                        <option value="BRA">Brazil</option>
                                                        <option value="IOT">British Indian Ocean Territory</option>
                                                        <option value="BRN">Brunei Darussalam</option>
                                                        <option value="BGR">Bulgaria</option>
                                                        <option value="BFA">Burkina Faso</option>
                                                        <option value="BDI">Burundi</option>
                                                        <option value="KHM">Cambodia</option>
                                                        <option value="CMR">Cameroon</option>
                                                        <option value="CAN">Canada</option>
                                                        <option value="CPV">Cape Verde</option>
                                                        <option value="CYM">Cayman Islands</option>
                                                        <option value="CAF">Central African Republic</option>
                                                        <option value="TCD">Chad</option>
                                                        <option value="CHL">Chile</option>
                                                        <option value="CHN">China</option>
                                                        <option value="CXR">Christmas Island</option>
                                                        <option value="CCK">Cocos (Keeling) Islands</option>
                                                        <option value="COL">Colombia</option>
                                                        <option value="COM">Comoros</option>
                                                        <option value="COG">Congo</option>
                                                        <option value="COD">Congo, the Democratic Republic of the</option>
                                                        <option value="COK">Cook Islands</option>
                                                        <option value="CRI">Costa Rica</option>
                                                        <option value="CIV">C𴥠d'Ivoire</option>
                                                        <option value="HRV">Croatia</option>
                                                        <option value="CUB">Cuba</option>
                                                        <option value="CUW">Cura袯</option>
                                                        <option value="CYP">Cyprus</option>
                                                        <option value="CZE">Czech Republic</option>
                                                        <option value="DNK">Denmark</option>
                                                        <option value="DJI">Djibouti</option>
                                                        <option value="DMA">Dominica</option>
                                                        <option value="DOM">Dominican Republic</option>
                                                        <option value="ECU">Ecuador</option>
                                                        <option value="EGY">Egypt</option>
                                                        <option value="SLV">El Salvador</option>
                                                        <option value="GNQ">Equatorial Guinea</option>
                                                        <option value="ERI">Eritrea</option>
                                                        <option value="EST">Estonia</option>
                                                        <option value="ETH">Ethiopia</option>
                                                        <option value="FLK">Falkland Islands (Malvinas)</option>
                                                        <option value="FRO">Faroe Islands</option>
                                                        <option value="FJI">Fiji</option>
                                                        <option value="FIN">Finland</option>
                                                        <option value="FRA">France</option>
                                                        <option value="GUF">French Guiana</option>
                                                        <option value="PYF">French Polynesia</option>
                                                        <option value="ATF">French Southern Territories</option>
                                                        <option value="GAB">Gabon</option>
                                                        <option value="GMB">Gambia</option>
                                                        <option value="GEO">Georgia</option>
                                                        <option value="DEU">Germany</option>
                                                        <option value="GHA">Ghana</option>
                                                        <option value="GIB">Gibraltar</option>
                                                        <option value="GRC">Greece</option>
                                                        <option value="GRL">Greenland</option>
                                                        <option value="GRD">Grenada</option>
                                                        <option value="GLP">Guadeloupe</option>
                                                        <option value="GUM">Guam</option>
                                                        <option value="GTM">Guatemala</option>
                                                        <option value="GGY">Guernsey</option>
                                                        <option value="GIN">Guinea</option>
                                                        <option value="GNB">Guinea-Bissau</option>
                                                        <option value="GUY">Guyana</option>
                                                        <option value="HTI">Haiti</option>
                                                        <option value="HMD">Heard Island and McDonald Islands</option>
                                                        <option value="VAT">Holy See (Vatican City State)</option>
                                                        <option value="HND">Honduras</option>
                                                        <option value="HKG">Hong Kong</option>
                                                        <option value="HUN">Hungary</option>
                                                        <option value="ISL">Iceland</option>
                                                        <option value="IND">India</option>
                                                        <option value="IDN">Indonesia</option>
                                                        <option value="IRN">Iran, Islamic Republic of</option>
                                                        <option value="IRQ">Iraq</option>
                                                        <option value="IRL">Ireland</option>
                                                        <option value="IMN">Isle of Man</option>
                                                        <option value="ISR">Israel</option>
                                                        <option value="ITA">Italy</option>
                                                        <option value="JAM">Jamaica</option>
                                                        <option value="JPN">Japan</option>
                                                        <option value="JEY">Jersey</option>
                                                        <option value="JOR">Jordan</option>
                                                        <option value="KAZ">Kazakhstan</option>
                                                        <option value="KEN">Kenya</option>
                                                        <option value="KIR">Kiribati</option>
                                                        <option value="PRK">Korea, Democratic People's Republic of</option>
                                                        <option value="KOR">Korea, Republic of</option>
                                                        <option value="KWT">Kuwait</option>
                                                        <option value="KGZ">Kyrgyzstan</option>
                                                        <option value="LAO">Lao People's Democratic Republic</option>
                                                        <option value="LVA">Latvia</option>
                                                        <option value="LBN">Lebanon</option>
                                                        <option value="LSO">Lesotho</option>
                                                        <option value="LBR">Liberia</option>
                                                        <option value="LBY">Libya</option>
                                                        <option value="LIE">Liechtenstein</option>
                                                        <option value="LTU">Lithuania</option>
                                                        <option value="LUX">Luxembourg</option>
                                                        <option value="MAC">Macao</option>
                                                        <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                                        <option value="MDG">Madagascar</option>
                                                        <option value="MWI">Malawi</option>
                                                        <option value="MYS">Malaysia</option>
                                                        <option value="MDV">Maldives</option>
                                                        <option value="MLI">Mali</option>
                                                        <option value="MLT">Malta</option>
                                                        <option value="MHL">Marshall Islands</option>
                                                        <option value="MTQ">Martinique</option>
                                                        <option value="MRT">Mauritania</option>
                                                        <option value="MUS">Mauritius</option>
                                                        <option value="MYT">Mayotte</option>
                                                        <option value="MEX">Mexico</option>
                                                        <option value="FSM">Micronesia, Federated States of</option>
                                                        <option value="MDA">Moldova, Republic of</option>
                                                        <option value="MCO">Monaco</option>
                                                        <option value="MNG">Mongolia</option>
                                                        <option value="MNE">Montenegro</option>
                                                        <option value="MSR">Montserrat</option>
                                                        <option value="MAR">Morocco</option>
                                                        <option value="MOZ">Mozambique</option>
                                                        <option value="MMR">Myanmar</option>
                                                        <option value="NAM">Namibia</option>
                                                        <option value="NRU">Nauru</option>
                                                        <option value="NPL">Nepal</option>
                                                        <option value="NLD">Netherlands</option>
                                                        <option value="NCL">New Caledonia</option>
                                                        <option value="NZL">New Zealand</option>
                                                        <option value="NIC">Nicaragua</option>
                                                        <option value="NER">Niger</option>
                                                        <option value="NGA">Nigeria</option>
                                                        <option value="NIU">Niue</option>
                                                        <option value="NFK">Norfolk Island</option>
                                                        <option value="MNP">Northern Mariana Islands</option>
                                                        <option value="NOR">Norway</option>
                                                        <option value="OMN">Oman</option>
                                                        <option value="PAK">Pakistan</option>
                                                        <option value="PLW">Palau</option>
                                                        <option value="PSE">Palestinian Territory, Occupied</option>
                                                        <option value="PAN">Panama</option>
                                                        <option value="PNG">Papua New Guinea</option>
                                                        <option value="PRY">Paraguay</option>
                                                        <option value="PER">Peru</option>
                                                        <option value="PHL">Philippines</option>
                                                        <option value="PCN">Pitcairn</option>
                                                        <option value="POL">Poland</option>
                                                        <option value="PRT">Portugal</option>
                                                        <option value="PRI">Puerto Rico</option>
                                                        <option value="QAT">Qatar</option>
                                                        <option value="REU">R궮ion</option>
                                                        <option value="ROU">Romania</option>
                                                        <option value="RUS">Russian Federation</option>
                                                        <option value="RWA">Rwanda</option>
                                                        <option value="BLM">Saint Barthꭥmy</option>
                                                        <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                                        <option value="KNA">Saint Kitts and Nevis</option>
                                                        <option value="LCA">Saint Lucia</option>
                                                        <option value="MAF">Saint Martin (French part)</option>
                                                        <option value="SPM">Saint Pierre and Miquelon</option>
                                                        <option value="VCT">Saint Vincent and the Grenadines</option>
                                                        <option value="WSM">Samoa</option>
                                                        <option value="SMR">San Marino</option>
                                                        <option value="STP">Sao Tome and Principe</option>
                                                        <option value="SAU">Saudi Arabia</option>
                                                        <option value="SEN">Senegal</option>
                                                        <option value="SRB">Serbia</option>
                                                        <option value="SYC">Seychelles</option>
                                                        <option value="SLE">Sierra Leone</option>
                                                        <option value="SGP">Singapore</option>
                                                        <option value="SXM">Sint Maarten (Dutch part)</option>
                                                        <option value="SVK">Slovakia</option>
                                                        <option value="SVN">Slovenia</option>
                                                        <option value="SLB">Solomon Islands</option>
                                                        <option value="SOM">Somalia</option>
                                                        <option value="ZAF">South Africa</option>
                                                        <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                                        <option value="SSD">South Sudan</option>
                                                        <option value="ESP">Spain</option>
                                                        <option value="LKA">Sri Lanka</option>
                                                        <option value="SDN">Sudan</option>
                                                        <option value="SUR">Suriname</option>
                                                        <option value="SJM">Svalbard and Jan Mayen</option>
                                                        <option value="SWZ">Swaziland</option>
                                                        <option value="SWE">Sweden</option>
                                                        <option value="CHE">Switzerland</option>
                                                        <option value="SYR">Syrian Arab Republic</option>
                                                        <option value="TWN">Taiwan, Province of China</option>
                                                        <option value="TJK">Tajikistan</option>
                                                        <option value="TZA">Tanzania, United Republic of</option>
                                                        <option value="THA">Thailand</option>
                                                        <option value="TLS">Timor-Leste</option>
                                                        <option value="TGO">Togo</option>
                                                        <option value="TKL">Tokelau</option>
                                                        <option value="TON">Tonga</option>
                                                        <option value="TTO">Trinidad and Tobago</option>
                                                        <option value="TUN">Tunisia</option>
                                                        <option value="TUR">Turkey</option>
                                                        <option value="TKM">Turkmenistan</option>
                                                        <option value="TCA">Turks and Caicos Islands</option>
                                                        <option value="TUV">Tuvalu</option>
                                                        <option value="UGA">Uganda</option>
                                                        <option value="UKR">Ukraine</option>
                                                        <option value="ARE">United Arab Emirates</option>
                                                        <option value="GBR">United Kingdom</option>
                                                        <option value="USA" selected="">United States</option>
                                                        <option value="UMI">United States Minor Outlying Islands</option>
                                                        <option value="URY">Uruguay</option>
                                                        <option value="UZB">Uzbekistan</option>
                                                        <option value="VUT">Vanuatu</option>
                                                        <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                                        <option value="VNM">Viet Nam</option>
                                                        <option value="VGB">Virgin Islands, British</option>
                                                        <option value="VIR">Virgin Islands, U.S.</option>
                                                        <option value="WLF">Wallis and Futuna</option>
                                                        <option value="ESH">Western Sahara</option>
                                                        <option value="YEM">Yemen</option>
                                                        <option value="ZMB">Zambia</option>
                                                        <option value="ZWE">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-12">
                                                    <label for="my-info">About me</label>
                                                    <textarea id="my-info" name="information" class="form-control" placeholder="Some texts about me" rows="4" cols="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur</textarea>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="edit-profile-work-edu">
                                    <div class="block-title">
                                        <h4 class="grey"><i class="icon ion-ios-book-outline"></i>My education</h4>
                                        <div class="line"></div>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="edit-block">
                                        <form name="education" id="education" class="form-inline">
                                            <div class="row">
                                                <div class="form-group col-xs-12">
                                                    <label for="school">My university</label>
                                                    <input id="school" class="form-control input-group-lg" type="text" name="school" title="Enter School" placeholder="My School" value="Harvard Unversity" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <label for="date-from">From</label>
                                                    <input id="date-from" class="form-control input-group-lg" type="text" name="date" title="Enter a Date" placeholder="from" value="2012" />
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <label for="date-to" class="">To</label>
                                                    <input id="date-to" class="form-control input-group-lg" type="text" name="date" title="Enter a Date" placeholder="to" value="2016" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-12">
                                                    <label for="edu-description">Description</label>
                                                    <textarea id="edu-description" name="description" class="form-control" placeholder="Some texts about my education" rows="4" cols="400">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-12">
                                                    <label for="graduate">Graduated?:-</label>
                                                    <input id="graduate" type="checkbox" name="graduate" value="graduate" checked> Yes!!
                                                </div>
                                            </div>
                                            <button class="btn btn-primary">Save Changes</button>
                                        </form>
                                    </div>
                                    <div class="block-title">
                                        <h4 class="grey"><i class="icon ion-ios-briefcase-outline"></i>Work Experiences</h4>
                                        <div class="line"></div>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="edit-block">
                                        <form name="work" id="work" class="form-inline">
                                            <div class="row">
                                                <div class="form-group col-xs-12">
                                                    <label for="company">Company</label>
                                                    <input id="company" class="form-control input-group-lg" type="text" name="company" title="Enter Company" placeholder="Company name" value="Envato Inc" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-12">
                                                    <label for="designation">Designation</label>
                                                    <input id="designation" class="form-control input-group-lg" type="text" name="designation" title="Enter designation" placeholder="designation name" value="Exclusive Author" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <label for="from-date">From</label>
                                                    <input id="from-date" class="form-control input-group-lg" type="text" name="date" title="Enter a Date" placeholder="from" value="2016" />
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <label for="to-date" class="">To</label>
                                                    <input id="to-date" class="form-control input-group-lg" type="text" name="date" title="Enter a Date" placeholder="to" value="Present" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-12">
                                                    <label for="work-city">City/Town</label>
                                                    <input id="work-city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="Your city" value="Melbourne"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-12">
                                                    <label for="work-description">Description</label>
                                                    <textarea id="work-description" name="description" class="form-control" placeholder="Some texts about my work" rows="4" cols="400">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</textarea>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="edit-profile-settings">
                                <div class="block-title">
                                    <h4 class="grey"><i class="icon ion-ios-settings"></i>Account Settings</h4>
                                    <div class="line"></div>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                                    <div class="line"></div>
                                </div>
                                <div class="edit-block">
                                    <div class="settings-block">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="switch-description">
                                                    <div><strong>Enable follow me</strong></div>
                                                    <p>Enable this if you want people to follow you</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="toggle-switch">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="settings-block">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="switch-description">
                                                    <div><strong>Send me notifications</strong></div>
                                                    <p>Send me notification emails my friends like, share or message me</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="toggle-switch">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="settings-block">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="switch-description">
                                                    <div><strong>Text messages</strong></div>
                                                    <p>Send me messages to my cell phone</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="toggle-switch">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="settings-block">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="switch-description">
                                                    <div><strong>Enable tagging</strong></div>
                                                    <p>Enable my friends to tag me on their posts</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="toggle-switch">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="settings-block">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="switch-description">
                                                    <div><strong>Enable sound</strong></div>
                                                    <p>You'll hear notification sound when someone sends you a private message</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="toggle-switch">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="edit-profile-password">
                                <div class="block-title">
                                    <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Change Password</h4>
                                    <div class="line"></div>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                                    <div class="line"></div>
                                </div>
                                <div class="edit-block">
                                    <form name="update-pass" id="education" class="form-inline">
                                        <div class="row">
                                            <div class="form-group col-xs-12">
                                                <label for="my-password">Old password</label>
                                                <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Old password"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xs-6">
                                                <label>New password</label>
                                                <input class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="New password"/>
                                            </div>
                                            <div class="form-group col-xs-6">
                                                <label>Confirm password</label>
                                                <input class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Confirm password"/>
                                            </div>
                                        </div>
                                        <p><a href="#">Forgot Password?</a></p>
                                        <button class="btn btn-primary">Update Password</button>
                                    </form>
                                </div>
                                </div>
                            </div>

                        </div>
                    </div>

                <?php include 'sidebar.php' ?>
                <!-- Newsfeed Common Side Bar Right
                ================================================= -->

            </div>
        </div>
    </div>
</div>

<div>


</div>
<!--preloader-->
<div id="spinner-wrapper">
    <div class="spinner"></div>
</div>


<!-- Scripts
================================================= -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky-kit.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="js/lightslider.min.js"></script>
<script src="js/lightgallery-all.min.js"></script>
<script src="js/fileinput.min.js"></script>
<script src="js/script.js"></script>
<script>
    $(document).ready(function () {
        $('.imageGallery').lightSlider({
            gallery: true,
            item: 1,
            loop: true,
            thumbItem: 9,
            slideMargin: 0,
            enableDrag: false,
            currentPagerPosition: 'left',
            onSliderLoad: function (el) {
                $('.lSSlideOuter li a img[src*="vedio/"]').parent().parent().addClass('video-icon');
                el.lightGallery({
                    selector: '.imageGallery .lslide'
                });
            }
        });
    });
    $(document).on('ready', function () {
        $("#input-b3").fileinput({});
    });
</script>
<script>
    $(document).ready(function() {


        var readURL = function(input=['file']) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.pic3').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };


        $(".up3").on('change', function(){
            readURL(this);
        });




    });
</script>
</body>

</html>
