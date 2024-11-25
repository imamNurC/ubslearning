@extends('custom_layout_admin.bases.adminbase')
@section('content')
    <main class="">
        <div class="grid mb-4 pb-10 px-8 mx-4 rounded-3xl bg-gray-100 border-4">
            <div class="grid grid-cols-12 gap-6">
                <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
                    <div class="col-span-12 mt-8">
                        <div class="flex items-center h-10 intro-y">
                            <h2 class="mr-5 text-lg font-medium truncate">Dashboard</h2>
                        </div>
                        <div class="grid grid-cols-9 gap-7 mt-5">
                            <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" preserveAspectRatio="xMidYMid meet">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 20c0-3 4-5 6-5s6 2 6 5v1H6v-1z" />
                                        </svg>

                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                        </svg> --}}
                                        {{-- <div
                                            class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                            <span class="flex items-center">30%</span>
                                        </div> --}}
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">{{ $user_count }}</div>

                                            <div class="mt-1 text-base text-gray-600">User</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z">
                                            </path>
                                            {{-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                            </path> --}}
                                        </svg>
                                        {{-- <div
                                            class="bg-red-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                            <span class="flex items-center">30%</span>
                                        </div> --}}
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">{{ $content_count }}</div>

                                            <div class="mt-1 text-base text-gray-600">Content</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-pink-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                            </path>
                                            {{-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path> --}}
                                        </svg>
                                        {{-- <div
                                            class="bg-yellow-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                            <span class="flex items-center">30%</span>
                                        </div> --}}
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">{{ $sold_count }}</div>

                                            <div class="mt-1 text-base text-gray-600">Transaction</div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </a>
                            {{-- <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z">
                                            </path>
                                        </svg>
                                        <div
                                            class="bg-blue-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                            <span class="flex items-center">30%</span>
                                        </div>
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                                            <div class="mt-1 text-base text-gray-600">Item Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </a> --}}
                        </div>
                    </div>

                    <div class="bg-white shadow-lg p-4" id="chart">
                    </div>
                    <div class="col-span-12 mt-5">

                        {{-- LINECHART --}}
                        <div class="grid gap-2 grid-cols-1 lg:grid-cols-2">
                            {{-- <div id="salesChart"></div>
                             --}}
                            {{-- <div class="bg-white shadow-lg p-4" id="chartline" style="min-height: 365px;">
                                <div id="apexcharts78g4scc" class="apexcharts-canvas apexcharts78g4scc apexcharts-theme-"
                                    style="width: 452px; height: 350px;">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg"
                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="452" height="350">
                                        <foreignObject x="0" y="0" width="452" height="350">
                                            <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                xmlns="http://www.w3.org/1999/xhtml"
                                                style="right: 0px; position: absolute; left: 0px; top: 325px; max-height: 175px;">
                                                <div class="apexcharts-legend-series" rel="1" seriesname="TEAMxA"
                                                    data:collapsed="false" style="margin: 4px 5px;">
                                                    <span
                                                        class="apexcharts-legend-marker" rel="1"
                                                        data:collapsed="false"
                                                        style="height: 16px; width: 16px; left: 0px; top: 0px;">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="100%"
                                                            height="100%">
                                                            <path d="M 0, 0
                                                                    m -7, 0
                                                                    a 7,7 0 1,0 14,0
                                                                    a 7,7 0 1,0 -14,0" fill="#008ffb" fill-opacity="1" stroke="#ffffff"
                                                                stroke-opacity="0.9" stroke-linecap="butt"
                                                                stroke-width="1" stroke-dasharray="0" cx="0"
                                                                cy="0" shape="circle"
                                                                class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                style="transform: translate(50%, 50%);">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="apexcharts-legend-text" rel="1"
                                                        i="0" data:default-text="TEAM%20A" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">TEAM
                                                        A
                                                    </span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="2" seriesname="TEAMxB"
                                                    data:collapsed="false" style="margin: 4px 5px;">
                                                    <span
                                                        class="apexcharts-legend-marker" rel="2"
                                                        data:collapsed="false"
                                                        style="height: 16px; width: 16px; left: 0px; top: 0px;">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="100%"
                                                            height="100%">
                                                            <path d="M 0, 0
                                                                m -7, 0 a 7,7 0 1,0 14,0 a 7,7 0 1,0 -14,0" fill="#00e396" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="0.9"
                                                                stroke-linecap="butt" stroke-width="1"
                                                                stroke-dasharray="0" cx="0" cy="0"
                                                                shape="circle"
                                                                class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                style="transform: translate(50%, 50%);"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="apexcharts-legend-text" rel="2"
                                                        i="1" data:default-text="TEAM%20B" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">TEAM
                                                        B
                                                    </span>
                                                </div>
                                            </div>
                                            <style type="text/css">
                                                .apexcharts-flip-y {
                                                    transform: scaleY(-1) translateY(-100%);
                                                    transform-origin: top;
                                                    transform-box: fill-box;
                                                }

                                                .apexcharts-flip-x {
                                                    transform: scaleX(-1);
                                                    transform-origin: center;
                                                    transform-box: fill-box;
                                                }

                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom,
                                                .apexcharts-legend.apx-legend-position-top {
                                                    flex-wrap: wrap
                                                }

                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    justify-content: flex-start;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *,
                                                .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: center;
                                                    cursor: pointer;
                                                    margin-right: 1px;
                                                }

                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                                .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }
                                            </style>

                                        </foreignObject>
                                        <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                        <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                        <g class="apexcharts-yaxis" rel="0"
                                            transform="translate(35.08333333333333, 0)">
                                            <g class="apexcharts-yaxis-texts-g">
                                                <text x="20" y="33.666666666666664"
                                                    text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>55</tspan>
                                                    <title>55</title>
                                                </text>
                                                <text x="20" y="71.16556140814887" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>50</tspan>
                                                    <title>50</title>
                                                </text>
                                                <text x="20" y="108.66445614963108" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>45</tspan>
                                                    <title>45</title>
                                                </text>
                                                <text x="20" y="146.16335089111328" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>40</tspan>
                                                    <title>40</title>
                                                </text>
                                                <text x="20" y="183.6622456325955" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>35</tspan>
                                                    <title>35</title>
                                                </text>
                                                <text x="20" y="221.16114037407772" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>30</tspan>
                                                    <title>30</title>
                                                </text>
                                                <text x="20" y="258.66003511555994" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>25</tspan>
                                                    <title>25</title>
                                                </text>
                                            </g>
                                            <g class="apexcharts-yaxis-title"><text x="18.025390625" y="142.4966842244466"
                                                    text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="900"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-title-text "
                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                    transform="rotate(-90 -6.80859375 137.99668884277344)">Series A</text>
                                            </g>
                                        </g>
                                        <g class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(65.08333333333333, 30)">
                                            <defs>
                                                <clipPath id="gridRectMask78g4scc">
                                                    <rect width="321.5" height="224.99336844889322" x="0" y="0"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff">
                                                    </rect>
                                                </clipPath>
                                                <clipPath id="gridRectBarMask78g4scc">
                                                    <rect width="330.5" height="233.99336844889322" x="-4.5" y="-4.5"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff">
                                                    </rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMask78g4scc">
                                                    <rect width="321.5" height="224.99336844889322" x="0" y="0"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff">
                                                    </rect>
                                                </clipPath>
                                                <clipPath id="forecastMask78g4scc"></clipPath>
                                                <clipPath id="nonForecastMask78g4scc"></clipPath>
                                            </defs>
                                            <line x1="0" y1="0" x2="0" y2="224.99336844889322"
                                                stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                                class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                height="224.99336844889322" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1">
                                            </line>
                                            <line x1="0" y1="224.99336844889322" x2="0"
                                                y2="230.99336844889322" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line x1="32.15" y1="224.99336844889322" x2="32.15"
                                                y2="230.99336844889322" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line x1="64.3" y1="224.99336844889322" x2="64.3"
                                                y2="230.99336844889322" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line x1="96.44999999999999" y1="224.99336844889322" x2="96.44999999999999"
                                                y2="230.99336844889322" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line x1="128.6" y1="224.99336844889322" x2="128.6"
                                                y2="230.99336844889322" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line x1="160.75" y1="224.99336844889322" x2="160.75"
                                                y2="230.99336844889322" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line x1="192.9" y1="224.99336844889322" x2="192.9"
                                                y2="230.99336844889322" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line x1="225.05" y1="224.99336844889322" x2="225.05"
                                                y2="230.99336844889322" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line x1="257.2" y1="224.99336844889322" x2="257.2"
                                                y2="230.99336844889322" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line x1="289.34999999999997" y1="224.99336844889322" x2="289.34999999999997"
                                                y2="230.99336844889322" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line x1="321.49999999999994" y1="224.99336844889322" x2="321.49999999999994"
                                                y2="230.99336844889322" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <g class="apexcharts-grid">
                                                <g class="apexcharts-gridlines-horizontal">
                                                    <line x1="0" y1="37.498894741482204" x2="321.5"
                                                        y2="37.498894741482204" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line x1="0" y1="74.99778948296441" x2="321.5"
                                                        y2="74.99778948296441" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line x1="0" y1="112.49668422444661" x2="321.5"
                                                        y2="112.49668422444661" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line x1="0" y1="149.99557896592881" x2="321.5"
                                                        y2="149.99557896592881" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line x1="0" y1="187.49447370741103" x2="321.5"
                                                        y2="187.49447370741103" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line x1="0" y1="224.99336844889325" x2="321.5"
                                                        y2="224.99336844889325" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g class="apexcharts-gridlines-vertical"></g>
                                                <line x1="0" y1="224.99336844889322" x2="321.5"
                                                    y2="224.99336844889322" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line x1="0" y1="1" x2="0"
                                                    y2="224.99336844889322" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g class="apexcharts-grid-borders">
                                                <line x1="0" y1="0" x2="321.5" y2="0"
                                                    stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line x1="0" y1="224.99336844889322" x2="321.5"
                                                    y2="224.99336844889322" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"></line>
                                            </g>
                                            <g class="apexcharts-area-series apexcharts-plot-series">
                                                <g class="apexcharts-series" zindex="0" seriesname="TEAMxA"
                                                    data:longestseries="true" rel="1" data:realindex="0">
                                                    <path
                                                        d="M 0 82.49756843126085C 11.2525 82.49756843126085 20.8975 0 32.15 0C 43.402499999999996 0 53.0475 179.9946947591146 64.3 179.9946947591146C 75.5525 179.9946947591146 85.19749999999999 59.99823158637156 96.44999999999999 59.99823158637156C 107.70249999999999 59.99823158637156 117.3475 179.9946947591146 128.6 179.9946947591146C 139.8525 179.9946947591146 149.4975 89.99734737955731 160.75 89.99734737955731C 172.0025 89.99734737955731 181.64749999999998 217.4935895005968 192.89999999999998 217.4935895005968C 204.15249999999997 217.4935895005968 213.79749999999999 104.99690527615019 225.04999999999998 104.99690527615019C 236.30249999999998 104.99690527615019 245.9475 179.9946947591146 257.2 179.9946947591146C 268.4525 179.9946947591146 278.09749999999997 59.99823158637156 289.34999999999997 59.99823158637156C 300.60249999999996 59.99823158637156 310.2475 164.99513686252172 321.5 164.99513686252172C 321.5 164.99513686252172 321.5 164.99513686252172 321.5 224.99336844889322 L 0 224.99336844889322z"
                                                        fill="rgba(0,143,251,0.35)" fill-opacity="1" stroke="none"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectBarMask78g4scc)"
                                                        pathto="M 0 82.49756843126085C 11.2525 82.49756843126085 20.8975 0 32.15 0C 43.402499999999996 0 53.0475 179.9946947591146 64.3 179.9946947591146C 75.5525 179.9946947591146 85.19749999999999 59.99823158637156 96.44999999999999 59.99823158637156C 107.70249999999999 59.99823158637156 117.3475 179.9946947591146 128.6 179.9946947591146C 139.8525 179.9946947591146 149.4975 89.99734737955731 160.75 89.99734737955731C 172.0025 89.99734737955731 181.64749999999998 217.4935895005968 192.89999999999998 217.4935895005968C 204.15249999999997 217.4935895005968 213.79749999999999 104.99690527615019 225.04999999999998 104.99690527615019C 236.30249999999998 104.99690527615019 245.9475 179.9946947591146 257.2 179.9946947591146C 268.4525 179.9946947591146 278.09749999999997 59.99823158637156 289.34999999999997 59.99823158637156C 300.60249999999996 59.99823158637156 310.2475 164.99513686252172 321.5 164.99513686252172C 321.5 164.99513686252172 321.5 164.99513686252172 321.5 224.99336844889322 L 0 224.99336844889322z"
                                                        pathfrom="M 0 224.99336844889322 L 0 224.99336844889322 L 32.15 224.99336844889322 L 64.3 224.99336844889322 L 96.44999999999999 224.99336844889322 L 128.6 224.99336844889322 L 160.75 224.99336844889322 L 192.89999999999998 224.99336844889322 L 225.04999999999998 224.99336844889322 L 257.2 224.99336844889322 L 289.34999999999997 224.99336844889322 L 321.5 224.99336844889322z">
                                                    </path>
                                                    <path
                                                        d="M 0 82.49756843126085C 11.2525 82.49756843126085 20.8975 0 32.15 0C 43.402499999999996 0 53.0475 179.9946947591146 64.3 179.9946947591146C 75.5525 179.9946947591146 85.19749999999999 59.99823158637156 96.44999999999999 59.99823158637156C 107.70249999999999 59.99823158637156 117.3475 179.9946947591146 128.6 179.9946947591146C 139.8525 179.9946947591146 149.4975 89.99734737955731 160.75 89.99734737955731C 172.0025 89.99734737955731 181.64749999999998 217.4935895005968 192.89999999999998 217.4935895005968C 204.15249999999997 217.4935895005968 213.79749999999999 104.99690527615019 225.04999999999998 104.99690527615019C 236.30249999999998 104.99690527615019 245.9475 179.9946947591146 257.2 179.9946947591146C 268.4525 179.9946947591146 278.09749999999997 59.99823158637156 289.34999999999997 59.99823158637156C 300.60249999999996 59.99823158637156 310.2475 164.99513686252172 321.5 164.99513686252172"
                                                        fill="none" fill-opacity="1" stroke="#008ffb"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectBarMask78g4scc)"
                                                        pathto="M 0 82.49756843126085C 11.2525 82.49756843126085 20.8975 0 32.15 0C 43.402499999999996 0 53.0475 179.9946947591146 64.3 179.9946947591146C 75.5525 179.9946947591146 85.19749999999999 59.99823158637156 96.44999999999999 59.99823158637156C 107.70249999999999 59.99823158637156 117.3475 179.9946947591146 128.6 179.9946947591146C 139.8525 179.9946947591146 149.4975 89.99734737955731 160.75 89.99734737955731C 172.0025 89.99734737955731 181.64749999999998 217.4935895005968 192.89999999999998 217.4935895005968C 204.15249999999997 217.4935895005968 213.79749999999999 104.99690527615019 225.04999999999998 104.99690527615019C 236.30249999999998 104.99690527615019 245.9475 179.9946947591146 257.2 179.9946947591146C 268.4525 179.9946947591146 278.09749999999997 59.99823158637156 289.34999999999997 59.99823158637156C 300.60249999999996 59.99823158637156 310.2475 164.99513686252172 321.5 164.99513686252172"
                                                        pathfrom="M 0 224.99336844889322 L 0 224.99336844889322 L 32.15 224.99336844889322 L 64.3 224.99336844889322 L 96.44999999999999 224.99336844889322 L 128.6 224.99336844889322 L 160.75 224.99336844889322 L 192.89999999999998 224.99336844889322 L 225.04999999999998 224.99336844889322 L 257.2 224.99336844889322 L 289.34999999999997 224.99336844889322 L 321.5 224.99336844889322"
                                                        fill-rule="evenodd">
                                                    </path>
                                                    <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                        data:realindex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <path d="M 0, 0
                                                        m -0, 0
                                                        a 0,0 0 1,0 0,0
                                                        a 0,0 0 1,0 -0,0" fill="#008ffb" fill-opacity="1" stroke="#ffffff"
                                                                stroke-opacity="0.9" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0" cx="0"
                                                                cy="0" shape="circle"
                                                                class="apexcharts-marker wkf0nodk9l"
                                                                default-marker-size="0"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="apexcharts-line-series apexcharts-plot-series">
                                                <g class="apexcharts-series" zindex="1" seriesname="TEAMxB"
                                                    data:longestseries="true" rel="1" data:realindex="1">
                                                    <path
                                                        d="M 0 131.2461315951877C 11.2525 131.2461315951877 20.8975 78.74767895711261 32.15 78.74767895711261C 43.402499999999996 78.74767895711261 53.0475 168.74502633666992 64.3 168.74502633666992C 75.5525 168.74502633666992 85.19749999999999 108.74679475029839 96.44999999999999 108.74679475029839C 107.70249999999999 108.74679475029839 117.3475 176.24480528496636 128.6 176.24480528496636C 139.8525 176.24480528496636 149.4975 134.99602106933594 160.75 134.99602106933594C 172.0025 134.99602106933594 181.64749999999998 198.74414212985567 192.89999999999998 198.74414212985567C 204.15249999999997 198.74414212985567 213.79749999999999 142.49580001763238 225.04999999999998 142.49580001763238C 236.30249999999998 142.49580001763238 245.9475 172.49491581081813 257.2 172.49491581081813C 268.4525 172.49491581081813 278.09749999999997 108.74679475029839 289.34999999999997 108.74679475029839C 300.60249999999996 108.74679475029839 310.2475 176.24480528496636 321.5 176.24480528496636"
                                                        fill="none" fill-opacity="1" stroke="rgba(0,227,150,1)"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                        stroke-dasharray="0" class="apexcharts-line" index="1"
                                                        clip-path="url(#gridRectBarMask78g4scc)"
                                                        pathto="M 0 131.2461315951877C 11.2525 131.2461315951877 20.8975 78.74767895711261 32.15 78.74767895711261C 43.402499999999996 78.74767895711261 53.0475 168.74502633666992 64.3 168.74502633666992C 75.5525 168.74502633666992 85.19749999999999 108.74679475029839 96.44999999999999 108.74679475029839C 107.70249999999999 108.74679475029839 117.3475 176.24480528496636 128.6 176.24480528496636C 139.8525 176.24480528496636 149.4975 134.99602106933594 160.75 134.99602106933594C 172.0025 134.99602106933594 181.64749999999998 198.74414212985567 192.89999999999998 198.74414212985567C 204.15249999999997 198.74414212985567 213.79749999999999 142.49580001763238 225.04999999999998 142.49580001763238C 236.30249999999998 142.49580001763238 245.9475 172.49491581081813 257.2 172.49491581081813C 268.4525 172.49491581081813 278.09749999999997 108.74679475029839 289.34999999999997 108.74679475029839C 300.60249999999996 108.74679475029839 310.2475 176.24480528496636 321.5 176.24480528496636"
                                                        pathfrom="M 0 224.99336844889322 L 0 224.99336844889322 L 32.15 224.99336844889322 L 64.3 224.99336844889322 L 96.44999999999999 224.99336844889322 L 128.6 224.99336844889322 L 160.75 224.99336844889322 L 192.89999999999998 224.99336844889322 L 225.04999999999998 224.99336844889322 L 257.2 224.99336844889322 L 289.34999999999997 224.99336844889322 L 321.5 224.99336844889322"
                                                        fill-rule="evenodd"></path>
                                                    <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                        data:realindex="1">
                                                        <g class="apexcharts-series-markers">
                                                            <path d="M 0, 0
                                                        m -0, 0
                                                        a 0,0 0 1,0 0,0
                                                a 0,0 0 1,0 -0,0" fill="#00e396" fill-opacity="1" stroke="#ffffff"
                                                                stroke-opacity="0.9" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0" cx="0"
                                                                cy="0" shape="circle"
                                                                class="apexcharts-marker w6g4wpb52f"
                                                                default-marker-size="0"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="apexcharts-datalabels" data:realindex="0"></g>
                                                <g class="apexcharts-datalabels" data:realindex="1"></g>
                                            </g>
                                            <line x1="0" y1="0" x2="321.5" y2="0"
                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line x1="0" y1="0" x2="321.5" y2="0"
                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text
                                                        x="0" y="246.99336844889322" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 241.9933624267578)">
                                                        <tspan>Dec 01</tspan>
                                                        <title>Dec 01</title>
                                                    </text><text x="32.14999999999999" y="246.99336844889322"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 33.308204650878906 241.9933624267578)">
                                                        <tspan>Dec 02</tspan>
                                                        <title>Dec 02</title>
                                                    </text><text x="64.3" y="246.99336844889322" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 65.45820617675781 241.9933624267578)">
                                                        <tspan>Dec 03</tspan>
                                                        <title>Dec 03</title>
                                                    </text><text x="96.45" y="246.99336844889322" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 97.60820007324219 241.9933624267578)">
                                                        <tspan>Dec 04</tspan>
                                                        <title>Dec 04</title>
                                                    </text><text x="128.60000000000002" y="246.99336844889322"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 129.75820922851562 241.9933624267578)">
                                                        <tspan>Dec 05</tspan>
                                                        <title>Dec 05</title>
                                                    </text><text x="160.75000000000003" y="246.99336844889322"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 161.908203125 241.9933624267578)">
                                                        <tspan>Dec 06</tspan>
                                                        <title>Dec 06</title>
                                                    </text><text x="192.90000000000003" y="246.99336844889322"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 194.05819702148438 241.9933624267578)">
                                                        <tspan>Dec 07</tspan>
                                                        <title>Dec 07</title>
                                                    </text><text x="225.05000000000004" y="246.99336844889322"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 226.20822143554688 241.9933624267578)">
                                                        <tspan>Dec 08</tspan>
                                                        <title>Dec 08</title>
                                                    </text><text x="257.20000000000005" y="246.99336844889322"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 258.35821533203125 241.9933624267578)">
                                                        <tspan>Dec 09 </tspan>
                                                        <title>Dec 09 </title>
                                                    </text><text x="289.35" y="246.99336844889322" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 290.5082092285156 241.9933624267578)">
                                                        <tspan>Dec 10</tspan>
                                                        <title>Dec 10</title>
                                                    </text><text x="321.5" y="246.99336844889322" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px"
                                                        font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 322.5 241.9933624267578)">
                                                        <tspan>Dec 11</tspan>
                                                        <title>Dec 11</title>
                                                    </text></g>
                                            </g>
                                            <g class="apexcharts-yaxis-annotations"></g>
                                            <g class="apexcharts-xaxis-annotations"></g>
                                            <g class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g class="apexcharts-yaxis" rel="1"
                                            transform="translate(417.5833333333333, 0)">
                                            <g class="apexcharts-yaxis-texts-g"><text x="-20" y="33.666666666666664"
                                                    text-anchor="start" dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>90</tspan>
                                                    <title>90</title>
                                                </text><text x="-20" y="71.16556140814887" text-anchor="start"
                                                    dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>80</tspan>
                                                    <title>80</title>
                                                </text><text x="-20" y="108.66445614963108" text-anchor="start"
                                                    dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>70</tspan>
                                                    <title>70</title>
                                                </text><text x="-20" y="146.16335089111328" text-anchor="start"
                                                    dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>60</tspan>
                                                    <title>60</title>
                                                </text><text x="-20" y="183.6622456325955" text-anchor="start"
                                                    dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>50</tspan>
                                                    <title>50</title>
                                                </text><text x="-20" y="221.16114037407772" text-anchor="start"
                                                    dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>40</tspan>
                                                    <title>40</title>
                                                </text><text x="-20" y="258.66003511555994" text-anchor="start"
                                                    dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>30</tspan>
                                                    <title>30</title>
                                                </text></g>
                                            <g class="apexcharts-yaxis-title">
                                                <text x="32.525390625" y="142.4966842244466"
                                                    text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="900"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-title-text "
                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                    transform="rotate(90 7.69140625 137.99668884277344)">Series B
                                                </text>
                                            </g>
                                        </g>
                                        <rect width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fefefe">
                                        </rect>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        </div>
                                        <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                            style="order: 1;">
                                            <span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 143, 251);">
                                            </span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group">
                                                    <span
                                                        class="apexcharts-tooltip-text-y-label">
                                                    </span>
                                                    <span
                                                        class="apexcharts-tooltip-text-y-value">
                                                    </span>
                                                </div>
                                                <div class="apexcharts-tooltip-goals-group">
                                                    <span
                                                        class="apexcharts-tooltip-text-goals-label">
                                                    </span>
                                                    <span
                                                        class="apexcharts-tooltip-text-goals-value">
                                                    </span>
                                                </div>
                                                <div class="apexcharts-tooltip-z-group">
                                                    <span
                                                        class="apexcharts-tooltip-text-z-label">
                                                    </span>
                                                    <span
                                                        class="apexcharts-tooltip-text-z-value">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-1"
                                            style="order: 2;">
                                            <span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 227, 150);">
                                            </span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group">
                                                    <span
                                                        class="apexcharts-tooltip-text-y-label">
                                                    </span>
                                                    <span
                                                        class="apexcharts-tooltip-text-y-value">
                                                    </span>
                                                </div>
                                                <div class="apexcharts-tooltip-goals-group">
                                                    <span
                                                        class="apexcharts-tooltip-text-goals-label">
                                                    </span>
                                                    <span
                                                        class="apexcharts-tooltip-text-goals-value">
                                                    </span>
                                                </div>
                                                <div class="apexcharts-tooltip-z-group">
                                                    <span
                                                        class="apexcharts-tooltip-text-z-label">
                                                    </span>
                                                    <span
                                                        class="apexcharts-tooltip-text-z-value">
                                                    </span>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text">
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-1 apexcharts-yaxistooltip-right apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text">
                                        </div>
                                    </div>
                                    <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                        <div class="apexcharts-menu-icon" title="Menu">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                            </svg>
                                        </div>
                                        <div class="apexcharts-menu">
                                            <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG
                                            </div>
                                            <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG
                                            </div>
                                            <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}



                            {{-- CHARTPIE --}}
                            <div class="bg-white shadow-lg" id="chartpie" style="min-height: 353px;">
                                <div id="apexchartsjq6jdc3zk"
                                    class="apexcharts-canvas apexchartsjq6jdc3zk apexcharts-theme-"
                                    style="width: 484px; height: 353px;">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg"
                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="484"
                                        height="353">
                                        <foreignObject x="0" y="0" width="484" height="353">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml">
                                            </div>
                                            <style type="text/css">
                                                .apexcharts-flip-y {
                                                    transform: scaleY(-1) translateY(-100%);
                                                    transform-origin: top;
                                                    transform-box: fill-box;
                                                }

                                                .apexcharts-flip-x {
                                                    transform: scaleX(-1);
                                                    transform-origin: center;
                                                    transform-box: fill-box;
                                                }

                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom,
                                                .apexcharts-legend.apx-legend-position-top {
                                                    flex-wrap: wrap
                                                }

                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    justify-content: flex-start;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *,
                                                .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: center;
                                                    cursor: pointer;
                                                    margin-right: 1px;
                                                }

                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                                .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }
                                            </style>
                                        </foreignObject>
                                        <g class="apexcharts-inner apexcharts-graphical" transform="translate(67, 0)">
                                            <defs>
                                                <clipPath id="gridRectMaskjq6jdc3zk">
                                                    <rect width="350" height="350" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectBarMaskjq6jdc3zk">
                                                    <rect width="356" height="356" x="-3" y="-3" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskjq6jdc3zk">
                                                    <rect width="350" height="350" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskjq6jdc3zk"></clipPath>
                                                <clipPath id="nonForecastMaskjq6jdc3zk"></clipPath>
                                            </defs>
                                            <g class="apexcharts-radialbar">
                                                <g>
                                                    <g class="apexcharts-tracks">
                                                        <g class="apexcharts-radialbar-track apexcharts-track"
                                                            rel="1">
                                                            <path
                                                                d="M 175 32.478048780487796 A 142.5219512195122 142.5219512195122 0 1 1 174.97512522707478 32.478050951221235 "
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="11.1289756097561"
                                                                stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                id="apexcharts-radialbarTrack-0"
                                                                data:pathorig="M 175 32.478048780487796 A 142.5219512195122 142.5219512195122 0 1 1 174.97512522707478 32.478050951221235 ">
                                                            </path>
                                                        </g>
                                                        <g class="apexcharts-radialbar-track apexcharts-track"
                                                            rel="2">
                                                            <path
                                                                d="M 175 48.95121951219511 A 126.04878048780489 126.04878048780489 0 1 1 174.97800033773532 48.95122143202781 "
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="11.1289756097561"
                                                                stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                id="apexcharts-radialbarTrack-1"
                                                                data:pathorig="M 175 48.95121951219511 A 126.04878048780489 126.04878048780489 0 1 1 174.97800033773532 48.95122143202781 ">
                                                            </path>
                                                        </g>
                                                        <g class="apexcharts-radialbar-track apexcharts-track"
                                                            rel="3">
                                                            <path
                                                                d="M 175 65.42439024390242 A 109.57560975609758 109.57560975609758 0 1 1 174.98087544839584 65.4243919128344 "
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="11.1289756097561"
                                                                stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                id="apexcharts-radialbarTrack-2"
                                                                data:pathorig="M 175 65.42439024390242 A 109.57560975609758 109.57560975609758 0 1 1 174.98087544839584 65.4243919128344 ">
                                                            </path>
                                                        </g>
                                                        <g class="apexcharts-radialbar-track apexcharts-track"
                                                            rel="4">
                                                            <path
                                                                d="M 175 81.89756097560974 A 93.10243902439026 93.10243902439026 0 1 1 174.98375055905635 81.89756239364097 "
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="11.1289756097561"
                                                                stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                id="apexcharts-radialbarTrack-3"
                                                                data:pathorig="M 175 81.89756097560974 A 93.10243902439026 93.10243902439026 0 1 1 174.98375055905635 81.89756239364097 ">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g class="apexcharts-series apexcharts-radial-series"
                                                            seriesname="Apples" rel="1" data:realindex="0">
                                                            <path
                                                                d="M 175 32.478048780487796 A 142.5219512195122 142.5219512195122 0 0 1 228.38966263333026 307.144052092087 "
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(0,143,251,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="11.47317073170732"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="158" data:value="44" index="0" j="0"
                                                                data:pathorig="M 175 32.478048780487796 A 142.5219512195122 142.5219512195122 0 0 1 228.38966263333026 307.144052092087 ">
                                                            </path>
                                                        </g>
                                                        <g class="apexcharts-series apexcharts-radial-series"
                                                            seriesname="Oranges" rel="2" data:realindex="1">
                                                            <path
                                                                d="M 175 48.95121951219511 A 126.04878048780489 126.04878048780489 0 1 1 136.04878470903103 294.8795140539843 "
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(0,227,150,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="11.47317073170732"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-1"
                                                                data:angle="198" data:value="55" index="0" j="1"
                                                                data:pathorig="M 175 48.95121951219511 A 126.04878048780489 126.04878048780489 0 1 1 136.04878470903103 294.8795140539843 ">
                                                            </path>
                                                        </g>
                                                        <g class="apexcharts-series apexcharts-radial-series"
                                                            seriesname="Bananas" rel="3" data:realindex="2">
                                                            <path
                                                                d="M 175 65.42439024390242 A 109.57560975609758 109.57560975609758 0 1 1 79.16301228550122 228.1233097541145 "
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(254,176,25,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="11.47317073170732"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-2"
                                                                data:angle="241" data:value="67" index="0" j="2"
                                                                data:pathorig="M 175 65.42439024390242 A 109.57560975609758 109.57560975609758 0 1 1 79.16301228550122 228.1233097541145 ">
                                                            </path>
                                                        </g>
                                                        <g class="apexcharts-series apexcharts-radial-series"
                                                            seriesname="Berries" rel="4" data:realindex="3">
                                                            <path
                                                                d="M 175 81.89756097560974 A 93.10243902439026 93.10243902439026 0 1 1 93.57077204652433 129.8630418925776 "
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(255,69,96,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="11.47317073170732"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-3"
                                                                data:angle="299" data:value="83" index="0" j="3"
                                                                data:pathorig="M 175 81.89756097560974 A 93.10243902439026 93.10243902439026 0 1 1 93.57077204652433 129.8630418925776 ">
                                                            </path>
                                                        </g>
                                                        <circle r="82.53795121951218" cx="175" cy="175"
                                                            class="apexcharts-radialbar-hollow" fill="transparent">
                                                        </circle>
                                                        <g class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                            <text x="175" y="175" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="16px"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                font-weight="600" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                style="font-family: Helvetica, Arial, sans-serif;">Total</text><text
                                                                x="175" y="207" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="16px"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: Helvetica, Arial, sans-serif;">249</text>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line x1="0" y1="0" x2="350" y2="0"
                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line x1="0" y1="0" x2="350" y2="0"
                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                    </svg></div>
                            </div>
                        </div>
                    </div>
                    {{-- TABLE LIST --}}
                    <div class="col-span-12 mt-5">
                        <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                            <div class="bg-white p-4 shadow-lg rounded-lg">
                                <h1 class="font-bold text-base">Table</h1>
                                <div class="mt-4">
                                    <div class="flex flex-col">
                                        <div class="-my-2 overflow-x-auto">
                                            <div class="py-2 align-middle inline-block min-w-full">
                                                <div
                                                    class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                    <table class="min-w-full divide-y divide-gray-200">
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                    <div class="flex cursor-pointer">
                                                                        <span class="mr-2">PRODUCT NAME</span>
                                                                    </div>
                                                                </th>
                                                                <th
                                                                    class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                    <div class="flex cursor-pointer">
                                                                        <span class="mr-2">Stock</span>
                                                                    </div>
                                                                </th>
                                                                <th
                                                                    class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                    <div class="flex cursor-pointer">
                                                                        <span class="mr-2">STATUS</span>
                                                                    </div>
                                                                </th>
                                                                <th
                                                                    class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                    <div class="flex cursor-pointer">
                                                                        <span class="mr-2">ACTION</span>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                    <p>Apple MacBook Pro 13</p>
                                                                    <p class="text-xs text-gray-400">PC &amp; Laptop
                                                                    </p>
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                    <p>77</p>
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                    <div class="flex text-green-500">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="w-5 h-5 mr-1" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                            </path>
                                                                        </svg>
                                                                        <p>Active</p>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                    <div class="flex space-x-4">
                                                                        <a href="#"
                                                                            class="text-blue-500 hover:text-blue-600">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-5 h-5 mr-1" fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                                                </path>
                                                                            </svg>
                                                                            <p>Edit</p>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="text-red-500 hover:text-red-600">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-5 h-5 mr-1 ml-3" fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                                                </path>
                                                                            </svg>
                                                                            <p>Delete</p>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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

    </main>
@endsection
