<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">

<head>
    <?php $title = "| A Mission With A Vision";?>
    @include('user_end.parts.title-meta')
    @include('user_end.parts.favicon')

    <meta name="keywords" content="Primeasia, University, Best Private University of Bangladesh,Best private university Dhaka, pau, Admission going on, Private university admission, MBA admission, CSE Admission, EEE admission, BBA Department, English Department Admission, Top Private University Bangladesh, Top 10 Private university Bangladesh, University_admission, Online admission, Primeasia University online admission, Top 10 Private university">

    <meta name="author" content="Students of Primeasia University">

    <meta name="description" content="Established in 2003 under the Private University Act, Primeasia University (PaU) focuses on teaching, learning and research explicitly. It envisions becoming a leading private university of Bangladesh with an aspiration for fostering cognitive reflection, preserving ethical values and promoting sustainable development. PaU tries to ensure a quality education and aims at meeting the demand of a global society by developing a sensibly skilled workforce to cater to the national development and progress. Alongside we put our every effort to enthuse our students into nationalistic fervour. PaU offers a diverse range of disciplines, robustly presided by the Institutional Quality Assurance Cell (¡QAC) in the light of Outcome Based Education curriculum (OBE) to prepare the students professionally to withstand the challenges of every paradigm. The university is approved by the University Grants Commission (UGC) and proactively run by an acknowledged Board of Trustees constituted as per the university act in coordination with Bangladesh Accreditation Council (BAC). Several programmes of PaU are accredited and well acknowledged by the Institute of Engineers, Bangladesh (IEB), the Pharmacy Council of Bangladesh (PCB), Bangladesh Bar Council and other regulatory bodies.">

    <meta name="robots" content="index, follow">

    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="publisher" content="Primeasia University">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CMerriweather:400,300,300italic,400italic,700,700italic">
    <link rel="stylesheet" href="{{asset('/')}}public/front_end/css/style.css">
</head>

<body>
    <div class="page-loader">
        <div class="page-loader-body"><span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
        </div>
    </div>
    <div class="page text-center">
        <header class="page-head">
            <!-- RD Navbar Transparent-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                    data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                    data-lg-stick-up-offset="120px" data-xl-stick-up-offset="120px" data-xxl-stick-up-offset="120px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Panel-->
                        @include('user_end.parts.nav-links')
                        <div class="rd-navbar-menu-wrap clearfix novi-background">
                            <!--Navbar Brand-->
                            <div class="rd-navbar-brand"><a href="{{URL::to('/')}}"><img
                                        src="{{asset('/')}}public/front_end/images/logo-large-2000x445-1_with_motto.png" alt=""
                                        srcset="{{asset('/')}}public/front_end/images/logo-large-2000x445-1_with_motto.png 2x"></a>
                            </div>
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-mobile-scroll">
                                    <div class="rd-navbar-mobile-header-wrap">
                                        <!--Navbar Brand Mobile-->
                                        <div class="rd-navbar-mobile-brand"><a href="{{URL::to('/')}}"><img
                                                    src="{{asset('/')}}public/front_end/images/logo-default-2-144x122-1.png"
                                                    alt=""
                                                    srcset="{{asset('/')}}public/front_end/images/logo-default-2-144x122-1.png"></a></a>
                                        </div>
                                    </div> <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li><a href="{{URL::to('/')}}">Home</a></li>
                                        <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="#"
                                                onClick="return false;">Admission</a>
                                            <ul class="rd-navbar-dropdown rd-navbar-open-right">
                                                <li><a href="{{URL::to('/admission-overview')}}">Admission Overview</a>
                                                </li>
                                                <!-- <li><a href="{{URL::to('/admission-requirements')}}">Admission Requirements</a></li> -->
                                                <li><a href="{{URL::to('/international-students')}}">International
                                                        Students</a></li>
                                                <li><a href="{{URL::to('/tuition-fees')}}">Tuition Fees</a></li>
                                                <li><a href="{{URL::to('/scholarships-and-waivers')}}">Scholarships
                                                        &amp; Waivers</a>
                                                </li>
                                                <li><a href="{{URL::to('/transfer-of-students')}}">Transfer Of
                                                        Students</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" onClick="return false;">Academics</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="{{URL::to('/schools-and-departments')}}">Schools &amp;
                                                        Departments</a>
                                                </li>
                                                <li><a href="{{URL::to('/academic-programs')}}">Academic Programs</a>
                                                </li>
                                                <li><a href="{{URL::to('/faculty-members')}}">Faculty Members</a></li>
                                            </ul>
                                        </li>
                                        <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="#"
                                                onClick="return false;">Research &amp; Journals</a>
                                            <ul class="rd-navbar-dropdown rd-navbar-open-right">
                                                <li><a href="{{URL::to('/divisions-of-research')}}">Divisions of
                                                        Research</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" onClick="return false;">About</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="{{URL::to('/at-a-glance')}}">At A Glance</a></li>
                                                <!-- <li><a href="#" onClick="return false;">News &amp; Events</a></li> -->
                                                <li><a href="{{URL::to('/administrative-bodies')}}">Administrative
                                                        Bodies</a></li>
                                                <li><a href="{{URL::to('/governing-bodies')}}">Governing Bodies</a></li>
                                                <li><a href="{{URL::to('/chief-advisor')}}">Chief Advisor</a></li>
                                                <li><a href="{{URL::to('/iqac')}}">IQAC</a></li>
                                                <li><a href="{{URL::to('/proctor')}}">Proctor</a></li>
                                                <li><a href="{{URL::to('/faq')}}">FAQs</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{URL::to('/campus-life')}}">Campus Life</a></li>
                                        <li><a href="{{URL::to('/contacts')}}">Contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        @yield('home-master-content')
        @include('user_end.parts.footer')
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{asset('/')}}public/front_end/js/core.min.js"></script>
    <script src="{{asset('/')}}public/front_end/js/script.js"></script>
</body>

</html>