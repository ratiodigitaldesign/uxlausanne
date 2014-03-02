<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;

$app = new Application();
$app->register(new UrlGeneratorServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new ServiceControllerServiceProvider());
$app->register(new TwigServiceProvider(), array(
    'twig.path'    => array(__DIR__.'/../templates'),
    'twig.options' => array('cache' => __DIR__.'/../cache/twig'),
));
$app['twig'] = $app->share($app->extend('twig', function($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
}));

$app->speakers = array(
    'janina_woods' => array(
        'slug' => 'janina_woods',
        'promoted' => false,
        'title' => 'Janina Woods',
        'body' => 'Janina works in Zurich, where she’s the Game Designer behind Black Island, a horror game for PC and Oculus Rift, in which she tries to exploit fully the immersive quality of the VR headset. After her studies at the ZHdK, she got involved in Game Design at YouRehab, a leading provider of interactive therapy systems for patients with movement disorders, where she was responsible for all aspects of game design.',
        'teaser' => 'Janina works in Zurich, where she’s the Game Designer behind Black Island.',
        'company' => 'Wotokah, Zurich',
        'company_url' => 'http://wotokah.makegames.ch/',
        'photo' => '/assets/img/speaker_janina_woods.jpeg',
        'thumbnail' => '',
        'role' => 'Game Designer',
        'e' => array(
            array(
                'url' => 'http://wotokah.makegames.ch/',
                'label' => 'makegames.ch'
            )
        )
    ),
    'anna_dahlstrom' => array(
        'slug' => 'anna_dahlstrom',
        'promoted' => true,
        'title' => 'Anna Dahlström',
        'body' => 'Anna is a former Experience Lead with Dare, the Digital Communication Agency. After a couple of years, she decided to leave her position and go freelance, in order to pursue her own projects and focus more specifically on Information Architecture and User Experience, as well as getting more involved in the startup community. She’s worked for BBC News, Disney, Tropicana, Max Factor, Google, Vodafone and Johnson & Johnson. She’s also an instructor at General Assembly in London where she’s based.',
        'teaser' => 'Anna is a former Experience Lead with Dare, the Digital Communication Agency.',
        'company' => 'byflock, London',
        'company_url' => 'http://annadahlstrom.com/',
        'photo' => '/assets/img/speaker_anna_dahlstrom.jpg',
        'thumbnail' => '',
        'role' => 'Founder, byflock Ltd.',
        'speaker_urls' => array(
            array(
                'url' => 'http://annadahlstrom.com/',
                'label' => 'Personal website'
            )
        )
    ),
    'fabian_hemmert' => array(
        'slug' => 'fabian_hemmert',
        'promoted' => false,
        'title' => 'Fabian Hemmert',
        'body' => 'Young researcher, Fabian has nevertheless an impressive record, as he’s already worked for Nintendo Europe et Marvel Comics. His performance talks have been noticed and much commented on during SXSW 2012 & 2013 and TEDxBerlin, especially the one devoted to shape-shifiting cell phones. Fascinated with the non-visual communication techniques, he explores the impact of feeling, weight, touch and movement. He currently works for Deutsche Telekom.',
        'teaser' => 'Young researcher, Fabian has nevertheless an impressive record.',
        'company' => 'Researcher, Design Research Lab, Berlin',
        'company_url' => 'http://www.fabianhemmert.com/',
        'photo' => '',
        'thumbnail' => '',
        'role' => 'PhD Candidate',
        'speaker_urls' => array(
            array(
                'url' => 'http://www.fabianhemmert.com/',
                'label' => 'Personal website'
            )
        )
    ),
    'brigit_geiberger_and_peter_boersma' => array(
        'slug' => 'brigit_geiberger_and_peter_boersma',
        'promoted' => false,
        'title' => 'Birgit Geiberger & Peter Boersma',
        'body' => 'Birgit is a Creative Director UX, Design Manager and Visual & Interaction Designer, and has worked for clients such as Olympus Europe, the EDEKA Group, ZEIT Online, Axel Springer Verlag, Monster Global, The Seattle Times and Toyota Europe. Birgit is IxDA\'s Regional Coordinator for Europe & Africa and founder and local leader of the IxDA Hamburg chapter.  Peter is the Interaction Design Director at Blast Radius. He studied computer science and ergonomics, and has been working in the UX field since 1995 for the agencies Satama, EzGov, User Intelligence, Info.nl and Adaptive Path, and clients such ABN Amro, the UK Inland Revenue, Shutterstock and Nokia. He has acted as Director of the Information Architecture Institute, and was program chair of the The Web and Beyond conferences. Self-proclaimed beer lover, he is the host of the Amsterdam UX Cocktail Hours.',
        'teaser' => 'Birgit is a Creative Director UX, Design Manager and Visual & Interaction Designer.',
        'company' => 'Team of Two, Hamburg & Blast Radius, Amsterdam',
        'company_url' => 'http://birgitg.com/',
        'photo' => '',
        'thumbnail' => '',
        'role' => 'Creative Director UX & Interaction Design Director',
        'speaker_urls' => array(
            array(
                'url' => 'http://birgitg.com/',
                'label' => 'Personal website'
            )
        )
    ),
	'oliver_reichenstein' => array(
        'slug' => 'oliver_reichenstein',
        'promoted' => true,
        'title' => 'Oliver Reichenstein',
        'body' => 'Oliver is the CEO & Founder of the Information Architects design agency, based in Tokyo & Zürich. He studied Philosophy, before noticing that handling abstract concepts was essential for Information Architecture Design. In 2005, he founded IA, that has had clients such as Firefox, Tamedia, Yandex, UBS and Ringier. Ambassador of simplicity and structure, he defends sleek design, with opinions. Admired, often envied and imitated, we are very happy to welcome him for our first edition.',
        'teaser' => 'Oliver is the CEO & Founder of the Information Architects design agency.',
        'company' => 'Information Architects Inc, Tokyo',
        'company_url' => 'http://ia.net/',
        'photo' => '/assets/img/speaker_oliver-reichenstein.jpg',
        'thumbnail' => '',
        'role' => 'CEO & Founder',
        'speaker_urls' => null
    ),
    'valerie_vuillerat' => array(
        'slug' => 'valerie_vuillerat',
        'promoted' => true,
        'title' => 'Valerie Vuillerat',
        'body' => 'Valérie is the Managing Director for Ginetta, a Digital Agency based in Zürich, who can boast of Swiss Government, Swiss Post, Doodle, Raiffeisen bank, local.ch and the University of Basel as its clients. An experienced UX practitioner, used to simplifying complex systems, Valérie has taught User-Oriented Design at the Swiss Marketing Institute in Bern and at somexcloud. She loves Andalucia, long bicycling trips and vanilla ice cream.',
        'teaser' => 'Valérie is the Managing Director for Ginetta, a Digital Agency based in Zürich.',
        'company' => 'Ginetta, Zurich',
        'company_url' => 'http://ginetta.ch',
        'photo' => '/assets/img/speaker_valerie-vuillerat.jpg',
        'thumbnail' => '',
        'role' => 'Managing Director ',
        'speaker_urls' => array(
        	array(
        		'url' => 'http://twitter.com/valeriewow',
        		'label' => '@valeriewow'
        	)
        )
    ),
	'ryan_rumsey' => array(
        'slug' => 'ryan_rumsey',
        'promoted' => true,
        'title' => 'Ryan Rumsey',
        'body' => 'Ryan lives and plays in Lausanne, Switzerland, where he is a User Experience Leader at Nestlé. Prior to working at Nestlé, he was Sr. Manager of User Experience at Electronic Arts and User Experience Lead at Apple, with his primary focus on building design teams and processes focused on enterprise level CRM, LMS, Portal and Performance Management tools. In his 14+ years leading interactive, creative and development solutions, Ryan Rumsey has designed and launched products in a wide variety of industries. From health to retail, gaming to customer service, media to gossip, he specializes in User Experience Design and Evangelization.',
        'teaser' => 'Ryan lives and plays in Lausanne, Switzerland, where he is a User Experience Leader at Nestlé.',
        'company' => 'Nestlé Institute of Health Science, Lausanne',
        'company_url' => 'http://www.nestleinstitutehealthsciences.com',
        'photo' => '/assets/img/speaker_ryan-rumsey.jpg',
        'thumbnail' => '',
        'role' => 'User Experience Leader',
        'speaker_urls' => array(
            array(
                'url' => 'http://ryanrumsey.com',
                'label' => 'Personal website'
            ),
            array(
                'url' => 'http://twitter.com/ryanrumsey',
                'label' => '@ryanrumsey'
            )
        )
    ),
	'will_evans' => array(
        'slug' => 'will_evans',
        'promoted' => false,
        'title' => 'Will Evans',
        'body' => 'Essential member of the UX and design thinking communities, Will Evans is a specialist in Interaction and User Experience Design for more than 15 years.  After having worked for Lotus/IBM, TheLadders, Kayak.com and MIT, he manages now his own studio, Semantic Foundry, in New York. His works have been published in Business Week, The Economist, Fast Company, Time Magazine, Fortune, MSNBC, The Wall Street Journal.',
        'teaser' => 'Essential member of the UX and design thinking.',
        'company' => 'Semantic Foundry, New York',
        'company_url' => 'http://semanticfoundry.com',
        'photo' => '/assets/img/speaker_will-evans.jpg',
        'thumbnail' => '',
        'role' => 'Founder & Social Experience Designer',
        'speaker_urls' => array(
            array(
                'url' => 'http://twitter.com/semanticwill',
                'label' => '@semanticwill'
            )
        )
    ),


);

// Select only promoted
$app->promoted_speakers = null;
foreach ($app->speakers as $speaker_key => $speaker) {
    if ($speaker['promoted']) {
        $app->promoted_speakers[$speaker_key] = $speaker;
    }
}

$app->talk_kinds = array(
    'workshop' => "Workshop",
    'talk' => "Talk"
);

$app->talks = array(
    'will_evans' => array(
        'speaker' => $app->speakers['will_evans'],
        'position' => 0,
        'when' => "Thusday, Mai 22 @ 2pm",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Title of the workshop",
        'teaser' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, fugiat, omnis, molestias sunt quis aliquam nam ipsa excepturi repellat error accusantium qui tempora cum dolorum quaerat ea expedita natus iste.",
        'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, fugiat, omnis, molestias sunt quis aliquam nam ipsa excepturi repellat error accusantium qui tempora cum dolorum quaerat ea expedita natus iste. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, fugiat, omnis, molestias sunt quis aliquam nam ipsa excepturi repellat error accusantium qui tempora cum dolorum quaerat ea expedita natus iste.",
    ),
    'anna_dahlstrom' => array(
        'speaker' => $app->speakers['anna_dahlstrom'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Device agnostic design ",
        'teaser' => "how to get your content to go anywhere.",
        'description' => "There was a time when we did pretty page designs and when those designs were pretty much what we saw in our desktop browsers. With the introduction and rise of smartphones, tablets, phablets - as well as a bigger variety in larger and smaller screens - there isn’t one view of our designs anymore. Instead, what we design need to be able to adapt so that it’s displayed in a way that is suitable for the device that is being used. <br>With responsive design we’ve learnt the basics of how to adapt content, interactions and layouts so that it works across devices. But with further developments in technology and screens, our content is going to go anywhere and we need to move away from designing for specific devices. For us as UX designers this means means letting content rather than devices guide layouts, but also increasingly moving away from designing and wireframing pages and instead focusing on the modules that those pages are made up of. <br>The device agnostic design approach places a bigger weight on our shoulders in terms of ensuring that what we design will in fact work across devices, irrespectively of what device that is used. As a result we need to be clever in how we approach design, development and specification to ensure we spend our resources appropriately, but also that we build something that can adapt to as many different platforms and screen sizes as possible. <br />In this workshop you’ll get a thorough understanding of and hands on experience with:<ul><li>why we should do device agnostic design</li><li>the basics of modular and device agnostic design</li><li>what it means to approach a project in a modular way</li><li>how to go about doing it </li><li>module libraries and how to use them using content as the basis for responsive design breakpoints</li></ul>",
    ),
    'brigit_geiberger_and_peter_boersma_workshop' => array(
        'speaker' => $app->speakers['brigit_geiberger_and_peter_boersma'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Do the right thing",
        'teaser' => "People in the field of User Experience are taught that having empathy for the end-user is the holy grail. We believe that, by studying the way your fellow project team members work, what their needs are, and what & how they deliver, you can develop another type of empathy, one that may prove to be more important for business success and results in a delightful work environment.",
        'description' => "There was a time when we did pretty page designs and when those designs were pretty much what we saw in our desktop browsers. With the introduction and rise of smartphones, tablets, phablets - as well as a bigger variety in larger and smaller screens - there isn’t one view of our designs anymore. Instead, what we design need to be able to adapt so that it’s displayed in a way that is suitable for the device that is being used. <br>With responsive design we’ve learnt the basics of how to adapt content, interactions and layouts so that it works across devices. But with further developments in technology and screens, our content is going to go anywhere and we need to move away from designing for specific devices. For us as UX designers this means means letting content rather than devices guide layouts, but also increasingly moving away from designing and wireframing pages and instead focusing on the modules that those pages are made up of. <br>The device agnostic design approach places a bigger weight on our shoulders in terms of ensuring that what we design will in fact work across devices, irrespectively of what device that is used. As a result we need to be clever in how we approach design, development and specification to ensure we spend our resources appropriately, but also that we build something that can adapt to as many different platforms and screen sizes as possible. <br />In this workshop you’ll get a thorough understanding of and hands on experience with:<ul><li>why we should do device agnostic design</li><li>the basics of modular and device agnostic design</li><li>what it means to approach a project in a modular way</li><li>how to go about doing it </li><li>module libraries and how to use them using content as the basis for responsive design breakpoints</li></ul>",
    ),
    'brigit_geiberger_and_peter_boersma_talk' => array(
        'speaker' => $app->speakers['brigit_geiberger_and_peter_boersma'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "Do the right thing",
        'teaser' => "People in the field of User Experience are taught that having empathy for the end-user is the holy grail. We believe that, by studying the way your fellow project team members work, what their needs are, and what & how they deliver, you can develop another type of empathy, one that may prove to be more important for business success and results in a delightful work environment.",
        'description' => "There was a time when we did pretty page designs and when those designs were pretty much what we saw in our desktop browsers. With the introduction and rise of smartphones, tablets, phablets - as well as a bigger variety in larger and smaller screens - there isn’t one view of our designs anymore. Instead, what we design need to be able to adapt so that it’s displayed in a way that is suitable for the device that is being used. <br>With responsive design we’ve learnt the basics of how to adapt content, interactions and layouts so that it works across devices. But with further developments in technology and screens, our content is going to go anywhere and we need to move away from designing for specific devices. For us as UX designers this means means letting content rather than devices guide layouts, but also increasingly moving away from designing and wireframing pages and instead focusing on the modules that those pages are made up of. <br>The device agnostic design approach places a bigger weight on our shoulders in terms of ensuring that what we design will in fact work across devices, irrespectively of what device that is used. As a result we need to be clever in how we approach design, development and specification to ensure we spend our resources appropriately, but also that we build something that can adapt to as many different platforms and screen sizes as possible. <br />In this workshop you’ll get a thorough understanding of and hands on experience with:<ul><li>why we should do device agnostic design</li><li>the basics of modular and device agnostic design</li><li>what it means to approach a project in a modular way</li><li>how to go about doing it </li><li>module libraries and how to use them using content as the basis for responsive design breakpoints</li></ul>",
    ),
    'janina_woods' => array(
        'speaker' => $app->speakers['janina_woods'],
        'position' => 0,
        'when' => "Saturday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "The Virtual Reality Experience",
        'teaser' => "An interactive overview of current state of the virtual reality interactions",
        'description' => "In this talk, Janina reflects on the latest evolution of the world of Virtual Reality by showcasing her own research and reflects on how those new devices imply new paradigms of UI and UX - both in games, and in a broader spectrums of fields.   She will then describe a near-future world where our Classic interface with the world will be replaced by an virtual Augmented Reality one and explore usages of Virtual reality features in everyday applications.",
    ),
    'fabian_hemmert' => array(
        'speaker' => $app->speakers['fabian_hemmert'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "Bodily Experiences of the Digital",
        'teaser' => "An interactive overview of current state of the virtual reality interactions",
        'description' => "How our body treats digital information like physical stuff, information consumption like food consumption, and technical devices like social, living beings. <br>For many people, the digital world is still hard to grasp. It leaves us cognitively overwhelmed, and bodily unchallenged.   In this session Fabian will develop how our experience of the digital world is metaphorically physical and impacts on our body.  He will demonstrate  ways to make us physically embrace the digital world through industrial and interaction design - by giving life to objects based on their digital presence.   Finally, he will raise the fundamental question of whether we want devices that are behaving like humans, or - worse - humans that are becoming robots. ",
    )

);

// specials
$app->specials = array(
    'special_1' => array(
        'title' => "Learn<br/>& network",
        'image' => "/assets/img/special_1.jpg",
        'description' => "Attending UX Lausanne is an excellent opportunity to meet fascinating, like-minded people and learn stuff. The conference is located in the Arsenic Theatre. In favour of informal exchanges, chance meetings and networking, the atrium is devoted to a relaxed atmosphere."
    ),
    'special_2' => array(
        'title' => "Between the Lake<br/>& the Alps",
        'image' => "/assets/img/special_2.jpg",
        'description' => "Attending UX Lausanne is an excellent opportunity to meet fascinating, like-minded people and learn stuff. The conference is located in the Arsenic Theatre. In favour of informal exchanges, chance meetings and networking, the atrium is devoted to a relaxed atmosphere."
    ),
    'special_3' => array(
        'title' => "Delicious<br/>& tasty",
        'image' => "/assets/img/special_3.jpg",
        'description' => "Attending UX Lausanne is an excellent opportunity to meet fascinating, like-minded people and learn stuff. The conference is located in the Arsenic Theatre. In favour of informal exchanges, chance meetings and networking, the atrium is devoted to a relaxed atmosphere."
    )
);

// reasons
$app->reasons = array(
    'reason_1' => array(
        'description' => "<strong>Improve and develop your skills</strong>, attending human-sized workshops, blending together creativity and pragmatism. Get a chance to turn theory into practice and to ask questions about your own projects and endeavours."
    ),
    'reason_2' => array(
        'description' => "<strong>Share moments and ideas</strong> with the UX community, as well as connecting and amplifying your network and its impact. Meet innovators and people sharing your interests from all across Switzerland and Europe, discuss your projects and get a whiff of the new trends."
    ),
    'reason_3' => array(
        'description' => "<strong>Learn from the best</strong> and take a dip in the creative world. Benefit from emulation and collective learning, working with set purposes and increasing your scope on Design, Interaction and User Experience."
    )
);


// organizers
$app->organizers = array(
    'organizer_1' => array(
        'logo' => "assets/img/logo_ratio.svg",
        'title' => 'Presented by :ratio',
        'description' => "Based in Lausanne, Switzerland, :ratio is a small and agile user experience web agency. We are passionate about Information Architecture, Usability and Interface Design.",
        'url' => 'http://8ratio.ch',
        'label' => "8ratio.ch"
    ),
    'organizer_2' => array(
        'logo' => "assets/img/logo_uxr.svg",
        'title' => 'Organized by UXRomandie',
        'description' => "Local chapter of IxDA (Interaction Design Association), we organize monthly events to try restoring meaningful relationships between people and the products & services they use.",
        'url' => 'http://uxromandie.ch',
        'label' => "uxromandie.ch"
    ),

);



return $app;
