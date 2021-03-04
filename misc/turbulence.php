
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
<title>CFD Online - Turbulence Properties, Conversions & Boundary Estimations</title>
<meta name="description" content="An online tool to convert and estimate turbulence properties like k, epsilon, omega, turbulent intensity, length-scale, eddy viscosity ratio etc." />
<meta name="keywords" content="CFD Online, cfd-online, tools, turbulent, turbulence, k, turbulent energy, epsilon, dissipation, omega, frequency, intensity, length-scale, eddy-viscosity ratio, estimation, inlet, boundary condition" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="/p7pm/p7popmenu.js"></script>
<style type="text/css" media="screen">
<!--
@import url("/p7pm/cfd_online_mainmenu.css");
@import url("/CSS/cfdonline.css");
-->
</style>
</head>
<body onload="P7_initPM(1,3,0,-5,0)"> 
<a name="top" id="top"></a> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-22128555-1', 'cfd-online.com');
  ga('send', 'pageview');

</script><table id="logo_and_banner" width="98%" border="0" cellpadding="2" cellspacing="0" summary="Logo and Banner Table Layout Table"> 
  <tr> 
    <td align="left" valign="top"> 
      <table id="logo_and_banner" width="275" border="0" cellspacing="0" cellpadding="0"> 
        <tr> 
          <td rowspan="2"><img alt="CFD Online Logo" src="/Images/new_cfdonline_logo_main_star.gif" width="60" height="78" /></td> 
          <td><img alt="CFD Online URL" src="/Images/new_cfdonline_logo_main_name.gif" width="215" height="49" /></td> 
        </tr> 
        <tr> 
          <td colspan="2"><a href="/"><img src="/Images/new_cfdonline_logo_home.gif" alt="www.cfd-online.com" width="215" height="29" longdesc="https://www.cfd-online.com" style="border-style: none" border="0" /></a></td> 
        </tr> 
      </table> 
    </td> 
    <td align="center" valign="middle" nowrap="nowrap"><!-- #BeginLibraryItem "/Library/Banner Large.lbi" --> 
      <script language="JavaScript" src="https://www.cfd-online.com/WebAdverts/ads.pl?jscript" type="text/javascript">
</script> 
      <noscript> 
      <a href= "https://www.cfd-online.com/WebAdverts/ads.pl?banner=NonSSI;page=navigation" target="_top"> <img src="https://www.cfd-online.com/WebAdverts/ads.pl?page=navigation" 
		alt="Click Here!" width="468" height="60" border="0" align="middle" /> </a> 
      </noscript> 
      <!-- #EndLibraryItem -->
    </td> 
<td align="right" valign="top">
<font face="arial" size="2">[<a href="/About/sponsors.php">Sponsors</a>]</font>
</td>
  </tr> 
</table>
<table id="main_menu" width="98%" border="0" cellpadding="1" cellspacing="0" summary="Main Menu Table"> 
<tr> 
<td> 
<ul id="p7PMnav"> 
<li id="mm"><a href="/">Home</a></li> 
<li id="mm"><a href="/Forum/news.cgi" class="p7PMtrg">News</a> 
<ul>
<li id="mm"><a href="/Forum/news.cgi">Index</a></li>
<li id="mm"><a href="/Forum/news.cgi?form=0">Post News</a></li>
<li id="mm"><a href="/Forum/news.cgi?subscribe">Subscribe/Unsubscribe</a></li>
</ul>
</li> 
<li id="mm"><a href="/Forums/" class="p7PMtrg">Forums</a> 
<ul> 
<li id="mm"><a href="/Forums/main/">Main CFD Forum</a></li> 
<li id="mm"><a href="/Forums/system-analysis">System Analysis</a></li>
<li id="mm"><a href="/Forums/structural-mechanics">Structural Mechanics</a></li>
<li id="mm"><a href="/Forums/electromagnetics">Electromagnetics</a></li>
<li id="mm"><a href="/Forums/cfd-freelancers">CFD Freelancers</a></li>
<li id="mm"><a href="/Forums/hardware/">Hardware Forum</a></li> 
<li id="mm"><a href="/Forums/lounge/">Lounge</a></li> 
<li id="mm"><a href="/Forums/software/" class="p7PMtrg">Software User Forums</a>
<ul>
<li id="mm"><a href="/Forums/ansys/" class="p7PMtrg">ANSYS</a>
<ul>
<li id="mm"><a href="/Forums/cfx/">CFX</a></li> 
<li id="mm"><a href="/Forums/fluent/">FLUENT</a></li>
<li id="mm"><a href="/Forums/ansys-meshing/">Meshing &amp; Geometry</a></li> 
</ul>
</li>
<li id="mm"><a href="/Forums/autodesk-simulation-cfd/">Autodesk</a></li>
<li id="mm"><a href="/Forums/avl-fire/">AVL FIRE</a></li>
<li id="mm"><a href="/Forums/converge/">CONVERGE</a></li>
<!-- <li id="mm"><a href="/Forums/edge">Edge</a></li>-->
<li id="mm"><a href="/Forums/floefd-floworks-flotherm">FloEFD &amp; FloTHERM</a></li> 
<li id="mm"><a href="/Forums/flow-3d/">FLOW-3D</a></li> 
<li id="mm"><a href="/Forums/numeca/">NUMECA</a></li> 
<li id="mm"><a href="/Forums/openfoam/" class="p7PMtrg">OpenFOAM</a>
<ul>
<li id="mm"><a href="/Forums/openfoam-news-announcements/">News & Announcements</a></li> 
<li id="mm"><a href="/Forums/openfoam-installation/">Installation</a></li>
<li id="mm"><a href="/Forums/openfoam-meshing/">Meshing</a></li>
<li id="mm"><a href="/Forums/openfoam-pre-processing/">Pre-Processing</a></li>
<li id="mm"><a href="/Forums/openfoam-solving/">Solving</a></li>
<li id="mm"><a href="/Forums/openfoam-post-processing/">Post-Processing</a></li>
<li id="mm"><a href="/Forums/openfoam-programming-development/">Programming</a></li>
<li id="mm"><a href="/Forums/openfoam-verification-validation/">Verification & Validation</a></li>
<li id="mm"><a href="/Forums/openfoam-community-contributions/">Community Contributions</a></li>
<li id="mm"><a href="/Forums/openfoam-bugs/">Bugs</a></li>
</ul>
</li>
<li id="mm"><a href="/Forums/phoenics/">Phoenics</a></li> 
<li id="mm"><a href="/Forums/siemens/" class="p7PMtrg">Siemens</a>
<ul>
<li id="mm"><a href="/Forums/star-ccm/">STAR-CCM+</a></li> 
<li id="mm"><a href="/Forums/star-cd/">STAR-CD</a></li> 
</ul>
</li>
<li id="mm"><a href="/Forums/su2/" class="p7PMtrg">SU2</a>
<ul>
<li id="mm"><a href="/Forums/su2-news-announcements/">News & Announcements</a></li>
<li id="mm"><a href="/Forums/su2-installation/">Installation</a></li>
<li id="mm"><a href="/Forums/su2-shape-design/">Shape Design</a></li> 
</ul>
</li>
</ul>
</li>
<li id="mm"><a href="/Forums/pre-processors/" class="p7PMtrg">Pre-processors</a>
<ul>
<li id="mm"><a href="/Forums/ansa/">ANSA</a></li> 
<li id="mm"><a href="/Forums/engrid/">enGrid</a></li> 
<li id="mm"><a href="/Forums/gridpro/">GridPro</a></li> 
<li id="mm"><a href="/Forums/pointwise/">Pointwise</a></li> 
</ul>
</li> 
<li id="mm"><a href="/Forums/post-processors/" class="p7PMtrg">Post-Processors</a>
<ul>
<li id="mm"><a href="/Forums/ensight/">EnSight</a></li> 
<li id="mm"><a href="/Forums/fieldview/">FieldView</a></li> 
<li id="mm"><a href="/Forums/paraview/">ParaView</a></li> 
<li id="mm"><a href="/Forums/tecplot/">Tecplot</a></li> 
</ul>
</li>
<li id="mm"><a href="/Forums/special-topics/" class="p7PMtrg">Special Topics</a>
<ul>
<li id="mm"><a href="/Forums/mesh-generation/">Mesh Generation</a></li> 
<li id="mm"><a href="/Forums/visualization/">Visualization</a></li>  
</ul>
</li>
<li id="mm"><a href="/Forums/community/" class="p7PMtrg">CFD Online Community</a>
<ul>
<li id="mm"><a href="/Forums/site-news-announcements/">Site News</a></li> 
<li id="mm"><a href="/Forums/site-help-feedback-discussions/">Site Help &amp; Discussions</a></li> 
<li id="mm"><a href="/Forums/cfd-wiki/">CFD-Wiki</a></li> 
</ul>
</li> 
</ul>
</li> 
<li id="mm"><a href="/Wiki/Main_Page" class="p7PMtrg">Wiki</a> 
<ul> 
<li id="mm"><a href="/Wiki/CFD-Wiki:Introduction">Introduction</a></li>
<li id="mm"><a href="/Wiki/Special:Recentchanges">Recent Changes</a></li>
<li id="mm"><a href="/Wiki/Reference_section" class="p7PMtrg">Reference Section</a>
<ul>
<li id="mm"><a href="/Wiki/Fluid_dynamics">Fluid Dynamics</a></li> 
<li id="mm"><a href="/Wiki/Turbulence_modeling">Turbulence Modeling</a></li> 
<li id="mm"><a href="/Wiki/Numerical_methods">Numerical Methods</a></li> 
<li id="mm"><a href="/Wiki/Meshing">Meshing</a></li> 
</ul>
</li>
<li id="mm"><a href="/Wiki/Special_topics" class="p7PMtrg">Special Topics</a>
<ul>
<li id="mm"><a href="/Wiki/Aero-acoustics_and_noise">Aero-Acoustics</a></li>
<li id="mm"><a href="/Wiki/Combustion">Combustion</a></li> 
<li id="mm"><a href="/Wiki/Parallel_computing">Parallel Computing</a></li> 
<li id="mm"><a href="/Wiki/Turbulence">Turbulence</a></li> 
</ul>
</li> 
<li id="mm"><a href="/Wiki/Application_areas" class="p7PMtrg">Application Areas</a>
<ul>
<li id="mm"><a href="/Wiki/Aerospace">Aerospace</a></li> 
<li id="mm"><a href="/Wiki/Automotive">Automotive</a></li> 
<li id="mm"><a href="/Wiki/Turbomachinery">Turbomachinery</a></li> 
</ul>
</li>
<li id="mm"><a href="/Wiki/Best_practice_guidelines" class="p7PMtrg">Best Practice Guides</a>
<ul>
<li id="mm"><a href="/Wiki/Best_practice_guidelines_for_automotive_CFD">Automotive CFD</a></li> 
<li id="mm"><a href="/Wiki/Best_practice_guidelines_for_turbomachinery_CFD">Turbomachiney CFD</a></li> 
<li id="mm"><a href="/Wiki/Best_practice_guidelines_for_heat_transfer_simulations">Heat Transfer CFD</a></li> 
</ul>
</li>
<li id="mm"><a href="/Wiki/Validation_and_test_cases">Validation Cases</a></li>
<li id="mm"><a href="/Wiki/Codes">Codes</a></li>
<li id="mm"><a href="/Wiki/Source_code_archive">Source Code Archive</a></li>
<li id="mm"><a href="/Wiki/FAQ%27s" class="p7PMtrg">FAQ's</a>
<ul>
<li id="mm"><a href="/Wiki/Ansys_FAQ">Ansys</a></li>
<li id="mm"><a href="/Wiki/CHAM_FAQ">CHAM</a></li>
<li id="mm"><a href="/Wiki/CONVERGE_FAQ">CONVERGE</a></li>
<li id="mm"><a href="/Wiki/Fluent_FAQ">Fluent</a></li>
<li id="mm"><a href="/Wiki/Metacomp_FAQ">Metaconp</a></li>
<li id="mm"><a href="/Wiki/MeteoDyn_FAQ">MeteoDyn</a></li>
<li id="mm"><a href="/Wiki/Siemens_FAQ">Siemens</a></li>
</ul>
</li>
<li id="mm"><a href="/Wiki/History_of_CFD">History of CFD</a></li>
<li id="mm"><a href="/Wiki/CFD-Wiki:About" class="p7PMtrg">About CFD-Wiki</a>
<ul>
<li id="mm"><a href="/Wiki/Help:Contents">Help</a></li>
<li id="mm"><a href="/Wiki/CFD-Wiki:FAQ">FAQ</a></li>
<li id="mm"><a href="/Wiki/CFD-Wiki:Contribute_something_today">Getting Started</a></li>
<li id="mm"><a href="/Wiki/CFD-Wiki:Community_Portal">Community Portal</a></li>
<li id="mm"><a href="/Wiki/CFD-Wiki:Donate_texts">Donate Texts</a></li>
<li id="mm"><a href="/Wiki/CFD-Wiki:Donated_texts">Donated Texts</a></li>
</ul>
</li>
</ul>
</li> 
<li id="mm"><a href="/Links/" class="p7PMtrg">Links</a> 
<ul> 
<li id="mm"><a href="/Links/whatsnew.html">What's New</a></li> 
<li id="mm"><a href="/Links/intro.html">Introduction</a></li> 
<li id="mm"><a href="/Links/modeling_and_numerics.html" class="p7PMtrg">Modeling &amp; Numerics</a> 
<ul> 
<li id="mm"><a href="/Links/modeling_and_numerics.html#turbulence">Turbulence</a></li>
<li id="mm"><a href="/Links/modeling_and_numerics.html#combustion">Combustion</a></li> 
<li id="mm"><a href="/Links/modeling_and_numerics.html#discr">Discretization Schemes</a></li> 
<li id="mm"><a href="/Links/modeling_and_numerics.html#solvers">Solvers</a></li> 
<li id="mm"><a href="/Links/modeling_and_numerics.html#multigrid">Multigrid Methods</a></li> 
<li id="mm"><a href="/Links/modeling_and_numerics.html#fem">Finite Element Methods</a></li> 
<li id="mm"><a href="/Links/modeling_and_numerics.html#cartesian">Cartesian Methods / AMR</a></li> 
<li id="mm"><a href="/Links/modeling_and_numerics.html#numana">Numerial Analysis</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/meshing.html" class="p7PMtrg">Mesh Generation</a> 
<ul> 
<li id="mm"><a href="/Links/meshing.html#general">General Resources</a></li> 
<li id="mm"><a href="/Links/meshing.html#projects">Selected Projects</a></li> 
<li id="mm"><a href="/Links/meshing.html#companies">Companies</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/programming.html" class="p7PMtrg">Programming &amp; Dev.</a> 
<ul> 
<li id="mm"><a href="/Links/programming.html#dataformats">Data Formats</a></li> 
<li id="mm"><a href="/Links/programming.html#libraries">Software Libraries</a></li> 
<li id="mm"><a href="/Links/soft.html#num">Numerical Software</a></li> 
<li id="mm"><a href="/Links/programming.html#parallel">Parallel Computing</a></li> 
<li id="mm"><a href="/Links/programming.html#general">General Sites</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/soft.html" class="p7PMtrg">Software</a> 
<ul> 
<li id="mm"><a href="/Links/soft.html#cfd">Fluid Dynamics</a></li> 
<li id="mm"><a href="/Links/soft.html#mesh">Mesh Generation</a></li> 
<li id="mm"><a href="/Links/soft.html#vis">Visualization</a></li> 
<li id="mm"><a href="/Links/soft.html#com">Commercial CFD Codes</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/hard.html" class="p7PMtrg">Hardware</a> 
<ul> 
<li id="mm"><a href="/Links/hard.html#benchmarks">Benchmarks</a></li> 
<li id="mm"><a href="/Links/hard.html#news">News and Reviews</a></li> 
<li id="mm"><a href="/Links/hard.html#vendors">Hardware Vendors</a></li> 
<li id="mm"><a href="/Links/hard.html#cloud">Clouds</a></li>
<li id="mm"><a href="/Links/hard.html#clusters">Clusters</a></li>
<li id="mm"><a href="/Links/hard.html#gpgpu">GPGPU</a></li> 
<li id="mm"><a href="/Links/hard.html#misc">Misc</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/refs.html" class="p7PMtrg">References</a> 
<ul> 
<li id="mm"><a href="/Links/refs.html#validation">Validation Cases</a></li> 
<li id="mm"><a href="/Links/refs.html#airfoils">Airfoils</a></li> 
<li id="mm"><a href="/Links/refs.html#consts">Material Properties</a></li> 
<li id="mm"><a href="/Links/refs.html#glossaries">Glossaries</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/finddocs.html" class="p7PMtrg">Finding Documents</a> 
<ul> 
<li id="mm"><a href="/Links/finddocs.html#preprints">Preprints Online</a></li> 
<li id="mm"><a href="/Links/finddocs.html#papers">Papers &amp; Reports</a></li> 
<li id="mm"><a href="/Links/finddocs.html#books">Books</a></li> 
<li id="mm"><a href="/Links/finddocs.html#journals">Journals</a></li> 
<li id="mm"><a href="/Links/finddocs.html#publ">Publishers</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/tools.html" class="p7PMtrg">Online Tools</a> 
<ul> 
<li id="mm"><a href="/Links/tools.html#units">Unit Converters</a></li> 
<li id="mm"><a href="/Links/tools.html#calcs">Calculators</a></li> 
<li id="mm"><a href="/Links/tools.html#yplus">y+ Estimation</a></li> 
<li id="mm"><a href="/Links/tools.html#compressible">Compressible Flow</a></li>
<li id="mm"><a href="/Links/tools.html#heat">Heat Transfer</a></li> 
<li id="mm"><a href="/Links/tools.html#airfoils">Airfoil Generators</a></li> 
<li id="mm"><a href="/Links/tools.html#simple">Simple Cases</a></li> 
<li id="mm"><a href="/Links/tools.html#combustion">Combustion</a></li> 
<li id="mm"><a href="/Links/tools.html#proc">Cycles &amp; Processes</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/onlinedocs.html" class="p7PMtrg">Online Books &amp; Guides</a> 
<ul> 
<li id="mm"><a href="/Links/onlinedocs.html#cfdintros">CFD Introductions</a></li> 
<li id="mm"><a href="/Links/onlinedocs.html#books">Books</a></li> 
<li id="mm"><a href="/Links/onlinedocs.html#bestpractice">Best Practice Guidelines</a></li> 
<li id="mm"><a href="/Links/onlinedocs.html#aero">Fluid &amp; Aero Dynamics</a></li>
<li id="mm"><a href="/Links/onlinedocs.html#seminars">Seminars</a></li>  
<li id="mm"><a href="/Links/onlinedocs.html#encyclopedias">Encyclopedias</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/cmc.html" class="p7PMtrg">Social Media</a> 
<ul> 
<li id="mm"><a href="/Links/cmc.html#forums">Discussion Forums</a></li> 
<li id="mm"><a href="/Links/cmc.html#blogs">Blogs</a></li> 
<li id="mm"><a href="/Links/cmc.html#twitter">Twitter</a></li> 
<li id="mm"><a href="/Links/cmc.html#youtube">YouTube</a></li> 
<li id="mm"><a href="/Links/cmc.html#facebook">Facebook</a></li> 
<li id="mm"><a href="/Links/cmc.html#linkedin">LinkedIn</a></li>
<li id="mm"><a href="/Links/cmc.html#podcasts">Podcasts</a></li>
<li id="mm"><a href="/Links/cmc.html#usenet">Usenet Newsgroups</a></li> 
<li id="mm"><a href="/Links/cmc.html#mail_lists">Mailing Lists</a></li> 
<li id="mm"><a href="/Links/cmc.html#chat">Chats</a></li> 
<li id="mm"><a href="/Links/cmc.html#news">News</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/education.html" class="p7PMtrg">Education</a> 
<ul> 
<li id="mm"><a href="/Links/education.html#cfdprogrammes">CFD Programmes</a></li> 
<li id="mm"><a href="/Links/education.html#onlinelabs">Online Labs</a></li> 
<li id="mm"><a href="/Links/education.html#onlinecourses">Online Courses</a></li> 
<li id="mm"><a href="/Links/education.html#coursematerial">Course Material</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/jobs.html" class="p7PMtrg">Jobs</a> 
<ul> 
<li id="mm"><a href="/Links/jobs.html#cfd">CFD Job Resources</a></li> 
<li id="mm"><a href="/Links/jobs.html#orgs">Companies &amp; Orgs.</a></li> 
<li id="mm"><a href="/Links/jobs.html#general">General Resources</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/events.html" class="p7PMtrg">Events</a> 
<ul> 
<li id="mm"><a href="/Links/events.html#calendars">Event Calendars</a></li> 
<li id="mm"><a href="/Links/events.html#orgs">Specific Organizations</a></li> 
<li id="mm"><a href="/Links/events.html#vendors">Vendor Events Lists</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/misc.html" class="p7PMtrg">Misc</a> 
<ul> 
<li id="mm"><a href="/Links/misc.html#picts">Pictures and Movies</a></li> 
<li id="mm"><a href="/Links/misc.html#fun">Fun</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Links/links.html">Links to Links</a></li>
<li id="mm"><a href="/Links/suggest_link.php">Suggest New Link</a></li>
<li id="mm"><a href="/Links/about.html">About this Section</a></li>
</ul> 
</li> 
<li id="mm"><a href="/Jobs/" class="p7PMtrg">Jobs</a> 
<ul> 
<li id="mm"><a href="/Jobs/jobform.php">Post Job Ad</a></li> 
<li id="mm"><a href="/Jobs/listjobs.php">List All Jobs</a></li> 
<li id="mm"><a href="/Jobs/listjobs.php" class="p7PMtrg">List Jobs by Type</a> 
<ul><li id="mm"><a href="/Jobs/listjobs.php?category=Job%20in%20Industry">Job in Industry (29)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?category=Job%20in%20Academia">Job in Academia (24)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?category=PostDoc%20Position">PostDoc Position (39)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?category=PhD%20Studentship">PhD Studentship (52)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?category=Internship">Internship (5)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?category=Diploma%20Work">Diploma Work (1)</a></li>
</ul> 
</li> 
<li id="mm"><a href="/Jobs/listbyloc.php" class="p7PMtrg">List Jobs by Location</a> 
<ul> 
<li id="mm"><a href="/Jobs/listjobs.php?continent=Asia" class="p7PMtrg">Asia</a>
<ul>
<li id="mm"><a href="/Jobs/listjobs.php?country=China">China (16)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=India">India (7)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Saudi%20Arabia">Saudi Arabia (1)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Singapore">Singapore (2)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=South%20Korea">South Korea (2)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Turkey">Turkey (2)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=United%20Arab%20Emirates">United Arab Emirates (1)</a></li>
</ul></li>
<li id="mm"><a href="/Jobs/listjobs.php?continent=Europe" class="p7PMtrg">Europe</a>
<ul>
<li id="mm"><a href="/Jobs/listjobs.php?country=Austria">Austria (5)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Belgium">Belgium (5)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=France">France (13)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Germany">Germany (8)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Greece">Greece (2)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Ireland">Ireland (3)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Italy">Italy (1)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Luxembourg">Luxembourg (1)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Netherlands">Netherlands (1)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Norway">Norway (1)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Poland">Poland (1)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Portugal">Portugal (2)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Russian%20Federation">Russian Federation (2)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Spain">Spain (2)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=Sweden">Sweden (1)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=United%20Kingdom">United Kingdom (19)</a></li>
</ul></li>
<li id="mm"><a href="/Jobs/listjobs.php?continent=North%20America" class="p7PMtrg">North America</a>
<ul>
<li id="mm"><a href="/Jobs/listjobs.php?country=Canada">Canada (8)</a></li>
<li id="mm"><a href="/Jobs/listjobs.php?country=United%20States">United States (36)</a></li>
</ul></li>
<li id="mm"><a href="/Jobs/listjobs.php?continent=Oceania" class="p7PMtrg">Oceania</a>
<ul>
<li id="mm"><a href="/Jobs/listjobs.php?country=Australia">Australia (7)</a></li>
</ul></li>
<li id="mm"><a href="/Jobs/listjobs.php?continent=South%20America" class="p7PMtrg">South America</a>
<ul>
<li id="mm"><a href="/Jobs/listjobs.php?country=Chile">Chile (1)</a></li>
</ul></li> 
</ul> 
</li> 
<li id="mm"><a href="/Jobs/search.php">Search Job Ads</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Books/" class="p7PMtrg">Books</a>
<ul>
<li id="mm"><a href="/Books/browse_subjects.php">Browse Categories</a></li>
<li id="mm"><a href="/Books/search_books.php">Search</a></li>
<li id="mm"><a href="/Books/book_form.php">Submit a Book</a></li>
<li id="mm"><a href="/Books/help.php">Help</a></li>
</ul>
</li> 
<li id="mm"><a href="/Events/" class="p7PMtrg">Events</a>
<ul> 
<li id="mm"><a href="/Events/post.php">Post New Event</a></li> 
<li id="mm"><a href="/Events/list.php">List All Events</a></li> 
<li id="mm"><a href="/Events/list.php" class="p7PMtrg">List Events by Type</a> 
<ul>
<li id="mm"><a href="/Events/list.php?event_type_id=1">Conferences (2)</a></li>
<li id="mm"><a href="/Events/list.php?event_type_id=2">Workshops (1)</a></li>
<li id="mm"><a href="/Events/list.php?event_type_id=3">Courses (4)</a></li>
<li id="mm"><a href="/Events/list.php?event_type_id=4">Seminars (1)</a></li>
<li id="mm"><a href="/Events/list.php?event_type_id=6">Online Events (5)</a></li>
<li id="mm"><a href="/Events/list.php?event_type_id=7">Others (1)</a></li>
</ul> 
</li> 
<li id="mm"><a href="/Events/listbyloc.php" class="p7PMtrg">List Events by Location</a>
<ul> 
<li id="mm"><a href="/Events/list.php?continent=Africa" class="p7PMtrg">Africa</a>
<ul>
<li id="mm"><a href="/Events/list.php?event_country_id=74">Algeria (4)</a></li>
</ul>
</li>
<li id="mm"><a href="/Events/list.php?continent=Asia" class="p7PMtrg">Asia</a>
<ul>
<li id="mm"><a href="/Events/list.php?event_country_id=25">India (1)</a></li>
</ul>
</li>
<li id="mm"><a href="/Events/list.php?continent=Europe" class="p7PMtrg">Europe</a>
<ul>
<li id="mm"><a href="/Events/list.php?event_country_id=3">Austria (1)</a></li>
<li id="mm"><a href="/Events/list.php?event_country_id=19">France (1)</a></li>
<li id="mm"><a href="/Events/list.php?event_country_id=31">Italy (1)</a></li>
<li id="mm"><a href="/Events/list.php?event_country_id=54">Sweden (1)</a></li>
<li id="mm"><a href="/Events/list.php?event_country_id=55">Switzerland (1)</a></li>
<li id="mm"><a href="/Events/list.php?event_country_id=61">United Kingdom (3)</a></li>
</ul>
</li>
<li id="mm"><a href="/Events/list.php?continent=North%20America" class="p7PMtrg">North America</a>
<ul>
<li id="mm"><a href="/Events/list.php?event_country_id=62">United States (1)</a></li>
</ul></li>
 
</ul> 
</li> 
</ul> 
</li> 
<li id="mm"><a href="/Tools/" class="p7PMtrg">Tools</a> 
<ul>
<li id="mm"><a href="javascript:void(window.open('/Tools/rpncalc.html','RPNCalc','status=0,scrollbars=0,resizable=0,width=400,height=365'))">RPN Calculator</a></li>
<li id="mm"><a href="javascript:void(window.open('/Tools/scicalc.html','SciCalc','status=0,scrollbars=0,resizable=0,width=250,height=345'))">Scientific Calculator</a></li>
<li id="mm"><a href="/Tools/unit_conversion.php">Unit Conversion</a></li> 
<li id="mm"><a href="/Tools/yplus.php">Y+ Estimation</a></li> 
<li id="mm"><a href="/Tools/turbulence.php">Turbulence Properties</a></li> 
</ul> 
</li> 
<li id="mm"><a href="/Feeds/" class="p7PMtrg">Feeds</a>
<ul>
<li id="mm"><a href="/Feeds/news.php">News</a></li>
<li id="mm"><a href="/Feeds/blogs.php">Blogs</a></li>
<li id="mm"><a href="/Feeds/vendors.php">Vendors</a></li>
<li id="mm"><a href="/Feeds/jobs.php">Jobs</a></li>
<li id="mm"><a href="/Feeds/journals.php">Journals</a></li>
</ul> 
</li> 
<li id="mm"><a href="/About/" class="p7PMtrg">About</a> 
<ul>
<li id="mm"><a href="/About/">About CFD Online</a></li>
<li id="mm"><a href="/About/privacy_policy.php">Privacy Policy</a></li>
<li id="mm"><a href="/About/contacts.php">Contacts &amp; Feedback</a></li>
<li id="mm"><a href="/Stats/">Web Server Statistics</a></li> 
<li id="mm"><a href="/About/sponsors.php">List of Sponsors</a></li> 
<li id="mm"><a href="/About/sponsor.php">Advertising on this Site</a></li> 
</ul> 
</li> 

<li id="mm"><a href="/Search/">Search</a></li> 
<!--[if lte IE 6]><style>#p7PMnav a{height:1em;}#p7PMnav li{height:1em;}#p7PMnav ul li{float:left;clear:both;width:100%}</style><![endif]--> 
<!--[if IE 6]><style>#p7PMnav ul li{clear:none;}</style><![endif]--> 
</ul> 
</td> 
</tr> 
</table> 

 
<div id="pageContent"> 
 
<div id="pmmcrumb"><a id="pmmcr" href="/">Home</a> &gt; </div> 
<h2>Turbulence Properties, Conversions & Boundary  Estimations</h2><script language="JavaScript" type="text/javascript">
<!--

// return the value of the radio button that is checked
// return an empty string if none are checked, or
// there are no radio buttons

window.onload=openPage ;

var DefaultColor = "#FFFFFF";
var ErrorColor = "#FFCCCC";
var SourceColor = "#CCFFFF";
var TargetColor = "#CCFFCC";

function openPage() {
	P7_initPM(1,3,0,-5,0);
	clearformColors(document.getElementById('turb_prop'));
	document.getElementById('ErrorColor').bgColor = ErrorColor;
	document.getElementById('SourceColor').bgColor = SourceColor;
	document.getElementById('TargetColor').bgColor = TargetColor;
}

function clearformColors(form) {
   form.u_freestream.style.backgroundColor=DefaultColor;
   form.k.style.backgroundColor=DefaultColor;
   form.epsilon.style.backgroundColor=DefaultColor;
   form.omega.style.backgroundColor=DefaultColor;
   form.Tu.style.backgroundColor=DefaultColor;
   form.Tu_L.style.backgroundColor=DefaultColor;
   form.nu.style.backgroundColor=DefaultColor;
   form.eddy_viscosity_ratio.style.backgroundColor=DefaultColor;
   form.u_freestream.style.border="1px solid lightgrey";
   form.k.style.border="1px solid lightgrey";
   form.epsilon.style.border="1px solid lightgrey";
   form.omega.style.border="1px solid lightgrey";
   form.Tu.style.border="1px solid lightgrey";
   form.Tu_L.style.border="1px solid lightgrey";
   form.nu.style.border="1px solid lightgrey";
   form.eddy_viscosity_ratio.style.border="1px solid lightgrey";
}

function resetForm(form){
   form.reset();
   clearformColors(form)
} 

function getCheckedValue(radioObj) {
	if(!radioObj)
		return "";
	var radioLength = radioObj.length;
	if(radioLength == undefined)
		if(radioObj.checked)
			return radioObj.value;
		else
			return "";
	for(var i = 0; i < radioLength; i++) {
		if(radioObj[i].checked) {
			return radioObj[i].value;
		}
	}
	return "";
}

function check_positive_number(data, name) {
	if (!isNaN(parseFloat(data.value)) && isFinite(data.value) && (data.value > 0.0)) {
		data.style.backgroundColor = DefaultColor
		return(true)
	} else  {
		alert(name +  " must be set to a positive number.")
		data.style.backgroundColor = ErrorColor
		return(false)
	}
}

function check_number(data, name) {
	if (!isNaN(parseFloat(data.value)) && isFinite(data.value) && (data.value > 0.0)) {
		return(true)
	} else  {
		alert(name +  " must be set to a number.")
		data.style.backgroundColor = ErrorColor
		return(false)
	}
}

function estimate(form) {
  to_estimate=getCheckedValue(form.estimation)
  if (to_estimate != "") {
    switch(to_estimate){
      case "turbulence_intensity":
	    switch(form.level_of_turbulence.value) {
		  case "low_turbulence":
    		form.Tu.value = "0.5"
			form.Tu.style.backgroundColor = TargetColor;
		    break
		  case "medium_turbulence":
		    form.Tu.value = "2"
			form.Tu.style.backgroundColor = TargetColor;
		    break
		  case "high_turbulence":
            form.Tu.value = "5"
		    form.Tu.style.backgroundColor = TargetColor;
			break
		}
        break
	}
  } else {
    alert("Nothing marked to be estimated")
  }
}

function convert(form) {
  to_convert = 	getCheckedValue(form.conversion)
  clearformColors(form)
  if (to_convert != "") {
    switch(to_convert){
    	case "omega_from_k_epsilon":
			if (check_positive_number(form.k, "Turbulence kinetic energy") && 
				check_positive_number(form.epsilon, "Turbulence dissipation")) {
				form.k.style.backgroundColor = SourceColor
				form.epsilon.style.backgroundColor = SourceColor
				form.omega.style.backgroundColor = TargetColor
				form.omega.value = form.epsilon.value / (form.k.value*0.09)
			}
	    break;
      	case "epsilon_from_k_omega":
			if (check_positive_number(form.k, "Turbulence kinetic energy") && 
				check_positive_number(form.omega, "Specific turbulence dissipation")) {
				form.k.style.backgroundColor = SourceColor
				form.omega.style.backgroundColor = SourceColor
				form.epsilon.style.backgroundColor = TargetColor
				form.epsilon.value = form.omega.value * form.k.value * 0.09 
			}
	    break;
		case "turbulence_variables_from_intensity_length_scale":
			if (check_positive_number(form.u_freestream, "Freestream velocity") && 
				check_positive_number(form.Tu, "Turbulence intensity") &&
				check_positive_number(form.Tu_L, "Turbulence length scale")) {
				form.u_freestream.style.backgroundColor = SourceColor
				form.Tu.style.backgroundColor = SourceColor
				form.Tu_L.backgroundColor = SourceColor
				form.k.style.backgroundColor = TargetColor
				form.epsilon.style.backgroundColor = TargetColor
				form.omega.style.backgroundColor = TargetColor
				form.k.value = 1.5 * Math.pow(form.Tu.value/100,2) * Math.pow(form.u_freestream.value,2)
				form.epsilon.value = 0.09 * Math.pow(form.k.value,1.5) / form.Tu_L.value
				form.omega.value = form.epsilon.value / (0.09 * form.k.value)
		}	    
	    break;		
		case "turbulence_variables_from_intensity_eddy_viscosity_ratio":
			if (check_positive_number(form.u_freestream, "Freestream velocity") && 
				check_positive_number(form.Tu, "Turbulence intensity") &&
				check_positive_number(form.eddy_viscosity_ratio, "Eddy viscosity ration") &&
				check_positive_number(form.nu, "Molecular dynamic viscosity")) {
				form.u_freestream.style.backgroundColor = SourceColor
				form.Tu.style.backgroundColor = SourceColor
				form.eddy_viscosity_ratio.style.backgroundColor = SourceColor
				form.k.style.backgroundColor = TargetColor
				form.epsilon.style.backgroundColor = TargetColor
				form.omega.style.backgroundColor = TargetColor			
				form.k.value = 1.5 * Math.pow(form.Tu.value/100,2) * Math.pow(form.u_freestream.value,2)
				form.epsilon.value = 0.09 * Math.pow(form.k.value,2) / (form.nu.value * form.eddy_viscosity_ratio.value)
				form.omega.value = form.epsilon.value / (0.09 * form.k.value)
			}	    
	    break;
		case "intensity_from_k":
			if (check_positive_number(form.u_freestream, "Freestream velocity") && 
				check_positive_number(form.k, "Turbulence kinetic energy")) {
				form.u_freestream.style.backgroundColor = SourceColor
				form.k.style.backgroundColor = SourceColor
				form.Tu.style.backgroundColor = TargetColor		
				form.Tu.value = 100*Math.pow((2 * form.k.value / 3), 0.5) / form.u_freestream.value
			}	    
	    break;
		case "TuL_from_k_epsilon":
			if (check_positive_number(form.k, "Turbulence kinetic energy") && 
				check_positive_number(form.epsilon, "Turbulence dissipation")) {
				form.k.style.backgroundColor = SourceColor
				form.epsilon.style.backgroundColor = SourceColor
				form.Tu_L.style.backgroundColor = TargetColor
				form.Tu_L.value = 0.09 * Math.pow(form.k.value, 1.5) / form.epsilon.value 
			}
	    break;
		case "TuL_from_k_omega":
			if (check_positive_number(form.k, "Turbulence kinetic energy") && 
				check_positive_number(form.omega, "Specific turbulence dissipation")) {
				form.k.style.backgroundColor = SourceColor
				form.omega.style.backgroundColor = SourceColor
				form.Tu_L.style.backgroundColor = TargetColor
				form.Tu_L.value = Math.pow(form.k.value, 0.5) / form.omega.value
			}
		break;
		case "eddy_viscosity_ratio_from_k_epsion":
			if (check_positive_number(form.k, "Turbulence kinetic energy") && 
				check_positive_number(form.epsilon, "Turbulence dissipation") &&
				check_positive_number(form.nu, "Molecular dynamic viscosity")) {
				form.k.style.backgroundColor = SourceColor
				form.epsilon.style.backgroundColor = SourceColor
				form.nu.style.backgroundColor = SourceColor
				form.eddy_viscosity_ratio.style.backgroundColor = TargetColor
				form.eddy_viscosity_ratio.value = (0.09 * Math.pow(form.k.value,2)) / (form.nu.value * form.epsilon.value)
			}
		break;
		case "eddy_viscosity_ratio_from_k_omega":
			if (check_positive_number(form.k, "Turbulence kinetic energy") && 
				check_positive_number(form.epsilon, "Turbulence dissipation") &&
				check_positive_number(form.nu, "Molecular dynamic viscosity")) {
				form.k.style.backgroundColor = SourceColor
				form.omega.style.backgroundColor = SourceColor
				form.nu.style.backgroundColor = SourceColor
				form.eddy_viscosity_ratio.style.backgroundColor = TargetColor
				form.eddy_viscosity_ratio.value = form.k.value / (form.nu.value * form.omega.value)
			}
		break;		
	}
  } else {
    alert("Nothing marked to be converted")
  }
}

// end hide -->
</script>

<br />
<form name="Turbulent Properties" id="turb_prop">
  <table cellspacing="5">
    <tr>
      <td colspan="4"><b>Properties</b>
        <hr /></td>
    </tr>
    <tr>
      <td style="width:250px">Freestream velocity</td>
      <td style="width:55px">U<sub>&infin;</sub></td>
      <td style="width:130px"><input type="text" id="u_freestream" name="u_freestream" value="" size="16" /></td>
      <td>[m/s]</td>
    </tr>
    <tr>
      <td><a href="/Wiki/Turbulence_kinetic_energy">Turbulence kinetic energy</a></td>
      <td>k</td>
      <td><input type="text" id="k" name="k" value="" size="16" /></td>
      <td>[J/kg] = [m^2 / s^2]</td>
    </tr>
    <tr>
      <td><a href="/Wiki/Turbulence_dissipation">Turbulence dissipation</a></td>
      <td>&epsilon;</td>
      <td><input type="text" id="epsilon" name="epsilon" value="" size="16" /></td>
      <td>[J/kgs] = [m^2 / s^3]</td>
    </tr>
    <tr>
      <td><a href="/Wiki/Specific_turbulence_dissipation">Specific turbulence dissipation</a></td>
      <td>&omega;</td>
      <td><input type="text" id="omega" name="omega" value="" size="16" /></td>
      <td>[1/s]</td>
    </tr>
    <tr>
      <td><a href="/Wiki/Turbulence_intensity">Turbulence intensity/level</a></td>
      <td>Tu</td>
      <td><input type="text" id="Tu" name="Tu" value="" size="16" /></td>
      <td>[%]</td>
    </tr>
    <tr>
      <td><a href="/Wiki/Turbulence_length_scale">Turbulence length scale</a></td>
      <td>Tu<sub>L</sub></td>
      <td><input type="text" id="Tu_L" name="Tu_L" value="" size="16" /></td>
      <td>[m]</td>
    </tr>
    <tr>
      <td><a href="/Wiki/Kinematic_viscosity">Kinematic viscosity</a></td>
      <td>&nu;</td>
      <td><input type="text" id="nu" name="nu" value="1.5e-05" size="16" /></td>
      <td>[m^2/s] (Air: 1.5e-05, Water: 1E-06 at room temp & pressure)</td>
    </tr>
    <tr>
      <td><a href="/Wiki/Eddy_viscosity_ratio">Eddy viscosity ratio</a></td>
      <td>&mu;<sub>t</sub> / &mu;</td>
      <td><input type="text" id="eddy_viscosity_ratio" name="eddy_viscosity_ratio" value="" size="16" /></td>
      <td>[]</td>
    </tr>
    <tr>
      <td colspan="2">Color codings:</td>
      <td colspan="2"><table>
          <tr>
            <td align="center" width="50px" id="SourceColor">Source</td>
            <td align="center" width="50px" id="TargetColor">Target</td>
            <td align="center" width="50px" id="ErrorColor">Error</td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td colspan="4" align="right"><input type="button" value="Reset" onclick="resetForm(this.form)" /></td>
    </tr>
    <tr>
      <td colspan="4"><b>Conversions</b>
        <hr /></td>
    </tr>
    <tr>
      <td colspan="4"><input type="radio" name="conversion" value="omega_from_k_epsilon" />
        <a href="/Wiki/Specific_turbulence_dissipation_rate">&omega;</a> from <a href="/Wiki/Turbulence_kinetic_energy">k</a> and <a href="/Wiki/Turbulence_dissipation_rate">&epsilon;</a> using &beta;* = C&mu; = 0.09, see the <a href="https://www.cfd-online.com/Wiki/Specific_turbulence_dissipation_rate">definition of &omega;</a> for formula used</br>
        <input type="radio" name="conversion" value="epsilon_from_k_omega" />
        <a href="/Wiki/Turbulence_dissipation">&epsilon;</a> from <a href="/Wiki/Turbulence_kinetic_energy">k</a> and <a href="/Wiki/Specific_turbulence_dissipation_rate">&omega;</a> using &beta; = C&mu; = 0.09, see the <a href="/Wiki/Specific_turbulence_dissipation_rate">definition of &omega;</a> for formula used<br>
        <input type="radio" name="conversion" value="turbulence_variables_from_intensity_length_scale" />
        Turbulence variables (k, &epsilon;, &omega;) from <a href="/Wiki/Turbulence_intensity">turbulence intensity (Tu)</a>, <a href="/Wiki/Turbulence_length_scale">length-scale (TuL)</a> and freestream velocity (U&infin;)<br>
        <input type="radio" name="conversion" value="turbulence_variables_from_intensity_eddy_viscosity_ratio" />
        Turbulence variables (k, &epsilon;, &omega;) from <a href="/Wiki/Turbulence_intensity">turbulence intensity (Tu)</a>, <a href="/Wiki/Eddy_viscosity_ratio">eddy viscosity ratio (&mu;t/&mu;)</a>, 
				freestream velocity (U&infin;) and <a href="/Wiki/Kinematic_viscosity">kinematic viscosity (&nu;)</a><br>
        <input type="radio" name="conversion" value="intensity_from_k" />
        <a href="/Wiki/Turbulence_intensity">Turbulence intensity (Tu)</a> from <a href="/Wiki/Turbulence_kinetic_energy">turbulence kinetic energy (k)</a> and freestream velocity (U&infin;)<br>
        <input type="radio" name="conversion" value="TuL_from_k_epsilon" />
        <a href="/Wiki/Turbulence_length_scale">Turbulence length scale (TuL)</a> from <a href="/Wiki/Turbulence_kinetic_energy">turbulence kinetic energy (k)</a> and <a href="/Wiki/Turbulence_dissipation">dissipation (&epsilon;)</a><br>
        <input type="radio" name="conversion" value="TuL_from_k_omega" />
        <a href="/Wiki/Turbulence_length_scale">Turbulence length scale (TuL)</a> from <a href="/Wiki/Turbulence_kinetic_energy">turbulence kinetic energy (k)</a> and <a href="/Wiki/Specific_turbulence_dissipation_rate">specific dissipation (&omega;)</a><br>
        <input type="radio" name="conversion" value="eddy_viscosity_ratio_from_k_epsion" />
        <a href="/Wiki/Eddy_viscosity_ratio">Turbulence eddy viscosity ratio (&mu;t/&mu;)</a> from <a href="/Wiki/Turbulence_kinetic_energy">turbulence kinetic energy (k)</a> and <a href="/Wiki/Turbulence_dissipation_rate">dissipation (&epsilon;)</a><br>
        <input type="radio" name="conversion" value="eddy_viscosity_ratio_from_k_omega" />
        <a href="/Wiki/Eddy_viscosity_ratio">Turbulence eddy viscosity ratio (&mu;t/&mu;)</a> from <a href="/Wiki/Turbulence_kinetic_energy">turbulence kinetic energy (k)</a> and <a href="/Wiki/Specific_turbulence_dissipation_rate">specific dissipation (&omega;)</a><br></td>
    </tr>
    <tr>
      <td colspan="4" align="right"><input type="button" value="Convert" onclick="convert(this.form)" /></td>
    </tr>
		<tr>
			<td colspan="4"><b>Warning!</b><p>Some codes (Fluent, Phoenics and CFD-ACE for example) use a different definition of the turbulence length scale than the conversion formulas used above. 
			See the CFD-Wiki page on <a href="/Wiki/Turbulence_length_scale">turbulence length scale</a> for more information.</p></td>
		</tr>
    <tr>
      <td colspan="4"><b>Boundary Estimations</b>
        <hr /></td>
    </tr>
      <tr>
    
      <td colspan="4">
    
    <input type="radio" name="estimation" value="turbulence_intensity" />
    Turbulence intensity:
      <select name="level_of_turbulence">
    
    <option value="low_turbulence">Low turbulence case: External flow around cars, submarines and aircrafts.</option>
    <option value="medium_turbulence">Medium turbulence case: Flow in not-so-complex devices like large pipes, fans, ventilation flows etc. or low speed flows (low Re).</option>
    <option value="high_turbulence">High turbulence case: High-speed flow inside complex geometries like heat-exchangers and flow inside rotating machinery (turbines and compressors).</option>
      </td>
    
      </tr>
    
      <tr>
    
      <td colspan="4" align="right">
      <input type="button" value="Estimate" onclick="estimate(this.form)" />
      </td>
    
      </tr>
    
  </table>
</form>
<br />
<br />
</div>
<div id="pageFooter">
<div class="alignleft"><a href="https://twitter.com/cfdonline"><img border=0 src="/Images/twitter_grey.gif" /></a>
&nbsp;
<a href="https://www.facebook.com/cfdonline"><img border=0 src="/Images/facebook_grey.gif" /></a></div>
<div class="alignright">&copy; CFD Online
<a href="http://validator.w3.org/check?uri=referer">&nbsp;</a></div>
</div>
</body></html>
