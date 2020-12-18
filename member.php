<!DOCTYPE html>
<html lang="en-US" class="no-js">
<?php include_once 'head.php'; ?>

    <body class="fw-team-template-default single single-fw-team postid-4821 masthead-fixed full-width home_absolute_header singular">
        <!-- page preloader -->
        <div class="preloader">
            <div class="preloader_image to_animate" data-animation="pulse"></div>
        </div>

        <!-- search modal -->
        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
            </button>
            <div class="widget widget_search">

                <form role="search" method="get" class="search-form form-inline" action="http://webdesign-finder.com/flavius/">
                    <div class="form-group">
                        <label>
                            <input type="search" class="search-field form-control" placeholder="Search" value="" name="s" title="Search for:" />
                        </label>
                    </div>
                    <button type="submit" class="search-submit theme_button">
                        <span class="screen-reader-text">Search</span>
                    </button>
                </form>
            </div>
        </div>
        <!-- Unyson messages modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
            <div class="fw-messages-wrap ls with_padding">
            </div>
        </div>
        <!-- eof .modal -->

        <!-- wrappers for visual page editor and boxed version of template -->
        <div id="canvas" class="wide">
            <div id="box_wrapper">
                <!-- template sections -->
                <?php include_once 'header.php'; ?>
                    <!-- eof .page_header -->

                    <section class="page_breadcrumbs cs section_padding_top_40 section_padding_bottom_40 background_cover section_overlay" style="background-image: url(http://webdesign-finder.com/flavius/wp-content/themes/flavius/img/parallax/breadcrumbs.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <h2 class="breadcrumbs-title">
					<?php echo $_GET['Attorney']; ?>
                                    </h2>
                                    <ol class="breadcrumb">
                                        <li class="first-item">
                                            <a href="index.php">Home</a></li>
                                        <li class="0-item">
                                            <a href="#">Attorneys</a></li>
                                        <li class="last-item"><?php echo $_GET['Attorney']; ?></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="page_content section_padding_top_110 section_padding_bottom_110 columns_padding_25">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="vertical-item topmargin_0 content-absolute  overflow-hidden text-center">
                                        <?php 
                                        if(isset($_GET['Attorney'])){
                                            if($_GET['Attorney'] == "Irene Shayo"){
                                                $src = "uploads/team_01.png";
                                                $level = "Education and Skills<br>
                                                    Bachelor of Science in Environmental Science and Management(Bsc-ESM),";
                                                $desc = "";
                                                $edu = "";
                                                $cunsult = "
                                                    Skills and Training on Health and Safety Personnel
                                                    <ul class='list1'>
                                                    <li>	National Occupational Safety and Health (NOSHC) Module 1 &11</li>
                                                    <li>	Insurance Expertise and Workman's Compensation</li>
                                                    <li>	Risk Analysis, Assessment and Management</li>
                                                    <li> 	Workplace Health and Safety Representative</li>
                                                </ul>";
                                                $title = "Insurance Associate";
                                            }
                                            else if($_GET['Attorney'] == "Fides Mbuya"){
                                                $src = "uploads/team_07.png";
                                                $level = "(LL.B;PGD-LP)Advocate
                                                            LL.B-University of Dar es salaam
                                                            PGD-LP Law School of Tanzania
                                                            Membership: East African Society and Tanganyika Law Society/TLS
                                                            ";
                                                $desc = "";
                                                $edu = "";
                                                $cunsult = "
                                                    KEY AREAS- Intellectual Property Law including
                                                        <ul class='list1'>
                                                        <li>Registration of Patents: conducting research on the availability of the said Patent, drafting specifications and claims, responding to the examiners queries, filing PCT applications, drafting and filing of assignment and licensing agreements including infringement petitions;</li>
                                                        <li>Trademarks: Complying with all the formalities with respect to prosecution of trademarks, ie registration and litigation matters of Trade Marks and Service Marks, </li>
                                                        <li>Copyrights: Complying with the formalities of getting Copyright and Designs registered with the authorities, giving opinion regarding protection of the copyright and filing petitions of infringement as required;</li>
                                                        <li>Appearance before authorities and/or courts in matters pertaining to filing of applications and removing objections thereof;</li>
                                                        </ul>";
                                                $title = "Advocate (IP Associate)";
                                            }
                                            else if($_GET['Attorney'] == "Rita Akena"){
                                                $src = "uploads/team_03.png";
                                                $level = "(LL.B;PGD-LP)Advocate
                                                        Membership: East African Law Society, Tanganyika Law Society/TLS and Zanzibar Law Society
                                                        ";
                                                $desc = "Experienced in-house legal counsel with forty years’ long track record practicing in corporate, banking and financial law in Government, public and private institutions.
                                                        She has acted for clients in the mining, banking, telecommunications and insurance industries. In addition, Rita has participated in several high-level negotiations for the Government of Zanzibar, public corporations, foreign investors and local businessmen.
                                                        ";
                                                $edu = "LL.B (University of Dar es Salaam)
                                                        LL.M in International Legal Studies (American University) Washington, DC
                                                        Certificate in International Law and Human Rights (American University) Washington, DC
                                                        Certificate in International Financial Law and Development (American University) Washington, DC
                                                        She is recipient of the prestigious Hubert Humphrey Fellowship (2003-2004) administered by the Fulbright Commission and is intended for professionals that are committed to public service. During her Hubert Humphrey Fellowship, she extended at the Protection Project, Johns Hopkins University in Washington, DC.
                                                        ";
                                                $cunsult = "<ul class='list1'>
                                                        <li>Conducted a comprehensive review of the relevant legislation and legal practice pertaining to migration and labour migration in East Africa with a view to identifying the gaps and assessing the potential for harmonization, assessing the status of ratification and/or de facto incorporation of relevant international standards into national law and practice and recommending policy initiatives and future priorities for the adoption of international norms and legislative adjustments to enhance consistency between national legislation, regional treaties and international standards.  </li>
                                                        <li>Conducted a desk review of achievements and challenges in the fight against corruption in Tanzania since 1996 in support of the preparation of a work plan for the implementation of the National Anti- Corruption Strategy and Action Plan Phase III.</li>
                                                        </ul>";
                                                $title = "Practicing Manager";
                                            }else if($_GET['Attorney'] == "Patric David"){
                                                $src = "uploads/shadow_man.png";
                                                $level = "<ul class='list1'>
                                                            <li>Founder and Managing Partner at Law Exchange Associates (Law Firm)-2018 to Present</li>
                                                            <li>Senior Partner at Wakili Associates (law Firm)-2015-2017</li>
                                                            <li>Manager, Legal Affairs SBC Tanzania Limited (In-house Counsel)-2014 to Present</li>
                                                            <li>Human Resources & Legal Office at SBC Tanzania Limited/PEPSI-2013 to 2014</li>
                                                            <li>Industrial Relations & Legal Officer at SBC Tanzania Limited/PEPSI-2010 to 2012</li>
                                                            <li>Legal officer at SBC Tanzania Limited/PEPSI-2008 to 2010</li>
                                                        </ul>";
                                                $desc = "Mr. Patric David (Advocate) is a Managing Partner and he is responsible for the overall management
                                                        of the firm. He specializes in employment relations and Alternative Dispute Resolution in
                                                        Labour Laws. He is also regularly dealing with tax consultation and corporate compliances
                                                        including governance standards and industries best practices in submission of annual returns
                                                        and ad-hoc governmental, regulatory filing, comprehensive company secretarial services for
                                                        board/shareholders meeting, transfer of shares and registration of new business set-up. He is a
                                                        Human Capital consultant on appointments, termination, redundancies and issues related to
                                                        hiring of expatriates, Work Permits, Resident Permits, negotiating and drafting of collective
                                                        agreement at work place with trade union";
                                                $edu = "<ul class='list1'>
                                                        <li>Master of Laws (LL.M) in Intellectual Property at the University of Dar es salaam (UDSM)</li>
                                                        <li>Post Graduate Diploma in Laws Mediation & Arbitration (PGDLMA) 2009-2010 at the Institute
                                                        of Social Work</li>
                                                        <li>Post Graduate Diploma in Legal Practices (PGDLP) 2010-2011 at the University of Dar es salaam,
                                                        Law School of Tanzania</li>
                                                        <li>Post Graduate in Tax & Administration (PGDT) 2017-2019 at the Institute of Tax Administration
                                                        (TRA)</li>
                                                        <li>Bachelor of Laws (LL. B) 2006-2008</li>
                                                        <li>Bachelor of Human Resources Management (BHRM) 2006-2008</li>
                                                        <li>Certificate of Account and Finance (CAF) 2004-2005</li>
                                                        </ul>";
                                                $cunsult = "<ul class='list1'>
                                                        <li>Conducted a comprehensive review of the relevant legislation and legal practice pertaining to migration and labour migration in East Africa with a view to identifying the gaps and assessing the potential for harmonization, assessing the status of ratification and/or de facto incorporation of relevant international standards into national law and practice and recommending policy initiatives and future priorities for the adoption of international norms and legislative adjustments to enhance consistency between national legislation, regional treaties and international standards.  </li>
                                                        <li>Conducted a desk review of achievements and challenges in the fight against corruption in Tanzania since 1996 in support of the preparation of a work plan for the implementation of the National Anti- Corruption Strategy and Action Plan Phase III.</li>
                                                        </ul>";
                                                $title = "Managing Partner";
                                            }
                                        }
                                        ?>
                                        <img width="371" height="585" src="<?php echo $src; ?>" class="attachment-flavius-team-member size-flavius-team-member wp-post-image" alt="" srcset="<?php echo $src; ?> 371w, <?php echo $src; ?> 190w" sizes="(max-width: 371px) 100vw, 371px" />
                                        <div class="item-content content-title ds">
                                            <h6 class="item-title text-uppercase inline-block rightmargin_5 bottommargin_0"><?php echo $_GET['Attorney']; ?></h6> <span class="position highlight"><?php echo $title; ?></span>

                                        </div>
                                    </div>
                                    <!-- .vertical-item -->
                                </div>
                                <!-- .col-md-5 -->
                                <div class="col-md-6">
                                    <div class="item-content topmargin_0 bottommargin_0 entry-content">
                                        <!-- .entry-header -->
                                        <p><?php echo $level; ?></p>
                                        <p><?php echo $desc ?></p>
                                        <?php echo $cunsult; ?>
                                        <p><?php echo $edu ?></p>

                                    </div>
                                    <!-- .entry-content -->
                                </div>
                            </div>
                            <!-- eof .row-->
                        </div>
                        <!-- eof .container -->
                    </section>
                    <!-- eof .page_content -->
                    <?php include_once 'footer.php'; ?>
                    <!-- .page_footer -->
                    <?php include_once 'copyright.php'; ?>
                    <!-- .copyrights -->
            </div>
            <!-- eof #box_wrapper -->
        </div>
        <!-- eof #canvas -->
        <!-- Instagram Feed JS -->
        <?php include_once 'script.php'; ?>
    </body>

</html>