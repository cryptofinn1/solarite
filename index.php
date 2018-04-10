<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Solarite</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap & Jquery -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<link rel="stylesheet" type="text/css" href="jquery.flipcountdown.css" />
<link href="timeline.css" rel="stylesheet" type="text/css" />
<link href="magnific-popup.css" rel="stylesheet">
<link href="sidemenu.css" rel="stylesheet">
<link href="media-queries.css" rel="stylesheet">
<script src="js/jquery.magnific-popup.min.js"></script>

<style>
.white-popup {
	position: relative;
	background: #81ccba;
	width: auto;
	max-width: 750px;
	margin: 25px auto;
	padding: 50px 25px;
}

.white-popup ul li {
	margin: 5px 0;
}
.mfp-bg {
	background: #000;
}
.mfp-close-btn-in .mfp-close {
	color: #555555;
}
.mfp-close {
	font-size: 36px;
}
.team-popup {
	padding:0px;
	background:none;
}
.team-title {
	background: #81ccba;
	padding:25px;
}
.team-title h1, .team-title h2 {color:#555555;}
.team-info {
	background:#fff;
	padding:25px;
}

/* nav */

          .toggle,
          [id^=drop] {
            display: none;
          }

          .nav-dropdown {
            font-weight: normal;
          }

          @media all and (max-width: 768px) {

            label.toggle+a {
              display: none;
            }

            .toggle {
              display: block;
            }

            [id^=drop]:checked+div.drop-content {
              display: block;
            }
          }

          div.drop-content {
            display: none;
            background-color: #39525C;
            width: 100%;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            color: #fff;
            text-transform: uppercase;
          }

          .drop-content>p>a {
            display: block;
            padding: 15px 20px;
          }

          .drop-content>p>a:focus,
          .drop-content>p>a:hover {
            color: #00dab0;
          }

          /* nav */

</style>


<!-- Countdown -->
<script type="text/javascript" src="js/jquery.flipcountdown.js"></script>
<script src="https://use.typekit.net/bkt6ydm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<!-- Add sidemenu -->
<script>
(function($){
	// Menu Functions
	$(document).ready(function(){
  	$('#menuToggle').click(function(e){
    	var $parent = $(this).parent('nav');
      $parent.toggleClass("open");
      var navState = $parent.hasClass('open') ? "hide" : "show";
      $(this).attr("title", navState + " navigation");
			// Set the timeout to the animation length in the CSS.
			setTimeout(function(){
				console.log("timeout set");
				$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
			}, 200);
    	e.preventDefault();
  	});
  });
})(jQuery);

</script>

 <script>

          function closeSidebar(e) {
            var obj = event.target;
            var $parent = $('nav');
            $parent.toggleClass("open");
            var navState = $parent.hasClass('open') ? "hide" : "show";
            $(obj).attr("title", navState + " navigation");
            setTimeout(function () {
              $('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
            }, 200);
          }

   </script>

</head>

<body>

<!------------ Navigation start ------------>
<div id="header">
  <div class="container"> <span class="logo"><a href="#featured">
    <div id="logo"></div>
    </a></span>
    <ul id="menu">
      <li><a href="#featured">Home</a></li>
      <li>
        <div class="dropdown">
          <a href="">About Solarite &nbsp;<i class="fa fa-chevron-down"></i></a>
          <div class="dropdown-content">
            <p><a href="#challenges">Challenges</a></p>
            <p><a href="#technologies">Technologies</a></p>
            <p><a href="#visionmission">Vision & Mission</a></p>
          </div>
        </div>      
      </li>
      <li>
        <div class="dropdown">
          <a href="">Proof of Power &nbsp;<i class="fa fa-chevron-down"></i></a>
          <div class="dropdown-content">
            <p><a href="#power">Proof of Power Concept</a></p>
            <p><a href="#tokeneco">Token Ecosystem</a></p>
            <p><a href="#roadmap">Roadmap</a></p>
            <p><a href="#team">The Solarite Team</a></p>
            <p><a href="#partners">Partners & Accelerator Program</a></p>
          </div>
        </div>      
      </li>
      <li>
        <div class="dropdown">
          <a href="">Token Generation &nbsp;<i class="fa fa-chevron-down"></i></a>
          <div class="dropdown-content">
            <p><a href="#crypto">Cryptocurrency</a></p>
            <p><a href="#tokens">Token Sale</a></p>
            <p><a href="#funds">Usage of Funds</a></p>
          </div>
        </div>      
      </li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <nav>
        <a href="" id="menuToggle" title="show menu">
          <span class="navClosed"></span>
        </a>

        <a href="#featured" id="featuredToggle">Home</a>

        <label for="drop-1" href="#" class="nav-dropdown toggle">About
          <i class="fa fa-chevron-down"></i>
        </label>
        <a href="#">About</a>
        <input type="checkbox" id="drop-1" />
        <div class="drop-content">
          <p>
            <a href="#challenges"  onclick="closeSidebar(this)">Challenges</a>
          </p>
          <p>
            <a href="#technologies"  onclick="closeSidebar(this)">Technologies</a>
          </p>
          <p>
            <a href="#visionmission"  onclick="closeSidebar(this)">Vision & Mission</a>
          </p>
        </div>
        <label for="drop-2" href="#" class="nav-dropdown toggle">Proof of Power
          <i class="fa fa-chevron-down"></i>
        </label>
        <a href="#">Proof of Power</a>
        <input type="checkbox" id="drop-2" />
        <div class="drop-content">
          <p>
            <a href="#power" onclick="closeSidebar(this)">Challenges</a>
          </p>
          <p>
            <a href="#tokeneco" onclick="closeSidebar(this)">Token Ecosystem</a>
          </p>
          <p>
            <a href="#roadmap" onclick="closeSidebar(this)">Roadmap</a>
          </p>
          <p>
            <a href="#team" onclick="closeSidebar(this)">The Solarite Team</a>
          </p>
          <p>
            <a href="#partners" onclick="closeSidebar(this)">Partners & Accelerator Program</a>
          </p>
        </div>
        <label for="drop-3" href="#" class="nav-dropdown toggle">Token Generation
          <i class="fa fa-chevron-down"></i>
        </label>
        <a href="#">Token Generation</a>
        <input type="checkbox" id="drop-3" />
        <div class="drop-content">
          <p>
            <a href="#crypto" onclick="closeSidebar(this)">Cryptocurrency</a>
          </p>
          <p>
            <a href="#tokens" onclick="closeSidebar(this)">Token Sale</a>
          </p>
          <p>
            <a href="#funds" onclick="closeSidebar(this)">Usage of Funds</a>
          </p>
        </div>
        <a href="#contact" id="contactToggle" onclick="closeSidebar(this)">Contact</a>
      </nav>
  </div>
</div>
<!------------ Navigation end ------------>

<!------------ Home banner start ------------>

<section id="featured">
  <div class="content">
    <div class="content-container">
    <h1>First Truly Green, Proof of Power Cryptocurrency</h1>
    <br>
    <br>
    <h2>Presale Starting In</h2>
    <br>
    <div id="countdown"></div>
    <br>
    <ul class="countdown">
      <li class="days">
        <h2>Days</h2>
      </li>
      <li class="hrs">
        <h2>Hrs</h2>
      </li>
      <li class="mins">
        <h2>Min</h2>
      </li>
      <li class="sec">
        <h2>Sec</h2>
      </li>
    </ul>
    <br>
    <br>
    <ul class="content-btn">
      <li><a href="#participateform" class="btn">Participate</a></li>
      <li><a href="" target="_blank" class="btn green-btn">Whitepaper</a></li>
    </ul>
    </div>
  </div>
</section>
<!------------ Home banner end ------------>

<!------------ About ------------>
<section id="challenges">
  <div class="container">
  <div class="row">
    <div class="col-md-4 v-pad" style="text-align:center;"><img src="img/graphic-about.png" alt=""></div>
    <div class="col-md-8 v-pad">
      <h1>Challenges with Conventional Photovoltaic Systems</h1>
      <br>
      <p>Solar panels are set up on rooftops of houses and buildings while solar farm spring up across the continents to absorb sunlight and convert them into electrical energy. Currently, solar panel has long breakeven period of 4 years to 10 years while e ciency is in the range of 8 to 17 percent only. Solar panels tend to have low reliability in harsher environments and this shortens the usable lifespan of solar module. Less reliable solar module produces negative net clean energy which produces more harm than good for the environment.</p>
      <br>
      <p>Some companies attempted to use Low Concentrated Photovoltaic (LCPV) and High Concentration Photovoltaic (HCPV) to overcome these problems However, concentrating sunlight at using both methods produces high temperature on the solar module. In the case of LCPV, the temperature could reach around 150 deg celcius. At this temperature, the solar cell conversion e ciency reduces tremendously (1 deg raise in temperature on solar cell reduces the conversion e ciency by 0.5%). The high temperature also shortens the solar cell lifespan. The high temperature therefore discourages the use of both LCPV and HCPV in the solar industry despite its increased e ectiveness. The market is in need of a solar energy solution that achieves the high e ciency despite high temperatures.</p>
    </div>
  </div>
  </div>
</section>
<!------------ About end ------------>

<!------------ Solutions ------------>
<section id="technologies">
  <div class="container">
    <div class="row">
      <div class="col-md-6 v-pad">
       <h1>Technologies</h1>
       <br>
       <p>Solarite increases the solar to electricity conversion effciency by between 28% to 36% as compared to solar to electricity conversion effciency of between 8% to 17% by conventional PV and enables a shorter investment breakeven period of 3 years as compared to the existing breakeven period of 4-10 years for conventional PV. Low Concentrated Photovoltaic (LCPV) concentrates sunlight at a concentration ratio of less than 100x using single or dual axis solar tracker with c-silicon or other solar cell.</p>
       <br>
       <p>On 24th May, 2017, the company filed a patent for Solar Module: Solarite – High Effciency Solar Module – Patent No. GB1708275.1.</p>
       <br>
       <br>
       <table>
            <tr valign="top">
              <th></th>
              <th>CONVENTIONAL PV</th>
              <th>SOLARITE</th>
            </tr>
            <tr>
              <td><span style="color:#5ea896"><b>Conversion Efficiency</b></span></td>
              <td>8 - 17%</td>
              <td>28 - 36%</td>
            </tr>
            <tr>
              <td><span style="color:#5ea896"><b>Investment Break <br>Even Period</b></span></td>
              <td>4 - 10 Years</td>
              <td>3 Years</td>
            </tr>
        </table>
      </div>
      <div class="col-md-6 v-pad" style="text-align:center;">
        <img src="img/graphic-solution.jpg" alt="">
        <div class="solution-desc">
          <i class="fa fa-check"></i> &nbsp;Replace Expensive solar cell with cheaper reflective mirrors
          <br>
          <i class="fa fa-check"></i> &nbsp;30x - 55x concentration 300-450 w/panel
        </div>
      </div>
    </div>
  </div>
</section>
<section class="solar-bg">
  <div class="container">
    <div class="solar-container">
      <h1>How Does Solarite Work?</h1>
      <br>
      <p>Heat causes reduction in solar cell conversion effciency and shortens solar cell life span. Solarite uses hot mirrors to remove infrared ray from the sunlight and allow visible lights to pass through. A vacuum acts as a heat buffer to prevent heat from hitting the solar cell via convection. Solarite uses much lesser solar cell with high reflective mirrors to produce more electricity.</p>
      <br>
      <br>
      <img src="img/graphic-howitworks.png" alt="">
      <br>
      <br>
      <div style="color:#98e6d2; text-transform:uppercase; font-size:13px; line-height:1.5;">
        <i class="fa fa-check"></i> &nbsp;Design enables use of smaller high efficiency solar cell
        <br>
        <i class="fa fa-check"></i> &nbsp;Replace expensive high efficiency solar cells with cheaper lens
      </div>
      <br>
      <br>
      <p>Solarite utilises a form of low concentration photovoltaic which concentrates sunlight at ~100x onto solar cells. The project is aimed at shortening the breakeven period while increasing solar cell effciency. Sunlight is reflected from the reflective mirror (primary concentrator) onto Solarite (secondary concentrator). Solarite concentrates sunlight onto strip of high effciency solar cell to achieve higher conversion of solar energy into electricity. Solarite uses single axis solar tracker which produces consistent energy output throughout the day.</p>
      <br>
      <br>
      <img src="img/graphic-chart.png" alt="">
      <br>
      <br>
      <p>In conventional standalone non-grid tie SPV System, solar cell account for 57% of the system cost. Solarite uses only small high effciency solar cell of at least 20% to 24% effciency and enhance them to 28% - 36% effciency. Solarite’s patented hot mirrors reduces the number of solar cell modules which takes up 57% of the cost of a LCPV while increasing conversion effciency. Reducing the carbon footprint and ensures positive net clean energy.</p>
    </div>
  </div>
</section>
<section id="visionmission" class="visionmission">
  <div class="container">
   <div class="solar-container" style="text-align:center;">
        <h1>Vision & Mission</h1>
        <br>
        <br>
        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit leo vel mi tempor egestas. Aliquam sed ex accumsan, lacinia nunc viverra, placerat augue. Nullam convallis commodo nulla, facilisis fermentum elit tempor quis. Nam vitae dictum eros eget.</h2>
        <br>
        <h2>Sed blandit leo vel mi tempor egestas. Aliquam sed ex accumsan, lacinia nunc viverra, placerat augue. Nullam convallis commodo nulla, facilisis fermentum elit tempor quis. Nam vitae dictum eros, eget hendrerit purus. Vivamus aliquet quam massa.</h2>
        
   </div>
  </div>
</section>
<!--<section style="background:#f0f6f4; text-align:center;">
  <div class="container">
    <h1>Media</h1>
    <br>
    <br>
    <div class="row">
      <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
        <div class="dummylogo">LOGO</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
        <div class="dummylogo">LOGO</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
        <div class="dummylogo">LOGO</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
        <div class="dummylogo">LOGO</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
        <div class="dummylogo">LOGO</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 v-pad">
        <div class="dummylogo">LOGO</div>
      </div>
    </div>
  </div>
</section>-->
<section id="power" class="solar-bg" style="text-align:left;">
  <div class="container">
    <div class="solar-container">
      <h1>Proof of Power</h1>
      <br>
      <p>Solarite will be equipping our solar farms with mining hardware. Each unit will consist of a photovoltaic system that is capable of generating enough electricity to power the Solarite Blockchain as well as have surplus energy generated back into the grid. Holders of TAPP Coins can stake their coins on these units to “power” these masternodes to generate TAPP Coins in exchange for their stake, generating power for Solarite to sell back to the grid.</p>
    </div>
  </div>
</section>
<section id="tokeneco">
  <div class="container">
    <div style="text-align:center;">
      <h1>Token Ecosystem</h1>
      <br>
      <p><b>The Solarite Platform is the Ecosystem that enables interoperability, by way of pre-purchased tokens, between the following 4 groups of market players:</b></p>
      </div>
      <br>
      <br>
      <div class="row">
      <div class="col-md-6 col-xs-12 v-pad">
        <div class="col-md-4 col-xs-3 v-pad" style="text-align:center;">
          <img src="img/icon-tappmarketplace.png" alt="">
        </div>
        <div class="col-md-8 col-xs-9 v-pad">
          <h2>TAPP Marketplace</h2>
          <br>
          <p>Solar farms will be built and managed by Solarite. They will be supplying electricity transmission directly or through a network of retailers in exchange for the receipt of TAPP Coins. They will also facilitate trading liquidity on exchanges by supplying TAPP Coins with supporting cryptocurrencies such as Bitcoin.</p>
        </div>
      </div>
      <div class="col-md-6 col-xs-12 v-pad">
        <div class="col-md-4 col-xs-3 v-pad" style="text-align:center;">
          <img src="img/icon-consumers.png" alt="">
        </div>
        <div class="col-md-8 col-xs-9 v-pad">
          <h2>Consumers</h2>
          <br>
          <p>This group consists of the day-to-day electricity consumers who wish to purchase the electricity generated by Solarite’s farms and attain cost savings in the electricity bills through Solarite’s breakthrough solar energy solutions.</p>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-6 col-xs-12 v-pad">
        <div class="col-md-4 col-xs-3 v-pad" style="text-align:center;">
          <img src="img/icon-coinholders.png" alt="">
        </div>
        <div class="col-md-8 col-xs-9 v-pad">
          <h2>Solarite Coin Holders</h2>
          <br>
          <p>This group consists of crypto-saavy consumers who stake their coins with Solarite.</p>
        </div>
      </div>
      <div class="col-md-6 col-xs-12 v-pad">
        <div class="col-md-4 col-xs-3 v-pad" style="text-align:center;">
          <img src="img/icon-resellers.png" alt="">
        </div>
        <div class="col-md-8 col-xs-9 v-pad">
          <h2>Resellers</h2>
          <br>
          <p>Third party resellers of Solarite’s electricity supply who can bypass potential transmission hurdles between Solarite and end consumers due to geographical or regulatory factors. </p>
        </div>
      </div>
      </div>
  </div>
</section>
<section style="background:#f0f6f4; text-align:center;">
  <div class="solar-container">
    <img src="img/graphic-token-ecosystem.png" alt="">
  </div>
</section>
<!------------ Solutions end ------------>

<!------------ Roadmap ------------>
<section id="roadmap">
  <div class="container">
    <h1 style="color:#fff;">Roadmap</h1>
    <br>
    <br>
    <br>
    <div class="example-centered">
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
        <ul class="timeline timeline-centered">
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker tokensale"></div>
            <div class="timeline-content">
              <h2 class="timeline-title">2015 Q3</h2>
              <p>Birth of Solarite Concept</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker tokensale"></div>
            <div class="timeline-content">
              <h2 class="timeline-title">2017 Q3</h2>
              <p>Testing of Solarite Prototype</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h2 class="timeline-title">2017 Q4</h2>
              <p>Presentation to Abu Dhabi Prince,<br>Shell IdeaRefinery, Partnership with A*STAR</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h2 class="timeline-title">2018 Q1</h2>
              <p>Partnerships with clean energy providers</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h2 class="timeline-title">2018 Q3</h2>
              <p>TAPP Market Place, Nova Tokens creation,<br>Token Swap to Proof of Power Blockchain</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <h2 class="timeline-title">2019 Q1</h2>
              <p>Completion of first solar farm</p>
            </div>
          </li>
          <!--<li class="timeline-item period">
                    <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="timeline-title">April 2016</h2>
                    </div>
                </li>-->
          
        </ul>
      </div>
    </div>
  </div>
</section>
<!------------ Roadmap end ------------>

<!------------ Team ------------>
<section id="team">
  <div class="container">
    <h1>The Solarite Team</h1>
    <br>
    <br>
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-6 v-pad team-col">
        <a href="#terrence" class="open-popup-link"><div class="team-thumb"><img src="img/team-terence.jpg" alt=""></div></a>
        <br>
        <br>
        <h2>Terrence Ong</h2>
        <p>CEO, Founder</p>
      </div></a>
      <div class="col-md-4 col-sm-4 col-xs-6 v-pad team-col">
        <a href="#julie" class="open-popup-link"><div class="team-thumb"><img src="img/team-julie.jpg" alt=""></div></a>
        <br>
        <br>
        <h2>Julie Ong</h2>
        <p>Finance/HR, Co-founder</p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 v-pad team-col">
        <a href="#andy" class="open-popup-link"><div class="team-thumb"><img src="img/team-andy.jpg" alt=""></div></a>
        <br>
        <br>
        <h2>Andy Ang</h2>
        <p>BD and Technical Director</p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 v-pad team-col">
        <a href="#joven" class="open-popup-link"><div class="team-thumb"><img src="img/team-joven.jpg" alt=""></div></a>
        <br>
        <br>
        <h2>Jovan Chiew</h2>
        <p>Head of Security Software Technology</p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 v-pad team-col">
        <a href="#chau" class="open-popup-link"><div class="team-thumb"><img src="img/team-chautran.jpg" alt=""></div></a>
        <br>
        <br>
        <h2>Chau Tran</h2>
        <p>Head of Advance Automation and Robotics</p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 v-pad team-col">
        <a href="#calvin" class="open-popup-link"><div class="team-thumb"><img src="img/team-calvin.jpg" alt=""></div></a>
        <br>
        <br>
        <h2>Calvin Ong</h2>
        <p>Business Development Manager</p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 v-pad team-col">
        <a href="#halbame" class="open-popup-link"><div class="team-thumb"><img src="img/team-halbame.jpg" alt=""></div></a>
        <br>
        <br>
        <h2>Hal Bame</h2>
        <p>Advisor</p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 v-pad team-col">
        <a href="#chris" class="open-popup-link"><div class="team-thumb"><img src="img/team-chrislow.jpg" alt=""></div></a>
        <br>
        <br>
        <h2>Christopher Low</h2>
        <p>Advisor</p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 v-pad team-col">
        <a href="#kineret" class="open-popup-link"><div class="team-thumb"><img src="img/team-kineret.jpg" alt=""></div></a>
        <br>
        <br>
        <h2>Kineret Karin</h2>
        <p>Advisor</p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 v-pad team-col">
        <a href="#yoav" class="open-popup-link"><div class="team-thumb"><img src="img/team-yoav.jpg" alt=""></div></a>
        <br>
        <br>
        <h2>Yoav Elgrichi</h2>
        <p>Advisor</p>
      </div>
    </div>
  </div>
</section>
<!------------ Team end ------------>

<section id="partners" style="background:#f0f6f4; text-align:center;">
  <div class="container">
    <h1>Partners & Accelerator Program</h1>
    <br>
    <br>
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
        <a href="#shell" class="open-popup-link"><div class="partner-logo"><img src="img/partners-shell.jpg" alt=""></div></a>
        <br>
        <p>Shell</p>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
        <a href="#astar" class="open-popup-link"><div class="partner-logo"><img src="img/partners-astar.jpg" alt=""></div></a>
        <br>
        <p>A*STAR</p>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
        <a href="#reddot" class="open-popup-link"><div class="partner-logo"><img src="img/partners-reddotpower.jpg" alt=""></div></a>
        <br>
        <p>Red Dot Power Pte Ltd</p>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
        <a href="#impactech" class="open-popup-link"><div class="partner-logo"><img src="img/partners-impactech.jpg" alt=""></div></a>
        <br>
        <p>ImpacTech</p>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
        <a href="#startup" class="open-popup-link"><div class="partner-logo"><img src="img/partners-startup-o.jpg" alt=""></div></a>
        <br>
        <p>Startup-O</p>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
        <a href="#schweiger" class="open-popup-link"><div class="partner-logo"><img src="img/partners-schweiger.jpg" alt=""></div></a>
        <br>
        <p>Schweiger & Partners</p>
      </div>
    </div>
  </div>
</section>
<section id="crypto" class="cloud-bg">
  <div class="container">
    <div class="row">
    <div class="col-md-6 v-pad" style="text-align:center;">
      <img src="img/graphic-tappnova-tappcoin.png" alt="">
    </div>
    <div class="col-md-6 v-pad">
      <h1>Cryptocurrency</h1>
      <br>
      <br>
      <h2 style="color:#555555;">TAPP COIN</h2>
      <br>
      <p>The Solarite Platform provides a transparent governance framework that allows the Ecosystem to seamlessly interface with energy markets around the globe, bringing innovation and a wide range of network bene ts to consumers and enabling all 4 groups of market players with market power in any transactive arrangement.</p>
      <br>
      <p>This approach also means the Ecosystem is adaptable and scalable for applications within any existing or future regulatory environment, achieving the dynamic agility required to adapt to any number of regulatory structures. The market  exibility of the Ecosystem is facilitated by deployment of a dual- token ecosystem (TappCoin and TappNova).</p>
      <br>
      <p>TappCoin tokens will initially be built on the ERC20 standard on the Ethereum Blockchain before the development of the Proof-of-Power blockchain. Upon the development of Proof of Power consensus algorithm for its blockchain, Solarite will conduct a token swap for all existing TAPP coin holders.</p>
      <br>
      <p>TappCoin tokens are issued against escrowed (USD Reserved) TappNova tokens, via a Smart Bond, and TappNova tokens used by the Producers and Prosumers to onboard its customers.</p>
      <br>
      <p>TappNova is pegged to the US dollar to ensure stability and only used within a closed loop system for settlement between TAPP Marketplace and its retailers.</p>
    </div>
    </div>
  </div>
</section>

<!------------ Participate start ------------>
<section id="participateform" style="background:#17765e;">
  <div class="container">
  <div class="participate-messages"></div>
  <form id='participate' class="ajax-participate" action='mailer.php' method='post' accept-charset='UTF-8'>
    <input type='hidden' name='submitted' id='submitted' value='1'/>
      <input type="hidden" name="type" value="participate" />
    <div class="row">
      <div class="col-md-3 v-pad" style="padding-top:25px;">
        <h1 style="color:#fff;">Participate</h1>
      </div>
      <div class="col-md-3 v-pad">
          <input type='text' class="input-style" name='name' id='participate_name'  placeholder="YOUR NAME " />
      </div>
      <div class="col-md-3 v-pad">
          <input type='text' class="input-style" name='email' id='participate_email' placeholder="EMAIL ADDRESS" />
      </div>
      <div class="col-md-3 v-pad">
          <button type='submit' value='Submit'>WHITELIST</button>
      </div>
      <br>
      <!--<div class="col-md-12">
        <div class="clearfix">
          <select class="input-style" name="citizenship" id="participate_citizenship">
            <option>CITIZENSHIP</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antartica">Antarctica</option>
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
            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
            <option value="Botswana">Botswana</option>
            <option value="Bouvet Island">Bouvet Island</option>
            <option value="Brazil">Brazil</option>
            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
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
            <option value="Cocos Islands">Cocos (Keeling) Islands</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo">Congo</option>
            <option value="Congo">Congo, the Democratic Republic of the</option>
            <option value="Cook Islands">Cook Islands</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Cota D'Ivoire">Cote d'Ivoire</option>
            <option value="Croatia">Croatia (Hrvatska)</option>
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
            <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
            <option value="Faroe Islands">Faroe Islands</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="France Metropolitan">France, Metropolitan</option>
            <option value="French Guiana">French Guiana</option>
            <option value="French Polynesia">French Polynesia</option>
            <option value="French Southern Territories">French Southern Territories</option>
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
            <option value="Guinea">Guinea</option>
            <option value="Guinea-Bissau">Guinea-Bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
            <option value="Holy See">Holy See (Vatican City State)</option>
            <option value="Honduras">Honduras</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran">Iran (Islamic Republic of)</option>
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
            <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
            <option value="Korea">Korea, Republic of</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Lao">Lao People's Democratic Republic</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Macau">Macau</option>
            <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
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
            <option value="Micronesia">Micronesia, Federated States of</option>
            <option value="Moldova">Moldova, Republic of</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
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
            <option value="Russia">Russian Federation</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="Saint LUCIA">Saint LUCIA</option>
            <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
            <option value="Samoa">Samoa</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra">Sierra Leone</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia (Slovak Republic)</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Solomon Islands">Solomon Islands</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
            <option value="Span">Spain</option>
            <option value="SriLanka">Sri Lanka</option>
            <option value="St. Helena">St. Helena</option>
            <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
            <option value="Swaziland">Swaziland</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syria">Syrian Arab Republic</option>
            <option value="Taiwan">Taiwan, Province of China</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania">Tanzania, United Republic of</option>
            <option value="Thailand">Thailand</option>
            <option value="Togo">Togo</option>
            <option value="Tokelau">Tokelau</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
            <option value="Turks and Caicos">Turks and Caicos Islands</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States">United States</option>
            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Vietnam">Viet Nam</option>
            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
            <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
            <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
            <option value="Western Sahara">Western Sahara</option>
            <option value="Yemen">Yemen</option>
            <option value="Yugoslavia">Yugoslavia</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
          </select>
        </div>
      </div>
      
      <br>
      <div class="col-md-12" style="text-align:left;">
            <div class="clearfix" style="float:left; margin-right:20px; margin-top:4px;">I am an:</div>
            <div class="clearfix" style="float:left;">
              <input type="radio" name="position" id='participate_position' value='Investor' required />&nbsp; Investor<br>
              <input type="radio" name="position" id='participate_position' value='Gamer' required />&nbsp; Gamer<br>
              <input type="radio" name="position" id='participate_position' value='Developer' required />&nbsp; Developer
           </div>
           <div style="clear:both;"></div>
      </div>
      -->
    </div>
  </form>
 </div>
</section>
<!------------ Participate end ------------>

<!------------ Tokensale ------------>
<section id="tokens" class="tokensale">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Token Sale</h1>
        <br>
        <br>
        <table>
            <tr valign="top">
              <td style="border-top:1px solid #cee9e2;" class="token-table">TOKEN NAME</td>
              <td style="border-top:1px solid #cee9e2;">TAPP Tokens (TAPP)</td>
            </tr>
            <tr>
              <td class="token-table">Token Type</td>
              <td>ERC20</td>
            </tr>
            <tr>
              <td class="token-table">Token Supply</td>
              <td>560,000,000 TAPP Tokens</td>
            </tr>
            <tr>
              <td class="token-table">Tokens for Sale</td>
              <td>303,739,130.43 TAPP Tokens</td>
            </tr>
            <tr>
              <td class="token-table">Currency Accepted</td>
              <td>ETH</td>
            </tr>
            <tr>
              <td class="token-table">Pre-Sale Dates</td>
              <td>Revisit</td>
            </tr>
            <tr>
              <td class="token-table">Pre-Sale Bonus</td>
              <td>15%</td>
            </tr>
            <tr>
              <td class="token-table">Sale Dates</td>
              <td>Revisit</td>
            </tr>
            <tr>
              <td class="token-table">Sale Rates</td>
              <td>1 ETH = 9500 TAPP</td>
            </tr>
        </table>
      </div>
      <div class="col-md-6" style="padding-top:60px;">
        <p>To incentivise the team, Solarite will be keeping 40% of all TAPP Tokens generated, or a maximum of 224,000,000 TAPP Tokens, whichever is lower, generated at the end of the Token Generation Event (TGE).</p>
        <br>
        <p>Tokens not sold in the sale pool will be burnt. the total supply will be capped at 560,000,000 TAPP Tokens after the token sale. TAPP will not be minable until the proof of power private blockchain is live, of which we will be perform a token swap for all TAPP Token holders.</p>
        <br>
        <p>Participation in the Public Sale shall be limited to natural persons, and each wallet which has been cleared pursuant to Know-Your-Customer (KYC) checks. KYC checks include proof of identity and residence.</p>
      </div>
    </div>
  </div>
  <div class="graphic-tokensale"><img src="img/graphic-tokensale.png" alt=""></div>
</section>
<!------------ Tokensale end ------------>

<section id="funds" class="solar-bg">
  <div class="container">
    <div class="solar-container">
      <h1>Usage of Funds</h1>
      <br>
      <p>Majority of the proceeds will be used for the building of a utility scale solar farm for the proof of power concept. Equiped with smart meters and micro grid infrastructure leveraging on blockchain technology.</p>
      <br>
      <p>Our proprietary Proof of Power blockchain will be developed as we raise the funds from this TGE, once this private blockchain is live, we will be conducting a token swap for all TAPP Token holders to convert their ERC20 token to the Proof of Power blockchain.</p>
      <br>
      <br>
      <br>
      <img src="img/usageoffunds-chart.png" alt="">
    </div>
  </div>
</section>

<!------------ Contact ------------>
<section id="contact" class="cloud-bg contact-bg">
  <div class="container">
    <h1>Contact Us</h1>
    <br>
    <br>
    <div class="mail-icon"><i class="fa fa-envelope-o"></i></div>
    <br>
    <br>
    <h2>Road ABC Street #01-02,</h2>
    <h2>Singapore 123456</h2>
    <p><a href="" target="_blank" style="color:#81ccba;">View on Google Maps</a></p>
    <br>
    <br>
    <h2>tokensale@solarite.com</h2>
    <br>
    <br>
    <br>
    <div class="contact-form">
      <div class="contact-messages"></div>
      <form id='contactus' class="ajax-contact" action='mailer.php' method='post' accept-charset='UTF-8'>
        <input type='hidden' name='submitted' id='submitted' value='1'/>
        <input type="hidden" name="type" value="contact" />
        <div class="clearfix">
          <input type='text' class="input-style" name='name' id='contact_name' placeholder="Your Name *" />
        </div>
        <div class="clearfix">
          <input type='text' class="input-style" name='email' id='contact_email' placeholder="Email Address*" />
        </div>
        <div class="clearfix">
          <input type='text' class="input-style" name='phone' id='contact_phone' placeholder="Contact Number" />
        </div>
        <div class="clearfix">
          <textarea rows="10" cols="50" class="input-style" name='message' id='contact_message' placeholder="Your Message *"/></textarea>
        </div>
        <!--<div class="clearfix" style="float:left; margin-right:20px; margin-top:4px;">I am an:</div>
        <div class="clearfix" style="float:left; text-align:left">
          <input type="radio" name="position" id='contact_position' value='investor' required />&nbsp; Investor<br>
          <input type="radio" name="position" id='contact_position' value='gamer' required />&nbsp; Gamer<br>
          <input type="radio" name="position" id='contact_position' value='developer' required />&nbsp; Developer
        </div>-->
        <div style="clear:both;"></div>
        <br>
        <br>
        <div style="display:inline-block;">
                <button type='submit' value='Submit'>SUBMIT</button>
              </div>
      </form>
    </div>
  </div>
</section>
<!------------ Contact end ------------>

<div class="social-links">
  <div class="container">
    <ul class="social">
      <li><a href="https://www.facebook.com/cloudmoolah/" target="_blank">
        <div class="social-icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
        </a></li>
      <li><a href="https://t.me/cloudmoolah" target="_blank">
        <div class="social-icon"><i class="fa fa-send" aria-hidden="true"></i></div>
        </a></li>
      <li><a href="https://www.reddit.com/r/CloudMoolah/" target="_blank">
        <div class="social-icon"><i class="fa fa-reddit-alien" aria-hidden="true"></i></div>
        </a></li>
      <li><a href="https://twitter.com/cloud_moolah" target="_blank">
        <div class="social-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
        </a></li>
      <li><a href="https://bitcointalk.org/index.php?topic=2819734.new#new" target="_blank">
        <div class="social-icon"><i class="fa fa-bitcoin" aria-hidden="true"></i></div>
        </a></li>
      <li><a href="https://medium.com/@cloudmoolah" target="_blank">
        <div class="social-icon"><i class="fa fa-medium" aria-hidden="true"></i></div>
        </a></li>
    </ul>
  </div>
</div>

<div class="footer">
  <div class="container">
    © 2018 Solarite. All rights reserved.
    <br><br>
    <a href="">Terms of Use</a> &nbsp;I &nbsp;<a href="">Privacy Policy</a>
  </div>
</div>

<!---------- Team popup start------------>

<div id="terrence" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Terrence Ong</h1>
    <h2>CEO, Founder</h2>
  </div>
  <div class="team-info">
    <p>Inventor, Serial Entrepreneur, Founder of 7 Corporation PL, Laser Logic International PL, Alpha Digital (Holdings) PL, TAPP (Holdings) Pte. Ltd. & Solarite  Ltd. <br>
Diploma in Mechanical & Manufacturing Technology<br>
Diploma in Business Administration</p>
    <br>
    <br>
    <a href="#" target="_blank"><span style="color:#00dab0;"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> &nbsp;LinkedIn</span></a>
  </div>
</div>

<div id="julie" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Julie Ong</h1>
    <h2>Finance/HR, Co-founder</h2>
  </div>
  <div class="team-info">
    <p>Her background is business management , Julie has many years of experience in production planning in the semiconductor and disk drive industry. </p>
    <br>
    <p>A serial entrepreneur for more than 15 years . Her expertise is in the area of chemical and ultra violet related products mainly in the optical media industry.</p>
    <br>
    <p>She also co-founded 7 Corporation Pte Ltd , Alpha Digital Holdings , Laser Logic (International) PL & Solarite Ltd.</p>
    <br>
    <br>
    <a href="#" target="_blank"><span style="color:#00dab0;"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> &nbsp;LinkedIn</span></a>
  </div>
</div>

<div id="andy" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Andy Ang</h1>
    <h2>Business Development and Technical Director in PV Utilities Scale</h2>
  </div>
  <div class="team-info">
    <p>20 years of industry experience in Solar PV, Solar powered products<br>
On grid /off grid systems and Design, calculation, integration, engineering, commissioning and maintenance of PV systems. </p>
    <br>
    <br>
    <a href="#" target="_blank"><span style="color:#00dab0;"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> &nbsp;LinkedIn</span></a>
  </div>
</div>

<div id="joven" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Joven Chiew</h1>
    <h2>Head of Security Software Technology</h2>
  </div>
  <div class="team-info">
    <p>CTO - Triumph-Secure Singapore Pte. Ltd. <br>
20 year IT/Security Expertise
 </p>
    <br>
    <br>
    <a href="#" target="_blank"><span style="color:#00dab0;"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> &nbsp;LinkedIn</span></a>
  </div>
</div>

<div id="chau" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Chau Tran</h1>
    <h2>Head of Advance Automation and Robotics</h2>
  </div>
  <div class="team-info">
    <p>Over 25 years in semiconductor industry and High Tech related.<br>
 Positions in the industry<br>
VP of Service at Global equipment services<br>
President at Vector Fab<br>
GM-Vietnam at AG<br>
VP of Business Development.
 </p>
    <br>
    <br>
    <a href="#" target="_blank"><span style="color:#00dab0;"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> &nbsp;LinkedIn</span></a>
  </div>
</div>

<div id="calvin" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Calvin Ong</h1>
    <h2>Business Development</h2>
  </div>
  <div class="team-info">
    <p>Co-Founder - 7 Corporation Pte. Ltd. <br>
15 years in Industrial Sales & 12 years in Civil Engineering<br>
Diploma In Civil Engineering
 </p>
    <br>
    <br>
    <a href="#" target="_blank"><span style="color:#00dab0;"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> &nbsp;LinkedIn</span></a>
  </div>
</div>

<div id="halbame" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Hal Bame</h1>
    <h2>Advisor</h2>
  </div>
  <div class="team-info">
    <p>Hal has over 15 yrs of games and digital experience, having lived and worked across the globe.  Hal is a co-founder with iProdoos and SmartChain Media, a new Blockchain-based streaming video platform and advises several US & Asia-based companies incorporating Blockchain technology.  He previously held senior management roles for Sony (PlayStation), expanding / managing the business in Eastern Europe and Codemasters, overseeing international / emerging markets, managing and expanding game franchises such as Formula One. Hal also worked with ESL (the world’s leading esports company), as Managing Director for Southeast Asia, Hong Kong, Taiwan and Macau, as well as co-founder for Nemesis, a casual games esports platform, focusing on Southeast Asia and other emerging markets.</p>
    <br>
    <br>
    <a href="#" target="_blank"><span style="color:#00dab0;"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> &nbsp;LinkedIn</span></a>
  </div>
</div>

<div id="chris" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Chris Low</h1>
    <h2>Advisor</h2>
  </div>
  <div class="team-info">
    <p>A seasoned technoprenuer. Was successful in Pendulab his first start-up of a web based collaboration solution, that became part of acquisition of a leading private equity firm in US. Had built incredible sales enterprise garnering worldwide customers, many being clientele in the Fortune 500. Founder of Viwawa, a SE Asia largest multiplayer game platform and SoftPay Mobile the largest Mobile Point of Sales company in Vietnam. Currently , serving as Global Head of Sales and Business Dev. Director of MC Payment , SE Asia leading fintech company.</p>
    <br>
    <br>
    <a href="#" target="_blank"><span style="color:#00dab0;"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> &nbsp;LinkedIn</span></a>
  </div>
</div>

<div id="kineret" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Kineret Karin</h1>
    <h2>Advisor</h2>
  </div>
  <div class="team-info">
    <p>She is a serial entrepreneur who successfully founded, managed and sold a company to Rocket Internet. She has over 20 years of business and leadership experience in database analysis, market research and big data. She is a reputable global thought leader in the social tech domain and holds an MA in Statistics.</p>
    <br>
    <br>
    <a href="#" target="_blank"><span style="color:#00dab0;"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> &nbsp;LinkedIn</span></a>
  </div>
</div>

<div id="yoav" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Yoav Elgrichi</h1>
    <h2>Advisor</h2>
  </div>
  <div class="team-info">
    <p>He is a serial entrepreneur that successfully built and sold several companies, among his achievements, selling his startup  to Rocket Internet and plays a key role in listing a company in the SGX. A mentor  at  the Singapore  Management University,  inventor of patents in the NFC and wearable devices domains.  Yoav holds an MBA.</p>
    <br>
    <br>
    <a href="#" target="_blank"><span style="color:#00dab0;"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> &nbsp;LinkedIn</span></a>
  </div>
</div>

<!---------- Team popup end------------>

<!---------- Partner popup start------------>

<div id="shell" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Shell</h1>
  </div>
  <div class="team-info">
    <p>Shell is looking to mentor energy start-ups that have actionable ideas, technologies and innovations. Shell #IdeaRefinery, a programme by Shell, ImpacTech and NUS Enterprise, is a 20-week accelerator programme focused on developing early stage energy-related startups into full-fledged startups that can raise capital and scale into successful businesses.</p>
    <br>
    <br>
    <div style="float:right;">
      <a class="btn">Visit Website</a>
    </div>
    <br>
    <div style="clear:both;"></div>
  </div>
</div>

<div id="astar" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>A * Star</h1>
  </div>
  <div class="team-info">
    <p>A*STAR's Institute of Materials Research and Engineering (IMRE) is a research institute with a unique combination of R&D capabilities, commercial partnerships and strategic alliances. Comprehensive materials-related solutions for global and local partners are developed here at IMRE. IMRE has the expertise in materials research and engineering, ranging from consultancy and testing services to joint research and development programmes, to serve the diverse needs of industry.</p>
    <br>
    <br>
    <div style="float:right;">
      <a class="btn">Visit Website</a>
    </div>
    <br>
    <div style="clear:both;"></div>
  </div>
</div>

<div id="reddot" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Red Dot Power Pte Ltd </h1>
  </div>
  <div class="team-info">
    <p>Red Dot Power Pte Ltd (RDP) is a homegrown Singapore energy solutions provider. A pioneer and leading player in the National Electricity Market of Singapore (NEMS), Red Dot Power has been at the forefront of the electricity retail scene since the entry of independent electricity retailers. Primarily offering electricity retail services, we also offer Demand Management and Interruptible Load solutions, efficient grid and off-grid options, storage applications, urban energy solutions and solar projects.</p>
    <br>
    <br>
    <div style="float:right;">
      <a class="btn">Visit Website</a>
    </div>
    <br>
    <div style="clear:both;"></div>
  </div>
</div>

<div id="impactech" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>ImpacTech</h1>
  </div>
  <div class="team-info">
    <p>ImpacTech is a business consulting company that empowers impact driven technology companies and startups by offering customized acceleration programs and unique practical workshops. The company’s HQ is in Singapore and is operating in Thailand and Japan. In 2018 ImpacTech will expand to other countries in Asia.</p>
    <br>
    <br>
    <div style="float:right;">
      <a class="btn">Visit Website</a>
    </div>
    <br>
    <div style="clear:both;"></div>
  </div>
</div>

<div id="startup" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Startup-O</h1>
  </div>
  <div class="team-info">
    <p>Startup-O is a Singapore-based platform that curates promising startups from any location and provides them with Strategic Seed Capital & connects with Global Experts fast. The platform is created by entrepreneurs for entrepreneurs who believe in going the extra mile. Startup-O works in collaboration with Javelin Wealth Management &  IP Bridge.</p>
    <br>
    <p>Solarite is selected into the cohort among 660 startups submission from 32 countries in Startup-O ‘Fasttrack’ Season 5.</p>
    <br>
    <br>
    <div style="float:right;">
      <a class="btn">Visit Website</a>
    </div>
    <br>
    <div style="clear:both;"></div>
  </div>
</div>

<div id="schweiger" class="white-popup team-popup mfp-hide sans">
  <div class="team-title">
    <h1>Schweiger & Partners</h1>
  </div>
  <div class="team-info">
    <p>Schweiger & Partners focuses on Intellectual Property and on related commercial law matters in Europe and in Asia. The firm specialised in the area of Intellectual Property or a patent or trademark department of a larger company. Singapore and Munich are the gateway to our IP services in Europe, fostering our business and networks in Asia and the Americas.</p>
    <br>
    <br>
    <div style="float:right;">
      <a class="btn">Visit Website</a>
    </div>
    <br>
    <div style="clear:both;"></div>
  </div>
</div>

<!---------- Partner popup end------------>

<script>
$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("#header")[addRemClass]('bgChange');
});
</script>

<!-- Add smooth transition menu --> 
<script>
$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 1000);
			return false;
		  }
		}
	  });
	});
</script> 

<!-- Add countdown --> 

<script>
	jQuery(function($){
		//var NY = Math.round((new Date('1/01/2015 00:00:01')).getTime()/1000);
		$('#countdown').flipcountdown({
			size:'md',
			beforeDateTime:'2/13/2018 18:00:01'
			/*tick:function(){
				var nol = function(h){
					return h>9?h:'0'+h;
				}
				var	range  	= NY-Math.round((new Date()).getTime()/1000),
					secday = 86400, sechour = 3600,
					days 	= parseInt(range/secday),
					hours	= parseInt((range%secday)/sechour),
					min		= parseInt(((range%secday)%sechour)/60),
					sec		= ((range%secday)%sechour)%60;
				return nol(days)+' '+nol(hours)+' '+nol(min)+' '+nol(sec);
			}*/
		});
	});
	
</script>

<!-- Add magnifique popup --> 
<script>
    $(document).ready(function () {
        $('.open-popup-link').magnificPopup({
            type:'inline',
            midClick: true,
            mainClass: 'mfp-fade' // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.

        });

        // ajax form
        // notify
        var notifyForm = $('.ajax-participate');

        // Get the messages div.
        var notifyMessages = $('.participate-messages');

        // Set up an event listener for the contact form.
        $(notifyForm).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(notifyForm).serialize();

            // Submit the form using AJAX.
            $.ajax({
                    type: 'POST',
                    url: $(notifyForm).attr('action'),
                    data: formData
                })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    $(notifyMessages).removeClass('alert alert-danger');
                    $(notifyMessages).addClass('alert alert-info');

                    // Set the message text.
                    $(notifyMessages).text(response);

                    // Clear the form.
                    $('#participate_name').val('');
                    $('#participate_email').val('');
					

                })
                .fail(function(data) {
                    // Make sure that the notifyMessages div has the 'error' class.
                    $(notifyMessages).removeClass('alert alert-info');
                    $(notifyMessages).addClass('alert alert-danger');

                    // Set the message text.
                    if (data.responseText !== '') {
                        $(notifyMessages).text(data.responseText);
                    } else {
                        $(notifyMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });
        });

        // Contact Us
        var contactForm = $('.ajax-contact');

        // Get the messages div.
        var contactMessages = $('.contact-messages');

        // Set up an event listener for the contact form.
        $(contactForm).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(contactForm).serialize();
            console.log(formData);
            // Submit the form using AJAX.
            $.ajax({
                    type: 'POST',
                    url: $(contactForm).attr('action'),
                    data: formData
                })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    $(contactMessages).removeClass('alert alert-danger');
                    $(contactMessages).addClass('alert alert-info');

                    // Set the message text.
                    $(contactMessages).text(response);

                    // Clear the form.
                    $('#contact_name').val('');
                    $('#contact_email').val('');                    
                    $('#contact_message').val('');
					$('#contact_position').val('');
                })
                .fail(function(data) {
                    // Make sure that the contactMessages div has the 'error' class.
                    $(contactMessages).removeClass('alert alert-info');
                    $(contactMessages).addClass('alert alert-danger');

                    // Set the message text.
                    if (data.responseText !== '') {
                        $(contactMessages).text(data.responseText);
                    } else {
                        $(contactMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });
        });
    });
</script> 

<script>
(function(d){d.each(["backgroundColor","borderBottomColor","borderLeftColor","borderRightColor","borderTopColor","color","outlineColor"],function(f,e){d.fx.step[e]=function(g){if(!g.colorInit){g.start=c(g.elem,e);g.end=b(g.end);g.colorInit=true}g.elem.style[e]="rgb("+[Math.max(Math.min(parseInt((g.pos*(g.end[0]-g.start[0]))+g.start[0]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[1]-g.start[1]))+g.start[1]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[2]-g.start[2]))+g.start[2]),255),0)].join(",")+")"}});function b(f){var e;if(f&&f.constructor==Array&&f.length==3){return f}if(e=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(f)){return[parseInt(e[1]),parseInt(e[2]),parseInt(e[3])]}if(e=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(f)){return[parseFloat(e[1])*2.55,parseFloat(e[2])*2.55,parseFloat(e[3])*2.55]}if(e=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(f)){return[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16)]}if(e=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(f)){return[parseInt(e[1]+e[1],16),parseInt(e[2]+e[2],16),parseInt(e[3]+e[3],16)]}if(e=/rgba\(0, 0, 0, 0\)/.exec(f)){return a.transparent}return a[d.trim(f).toLowerCase()]}function c(g,e){var f;do{f=d.css(g,e);if(f!=""&&f!="transparent"||d.nodeName(g,"body")){break}e="backgroundColor"}while(g=g.parentNode);return b(f)}var a={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]}})(jQuery);
</script>
</body>
</html>
