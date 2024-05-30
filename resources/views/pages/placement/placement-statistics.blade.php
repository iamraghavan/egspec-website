@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Placement',
'value_2' => '',
'value_3' => '',
'page_title' => 'Statistics' ])

<div class="rts-program mt-5">



                @include('components.home-slider', ['posterSlider' => $posterSlider])

</div>





<div class="rts-program pt--80 pb--40">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="chart" id="pie-chart"></div>
                </div>
                <div class="col-lg-6">
                    <div class="chart" id="bar-chart"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="rts-about-university pt--10 pb--40">
    <div class="container">
        <div class="row">
            <div class="admission-content-top">
                <div class="application-deadline mt-5">

                        <h3 class="rts-section-title animated fadeIn">Placement Statistics</h3>

                    <div class="application-deadline__content">
                        <div class="application-deadline__content--table">
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="table-theme">
                                    <tr>
                                        <td>Department</td>
                                        <td>2019-20</td>
                                        <td>2020-21</td>
                                        <td>2021-22</td>
                                        <td>2022-23</td>
                                        <td>2023-24</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($placementStatistics as $stat)
                                    <tr>
                                        <td>{{ $stat->department }}</td>
                                        <td>{{ $stat->year_2019_20 ?? '-' }}</td>
                                        <td>{{ $stat->year_2020_21 ?? '-' }}</td>
                                        <td>{{ $stat->year_2021_22 ?? '-' }}</td>
                                        <td>{{ $stat->year_2022_23 ?? '-' }}</td>
                                        <td>{{ $stat->year_2023_24 ?? '-' }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                    </div>
                </div>

            </div>


        </div>


    </div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Prepare data
        const data = @json($placementStatistics);

        // Aggregate data for pie chart (sum of all years for each department)
        const aggregatedData = data.map(d => ({
            department: d.department,
            value: ['year_2019_20', 'year_2020_21', 'year_2021_22', 'year_2022_23', 'year_2023_24']
                .map(year => d[year] || 0) // ensure null values are treated as 0
                .reduce((acc, val) => acc + val, 0)
        }));

        // Data for bar chart (2023-24 placements)
        const barData = data.map(d => ({
            department: d.department,
            value: d.year_2023_24 || 0 // ensure null values are treated as 0
        }));

        // Set up dimensions for pie chart
        const pieWidth = 500;
        const pieHeight = 500;
        const pieMargin = 40;
        const pieRadius = Math.min(pieWidth, pieHeight) / 2 - pieMargin;

        // Append the svg object for pie chart
        const pieSvg = d3.select("#pie-chart")
            .append("svg")
            .attr("width", pieWidth)
            .attr("height", pieHeight)
            .append("g")
            .attr("transform", `translate(${pieWidth / 2},${pieHeight / 2})`);

        // Generate the pie

const years = ['year_2019_20', 'year_2020_21', 'year_2021_22', 'year_2022_23', 'year_2023_24'];

const pieData = years.map(year => ({
    year: year,
    value: data.reduce((total, dept) => total + dept[year], 0)
}));

// Generate the pie
const pie = d3.pie()
    .value(d => d.value);


        const pieDataReady = pie(aggregatedData);

        // Shape helper to build arcs
        const arcGenerator = d3.arc()
            .innerRadius(0)
            .outerRadius(pieRadius);

        // Build the pie chart
        pieSvg
            .selectAll('path')
            .data(pieDataReady)
            .enter()
            .append('path')
            .attr('d', arcGenerator)
            .attr('fill', (d, i) => d3.schemeCategory10[i])
            .attr("stroke", "white")
            .style("stroke-width", "2px")
            .style("opacity", 0.7);

        // Add labels
        pieSvg
            .selectAll('text')
            .data(pieDataReady)
            .enter()
            .append('text')
            .text(d => `${d.data.value}`)
            .attr("transform", d => `translate(${arcGenerator.centroid(d)})`)
            .style("text-anchor", "middle")
            .style("font-size", 14)
            .style("font-weight", "bold");

        // Set up dimensions for bar chart
        const barWidth = 500;
        const barHeight = 500;
        const barMargin = { top: 20, right: 30, bottom: 40, left: 50 };

        const x = d3.scaleBand()
            .range([barMargin.left, barWidth - barMargin.right])
            .padding(0.1);

        const y = d3.scaleLinear()
            .range([barHeight - barMargin.bottom, barMargin.top]);

        const barSvg = d3.select("#bar-chart")
            .append("svg")
            .attr("width", barWidth)
            .attr("height", barHeight);

        x.domain(barData.map(d => d.department));
        y.domain([0, d3.max(barData, d => d.value)]).nice();

        barSvg.append("g")
            .attr("fill", "steelblue")
            .selectAll("rect")
            .data(barData)
            .enter().append("rect")
            .attr("x", d => x(d.department))
            .attr("y", d => y(d.value))
            .attr("height", d => y(0) - y(d.value))
            .attr("width", x.bandwidth());

        barSvg.append("g")
            .attr("transform", `translate(0,${barHeight - barMargin.bottom})`)
            .call(d3.axisBottom(x))
            .selectAll("text")
            .attr("transform", "rotate(-40)")
            .style("text-anchor", "end");

        barSvg.append("g")
            .attr("transform", `translate(${barMargin.left},0)`)
            .call(d3.axisLeft(y));
    });
</script>



@include('components.cta')
@endsection
