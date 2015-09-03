<?php
/*
 *  Template Name: Freemium Result Template
 * Description: To display the result of freemium calculations.
 */
require ABSPATH . 'CI_config.php';
require ABSPATH . 'pp_config.php';
require ABSPATH .'/wp-content/themes/twentyeleven/freemium_calculations.php';
get_header();

$wf_session = WP_Session::get_instance();
//Extracting session values into array $freemium
$freemium = array(
		'state_id' 			=> 	$wf_session['state_id'],
		'system_size' 		=>	$wf_session['system_size'],
		'installation_year' => 	$wf_session['installation_year'],
		'financing_id' 		=> 	$wf_session['financing_id'],
		'system_prodn' 		=> 	$wf_session['system_prodn']		
) ;

$conservativeProfit = base64_decode($_GET['conservative']);
$aggressiveProfit = base64_decode($_GET['aggressive']);
//Rounding the profit to nearest thousand
$conservativeNetprofit = number_format(round($conservativeProfit,-2));
$aggressiveNetProfit = number_format(round($aggressiveProfit, -2));

?>
<div class="banner-wrap set-banner-wrap" style="border: none;border-bottom: 5px solid #ddd !important">
        <div class="frame">
            <h3 class="inner-heading"style="padding:0"></h3>
        </div>
</div>
<div class="frame">
        <div id="primary">
            <div id="content" role="main">
                <div class="entry-content">
                    <div class="frame-wrap water-mark">
                        <div class="unverified">Unverified</div>
                    </div>
                    <div class="frame-wrap successful-page">
                        <div id="done-img-wrapper">
                        <img src="/wp-content/themes/twentyeleven/images/Success-icon.png" id="done-img">
                        </div>
                        <div id="done-content-wrapper">
                            <div class="rating-description"><h2>Congratulations</h2></div>
                            <div class="rating-value-text"><h1>Your system has value:</h1></div>
                            <div class="not-for-promotion"><span>Unverified rating<br>Not to be used for promotion</span><span>Unverified rating<br>Not to be used for promotion</span></div>
                            <div class="rating-value"><h1><?php echo "$".$conservativeNetprofit. " - $" .$aggressiveNetProfit; ?></h1></div>
                            <div class="rating-value-text"><h1>in system earnings +</h1></div>
                            <div class="rating-value-text"><h1>environmental benefits</h1></div>
                            <div class="rating-year"><h1>Over 15 years</h1></div>
                        </div>
                        <div class="full-width-align3"></div>
                        <div class="rating-promotion">
                            <div class="rating-promo1">Now Get Verified to Promote Your Home!</div>
                            <!-- <div class="rating-promo2">Upload confirmation docs<img src="/wp-content/themes/twentyeleven/images/information.png" class="rating-tooltip" title=""><span class="text-left-align">and pay</span><img src="/wp-content/themes/twentyeleven/images/information.png" class="rating-tooltip" title=""><span class="text-left-align">to download your home rating label and marketing labels.</span><img src="/wp-content/themes/twentyeleven/images/information.png" class="rating-tooltip" title=""></div> -->
                            <div class="rating-promo2">Upload confirmation <a href="/documents-required">docs</a> and <a href="/what-you-get">pay</a> to download your home rating label and <a href="/what-you-get">marketing labels</a>.</div>
                            <div class="rating-promo3">Differentiate. Sell Faster. Capture More Values.</div>
                            <div id="get-verified-link"><a href="/easy-home-rater">Get Verified</a></div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
</div>