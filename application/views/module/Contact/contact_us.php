<style>

.title{
        font-size: 28px; 
        font-weight: 600;
        color: #000;
    }
    /* p {
        display: block;
        margin: 0 0 5px;
        font-weight: 400;
        line-height: 1.75;
        letter-spacing: normal;
        word-break: break-word;
        color: #000;
    } */
    .img-fluid{       
        width: 100%;
        /* background-image: url('foto.jpg'); */
        background-size: cover;     /* gambar memenuhi area */
        background-position: center;/* fokus tengah */
        background-repeat: no-repeat;
        border: 1px solid gainsboro;
        margin-bottom: 30px;
    }

    .styel{
        min-height: 350px;
    }

    .ctg {
        background-image: linear-gradient(to right, #fff, #fff 50%, #fff 50%);
        background-size: 200% 100%;
        background-position: -100%;
        display: inline-block;
        padding: 5px 0px 40px;
        position: absolute;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: all 0.3s 
        ease-in-out;
        text-align: center;
    }

    .title-hotel{
        color: #fff;
        font-size: 1.2em;
        align-self: center;
        position: absolute;
        z-index: 10;
        text-align: center;        
        font-weight: 600;
    }
    .thumbnails {
        width: calc(100% / 3);
        margin: 0px;
        display: flex;
        justify-content: center;
        position: relative;
        overflow: hidden;
        transition: transform .3s;
    }

    @media (min-width: 992px) {
        .modal-lg, .modal-xl {
            --bs-modal-width: 1000px;
        }
    }
    .modal-body img {
        object-fit: contain;
    }

    img .card-img-top{
        background-size: cover;        /* Gambar menutupi seluruh area */
        background-position: center;   /* Posisi gambar di tengah */
        background-repeat: no-repeat;  /* Tidak diulang */
        background-attachment: fixed;  /* Gambar diam saat scroll (opsional) */
        width: -webkit-fill-available;
    }
    .text-light {
        --bs-text-opacity: 1;
        color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
        font-weight: 700;
    }

    input[type=text], input[type=password], input[type=number], input[type=email], input[type=url], input[type=search], select, textarea {
        background: #fff;
        border: 2px solid #d9d9d9;
        border-radius: 0;
        box-shadow: none;
        color: #888;
        font-size: 16px;
        height:30px; 
        line-height: 0px;
        padding: 10px;
        width: 100%;
    }
    .form-control {
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1;
        color: var(--bs-body-color);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: var(--bs-body-bg);
        background-clip: padding-box;
        border: var(--bs-border-width) solid var(--bs-border-color);
        border-radius: var(--bs-border-radius);
        transition: border-color .15s 
        ease-in-out, box-shadow .15s 
        ease-in-out;
    }

    /* coating show */
    .btn-default {
        background: #5cb468 !important;
        width: 100%;
        color: #fff !important;
        font-weight: 700 !important;
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
        font-size: 14px;
    }

    .card {
        box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.3);
        border: none;
        margin-bottom: 30px;
    }

    .card-img, .card-img-bottom, .card-img-top {
        width: 100%;
        max-height: 200px;
    }

    .card:hover {
        transform: scale(1.05);
        transition: all 1s ease;
        z-index: 999;
    }

    .card-01 .card-body {
        position: relative;
        padding-top: 0px;
    }

    h5{
        font-weight: 700;
    }

    .card-01 .badge-box {
        position: absolute;
        top: -20px;
        left: 50%;
        width: 100px;
        height: 100px;
        margin-left: -50px;
        text-align: center;
    }

    .card-01 .badge-box i {
        background: #006EFF;
        color: #fff;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        font-size: 20px;
    }

    .card-01 .height-fix {
        height: 455px;
        overflow: hidden;
    }

    .card-01 .height-fix .card-img-top {
        width: auto;
    }

    .main-nav>ul>li>a,
    .main-nav>ul>li.submenu:after {
        color: #2a2a2a !important;
    }

    .white-btn {
        color: #2a2a2a !important;
        border: 2px solid #2a2a2a !important;
    }

    .ket h4,
    .ket p {
        color: #2a2a2a !important;
    }

    sponsors-section .slide-logo img {
        max-width: 100%;
        height: auto;
    }

    .slide-logo a {
        height: auto;
    }

    .fl-module img {
        max-width: 100%;
        height: auto;
    }


    .rowsel {
        border: 1px solid rgba(0, 0, 0, .1);
        background: #fff;
        padding: 0.938rem;
        height: 200px;
        width: fit-content;
        aspect-ratio: 3/2;
        ;
    }
    .owl-carousel .owl-item img {
        width: 80%;
        border: 1px solid rgba(0, 0, 0, .1);
        background: #fff;
        padding: 0.938rem;
        height: 200px;
        width: fit-content;
        aspect-ratio: 3/2;
        object-fit: contain;
    }

    .menu-item:hover>.menu-link,
    .menu-item.current>.menu-link {
        color: #FFBC00 !important;
    }
        

    .sub-menu-container .menu-item>.menu-link {
        color: black;
    }

    #primary-menu-trigger,
    #page-menu-trigger {
        display: -ms-flex;
        display: flex;
        opacity: 1;
        pointer-events: auto;
        z-index: 5;
        cursor: pointer;
        font-size: 0.875rem;
        width: 20%;
        height: 47px;
        position: relative;
        left: 5%;
        /* top: -1%; */
        line-height: 90px;
        justify-content: center;
        align-items: center;
        -webkit-transition: opacity .3s ease;
        transition: opacity .3s ease;
    }

    .svg-trigger {
        width: 100px;
        height: 100px;
        cursor: pointer;
        -webkit-tap-highlight-color: transparent;
        transition: transform 400ms;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .top-phone {
        background-color: #FFBC00;
        border-radius: 50px;
        color: #fff;
        font-weight: bold;
        padding: 10px 14px;
        border-radius: 50px;
    }

    .top-phone:hover {
        background-color: #5B9D0A;
        color: #FFF;
    }
    input[type=text], input[type=password], input[type=number], input[type=email], input[type=url], input[type=search], select, textarea {
        background: #fff;
        border: 2px solid #d9d9d9;
        border-radius: 0;
        box-shadow: none;
        color: #888;
        font-size: 16px;
        height:30px; 
        line-height: 0px;
        padding: 10px;
        width: 100%;
    }
    .form-control {
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1;
        color: var(--bs-body-color);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: var(--bs-body-bg);
        background-clip: padding-box;
        border: var(--bs-border-width) solid var(--bs-border-color);
        border-radius: var(--bs-border-radius);
        transition: border-color .15s 
        ease-in-out, box-shadow .15s 
        ease-in-out;
    }

    .footer {
        color: black;
        /* background-color: black; */
        font-size: 15px;
        position: relative;
        background: url('<?php echo $data_footer; ?>');
        /* background-repeat: no-repeat; */
    }
    section{
        margin-top: 150px;
    }
</style>

<section class="inner-banner hero-section" style="background-image: url('<?php echo base_url("./assets/images/upload/contact_us/".$data_contact_us[0]->file_upload."");?>'); padding: 7.5rem 0 !important; background-size: cover; background-position: center;" data-desktop_image="https://coatingshow.com/bg-header.jpg" data-mobile_image="https://coatingshow.com/bg-header.jpg">
    <div class="container">
        <h2 class="text-light"><?php echo ucwords($data_contact_us[0]->title);?></h2>
    </div>
</section>

<section class="generic-gallery-isotope mt-5">
    <div class="container">
        <div class="row mb-4">     
            <?php foreach($data_contact1 as $row){?>       
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-center mb-4">
                    <p>
                        <strong><?php echo ucwords($row->name)?>, <?php echo ucwords($row->position)?></strong><br>
                        <span>
                            
                        </span> <?php echo $row->hp?><br>
                        <span>
                            
                        </span>
                        <a style="color: #5cb468;" href="mailto:<?php echo $row->email?>"><?php echo $row->email?></a>
                    </p>
                </div>
            <?php } ?>
            <!-- <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-center">
                <p>
                    <strong>Hetty Clark, Sales </strong><br>
                    <span>
                        
                    </span> +62 811 9036 060<br>
                    <span>
                        
                    </span>
                    <a style="color: #5cb468;" href="mailto:hetty@coatingshow.com">hetty@coatingshow.com</a>
                </p>
            </div> -->
              
            <div class="row mt-5">
                <h2 class="text-center mb-3">Main Agent</h2>
                <div class="col-lg-12">
                    <div class="row <?= $txt_count?>">
                        <?php foreach($data_contact2 as $row2){?>    
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-center mb-2">
                            <div class="card p-3" style="background-color: #2154B6; border-radius: 24px;">
                                <p class="text-light">
                                    <strong><?php echo $row2->company?></strong><br>
                                    <strong><?php echo ucwords($row2->name)?></strong><br>
                                    <span>
                                        
                                    </span>
                                    Tel : <?php echo $row2->hp?><br>
                                    
                                    <span>
                                        
                                    </span>
                                    <a style="color: #FFF" href="mailto:acifok@163.com"><?php echo $row2->email?></a>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <h2 class="text-center mb-3">Sub Agent</h2>
                <div class="col-lg-12">
                    <div class="row <?= $txt_count2?>">
                        <?php foreach($data_contact3 as $row3){?> 
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-center mb-2">
                                <div class="card p-3" style="background-color: #2154B6; border-radius: 24px;">
                                    <p class="text-light">
                                        <strong><?php echo $row3->company?></strong><br>
                                        <strong><?php echo ucwords($row3->name)?></strong><br>
                                        <span>
                                            
                                        </span>
                                        Tel : <?php echo $row3->hp?><br>
                                        Whatsapp : <?php echo $row3->hp?><br> 
                                        <span>
                                            
                                        </span>
                                        <a style="color: #FFF" href="mailto:<?php echo $row3->email?>"><?php echo $row3->email?></a>
                                    </p>
                                </div>
                            </div>    
                        <?php } ?>     
                    </div>
                </div>       
            </div>
            
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-4">
                <form class="form-inline" action="<?php echo base_url(); ?>Info/form_submit" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="KKzfFPZ0ju3acr5oMq2ROiL6JngZCdXfw1bTuanv">                        <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 mb-3">
                            <select name="title" required="" class="form-control" id="">
                                <option value="">-- Title --</option>
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Ms">Ms</option>
                            </select>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 mb-3">
                            <input type="text" name="name" placeholder="Full Name" required="" class="form-control" id="staticEmail2">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                            <select name="gender" class="form-control" required="" id="">
                                <option value="">-- Gender --</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mb-3">
                            <select name="code" required="" class="form-control" id="">
                                <option value="">-- Country Code --</option>
                                <option data-countrycode="ID" value="62">Indonesia (+62)</option>
                                <option data-countrycode="GB" value="44">UK (+44)</option>
                                <option data-countrycode="US" value="1">USA (+1)</option>
                                <optgroup label="Other countries">
                                    <option data-countrycode="DZ" value="213">Algeria (+213)</option>
                                    <option data-countrycode="AD" value="376">Andorra (+376)</option>
                                    <option data-countrycode="AO" value="244">Angola (+244)</option>
                                    <option data-countrycode="AI" value="1264">Anguilla (+1264)</option>
                                    <option data-countrycode="AG" value="1268">Antigua &amp; Barbuda (+1268)
                                    </option>
                                    <option data-countrycode="AR" value="54">Argentina (+54)</option>
                                    <option data-countrycode="AM" value="374">Armenia (+374)</option>
                                    <option data-countrycode="AW" value="297">Aruba (+297)</option>
                                    <option data-countrycode="AU" value="61">Australia (+61)</option>
                                    <option data-countrycode="AT" value="43">Austria (+43)</option>
                                    <option data-countrycode="AZ" value="994">Azerbaijan (+994)</option>
                                    <option data-countrycode="BS" value="1242">Bahamas (+1242)</option>
                                    <option data-countrycode="BH" value="973">Bahrain (+973)</option>
                                    <option data-countrycode="BD" value="880">Bangladesh (+880)</option>
                                    <option data-countrycode="BB" value="1246">Barbados (+1246)</option>
                                    <option data-countrycode="BY" value="375">Belarus (+375)</option>
                                    <option data-countrycode="BE" value="32">Belgium (+32)</option>
                                    <option data-countrycode="BZ" value="501">Belize (+501)</option>
                                    <option data-countrycode="BJ" value="229">Benin (+229)</option>
                                    <option data-countrycode="BM" value="1441">Bermuda (+1441)</option>
                                    <option data-countrycode="BT" value="975">Bhutan (+975)</option>
                                    <option data-countrycode="BO" value="591">Bolivia (+591)</option>
                                    <option data-countrycode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                    <option data-countrycode="BW" value="267">Botswana (+267)</option>
                                    <option data-countrycode="BR" value="55">Brazil (+55)</option>
                                    <option data-countrycode="BN" value="673">Brunei (+673)</option>
                                    <option data-countrycode="BG" value="359">Bulgaria (+359)</option>
                                    <option data-countrycode="BF" value="226">Burkina Faso (+226)</option>
                                    <option data-countrycode="BI" value="257">Burundi (+257)</option>
                                    <option data-countrycode="KH" value="855">Cambodia (+855)</option>
                                    <option data-countrycode="CM" value="237">Cameroon (+237)</option>
                                    <option data-countrycode="CA" value="1">Canada (+1)</option>
                                    <option data-countrycode="CV" value="238">Cape Verde Islands (+238)</option>
                                    <option data-countrycode="KY" value="1345">Cayman Islands (+1345)</option>
                                    <option data-countrycode="CF" value="236">Central African Republic (+236)
                                    </option>
                                    <option data-countrycode="CL" value="56">Chile (+56)</option>
                                    <option data-countrycode="CN" value="86">China (+86)</option>
                                    <option data-countrycode="CO" value="57">Colombia (+57)</option>
                                    <option data-countrycode="KM" value="269">Comoros (+269)</option>
                                    <option data-countrycode="CG" value="242">Congo (+242)</option>
                                    <option data-countrycode="CK" value="682">Cook Islands (+682)</option>
                                    <option data-countrycode="CR" value="506">Costa Rica (+506)</option>
                                    <option data-countrycode="HR" value="385">Croatia (+385)</option>
                                    <option data-countrycode="CU" value="53">Cuba (+53)</option>
                                    <option data-countrycode="CY" value="90392">Cyprus North (+90392)</option>
                                    <option data-countrycode="CY" value="357">Cyprus South (+357)</option>
                                    <option data-countrycode="CZ" value="42">Czech Republic (+42)</option>
                                    <option data-countrycode="DK" value="45">Denmark (+45)</option>
                                    <option data-countrycode="DJ" value="253">Djibouti (+253)</option>
                                    <option data-countrycode="DM" value="1809">Dominica (+1809)</option>
                                    <option data-countrycode="DO" value="1809">Dominican Republic (+1809)</option>
                                    <option data-countrycode="EC" value="593">Ecuador (+593)</option>
                                    <option data-countrycode="EG" value="20">Egypt (+20)</option>
                                    <option data-countrycode="SV" value="503">El Salvador (+503)</option>
                                    <option data-countrycode="GQ" value="240">Equatorial Guinea (+240)</option>
                                    <option data-countrycode="ER" value="291">Eritrea (+291)</option>
                                    <option data-countrycode="EE" value="372">Estonia (+372)</option>
                                    <option data-countrycode="ET" value="251">Ethiopia (+251)</option>
                                    <option data-countrycode="FK" value="500">Falkland Islands (+500)</option>
                                    <option data-countrycode="FO" value="298">Faroe Islands (+298)</option>
                                    <option data-countrycode="FJ" value="679">Fiji (+679)</option>
                                    <option data-countrycode="FI" value="358">Finland (+358)</option>
                                    <option data-countrycode="FR" value="33">France (+33)</option>
                                    <option data-countrycode="GF" value="594">French Guiana (+594)</option>
                                    <option data-countrycode="PF" value="689">French Polynesia (+689)</option>
                                    <option data-countrycode="GA" value="241">Gabon (+241)</option>
                                    <option data-countrycode="GM" value="220">Gambia (+220)</option>
                                    <option data-countrycode="GE" value="7880">Georgia (+7880)</option>
                                    <option data-countrycode="DE" value="49">Germany (+49)</option>
                                    <option data-countrycode="GH" value="233">Ghana (+233)</option>
                                    <option data-countrycode="GI" value="350">Gibraltar (+350)</option>
                                    <option data-countrycode="GR" value="30">Greece (+30)</option>
                                    <option data-countrycode="GL" value="299">Greenland (+299)</option>
                                    <option data-countrycode="GD" value="1473">Grenada (+1473)</option>
                                    <option data-countrycode="GP" value="590">Guadeloupe (+590)</option>
                                    <option data-countrycode="GU" value="671">Guam (+671)</option>
                                    <option data-countrycode="GT" value="502">Guatemala (+502)</option>
                                    <option data-countrycode="GN" value="224">Guinea (+224)</option>
                                    <option data-countrycode="GW" value="245">Guinea - Bissau (+245)</option>
                                    <option data-countrycode="GY" value="592">Guyana (+592)</option>
                                    <option data-countrycode="HT" value="509">Haiti (+509)</option>
                                    <option data-countrycode="HN" value="504">Honduras (+504)</option>
                                    <option data-countrycode="HK" value="852">Hong Kong (+852)</option>
                                    <option data-countrycode="HU" value="36">Hungary (+36)</option>
                                    <option data-countrycode="IS" value="354">Iceland (+354)</option>
                                    <option data-countrycode="IN" value="91">India (+91)</option>
                                    
                                    <option data-countrycode="IR" value="98">Iran (+98)</option>
                                    <option data-countrycode="IQ" value="964">Iraq (+964)</option>
                                    <option data-countrycode="IE" value="353">Ireland (+353)</option>
                                    <option data-countrycode="IL" value="972">Israel (+972)</option>
                                    <option data-countrycode="IT" value="39">Italy (+39)</option>
                                    <option data-countrycode="JM" value="1876">Jamaica (+1876)</option>
                                    <option data-countrycode="JP" value="81">Japan (+81)</option>
                                    <option data-countrycode="JO" value="962">Jordan (+962)</option>
                                    <option data-countrycode="KZ" value="7">Kazakhstan (+7)</option>
                                    <option data-countrycode="KE" value="254">Kenya (+254)</option>
                                    <option data-countrycode="KI" value="686">Kiribati (+686)</option>
                                    <option data-countrycode="KP" value="850">Korea North (+850)</option>
                                    <option data-countrycode="KR" value="82">Korea South (+82)</option>
                                    <option data-countrycode="KW" value="965">Kuwait (+965)</option>
                                    <option data-countrycode="KG" value="996">Kyrgyzstan (+996)</option>
                                    <option data-countrycode="LA" value="856">Laos (+856)</option>
                                    <option data-countrycode="LV" value="371">Latvia (+371)</option>
                                    <option data-countrycode="LB" value="961">Lebanon (+961)</option>
                                    <option data-countrycode="LS" value="266">Lesotho (+266)</option>
                                    <option data-countrycode="LR" value="231">Liberia (+231)</option>
                                    <option data-countrycode="LY" value="218">Libya (+218)</option>
                                    <option data-countrycode="LI" value="417">Liechtenstein (+417)</option>
                                    <option data-countrycode="LT" value="370">Lithuania (+370)</option>
                                    <option data-countrycode="LU" value="352">Luxembourg (+352)</option>
                                    <option data-countrycode="MO" value="853">Macao (+853)</option>
                                    <option data-countrycode="MK" value="389">Macedonia (+389)</option>
                                    <option data-countrycode="MG" value="261">Madagascar (+261)</option>
                                    <option data-countrycode="MW" value="265">Malawi (+265)</option>
                                    <option data-countrycode="MY" value="60">Malaysia (+60)</option>
                                    <option data-countrycode="MV" value="960">Maldives (+960)</option>
                                    <option data-countrycode="ML" value="223">Mali (+223)</option>
                                    <option data-countrycode="MT" value="356">Malta (+356)</option>
                                    <option data-countrycode="MH" value="692">Marshall Islands (+692)</option>
                                    <option data-countrycode="MQ" value="596">Martinique (+596)</option>
                                    <option data-countrycode="MR" value="222">Mauritania (+222)</option>
                                    <option data-countrycode="YT" value="269">Mayotte (+269)</option>
                                    <option data-countrycode="MX" value="52">Mexico (+52)</option>
                                    <option data-countrycode="FM" value="691">Micronesia (+691)</option>
                                    <option data-countrycode="MD" value="373">Moldova (+373)</option>
                                    <option data-countrycode="MC" value="377">Monaco (+377)</option>
                                    <option data-countrycode="MN" value="976">Mongolia (+976)</option>
                                    <option data-countrycode="MS" value="1664">Montserrat (+1664)</option>
                                    <option data-countrycode="MA" value="212">Morocco (+212)</option>
                                    <option data-countrycode="MZ" value="258">Mozambique (+258)</option>
                                    <option data-countrycode="MN" value="95">Myanmar (+95)</option>
                                    <option data-countrycode="NA" value="264">Namibia (+264)</option>
                                    <option data-countrycode="NR" value="674">Nauru (+674)</option>
                                    <option data-countrycode="NP" value="977">Nepal (+977)</option>
                                    <option data-countrycode="NL" value="31">Netherlands (+31)</option>
                                    <option data-countrycode="NC" value="687">New Caledonia (+687)</option>
                                    <option data-countrycode="NZ" value="64">New Zealand (+64)</option>
                                    <option data-countrycode="NI" value="505">Nicaragua (+505)</option>
                                    <option data-countrycode="NE" value="227">Niger (+227)</option>
                                    <option data-countrycode="NG" value="234">Nigeria (+234)</option>
                                    <option data-countrycode="NU" value="683">Niue (+683)</option>
                                    <option data-countrycode="NF" value="672">Norfolk Islands (+672)</option>
                                    <option data-countrycode="NP" value="670">Northern Marianas (+670)</option>
                                    <option data-countrycode="NO" value="47">Norway (+47)</option>
                                    <option data-countrycode="OM" value="968">Oman (+968)</option>
                                    <option data-countrycode="PW" value="680">Palau (+680)</option>
                                    <option data-countrycode="PA" value="507">Panama (+507)</option>
                                    <option data-countrycode="PG" value="675">Papua New Guinea (+675)</option>
                                    <option data-countrycode="PY" value="595">Paraguay (+595)</option>
                                    <option data-countrycode="PE" value="51">Peru (+51)</option>
                                    <option data-countrycode="PH" value="63">Philippines (+63)</option>
                                    <option data-countrycode="PL" value="48">Poland (+48)</option>
                                    <option data-countrycode="PT" value="351">Portugal (+351)</option>
                                    <option data-countrycode="PR" value="1787">Puerto Rico (+1787)</option>
                                    <option data-countrycode="QA" value="974">Qatar (+974)</option>
                                    <option data-countrycode="RE" value="262">Reunion (+262)</option>
                                    <option data-countrycode="RO" value="40">Romania (+40)</option>
                                    <option data-countrycode="RU" value="7">Russia (+7)</option>
                                    <option data-countrycode="RW" value="250">Rwanda (+250)</option>
                                    <option data-countrycode="SM" value="378">San Marino (+378)</option>
                                    <option data-countrycode="ST" value="239">Sao Tome &amp; Principe (+239)
                                    </option>
                                    <option data-countrycode="SA" value="966">Saudi Arabia (+966)</option>
                                    <option data-countrycode="SN" value="221">Senegal (+221)</option>
                                    <option data-countrycode="CS" value="381">Serbia (+381)</option>
                                    <option data-countrycode="SC" value="248">Seychelles (+248)</option>
                                    <option data-countrycode="SL" value="232">Sierra Leone (+232)</option>
                                    <option data-countrycode="SG" value="65">Singapore (+65)</option>
                                    <option data-countrycode="SK" value="421">Slovak Republic (+421)</option>
                                    <option data-countrycode="SI" value="386">Slovenia (+386)</option>
                                    <option data-countrycode="SB" value="677">Solomon Islands (+677)</option>
                                    <option data-countrycode="SO" value="252">Somalia (+252)</option>
                                    <option data-countrycode="ZA" value="27">South Africa (+27)</option>
                                    <option data-countrycode="ES" value="34">Spain (+34)</option>
                                    <option data-countrycode="LK" value="94">Sri Lanka (+94)</option>
                                    <option data-countrycode="SH" value="290">St. Helena (+290)</option>
                                    <option data-countrycode="KN" value="1869">St. Kitts (+1869)</option>
                                    <option data-countrycode="SC" value="1758">St. Lucia (+1758)</option>
                                    <option data-countrycode="SD" value="249">Sudan (+249)</option>
                                    <option data-countrycode="SR" value="597">Suriname (+597)</option>
                                    <option data-countrycode="SZ" value="268">Swaziland (+268)</option>
                                    <option data-countrycode="SE" value="46">Sweden (+46)</option>
                                    <option data-countrycode="CH" value="41">Switzerland (+41)</option>
                                    <option data-countrycode="SI" value="963">Syria (+963)</option>
                                    <option data-countrycode="TW" value="886">Taiwan (+886)</option>
                                    <option data-countrycode="TJ" value="7">Tajikstan (+7)</option>
                                    <option data-countrycode="TH" value="66">Thailand (+66)</option>
                                    <option data-countrycode="TG" value="228">Togo (+228)</option>
                                    <option data-countrycode="TO" value="676">Tonga (+676)</option>
                                    <option data-countrycode="TT" value="1868">Trinidad &amp; Tobago (+1868)
                                    </option>
                                    <option data-countrycode="TN" value="216">Tunisia (+216)</option>
                                    <option data-countrycode="TR" value="90">Turkey (+90)</option>
                                    <option data-countrycode="TM" value="7">Turkmenistan (+7)</option>
                                    <option data-countrycode="TM" value="993">Turkmenistan (+993)</option>
                                    <option data-countrycode="TC" value="1649">Turks &amp; Caicos Islands (+1649)
                                    </option>
                                    <option data-countrycode="TV" value="688">Tuvalu (+688)</option>
                                    <option data-countrycode="UG" value="256">Uganda (+256)</option>
                                    <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                    <option data-countrycode="UA" value="380">Ukraine (+380)</option>
                                    <option data-countrycode="AE" value="971">United Arab Emirates (+971)</option>
                                    <option data-countrycode="UY" value="598">Uruguay (+598)</option>
                                    <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                    <option data-countrycode="UZ" value="7">Uzbekistan (+7)</option>
                                    <option data-countrycode="VU" value="678">Vanuatu (+678)</option>
                                    <option data-countrycode="VA" value="379">Vatican City (+379)</option>
                                    <option data-countrycode="VE" value="58">Venezuela (+58)</option>
                                    <option data-countrycode="VN" value="84">Vietnam (+84)</option>
                                    <option data-countrycode="VG" value="84">Virgin Islands - British (+1284)
                                    </option>
                                    <option data-countrycode="VI" value="84">Virgin Islands - US (+1340)</option>
                                    <option data-countrycode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                    <option data-countrycode="YE" value="969">Yemen (North)(+969)</option>
                                    <option data-countrycode="YE" value="967">Yemen (South)(+967)</option>
                                    <option data-countrycode="ZM" value="260">Zambia (+260)</option>
                                    <option data-countrycode="ZW" value="263">Zimbabwe (+263)</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 mb-3">
                            <input type="text" name="phone" placeholder="Phone Number" required="" class="form-control" id="mobile-number">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <input type="text" name="email" placeholder="Email Address" required="" class="form-control" id="staticEmail2">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <input type="text" name="job_title" placeholder="Job Title" required="" class="form-control" id="staticEmail2">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <input type="text" name="company" placeholder="Company Name" required="" class="form-control" id="staticEmail2">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <input type="text" name="company_street" placeholder="Company Address - Street" required="" class="form-control" id="staticEmail2">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                            <input type="text" name="suburb" placeholder="Suburb" required="" class="form-control" id="staticEmail2">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                            <input type="text" name="town" placeholder="Town/City" required="" class="form-control" id="staticEmail2">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                            <input type="text" name="postal" placeholder="Postal Code" required="" class="form-control" id="staticEmail2">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                            <select id="country" name="country" required="" class="form-control">
                                <option value="">-- Country --</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean
                                    Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic
                                    Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                </option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories
                                </option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                    Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                </option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                    People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic
                                    Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The
                                    Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States
                                    of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                    Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                    Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia
                                    and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                </option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor
                                    Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <textarea name="message" class="form-control" id="" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                        <input type="hidden" name="type" value="1">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" style="width: 100%" class="btn btn-primary mb-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>            
        </div>
    </div>
</section>