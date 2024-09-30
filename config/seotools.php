<?php

/**
 * SEO Configuration for E.G.S. Pillay Engineering College
 */

use PharIo\Manifest\Url;

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta tag.
         */
        'defaults' => [
            'title'        => 'E.G.S. Pillay Engineering College - Excellence in Education',
            'titleBefore'  => false,
            'description'  => 'E.G.S. Pillay Engineering College offers high-quality engineering education, fostering innovation and skills development.',
            'separator'    => ' - ',
            'keywords'     => [
                "EGS Pillay Engineering College",
                "EGSPEC",
                "EGS Pillay Engineering College fees structure",
                "EGS Pillay Engineering College course admissions",
                "Nagapattinam",
                "Delta Best Engineering College",
                "Best Engineering College in Tamil Nadu",
                "Best Engineering College in Thanjavur",
                "Best Engineering College in Thiruvarur",
                "Best Engineering College in Mayiladuthurai",
                "Best Engineering College in Pudukkottai",
                "EGS Pillay Engineering College ranking",
                "EGS Pillay Engineering College hostel",
                "engineering college",
                "TNEA counselling",
                "good engineering courses",
                "B.E. courses",
                "B.Tech courses",
                "Mechanical Engineering",
                "Civil Engineering",
                "Electrical and Electronics Engineering",
                "Electronics and Communication Engineering",
                "Computer Science and Engineering",
                "Information Technology",
                "Biomedical Engineering",
                "Artificial Intelligence",
                "Data Science",
                "MCA",
                "MBA",
                "Science and Humanities",
                'Engineering College',
                'E.G.S. Pillay',
                'Higher Education',
                'Technical Education',
                'India'
            ],
            'canonical'    => url()->current(), // Set to null or 'full' to use Url::full()
            'robots'       => 'index, follow', // Index and follow
        ],
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],
        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'E.G.S. Pillay Engineering College',
            'description' => 'Join E.G.S. Pillay Engineering College to experience a transformative education in engineering and technology.',
            'url'         => url()->current(), // Set to null for using Url::current()
            'type'        => 'website',
            'site_name'   => 'E.G.S. Pillay Engineering College',
            'images'      => ['https://egspec.blob.core.windows.net/egspec-assets/og_image.webp'], // Replace with actual image path
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary_large_image', // Use large image card
            'site'        => '@raghavanjeeva', // Twitter handle
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'E.G.S. Pillay Engineering College',
            'description' => 'E.G.S. Pillay Engineering College provides quality education in engineering, nurturing future innovators.',
            'url'         => url()->current(), // Set to null or 'full' to use Url::full()
            'type'        => 'EducationalOrganization',
            'images'      => ['https://egspec.blob.core.windows.net/egspec-assets/og_image.webp'], // Replace with actual image path
        ],
    ],
];
