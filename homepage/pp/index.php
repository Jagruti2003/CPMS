<!-- index1.php file is linked -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Drives</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #b5d1e3, #a7bbdb, #8e9fc7);
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            overflow: hidden;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #b5d1e3, #a7bbdb, #8e9fc7);
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            overflow-y: scroll; /* Add scrollbar to the whole page */
        }

        .drive-title {
            font-size: 48px; /* Increased font size */
            color: #fff;
            text-align: center;
            animation: fadeIn 2s ease;
            font-family: 'Georgia', serif; /* Attractive font for title */
        }

        .company-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center the cards horizontally */
            gap: 20px;
            margin-top: 20px;
            padding: 20px;
            /* Existing styles */
            max-height: 70vh;
            overflow-y: auto;
        }

        .company-card {
            background-color: rgba(255, 255, 255, 0.5); /* More transparent white background */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.3s ease;
            width: calc(33.33% - 20px); /* Adjust card width as needed */
            margin: 10px;
            padding: 15px; /* Adjusted padding */
            max-width: 300px; /* Limit card width */
        }

        .company-card:hover {
            transform: translateY(-10px);
        }

        .company-logo {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        .company-name {
            text-align: center;
            padding: 10px;
            font-weight: bold;
            font-size: 24px; /* Larger font size */
        }

        .company-details {
            font-size: 18px; /* Larger font size */
            font-family: 'Verdana', sans-serif; /* Attractive font for details */
        }

        .filter-options {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 20px;
}

.filter-options button {
    padding: 8px 16px;
    font-size: 14px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
    background-color: #b5d1e3;
    color: #341f97;
}

.filter-options button:hover {
    background-color: #8e44ad;
    color: #ffffff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}


        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        
        </style>
        <!-- Filter Section -->
    <div class="filter-section">
        <h2 style="font-size: xx-large;">Filter Companies</h2>
        <p style="font-size: x-large;">Choose as per your skills:</p>
        <div class="filter-options">
            <button onclick="filterCompanies('Internet Services')">Internet Services</button>
            <button onclick="filterCompanies('E-commerce')">E-commerce</button>
            <button onclick="filterCompanies('Technology')">Technology</button>
            <button onclick="filterCompanies('Entertainment')">Entertainment</button>
            <button onclick="filterCompanies('Electronics')">Electronics</button>
            <button onclick="filterCompanies('Consulting Services')">Consulting Services</button>
        
            <!-- Add more buttons for different categories -->
            <button onclick="filterCompanies('all')">Show All</button>
        </div>
    </div>

    <script>
        // Function to filter companies based on category
        function filterCompanies(category) {
            const allCompanies = document.querySelectorAll('.company-card');

            allCompanies.forEach(company => {
                if (company.dataset.category === category || category === 'all') {
                    company.style.display = 'block';
                } else {
                    company.style.display = 'none';
                }
            });
        }
    </script>
</head>
<body>
    <h1 class="drive-title">Ongoing and Upcoming Drives</h1>
    <div class="company-section">
        <div class="company-card" data-category="Internet Services">
            <img class="company-logo" src="google.jpeg" alt="Google Logo">
            <div class="company-name" href="">Google</div>
            <div class="company-details">
                <p>Google is a multinational technology company known for its search engine.</p>
                <p>Highlights:</p>
                <ul>
                    <li>Search Engine</li>
                    <li>Online Advertising</li>
                    <li>Cloud Computing</li>
                </ul>
            </div>
        </div>
        <div class="company-card" data-category="E-commerce">
            <img class="company-logo" src="ama.jpeg" alt="Amazon Logo">
            <div class="company-name">Amazon</div>
            <div class="company-details">
                <p>Amazon is a global e-commerce and cloud computing company.</p>
                <p>Highlights:</p>
                <ul>
                    <li>E-commerce</li>
                    <li>Amazon Web Services (AWS)</li>
                    <li>Prime Video</li>
                </ul>
            </div>
        </div>
        <div class="company-card" data-category="E-commerce">
            <img class="company-logo" src="fk.jpeg" alt="Flipkart Logo">
            <div class="company-name">Flipkart</div>
            <div class="company-details">
                <p>Flipkart is an Indian e-commerce company offering online shopping.</p>
                <p>Highlights:</p>
                <ul>
                    <li>E-commerce</li>
                    <li>Walmart-owned</li>
                    <li>Big Billion Days Sale</li>
                </ul>
            </div>
        </div>
        <!-- Add more company cards with details here -->
        <div class="company-card" data-category="Technology">
            <img class="company-logo" src="adobe.jpeg" alt="Adobe Logo">
            <div class="company-name">Adobe</div>
            <div class="company-details">
                <p>Adobe is a multinational software company known for its creative software products.</p>
                <p>Highlights:</p>
                <ul>
                    <li>Photoshop</li>
                    <li>Illustrator</li>
                    <li>Acrobat</li>
                </ul>
            </div>
        </div>
        <div class="company-card" data-category="Electronics">
            <img class="company-logo" src="apple.jpeg" alt="Apple Logo">
            <div class="company-name">Apple</div>
            <div class="company-details">
                <p>Apple Inc. is a technology company known for its iPhones, MacBooks, and more.</p>
                <p>Highlights:</p>
                <ul>
                    <li>iPhone</li>
                    <li>MacBook</li>
                    <li>iOS</li>
                </ul>
            </div>
        </div>
        <div class="company-card" data-category="Entertainment">
            <img class="company-logo" src="netflix.jpeg" alt="Netflix Logo">
            <div class="company-name">Netflix</div>
            <div class="company-details">
                <p>Netflix is a popular streaming service with a wide range of movies and TV shows.</p>
                <p>Highlights:</p>
                <ul>
                    <li>Streaming Service</li>
                    <li>Original Content</li>
                    <li>Stranger Things</li>
                </ul>
            </div>
        </div>
        <div class="company-card" data-category="Technology">
            <img class="company-logo" src="ms.jpeg" alt="Microsoft Logo">
            <div class="company-name">Microsoft</div>
            <div class="company-details">
                <p>Microsoft is a multinational technology company known for its software products.</p>
                <p>Highlights:</p>
                <ul>
                    <li>Windows</li>
                    <li>Office Suite</li>
                    <li>Azure</li>
                </ul>
            </div>
        </div>
        <div class="company-card" data-category="Internet Services">
            <img class="company-logo" src="fb.jpeg" alt="Facebook Logo">
            <div class="company-name">Facebook</div>
            <div class="company-details">
                <p>Facebook is a social media platform connecting billions of people worldwide.</p>
                <p>Highlights:</p>
                <ul>
                    <li>Social Media</li>
                    <li>Instagram</li>
                    <li>WhatsApp</li>
                </ul>
            </div>
        </div>
        <div class="company-card" data-category="Technology">
            <img class="company-logo" src="oracle.jpg" alt="Oracle Logo">
            <div class="company-name">Oracle</div>
            <div class="company-details">
                <p>Oracle Corporation is a multinational computer technology corporation.</p>
                <p>Highlights:</p>
                <ul>
                    <li>Database Software</li>
                    <li>Cloud Infrastructure</li>
                    <li>Java Programming</li>
                </ul>
            </div>
        </div>
        <div class="company-card" data-category="Electronics">
            <img class="company-logo" src="samsung.webp" alt="Amazon Logo">
            <div class="company-name">Samsung</div>
            <div class="company-details">
                <p>Samsung is a global electronics company.</p>
                <p>Highlights:</p>
                <ul>
                    <li>Android</li>
                    <li>Smart devices</li>
                    <li>Softwares</li>
                </ul>
            </div>
        </div>
        <div class="company-card" data-category="Consulting Services">
            <img class="company-logo" src="cognizant.jpg" alt="Amazon Logo">
            <div class="company-name">Cognizant</div>
            <div class="company-details">
                <p>Cognizant is a global cloud computing company.</p>
                <p>Highlights:</p>
                <ul>
                    <li>E-commerce</li>
                    <li>Web Services</li>
                    <li>Software</li>
                </ul>
            </div>
        </div>
        <div class="company-card" data-category="Consulting Services">
            <img class="company-logo" src="hexaware.jpg" alt="Amazon Logo">
            <div class="company-name">Hexaware</div>
            <div class="company-details">
                <p>Experience Certainty</p>
                <p>Highlights:</p>
                <ul>
                    <li>Application Services.</li>
                    <li>Business Process Services.</li>
                    <li>Cloud Services.</li>
                    <li>Hexaware's Strategic IT Consulting</li>
                    <li>Cyber Security Resilience Services.</li>
                    <li>Customer Experience Services.</li>
                </ul>
            </div>
        </div>
        <div class="company-card" data-category="Consulting Services">
            <img class="company-logo" src="ama.jpeg" alt="Amazon Logo">
            <div class="company-name">TCS</div>
            <div class="company-details">
                <p>Beyond The Obvious.</p>
                <p>Highlights:</p>
                <ul>
                    <li>Service</li>
                    <li>Cloud.</li>
                    <li>Cognitive Business Operations.</li>
                    <li>Cybersecurity.</li>
                    <li>Network Solutions and Services.</li>
                    <li>TCS Interactive.</li>
                </ul>
            </div>
        </div>
        <div class="company-card" data-category="Entertainment">
            <img class="company-logo" src="sony.jpeg" alt="sony Logo">
            <div class="company-name">Sony</div>
            <div class="company-details">
                <p>Samsung is a global electronics company.</p>
                <p>Highlights:</p>
                <ul>
                    <li>Android</li>
                    <li>Smart devices</li>
                    <li>Softwares</li>
                </ul>
            </div>
        </div>
        <!-- Company Cards with Details (Same as before) -->
    </div>
</body>
</html>