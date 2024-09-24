@extends('backoffice.layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard | Productos')

@section('css')
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-6">
            <!-- Website Analytics -->
            <div class="col-lg-6">
                <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg swiper-initialized swiper-horizontal swiper-backface-hidden"
                    id="swiper-with-pagination-cards">
                    <div class="swiper-wrapper" id="swiper-wrapper-18b95a65ccda5ae3" aria-live="off"
                        style="transition-duration: 0ms; transform: translate3d(-1204px, 0px, 0px); transition-delay: 0ms;">



                        <div class="swiper-slide swiper-slide-next" style="width: 602px;" role="group" aria-label="2 / 3"
                            data-swiper-slide-index="1">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-white mb-0">Website Analytics</h5>
                                    <small>Total 28.5% Conversion Rate</small>
                                </div>
                                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
                                    <h6 class="text-white mt-0 mt-md-3 mb-4">Spending</h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12h</p>
                                                    <p class="mb-0">Spend</p>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">127</p>
                                                    <p class="mb-0">Order</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">18</p>
                                                    <p class="mb-0">Order Size</p>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">2.3k</p>
                                                    <p class="mb-0">Items</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                    <img src="../../assets/img/illustrations/card-website-analytics-2.png"
                                        alt="Website Analytics" height="150" class="card-website-analytics-img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" style="width: 602px;" role="group" aria-label="3 / 3"
                            data-swiper-slide-index="2">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-white mb-0">Website Analytics</h5>
                                    <small>Total 28.5% Conversion Rate</small>
                                </div>
                                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
                                    <h6 class="text-white mt-0 mt-md-3 mb-4">Revenue Sources</h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">268</p>
                                                    <p class="mb-0">Direct</p>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">62</p>
                                                    <p class="mb-0">Referral</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">890</p>
                                                    <p class="mb-0">Organic</p>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                                                    <p class="mb-0">Campaign</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                    <img src="../../assets/img/illustrations/card-website-analytics-3.png"
                                        alt="Website Analytics" height="150" class="card-website-analytics-img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" style="width: 602px;" role="group"
                            aria-label="1 / 3" data-swiper-slide-index="0">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-white mb-0">Website Analytics</h5>
                                    <small>Total 28.5% Conversion Rate</small>
                                </div>
                                <div class="row">
                                    <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
                                        <h6 class="text-white mt-0 mt-md-3 mb-4">Traffic</h6>
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex mb-4 align-items-center">
                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">28%</p>
                                                        <p class="mb-0">Sessions</p>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                                                        <p class="mb-0">Leads</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex mb-4 align-items-center">
                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">3.1k</p>
                                                        <p class="mb-0">Page Views</p>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12%</p>
                                                        <p class="mb-0">Conversions</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                        <img src="../../assets/img/illustrations/card-website-analytics-1.png"
                                            alt="Website Analytics" height="150" class="card-website-analytics-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                            role="button" aria-label="Go to slide 1" aria-current="true"></span><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 3"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
            <!--/ Website Analytics -->

            <!-- Average Daily Sales -->
            <div class="col-xl-3 col-sm-6">
                <div class="card h-100">
                    <div class="card-header pb-0">
                        <h5 class="mb-3 card-title">Average Daily Sales</h5>
                        <p class="mb-0 text-body">Total Sales This Month</p>
                        <h4 class="mb-0">$28,450</h4>
                    </div>
                    <div class="card-body px-0" style="position: relative;">
                        <div id="averageDailySales" style="min-height: 105px;">
                            <div id="apexchartsdyyrl4cd"
                                class="apexcharts-canvas apexchartsdyyrl4cd apexcharts-theme-light"
                                style="width: 289px; height: 105px;"><svg id="SvgjsSvg1209" width="289"
                                    height="105" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1211" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 0)">
                                        <defs id="SvgjsDefs1210">
                                            <clipPath id="gridRectMaskdyyrl4cd">
                                                <rect id="SvgjsRect1216" width="295" height="107" x="-3" y="-1"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskdyyrl4cd"></clipPath>
                                            <clipPath id="nonForecastMaskdyyrl4cd"></clipPath>
                                            <clipPath id="gridRectMarkerMaskdyyrl4cd">
                                                <rect id="SvgjsRect1217" width="293" height="109" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1222" x1="0" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1223" stop-opacity="0.6"
                                                    stop-color="rgba(40,199,111,0.6)" offset="0"></stop>
                                                <stop id="SvgjsStop1224" stop-opacity="0.1"
                                                    stop-color="rgba(212,244,226,0.1)" offset="1"></stop>
                                                <stop id="SvgjsStop1225" stop-opacity="0.1"
                                                    stop-color="rgba(212,244,226,0.1)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine1215" x1="0" y1="0" x2="0"
                                            y2="105" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="105"
                                            fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG1228" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1229" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG1235" class="apexcharts-grid">
                                            <g id="SvgjsG1236" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine1238" x1="0" y1="0" x2="289"
                                                    y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1239" x1="0" y1="17.5" x2="289"
                                                    y2="17.5" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1240" x1="0" y1="35" x2="289"
                                                    y2="35" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1241" x1="0" y1="52.5" x2="289"
                                                    y2="52.5" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1242" x1="0" y1="70" x2="289"
                                                    y2="70" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1243" x1="0" y1="87.5" x2="289"
                                                    y2="87.5" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1244" x1="0" y1="105" x2="289"
                                                    y2="105" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1237" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine1246" x1="0" y1="105" x2="289"
                                                y2="105" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1245" x1="0" y1="1" x2="0"
                                                y2="105" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1218" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1219" class="apexcharts-series" seriesName="seriesx1"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1226"
                                                    d="M 0 105L 0 52.5C 33.71666666666667 52.5 62.616666666666674 87.5 96.33333333333334 87.5C 130.05 87.5 158.95000000000002 8.75 192.66666666666669 8.75C 226.38333333333333 8.75 255.28333333333336 35 289 35C 289 35 289 35 289 105M 289 35z"
                                                    fill="url(#SvgjsLinearGradient1222)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskdyyrl4cd)"
                                                    pathTo="M 0 105L 0 52.5C 33.71666666666667 52.5 62.616666666666674 87.5 96.33333333333334 87.5C 130.05 87.5 158.95000000000002 8.75 192.66666666666669 8.75C 226.38333333333333 8.75 255.28333333333336 35 289 35C 289 35 289 35 289 105M 289 35z"
                                                    pathFrom="M -1 122.5L -1 122.5L 96.33333333333334 122.5L 192.66666666666669 122.5L 289 122.5">
                                                </path>
                                                <path id="SvgjsPath1227"
                                                    d="M 0 52.5C 33.71666666666667 52.5 62.616666666666674 87.5 96.33333333333334 87.5C 130.05 87.5 158.95000000000002 8.75 192.66666666666669 8.75C 226.38333333333333 8.75 255.28333333333336 35 289 35"
                                                    fill="none" fill-opacity="1" stroke="#28c76f" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                    class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskdyyrl4cd)"
                                                    pathTo="M 0 52.5C 33.71666666666667 52.5 62.616666666666674 87.5 96.33333333333334 87.5C 130.05 87.5 158.95000000000002 8.75 192.66666666666669 8.75C 226.38333333333333 8.75 255.28333333333336 35 289 35"
                                                    pathFrom="M -1 122.5L -1 122.5L 96.33333333333334 122.5L 192.66666666666669 122.5L 289 122.5">
                                                </path>
                                                <g id="SvgjsG1220" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0"></g>
                                            </g>
                                            <g id="SvgjsG1221" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine1247" x1="0" y1="0" x2="289"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1248" x1="0" y1="0" x2="289"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1249" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1250" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1251" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect1214" width="0" height="0" x="0" y="0" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                        stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1234" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-18, 0)"></g>
                                    <g id="SvgjsG1212" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 52.5px;"></div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 290px; height: 137px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Average Daily Sales -->

            <!-- Sales Overview -->
            <div class="col-xl-3 col-sm-6">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <p class="mb-0 text-body">Sales Overview</p>
                            <p class="card-text fw-medium text-success">+18.2%</p>
                        </div>
                        <h4 class="card-title mb-1">$42.5k</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="d-flex gap-2 align-items-center mb-2">
                                    <span class="badge bg-label-info p-1 rounded"><i
                                            class="ti ti-shopping-cart ti-sm"></i></span>
                                    <p class="mb-0">Order</p>
                                </div>
                                <h5 class="mb-0 pt-1">62.2%</h5>
                                <small class="text-muted">6,440</small>
                            </div>
                            <div class="col-4">
                                <div class="divider divider-vertical">
                                    <div class="divider-text">
                                        <span class="badge-divider-bg bg-label-secondary">VS</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                                    <p class="mb-0">Visits</p>
                                    <span class="badge bg-label-primary p-1 rounded"><i
                                            class="ti ti-link ti-sm"></i></span>
                                </div>
                                <h5 class="mb-0 pt-1">25.5%</h5>
                                <small class="text-muted">12,749</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-6">
                            <div class="progress w-100" style="height: 10px">
                                <div class="progress-bar bg-info" style="width: 70%" role="progressbar"
                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Sales Overview -->

            <!-- Earning Reports -->
            <div class="col-lg-6">
                <div class="card h-100">
                    <div class="card-header pb-0 d-flex justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="mb-1">Earning Reports</h5>
                            <p class="card-subtitle">Weekly Earnings Overview</p>
                        </div>
                        <div class="dropdown">
                            <button
                                class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1 waves-effect waves-light"
                                type="button" id="earningReportsId" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical ti-md text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center g-md-8">
                            <div class="col-12 col-md-5 d-flex flex-column">
                                <div class="d-flex gap-2 align-items-center mb-3 flex-wrap">
                                    <h2 class="mb-0">$468</h2>
                                    <div class="badge rounded bg-label-success">+4.2%</div>
                                </div>
                                <small class="text-body">You informed of this week compared to last week</small>
                            </div>
                            <div class="col-12 col-md-7 ps-xl-8" style="position: relative;">
                                <div id="weeklyEarningReports" style="min-height: 161px;">
                                    <div id="apexchartsiprdbdcqi"
                                        class="apexcharts-canvas apexchartsiprdbdcqi apexcharts-theme-light"
                                        style="width: 294px; height: 161px;"><svg id="SvgjsSvg1252" width="294"
                                            height="161" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1254" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1253">
                                                    <linearGradient id="SvgjsLinearGradient1257" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1258" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1259" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1260" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMaskiprdbdcqi">
                                                        <rect id="SvgjsRect1262" width="308"
                                                            height="122.70080061721802" x="-2" y="0" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskiprdbdcqi"></clipPath>
                                                    <clipPath id="nonForecastMaskiprdbdcqi"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskiprdbdcqi">
                                                        <rect id="SvgjsRect1263" width="308"
                                                            height="126.70080061721802" x="-2" y="-2" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect1261" width="0" height="122.70080061721802" x="0"
                                                    y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke-dasharray="3" fill="url(#SvgjsLinearGradient1257)"
                                                    class="apexcharts-xcrosshairs" y2="122.70080061721802" filter="none"
                                                    fill-opacity="0.9"></rect>
                                                <g id="SvgjsG1282" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1283" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText1285"
                                                            font-family="Public Sans" x="21.714285714285715"
                                                            y="151.70080061721802" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#acaab1" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Public Sans;">
                                                            <tspan id="SvgjsTspan1286">Mo</tspan>
                                                            <title>Mo</title>
                                                        </text><text id="SvgjsText1288" font-family="Public Sans"
                                                            x="65.14285714285714" y="151.70080061721802"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#acaab1"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Public Sans;">
                                                            <tspan id="SvgjsTspan1289">Tu</tspan>
                                                            <title>Tu</title>
                                                        </text><text id="SvgjsText1291" font-family="Public Sans"
                                                            x="108.57142857142856" y="151.70080061721802"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#acaab1"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Public Sans;">
                                                            <tspan id="SvgjsTspan1292">We</tspan>
                                                            <title>We</title>
                                                        </text><text id="SvgjsText1294" font-family="Public Sans" x="152"
                                                            y="151.70080061721802" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#acaab1" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Public Sans;">
                                                            <tspan id="SvgjsTspan1295">Th</tspan>
                                                            <title>Th</title>
                                                        </text><text id="SvgjsText1297" font-family="Public Sans"
                                                            x="195.42857142857144" y="151.70080061721802"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#acaab1"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Public Sans;">
                                                            <tspan id="SvgjsTspan1298">Fr</tspan>
                                                            <title>Fr</title>
                                                        </text><text id="SvgjsText1300" font-family="Public Sans"
                                                            x="238.8571428571429" y="151.70080061721802"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#acaab1"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Public Sans;">
                                                            <tspan id="SvgjsTspan1301">Sa</tspan>
                                                            <title>Sa</title>
                                                        </text><text id="SvgjsText1303" font-family="Public Sans"
                                                            x="282.28571428571433" y="151.70080061721802"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#acaab1"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Public Sans;">
                                                            <tspan id="SvgjsTspan1304">Su</tspan>
                                                            <title>Su</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1307" class="apexcharts-grid">
                                                    <g id="SvgjsG1308" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1310" x1="0" y1="0"
                                                            x2="304" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1311" x1="0" y1="24.540160123443606"
                                                            x2="304" y2="24.540160123443606" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1312" x1="0" y1="49.08032024688721"
                                                            x2="304" y2="49.08032024688721" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1313" x1="0" y1="73.62048037033082"
                                                            x2="304" y2="73.62048037033082" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1314" x1="0" y1="98.16064049377442"
                                                            x2="304" y2="98.16064049377442" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1315" x1="0" y1="122.70080061721802"
                                                            x2="304" y2="122.70080061721802" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1309" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1317" x1="0" y1="122.70080061721802"
                                                        x2="304" y2="122.70080061721802" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1316" x1="0" y1="1"
                                                        x2="0" y2="122.70080061721802" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1264" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG1265" class="apexcharts-series" rel="1"
                                                        seriesName="seriesx1" data:realIndex="0">
                                                        <path id="SvgjsPath1269"
                                                            d="M 13.462857142857143 118.70080061721802L 13.462857142857143 77.62048037033081Q 13.462857142857143 73.62048037033081 17.462857142857143 73.62048037033081L 25.965714285714288 73.62048037033081Q 29.965714285714288 73.62048037033081 29.965714285714288 77.62048037033081L 29.965714285714288 77.62048037033081L 29.965714285714288 118.70080061721802Q 29.965714285714288 122.70080061721802 25.965714285714288 122.70080061721802L 17.462857142857143 122.70080061721802Q 13.462857142857143 122.70080061721802 13.462857142857143 118.70080061721802z"
                                                            fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskiprdbdcqi)"
                                                            pathTo="M 13.462857142857143 118.70080061721802L 13.462857142857143 77.62048037033081Q 13.462857142857143 73.62048037033081 17.462857142857143 73.62048037033081L 25.965714285714288 73.62048037033081Q 29.965714285714288 73.62048037033081 29.965714285714288 77.62048037033081L 29.965714285714288 77.62048037033081L 29.965714285714288 118.70080061721802Q 29.965714285714288 122.70080061721802 25.965714285714288 122.70080061721802L 17.462857142857143 122.70080061721802Q 13.462857142857143 122.70080061721802 13.462857142857143 118.70080061721802z"
                                                            pathFrom="M 13.462857142857143 118.70080061721802L 13.462857142857143 118.70080061721802L 29.965714285714288 118.70080061721802L 29.965714285714288 118.70080061721802L 29.965714285714288 118.70080061721802L 29.965714285714288 118.70080061721802L 29.965714285714288 118.70080061721802L 13.462857142857143 118.70080061721802"
                                                            cy="73.62048037033081" cx="56.89142857142858" j="0"
                                                            val="40" barHeight="49.08032024688721"
                                                            barWidth="16.502857142857145"></path>
                                                        <path id="SvgjsPath1271"
                                                            d="M 56.89142857142858 118.70080061721802L 56.89142857142858 46.945280216026305Q 56.89142857142858 42.945280216026305 60.89142857142858 42.945280216026305L 69.39428571428573 42.945280216026305Q 73.39428571428573 42.945280216026305 73.39428571428573 46.945280216026305L 73.39428571428573 46.945280216026305L 73.39428571428573 118.70080061721802Q 73.39428571428573 122.70080061721802 69.39428571428573 122.70080061721802L 60.89142857142858 122.70080061721802Q 56.89142857142858 122.70080061721802 56.89142857142858 118.70080061721802z"
                                                            fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskiprdbdcqi)"
                                                            pathTo="M 56.89142857142858 118.70080061721802L 56.89142857142858 46.945280216026305Q 56.89142857142858 42.945280216026305 60.89142857142858 42.945280216026305L 69.39428571428573 42.945280216026305Q 73.39428571428573 42.945280216026305 73.39428571428573 46.945280216026305L 73.39428571428573 46.945280216026305L 73.39428571428573 118.70080061721802Q 73.39428571428573 122.70080061721802 69.39428571428573 122.70080061721802L 60.89142857142858 122.70080061721802Q 56.89142857142858 122.70080061721802 56.89142857142858 118.70080061721802z"
                                                            pathFrom="M 56.89142857142858 118.70080061721802L 56.89142857142858 118.70080061721802L 73.39428571428573 118.70080061721802L 73.39428571428573 118.70080061721802L 73.39428571428573 118.70080061721802L 73.39428571428573 118.70080061721802L 73.39428571428573 118.70080061721802L 56.89142857142858 118.70080061721802"
                                                            cy="42.945280216026305" cx="100.32000000000001" j="1"
                                                            val="65" barHeight="79.75552040119172"
                                                            barWidth="16.502857142857145"></path>
                                                        <path id="SvgjsPath1273"
                                                            d="M 100.32000000000001 118.70080061721802L 100.32000000000001 65.35040030860901Q 100.32000000000001 61.35040030860901 104.32000000000001 61.35040030860901L 112.82285714285715 61.35040030860901Q 116.82285714285715 61.35040030860901 116.82285714285715 65.35040030860901L 116.82285714285715 65.35040030860901L 116.82285714285715 118.70080061721802Q 116.82285714285715 122.70080061721802 112.82285714285715 122.70080061721802L 104.32000000000001 122.70080061721802Q 100.32000000000001 122.70080061721802 100.32000000000001 118.70080061721802z"
                                                            fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskiprdbdcqi)"
                                                            pathTo="M 100.32000000000001 118.70080061721802L 100.32000000000001 65.35040030860901Q 100.32000000000001 61.35040030860901 104.32000000000001 61.35040030860901L 112.82285714285715 61.35040030860901Q 116.82285714285715 61.35040030860901 116.82285714285715 65.35040030860901L 116.82285714285715 65.35040030860901L 116.82285714285715 118.70080061721802Q 116.82285714285715 122.70080061721802 112.82285714285715 122.70080061721802L 104.32000000000001 122.70080061721802Q 100.32000000000001 122.70080061721802 100.32000000000001 118.70080061721802z"
                                                            pathFrom="M 100.32000000000001 118.70080061721802L 100.32000000000001 118.70080061721802L 116.82285714285715 118.70080061721802L 116.82285714285715 118.70080061721802L 116.82285714285715 118.70080061721802L 116.82285714285715 118.70080061721802L 116.82285714285715 118.70080061721802L 100.32000000000001 118.70080061721802"
                                                            cy="61.35040030860901" cx="143.74857142857144" j="2"
                                                            val="50" barHeight="61.35040030860901"
                                                            barWidth="16.502857142857145"></path>
                                                        <path id="SvgjsPath1275"
                                                            d="M 143.74857142857144 118.70080061721802L 143.74857142857144 71.4854403394699Q 143.74857142857144 67.4854403394699 147.74857142857144 67.4854403394699L 156.2514285714286 67.4854403394699Q 160.2514285714286 67.4854403394699 160.2514285714286 71.4854403394699L 160.2514285714286 71.4854403394699L 160.2514285714286 118.70080061721802Q 160.2514285714286 122.70080061721802 156.2514285714286 122.70080061721802L 147.74857142857144 122.70080061721802Q 143.74857142857144 122.70080061721802 143.74857142857144 118.70080061721802z"
                                                            fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskiprdbdcqi)"
                                                            pathTo="M 143.74857142857144 118.70080061721802L 143.74857142857144 71.4854403394699Q 143.74857142857144 67.4854403394699 147.74857142857144 67.4854403394699L 156.2514285714286 67.4854403394699Q 160.2514285714286 67.4854403394699 160.2514285714286 71.4854403394699L 160.2514285714286 71.4854403394699L 160.2514285714286 118.70080061721802Q 160.2514285714286 122.70080061721802 156.2514285714286 122.70080061721802L 147.74857142857144 122.70080061721802Q 143.74857142857144 122.70080061721802 143.74857142857144 118.70080061721802z"
                                                            pathFrom="M 143.74857142857144 118.70080061721802L 143.74857142857144 118.70080061721802L 160.2514285714286 118.70080061721802L 160.2514285714286 118.70080061721802L 160.2514285714286 118.70080061721802L 160.2514285714286 118.70080061721802L 160.2514285714286 118.70080061721802L 143.74857142857144 118.70080061721802"
                                                            cy="67.4854403394699" cx="187.17714285714288" j="3"
                                                            val="45" barHeight="55.21536027774811"
                                                            barWidth="16.502857142857145"></path>
                                                        <path id="SvgjsPath1277"
                                                            d="M 187.17714285714288 118.70080061721802L 187.17714285714288 16.2700800617218Q 187.17714285714288 12.2700800617218 191.17714285714288 12.2700800617218L 199.68000000000004 12.2700800617218Q 203.68000000000004 12.2700800617218 203.68000000000004 16.2700800617218L 203.68000000000004 16.2700800617218L 203.68000000000004 118.70080061721802Q 203.68000000000004 122.70080061721802 199.68000000000004 122.70080061721802L 191.17714285714288 122.70080061721802Q 187.17714285714288 122.70080061721802 187.17714285714288 118.70080061721802z"
                                                            fill="rgba(115,103,240,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMaskiprdbdcqi)"
                                                            pathTo="M 187.17714285714288 118.70080061721802L 187.17714285714288 16.2700800617218Q 187.17714285714288 12.2700800617218 191.17714285714288 12.2700800617218L 199.68000000000004 12.2700800617218Q 203.68000000000004 12.2700800617218 203.68000000000004 16.2700800617218L 203.68000000000004 16.2700800617218L 203.68000000000004 118.70080061721802Q 203.68000000000004 122.70080061721802 199.68000000000004 122.70080061721802L 191.17714285714288 122.70080061721802Q 187.17714285714288 122.70080061721802 187.17714285714288 118.70080061721802z"
                                                            pathFrom="M 187.17714285714288 118.70080061721802L 187.17714285714288 118.70080061721802L 203.68000000000004 118.70080061721802L 203.68000000000004 118.70080061721802L 203.68000000000004 118.70080061721802L 203.68000000000004 118.70080061721802L 203.68000000000004 118.70080061721802L 187.17714285714288 118.70080061721802"
                                                            cy="12.2700800617218" cx="230.60571428571433" j="4"
                                                            val="90" barHeight="110.43072055549622"
                                                            barWidth="16.502857142857145"></path>
                                                        <path id="SvgjsPath1279"
                                                            d="M 230.60571428571433 118.70080061721802L 230.60571428571433 59.215360277748104Q 230.60571428571433 55.215360277748104 234.60571428571433 55.215360277748104L 243.10857142857148 55.215360277748104Q 247.10857142857148 55.215360277748104 247.10857142857148 59.215360277748104L 247.10857142857148 59.215360277748104L 247.10857142857148 118.70080061721802Q 247.10857142857148 122.70080061721802 243.10857142857148 122.70080061721802L 234.60571428571433 122.70080061721802Q 230.60571428571433 122.70080061721802 230.60571428571433 118.70080061721802z"
                                                            fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskiprdbdcqi)"
                                                            pathTo="M 230.60571428571433 118.70080061721802L 230.60571428571433 59.215360277748104Q 230.60571428571433 55.215360277748104 234.60571428571433 55.215360277748104L 243.10857142857148 55.215360277748104Q 247.10857142857148 55.215360277748104 247.10857142857148 59.215360277748104L 247.10857142857148 59.215360277748104L 247.10857142857148 118.70080061721802Q 247.10857142857148 122.70080061721802 243.10857142857148 122.70080061721802L 234.60571428571433 122.70080061721802Q 230.60571428571433 122.70080061721802 230.60571428571433 118.70080061721802z"
                                                            pathFrom="M 230.60571428571433 118.70080061721802L 230.60571428571433 118.70080061721802L 247.10857142857148 118.70080061721802L 247.10857142857148 118.70080061721802L 247.10857142857148 118.70080061721802L 247.10857142857148 118.70080061721802L 247.10857142857148 118.70080061721802L 230.60571428571433 118.70080061721802"
                                                            cy="55.215360277748104" cx="274.0342857142858" j="5"
                                                            val="55" barHeight="67.48544033946992"
                                                            barWidth="16.502857142857145"></path>
                                                        <path id="SvgjsPath1281"
                                                            d="M 274.0342857142858 118.70080061721802L 274.0342857142858 40.8102401851654Q 274.0342857142858 36.8102401851654 278.0342857142858 36.8102401851654L 286.5371428571429 36.8102401851654Q 290.5371428571429 36.8102401851654 290.5371428571429 40.8102401851654L 290.5371428571429 40.8102401851654L 290.5371428571429 118.70080061721802Q 290.5371428571429 122.70080061721802 286.5371428571429 122.70080061721802L 278.0342857142858 122.70080061721802Q 274.0342857142858 122.70080061721802 274.0342857142858 118.70080061721802z"
                                                            fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskiprdbdcqi)"
                                                            pathTo="M 274.0342857142858 118.70080061721802L 274.0342857142858 40.8102401851654Q 274.0342857142858 36.8102401851654 278.0342857142858 36.8102401851654L 286.5371428571429 36.8102401851654Q 290.5371428571429 36.8102401851654 290.5371428571429 40.8102401851654L 290.5371428571429 40.8102401851654L 290.5371428571429 118.70080061721802Q 290.5371428571429 122.70080061721802 286.5371428571429 122.70080061721802L 278.0342857142858 122.70080061721802Q 274.0342857142858 122.70080061721802 274.0342857142858 118.70080061721802z"
                                                            pathFrom="M 274.0342857142858 118.70080061721802L 274.0342857142858 118.70080061721802L 290.5371428571429 118.70080061721802L 290.5371428571429 118.70080061721802L 290.5371428571429 118.70080061721802L 290.5371428571429 118.70080061721802L 290.5371428571429 118.70080061721802L 274.0342857142858 118.70080061721802"
                                                            cy="36.8102401851654" cx="317.4628571428572" j="6"
                                                            val="70" barHeight="85.89056043205262"
                                                            barWidth="16.502857142857145"></path>
                                                        <g id="SvgjsG1267" class="apexcharts-bar-goals-markers"
                                                            style="pointer-events: none">
                                                            <g id="SvgjsG1268" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1270" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1272" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1274" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1276" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1278" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1280" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1266" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1318" x1="0" y1="0" x2="304"
                                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1319" x1="0" y1="0" x2="304"
                                                    y2="0" stroke-dasharray="0" stroke-width="0"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1320" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1321" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1322" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG1305" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-8, 0)">
                                                <g id="SvgjsG1306" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG1255" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 80.5px;"></div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 343px; height: 162px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded p-5 mt-5">
                            <div class="row gap-4 gap-sm-0">
                                <div class="col-12 col-sm-4">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="badge rounded bg-label-primary p-1">
                                            <i class="ti ti-currency-dollar ti-sm"></i>
                                        </div>
                                        <h6 class="mb-0 fw-normal">Earnings</h6>
                                    </div>
                                    <h4 class="my-2">$545.69</h4>
                                    <div class="progress w-75" style="height: 4px">
                                        <div class="progress-bar" role="progressbar" style="width: 65%"
                                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="badge rounded bg-label-info p-1"><i
                                                class="ti ti-chart-pie-2 ti-sm"></i></div>
                                        <h6 class="mb-0 fw-normal">Profit</h6>
                                    </div>
                                    <h4 class="my-2">$256.34</h4>
                                    <div class="progress w-75" style="height: 4px">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="badge rounded bg-label-danger p-1">
                                            <i class="ti ti-brand-paypal ti-sm"></i>
                                        </div>
                                        <h6 class="mb-0 fw-normal">Expense</h6>
                                    </div>
                                    <h4 class="my-2">$74.19</h4>
                                    <div class="progress w-75" style="height: 4px">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"
                                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Earning Reports -->

            <!-- Support Tracker -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="mb-1">Support Tracker</h5>
                            <p class="card-subtitle">Last 7 Days</p>
                        </div>
                        <div class="dropdown">
                            <button
                                class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1 waves-effect waves-light"
                                type="button" id="supportTrackerMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical ti-md text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body row">
                        <div class="col-12 col-sm-4 col-md-12 col-lg-4">
                            <div class="mt-lg-4 mt-lg-2 mb-lg-6 mb-2">
                                <h2 class="mb-0">164</h2>
                                <p class="mb-0">Total Tickets</p>
                            </div>
                            <ul class="p-0 m-0">
                                <li class="d-flex gap-4 align-items-center mb-lg-3 pb-1">
                                    <div class="badge rounded bg-label-primary p-1_5"><i class="ti ti-ticket ti-md"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">New Tickets</h6>
                                        <small class="text-muted">142</small>
                                    </div>
                                </li>
                                <li class="d-flex gap-4 align-items-center mb-lg-3 pb-1">
                                    <div class="badge rounded bg-label-info p-1_5">
                                        <i class="ti ti-circle-check ti-md"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                                        <small class="text-muted">28</small>
                                    </div>
                                </li>
                                <li class="d-flex gap-4 align-items-center pb-1">
                                    <div class="badge rounded bg-label-warning p-1_5"><i class="ti ti-clock ti-md"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Response Time</h6>
                                        <small class="text-muted">1 Day</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-8 col-md-12 col-lg-8" style="position: relative;">
                            <div id="supportTracker" style="min-height: 310.633px;">
                                <div id="apexcharts9ryr592l"
                                    class="apexcharts-canvas apexcharts9ryr592l apexcharts-theme-light"
                                    style="width: 361px; height: 310.633px;"><svg id="SvgjsSvg1412" width="361"
                                        height="310.6333312988281" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1414" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(13.5, -10)">
                                            <defs id="SvgjsDefs1413">
                                                <clipPath id="gridRectMask9ryr592l">
                                                    <rect id="SvgjsRect1416" width="342" height="375" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask9ryr592l"></clipPath>
                                                <clipPath id="nonForecastMask9ryr592l"></clipPath>
                                                <clipPath id="gridRectMarkerMask9ryr592l">
                                                    <rect id="SvgjsRect1417" width="340" height="377" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1422" x1="1"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1423" stop-opacity="1"
                                                        stop-color="rgba(115,103,240,1)" offset="0.3"></stop>
                                                    <stop id="SvgjsStop1424" stop-opacity="0.6"
                                                        stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                    <stop id="SvgjsStop1425" stop-opacity="0.6"
                                                        stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                                </linearGradient>
                                                <linearGradient id="SvgjsLinearGradient1433" x1="1"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1434" stop-opacity="1"
                                                        stop-color="rgba(115,103,240,1)" offset="0.3"></stop>
                                                    <stop id="SvgjsStop1435" stop-opacity="0.6"
                                                        stop-color="rgba(115,103,240,0.6)" offset="0.7"></stop>
                                                    <stop id="SvgjsStop1436" stop-opacity="0.6"
                                                        stop-color="rgba(115,103,240,0.6)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG1418" class="apexcharts-radialbar">
                                                <g id="SvgjsG1419">
                                                    <g id="SvgjsG1420" class="apexcharts-tracks">
                                                        <g id="SvgjsG1421"
                                                            class="apexcharts-radialbar-track apexcharts-track"
                                                            rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 259.1233220103534 244.46154589053606"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="22.632926829268296"
                                                                stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 259.1233220103534 244.46154589053606">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1427">
                                                        <g id="SvgjsG1432"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="CompletedxTask" rel="1"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1437"
                                                                d="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 286.9530487804878 168"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="url(#SvgjsLinearGradient1433)"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="22.632926829268296" stroke-dasharray="10"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="230" data:value="85" index="0" j="0"
                                                                data:pathOrig="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 286.9530487804878 168">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle1428" r="102.63658536585366"
                                                            cx="168" cy="168"
                                                            class="apexcharts-radialbar-hollow" fill="transparent">
                                                        </circle>
                                                        <g id="SvgjsG1429" class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                            <text id="SvgjsText1430" font-family="Public Sans" x="168"
                                                                y="148" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#acaab1"
                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                style="font-family: Public Sans;">Completed
                                                                Task</text><text id="SvgjsText1431"
                                                                font-family="Public Sans" x="168" y="194"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="38px" font-weight="400" fill="#444050"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: Public Sans;">85%</text></g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1438" x1="0" y1="0" x2="336"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1439" x1="0" y1="0" x2="336"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1415" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 386px; height: 312px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Support Tracker -->

            <!-- Sales By Country -->
            <div class="col-xxl-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="mb-1">Sales by Countries</h5>
                            <p class="card-subtitle">Monthly Sales Overview</p>
                        </div>
                        <div class="dropdown">
                            <button
                                class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1 waves-effect waves-light"
                                type="button" id="salesByCountry" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical ti-md text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Download</a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex align-items-center mb-4">
                                <div class="avatar flex-shrink-0 me-4">
                                    <i class="fis fi fi-us rounded-circle fs-2"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-1">$8,567k</h6>
                                        </div>
                                        <small class="text-body">United states</small>
                                    </div>
                                    <div class="user-progress">
                                        <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                                            <i class="ti ti-chevron-up"></i>
                                            25.8%
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-4">
                                <div class="avatar flex-shrink-0 me-4">
                                    <i class="fis fi fi-br rounded-circle fs-2"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-1">$2,415k</h6>
                                        </div>
                                        <small class="text-body">Brazil</small>
                                    </div>
                                    <div class="user-progress">
                                        <p class="text-danger fw-medium mb-0 d-flex align-items-center gap-1">
                                            <i class="ti ti-chevron-down"></i>
                                            6.2%
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-4">
                                <div class="avatar flex-shrink-0 me-4">
                                    <i class="fis fi fi-in rounded-circle fs-2"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-1">$865k</h6>
                                        </div>
                                        <small class="text-body">India</small>
                                    </div>
                                    <div class="user-progress">
                                        <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                                            <i class="ti ti-chevron-up"></i>
                                            12.4%
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-4">
                                <div class="avatar flex-shrink-0 me-4">
                                    <i class="fis fi fi-au rounded-circle fs-2"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-1">$745k</h6>
                                        </div>
                                        <small class="text-body">Australia</small>
                                    </div>
                                    <div class="user-progress">
                                        <p class="text-danger fw-medium mb-0 d-flex align-items-center gap-1">
                                            <i class="ti ti-chevron-down"></i>
                                            11.9%
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-4">
                                <div class="avatar flex-shrink-0 me-4">
                                    <i class="fis fi fi-fr rounded-circle fs-2"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-1">$45</h6>
                                        </div>
                                        <small class="text-body">France</small>
                                    </div>
                                    <div class="user-progress">
                                        <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                                            <i class="ti ti-chevron-up"></i>
                                            16.2%
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="avatar flex-shrink-0 me-4">
                                    <i class="fis fi fi-cn rounded-circle fs-2"></i>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-1">$12k</h6>
                                        </div>
                                        <small class="text-body">China</small>
                                    </div>
                                    <div class="user-progress">
                                        <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                                            <i class="ti ti-chevron-up"></i>
                                            14.8%
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Sales By Country -->

            <!-- Total Earning -->
            <div class="col-xxl-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 card-title">Total Earning</h5>
                            <div class="dropdown">
                                <button
                                    class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1 waves-effect waves-light"
                                    type="button" id="totalEarning" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="ti ti-dots-vertical ti-md text-muted"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarning">
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <h2 class="mb-0 me-2">87%</h2>
                            <i class="ti ti-chevron-up text-success me-1"></i>
                            <h6 class="text-success mb-0">25.8%</h6>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="totalEarningChart" style="min-height: 175px;">
                            <div id="apexchartsdli60kl2k"
                                class="apexcharts-canvas apexchartsdli60kl2k apexcharts-theme-light"
                                style="width: 345px; height: 175px;"><svg id="SvgjsSvg1351" width="345"
                                    height="175" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)" style="background: transparent;">
                                    <g id="SvgjsG1353" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(15.609523809523807, -10)">
                                        <defs id="SvgjsDefs1352">
                                            <linearGradient id="SvgjsLinearGradient1356" x1="0" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1357" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1358" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1359" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMaskdli60kl2k">
                                                <rect id="SvgjsRect1361" width="351" height="190"
                                                    x="-13.609523809523807" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskdli60kl2k"></clipPath>
                                            <clipPath id="nonForecastMaskdli60kl2k"></clipPath>
                                            <clipPath id="gridRectMarkerMaskdli60kl2k">
                                                <rect id="SvgjsRect1362" width="327.7809523809524" height="194"
                                                    x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1360" width="0" height="190" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke-dasharray="3" fill="url(#SvgjsLinearGradient1356)"
                                            class="apexcharts-xcrosshairs" y2="190" filter="none"
                                            fill-opacity="0.9"></rect>
                                        <g id="SvgjsG1384" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1385" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG1394" class="apexcharts-grid">
                                            <g id="SvgjsG1395" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine1397" x1="-11.609523809523807" y1="0"
                                                    x2="335.3904761904762" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1398" x1="-11.609523809523807" y1="38"
                                                    x2="335.3904761904762" y2="38" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1399" x1="-11.609523809523807" y1="76"
                                                    x2="335.3904761904762" y2="76" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1400" x1="-11.609523809523807" y1="114"
                                                    x2="335.3904761904762" y2="114" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1401" x1="-11.609523809523807" y1="152"
                                                    x2="335.3904761904762" y2="152" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1402" x1="-11.609523809523807" y1="190"
                                                    x2="335.3904761904762" y2="190" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1396" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine1404" x1="0" y1="190"
                                                x2="323.7809523809524" y2="190" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1403" x1="0" y1="1" x2="0"
                                                y2="190" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1363" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1364" class="apexcharts-series" seriesName="Earning"
                                                rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1366"
                                                    d="M -4.625442176870748 108L -4.625442176870748 48.75Q -4.625442176870748 42.75 1.3745578231292521 42.75L -1.3745578231292521 42.75Q 4.625442176870748 42.75 4.625442176870748 48.75L 4.625442176870748 48.75L 4.625442176870748 108Q 4.625442176870748 114 -1.3745578231292521 114L 1.3745578231292521 114Q -4.625442176870748 114 -4.625442176870748 108z"
                                                    fill="rgba(115,103,240,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M -4.625442176870748 108L -4.625442176870748 48.75Q -4.625442176870748 42.75 1.3745578231292521 42.75L -1.3745578231292521 42.75Q 4.625442176870748 42.75 4.625442176870748 48.75L 4.625442176870748 48.75L 4.625442176870748 108Q 4.625442176870748 114 -1.3745578231292521 114L 1.3745578231292521 114Q -4.625442176870748 114 -4.625442176870748 108z"
                                                    pathFrom="M -4.625442176870748 108L -4.625442176870748 108L 4.625442176870748 108L 4.625442176870748 108L 4.625442176870748 108L 4.625442176870748 108L 4.625442176870748 108L -4.625442176870748 108"
                                                    cy="42.75" cx="4.625442176870747" j="0" val="15"
                                                    barHeight="71.25" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1367"
                                                    d="M 41.62897959183673 108L 41.62897959183673 72.5Q 41.62897959183673 66.5 47.62897959183673 66.5L 44.87986394557823 66.5Q 50.87986394557823 66.5 50.87986394557823 72.5L 50.87986394557823 72.5L 50.87986394557823 108Q 50.87986394557823 114 44.87986394557823 114L 47.62897959183673 114Q 41.62897959183673 114 41.62897959183673 108z"
                                                    fill="rgba(115,103,240,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 41.62897959183673 108L 41.62897959183673 72.5Q 41.62897959183673 66.5 47.62897959183673 66.5L 44.87986394557823 66.5Q 50.87986394557823 66.5 50.87986394557823 72.5L 50.87986394557823 72.5L 50.87986394557823 108Q 50.87986394557823 114 44.87986394557823 114L 47.62897959183673 114Q 41.62897959183673 114 41.62897959183673 108z"
                                                    pathFrom="M 41.62897959183673 108L 41.62897959183673 108L 50.87986394557823 108L 50.87986394557823 108L 50.87986394557823 108L 50.87986394557823 108L 50.87986394557823 108L 41.62897959183673 108"
                                                    cy="66.5" cx="50.87986394557823" j="1" val="10"
                                                    barHeight="47.5" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1368"
                                                    d="M 87.88340136054421 108L 87.88340136054421 25Q 87.88340136054421 19 93.88340136054421 19L 91.13428571428571 19Q 97.13428571428571 19 97.13428571428571 25L 97.13428571428571 25L 97.13428571428571 108Q 97.13428571428571 114 91.13428571428571 114L 93.88340136054421 114Q 87.88340136054421 114 87.88340136054421 108z"
                                                    fill="rgba(115,103,240,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 87.88340136054421 108L 87.88340136054421 25Q 87.88340136054421 19 93.88340136054421 19L 91.13428571428571 19Q 97.13428571428571 19 97.13428571428571 25L 97.13428571428571 25L 97.13428571428571 108Q 97.13428571428571 114 91.13428571428571 114L 93.88340136054421 114Q 87.88340136054421 114 87.88340136054421 108z"
                                                    pathFrom="M 87.88340136054421 108L 87.88340136054421 108L 97.13428571428571 108L 97.13428571428571 108L 97.13428571428571 108L 97.13428571428571 108L 97.13428571428571 108L 87.88340136054421 108"
                                                    cy="19" cx="97.13428571428571" j="2" val="20"
                                                    barHeight="95" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1369"
                                                    d="M 134.13782312925173 108L 134.13782312925173 82Q 134.13782312925173 76 140.13782312925173 76L 137.38870748299323 76Q 143.38870748299323 76 143.38870748299323 82L 143.38870748299323 82L 143.38870748299323 108Q 143.38870748299323 114 137.38870748299323 114L 140.13782312925173 114Q 134.13782312925173 114 134.13782312925173 108z"
                                                    fill="rgba(115,103,240,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 134.13782312925173 108L 134.13782312925173 82Q 134.13782312925173 76 140.13782312925173 76L 137.38870748299323 76Q 143.38870748299323 76 143.38870748299323 82L 143.38870748299323 82L 143.38870748299323 108Q 143.38870748299323 114 137.38870748299323 114L 140.13782312925173 114Q 134.13782312925173 114 134.13782312925173 108z"
                                                    pathFrom="M 134.13782312925173 108L 134.13782312925173 108L 143.38870748299323 108L 143.38870748299323 108L 143.38870748299323 108L 143.38870748299323 108L 143.38870748299323 108L 134.13782312925173 108"
                                                    cy="76" cx="143.38870748299323" j="3" val="8"
                                                    barHeight="38" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1370"
                                                    d="M 180.3922448979592 108L 180.3922448979592 63Q 180.3922448979592 57 186.3922448979592 57L 183.64312925170069 57Q 189.64312925170069 57 189.64312925170069 63L 189.64312925170069 63L 189.64312925170069 108Q 189.64312925170069 114 183.64312925170069 114L 186.3922448979592 114Q 180.3922448979592 114 180.3922448979592 108z"
                                                    fill="rgba(115,103,240,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 180.3922448979592 108L 180.3922448979592 63Q 180.3922448979592 57 186.3922448979592 57L 183.64312925170069 57Q 189.64312925170069 57 189.64312925170069 63L 189.64312925170069 63L 189.64312925170069 108Q 189.64312925170069 114 183.64312925170069 114L 186.3922448979592 114Q 180.3922448979592 114 180.3922448979592 108z"
                                                    pathFrom="M 180.3922448979592 108L 180.3922448979592 108L 189.64312925170069 108L 189.64312925170069 108L 189.64312925170069 108L 189.64312925170069 108L 189.64312925170069 108L 180.3922448979592 108"
                                                    cy="57" cx="189.64312925170069" j="4" val="12"
                                                    barHeight="57" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1371"
                                                    d="M 226.64666666666668 108L 226.64666666666668 34.5Q 226.64666666666668 28.5 232.64666666666668 28.5L 229.89755102040817 28.5Q 235.89755102040817 28.5 235.89755102040817 34.5L 235.89755102040817 34.5L 235.89755102040817 108Q 235.89755102040817 114 229.89755102040817 114L 232.64666666666668 114Q 226.64666666666668 114 226.64666666666668 108z"
                                                    fill="rgba(115,103,240,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 226.64666666666668 108L 226.64666666666668 34.5Q 226.64666666666668 28.5 232.64666666666668 28.5L 229.89755102040817 28.5Q 235.89755102040817 28.5 235.89755102040817 34.5L 235.89755102040817 34.5L 235.89755102040817 108Q 235.89755102040817 114 229.89755102040817 114L 232.64666666666668 114Q 226.64666666666668 114 226.64666666666668 108z"
                                                    pathFrom="M 226.64666666666668 108L 226.64666666666668 108L 235.89755102040817 108L 235.89755102040817 108L 235.89755102040817 108L 235.89755102040817 108L 235.89755102040817 108L 226.64666666666668 108"
                                                    cy="28.5" cx="235.89755102040817" j="5" val="18"
                                                    barHeight="85.5" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1372"
                                                    d="M 272.90108843537416 108L 272.90108843537416 63Q 272.90108843537416 57 278.90108843537416 57L 276.15197278911563 57Q 282.15197278911563 57 282.15197278911563 63L 282.15197278911563 63L 282.15197278911563 108Q 282.15197278911563 114 276.15197278911563 114L 278.90108843537416 114Q 272.90108843537416 114 272.90108843537416 108z"
                                                    fill="rgba(115,103,240,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 272.90108843537416 108L 272.90108843537416 63Q 272.90108843537416 57 278.90108843537416 57L 276.15197278911563 57Q 282.15197278911563 57 282.15197278911563 63L 282.15197278911563 63L 282.15197278911563 108Q 282.15197278911563 114 276.15197278911563 114L 278.90108843537416 114Q 272.90108843537416 114 272.90108843537416 108z"
                                                    pathFrom="M 272.90108843537416 108L 272.90108843537416 108L 282.15197278911563 108L 282.15197278911563 108L 282.15197278911563 108L 282.15197278911563 108L 282.15197278911563 108L 272.90108843537416 108"
                                                    cy="57" cx="282.15197278911563" j="6" val="12"
                                                    barHeight="57" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1373"
                                                    d="M 319.1555102040816 108L 319.1555102040816 96.25Q 319.1555102040816 90.25 325.1555102040816 90.25L 322.4063945578231 90.25Q 328.4063945578231 90.25 328.4063945578231 96.25L 328.4063945578231 96.25L 328.4063945578231 108Q 328.4063945578231 114 322.4063945578231 114L 325.1555102040816 114Q 319.1555102040816 114 319.1555102040816 108z"
                                                    fill="rgba(115,103,240,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 319.1555102040816 108L 319.1555102040816 96.25Q 319.1555102040816 90.25 325.1555102040816 90.25L 322.4063945578231 90.25Q 328.4063945578231 90.25 328.4063945578231 96.25L 328.4063945578231 96.25L 328.4063945578231 108Q 328.4063945578231 114 322.4063945578231 114L 325.1555102040816 114Q 319.1555102040816 114 319.1555102040816 108z"
                                                    pathFrom="M 319.1555102040816 108L 319.1555102040816 108L 328.4063945578231 108L 328.4063945578231 108L 328.4063945578231 108L 328.4063945578231 108L 328.4063945578231 108L 319.1555102040816 108"
                                                    cy="90.25" cx="328.4063945578231" j="7" val="5"
                                                    barHeight="23.75" barWidth="9.250884353741496"></path>
                                            </g>
                                            <g id="SvgjsG1374" class="apexcharts-series" seriesName="Expense"
                                                rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1376"
                                                    d="M -4.625442176870748 126L -4.625442176870748 147.25Q -4.625442176870748 153.25 1.3745578231292521 153.25L -1.3745578231292521 153.25Q 4.625442176870748 153.25 4.625442176870748 147.25L 4.625442176870748 147.25L 4.625442176870748 126Q 4.625442176870748 120 -1.3745578231292521 120L 1.3745578231292521 120Q -4.625442176870748 120 -4.625442176870748 126z"
                                                    fill="rgba(128,131,144,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M -4.625442176870748 126L -4.625442176870748 147.25Q -4.625442176870748 153.25 1.3745578231292521 153.25L -1.3745578231292521 153.25Q 4.625442176870748 153.25 4.625442176870748 147.25L 4.625442176870748 147.25L 4.625442176870748 126Q 4.625442176870748 120 -1.3745578231292521 120L 1.3745578231292521 120Q -4.625442176870748 120 -4.625442176870748 126z"
                                                    pathFrom="M -4.625442176870748 126L -4.625442176870748 126L 4.625442176870748 126L 4.625442176870748 126L 4.625442176870748 126L 4.625442176870748 126L 4.625442176870748 126L -4.625442176870748 126"
                                                    cy="141.25" cx="4.625442176870747" j="0" val="-7"
                                                    barHeight="-33.25" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1377"
                                                    d="M 41.62897959183673 126L 41.62897959183673 161.5Q 41.62897959183673 167.5 47.62897959183673 167.5L 44.87986394557823 167.5Q 50.87986394557823 167.5 50.87986394557823 161.5L 50.87986394557823 161.5L 50.87986394557823 126Q 50.87986394557823 120 44.87986394557823 120L 47.62897959183673 120Q 41.62897959183673 120 41.62897959183673 126z"
                                                    fill="rgba(128,131,144,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 41.62897959183673 126L 41.62897959183673 161.5Q 41.62897959183673 167.5 47.62897959183673 167.5L 44.87986394557823 167.5Q 50.87986394557823 167.5 50.87986394557823 161.5L 50.87986394557823 161.5L 50.87986394557823 126Q 50.87986394557823 120 44.87986394557823 120L 47.62897959183673 120Q 41.62897959183673 120 41.62897959183673 126z"
                                                    pathFrom="M 41.62897959183673 126L 41.62897959183673 126L 50.87986394557823 126L 50.87986394557823 126L 50.87986394557823 126L 50.87986394557823 126L 50.87986394557823 126L 41.62897959183673 126"
                                                    cy="155.5" cx="50.87986394557823" j="1" val="-10"
                                                    barHeight="-47.5" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1378"
                                                    d="M 87.88340136054421 126L 87.88340136054421 147.25Q 87.88340136054421 153.25 93.88340136054421 153.25L 91.13428571428571 153.25Q 97.13428571428571 153.25 97.13428571428571 147.25L 97.13428571428571 147.25L 97.13428571428571 126Q 97.13428571428571 120 91.13428571428571 120L 93.88340136054421 120Q 87.88340136054421 120 87.88340136054421 126z"
                                                    fill="rgba(128,131,144,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 87.88340136054421 126L 87.88340136054421 147.25Q 87.88340136054421 153.25 93.88340136054421 153.25L 91.13428571428571 153.25Q 97.13428571428571 153.25 97.13428571428571 147.25L 97.13428571428571 147.25L 97.13428571428571 126Q 97.13428571428571 120 91.13428571428571 120L 93.88340136054421 120Q 87.88340136054421 120 87.88340136054421 126z"
                                                    pathFrom="M 87.88340136054421 126L 87.88340136054421 126L 97.13428571428571 126L 97.13428571428571 126L 97.13428571428571 126L 97.13428571428571 126L 97.13428571428571 126L 87.88340136054421 126"
                                                    cy="141.25" cx="97.13428571428571" j="2" val="-7"
                                                    barHeight="-33.25" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1379"
                                                    d="M 134.13782312925173 126L 134.13782312925173 171Q 134.13782312925173 177 140.13782312925173 177L 137.38870748299323 177Q 143.38870748299323 177 143.38870748299323 171L 143.38870748299323 171L 143.38870748299323 126Q 143.38870748299323 120 137.38870748299323 120L 140.13782312925173 120Q 134.13782312925173 120 134.13782312925173 126z"
                                                    fill="rgba(128,131,144,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 134.13782312925173 126L 134.13782312925173 171Q 134.13782312925173 177 140.13782312925173 177L 137.38870748299323 177Q 143.38870748299323 177 143.38870748299323 171L 143.38870748299323 171L 143.38870748299323 126Q 143.38870748299323 120 137.38870748299323 120L 140.13782312925173 120Q 134.13782312925173 120 134.13782312925173 126z"
                                                    pathFrom="M 134.13782312925173 126L 134.13782312925173 126L 143.38870748299323 126L 143.38870748299323 126L 143.38870748299323 126L 143.38870748299323 126L 143.38870748299323 126L 134.13782312925173 126"
                                                    cy="165" cx="143.38870748299323" j="3" val="-12"
                                                    barHeight="-57" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1380"
                                                    d="M 180.3922448979592 126L 180.3922448979592 142.5Q 180.3922448979592 148.5 186.3922448979592 148.5L 183.64312925170069 148.5Q 189.64312925170069 148.5 189.64312925170069 142.5L 189.64312925170069 142.5L 189.64312925170069 126Q 189.64312925170069 120 183.64312925170069 120L 186.3922448979592 120Q 180.3922448979592 120 180.3922448979592 126z"
                                                    fill="rgba(128,131,144,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 180.3922448979592 126L 180.3922448979592 142.5Q 180.3922448979592 148.5 186.3922448979592 148.5L 183.64312925170069 148.5Q 189.64312925170069 148.5 189.64312925170069 142.5L 189.64312925170069 142.5L 189.64312925170069 126Q 189.64312925170069 120 183.64312925170069 120L 186.3922448979592 120Q 180.3922448979592 120 180.3922448979592 126z"
                                                    pathFrom="M 180.3922448979592 126L 180.3922448979592 126L 189.64312925170069 126L 189.64312925170069 126L 189.64312925170069 126L 189.64312925170069 126L 189.64312925170069 126L 180.3922448979592 126"
                                                    cy="136.5" cx="189.64312925170069" j="4" val="-6"
                                                    barHeight="-28.5" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1381"
                                                    d="M 226.64666666666668 126L 226.64666666666668 156.75Q 226.64666666666668 162.75 232.64666666666668 162.75L 229.89755102040817 162.75Q 235.89755102040817 162.75 235.89755102040817 156.75L 235.89755102040817 156.75L 235.89755102040817 126Q 235.89755102040817 120 229.89755102040817 120L 232.64666666666668 120Q 226.64666666666668 120 226.64666666666668 126z"
                                                    fill="rgba(128,131,144,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 226.64666666666668 126L 226.64666666666668 156.75Q 226.64666666666668 162.75 232.64666666666668 162.75L 229.89755102040817 162.75Q 235.89755102040817 162.75 235.89755102040817 156.75L 235.89755102040817 156.75L 235.89755102040817 126Q 235.89755102040817 120 229.89755102040817 120L 232.64666666666668 120Q 226.64666666666668 120 226.64666666666668 126z"
                                                    pathFrom="M 226.64666666666668 126L 226.64666666666668 126L 235.89755102040817 126L 235.89755102040817 126L 235.89755102040817 126L 235.89755102040817 126L 235.89755102040817 126L 226.64666666666668 126"
                                                    cy="150.75" cx="235.89755102040817" j="5" val="-9"
                                                    barHeight="-42.75" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1382"
                                                    d="M 272.90108843537416 126L 272.90108843537416 137.75Q 272.90108843537416 143.75 278.90108843537416 143.75L 276.15197278911563 143.75Q 282.15197278911563 143.75 282.15197278911563 137.75L 282.15197278911563 137.75L 282.15197278911563 126Q 282.15197278911563 120 276.15197278911563 120L 278.90108843537416 120Q 272.90108843537416 120 272.90108843537416 126z"
                                                    fill="rgba(128,131,144,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 272.90108843537416 126L 272.90108843537416 137.75Q 272.90108843537416 143.75 278.90108843537416 143.75L 276.15197278911563 143.75Q 282.15197278911563 143.75 282.15197278911563 137.75L 282.15197278911563 137.75L 282.15197278911563 126Q 282.15197278911563 120 276.15197278911563 120L 278.90108843537416 120Q 272.90108843537416 120 272.90108843537416 126z"
                                                    pathFrom="M 272.90108843537416 126L 272.90108843537416 126L 282.15197278911563 126L 282.15197278911563 126L 282.15197278911563 126L 282.15197278911563 126L 282.15197278911563 126L 272.90108843537416 126"
                                                    cy="131.75" cx="282.15197278911563" j="6" val="-5"
                                                    barHeight="-23.75" barWidth="9.250884353741496"></path>
                                                <path id="SvgjsPath1383"
                                                    d="M 319.1555102040816 126L 319.1555102040816 152Q 319.1555102040816 158 325.1555102040816 158L 322.4063945578231 158Q 328.4063945578231 158 328.4063945578231 152L 328.4063945578231 152L 328.4063945578231 126Q 328.4063945578231 120 322.4063945578231 120L 325.1555102040816 120Q 319.1555102040816 120 319.1555102040816 126z"
                                                    fill="rgba(128,131,144,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdli60kl2k)"
                                                    pathTo="M 319.1555102040816 126L 319.1555102040816 152Q 319.1555102040816 158 325.1555102040816 158L 322.4063945578231 158Q 328.4063945578231 158 328.4063945578231 152L 328.4063945578231 152L 328.4063945578231 126Q 328.4063945578231 120 322.4063945578231 120L 325.1555102040816 120Q 319.1555102040816 120 319.1555102040816 126z"
                                                    pathFrom="M 319.1555102040816 126L 319.1555102040816 126L 328.4063945578231 126L 328.4063945578231 126L 328.4063945578231 126L 328.4063945578231 126L 328.4063945578231 126L 319.1555102040816 126"
                                                    cy="146" cx="328.4063945578231" j="7" val="-8"
                                                    barHeight="-38" barWidth="9.250884353741496"></path>
                                            </g>
                                            <g id="SvgjsG1365" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1375" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine1405" x1="-11.609523809523807" y1="0"
                                            x2="335.3904761904762" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1406" x1="-11.609523809523807" y1="0"
                                            x2="335.3904761904762" y2="0" stroke-dasharray="0"
                                            stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1407" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1408" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1409" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect1410" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect1411" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-selection-rect"></rect>
                                    </g>
                                    <g id="SvgjsG1392" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-8, 0)">
                                        <g id="SvgjsG1393" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG1354" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 87.5px;"></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start my-4">
                            <div class="badge rounded bg-label-primary p-2 me-4 rounded">
                                <i class="ti ti-brand-paypal ti-md"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                                <div class="me-2">
                                    <h6 class="mb-0">Total Revenue</h6>
                                    <small class="text-body">Client Payment</small>
                                </div>
                                <h6 class="mb-0 text-success">+$126</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="badge rounded bg-label-secondary p-2 me-4 rounded">
                                <i class="ti ti-currency-dollar ti-md"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                                <div class="me-2">
                                    <h6 class="mb-0">Total Sales</h6>
                                    <small class="text-body">Refund</small>
                                </div>
                                <h6 class="mb-0 text-success">+$98</h6>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 394px; height: 318px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Total Earning -->

            <!-- Monthly Campaign State -->
            <div class="col-xxl-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="mb-1">Monthly Campaign State</h5>
                            <p class="card-subtitle">8.52k Social Visiters</p>
                        </div>
                        <div class="dropdown">
                            <button
                                class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1 waves-effect waves-light"
                                type="button" id="MonthlyCampaign" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical ti-md text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="MonthlyCampaign">
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Download</a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="mb-6 d-flex justify-content-between align-items-center">
                                <div class="badge bg-label-success rounded p-1_5"><i class="ti ti-mail ti-md"></i></div>
                                <div class="d-flex justify-content-between w-100 flex-wrap">
                                    <h6 class="mb-0 ms-4">Emails</h6>
                                    <div class="d-flex">
                                        <p class="mb-0">12,346</p>
                                        <p class="ms-4 text-success mb-0">0.3%</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-6 d-flex justify-content-between align-items-center">
                                <div class="badge bg-label-info rounded p-1_5"><i class="ti ti-link ti-md"></i></div>
                                <div class="d-flex justify-content-between w-100 flex-wrap">
                                    <h6 class="mb-0 ms-4">Opened</h6>
                                    <div class="d-flex">
                                        <p class="mb-0">8,734</p>
                                        <p class="ms-4 text-success mb-0">2.1%</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-6 d-flex justify-content-between align-items-center">
                                <div class="badge bg-label-warning rounded p-1_5"><i class="ti ti-mouse ti-md"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100 flex-wrap">
                                    <h6 class="mb-0 ms-4">Clicked</h6>
                                    <div class="d-flex">
                                        <p class="mb-0">967</p>
                                        <p class="ms-4 text-danger mb-0">1.4%</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-6 d-flex justify-content-between align-items-center">
                                <div class="badge bg-label-primary rounded p-1_5"><i class="ti ti-users ti-md"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100 flex-wrap">
                                    <h6 class="mb-0 ms-4">Subscribe</h6>
                                    <div class="d-flex">
                                        <p class="mb-0">345</p>
                                        <p class="ms-4 text-success mb-0">8.5%</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-6 d-flex justify-content-between align-items-center">
                                <div class="badge bg-label-secondary rounded p-1_5">
                                    <i class="ti ti-alert-triangle ti-md"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100 flex-wrap">
                                    <h6 class="mb-0 ms-4">Complaints</h6>
                                    <div class="d-flex">
                                        <p class="mb-0">10</p>
                                        <p class="ms-4 text-danger mb-0">1.5%</p>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <div class="badge bg-label-danger rounded p-1_5"><i class="ti ti-ban ti-md"></i></div>
                                <div class="d-flex justify-content-between w-100 flex-wrap">
                                    <h6 class="mb-0 ms-4">Unsubscribe</h6>
                                    <div class="d-flex">
                                        <p class="mb-0">86</p>
                                        <p class="ms-4 text-success mb-0">0.8%</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Monthly Campaign State -->

            <!-- Source Visit -->
            <div class="col-xxl-4 col-xl-6 col-lg-12">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="mb-1">Source Visits</h5>
                            <p class="card-subtitle">38.4k Visitors</p>
                        </div>
                        <div class="dropdown">
                            <button
                                class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1 waves-effect waves-light"
                                type="button" id="sourceVisits" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical ti-md text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sourceVisits">
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">Download</a>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-label-secondary text-body p-2 me-4 rounded">
                                        <i class="ti ti-shadow ti-md"></i>
                                    </div>
                                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Direct Source</h6>
                                            <small class="text-body">Direct link click</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0">1.2k</p>
                                            <div class="ms-4 badge bg-label-success">+4.2%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-label-secondary text-body p-2 me-4 rounded">
                                        <i class="ti ti-globe ti-md"></i>
                                    </div>
                                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Social Network</h6>
                                            <small class="text-body">Social Channels</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0">31.5k</p>
                                            <div class="ms-4 badge bg-label-success">+8.2%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-label-secondary text-body p-2 me-4 rounded">
                                        <i class="ti ti-mail ti-md"></i>
                                    </div>
                                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Email Newsletter</h6>
                                            <small class="text-body">Mail Campaigns</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0">893</p>
                                            <div class="ms-4 badge bg-label-success">+2.4%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-label-secondary text-body p-2 me-4 rounded">
                                        <i class="ti ti-external-link ti-md"></i>
                                    </div>
                                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Referrals</h6>
                                            <small class="text-body">Impact Radius Visits</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0">342</p>
                                            <div class="ms-4 badge bg-label-danger">-0.4%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-label-secondary text-body p-2 me-4 rounded">
                                        <i class="ti ti-ad ti-md"></i>
                                    </div>
                                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">ADVT</h6>
                                            <small class="text-body">Google ADVT</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0">2.15k</p>
                                            <div class="ms-4 badge bg-label-success">+9.1%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-label-secondary text-body p-2 me-4 rounded">
                                        <i class="ti ti-star ti-md"></i>
                                    </div>
                                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Other</h6>
                                            <small class="text-body">Many Sources</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0">12.5k</p>
                                            <div class="ms-4 badge bg-label-success">+6.2%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Source Visit -->

            <!-- Projects table -->
            <div class="col-xxl-8">
                <div class="card">
                    <div class="card-datatable table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="card-header pb-0 pt-sm-0">
                                <div class="head-label text-center">
                                    <h5 class="card-title mb-0">Project List</h5>
                                </div>
                                <div class="d-flex justify-content-center justify-content-md-end">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input
                                                type="search" class="form-control" placeholder="Search Project"
                                                aria-controls="DataTables_Table_0"></label></div>
                                </div>
                            </div>
                            <table class="datatables-projects table table-sm dataTable no-footer dtr-column"
                                id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr>
                                        <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                            style="width: 16.7px; display: none;" aria-label=""></th>
                                        <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all"
                                            rowspan="1" colspan="1" style="width: 13.9167px;" data-col="1"
                                            aria-label=""><input type="checkbox" class="form-check-input"></th>
                                        <th class="sorting sorting_desc" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            style="width: 84.2167px;" aria-sort="descending"
                                            aria-label="Project: activate to sort column ascending">Project</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1" style="width: 75.6167px;"
                                            aria-label="Leader: activate to sort column ascending">Leader</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 60.0833px;" aria-label="Team">Team</th>
                                        <th class="w-px-200 sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1" style="width: 200px;"
                                            aria-label="Progress: activate to sort column ascending">Progress</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 76.1333px;" aria-label="Action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td valign="top" colspan="6" class="dataTables_empty">Loading...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row mx-2">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                        aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="DataTables_Table_0_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0"
                                                    aria-disabled="true" role="link" data-dt-idx="previous"
                                                    tabindex="-1" class="page-link"><i
                                                        class="ti ti-chevron-left ti-sm"></i></a></li>
                                            <li class="paginate_button page-item next disabled"
                                                id="DataTables_Table_0_next"><a aria-controls="DataTables_Table_0"
                                                    aria-disabled="true" role="link" data-dt-idx="next"
                                                    tabindex="-1" class="page-link"><i
                                                        class="ti ti-chevron-right ti-sm"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Projects table -->
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Inicializa el arreglo que contendrá los proyectos
        const listaProductos = [];

        @foreach ($productos as $producto)
            listaProductos.push({
                id: '{{ $producto->id }}',
                nombre: '{{ $producto->nombre }}',
                descripcion_corta: '{{ $producto->descripcion_corta }}'
                stock_actual: '{{ $producto->stock_actual }}'
                precio_venta: '{{ $producto->precio_venta }}'
            });
        @endforeach
    </script>
@endsection
