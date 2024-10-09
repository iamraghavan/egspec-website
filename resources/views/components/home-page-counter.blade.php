

<div class="rts-service v_2">
    <div class="row">
        <div class="single-service-content">
            <div class="single-service">
                <div class="content">
                    <h5 class="service-title">Programs</h5>
                    <p style="font-size: 1rem; line-height: 1.4; max-width: 100%; ">
                        UG - 09, PG - 07, Ph.D - 05
                    </p>
                </div>
            </div>
            <div class="single-service">
                <div class="content">
                    <h5 class="service-title">Placement</h5>
                    <p class="counter" data-target="25000">0</p>
                </div>
            </div>
            <div class="single-service">
                <div class="content">
                    <h5 class="service-title">Patent</h5>
                    <p class="counter" data-target="45">0</p>
                </div>
            </div>
            <div class="single-service">
                <div class="content">
                    <h5 class="service-title">Happy Students</h5>
                    <p class="counter" data-target="50000">0</p>
                </div>
            </div>
            <div class="single-service">
                <div class="content">
                    <h5 class="service-title">NBA (6 UG Programs) Tier-I</h5>
                    <p style="font-size: 1rem; line-height: 1.4; max-width: 100%; ">
                        Civil, CSE, ECE, EEE, Mech, IT
                    </p>
                </div>

            </div>
            <div class="single-service">
                <div class="content">
                    <h5 class="service-title">Research Papers</h5>
                    <p class="counter" data-target="1000">0</p>
                </div>
            </div>
            <div class="single-service">
                <div class="content">
                    <h5 class="service-title">NIRF Rank Band</h5>
                    <div style="display: inline-flex;">
                        <p class="counter" data-target="201">201 </p>
                        <p> - </p>
                        <p class="counter" data-target="300"></p>
                    </div>
                </div>
            </div>
            <div class="single-service">
                <div class="content">
                    <h5 class="service-title">No of Industrial Relationship</h5>
                    <p class="counter" data-target="150">0</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.counter');

        const updateCounter = (counter) => {
            try {
                const target = +counter.getAttribute('data-target');
                let count = 0;
                const speed = 1000; // Adjust speed as needed

                const increment = Math.ceil(target / speed);

                const updateCount = () => {
                    count = Math.min(count + increment, target);
                    counter.innerText = count;

                    if (count < target) {
                        setTimeout(updateCount, 1);
                    }
                };

                updateCount();
            } catch (error) {
                console.error('Error updating counter:', error);
                counter.innerText = 'Error loading data';
            }
        };

        counters.forEach(counter => updateCounter(counter));
    });
</script>
