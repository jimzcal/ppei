
        <div id="wrapper">
            <div id="topWrapper">
				<?php if ($logo): ?>
				<div id="logoSpace">
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
					  	<img src="<?php print $logo; ?>" alt="<?php print $site_name; ?> | <?php print $site_slogan; ?>" />
					</a>
				</div>
				<?php endif; ?>

                <div id="logoSupport">
                    <img src="images/logo-dilg.png" width="96" height="155" alt="DILG" border="0" class="mR15" />
                    <img src="images/logo-unep.png" width="78" height="155" alt="UNEP" border="0" class="mR15" />
                    <img src="images/logo-undp.png" width="65" height="155" alt="UNDP" border="0" />
                </div>
                <div id="navWrapper">
                    <?php if ($main_menu || $secondary_menu): ?>
                    <div id="mainNav">
                        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline')), 'heading' => t('Main menu'))); ?>
                    </div>
                    <div class="clear"></div>
                    <div id="subNav">
                        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline')), 'heading' => t('Secondary menu'))); ?>
                    </div>
                    <?php endif; ?>

                </div>
            </div>

            <!-- MAIN CONTENT -->
            <div id="widthWrapper">

                <h1 class="green1">Philippine Poverty-Environment Initiative</h1>
                <!--<h2 class="green2">Working Towards Building a Green Economy and Sustainable Local Communities</h2>-->
                <p class="green1">PPEI is a five-year (2011-2015) collaborative program of the Government of the Philippines and United Nations Development Programme-United Nations Environment Programme (UNDP-UNEP), through the Department of the Interior and Local Government (DILG). The PPEI supports poverty reduction and inclusive development by integrating pro-poor and environmental concerns into development planning and economic decision-making. It seeks to strengthen local development planning in the use of natural resources and the revenues derived from them, complimented by the growing corporate social responsibility (CSR) and active civil society. </p>

                <!-- COLUMN LEFT -->
                <div id="column-left">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="images/slideshow/pic1.jpg" data-thumb="images/slideshow/pic1.jpg" alt="" title="#pic1" />
                            <img src="images/slideshow/pic2.jpg" data-thumb="images/slideshow/pic2.jpg" alt="" title="#pic2" />
                            <img src="images/slideshow/pic3.jpg" data-thumb="images/slideshow/pic3.jpg" alt="" title="#pic3" />
                            <img src="images/slideshow/pic4.jpg" data-thumb="images/slideshow/pic4.jpg" alt="" title="#pic4" />
                            <img src="images/slideshow/pic5.jpg" data-thumb="images/slideshow/pic5.jpg" alt="" title="#pic5" />
                        </div>
                        <div id="pic1" class="nivo-html-caption">
                            <h2>Improving governance of natural wealth for a sustained socially inclusive growth.</h2>
                            <p>Addressing environmental issues that matter to the poor is critical to sustained poverty reduction and achieving the Millennium Development Goals. This requires a more “pro-poor” and integrated approach—linking action at local, national, and global levels.</p>
                        </div>
                        <div id="pic2" class="nivo-html-caption">
                            <h2>Balancing economic growth and environmental protection.</h2>
                            <p>Rational utilization of natural resources while enforcing regulatory measures to mitigate the environmental and socio-cultural risks paves way for the creation of an economic environment for sustained and broad-based growth, social equity and ecological stability.</p>
                        </div>
                        <div id="pic3" class="nivo-html-caption">
                            <h2>Poverty-Environment linkaging is planning for sustainable development.</h2>
                            <p>Local planning for sustainable development empowers stakeholders, prepares them to participate in the implementation of their plans and programs, and promotes equity, co-management and gender sensitivity.</p>
                        </div>
                        <div id="pic4" class="nivo-html-caption">
                            <h2>Establishing right mix of policies and reform mechanisms for poverty-environment initiative</h2>
                            <p>Putting in place appropriate legal and enforcement mechanisms and transparency system ensures that the development and utilization of natural resources, particularly the extractive industries are tilted towards exerting a positive impact on the development of the community and on the well-being of the poor people.</p>
                        </div>
                        <div id="pic5" class="nivo-html-caption">
                            <h2>Mobilizing and strengthening national and local levels capacities for a sustained P-E mainstreaming effort. (See Picture 7)</h2>
                            <p>Strengthening the capacities of national and local governments and communities is critical to sustainably manage and utilize the natural resources and revenues derived from them for the benefit of the poor and vulnerable Filipinos and the environment.</p>
                        </div>
                    </div>

                    <!-- BREAK OUT BOXES -->
                    <div class="boBoxes">
                        <div class="boxImage">
                            <img src="images/box1-pic.jpg" width="188" height="87" alt="" border="0" />
                        </div>
                        <div class="boBoxHeadline">
                            <h3>Who We Are</h3>
                        </div>
                        <div class="boBoxContent">
                            <p class="green3">PPEI supports the vision of the national government of a green and inclusive development through rational utilization of environment and natural resources (ENR) for economic growth, environmental protection, social equity and especially for the benefit of poor communities in rural areas.</p>
                            <div class="greenButton1"><a href="#">Read More</a></div>
                        </div>
                    </div>
                    <div class="boBoxes">
                        <div class="boxImage">
                            <img src="images/box2-pic.jpg" width="188" height="87" alt="" border="0" />
                        </div>
                        <div class="boBoxHeadline">
                            <h3>What We Do</h3>
                        </div>
                        <div class="boBoxContent">
                            <p class="green3">PPEI seeks to influence institutions, policies and investments to harness the potential of the country’s natural resources to achieve a greener and more inclusive development path. It aims to establish enabling conditions at the national and local levels that promote sustained socially inclusive economic growth.</p>
                            <div class="greenButton1"><a href="#">Read More</a></div>
                        </div>
                    </div>
                    <div class="boBoxes last">
                        <div class="boxImage">
                            <img src="images/box3-pic.jpg" width="188" height="87" alt="" border="0" />
                        </div>
                        <div class="boBoxHeadline">
                            <h3>PPEI Knowledge Hub</h3>
                        </div>
                        <div class="boBoxContent">
                            <p class="green3">The PPEI Knowledge Hub is a portal to PEI resources containing references and materials developed by Philippines PEI team.</p>
                            <div class="greenButton1"><a href="#">Read More</a></div>
                        </div>
                    </div>

                    <div class="clear"></div>
                    <hr />

                    <div class="contentBlockHalf contentBlockHalfFirst">
                        <h1 class="green1">Latest News & Events</h1>
                        <a href=""><p><img src="images/pdf-icon.png" width="16" height="16" alt="" border="0" /> Philippines PEI presents its development agenda for Phase 2-CY 2013 implementation at PPEI’s 1st Project Board Meeting</p></a>
                        <a href=""><p><img src="images/pdf-icon.png" width="16" height="16" alt="" border="0" /> Completion of the systems review of the budgeting and release process of ENR revenues from national level down to LGUs</p></a>
                        <a href=""><p><img src="images/pdf-icon.png" width="16" height="16" alt="" border="0" /> LGUs Advancing Good Governance for a Green, Inclusive Growth – Forum on the Utilization and Development of Natural Wealth</p></a>

                        <div class="greenButton"><a href="#">More News &amp; Events</a></div>
                    </div>
                    <div class="contentBlockHalf contentBlockHalfLast">
                        <div class="contentSubBlock">
                            <h1 class="green1">PPEI Stories of Change</h1>
                            <h4 class="green2 ital">This features the success stories and good practices of LGUs, communities, private industries/businesses and CSOs/NGOs on Poverty-Environment Initiative.</h4>
                        </div>
                        <a href="#" target=""><p>Caring for Man’s Dignity, Balancing the Ecology: Toledo’s P-E initiative</p></a>
                        <a href="#" target=""><p>Economic, Social and Environmental Benefits of Responsible Mining in Brgy. Taganito</p></a>
                        <a href="#" target=""><p>Renewable Energy in Ilocos Norte Towards a Green Economy</p></a>

                        <div class="greenButton"><a href="#">Read Other Stories of Change</a></div>
                    </div>

                </div>

                <!-- COLUMN RIGHT -->
                <div id="column-right">

                    <div class="contentBlock">
                        <form id="form1" name="form1" method="post" action="">
                            <!--<label for="textfield"></label>-->
                            <input class="w278" type="text" name="textfield" id="textfield" />
                            <input type="submit" name="button" id="button" class="inputButton w170" value="Search Website" /> <a href="" id="advancedSearch">Advanced Search</a>
                        </form>
                    </div>

                    <div class="contentBlock greenSidebar">
                        <div class="greenTitle">Videos</div>
                        <div>
                            <img src="images/videothumb.png" width="298" height="169" alt="Youtube" border="0" />
                        </div>
                    </div>

                    <div class="contentBlock graySidebar">
                        <div>
                            <img src="images/map.jpg" width="298" height="204" alt="Where We Are Located" border="0" />
                        </div>
                        <div class="grayContent">
                            <p>The Poverty-Environment Initiative is a global United Nations-led Programme working in Africa, Asia-Pacific, Latin America and Europe that supports country efforts to achieve a greener and more inclusive develop¬ment path. In Asia and the Pacific programmes are under way in Nepal, Bhutan, Bangladesh, Thailand, Lao PDR and the Philippines.</p>
                        </div>
                    </div>

                    <!--<div class="contentBlock greenSidebar">
                        <div class="greenTitle">Latest News &amp; Events</div>
                        <div class="greenContent">
                            <ul>
                                <li><a href="">Completion of the systems review of the budgeting and release process of ENR revenues from national level down to LGUs</a></li>
                                <li><a href="">LGUs Advancing Good Governance for a Green, Inclusive Growth – Forum on the Utilization and Development of Natural Wealth</a></li>
                            </ul>
                            <div class="greenButton"><a href="#">Past News &amp; Events</a></div>
                        </div>
                    </div>-->

                    <div class="contentBlock blueSidebar">
                        <div class="blueTitle">Latest Publications</div>
                        <div class="blueContent">
                            <table cellspacing="0" cellpadding="0" border="1" width="100%">
                                <tr class="lightRow">
                                    <td width="70">
                                        <img src="images/book-cover1.jpg" width="50" height="71" border="0" alt="Book 1" />
                                        <img src="images/pdf-icon.png" width="16" height="16" border="0" alt="PDF" /></td>
                                    <td valign="middle" class="blue1">Poverty-Environment Initiative Award</td>
                                </tr>
                                <tr class="darkRow">
                                    <td width="70">
                                        <img src="images/book-cover2.jpg" width="50" height="71" border="0" alt="Book 1" />
                                        <img src="images/pdf-icon.png" width="16" height="16" border="0" alt="PDF" /></td>
                                    <td valign="middle" class="blue1">Review of LGUs Utilization of National Wealth</td>
                                </tr>
                                <tr class="lightRow">
                                    <td width="70">
                                        <img src="images/book-cover3.jpg" width="50" height="71" border="0" alt="Book 1" />
                                        <img src="images/pdf-icon.png" width="16" height="16" border="0" alt="PDF" /></td>
                                    <td valign="middle" class="blue1">Increasing ENR-Related Allocation for Poverty Reduction in the NB</td>
                                </tr>
                                <!--<tr class="darkRow">
                                    <td width="70">
                                        <img src="images/book-cover4.jpg" width="50" height="71" border="0" alt="Book 1" />
                                        <img src="images/pdf-icon.png" width="16" height="16" border="0" alt="PDF" /></td>
                                    <td valign="middle" class="blue1">Capacity Assessment for Mainstreaming P-E Linkages in LGU Governance</td>
                                </tr>
                                <tr class="lightRow">
                                    <td width="70">
                                        <img src="images/book-cover5.jpg" width="50" height="71" border="0" alt="Book 1" />
                                        <img src="images/pdf-icon.png" width="16" height="16" border="0" alt="PDF" /></td>
                                    <td valign="middle" class="blue1">P-E Mainstreaming Handbook</td>
                                </tr>
                                <tr class="darkRow">
                                    <td width="70">
                                        <img src="images/book-cover6.jpg" width="50" height="71" border="0" alt="Book 1" />
                                        <img src="images/pdf-icon.png" width="16" height="16" border="0" alt="PDF" /></td>
                                    <td valign="middle" class="blue1">PPEI 2012 Final Project Report</td>
                                </tr>-->
                            </table>
                            <div class="blueButton"><a href="#">All Publications</a></div>
                        </div>
                    </div>

                </div>
                <div class="clear"></div>
                <hr />

                <div id="homePhotos">
                    <h3 class="centerText mB20">Photos</h3>
                    <div style="margin: 0 auto;">
                        <a href=""><img src="images/photos/thumb1.png" class="thumbImgHome" /></a>
                        <a href=""><img src="images/photos/thumb2.png" class="thumbImgHome" /></a>
                        <a href=""><img src="images/photos/thumb3.png" class="thumbImgHome" /></a>
                        <a href=""><img src="images/photos/thumb4.png" class="thumbImgHome" /></a>
                        <a href=""><img src="images/photos/thumb5.png" class="thumbImgHome" /></a>
                    </div>
                </div>
                <div class="clear"></div>
                <hr />

                <div id="partners">
                    <h3 class="centerText mB20">Our Partners</h3>
                    <ul id="scroller">
                        <li><a href=""><img src="images/logos/NEDA.jpg" width="75" height="75" alt="NEDA"></a></li>
                        <li><a href=""><img src="images/logos/DENR.jpg" width="75" height="75" alt="DENR"></a></li>
                        <li><a href=""><img src="images/logos/MGB.jpg" width="75" height="75" alt="MGB"></a></li>
                        <li><a href=""><img src="images/logos/NAPC.jpg" width="75" height="75" alt="NAPC"></a></li>
                        <li><a href=""><img src="images/logos/DBM.jpg" width="75" height="75" alt="DBM"></a></li>
                        <li><a href=""><img src="images/logos/DOF.jpg" width="75" height="75" alt="DOF"></a></li>
                        <li><a href=""><img src="images/logos/DOE.jpg" width="75" height="75" alt="DOE"></a></li>
                        <li><a href=""><img src="images/logos/NCIP.jpg" width="75" height="75" alt="NCIP"></a></li>
                        <li><a href=""><img src="images/logos/ULAP.jpg" width="75" height="75" alt="ULAP"></a></li>
                        <li><a href=""><img src="images/logos/LPP.jpg" width="75" height="75" alt="LPP"></a></li>
                        <li><a href=""><img src="images/logos/LCP.jpg" width="75" height="75" alt="LCP"></a></li>
                        <li><a href=""><img src="images/logos/LMP.jpg" width="75" height="75" alt="LMP"></a></li>
                        <li><a href=""><img src="images/logos/COMP.jpg" width="75" height="75" alt="COMP"></a></li>
                        <li><a href=""><img src="images/logos/PBSP.jpg" width="75" height="75" alt="PBSP"></a></li>
                        <li><a href=""><img src="images/logos/CBMS.jpg" width="75" height="75" alt="CBMS"></a></li>
                    </ul>
                </div>

            </div>


        </div>
        <!-- END OF WRAPPER -->

        <div class="clear"></div>

        <!-- FOOTER -->
        <div id="footer">
            <div id="footerWrapper">

                <div class="sitemapBlock">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Partners</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>

                <div class="sitemapBlock">
                    <ul>
                        <li><a href="">Who We Are</a>
                            <ul>
                                <li><a href="">Poverty-Environment Initiative in the Philippines</a></li>
                                <li><a href="">Poverty-Environment Development Advocacy Education and Action Platform</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="sitemapBlock">
                    <ul>
                        <li><a href="">What We Do</a>
                            <ul>
                                <li><a href="">Our Initiative</a></li>
                                <li><a href="">PPEI Phase 1</a></li>
                                <li><a href="">PPEI Phase 2</a></li>
                                <li><a href="">Poverty-Environment Mainstreaming</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="sitemapBlock">
                    <ul>
                        <li><a href="">PPEI Knowledge Hub</a>
                            <ul>
                                <li><a href="">Knowledge Resources</a></li>
                                <li><a href="">Major Publications</a></li>
                                <li><a href="">Policy Briefs / Position Papers</a></li>
                                <li><a href="">Presentation Materials</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="sitemapBlock">
                    <ul>
                        <li><a href="">PPEI Stories of Change</a>
                            <ul>
                                <li><a href="">Stories of Change</a></li>
                                <li><a href="">Share your Story</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="sitemapBlock">
                    <ul>
                        <li><a href="">News &amp; Updates</a></li>
                        <li><a href="">Gallery</a></li>
                    </ul>
                </div>

                <div class="clear"></div>
                <div id="footCopy">
                    Copyright &copy; 2013 PPEI. All Rights Reserved.
                </div>

            </div>
        </div>

    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
