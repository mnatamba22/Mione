<!DOCTYPE html>
<html lang="en">
<head>
    <title>smartmum-uganda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="CSS/trim.css" rel="stylesheet">
    <link href="CSS/styleit.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            padding-top: 75px;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .sidebar {
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            padding-top: 20px;
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
            width: 250px;
        }
        .sidebar .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar a {
            display: block;
            padding: 10px 15px;
            color: #333;
            text-decoration: none;
            border: 1px solid transparent;
            border-radius: 5px;
            margin: 5px 0;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
        
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .content h1, .content h2, .content h3 {
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .content p {
            margin-bottom: 20px;
        }
        .section-title {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .section-content {
            margin-bottom: 40px;
        }
        .dos-donts-list {
            padding-left: 20px;
        }
        .dos-donts-list li {
            margin-bottom: 10px;
        }
        .highlight {
            font-weight: bold;
        }
        footer {
            padding: 10px 0;
        }
        .social-media-list li {
            margin-bottom: 10px;
        }
        .navbar {
            background-color: #f8f9fa;
            margin-left: 250px;
            width: calc(100% - 250px);
        }
        .navbar-nav .nav-link {
            color: #007bff;
            border: 1px solid #007bff;
            border-radius: 5px;
            margin: 5px;
            padding: 10px 15px;
        }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            background-color: #007bff;
            color: white;
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
            .content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="../IMAGES/Teams2/logo.jpg" style="width: 65px;" alt="Logo">
        </div>
        <a href="#introduction" id="introduction-link">Trimesters</a>
        <a href="#1st Trimester" id="installation-link">Trimester 1</a>
        <a href="#2nd Trimester" id="usage-link">Trimester 2</a>
        <a href="#3rd Trimester" id="api-link">Trimester 3</a>
        <a href="#recommendations" id="examples-link">Recommendations</a>
        <a href="#contacts" id="contact-link">Contacts</a>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid justify-content-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Baby</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pregnancy.php">Pregnancy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="parenthood.php">Parenthood</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Emergency</a>
                    </li>
                </ul>
                <form class="d-flex form-inline my-2 my-lg-0" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="content">
        <section id="introduction">
            <div class="col-12 text-center text-warning">
                <h2>Introduction</h2>
            </div>
            <p>
                A trimester is a period of three months, with the root of the word coming from Latin, where "tri" means three and <a href="https://rb.gy/mxx3nq" style="text-decoration: none;"><b class="color-primary">"mensis"</b></a> means month. There are two main contexts where you'll encounter trimesters: <br><br>
                <b>Pregnancy:  </b>The most common usage refers to the three distinct phases of human pregnancy, each lasting roughly three months. Each trimester marks a period of significant development for the fetus. <br>The first trimester is characterized by rapid cell division and formation of major organs. <br>The second trimester brings a period of increased stability and fetal growth. <br>Finally, the third trimester focuses on preparation for birth. <br><br>
                <b>Education:  </b>In some schools and colleges, the academic year is divided into three trimesters rather than the more prevalent two semesters. This system can offer more flexibility in scheduling and course offerings compared to semesters.
            </p>
        </section>
        
        <section id="1st Trimester">
            <div class="col-12 text-center text-warning">
                <h2>1st Trimester of pregnancy</h2>
            </div>
            <div class="container section-content">
                <h3>Period Range</h3>
                <p><span class="highlight">Weeks 1 to 12:</span> The first trimester begins from the first day of your last menstrual period (LMP) and lasts until the end of the 12th week of pregnancy.</p>

                <h3>Signs and Symptoms</h3>
                <p>During the first trimester, a woman’s body undergoes significant changes to support the growing embryo. Common signs and symptoms include:</p>
                <ul class="dos-donts-list">
                    <li><span class="highlight">Missed Period:</span> One of the earliest and most reliable signs of pregnancy.</li>
                    <li><span class="highlight">Morning Sickness:</span> Nausea and vomiting, commonly occurring in the morning but can happen at any time of day.</li>
                    <li><span class="highlight">Breast Changes:</span> Tenderness, swelling, and darkening of the areolas.</li>
                    <li><span class="highlight">Fatigue:</span> Increased levels of progesterone can cause extreme tiredness.</li>
                    <li><span class="highlight">Frequent Urination:</span> Hormonal changes increase blood flow to the kidneys, causing frequent trips to the bathroom.</li>
                    <li><span class="highlight">Food Cravings and Aversions:</span> Changes in taste and smell can lead to strong cravings for certain foods or aversions to others.</li>
                </ul>
            </div>
        </section>
        <section id="2nd Trimester">
            <div class="col-12 text-center text-warning">
                <h2>2nd Trimester of pregnancy</h2>
            </div>
            <div class="container section-content">
                <h3>Period Range</h3>
                <p><span class="highlight">Weeks 13 to 26:</span> The second trimester spans from the start of the 13th week to the end of the 26th week of pregnancy.</p>

                <h3>Signs and Symptoms</h3>
                <p>The second trimester is often referred to as the "golden period" because many of the more uncomfortable symptoms of early pregnancy may subside. Common signs and symptoms include:</p>
                <ul class="dos-donts-list">
                    <li><span class="highlight">Decreased Nausea:</span> Morning sickness usually decreases as the placenta takes over hormone production.</li>
                    <li><span class="highlight">Increased Energy:</span> Many women experience a surge in energy levels during this period.</li>
                    <li><span class="highlight">Visible Baby Bump:</span> The abdomen begins to expand as the fetus grows, and the baby bump becomes more noticeable.</li>
                    <li><span class="highlight">Fetal Movements:</span> Quickening or the first movements of the fetus are usually felt during this trimester.</li>
                    <li><span class="highlight">Stretch Marks:</span> As the skin stretches, some women may develop stretch marks on the abdomen, breasts, and thighs.</li>
                    <li><span class="highlight">Back Pain:</span> The growing uterus can put pressure on the back, causing discomfort and pain.</li>
                    <li><span class="highlight">Braxton Hicks Contractions:</span> Irregular, painless contractions of the uterus may begin as the body prepares for labor.</li>
                </ul>

                <h3>Developmental Milestones</h3>
                <ul class="dos-donts-list">
                    <li><span class="highlight">Weeks 13-16:</span> The fetus can make sucking motions with its mouth, and the eyes and ears are in their final positions.</li>
                    <li><span class="highlight">Weeks 17-20:</span> The fetus can hear sounds, and the mother can feel movements. Lanugo (fine hair) covers the body to protect the skin.</li>
                    <li><span class="highlight">Weeks 21-24:</span> The fetus begins to develop a sleep-wake cycle, and rapid eye movements (REM) can be observed. The lungs continue to develop.</li>
                    <li><span class="highlight">Weeks 25-26:</span> The fetus's brain is rapidly growing, and it responds to touch and sound. The eyes can open and close, and the lungs continue to mature.</li>
                </ul>
            </div>
        </section>
        
        <section id="3rd Trimester">
            <div class="col-12 text-center text-warning">
                <h2>3rd Trimester of pregnancy</h2>
            </div>
            <div class="container section-content">
                <h3>Period Range</h3>
                <p><span class="highlight">Weeks 27 to 40:</span> The third trimester lasts from the start of the 27th week until birth.</p>

                <h3>Signs and Symptoms</h3>
                <p>The third trimester is the final stretch of pregnancy, and many women experience new or intensified symptoms as the body prepares for labor. Common signs and symptoms include:</p>
                <ul class="dos-donts-list">
                    <li><span class="highlight">Shortness of Breath:</span> The growing uterus can press against the diaphragm, making it harder to breathe deeply.</li>
                    <li><span class="highlight">Frequent Urination:</span> Increased pressure on the bladder can cause more frequent trips to the bathroom.</li>
                    <li><span class="highlight">Swelling:</span> Edema, or swelling, can occur in the feet, ankles, and hands due to fluid retention.</li>
                    <li><span class="highlight">Heartburn:</span> The expanding uterus can push the stomach upwards, leading to heartburn and indigestion.</li>
                    <li><span class="highlight">Braxton Hicks Contractions:</span> These "practice" contractions may become more frequent and intense.</li>
                    <li><span class="highlight">Back Pain:</span> The added weight and changes in posture can cause lower back pain.</li>
                    <li><span class="highlight">Baby Drops:</span> The baby may move lower into the pelvis in preparation for birth, which can relieve pressure on the diaphragm but increase pressure on the bladder.</li>
                </ul>

                <h3>Developmental Milestones</h3>
                <ul class="dos-donts-list">
                    <li><span class="highlight">Weeks 27-30:</span> The fetus's brain continues to grow, and it begins to gain more fat. The bones are fully developed but still soft.</li>
                    <li><span class="highlight">Weeks 31-34:</span> The fetus's pupils can respond to light, and the lungs continue to mature. The fetus begins to turn into a head-down position.</li>
                    <li><span class="highlight">Weeks 35-37:</span> The fetus continues to gain weight rapidly, and most of the lanugo is gone. The lungs are nearly fully developed.</li>
                    <li><span class="highlight">Weeks 38-40:</span> The fetus is considered full-term at 39 weeks. The lungs are fully developed, and the fetus is ready for birth. The head may engage in the pelvis, and the cervix begins to efface and dilate.</li>
                </ul>
            </div>
        </section>
        
        <section id="recommendations">
            <div class="col-12 text-center text-warning">
                    <h2>Recommendations</h2>
                </div>
            <div class="container section-content">
                <h3>Tips for a Healthy Pregnancy</h3>
                <p>Maintaining a healthy lifestyle during pregnancy is crucial for both the mother and the developing baby. Here are some recommendations to follow:</p>
                <ul class="dos-donts-list">
                    <li><span class="highlight">Regular Prenatal Care:</span> Schedule regular check-ups with your healthcare provider to monitor the health of both you and your baby.</li>
                    <li><span class="highlight">Healthy Diet:</span> Eat a balanced diet rich in fruits, vegetables, whole grains, lean proteins, and dairy. Avoid foods that are high in sugar, salt, and unhealthy fats.</li>
                    <li><span class="highlight">Stay Hydrated:</span> Drink plenty of water to stay hydrated and support the increased blood volume in your body.</li>
                    <li><span class="highlight">Exercise:</span> Engage in regular, moderate exercise to maintain a healthy weight, improve circulation, and reduce stress. Always consult your healthcare provider before starting any exercise program.</li>
                    <li><span class="highlight">Avoid Harmful Substances:</span> Stay away from alcohol, tobacco, and recreational drugs. Limit caffeine intake and avoid exposure to harmful chemicals.</li>
                    <li><span class="highlight">Get Plenty of Rest:</span> Ensure you get enough sleep and rest to support your body’s increased demands during pregnancy.</li>
                    <li><span class="highlight">Manage Stress:</span> Practice relaxation techniques such as deep breathing, meditation, and prenatal yoga to manage stress levels.</li>
                    <li><span class="highlight">Educate Yourself:</span> Attend prenatal classes and read up on pregnancy, childbirth, and parenting to prepare yourself for the journey ahead.</li>
                </ul>
            </div>
        </section>
        
        <section id="contacts">
            <div class="col-12 text-center text-warning">
                <h2>Contacts</h2>
            </div>
            <div class="container section-content">
                <p>If you have any questions or need further information, please feel free to contact us:</p>
                <ul class="dos-donts-list">
                    <li>Email: info@smartmum-uganda.com</li>
                    <li>Phone: +256 777 453 157</li>
                    <li>Address: Muni University BIC, Arua, Uganda</li>
                </ul>
                <div class="col-12 text-center text-warning">
                    <h2>Useful Links</h2>
                </div>
                <div class="col-md-4 text-center text-light">
                    <ul class="social-media-list" style="list-style-type: none; padding: 0;">
                        <li><a class="social-media-link" href="https://www.instagram.com/smartmum2024/" style="font-size: 25px; text-decoration: none !important;"><i class="bi bi-twitter"></i> Twitter</a></li>
                        <li><a class="social-media-link" href="https://www.facebook.com/profile.php?id=61556397273416" style="font-size: 25px; text-decoration: none !important;"><i class="bi bi-facebook"></i> Facebook</a></li>
                        <li><a class="social-media-link" href="https://www.instagram.com/smartmum2024/" style="font-size: 25px; text-decoration: none !important;"><i class="bi bi-instagram"></i> Instagram</a></li>
                        <li><a class="social-media-link" href="https://www.linkedin.com/company/smart-mum-uganda/" style="font-size: 25px; text-decoration: none !important;"><i class="bi bi-linkedin"></i></i>  LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
  
        
    </div>
    <script src="../JS/add.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-B4/QFtb1GekPLkWBI+9Je9msR3hWtx9NVg8pveayQp56x+UPR0sAAt6Z9M8k9GVa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9B4BEnrI9T3mo1KNBgKJvX0vudXUpzY6h6p6dYVVoe0fQdxG5X4fCXd" crossorigin="anonymous"></script>
</body>
</html>
