<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>"/>
    <meta name="description" content="<?php echo ($seo_description); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">

    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>
    <!-- <link rel="stylesheet" href="__PUBLIC__/www/css/lightgallery.min.css"> -->
    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src="__PUBLIC__/www/js/jquery.min.js"></script>
    <!-- <script src="__PUBLIC__/www/js/lightgallery.js"></script>
    <script src="__PUBLIC__/www/js/lg-zoom.js"></script> -->
    <script src="__PUBLIC__/www/js/swiper.min.js"></script>
    <script src="__PUBLIC__/www/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/www/js/main.js"></script>

</head>

<body data-spy="scroll" data-target="#navbar-example">

    <header>
        <div class="header-top">
            <div class="top-bar clearfix">
                <div class="container">
                    <div class="row">
                        <div class="phone col-lg-2 col-md-3 col-sm-3"><span><?php echo ($phone); ?></span></div>
                        <div class="eamil col-lg-2 col-md-3 col-sm-3">
                            <a href="mailto:<?php echo ($email); ?>" target="_blank" class="emails">
                                <span><?php echo ($email); ?></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/index.php"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>
                    </div>

                    <div id="navbar-example">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#home">Home</a></li>
            <?php $n=0;foreach($Categorys as $key=>$r):if($n<5) :if( intval(0)==$r["parentid"] ) :++$n; if($r[catname] != 'THANKS' ): ?><li>
                <a href="#<?php echo ($r["catdir"]); ?>"><?php echo ($r["catname"]); ?></a>
            </li><?php endif; endif; endif; endforeach;?>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
        </div>

<!-- banner  -->
<div id="home" class="banner">
    <!-- pc -->
    <div class="pc-banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!--                        <div class="swiper-slide">
                            <a href="" target="_blank"> <img src="/Public/www/images/banner.png" alt=""></a>
                        </div>-->
                <?php  $_result=M("slide_data")->field("*")->where("fid = 1 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide"><a href="<?php echo ($r["link"]); ?>" title="<?php echo ($r["title"]); ?>" target="_blank"><img src="<?php echo ($r["pic"]); ?>"
                                alt="<?php echo ($r["title"]); ?>"></a></div><?php endforeach; endif;?>
            </div>
            <div class="container">
                <div class="row">
                    <form class="banner-contant clearfix" method="post" action="index.php?g=Home&a=message"
                        onsubmit="return beforeSubmit2(this);">
                        <h6>Contact Us</h6>
                        <div class="box clearfix">
                            <div class="col-lg-6 col-md-6">
                                <p>Name <span> *</span></p>
                                <input type="text" name="name">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <p>E-mail <span> *</span></p>
                                <input type="text" name="email">
                            </div>
                        </div>
                        <div class="box clearfix">
                            <div class="col-lg-6 col-md-6">
                                <p>Company <span> *</span></p>
                                <input type="text" name="com">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <p>Country <span> *</span></p>
                                <select name="country">
                                    <option value="">Select a Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
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
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                    </option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burma">Burma</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Central African Republic">Central African Republic
                                    </option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo, Democratic Republic">Congo, Democratic
                                        Republic
                                    </option>
                                    <option value="Congo, Republic of the">Congo, Republic of the
                                    </option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, North">Korea, North</option>
                                    <option value="Korea, South">Korea, South</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome">Sao Tome</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="box clearfix">
                            <div class="col-lg-6 col-md-6">
                                <p>Phone Number</p>
                                <input type="text" name="phone">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <p>Whats App</p>
                                <input type="text" name="whatsapp">
                            </div>
                        </div>
                        <div class="box clearfix">
                            <div class="col-lg-6 col-md-6">
                                <p>Consulting Information <span> *</span></p>
                                <textarea name="message"></textarea>
                            </div>
                            <div class="txt col-lg-6 col-md-6">
                                <p><?php echo ($phone); ?></br>
                                    <?php echo ($guhuaa); ?>
                                </p>
                                <p><?php echo ($shouji); ?></br>
                                    <?php echo ($shoujia); ?></p>
                                <p><?php echo ($email); ?></br>
                                    <?php echo ($emailb); ?></p>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <input type="submit" value="Send" class="banner-sub">
                        </div>
                    </form>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-btn">
                <div class="swiper-button-prev swiper-button-white"></div>
                <div class="swiper-button-next swiper-button-white"></div>
            </div>

        </div>
    </div>

    <!-- wap -->
    <div class="wap-banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php  $_result=M("slide_data")->field("*")->where("fid = 2 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide"><a href="<?php echo ($r["link"]); ?>" title="<?php echo ($r["title"]); ?>" target="_blank"><img src="<?php echo ($r["pic"]); ?>"
                                alt="<?php echo ($r["title"]); ?>"></a></div><?php endforeach; endif;?>
                <!--                        <div class="swiper-slide">
                            <a href="" target=""><img src="/Public/www/images/banner.png" alt=""></a>
                        </div>-->


            </div>
            <div class="swiper-pagination"></div>


        </div>
    </div>
</div>

</header>

<div class="index">

    <!-- attest -->
    <div class="attest">
        <div class="container">
            <div class="row">
                <div class="box-img col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="/Public/www/images/ISO9001.png"
                        alt=""></div>
                <div class="box-img col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="/Public/www/images/IATF16949.png"
                        alt=""></div>
            </div>
        </div>
    </div>

    <!-- product -->
    <div>
        <a id="product"></a>
        <div class="product">
            <h3>Product</h3>
            <div class="title">THIS IS PRODUCT SHOWROOM</div>
            <!-- pc -->
            <div class="pc-product">
                <div class="container">
                    <div class="row">
                        <?php  $_result=M("Product")->field("thumb,title,cont,listorder,id,document")->where(" 1  AND status=1  AND catid=94")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="pro-box clearfix">
                                <div class="image col-lg-6 col-md-6 col-sm-6">
                                    <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                </div>
                                <div class="txt col-lg-6 col-md-6 col-sm-6">
                                    <?php echo ($r["cont"]); ?>
                                    <div class="pro-btn clearfix">
                                        <a href="#contact" class="btns">Contact Us</a>
                                        <!-- <div id="lightgallery<?php echo ($r["id"]); ?>">
                                            <div data-src="<?php echo ($r["document"]); ?>">
                                                <img class="img-responsive" src="/Public/www/images/download-b.png"
                                                    alt="Thumb-1">
                                            </div>
                                        </div>
                                        <script>
                                            lightGallery(document.getElementById('lightgallery<?php echo ($r["id"]); ?>'));
                                        </script> -->
                                        <a href="<?php echo ($r["document"]); ?>" title="<?php echo ($r["title"]); ?>" download="<?php echo ($r["title"]); ?>"> <img
                                                class="img-responsive" src="/Public/www/images/download-b.png"
                                                alt="<?php echo ($r["title"]); ?>"></a>
                                    </div>
                                </div>
                            </div><?php endforeach; endif;?>
                    </div>
                </div>

                <div class="pro-bg">
                    <div class="container">
                        <div class="row">
                            <?php  $_result=M("Product")->field("thumb,title,cont,listorder,id,document")->where(" 1  AND status=1  AND catid=95")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="pro-box clearfix">
                                    <div class="txt col-lg-6 col-md-6 col-sm-6">
                                        <?php echo ($r["cont"]); ?>
                                        <div class="pro-btn clearfix">
                                            <a href="#contact" class="btns">Contact Us</a>
                                            <a href="<?php echo ($r["document"]); ?>" title="<?php echo ($r["title"]); ?>" download="<?php echo ($r["title"]); ?>"> <img
                                                    class="img-responsive" src="/Public/www/images/download-w.png"
                                                    alt="<?php echo ($r["title"]); ?>"></a>
                                        </div>
                                    </div>
                                    <div class="image col-lg-6 col-md-6 col-sm-6">
                                        <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                    </div>
                                </div><?php endforeach; endif;?>
                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="row">
                        <?php  $_result=M("Product")->field("thumb,title,cont,listorder,id,document")->where(" 1  AND status=1  AND catid=112")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="pro-box clearfix">
                                <div class="image col-lg-6 col-md-6 col-sm-6">
                                    <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                </div>
                                <div class="txt col-lg-6 col-md-6 col-sm-6">
                                    <?php echo ($r["cont"]); ?>
                                    <div class="pro-btn clearfix">
                                        <a href="#contact" class="btns">Contact Us</a>
                                        <a href="<?php echo ($r["document"]); ?>" title="<?php echo ($r["title"]); ?>" download="<?php echo ($r["title"]); ?>"> <img
                                                class="img-responsive" src="/Public/www/images/download-b.png"
                                                alt="<?php echo ($r["title"]); ?>"></a>
                                    </div>
                                </div>
                            </div><?php endforeach; endif;?>
                    </div>
                </div>

                <div class="pro-bg">
                    <div class="container">
                        <div class="row">

                            <?php  $_result=M("Product")->field("thumb,title,cont,listorder,id,document")->where(" 1  AND status=1  AND catid=113")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="pro-box clearfix">
                                    <div class="txt col-lg-6 col-md-6 col-sm-6">
                                        <?php echo ($r["cont"]); ?>
                                        <div class="pro-btn clearfix">
                                            <a href="#contact" class="btns">Contact Us</a>
                                            <a href="<?php echo ($r["document"]); ?>" title="<?php echo ($r["title"]); ?>" download="<?php echo ($r["title"]); ?>"> <img
                                                    class="img-responsive" src="/Public/www/images/download-w.png"
                                                    alt="<?php echo ($r["title"]); ?>"></a>
                                        </div>
                                    </div>
                                    <div class="image col-lg-6 col-md-6 col-sm-6">
                                        <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                    </div>
                                </div><?php endforeach; endif;?>

                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="row">
                        <?php  $_result=M("Product")->field("thumb,title,cont,listorder,id,document")->where(" 1  AND status=1  AND catid=114")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="pro-box clearfix">
                                <div class="image col-lg-6 col-md-6 col-sm-6">
                                    <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                </div>
                                <div class="txt col-lg-6 col-md-6 col-sm-6">
                                    <?php echo ($r["cont"]); ?>
                                    <div class="pro-btn clearfix">
                                        <a href="#contact" class="btns">Contact Us</a>
                                        <a href="<?php echo ($r["document"]); ?>" title="<?php echo ($r["title"]); ?>" download="<?php echo ($r["title"]); ?>"> <img
                                                class="img-responsive" src="/Public/www/images/download-b.png"
                                                alt="<?php echo ($r["title"]); ?>"></a>
                                    </div>
                                </div>
                            </div><?php endforeach; endif;?>

                    </div>
                </div>
            </div>

            <!-- wap-product -->
            <div class="wap-product">
                <div class="container">
                    <div class="row">
                        <div class="box">
                            <div class="box-img"> <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div>
                            <div class="txt">
                                <?php echo ($r["cont"]); ?>
                                <div class="pro-btn clearfix">
                                    <a href="#contact" class="btns">Contact Us</a>
                                    <a href="<?php echo ($r["document"]); ?>" title="<?php echo ($r["title"]); ?>" download="<?php echo ($r["title"]); ?>"> <img
                                            class="img-responsive" src="/Public/www/images/download-b.png"
                                            alt="<?php echo ($r["title"]); ?>"></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- about -->
    <div>
        <a id="about"></a>
        <div class="about">
            <div class="about-bg">
                <div class="container">
                    <div class="row">
                        <?php getcatvar('page','id = 74','cont');?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- application -->
    <div>
        <a id="application"></a>
        <div class="application">
            <div class="container">
                <div class="row">
                    <h3>application</h3>
                    <div class="title">BLIND RIVETS SERIES</div>
                    <h6>Our products are mainly used in electrical appliances, computers, toys, watches, glasses,
                        instruments, furniture, automobiles, ships and other production areas.</h6>
                    <div class="list clearfix">
                        <?php  $_result=M("Case")->field("thumb,title,listorder,id")->where(" 1  AND status=1  AND catid=77")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="images col-lg-3 col-md-3 col-sm-6">
                                <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                <div class="top">
                                    <p><?php echo ($r["title"]); ?></p>
                                </div>
                            </div><?php endforeach; endif;?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- partner -->
    <div>
        <a id="partner"></a>
        <div class="partner">
            <div class="container">
                <div class="row">
                    <h3>our partner</h3>
                    <div class="title">The companies we work with</div>
                    <div class="list clearfix">
                        <?php  $_result=M("Partner")->field("thumb,title,listorder,id")->where(" 1  AND status=1  AND catid=111")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <a class="box-img"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></a>
                            </div><?php endforeach; endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- footer -->
<footer>
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="text col-lg-5 col-md-5">
                    <div class="footer-logo"><img src="/Public/www/images/footer-logo.png" alt=""></div>
                    <div class="copy"><?php echo ($cop); ?></div>
                    <ul>
                        <li><?php echo ($address); ?></li>
                        <li><?php echo ($phone); ?></li>
                        <li><?php echo ($guhuaa); ?></li>
                        <li><?php echo ($shouji); ?></li>
                        <li><?php echo ($shoujia); ?></li>
                        <li><?php echo ($email); ?></li>
                        <li><?php echo ($emailb); ?></li>
                        <li><?php echo ($domestic_fax); ?></li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-7">
                    <form class="clearfix" method="post" action="index.php?g=Home&a=message"
                        onsubmit="return beforeSubmit2(this);">

                        <div class="box clearfix">
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <p>Name <span> *</span></p>
                                <input type="text" name="name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <p>E-mail <span> *</span></p>
                                <input type="text" name="email">
                            </div>
                        </div>
                        <div class="box clearfix">
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <p>Company <span> *</span></p>
                                <input type="text" name="com">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <p>Country <span> *</span></p>
                                <select name="country">
                                    <option value="">Select a Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
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
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                    </option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burma">Burma</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Central African Republic">Central African Republic
                                    </option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo, Democratic Republic">Congo, Democratic
                                        Republic
                                    </option>
                                    <option value="Congo, Republic of the">Congo, Republic of the
                                    </option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, North">Korea, North</option>
                                    <option value="Korea, South">Korea, South</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome">Sao Tome</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="box clearfix">
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <p>Phone Number</p>
                                <input type="text" name="phone">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <p>Whats App</p>
                                <input type="text" name="whatsapp">
                            </div>
                        </div>
                        <div class="box clearfix">
                            <div class="col-lg-6 col-md-6">
                                <p>Consulting Information <span> *</span></p>
                                <textarea name="message"></textarea>
                            </div>

                        </div>
                        <input type="submit" value="Send" class="footer-sub">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="goTop">
        <i class="topIcon"></i>
        <p>TOP</p>
    </div>
</footer>
</body>

</html>