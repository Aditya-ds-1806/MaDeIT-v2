<?php
include 'partials/header.php';
$programs = file_get_contents('public/json/programs.json', true);
$programs = json_decode($programs, true);
?>

<body class="bg-wild-sand">
    <?php include 'partials/navbar.php' ?>
    <section class="container-fluid bg-wild-sand">
        <header class="container-fluid d-inline-block text-center mt-5">
            <h1 class="pt-5 text-sea-buckthorn">Nidhi Prayas</h1>
        </header>
        <section class="container pt-5">
            <h2>Objectives</h2>
            <ul>
                <li>To enable translation of an innovative idea to a prototype.</li>
                <li>To provide a platform for faster experimentation and modify approaches in the idea to market journey.</li>
                <li>To generate innovative solutions relevant to the local and global problems.</li>
                <li>To attract a large number of youth who demonstrates problem solving zeal and abilities.</li>
                <li>To work on their new technology/knowledge/innovation based startups.</li>
                <li>To enhance the pipeline in terms of quality and quantity of innovative startups to the incubators.</li>
                <li>To build a vibrant innovation ecosystem, by establishing a network between innovators, academia, mentors and incubators.</li>
            </ul>
            <div class="mt-2">
                <p><span class="text-sea-buckthorn">NIDHI-PRAYAS</span> Program as the scheme suggests is to help – young and aspiring innovators. The focus is to provide support/funding from idea to prototype. The priority areas for supporting innovations under NIDHI PRAYAS program are manufacturing, agriculture, healthcare, clean-tech, energy, water and Internet of Things (IOT) and other technology areas.</p>
                <p class="text-sea-buckthorn">The maximum support that can be provided per innovator/incubatee is upto Rs. 10 lakhs.</p>
            </div>
        </section>
        <section class="container">
            <h2>Eligibility</h2>
            <p>The PRAYAS program is focused to provide funding support to individual innovators. Innovators should use the PRAYAS grant, primarily to convert their ideas into prototype. The IP generated if any, should vest with the Innovator / Start up.</p>
            <p class="m-0">It cannot, however, be used for supporting:</p>
            <ul>
                <li>Innovators / Start up who do not / will not own the Project know how/ IP.</li>
                <li>Funding research / student internship in Academic institution or R& D organisation.</li>
                <li>Innovators /Team/ Start up who is already supported once under NIDHI PRAYAS.</li>
                <li>Innovators who do not have the necessary NOC on IP, granting sufficient time to work on PRAYAS project from their respective organisation.</li>
                <li>Innovator supported under NIDHI-EIR in parallel with NIDHI-PRAYAS.</li>
                <li>Innovators who do not have a roadmap / will towards commercialization.</li>
            </ul>
            <p class="mb-0">The eligibility criteria for the applicants are as follows:</p>
            <p class="small text-center mb-0">(Any individual applying for PRAYAS has to be an Indian Citizen with a government approved proof of nationality such as a valid passport, voter’s id etc. The applicant should be in the age group of minimum of 18 years, as on date of application)</p>
            <ol>
                <li class="text-sea-buckthorn font-weight-bolder">Individual Innovator OR Team of Innovators:</li>
                <p class="mb-0">The innovator should have the knowhow of the PRAYAS project. For team of innovators there has to be:</p>
                <ul>
                    <li>An agreement among the team about the lead innovator who would apply, and the funds will be transferred to the lead innovator’s account (after selection).</li>
                    <li>IP generated would vest with the innovator / team and it would be further taken for commercialization.</li>
                </ul>
                <li class="text-sea-buckthorn font-weight-bolder">In case of Founders, Co -founders of Start up applying for PRAYAS:</li>
                <ul>
                    <li>At the time of application, the period of existence of a start up and its operations should not exceed 7 years from the Date of Incorporation.</li>
                    <li>Wants to develop the prototype for a new product, for which they may have not received similar kind of support.</li>
                    <li>Company should have annual turnover not exceeding Rs. 25 lakhs for any of the financial year since its inception.</li>
                    <li>IP generated would vest with the start up.</li>
                </ul>
                <li class="text-sea-buckthorn font-weight-bolder">Innovators in employment OR Students with any R& D organisation / Academic Institution:</li>
                <ul>
                    <li>It is mandatory that the innovators pursuing PRAYAS should have the Project know how and own the IP.</li>
                    <li>The innovator has to seek the NOC from their organisation / institution. The NOC should have the following:</li>
                    <ul>
                        <li>Permission to apply for PRAYAS and the innovator will be granted sufficient time to work on the PRAYAS project.</li>
                        <li>IP generated would vest with the innovator / team and it would be further taken for commercialization.</li>
                    </ul>
                </ul>
                <li class="text-sea-buckthorn font-weight-bolder">Preference may be given to those innovators:</li>
                <ul>
                    <li>Who have bootstrapped or have got co-investment commitment.</li>
                    <li>Who have clear road map for commercialization or start up creation.</li>
                    <li>Women innovators.</li>
                    <li>Young innovators.</li>
                </ul>
                <li>The NIDHI-PRAYAS grantee should be registered for the pre-incubation or incubation program at the TBI for the entire duration of the program, after going through the TBI’s selection process.</li>
                <li>NIDHI-PRAYAS grantee should be fully committed to work towards the prototype development for which the support is being sought and should not treat this as a stop gap arrangement to support any other pursuits.</li>
                <li>The innovator can avail the NIDHI-PRAYAS support only once and they should not have sought the similar support previously, from other Government of India organisation/Institution for the same innovative concept as proposed in the application form.
                </li>
            </ol>
        </section>

        <section class="container pb-5">
            <h2>Restrictions for PRAYAS</h2>
            <ul>
                <li>Student applicants pursuing long term research projects like doctoral research projects or similar projects will not be supported.</li>
                <li>Professors or Academicians engaged in teaching with any academic or R&D institute.</li>
                <li>The projects relating to software development and those involving pure academic research are not eligible.</li>
            </ul>
            <div class="mt-5 mb-3">
                <a href="public/brochures/Nidhi_PRAYAS_Brochure.pdf" target="_blank" class="btn btn-sea-buckthorn text-white mr-4">Download Brochure</a>
                <a rel="noreferrer" href="https://forms.gle/2txRVa4Zsa7oaeaX9" target="_blank" class="btn btn-sea-buckthorn text-white ">Apply</a>
            </div>
        </section>
    </section>
    <?php include 'partials/footer.php' ?>
</body>

</html>