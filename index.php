<?php
	include('head.php');
	include('header.php');
?>

<!--
<script>

$(document).ready(function(){
		

		if($(window).height()=="768"){
			$("#titleEasy").css("margin-top","190px");
		}

 var $allDivs = $(".review-txt-box");
  var counter = 0;
  var intPage = 2;
  var pagesize = 5;
  
  $(".first-start-bx").click(function(){
	  $("#next").show();
  });
  
  $(".bar-stars-bx").click(function(){
	  $("#next").hide();
	  $("#prev").hide();
  });
  
  $("#first-start-bx").click(function(){
  	counter = 0;
	intPage = 2;
	pagesize = 5;
	
  	$("[id*='review_']").hide();

	$("#prev").css("cursor","pointer");
	$("#next").css("cursor","pointer");
	
	$("#prev").hide();
	
	for(i=counter;i<=(eval(counter+1)*eval(pagesize));i++)
	{
		$("#review_" + eval(i)).show();
	}
  });
  
//$(".review-txt-box").hide();

$("[id*='review_']").hide();

$("#prev").css("cursor","pointer");
$("#next").css("cursor","pointer");

$("#prev").hide();

for(i=counter;i<=(eval(counter+1)*eval(pagesize));i++)
{
	$("#review_" + eval(i)).show();
}
 
$('#next').click(function() {
	$("[id*='review_']").hide();
	counter++;
	
	for(i=(eval(counter)*eval(pagesize));i<(eval(counter+1)*eval(pagesize));i++)
	{
		$("#review_" + eval(i+1)).show();
	}
	
	if(eval(counter)<=2){
		$("#prev").show();
	}
	
	if(eval(counter)>=2){
		$("#next").hide();
	}
	
	//alert("N: " + counter);
});

$('#prev').click(function() {
	$("[id*='review_']").hide();
	counter--;
	
	for(i=(eval(counter)*eval(pagesize));i<(eval(counter+1)*eval(pagesize));i++)
	{
		$("#review_" + eval(i+1)).show();
	}
	
	if(eval(counter)<=0){
		$("#prev").hide();
		$("#next").show();
	}
	
	if(eval(counter)>0){
		$("#next").show();
	}
	
	//alert("P: " + counter);
});

});
</script>-->


<!-----------Featured Section Starts------------>
<input type="hidden" id="playerVersion" value="html5" />
<input type="hidden" id="playerType" value="embedded" />
<!--<section id="featured">
	<div class="featured-part">
    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<div class="row">
            	<div class="col-lg-12">
                	<h4 class="title-featured" id="titleEasy">Easy Tax Filing with Taxcup.com </h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="fetrd-bx">
                        <div class="icon-box">
                            <img src="images/faster-con.png">
                        </div>
                        <h3>Faster and Interactive Design </h3>
                        <p>Now there’s an entirely new way to interact, navigate and file faster taxes.A spectacular design with interactive user interface.Just select it and you’re done. With Image navigation an entire new way to interact and file faster taxes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="fetrd-bx">
                        <div class="icon-box">
                            <img src="images/accurate-icon.png">
                        </div>
                        <h3>Accurate Calculation and Efficient  Filing</h3>
                        <p>The tax filing is made with advanced workflow engineering, which evaluates the information based on user and it eliminates error, performing validation to achieve highest accuracy.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="fetrd-bx">
                        <div class="icon-box">
                            <img src="images/maximum-refund-icon.png">
                        </div>
                        <h3>Maximum possible refund ($) guaranteed</h3>
                        <p>It’s easier than ever before to obtains maximum tax refund. Powered by an innovative technology that enables maximum refund possible.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="fetrd-bx">
                        <div class="icon-box">
                            <img src="images/higher-saving-icon.png">
                        </div>
                        <h3>Higher Saving</h3>
                        <p>Engineered to take full advantage of your income, tax situation and international visa status. Taxcup.com provides an easy way to make and receive tax refund. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="fetrd-bx">
                        <div class="icon-box">
                            <img src="images/serius-data-icon.png">
                        </div>
                        <h3>Serious Data Security  </h3>
                        <p>The advanced encryption algorithms that enable higher data security. Your information is secured and always protected with highest security.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="fetrd-bx">
                        <div class="icon-box">
                            <img src="images/easy-to-use-icon.png">
                        </div>
                        <h3>Easy to use </h3>
                        <p>Essential things done more quickly and simply. It is designed for maximum efficiency and is 3X faster than other tax preparation software. Making powerful things simple requires some seriously advanced technologies. Taxcup is loaded with them. </p>
                    </div>
                </div>
        	</div>
        </div>
    </div>
</section>-->

<!-- featured section ends-->


<!-- Featured section SALONI -->
<section id="featured">
        <div class="innercontent">
                <center><h2>Easy Tax Filing with <b><font color="#4CAF50">Taxcup.com</font></b></h2></center>
           
           <div id="image-first-container">
                <div id="image-first">
                    <center><img src="images/faster-con.png"></center>
                    <h4>Faster and Interactive Design</h4>
                        <p>Now there’s an entirely new way to interact, navigate and file faster taxes.A spectacular design with interactive user interface.Just select it and you’re done. With Image navigation an entire new way to interact and file faster taxes.</p>
                </div>     
                <div id="image-second">
                    <center><img src="images/accurate-icon.png"></center>
                    <h4>Accurate Calculation and Efficient Filing</h4>
                        <p>The tax filing is made with advanced workflow engineering, which evaluates the information based on user and it eliminates error, performing validation to achieve highest accuracy.</p>
                </div>     
            </div>     
        </div>
</section>

<section id="question">
<div class="innercontent">
            <center><h2>At Taxcup, the security of your data is our <b><font color="#4CAF50">highest priority</font></b></h2>
                    <p>We go beyond the leading industry standards to implement the newest, strongest technology available to safeguard your data.</p>
                    <img src="https://lh6.ggpht.com/QJmD8kfdOz3CPMpRlNVVOiGhkLCgOUV-9wV3RcjGka5LWZS6JPvPEpKqMtP9j_3hQPs=w300" id="lockimg">
            </center>
            <center>
            <div id="img-second-container">
                <div id="img-one">
                   <center><img src="images/accurate-icon.png"></center>
                    <h4>Accurate Calculation and Efficient Filing</h4>
                        <p>The tax filing is made with advanced workflow engineering, which evaluates the information based on user and it eliminates error, performing validation to achieve highest accuracy.</p>
                </div> 

                <div id="img-two">
                   <center><img src="images/secure-green.png" style="width: 180px;"></center>
                    <h4>Accurate Calculation and Efficient Filing</h4>
                        <p>The tax filing is made with advanced workflow engineering, which evaluates the information based on user and it eliminates error, performing validation to achieve highest accuracy.</p>
                </div> 
                
                <div id="img-three">
                   <center><img src="images/accurate-icon.png"></center>
                    <h4>Accurate Calculation and Efficient Filing</h4>
                        <p>The tax filing is made with advanced workflow engineering, which evaluates the information based on user and it eliminates error, performing validation to achieve highest accuracy.</p>
                </div> 
                
            </div>

</div>
</section>

<!--<section id="question">
	<div class="main-part-accurate">
    	<div class="col-lg-12">
        	<div class="first-part">
                <h4>At Taxcup, the security of your data is our highest priority.</h4>
                <h5>We go beyond the leading industry standards to implement the newest,<br/>strongest technology available to safeguard your data.</h5>
                <div class="col-lg-12">
                	<div class="thumb-accurate">
                    	<img src="images/lock.png" />
                    </div>
                </div>
                <div class="col-lg-12">
                	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="fetrd-bx">
                            <div class="icon-box">
                                <span><img src="images/security-icon.png"></span>
                            </div>
                            <p>Taxcup have implemented AES-256 bit encryption with PBKDF2 SHA-256 and salted hashes to ensure complete security with end to end protection in the cloud.</p>
                        </div>
                	</div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="fetrd-bx">
                            <div class="icon-box">
                                <span><img src="images/sslsecureicon.jpeg"></span>
                            </div>
                            <p>To protect your data, Taxcup uses SSL encryption/TLS for communication, creating a secure tunnel protected by 128-bit or higher AES encryption.</p>
                        </div>
                	</div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="fetrd-bx">
                            <div class="icon-box">
                                <span><img src="images/201309_webpticons_secure.png"></span>
                            </div>
                            <p>we continue work with the IRS and State Department of Revenues using a variety of anti-fraud measures to help protect your personal information.</p>
                        </div>
                	</div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--------------Security Setion Ends----------->
<div class="clearfix"></div>


<!-----------Review Section Starts------------>
<section id="review-part">
	<div class="col-lg-12">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <div class="ctm-review-part">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="lt-rw-bg">
                                <h3>Customer Reviews of Taxcup.com</h3>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="reating-bx-part">
                                            <div class="first-start-bx" id="first-start-bx">
                                                <h4>4.2</h4>
                                                <div class="stars-bx">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-empty"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="bar-stars-bx" data-toggle="portfilter" data-target="5star">
                                                <h5>5 stars</h5>
                                                <div class="bars-bx">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width:71%">
                                                          71%
                                                        </div>
                                                     </div>
                                                </div>
                                                <p>71%</p>
                                            </div>
                                            <div class="bar-stars-bx" data-toggle="portfilter" data-target="4star">
                                                <h5>4 stars</h5>
                                                <div class="bars-bx">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width:22%">
                                                          22%
                                                        </div>
                                                     </div>
                                                </div>
                                                <p>22%</p>
                                            </div>
                                            <div class="bar-stars-bx" data-toggle="portfilter" data-target="3star">
                                                <h5>3 stars</h5>
                                                <div class="bars-bx">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width:7%">
                                                          7%
                                                        </div>
                                                     </div>
                                                </div>
                                                <p>7%</p>
                                            </div>
                                            <div class="bar-stars-bx" data-toggle="portfilter" data-target="2star">
                                                <h5>2 stars</h5>
                                                <div class="bars-bx">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                                          0%
                                                        </div>
                                                     </div>
                                                </div>
                                                <p>0%</p>
                                            </div>
                                            <div class="bar-stars-bx" data-toggle="portfilter" data-target="1star">
                                                <h5 >1 stars</h5>
                                                <div class="bars-bx">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                                          0%
                                                        </div>
                                                     </div>
                                                </div>
                                                <p>0%</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-tag='5star' data-rel="test1" id="review_1">
                                        <a href="" data-toggle="modal" data-target="#myModal1" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test0">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                </div>
                                                <h5>Geatest Tax Preparation Software Ever for International Students</h5>
                                                
                                            </div>
                                            <p>
                                                Taxcup works well,  I especially like how it remembers everything, simple user interface and very great accuracy. I get taxes done in less than 5-9 minutes in most cases. Tax filing was quick, painless, and I had the refund back in 7 days.
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">Peter</span><span style="float:right;">New York</span></h6>
                                        </div>
                                        </a>
                                         <!-- Modal -->
                                          <div class="modal fade" id="myModal1" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                            </div>
                                                            <h5>Geatest Tax Preparation Software Ever for International Students</h5>
                                                            
                                                        </div>
                                                        <p>
                                                            Taxcup works well,  I especially like how it remembers everything, simple user interface and very great accuracy. I get taxes done in less than 5-9 minutes in most cases. Tax filing was quick, painless, and I had the refund back in 7 days.
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">Peter</span><span style="float:right;">New York</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-tag='5star' data-rel="test2" id="review_2">
                                        <a href="" data-toggle="modal" data-target="#myModal2" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test1">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                </div>
                                                <h5>Taxcup is made for international student 1040NREZ So easy to use</h5>
                                                
                                            </div>
                                            <p>
                                                We itemize and the program walks you through everything. I also like the accurancy that is displayed with it. Great product. Easy to use even for a dummy. This product allows you to file state and federal. If you have any questions with what you are doing on it there is a help option too. Best tax program that holds your hand in the process of doing horrible taxes
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">Julie</span><span style="float:right;">California</span></h6>
                                        </div>
                                        </a>
                                        <!-- Modal -->
                                          <div class="modal fade" id="myModal2" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                            </div>
                                                            <h5>Taxcup is made for international student 1040NREZ So easy to use</h5>
                                                        </div>
                                                        <p>
                                                            We itemize and the program walks you through everything. I also like the accurancy that is displayed with it. Great product. Easy to use even for a dummy. This product allows you to file state and federal. If you have any questions with what you are doing on it there is a help option too. Best tax program that holds your hand in the process of doing horrible taxes
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">Julie</span><span style="float:right;">California</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 " data-tag='5star' data-rel="test3" id="review_3">
                                        <a href="" data-toggle="modal" data-target="#myModal3" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test2">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                </div>
                                                <h5>Easy and acurrate. The software worked flawlessly</h5>
                                            </div>
                                            <p>
                                                Have no fear of doing your taxes correctly or how to fill out the right form. You can't fail. Taxcup makes it so USER-friendly. You have the option to explore the tax forms yourself, but if you use the guide, be prepared, it will walk you through EVERYTHING.  It asks you questions and then at the end it goes through everything to final check it. Then it gives a rating to assess the level of accurancy, everything is based for validation and proper algorithms. I am confident that their final review and assessment is accurate.
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">Pradip</span><span style="float:right;">Texas</span></h6>
                                        </div>
                                        </a>
                                        <!-- Modal -->
                                          <div class="modal fade" id="myModal3" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                            </div>
                                                            <h5>Easy and acurrate. The software worked flawlessly</h5>
                                                        </div>
                                                        <p>
                                                            Have no fear of doing your taxes correctly or how to fill out the right form. You can't fail. Taxcup makes it so USER-friendly. You have the option to explore the tax forms yourself, but if you use the guide, be prepared, it will walk you through EVERYTHING.  It asks you questions and then at the end it goes through everything to final check it. Then it gives a rating to assess the level of accurancy, everything is based for validation and proper algorithms. I am confident that their final review and assessment is accurate.
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">Pradip</span><span style="float:right;">Texas</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-tag='5star' data-rel="test4" id="review_4">
                                        <a href="" data-toggle="modal" data-target="#myModal4" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test3">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                </div>
                                                <h5>F Visa, J Visa all Done taxes international with 1040 - Great</h5>
                                            </div>
                                            <p>
                                                Taxcup explains what those questions mean. I recommend the product. It is a simple software for tax filing made excellent by Engineers and CPA. Great work and excellent UI with easy navigation.
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">Sangeeta</span><span style="float:right;">Arizona</span></h6>
                                        </div>
                                        </a>
                                        <!-- Modal -->
                                          <div class="modal fade" id="myModal4" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                            </div>
                                                            <h5>F Visa, J Visa all Done taxes international with 1040 - Great</h5>
                                                        </div>
                                                        <p>
                                                            Taxcup explains what those questions mean. I recommend the product. It is a simple software for tax filing made excellent by Engineers and CPA. Great work and excellent UI with easy navigation.
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">Sangeeta</span><span style="float:right;">Arizona</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-tag='5star'  data-rel="test5" id="review_5">
                                        <a href="" data-toggle="modal" data-target="#myModal5" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test4">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                </div>
                                                <h5>First time experience was very positive.</h5>
                                            </div>
                                            <p>
                                                I am 100% satisfied working on my taxes with Taxcup. Above all, her services are very well priced!! I would totally come back to taxcup each year. In short, Taxcup is the real deal! ABSOLUTELY RECOMMEND!
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">Xiang Xu</span><span style="float:right;">Maryland</span></h6>
                                        </div>
                                        </a>
                                        <!-- Modal -->
                                          <div class="modal fade" id="myModal5" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                            </div>
                                                            <h5>First time experience was very positive.</h5>
                                                        </div>
                                                        <p>
                                                            I am 100% satisfied working on my taxes with Taxcup. Above all, her services are very well priced!! I would totally come back to taxcup each year. In short, Taxcup is the real deal! ABSOLUTELY RECOMMEND!
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">Xiang Xu</span><span style="float:right;">Maryland</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-tag='5star' data-rel="test6" id="review_6">
                                        <a href="" data-toggle="modal" data-target="#myModal6" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test5">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                </div>
                                                <h5>Filling our taxes here was so quick and easy and painless!</h5>
                                            </div>
                                            <p>
                                                So I came here because a good friend referred me..being that I was searching for a good place to get my taxes done
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">Yinqi Z</span><span style="float:right;">New Jersey</span></h6>
                                        </div>
                                        </a>
                                        <!-- Modal -->
                                          <div class="modal fade" id="myModal6" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                            </div>
                                                            <h5>Filling our taxes here was so quick and easy and painless!</h5>
                                                        </div>
                                                        <p>
                                                            So I came here because a good friend referred me..being that I was searching for a good place to get my taxes done
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">Yinqi Z</span><span style="float:right;">New Jersey</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-tag='5star' data-rel="test7" id="review_7">
                                        <a href="" data-toggle="modal" data-target="#myModal7" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test6">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                </div>
                                                <h5>Just do it. I'll be doing my taxes with Taxcup.com ! Two thumbs up! 5 star</h5>
                                            </div>
                                            <p>
                                                 Decided to go and checkout the website and it is super user friendly, accurate validation and guidance at every step. I indeed left very satisfied and I will definitely recommend anyone I know to come get your taxes done by Taxcup.com 
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">S Reedy</span><span style="float:right;">California</span></h6>
                                        </div>
                                        </a>
                                        <!-- Modal -->
                                          <div class="modal fade" id="myModal7" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                            </div>
                                                            <h5>Just do it. I'll be doing my taxes with Taxcup.com ! Two thumbs up! 5 star</h5>
                                                        </div>
                                                        <p>
                                                             Decided to go and checkout the website and it is super user friendly, accurate validation and guidance at every step. I indeed left very satisfied and I will definitely recommend anyone I know to come get your taxes done by Taxcup.com 
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">S Reedy</span><span style="float:right;">California</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-tag='5star' data-rel="test8" id="review_8">
                                        <a href="" data-toggle="modal" data-target="#myModal8" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test7">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                </div>
                                                <h5>keeps getting easier and easier to use</h5>
                                            </div>
                                            <p>
                                                Does a great job walking you through your taxes making the enormous tax laws understandable. Taxcup also provides excellent tech & customer support. Every aspect of income, deductions, and special areas is examined, calculations are made automatically from the information one puts in, and mistakes are caught before the tax return is finalized. 
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">Hitesh Patel</span><span style="float:right;">Texas</span></h6>
                                        </div>
                                        </a>
                                        <!-- Modal -->
                                          <div class="modal fade" id="myModal8" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                            </div>
                                                            <h5>keeps getting easier and easier to use</h5>
                                                        </div>
                                                        <p>
                                                            Does a great job walking you through your taxes making the enormous tax laws understandable. Taxcup also provides excellent tech & customer support. Every aspect of income, deductions, and special areas is examined, calculations are made automatically from the information one puts in, and mistakes are caught before the tax return is finalized. 
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">Hitesh Patel</span><span style="float:right;">Texas</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-tag='5star' data-rel="test9" id="review_9">
                                        <a href="" data-toggle="modal" data-target="#myModal9" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test8">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                </div>
                                                <h5>Tax prep that works for me. I love that it is all one stop</h5>
                                            </div>
                                            <p>
                                                There is free filing of the federal tax for those who do not have any income. Tt has made the process of tax preparation much simpler than it was before - and I don't have to tear my hair out trying to get a form I didn't know I needed. It is worth every penny of its cost, and more. so I can see if it's better to trade off expenses for credits and things like that. Not only save on taxes, but I'm saving hundreds or thousands alone by doing them myself. 
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">Tony</span><span style="float:right;">Virginia</span></h6>
                                        </div>
                                        </a>
                                        <!-- Modal -->
                                          <div class="modal fade" id="myModal9" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                            </div>
                                                            <h5>Tax prep that works for me. I love that it is all one stop</h5>
                                                        </div>
                                                        <p>
                                                            There is free filing of the federal tax for those who do not have any income. Tt has made the process of tax preparation much simpler than it was before - and I don't have to tear my hair out trying to get a form I didn't know I needed. It is worth every penny of its cost, and more. so I can see if it's better to trade off expenses for credits and things like that. Not only save on taxes, but I'm saving hundreds or thousands alone by doing them myself. 
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">Tony</span><span style="float:right;">Virginia</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-tag='5star' data-rel="test10" id="review_10">
                                        <a href="" data-toggle="modal" data-target="#myModal10" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test9">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                </div>
                                                <h5>taxcup makes things so much easier and faster. Great tax program for international student on F, J Visa</h5>
                                            </div>
                                            <p>
                                                I would give this 5 stars for ease of us. I am changing to 5 stars and adding this note, because once I figured out a couple of tasks, it was very easy and fast.  When using Taxcup.com ourselves, walking through the product is so helpful in our learning process on how to do a better job all year long, Thank you Taxcup.com
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">Jessica</span><span style="float:right;">Florida</span></h6>
                                        </div>
                                        </a>
                                        <!-- Modal -->
                                          <div class="modal fade" id="myModal10" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                            </div>
                                                            <h5>taxcup makes things so much easier and faster. Great tax program for international student on F, J Visa</h5>
                                                        </div>
                                                        <p>
                                                            I would give this 5 stars for ease of us. I am changing to 5 stars and adding this note, because once I figured out a couple of tasks, it was very easy and fast.  When using Taxcup.com ourselves, walking through the product is so helpful in our learning process on how to do a better job all year long, Thank you Taxcup.com
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">Jessica</span><span style="float:right;">Florida</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-tag='4star' data-rel="test11" id="review_11">
                                        <a href="" data-toggle="modal" data-target="#myModal11" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test10">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#dbe2e8;"></i>
                                                </div>
                                                <h5>RECOMMEND RECOMMEND RECOMMEND 1040NR Done Form 8843 DONE All International taken care</h5>
                                            </div>
                                            <p>
                                                 love this, I don't know why I didn't try this sooner and save tons on accountant. The software guides you through the process and even goes through any possible additional deductions you may qualify for. It's user friendly, very easy to use and also very thorough. It's saved us hundreds of dollars as we no longer have to use a CPA to have a complex taxes done. We'll definitely buy it again and do highly recommend it. Way to go,  Taxcup
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">Pablo</span><span style="float:right;">Washington</span></h6>
                                        </div>
                                        </a>
                                        <!-- Modal -->
                                          <div class="modal fade" id="myModal11" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#dbe2e8;"></i>
                                                            </div>
                                                            <h5>RECOMMEND RECOMMEND RECOMMEND 1040NR Done Form 8843 DONE All International taken care</h5>
                                                        </div>
                                                        <p>
                                                             love this, I don't know why I didn't try this sooner and save tons on accountant. The software guides you through the process and even goes through any possible additional deductions you may qualify for. It's user friendly, very easy to use and also very thorough. It's saved us hundreds of dollars as we no longer have to use a CPA to have a complex taxes done. We'll definitely buy it again and do highly recommend it. Way to go,  Taxcup
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">Pablo</span><span style="float:right;">Washington</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-tag='4star' data-rel="test12" id="review_12">
                                        <a href="" data-toggle="modal" data-target="#myModal12" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test11">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#dbe2e8;"></i>
                                                </div>
                                                <h5>1040NR J Visa Taxes Done - Need e-file</h5>
                                            </div>
                                            <p>
                                                 taxes are painful, thinking people you dont agree with are using your money to do horrible and immoral things is made a tiny bit more palatable by having a tax program that lets you get the process over with quickly. Much like cleaning up after a sick dog you just want it done so you can wash your hands. The only thing that would make it better for me is for it to include free e-file for the state as well as for the Federal return. 
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">Emanuel</span><span style="float:right;">Washington, D.C</span></h6>
                                        </div>
                                        </a>
                                        <!-- Modal -->
                                          <div class="modal fade" id="myModal12" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#dbe2e8;"></i>
                                                            </div>
                                                            <h5>1040NR J Visa Taxes Done - Need e-file</h5>
                                                        </div>
                                                        <p>
                                                             taxes are painful, thinking people you dont agree with are using your money to do horrible and immoral things is made a tiny bit more palatable by having a tax program that lets you get the process over with quickly. Much like cleaning up after a sick dog you just want it done so you can wash your hands. The only thing that would make it better for me is for it to include free e-file for the state as well as for the Federal return. 
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">Emanuel</span><span style="float:right;">Washington, D.C</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-tag='4star' data-rel="test13" id="review_13">
                                        <a href="" data-toggle="modal" data-target="#myModal13" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test12">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#dbe2e8;"></i>
                                                </div>
                                                <h5>Easiest way to do taxes by yourself - All International Student Taxes Done + Family as well</h5>
                                            </div>
                                            <p>
                                               This is the Taxcup we've all come to love. Hopefully they will keep it this way. I went to Taxcup.com this time after changing to Sprint tax last year which is wrost and rip us all of.  This product worked perfectly in the preparation of my tax return without any issues. In addition, it provides the necessary assistance for any situations I needed clarification. It is very easy to use and always seems to get the "right answer" as long as you correctly answer the questions.
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">Greg</span><span style="float:right;">New York</span></h6>
                                        </div>
                                        </a>
                                        <!-- Modal -->
                                          <div class="modal fade" id="myModal13" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#dbe2e8;"></i>
                                                            </div>
                                                            <h5>Easiest way to do taxes by yourself - All International Student Taxes Done + Family as well</h5>
                                                        </div>
                                                        <p>
                                                            This is the Taxcup we've all come to love. Hopefully they will keep it this way. I went to Taxcup.com this time after changing to Sprint tax last year which is wrost and rip us all of.  This product worked perfectly in the preparation of my tax return without any issues. In addition, it provides the necessary assistance for any situations I needed clarification. It is very easy to use and always seems to get the "right answer" as long as you correctly answer the questions.
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">Greg </span><span style="float:right;">New York</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-tag='3star' data-rel="test14" id="review_14">
                                        <a href="" data-toggle="modal" data-target="#myModal14" style="text-decoration:none;">
                                        <div class="review-txt-box" id="test13">
                                            <div class="top-hd-bx">
                                                <div class="right-stars-bx">
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                    <i class="fa fa-star" style="color:#dbe2e8;"></i>
                                                    <i class="fa fa-star" style="color:#dbe2e8;"></i>
                                                </div>
                                                <h5>Good , does it job but I expect more</h5>
                                            </div>
                                            <p>
                                                I'm not stupid, but some of the questions the IRS asks just baffle me--things about the International VISA for example, I don't even understand! However, taxcup made the life simple, easier and accurate file. I got my return as well. IT does it JOB
                                            </p>
                                            <h6><span style="float:left; font-weight:bold;">Krunal</span><span style="float:right;">Connecticut</span></h6>
                                        </div>
                                        </a>
                                        <!-- Modal -->
                                          <div class="modal fade" id="myModal14" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class=".modal-header" style="border-bottom:none !important;"></div>
                                                <div class="modal-body">
                                                    <div class="review-txt-box">
                                                        <div class="top-hd-bx">
                                                            <div class="right-stars-bx">
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#ecc81a;"></i>
                                                                <i class="fa fa-star" style="color:#dbe2e8;"></i>
                                                                <i class="fa fa-star" style="color:#dbe2e8;"></i>
                                                            </div>
                                                            <h5>Good , does it job but I expect more</h5>
                                                        </div>
                                                        <p>
                                                            I'm not stupid, but some of the questions the IRS asks just baffle me--things about the International VISA for example, I don't even understand! However, taxcup made the life simple, easier and accurate file. I got my return as well. IT does it JOB
                                                        </p>
                                                        <h6><span style="float:left; font-weight:bold;">Krunal</span><span style="float:right;">Connecticut</span></h6>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top:none;">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    
                                    
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="pagination-part">
                                            <div class="btm-next-page" id="prev">
                                                <i class="fa fa-arrow-left" style="margin-right:5px; float:left; line-height:18px;"></i> 
                                                <p style="margin-right:50px;">Previous Page </p>
                                            </div>
                                            <div class="btm-next-page" id="next">
                                                <p>Next Page <i class="fa fa-arrow-right" style="margin-left:5px;"></i></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-----------Review Section Ends------------>
<div class="clearfix"></div>
<!-----------Expensive Section Starts------------>
<section id="expensive">
	<div class="main-bh-cls">
    	<div class="container">
        	<h2>Up to 50% less expensive than other software</h2>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<div class="inner-main-expensive">
                	<div class="first-line-part">
                    	<h3>Compare the features</h3>
                        <div class="logo-with-txt">
                            <h4>Taxcup</h4>
                        </div>
                        <p>Others</p>
                    </div>
                    <div class="inner-line-part">
                    	<ul>
                        	<li>
                            	<h3>Interactive and simple user interface</h3>
                                <h4><i class="fa fa-check"></i></h4>
                                <p>-</p>
                            </li>
                            <li>
                            	<h3>Price</h3>
                                <h4>$</h4>
                                <p>$$$</p>
                            </li>
                            <li>
                            	<h3>Customer Reviews</h3>
                                <h4>Excellent</h4>
                                <p>Average</p>
                            </li>
                            <li>
                            	<h3>Error detection</h3>
                                <h4><i class="fa fa-check"></i></h4>
                                <p>-</p>
                            </li>
                            <li>
                            	<h3>Accuracy algorithms</h3>
                                <h4><i class="fa fa-check"></i></h4>
                                <p>-</p>
                            </li>
                            <li>
                            	<h3>Pofessional CPA</h3>
                                <h4><i class="fa fa-check"></i></h4>
                                <p>-</p>
                            </li>
                            <li>
                            	<h3>Maximum refund</h3>
                                <h4><i class="fa fa-check"></i></h4>
                                <p>-</p>
                            </li>
                        </ul>
                    </div>
                    <div class="btm-button-part">
                    	<a href="register.php"><button type="button" class="btn-line-blue">Get Started Now</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-----------Expensive Section Ends------------>
<div class="clearfix"></div>
<!-----------Services Section Starts------------>
<section id="services">
	<div class="service-main-part">
    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<div class="col-lg-1 col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
        	<div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
            	<div class="row">
                
                <div class="services-vd-bx">
            		<div id="html5player-wrapper" class="video-part" onmouseover="playVideo()">
                    	<!--<iframe id="test" width="640" height="360"  src="https://www.youtube.com/embed/w8fhkZtd29M" frameborder="0" allowfullscreen></iframe>-->
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/iDJWkV5uP9s" frameborder="0" allowfullscreen></iframe>-->
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/cnOoR_hg-1s" frameborder="0" allowfullscreen></iframe>-->
                        <div id="player"></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            	<div class="service-ctn">
                	<ul>
                    	<li>
                        	<h3>Interactive tax design </h3>
                            <p>Follow our step-by-step instructions and ensure accuracy with maximum return.</p>
                        </li>
                        <li>
                        	<h3>Free tax saving tips </h3>
                            <div class="form-bx">
                            	<span><input type="text" class="video-input" placeholder="Enter Email Address"></span>
                            <span><button type="submit" class="footer-btn">Go</button></span>
                            </div>
                        </li>
                        <li>
                        	<h3>How To Videos</h3>
                            <p>Taxcup simplifies your digital life by bringing all these important pieces of information into single review page.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-----------Services Section Ends------------>
<div class="clearfix"></div>


<!--------------Accurate Section Starts----------->
<section id="accurate">
	<div class="main-part-accurate">
    	<div class="col-lg-12">
        	<div class="first-part">
                <h4>Taxcup.com ensure accurate tax filing</h4>
                <h5>Every tax return is checked with algorithms for accuracy and completeness.</h5>
                <div class="col-lg-12">
                	<div class="thumb-accurate">
                    	<img src="images/accurate-index.png" />
                    </div>
                </div>
                <p>Our systems are designed with robust validation checks designed by Professional CPA and tax experts. All the inputs are verified, validated with engineering algorithms and functions.</p>
            </div>
        </div>
        <div class="inner-second-part">
        	<h3>Everything you need to get the maximum tax refund possible in the shortest time.</h3>
            <div class="btm-button-cls">
            	<a href="register.php"><button class="blue-round-btm">Get Started Now</button></a>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>
<?php
	include('footer.php');
?>
<script>
	$(document).ready( function() {
  console.log( "ready!" );
  loadPlayer();
});

function getArtistId() {
  return 'cnOoR_hg-1s';
}

function loadPlayer() { 
  if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {

    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    window.onYouTubePlayerAPIReady = function() {
      onYouTubePlayer();
    };

  } else {

    onYouTubePlayer();

  }
}

var player;

function onYouTubePlayer() {
  player = new YT.Player('player', {
    height: '490',
    width: '880',
    videoId: getArtistId(),
    playerVars: { controls:1, showinfo: 0, rel: 0, showsearch: 0, iv_load_policy: 3 },
    events: {
      'onStateChange': onPlayerStateChange,
      'onError': catchError
    }
  });
}

  var done = false;
  function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
      // setTimeout(stopVideo, 6000);
      done = true;
    } else if (event.data == YT.PlayerState.ENDED) {
      location.reload();
    }
  }

  function onPlayerReady(event) {

    //if(typeof(SONG.getArtistId()) == undefined)
    //{
    //  console.log("undefineeeed"); 
    //} 
    //event.target.playVideo();   
  }
  function catchError(event)
  {
    if(event.data == 100) console.log("De video bestaat niet meer");
  }

  function stopVideo() {
    player.stopVideo();
  }
  function playVideo(){
  	player.playVideo();
  }
</script>
</body>
</html>
