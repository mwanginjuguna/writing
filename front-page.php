<?php
/**
 * Theme Landing Page
 *
 * @package Write-X
 */

get_header(); // Include header.php
?>
<main id="main-content" class="site-main overflow-x-auto">
    <section class=""
             style="
                     background-image: url(<?php echo WRITING_THEME_DIR_URI.'/assets/writing-theme-hero-bg-image_1920x1080.png' ?>);
                     background-size: auto;
                     background-position: center;
                     background-repeat: no-repeat;
                     "
    >
        <div class="container" style="padding-bottom: 8rem; padding-top: 5rem">
            <div class="row align-items-center">
                <div class="col-lg-6 text-lg-start">
                    <h1 class="display-3 fw-bold lh-1 text-white pb-lg-5">Professional Custom Writers</h1>

                    <p class="fs-3 fw-medium pt-3" style="color: yellow">Unlock Your Potential with Our Professional Services</p>

                    <div class="fs-4 d-none d-lg-block lh-base fw-medium rounded-5"
                         style="
                         padding: 2rem 2rem;
                         margin-top: 2rem;
                         color: #000000;
                         background-color: #FFFFFF;
                         opacity: 85%"
                    >
                        <p>Our team of professionals ensures top-notch quality in every aspect of our services, delivering exceptional results that exceed our client's expectations.</p>

                        <!--learn more link-->
                        <?php
                        get_template_part('template-parts/components/learn-more-link')
                        ?>
                    </div>

                    <div class="fs-4 mt-5 lh-base fw-medium text-start text-light rounded-5 d-block d-lg-none">
                        <p>Welcome to our professional custom writing services provided by a team of experts! We are here to offer you top-notch assistance with your writing needs. Our dedicated team of experienced professionals is ready to help you achieve your writing goals.</p>

                        <!--learn more link-->
                        <?php
                        get_template_part('template-parts/components/learn-more-link')
                        ?>
                    </div>

                </div>
                <div class="col-md-10 mx-auto col-lg-4 mt-5 pt-5">
                    <?php
                    get_template_part('template-parts/components/small-order-form')
                    ?>
                </div>
            </div>
        </div>

    </section>

    <!--Our services-->
    <div class="container mx-auto" style="margin-top: 5rem;">
        <div class="d-grid align-content-center mx-lg-auto px-4 pb-5">
            <h2 class="pt-4 text-dark display-3 text-lg-center fw-bolder">
                Our Services
            </h2>
            <p class="text-lg-center text-secondary mx-lg-auto fs-4 w-75">
                Get Expert Assistance for Writing, Data Analysis, and Programming.
            </p>
        </div>

        <div class="row gx-4">
            <div class="col-lg-4 pb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="46px" height="46px" fill="currentColor" style="fill: #FF410D;" class="bi bi-bar-chart" viewBox="0 0 16 16">
                    <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
                </svg>

                <h4 class="mt-4 pb-4 text-black">Report Writing</h4>

                <p class="mt-2 pb-4 text-secondary fs-5 lh-sm">
                    Our report writing service delivers comprehensive and well-structured reports tailored to your specific needs, ensuring accurate and concise presentation of information.
                </p>

                <a href="#" style="color: #6119FF;" class="fw-bold mt-3">READ MORE</a>
            </div>

            <div class="col-lg-4 pb-5">
                <svg height="46px" width="46px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 56 56" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier">
                        <g> <path style="fill:#E9E9E0;" d="M36.985,0H7.963C7.155,0,6.5,0.655,6.5,1.926V55c0,0.345,0.655,1,1.463,1h40.074 c0.808,0,1.463-0.655,1.463-1V12.978c0-0.696-0.093-0.92-0.257-1.085L37.607,0.257C37.442,0.093,37.218,0,36.985,0z"></path> <polygon style="fill:#D9D7CA;" points="37.5,0.151 37.5,12 49.349,12 "></polygon> <path style="fill:#FF410D;" d="M48.037,56H7.963C7.155,56,6.5,55.345,6.5,54.537V39h43v15.537C49.5,55.345,48.845,56,48.037,56z"></path> <g> <path style="fill:#FFFFFF;" d="M21.867,42.924v1.121h-3.008V53h-1.654v-8.955h-3.008v-1.121H21.867z"></path> <path style="fill:#FFFFFF;" d="M28.443,48.105L31,53h-1.9l-1.6-3.801h-0.137L25.641,53h-1.9l2.557-4.895l-2.721-5.182h1.873 l1.777,4.102h0.137l1.928-4.102h1.873L28.443,48.105z"></path> <path style="fill:#FFFFFF;" d="M40.529,42.924v1.121h-3.008V53h-1.654v-8.955h-3.008v-1.121H40.529z"></path> </g> <path style="fill:#C8BDB8;" d="M18.5,13h-6c-0.553,0-1-0.448-1-1s0.447-1,1-1h6c0.553,0,1,0.448,1,1S19.053,13,18.5,13z"></path> <path style="fill:#C8BDB8;" d="M21.5,18h-9c-0.553,0-1-0.448-1-1s0.447-1,1-1h9c0.553,0,1,0.448,1,1S22.053,18,21.5,18z"></path> <path style="fill:#C8BDB8;" d="M25.5,18c-0.26,0-0.521-0.11-0.71-0.29c-0.181-0.19-0.29-0.44-0.29-0.71s0.109-0.52,0.3-0.71 c0.36-0.37,1.04-0.37,1.41,0c0.18,0.19,0.29,0.45,0.29,0.71c0,0.26-0.11,0.52-0.29,0.71C26.02,17.89,25.76,18,25.5,18z"></path> <path style="fill:#C8BDB8;" d="M37.5,18h-8c-0.553,0-1-0.448-1-1s0.447-1,1-1h8c0.553,0,1,0.448,1,1S38.053,18,37.5,18z"></path> <path style="fill:#C8BDB8;" d="M12.5,33c-0.26,0-0.521-0.11-0.71-0.29c-0.181-0.19-0.29-0.45-0.29-0.71 c0-0.26,0.109-0.52,0.29-0.71c0.37-0.37,1.05-0.37,1.42,0.01c0.18,0.18,0.29,0.44,0.29,0.7c0,0.26-0.11,0.52-0.29,0.71 C13.02,32.89,12.76,33,12.5,33z"></path> <path style="fill:#C8BDB8;" d="M24.5,33h-8c-0.553,0-1-0.448-1-1s0.447-1,1-1h8c0.553,0,1,0.448,1,1S25.053,33,24.5,33z"></path> <path style="fill:#C8BDB8;" d="M43.5,18h-2c-0.553,0-1-0.448-1-1s0.447-1,1-1h2c0.553,0,1,0.448,1,1S44.053,18,43.5,18z"></path> <path style="fill:#C8BDB8;" d="M34.5,23h-22c-0.553,0-1-0.448-1-1s0.447-1,1-1h22c0.553,0,1,0.448,1,1S35.053,23,34.5,23z"></path> <path style="fill:#C8BDB8;" d="M43.5,23h-6c-0.553,0-1-0.448-1-1s0.447-1,1-1h6c0.553,0,1,0.448,1,1S44.053,23,43.5,23z"></path> <path style="fill:#C8BDB8;" d="M16.5,28h-4c-0.553,0-1-0.448-1-1s0.447-1,1-1h4c0.553,0,1,0.448,1,1S17.053,28,16.5,28z"></path> <path style="fill:#C8BDB8;" d="M30.5,28h-10c-0.553,0-1-0.448-1-1s0.447-1,1-1h10c0.553,0,1,0.448,1,1S31.053,28,30.5,28z"></path> <path style="fill:#C8BDB8;" d="M43.5,28h-9c-0.553,0-1-0.448-1-1s0.447-1,1-1h9c0.553,0,1,0.448,1,1S44.053,28,43.5,28z"></path> </g> </g></svg>

                <h4 class="mt-4 pb-4 text-black">
                    Technical Writing Service
                </h4>

                <p class="mt-2 pb-4 text-secondary fs-5 lh-sm">
                    Whether you need user manuals, product guides, software documentation, or any other technical content, we have the expertise to deliver high-quality results.
                </p>
                <a href="#" style="color: #6119FF;" class="fw-bold mt-3">
                    READ MORE
                </a>
            </div>

            <div class="col-lg-4 pb-5">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 56 56" xml:space="preserve" width="46px" height="46px" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#E9E9E0;" d="M36.985,0H7.963C7.155,0,6.5,0.655,6.5,1.926V55c0,0.345,0.655,1,1.463,1h40.074 c0.808,0,1.463-0.655,1.463-1V12.978c0-0.696-0.093-0.92-0.257-1.085L37.607,0.257C37.442,0.093,37.218,0,36.985,0z"></path> <polygon style="fill:#fad900;" points="37.5,0.151 37.5,12 49.349,12 "></polygon> <path style="fill:#FF410D;" d="M48.037,56H7.963C7.155,56,6.5,55.345,6.5,54.537V39h43v15.537C49.5,55.345,48.845,56,48.037,56z"></path> <g> <path style="fill:#FFFFFF;" d="M17.581,53H15.94V42.924h2.898c0.428,0,0.852,0.068,1.271,0.205 c0.419,0.137,0.795,0.342,1.128,0.615c0.333,0.273,0.602,0.604,0.807,0.991s0.308,0.822,0.308,1.306 c0,0.511-0.087,0.973-0.26,1.388c-0.173,0.415-0.415,0.764-0.725,1.046c-0.31,0.282-0.684,0.501-1.121,0.656 s-0.921,0.232-1.449,0.232h-1.217V53z M17.581,44.168v3.992h1.504c0.2,0,0.398-0.034,0.595-0.103 c0.196-0.068,0.376-0.18,0.54-0.335s0.296-0.371,0.396-0.649c0.1-0.278,0.15-0.622,0.15-1.032c0-0.164-0.023-0.354-0.068-0.567 c-0.046-0.214-0.139-0.419-0.28-0.615c-0.142-0.196-0.34-0.36-0.595-0.492c-0.255-0.132-0.593-0.198-1.012-0.198H17.581z"></path> <path style="fill:#FFFFFF;" d="M25.853,53h-1.641V42.924h2.898c0.428,0,0.852,0.068,1.271,0.205 c0.419,0.137,0.795,0.342,1.128,0.615c0.333,0.273,0.602,0.604,0.807,0.991s0.308,0.822,0.308,1.306 c0,0.511-0.087,0.973-0.26,1.388c-0.173,0.415-0.415,0.764-0.725,1.046c-0.31,0.282-0.684,0.501-1.121,0.656 s-0.921,0.232-1.449,0.232h-1.217V53z M25.853,44.168v3.992h1.504c0.2,0,0.398-0.034,0.595-0.103 c0.196-0.068,0.376-0.18,0.54-0.335s0.296-0.371,0.396-0.649c0.1-0.278,0.15-0.622,0.15-1.032c0-0.164-0.023-0.354-0.068-0.567 c-0.046-0.214-0.139-0.419-0.28-0.615c-0.142-0.196-0.34-0.36-0.595-0.492c-0.255-0.132-0.593-0.198-1.012-0.198H25.853z"></path> <path style="fill:#FFFFFF;" d="M39.606,42.924v1.121h-3.008V53h-1.654v-8.955h-3.008v-1.121H39.606z"></path> </g> <path style="fill:#0055ff;" d="M39.5,30h-24V14h24V30z M17.5,28h20V16h-20V28z"></path> <path style="fill:#0055ff;" d="M20.499,35c-0.175,0-0.353-0.046-0.514-0.143c-0.474-0.284-0.627-0.898-0.343-1.372l3-5 c0.284-0.474,0.898-0.627,1.372-0.343c0.474,0.284,0.627,0.898,0.343,1.372l-3,5C21.17,34.827,20.839,35,20.499,35z"></path> <path style="fill:#0055ff;" d="M34.501,35c-0.34,0-0.671-0.173-0.858-0.485l-3-5c-0.284-0.474-0.131-1.088,0.343-1.372 c0.474-0.283,1.088-0.131,1.372,0.343l3,5c0.284,0.474,0.131,1.088-0.343,1.372C34.854,34.954,34.676,35,34.501,35z"></path> <path style="fill:#0055ff;" d="M27.5,16c-0.552,0-1-0.447-1-1v-3c0-0.553,0.448-1,1-1s1,0.447,1,1v3C28.5,15.553,28.052,16,27.5,16 z"></path> <rect x="17.5" y="16" style="fill:#D3CCC9;" width="20" height="12"></rect> </g> </g>
                </svg>

                <h4 class="mt-4 pb-4 text-black">Professional PowerPoint Presentations</h4>

                <p class="mt-2 pb-4 text-secondary fs-5 lh-sm">
                    We'll help you craft captivating and professional slides that effectively convey your ideas, engaging your audience and leaving a lasting impression.
                </p>

                <a href="#" style="color: #6119FF;" class="fw-bold mt-3">READ MORE</a>
            </div>

            <div class="col-lg-4 pb-5">
                <svg height="46px" width="46px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 56 56" xml:space="preserve" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#E9E9E0;" d="M36.985,0H7.963C7.155,0,6.5,0.655,6.5,1.926V55c0,0.345,0.655,1,1.463,1h40.074 c0.808,0,1.463-0.655,1.463-1V12.978c0-0.696-0.093-0.92-0.257-1.085L37.607,0.257C37.442,0.093,37.218,0,36.985,0z"></path> <polygon style="fill:#D9D7CA;" points="37.5,0.151 37.5,12 49.349,12 "></polygon> <path style="fill:#FF410D;" d="M48.037,56H7.963C7.155,56,6.5,55.345,6.5,54.537V39h43v15.537C49.5,55.345,48.845,56,48.037,56z"></path> <g> <path style="fill:#FFFFFF;" d="M21.58,51.975c-0.374,0.364-0.798,0.638-1.271,0.82c-0.474,0.183-0.984,0.273-1.531,0.273 c-0.602,0-1.155-0.109-1.661-0.328s-0.948-0.542-1.326-0.971c-0.378-0.429-0.675-0.966-0.889-1.613 c-0.214-0.647-0.321-1.395-0.321-2.242s0.107-1.593,0.321-2.235c0.214-0.643,0.51-1.178,0.889-1.606 c0.378-0.429,0.822-0.754,1.333-0.978c0.51-0.224,1.062-0.335,1.654-0.335c0.547,0,1.057,0.091,1.531,0.273 c0.474,0.183,0.897,0.456,1.271,0.82l-1.135,1.012c-0.228-0.265-0.481-0.456-0.759-0.574c-0.278-0.118-0.567-0.178-0.868-0.178 c-0.337,0-0.659,0.063-0.964,0.191c-0.306,0.128-0.579,0.344-0.82,0.649c-0.242,0.306-0.431,0.699-0.567,1.183 s-0.21,1.075-0.219,1.777c0.009,0.684,0.08,1.267,0.212,1.75c0.132,0.483,0.314,0.877,0.547,1.183s0.497,0.528,0.793,0.67 c0.296,0.142,0.608,0.212,0.937,0.212s0.636-0.06,0.923-0.178s0.549-0.31,0.786-0.574L21.58,51.975z"></path> <path style="fill:#FFFFFF;" d="M29.633,50.238c0,0.364-0.075,0.718-0.226,1.06s-0.362,0.643-0.636,0.902s-0.611,0.467-1.012,0.622 c-0.401,0.155-0.857,0.232-1.367,0.232c-0.219,0-0.444-0.012-0.677-0.034s-0.467-0.062-0.704-0.116 c-0.237-0.055-0.463-0.13-0.677-0.226c-0.214-0.096-0.399-0.212-0.554-0.349l0.287-1.176c0.127,0.073,0.289,0.144,0.485,0.212 c0.196,0.068,0.398,0.132,0.608,0.191c0.209,0.06,0.419,0.107,0.629,0.144c0.209,0.036,0.405,0.055,0.588,0.055 c0.556,0,0.982-0.13,1.278-0.39c0.296-0.26,0.444-0.645,0.444-1.155c0-0.31-0.105-0.574-0.314-0.793 c-0.21-0.219-0.472-0.417-0.786-0.595s-0.654-0.355-1.019-0.533c-0.365-0.178-0.707-0.388-1.025-0.629 c-0.319-0.241-0.583-0.526-0.793-0.854c-0.21-0.328-0.314-0.738-0.314-1.23c0-0.446,0.082-0.843,0.246-1.189 s0.385-0.641,0.663-0.882c0.278-0.241,0.602-0.426,0.971-0.554s0.759-0.191,1.169-0.191c0.419,0,0.843,0.039,1.271,0.116 c0.428,0.077,0.774,0.203,1.039,0.376c-0.055,0.118-0.119,0.248-0.191,0.39c-0.073,0.142-0.142,0.273-0.205,0.396 c-0.064,0.123-0.119,0.226-0.164,0.308c-0.046,0.082-0.073,0.128-0.082,0.137c-0.055-0.027-0.116-0.063-0.185-0.109 s-0.167-0.091-0.294-0.137c-0.128-0.046-0.296-0.077-0.506-0.096c-0.21-0.019-0.479-0.014-0.807,0.014 c-0.183,0.019-0.355,0.07-0.52,0.157s-0.31,0.193-0.438,0.321c-0.128,0.128-0.228,0.271-0.301,0.431 c-0.073,0.159-0.109,0.313-0.109,0.458c0,0.364,0.104,0.658,0.314,0.882c0.209,0.224,0.469,0.419,0.779,0.588 c0.31,0.169,0.647,0.333,1.012,0.492c0.364,0.159,0.704,0.354,1.019,0.581s0.576,0.513,0.786,0.854 C29.528,49.261,29.633,49.7,29.633,50.238z"></path> <path style="fill:#FFFFFF;" d="M34.035,53.055l-3.131-10.131h1.873l2.338,8.695l2.475-8.695h1.859l-3.281,10.131H34.035z"></path> </g> <path style="fill:#e4b407;" d="M23.5,16v-4h-12v4v2v2v2v2v2v2v2v4h10h2h21v-4v-2v-2v-2v-2v-2v-4H23.5z M13.5,14h8v2h-8V14z M13.5,18h8v2h-8V18z M13.5,22h8v2h-8V22z M13.5,26h8v2h-8V26z M21.5,32h-8v-2h8V32z M42.5,32h-19v-2h19V32z M42.5,28h-19v-2h19V28 z M42.5,24h-19v-2h19V24z M23.5,20v-2h19v2H23.5z"></path> </g> </g>
                </svg>

                <h4 class="mt-4 pb-4 text-black">Statistics and Data Analysis</h4>

                <p class="mt-2 pb-4 text-secondary fs-5 lh-sm">
                    We provide expert insights and meaningful interpretations of data, empowering you to make informed decisions and drive impactful outcomes.
                </p>

                <a href="#" style="color: #6119FF;" class="fw-bold mt-3">READ MORE</a>
            </div>

            <div class="col-lg-4 pb-5">
                <svg height="46px" width="46px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 56 56" xml:space="preserve" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#E9E9E0;" d="M36.985,0H7.963C7.155,0,6.5,0.655,6.5,1.926V55c0,0.345,0.655,1,1.463,1h40.074 c0.808,0,1.463-0.655,1.463-1V12.978c0-0.696-0.093-0.92-0.257-1.085L37.607,0.257C37.442,0.093,37.218,0,36.985,0z"></path> <polygon style="fill:#D9D7CA;" points="37.5,0.151 37.5,12 49.349,12 "></polygon> <path style="fill:#FF410D;" d="M48.037,56H7.963C7.155,56,6.5,55.345,6.5,54.537V39h43v15.537C49.5,55.345,48.845,56,48.037,56z"></path> <g> <path style="fill:#FFFFFF;" d="M17.082,44.168v3.172h4.211v1.121h-4.211v3.295h4.635V53h-6.303V42.924h6.303v1.244H17.082z"></path> <path style="fill:#FFFFFF;" d="M28.58,48.105L31.137,53h-1.9l-1.6-3.801H27.5L25.777,53h-1.9l2.557-4.895l-2.721-5.182h1.873 l1.777,4.102H27.5l1.928-4.102h1.873L28.58,48.105z"></path> <path style="fill:#FFFFFF;" d="M35.266,44.168v3.172h4.211v1.121h-4.211v3.295H39.9V53h-6.303V42.924H39.9v1.244H35.266z"></path> </g> <path style="fill:#FF410D;" d="M33.5,32c-0.099,0-0.2-0.015-0.299-0.046c-0.527-0.165-0.821-0.726-0.656-1.253l5-16 c0.165-0.527,0.726-0.821,1.253-0.656c0.527,0.165,0.821,0.726,0.656,1.253l-5,16C34.321,31.726,33.926,32,33.5,32z"></path> <circle style="fill:#FF410D;" cx="29" cy="19.5" r="1.5"></circle> <circle style="fill:#FF410D;" cx="29" cy="26.5" r="1.5"></circle> <path style="fill:#FF410D;" d="M23.5,30h-2c-3.86,0-7-3.14-7-7s3.14-7,7-7h2c0.552,0,1,0.448,1,1s-0.448,1-1,1h-2 c-2.757,0-5,2.243-5,5s2.243,5,5,5h2c0.552,0,1,0.448,1,1S24.052,30,23.5,30z"></path> </g> </g>
                </svg>

                <h4 class="mt-4 pb-4 text-black">Programming and Coding</h4>

                <p class="mt-2 pb-4 text-secondary fs-5 lh-sm">Get support and guidance to help you conquer complex coding tasks, ensuring your projects are implemented flawlessly and efficiently.</p>

                <a href="#" style="color: #6119FF;" class="fw-bold mt-3">READ MORE</a>
            </div>

            <div class="col-lg-4 pb-5">
                <svg height="46px" width="46px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 56 56" xml:space="preserve" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#E9E9E0;" d="M36.985,0H7.963C7.155,0,6.5,0.655,6.5,1.926V55c0,0.345,0.655,1,1.463,1h40.074 c0.808,0,1.463-0.655,1.463-1V12.978c0-0.696-0.093-0.92-0.257-1.085L37.607,0.257C37.442,0.093,37.218,0,36.985,0z"></path> <polygon style="fill:#D9D7CA;" points="37.5,0.151 37.5,12 49.349,12 "></polygon> <path style="fill:#8697CB;" d="M18.5,13h-6c-0.552,0-1-0.448-1-1s0.448-1,1-1h6c0.552,0,1,0.448,1,1S19.052,13,18.5,13z"></path> <path style="fill:#8697CB;" d="M21.5,18h-9c-0.552,0-1-0.448-1-1s0.448-1,1-1h9c0.552,0,1,0.448,1,1S22.052,18,21.5,18z"></path> <path style="fill:#8697CB;" d="M25.5,18c-0.26,0-0.52-0.11-0.71-0.29c-0.18-0.19-0.29-0.45-0.29-0.71c0-0.26,0.11-0.52,0.29-0.71 c0.37-0.37,1.05-0.37,1.42,0c0.18,0.19,0.29,0.45,0.29,0.71c0,0.26-0.11,0.52-0.29,0.71C26.02,17.89,25.76,18,25.5,18z"></path> <path style="fill:#8697CB;" d="M37.5,18h-8c-0.552,0-1-0.448-1-1s0.448-1,1-1h8c0.552,0,1,0.448,1,1S38.052,18,37.5,18z"></path> <path style="fill:#8697CB;" d="M12.5,33c-0.26,0-0.52-0.11-0.71-0.29c-0.18-0.19-0.29-0.45-0.29-0.71c0-0.26,0.11-0.52,0.29-0.71 c0.37-0.37,1.05-0.37,1.42,0c0.18,0.19,0.29,0.44,0.29,0.71c0,0.26-0.11,0.52-0.29,0.71C13.02,32.89,12.76,33,12.5,33z"></path> <path style="fill:#8697CB;" d="M24.5,33h-8c-0.552,0-1-0.448-1-1s0.448-1,1-1h8c0.552,0,1,0.448,1,1S25.052,33,24.5,33z"></path> <path style="fill:#8697CB;" d="M43.5,18h-2c-0.552,0-1-0.448-1-1s0.448-1,1-1h2c0.552,0,1,0.448,1,1S44.052,18,43.5,18z"></path> <path style="fill:#8697CB;" d="M34.5,23h-22c-0.552,0-1-0.448-1-1s0.448-1,1-1h22c0.552,0,1,0.448,1,1S35.052,23,34.5,23z"></path> <path style="fill:#8697CB;" d="M43.5,23h-6c-0.552,0-1-0.448-1-1s0.448-1,1-1h6c0.552,0,1,0.448,1,1S44.052,23,43.5,23z"></path> <path style="fill:#8697CB;" d="M16.5,28h-4c-0.552,0-1-0.448-1-1s0.448-1,1-1h4c0.552,0,1,0.448,1,1S17.052,28,16.5,28z"></path> <path style="fill:#8697CB;" d="M30.5,28h-10c-0.552,0-1-0.448-1-1s0.448-1,1-1h10c0.552,0,1,0.448,1,1S31.052,28,30.5,28z"></path> <path style="fill:#8697CB;" d="M43.5,28h-9c-0.552,0-1-0.448-1-1s0.448-1,1-1h9c0.552,0,1,0.448,1,1S44.052,28,43.5,28z"></path> <path style="fill:#0096E6;" d="M48.037,56H7.963C7.155,56,6.5,55.345,6.5,54.537V39h43v15.537C49.5,55.345,48.845,56,48.037,56z"></path> <g> <path style="fill:#FFFFFF;" d="M23.5,47.682c0,0.829-0.089,1.538-0.267,2.126s-0.403,1.08-0.677,1.477s-0.581,0.709-0.923,0.937 s-0.672,0.398-0.991,0.513c-0.319,0.114-0.611,0.187-0.875,0.219C19.503,52.984,19.307,53,19.18,53h-3.814V42.924H18.4 c0.848,0,1.593,0.135,2.235,0.403s1.176,0.627,1.6,1.073s0.74,0.955,0.95,1.524C23.395,46.494,23.5,47.08,23.5,47.682z M18.633,51.797c1.112,0,1.914-0.355,2.406-1.066s0.738-1.741,0.738-3.09c0-0.419-0.05-0.834-0.15-1.244 c-0.101-0.41-0.294-0.781-0.581-1.114s-0.677-0.602-1.169-0.807s-1.13-0.308-1.914-0.308h-0.957v7.629H18.633z"></path> <path style="fill:#FFFFFF;" d="M33.475,47.914c0,0.848-0.107,1.595-0.321,2.242c-0.214,0.647-0.511,1.185-0.889,1.613 c-0.378,0.429-0.82,0.752-1.326,0.971s-1.06,0.328-1.661,0.328s-1.155-0.109-1.661-0.328s-0.948-0.542-1.326-0.971 c-0.378-0.429-0.675-0.966-0.889-1.613c-0.214-0.647-0.321-1.395-0.321-2.242s0.107-1.593,0.321-2.235 c0.214-0.643,0.51-1.178,0.889-1.606c0.378-0.429,0.82-0.754,1.326-0.978s1.06-0.335,1.661-0.335s1.155,0.111,1.661,0.335 s0.948,0.549,1.326,0.978c0.378,0.429,0.674,0.964,0.889,1.606C33.367,46.321,33.475,47.066,33.475,47.914z M29.236,51.729 c0.337,0,0.658-0.066,0.964-0.198c0.305-0.132,0.579-0.349,0.82-0.649c0.241-0.301,0.431-0.695,0.567-1.183 s0.209-1.082,0.219-1.784c-0.009-0.684-0.08-1.265-0.212-1.743c-0.132-0.479-0.314-0.873-0.547-1.183s-0.497-0.533-0.793-0.67 c-0.296-0.137-0.608-0.205-0.937-0.205c-0.337,0-0.659,0.063-0.964,0.191c-0.306,0.128-0.579,0.344-0.82,0.649 c-0.242,0.306-0.431,0.699-0.567,1.183s-0.21,1.075-0.219,1.777c0.009,0.684,0.08,1.267,0.212,1.75 c0.132,0.483,0.314,0.877,0.547,1.183s0.497,0.528,0.793,0.67C28.596,51.658,28.908,51.729,29.236,51.729z"></path> <path style="fill:#FFFFFF;" d="M42.607,51.975c-0.374,0.364-0.798,0.638-1.271,0.82c-0.474,0.183-0.984,0.273-1.531,0.273 c-0.602,0-1.155-0.109-1.661-0.328s-0.948-0.542-1.326-0.971c-0.378-0.429-0.675-0.966-0.889-1.613 c-0.214-0.647-0.321-1.395-0.321-2.242s0.107-1.593,0.321-2.235c0.214-0.643,0.51-1.178,0.889-1.606 c0.378-0.429,0.822-0.754,1.333-0.978c0.51-0.224,1.062-0.335,1.654-0.335c0.547,0,1.057,0.091,1.531,0.273 c0.474,0.183,0.897,0.456,1.271,0.82l-1.135,1.012c-0.228-0.265-0.481-0.456-0.759-0.574c-0.278-0.118-0.567-0.178-0.868-0.178 c-0.337,0-0.659,0.063-0.964,0.191c-0.306,0.128-0.579,0.344-0.82,0.649c-0.242,0.306-0.431,0.699-0.567,1.183 s-0.21,1.075-0.219,1.777c0.009,0.684,0.08,1.267,0.212,1.75c0.132,0.483,0.314,0.877,0.547,1.183s0.497,0.528,0.793,0.67 c0.296,0.142,0.608,0.212,0.937,0.212s0.636-0.06,0.923-0.178s0.549-0.31,0.786-0.574L42.607,51.975z"></path> </g> </g> </g>
                </svg>

                <h4 class="mt-4 pb-4 text-black">Academic Writing Service</h4>
                <p class="mt-2 pb-4 text-secondary fs-5">Professional writers, tutors, and research experts to help you in your academic journey and coursework writing tasks.</p>

                <a href="#" style="color: #6119FF;" class="fw-bold mt-3">READ MORE</a>
            </div>

        </div>
    </div>


    <!--Core Features-->
    <section class="bg-light-subtle pt-5">
        <div class="container mx-auto mb-n5 rounded-3" style="
                background-image: url(<?php echo WRITING_THEME_DIR_URI.'/assets/writing-theme-hero-bg-image_1920x1080.png' ?>);
                background-size: auto;
                background-position: center;
                background-repeat: no-repeat;
                "
        >
            <div class="row bg-primary bg-opacity-75 p-5  mb-n5 rounded-3">
                <div class="col-lg-5 bg-white rounded-5 p-5">
                    <h2 class="pb-3 display-5 fw-bold">Our Core Features</h2>

                    <div class="d-flex align-items-center pb-3">
                        <svg width="54px" height="54px" viewBox="-3 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>refresh</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-358.000000, -487.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="refresh" transform="translate(312.000000, 312.000000)"> <g transform="translate(8.000000, 6.000000)" id="Shape"> <path d="M7.518,17.936 C7.49293256,20.210537 8.37251881,22.4018586 9.96323166,24.027829 C11.5539445,25.6537993 13.72546,26.5812058 16,26.606 L16,28.94 L15.056,33.226 C7.07302886,32.6307029 0.92301238,25.9407661 1,17.936 C0.866169026,10.7120146 5.91682031,4.42563728 13,3 L15,3 L15.048,9.323 C10.7154281,9.86608306 7.47749475,13.5697112 7.518,17.936 Z" fill="#0C0058"> </path> <path d="M16,33.275 C15.681,33.275 15.37,33.246 15.056,33.226 L16,28.94 L16,26.606 C20.7157508,26.5047031 24.4857636,22.6528386 24.4857636,17.936 C24.4857636,13.2191614 20.7157508,9.36729694 16,9.266 C15.6828215,9.26728475 15.3659742,9.28664949 15.051,9.324 L15,7 C15,7 14.342,2.6 16,2.6 C24.3763343,2.69447062 31.0910815,9.55962816 31,17.936 C31.0927508,26.3135379 24.3775187,33.1805342 16,33.275 Z" fill="#FF410D"> </path> <polygon fill="#FF410D" points="18.005 36 18.005 22 11 29"> </polygon> <polygon fill="#0C0058" points="13.989 0 13.989 13 20.013 6.506"> </polygon> </g> </g> </g> </g> </g> </g>
                        </svg>

                        <p class="fw-medium fs-5 ps-3" style="color: #6119FF">24|7 Availability</p>
                    </div>

                    <div class="d-flex align-items-center mt-3 pb-3">
                        <svg width="54px" height="54px" viewBox="-2.5 0 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>shield</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-281.000000, -566.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="shield" transform="translate(234.000000, 390.000000)"> <g transform="translate(9.000000, 7.000000)" id="Shape"> <path d="M15.516,34 C-0.414,27.828 1.032,6.8 1.032,6.8 C10.675,8.578 15.516,0 15.516,0 C15.516,0 20.346,8.578 29.968,6.8 C29.968,6.8 31.411,27.828 15.516,34 Z" fill="#6119FF"> </path> <polygon fill="#FF410D" points="8 18 13 23 23 13 21 11 13 19 10 16"> </polygon> </g> </g> </g> </g> </g> </g>
                        </svg>

                        <p class="fw-medium fs-5 ps-3" style="color: #6119FF">Tested. Trusted. Secure.</p>
                    </div>

                    <div class="d-flex align-items-center mt-3 pb-3">
                        <svg width="54px" height="54px" viewBox="0 -9.5 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>infinity</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-744.000000, -262.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="infinity" transform="translate(702.000000, 78.000000)"> <g transform="translate(5.000000, 15.000000)" id="Shape"> <path d="M28.952,19 C26.1276534,19.0032293 23.4641032,17.6862517 21.752,15.44 L16.288,10 L21.757,4.56 C24.3055147,1.16357777 28.8771268,0.00338606597 32.7368197,1.77352223 C36.5965125,3.54365839 38.6999612,7.7651731 37.7887545,11.9124992 C36.8775478,16.0598252 33.1982329,19.0108122 28.952,19 Z M28.852,4.6 C27.1341069,4.59401992 25.5099216,5.38248806 24.452,6.736 L21.112,10 L24.454,13.264 C25.5118239,14.6176328 27.1360723,15.4061316 28.854,15.4 C30.7832342,15.3996428 32.5657296,14.3700785 33.5300373,12.699134 C34.494345,11.0281895 34.4939638,8.96972114 33.5290373,7.29913394 C32.5641108,5.62854674 30.7812342,4.59964269 28.852,4.6 Z" fill="#6119FF"> </path> <path d="M16.243,15.44 C13.907031,18.5187667 9.86628593,19.7625063 6.20336868,18.5301943 C2.54045143,17.2978824 0.0731743396,13.8646547 0.0731743396,10 C0.0731743396,6.13534534 2.54045143,2.70211764 6.20336868,1.46980566 C9.86628593,0.237493682 13.907031,1.48123332 16.243,4.56 L21.712,10 L16.243,15.44 Z M13.543,6.74 C12.4850784,5.38648806 10.8608931,4.59801992 9.143,4.604 C6.16066235,4.604 3.743,7.02166235 3.743,10.004 C3.743,12.9863376 6.16066235,15.404 9.143,15.404 C10.8609277,15.4101316 12.4851761,14.6216328 13.543,13.268 L16.888,10 L13.543,6.74 Z" fill="#FF410D"> </path> </g> </g> </g> </g> </g> </g>
                        </svg>

                        <p class="fw-medium fs-5 ps-3" style="color: #6119FF">Free Unlimited Revisions</p>
                    </div>

                    <div class="d-flex align-items-center mt-3 pb-3">
                        <svg width="54px" height="54px" viewBox="0 -1.5 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>layers</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-824.000000, -334.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="layers" transform="translate(780.000000, 156.000000)"> <g transform="translate(6.000000, 9.000000)" id="Shape"> <polygon fill="#FF410D" points="18 11.6 35.013 21.3 18 30.99 0.987 21.29"> </polygon> <polygon fill="#0C0058" points="18 5.8 35.013 15.5 18 25.2 0.987 15.5"> </polygon> <polygon fill="#FF410D" points="18 0.01 35.013 9.71 18 19.4 0.987 9.7"> </polygon> </g> </g> </g> </g> </g> </g>
                        </svg>

                        <p class="fw-medium fs-5 ps-3" style="color: #6119FF">Experts in Every Area.</p>
                    </div>

                    <div class="mt-3 pb-3">
                        <a href="#" style="background-color: #6119FF;" class="p-2 pb-3 px-3 rounded-3 text-white fw-medium fs-4">
                            Get Started
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="container" style="padding-bottom: 3rem; padding-top: 3rem;">
            <div class="p-5 row">
                <div class="col col-lg-4 d-grid text-center">
                    <p class="fs-2 lh-1 fw-medium" style="color: #FFF000;">200 Happy Clients</p>
                    <p class="fs-5 lh-1">Satisfied & Returning Customers</p>
                </div>

                <div class="col col-lg-4 d-grid text-center">
                    <p class="fs-2 lh-1 fw-medium" style="color: #FF410D;">350 Pages Turnover</p>
                    <p class="fs-5 lh-1">Average Pages Daily</p>
                </div>

                <div class="col col-lg-4 d-grid text-center">
                    <p class="fs-2 lh-1 fw-medium" style="color: #6119FF;">Team of 34</p>
                    <p class="fs-5 lh-1">Expert Writers, Analysts and Developers</p>
                </div>
            </div>
        </div>
    </section>

    <!--Testimonials-->
    <section>
        <div class="container" style="padding-bottom: 4rem; padding-top: 4rem;">
            <div class="d-grid align-content-center mx-auto pb-5 w-50">
                <h2 class="pt-4 text-dark text-center display-3 fw-bolder">
                    Testimonials: Tested and Verified
                </h2>
                <p class="text-center text-secondary fs-4">See what others say about our services.</p>
            </div>

            <div class="row gx-4 px-4">

                <div class="col-lg-4 pb-5">
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.13456 9H12.1346L10 14.6075H7L9.13456 9Z" fill="#FF410D"></path> <path d="M14.1346 9H17.1346L15 14.6075H12L14.1346 9Z" fill="#FF410D"></path> </g></svg>

                    <h4 class="mt-2 pb-2 text-black">Business Writing & Reports</h4>

                    <p class="mt-2 text-secondary fs-5 lh-sm">
                        "As a busy entrepreneur, I often struggle to find time for writing high-quality content for my website. This service has been a game-changer for me. I can now focus on growing my business while knowing my content is in capable hands."
                    </p>

                    <p style="color: #6119FF;" class="fw-bold">~ Jack, Entrepreneur</p>
                </div>

                <div class="col-lg-4 pb-5">
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.13456 9H12.1346L10 14.6075H7L9.13456 9Z" fill="#FF410D"></path> <path d="M14.1346 9H17.1346L15 14.6075H12L14.1346 9Z" fill="#FF410D"></path> </g></svg>

                    <h4 class="mt-2 text-black">CourseWork Assistance</h4>

                    <p class="mt-2 text-secondary fs-5 lh-sm">
                        "I had a hard time dealing with my coursework, and then I found this amazing website service.
                        They helped me complete my assignment and prepare my research project. Thanks to them, I received top grades in my class! Highly recommended."
                    </p>

                    <p style="color: #6119FF;" class="fw-bold mt-1">~ Sarah, Ph.D Student.</p>
                </div>

                <div class="col-lg-4 pb-5">
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.13456 9H12.1346L10 14.6075H7L9.13456 9Z" fill="#FF410D"></path> <path d="M14.1346 9H17.1346L15 14.6075H12L14.1346 9Z" fill="#FF410D"></path> </g></svg>

                    <h4 class="mt-2 text-black">Data Analysis with python</h4>

                    <p class="mt-2 text-secondary fs-5 lh-sm">
                        "Our company needed assistance with data analysis for a crucial project. We reached out to this service, and their team of experts provided us with valuable insights and recommendations. We will definitely collaborate with them again in the future."
                    </p>

                    <p style="color: #6119FF;" class="fw-bold mt-1">~ James, CEO of B-Tech Insurance.</p>
                </div>

                <div class="col-lg-4 pb-5">
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.13456 9H12.1346L10 14.6075H7L9.13456 9Z" fill="#FF410D"></path> <path d="M14.1346 9H17.1346L15 14.6075H12L14.1346 9Z" fill="#FF410D"></path> </g></svg>

                    <h4 class="mt-2 text-black">Coding Task (Debug my code)</h4>

                    <p class="mt-2 text-secondary fs-5 lh-sm">
                        "I hired them for a coding task and their developers quickly identified the issue and debugged my code. They saved me a lot of time and frustration!"
                    </p>

                    <p style="color: #6119FF;" class="fw-bold mt-1">~ Mark, Aspiring Programmer.</p>
                </div>

                <div class="col-lg-4 pb-5">
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.13456 9H12.1346L10 14.6075H7L9.13456 9Z" fill="#FF410D"></path> <path d="M14.1346 9H17.1346L15 14.6075H12L14.1346 9Z" fill="#FF410D"></path> </g></svg>

                    <h4 class="mt-2 text-black">Research Project - Data analysis</h4>

                    <p class="mt-2 text-secondary fs-5 lh-sm">
                        "Their expertise in statistical analysis and programming helped me uncover meaningful insights from my data. They truly exceeded my expectations."
                    </p>

                    <p style="color: #6119FF;" class="fw-bold mt-1">~ David, Master's Degree Student.</p>
                </div>

            </div>
        </div>
    </section>

    <!--FAQs-->
    <section class="bg-primary">
        <div class="container" style="padding-bottom: 4rem; padding-top: 4rem;">
            <div class="d-grid align-content-center mx-auto pb-5 w-50">
                <h2 class="pt-4 text-white text-center fw-bolder display-3">
                    Frequently Asked Questions
                </h2>
                <p class="text-center text-white-50 fs-4">Answers to the most burning questions.</p>
            </div>

            <div class="row gx-4 px-4">
                <div class="col-lg-6 pb-5">
                    <h4 class="mt-4 pb-4 text-white">What kind of writing assistance does your service provide?</h4>

                    <p class="mt-2 mx-4 p-3 px-4 text-dark rounded-3 fs-5 lh-sm"  style="background-color: #19FFBA;">
                        Our service offers a wide range of writing assistance, including essay writing, research paper writing, article writing, blog post writing, and more. We have a team of skilled writers who can handle various subjects and academic levels.
                    </p>
                </div>

                <div class="col-lg-6 pb-5">
                    <h4 class="mt-4 pb-4 text-white">Do you provide programming assistance for specific programming languages?</h4>

                    <p class="mt-2 mx-4 p-3 px-4 text-dark rounded-3 fs-5 lh-sm" style="background-color: #19FFBA;">

                        Yes, we offer programming assistance for a variety of programming languages. Whether you need help with Python, Java, C++, or any other popular language, our team of expert programmers can assist you with debugging code, solving programming problems, and providing guidance for your projects.
                    </p>
                </div>

                <div class="col-lg-6 pb-5">
                    <h4 class="mt-4 pb-4 text-white">Can you help with data analysis for business purposes?</h4>

                    <p class="mt-2 mx-4 p-3 px-4 text-dark rounded-3 fs-5 lh-sm" style="background-color: #19FFBA;">
                        Absolutely! We specialize in data analysis for businesses. Our team of data analysts is experienced in handling complex data sets, performing statistical analysis, creating visualizations, and providing actionable insights to help businesses make informed decisions.
                    </p>
                </div>

                <div class="col-lg-6 pb-5">
                    <h4 class="mt-4 pb-4 text-white">How can I place an order for your services?</h4>

                    <p class="mt-2 mx-4 p-3 px-4 text-dark rounded-3 fs-5 lh-sm" style="background-color: #19FFBA;">
                        Placing an order is simple. You can visit our website and fill out the order form, providing details about the type of assistance you need. Once we receive your request, we will review it and assign the most suitable writer, analyst, or programmer to work on your project.
                    </p>
                </div>

                <div class="col-lg-6 pb-5">
                    <h4 class="mt-4 pb-4 text-white">Can I communicate with the assigned professional during the project?</h4>

                    <p class="mt-2 mx-4 p-3 px-4 text-dark rounded-3 fs-5 lh-sm"  style="background-color: #19FFBA;">
                        Yes, we encourage communication between our clients and the assigned professionals. We provide a messaging system on our platform that allows you to directly communicate with the writer, data analyst, or programmer working on your project. This ensures a smooth and collaborative process.
                    </p>
                </div>

                <div class="col-lg-6 pb-5">
                    <h4 class="mt-4 pb-4 text-white">What measures do you have in place to ensure the originality and confidentiality of the work?</h4>

                    <p class="mt-2 mx-4 p-3 px-4 text-dark rounded-3 fs-5 lh-sm" style="background-color: #19FFBA;">
                        We take originality and confidentiality seriously. All the work we deliver is completely original and tailored to your specific requirements. We have strict policies against plagiarism, and our writers, analysts, and programmers follow rigorous research and citation practices. Regarding confidentiality, we have robust systems and protocols in place to safeguard your personal and project-related information. Your privacy is of utmost importance to us.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!--blog-->
    <div class="container mx-auto" style="margin-top: 5rem;">
        <div class="d-grid align-content-center mx-lg-auto px-4 pb-5">
            <h2 class="pt-4 text-dark display-3 text-lg-center fw-bolder">
                Blog & Resources
            </h2>
            <p class="text-lg-center text-secondary mx-lg-auto fs-4 w-75">
                Latest from our blog and other resources.
            </p>
        </div>

        <div class="row gap-5 mx-auto justify-content-center" style="padding-bottom: 10rem">
            <?php
            $latest_posts = wp_get_recent_posts([
                    'numberposts' => 3,
                'post_type' => 'post'
            ]);

            foreach ($latest_posts as $post) {
                ?>
                <div class="col-lg-3 bg-body-tertiary py-5 rounded-3">
                    <?php
                        $has_post_thumbnail = get_the_post_thumbnail($post['ID'], 'medium', ['class' => 'image-fluid']);
                        if ($has_post_thumbnail) {
                        ?>
                        <div class="mb-3 text-center rounded-3">
                            <?php
                            echo $has_post_thumbnail;
                            ?>
                        </div>
                    <?php
                        }
                    ?>
                    <a href="<?php echo esc_url(get_permalink($post['ID']))?>">
                        <h5 class="px-3"><?php echo $post['post_title']; ?></h5>
                    </a>
                    <p class="px-3 text-dark-emphasis">
                        <?php
                        echo wp_trim_words($post['post_excerpt'], 30, '...');
                        ?>
                    </p>
                    <a href="<?php echo esc_url(get_permalink($post['ID']))?>" style="color: #6119FF;" class="fw-bold mt-3 px-3">READ MORE</a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!--sign-off-->
    <section class=""
             style="
                     background-image: url(<?php echo WRITING_THEME_DIR_URI.'/assets/writing-theme-hero-bg-image_1920x1080.png' ?>);
                     background-size: auto;
                     background-position: center;
                     background-repeat: no-repeat;
                     "
    >
        <div class="container" style="padding-bottom: 8rem; padding-top: 5rem">
            <div class="row align-items-center">
                <div class="col-lg-6 text-lg-start">
                    <h1 class="display-3 fw-bold lh-1 text-white pb-lg-5">Let Us to Be Part of Your Journey.</h1>

                    <p class="fs-3 fw-medium pt-3" style="color: yellow">Your Achievements and Goals are our priorities. Let's Get Go Get Them. <span class="px-2 rounded-2" style="color: #f45800; background-color: white;">TOGETHER!</span></p>
                </div>
                <div class="col-md-10 mx-auto col-lg-4 mt-5 pt-5">
                    <?php
                    get_template_part('template-parts/components/small-order-form')
                    ?>
                </div>
            </div>
        </div>

    </section>
</main>

<?php
get_footer(); // Include footer.php

?>
