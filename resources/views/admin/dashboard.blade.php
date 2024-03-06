@extends('admin.layouts.master')
@section('content')

<main class="app-main"><!--begin::App Content Header-->
            <div class="app-content-header"><!--begin::Container-->
                <div class="container-fluid"><!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Layout</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Docs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Layout
                                </li>
                            </ol>
                        </div>
                    </div><!--end::Row-->
                </div><!--end::Container-->
            </div><!--end::App Content Header--><!--begin::App Content-->
            <div class="app-content">
                <div class="container-fluid">
                    <div class="callout callout-info mb-4">
                        <h5 class="fw-bold">Tips</h5>
                        <p>
                            The <a href="/starter.html" target="_blank" rel="noopener noreferrer" class="callout-link">
                                starter page
                            </a> is a good place to start building your app if you’d like to
                            start from scratch.
                        </p>
                    </div>
                    <p>The layout consists of five major parts:</p>
                    <ul>
                        <li>
                            Wrapper <code>.app-wrapper</code> . A div that wraps the whole site.
                        </li>
                        <li>
                            Main Header <code>.app-header</code> . Contains the logo and navbar.
                        </li>
                        <li>
                            Main Sidebar <code>.app-sidebar</code> . Contains the sidebar user
                            panel and menu.
                        </li>
                        <li>
                            Content <code>.app-main</code> . Contains the page header and content.
                        </li>
                        <li>
                            Main Footer <code>.app-footer</code> . Contains the footer.
                        </li>
                    </ul>
                    <h4>Layout Options</h4>
                    <p>
                        AdminLTE v4 provides a set of options to apply to your main
                        layout. Each one of these classes can be added to the
                        <code>body</code> tag to get the desired goal.
                    </p>
                    <ul>
                        <li>
                            Fixed Sidebar: use the class <code>.layout-fixed</code> to get a
                            fixed sidebar.
                        </li>
                        <li>
                            Mini Sidebar on Toggle: use the class
                            <code>.sidebar-expand-* .sidebar-mini</code>
                            to have a collapsed sidebar upon loading.
                        </li>
                        <li>
                            Collapsed Sidebar: use the class
                            <code>.sidebar-expand-* .sidebar-mini .sidebar-collapse</code> to
                            have a collapsed sidebar upon loading.
                        </li>
                    </ul>
                </div><!-- /.container-fluid -->
            </div><!--end::App Content-->
        </main><!--end::App Main--><!--begin::Footer-->

@endsection
@push('js')
<script src="/adminltetps://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script><!-- sortablejs -->
<script>
    const connectedSortables =
        document.querySelectorAll(".connectedSortable");
    connectedSortables.forEach((connectedSortable) => {
        let sortable = new Sortable(connectedSortable, {
            group: "shared",
            handle: ".card-header",
        });
    });

    const cardHeaders = document.querySelectorAll(
        ".connectedSortable .card-header",
    );
    cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = "move";
    });
</script><!-- apexcharts -->
<script src="/adminltetps://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script><!-- ChartJS -->
<script>
    // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
    // IT'S ALL JUST JUNK FOR DEMO
    // ++++++++++++++++++++++++++++++++++++++++++

    const sales_chart_options = {
        series: [{
                name: "Digital Goods",
                data: [28, 48, 40, 19, 86, 27, 90],
            },
            {
                name: "Electronics",
                data: [65, 59, 80, 81, 56, 55, 40],
            },
        ],
        chart: {
            height: 300,
            type: "area",
            toolbar: {
                show: false,
            },
        },
        legend: {
            show: false,
        },
        colors: ["#0d6efd", "#20c997"],
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: "smooth",
        },
        xaxis: {
            type: "datetime",
            categories: [
                "2023-01-01",
                "2023-02-01",
                "2023-03-01",
                "2023-04-01",
                "2023-05-01",
                "2023-06-01",
                "2023-07-01",
            ],
        },
        tooltip: {
            x: {
                format: "MMMM yyyy",
            },
        },
    };

    const sales_chart = new ApexCharts(
        document.querySelector("#revenue-chart"),
        sales_chart_options,
    );
    sales_chart.render();
</script><!-- jsvectormap -->
<script src="/adminltetps://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js" integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
<script src="/adminltetps://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js" integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script><!-- jsvectormap -->
<script>
    const visitorsData = {
        US: 398, // USA
        SA: 400, // Saudi Arabia
        CA: 1000, // Canada
        DE: 500, // Germany
        FR: 760, // France
        CN: 300, // China
        AU: 700, // Australia
        BR: 600, // Brazil
        IN: 800, // India
        GB: 320, // Great Britain
        RU: 3000, // Russia
    };

    // World map by jsVectorMap
    const map = new jsVectorMap({
        selector: "#world-map",
        map: "world",
    });

    // Sparkline charts
    const option_sparkline1 = {
        series: [{
            data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
        }, ],
        chart: {
            type: "area",
            height: 50,
            sparkline: {
                enabled: true,
            },
        },
        stroke: {
            curve: "straight",
        },
        fill: {
            opacity: 0.3,
        },
        yaxis: {
            min: 0,
        },
        colors: ["#DCE6EC"],
    };

    const sparkline1 = new ApexCharts(
        document.querySelector("#sparkline-1"),
        option_sparkline1,
    );
    sparkline1.render();

    const option_sparkline2 = {
        series: [{
            data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
        }, ],
        chart: {
            type: "area",
            height: 50,
            sparkline: {
                enabled: true,
            },
        },
        stroke: {
            curve: "straight",
        },
        fill: {
            opacity: 0.3,
        },
        yaxis: {
            min: 0,
        },
        colors: ["#DCE6EC"],
    };

    const sparkline2 = new ApexCharts(
        document.querySelector("#sparkline-2"),
        option_sparkline2,
    );
    sparkline2.render();

    const option_sparkline3 = {
        series: [{
            data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
        }, ],
        chart: {
            type: "area",
            height: 50,
            sparkline: {
                enabled: true,
            },
        },
        stroke: {
            curve: "straight",
        },
        fill: {
            opacity: 0.3,
        },
        yaxis: {
            min: 0,
        },
        colors: ["#DCE6EC"],
    };

    const sparkline3 = new ApexCharts(
        document.querySelector("#sparkline-3"),
        option_sparkline3,
    );
    sparkline3.render();
</script><!--end::Script-->
@endpush