<?php

return [
    'truncate_tables' => true,

    'seed_jobs' => true,

    'tables' => [
        'functional_areas' => [
            'Animator','Apparel / Garment Designer','Architects','Asst. Sales Manager','Autocad Designer','AV Executive','Bank Assurance','Banking - General','Banquet Manager','Beautician','Branch Head','Business Analyst','Cameraman'
        ],
        'industrial_type' => [
            'Construction','IT-BPO','Law Enforcement/Security','Legal/Law','Marketing/Sales','Media','Media / Journalism'
        ],
        'categories' => [
            'IIT/IIM Jobs','Govt.Jobs'
        ],
        'countries' => [
            'Bangladesh','India','Pakistan'
        ],
        'v_packages' => [
            1,2,3
        ],
        'states' => ['Delhi'],
        'basic_edu' => [
            'B Com',
            'B Ed',
            'B.E/ B. Tech',
            'B.Sc',
            'BA',
            'BAMS',
            'BBA',
            'BHMS',
            'Diplomo',
            'HSC',
            'ICMA',
            'M.Com',
            'MBBS',
            'mm',
            'Others',
            'php',
            'SSLC',
        ],
        'employments' => ['first_name','middle_name','last_name','employer_id','location','address_line_1','address_line_2','country','state','city','postal_code','phone'],
        'educations' => ['first_name','middle_name','last_name','institution','roll_number','institution_location','address_line_1','address_line_2','country','state','city','postal_code','year_of_passing','degree_to_be_verified'],
        'reference' => ['first_name','middle_name','last_name','reference_first_name','reference_last_name','your_email','reference_email_id','reference_phone','write_about_your_reference'],
        'ads' => ['resume','cv','dynamics','inpex'],
        'cities' => ['Baisi','Serchhip','Bastar','Jorethang','Gopalasamudram','Ponda City','Barbil','Nongpoh'],
        'cms' => ['Seeker : Terms and Conditions','Seeker : About Us','Seeker : Privacy Policy','Seeker : Tell a Friend',
            'Seeker : Featured Service','Seeker : Help','Seeker : FAQ','Employer : How to make job post','Employer : Advertise your job','Employer : Fraud Alert',
            'Employer : Help','Employer : Job Posting','Employer : Database Access','Employer : Spotlight','Employer : Candidate Manager','Contact Us','contact details'
        ],
        'locations' => [
            'Agartala',
            'Ahmadabad',
            'Ahmednagar',
            'Aizwal',
            'Ajmer',
            'Akola',
            'Allahabad',
            'Alleppey',
            'Amer',
            'Amravati',
            'Amritsar',
            'Anakapalle',
            'Anantapur',
            'ApreÅ¡ov',
            'Ara',
            'Arakonam',
            'Arcot',
            'Ariyalur',
            'Aruppukkottai',
            'Auraiya',
            'Aurangabad',
            'Aurangabad Chikalthan Aerodrome',
            'Balasore',
            'Bangalore',
            'Barddhaman',
            'Basirhat',
            'Batala',
            'Belgaum/Sambra',
            'Benares',
            'Bhandara',
            'Bhatkal',
            'Bhatpara',
            'Bhiwandi',
            'Bhiwani',
            'Bhongir',
            'Bhopal',
            'Bhubaneshwar',
            'Bhuj-Rudramata',
            'Bihar',
            'Bikaner',
            'Bombay',
            'Bulandshahr',
            'Calcutta',
            'Chandigarh',
            'Chavakkad',
            'Chengelput',
            'Chennai',
            'Chhapra',
            'Chitradurga',
            'Chittoor',
            'Cochin',
            'Coimbatore / Peelamedu',
            'Cuddalore',
            'Cuttack',
            'Daman',
            'Daosa',
            'Darjiling',
            'Daund',
            'Dehradun',
            'Delhi',
            'Dewas',
            'Dibrugarh / Mohanbari',
            'Dindigul',
            'Dindivanam',
            'Dispur',
            'Dod Ballapur',
            'Duraha',
            'Elamanchili',
            'Erode',
            'Etawah',
            'Faizabad',
            'Faridabad',
            'Fatehpur',
            'Gadag',
            'Gandhinagar',
            'Gangtok',
            'Gauhati',
            'Gaya',
            'Ghaziabad',
            'Ghazipur',
            'Goa/Panjim',
            'Godhra',
            'Guwahati',
            'Gwalior',
            'Haora',
            'Hisar',
            'Hoshiarpur',
            'Hyderabad',
            'Imphal',
            'Indore',
            'Itanagar',
            'Jabalpur',
            'Jagdalpur',
            'Jaipur',
            'Jaisalmer',
            'Jalandhar',
            'Jamshedpur',
            'Jatni',
            'Jaunpur',
            'Jharsuguda',
            'Jodhpur',
            'Kakinada',
            'Kalimpang',
            'Kalyan',
            'Kamthi',
            'Kancheepuram',
            'Kanpur',
            'Kanyakumari',
            'Kasaragod',
            'Kerala',
            'Khadki',
            'Khammam',
            'Kharagpur',
            'Kodaikanal',
            'Kohima',
            'Kolar',
            'Kolhapur',
            'Koregaon',
            'Kovilpatti',
            'Kozhikode',
            'Kumbakonam',
            'Kumbum',
            'Kurnool',
            'Kutralam',
            'Lucknow',
            'Ludhiana',
            'M. O. Ranchi',
            'Machilipatnam',
            'Madurai',
            'Mahbubnagar',
            'Mahesana',
            'Malegaon',
            'Mandya',
            'Mangalore',
            'Mannarkudi',
            'Mayiladuthurai',
            'Medinipur',
            'Meerut',
            'Mhow',
            'Minicoy',
            'Mirzapur',
            'Moga',
            'Mumbai',
            'Murud',
            'Muzaffarnagar',
            'Muzaffarpur',
            'Nadiad',
            'Nagercoil',
            'Nagpur',
            'Nasik',
            'Nawabganj',
            'Nellore',
            'New Delhi',
            'New Delhi/Safdarjung',
            'Neyyattinkara',
            'Nizamabad',
            'Ooty',
            'Panvel',
            'Papanasam',
            'Patiala',
            'Patna',
            'Pendra Road',
            'Perambalur',
            'Pondicherry',
            'Poona',
            'Port Blair',
            'Pune',
            'Puri',
            'Quilon',
            'Rae Bareli',
            'Raigarh',
            'Rajapalaiyam',
            'Rajkot',
            'Rameshwaram',
            'Ratnagiri',
            'Rohtak',
            'Salem',
            'Sambalpur',
            'Sankarankovil',
            'Sanwer',
            'Saraipali',
            'Satara',
            'Satna',
            'Sattur',
            'Sehore',
            'Shertallai',
            'Shillong',
            'Shimla',
            'Sholapur',
            'Sitapur',
            'Sivakasi',
            'Solapur',
            'Sonipat',
            'Srikakulam',
            'Srinagar',
            'Sriperumpudur',
            'Srivilliputhur',
            'Surat',
            'Tambaram',
            'Tezpur',
            'Thana, INDIA',
            'Thanjavur',
            'Theni',
            'Thiruchendur',
            'Thiruvan',
            'Tiruchchirapalli',
            'Tirunelveli',
            'Tirupati',
            'Tiruvottiyur',
            'Tonk',
            'Trivandrum',
            'Tumkur',
            'Tuticorin',
            'Udupi',
            'Ulhasnagar',
            'Unnao',
            'Vadodara',
            'Varanasi',
            'Vellore',
            'Veraval',
            'Vidisha',
            'Villupuram',
            'Virdhachalam',
            'Virudunagar',
            'Vishakhapatnam',
            'Vizianagaram',
            'Warangal',
            'Wardha',
            'Washington, US',
            'Zahirabad',
        ]
    ]
];
