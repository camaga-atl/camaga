<?php
$title = "CAMAGA";
$pageTitle = "CAMAGA";
$description = "Home page for CAMAGA - Carnatic Music Association of Georgia";
?>
<!DOCTYPE html>
<html lang="en">
<?php
define("CAMAGA_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/");
include(CAMAGA_ROOT . "common/html_head.php");
?>

<body id="home">
   <div class="wrapper">
      <?php
      include(CAMAGA_ROOT . "common/site_header.php");
      ?>
      <div id="content">

         <!-- camaga 25 year celebrations start -->
         <h2>Upcoming Events</h2>
            <div class="list-concert-box">
               <h3><a href="events#camaga-celebrates-25th-anniversary">CAMAGA celebrates 25th anniversary</a></h3>
               <p>Sat Sep 16, 2023</p>
               <p>
                  <a target="_blank" href="http://maps.google.com/?q=Hindu Temple Of Atlanta">
                  Hindu Temple of Atlanta
                  </a>
               </p>
               <p>
                  CAMAGA is proud to announce  the Silver jubilee celebrations to commemorate the completion of 25 years of its service to the music lovers. 
                  Local artists perform (Vocal and Dance) with special compositions including the Trinity and a thematic presentation of Papanasam SIvan's <em>Sri Rama Charitha Geetham</em> - the Ramayana epic sung in 24 stanzas in 24 ragas. 
               </p>
               <p>
                  Stay tuned for details
               </p> 
            </div>
         <!-- camaga 25 year celebrations end -->

         <!-- upcoming concerts START  -->
         <?php
            include( CAMAGA_ROOT . "concerts/upcoming.php");
         ?>
         <!-- upcoming concerts END -->
         <h2>CAMAGA in Pictures</h2>
         <div id="gallery" >
            <img src="data/concerts/201904271600/thumbs/001.jpg"
                  data-image="data/concerts/201904271600/001.jpg"
                  data-description="Apr 27, 2019 - Karthik Narayanan, Vijayalakshmi Subramaniam and Ranjini Ramakrishnan" />
            <img src="data/concerts/201904271600/thumbs/002.jpg"
                  data-image="data/concerts/201904271600/002.jpg"
                  data-description="Apr 27, 2019 - Vijayalakshmi Subramaniam" />
            <img src="data/concerts/201905051630/thumbs/001.jpg"
                  data-image="data/concerts/201905051630/001.jpg"
                  data-description="May 5, 2019 - Srivani Yella" />
            <img src="data/concerts/201904131600/thumbs/002.jpg"
                  data-image="data/concerts/201904131600/002.jpg"
                  data-description="Apr 13, 2019 - Amrutha Venkatesh" />
            <img src="data/concerts/201904271600/thumbs/003.jpg"
                  data-image="data/concerts/201904271600/003.jpg"
                  data-description="Apr 27, 2019 - Ranjini Ramakrishnan" />
            <img src="data/concerts/201703251600/thumbs/IMG_0001.jpg"
               data-image="data/concerts/201703251600/IMG_0001.jpg"
               data-description="Mar 25, 2017, Thanjavur K Murugaboopathi. SundarKumar, Kunnakudi M.Balamuralikrishna & H.N.Bhaskar" />
            <img src="data/concerts/201703251600/thumbs/IMG_0002.jpg"
               data-image="data/concerts/201703251600/IMG_0002.jpg"
               data-description="Mar 25, 2017, SundarKumar &, Kunnakudi M.Balamuralikrishna" />
            <img src="data/concerts/201703251600/thumbs/IMG_0003.jpg"
               data-image="data/concerts/201703251600/IMG_0003.jpg"
               data-description="Mar 25, 2017, Thanjavur K Murugaboopathi & SundarKumar" />
            <img src="data/concerts/201703251600/thumbs/IMG_0005.jpg"
               data-image="data/concerts/201703251600/IMG_0005.jpg"
               data-description="Mar 25, 2017, H.N.Bhaskar" />
            <img src="data/concerts/201703251600/thumbs/IMG_0006.jpg"
               data-image="data/concerts/201703251600/IMG_0006.jpg"
               data-description="Mar 25, 2017, Kunnakudi M.Balamuralikrishna" />
            <img src="data/concerts/201703251600/thumbs/IMG_0007.jpg"
               data-image="data/concerts/201703251600/IMG_0007.jpg"
               data-description="Mar 25, 2017, Kunnakudi M.Balamuralikrishna" />
            <img src="data/concerts/201703251600/thumbs/IMG_0008.jpg"
               data-image="data/concerts/201703251600/IMG_0008.jpg"
               data-description="Mar 25, 2017,  Kunnakudi M.Balamuralikrishna & H.N.Bhaskar" />
            <img src="data/concerts/201810271600/thumbs/001.jpg"
               data-image="data/concerts/201810271600/001.jpg"
               data-description="Oct 27, 2018 - B.Sivaraman, Gayathri Venkataraghavan and Mysore V.Srikanth" />
            <img src="data/concerts/201810271600/thumbs/002.jpg"
               data-image="data/concerts/201810271600/002.jpg"
               data-description="Oct 27, 2018 - Gayathri Venkataraghavan" />
            <img src="data/concerts/201810271600/thumbs/003.jpg"
               data-image="data/concerts/201810271600/003.jpg"
               data-description="Oct 27, 2018 - Mysore V.Srikanth" />
            <img src="data/concerts/201810271600/thumbs/004.jpg"
               data-image="data/concerts/201810271600/004.jpg"
               data-description="Oct 27, 2018 - B.Sivaraman" />
            <img src="data/concerts/201810271600/thumbs/005.jpg"
               data-image="data/concerts/201810271600/005.jpg"
               data-description="Oct 27, 2018 - Gayathri Venkataraghavan" />
            <img src="data/concerts/201810271600/thumbs/006.jpg"
               data-image="data/concerts/201810271600/006.jpg"
               data-description="Oct 27, 2018 - Mysore V.Srikanth" />
            <img src="data/concerts/201810271600/thumbs/007.jpg"
               data-image="data/concerts/201810271600/007.jpg"
               data-description="Oct 27, 2018 - B.Sivaraman" />
            <img src="data/concerts/201810271600/thumbs/008.jpg"
               data-image="data/concerts/201810271600/008.jpg"
               data-description="Oct 27, 2018 - B.Sivaraman, Gayathri Venkataraghavan and Mysore V.Srikanth" />
            <img src="data/concerts/201810061600/thumbs/001.jpg"
               data-image="data/concerts/201810061600/001.jpg"
               data-description="Oct 6, 2018 - Srimushnam Raja Rao, Vittal Ramamurthy, VVS Murari and KV Gopalakrishnan" />
            <img src="data/concerts/201810061600/thumbs/002.jpg"
               data-image="data/concerts/201810061600/002.jpg"
               data-description="Oct 6, 2018 - Vittal Ramamurthy" />
            <img src="data/concerts/201810061600/thumbs/003.jpg"
               data-image="data/concerts/201810061600/003.jpg"
               data-description="Oct 6, 2018 - VVS Murari" />
            <img src="data/concerts/201810061600/thumbs/004.jpg"
               data-image="data/concerts/201810061600/004.jpg"
               data-description="Oct 6, 2018 - Srimushnam Raja Rao" />
            <img src="data/concerts/201810061600/thumbs/005.jpg"
               data-image="data/concerts/201810061600/005.jpg"
               data-description="Oct 6, 2018 - KV Gopalakrishnan" />
            <img src="data/concerts/201810061600/thumbs/006.jpg"
               data-image="data/concerts/201810061600/006.jpg"
               data-description="Oct 6, 2018 - Srimushnam Raja Rao, Vittal Ramamurthy, VVS Murari and KV Gopalakrishnan" />
            <img src="data/concerts/201809081600/thumbs/001.jpg"
               data-image="data/concerts/201809081600/001.jpg"
               data-description="Sep 8, 2018 - Thanjavur Murugaboopathi, Bharat Sundar, and Rajeev Mukundan" />
            <img src="data/concerts/201809081600/thumbs/002.jpg"
               data-image="data/concerts/201809081600/002.jpg"
               data-description="Sep 8, 2018 - Bharat Sundar" />
            <img src="data/concerts/201809081600/thumbs/003.jpg"
               data-image="data/concerts/201809081600/003.jpg"
               data-description="Sep 8, 2018 - Rajeev Mukundan" />
            <img src="data/concerts/201809081600/thumbs/004.jpg"
               data-image="data/concerts/201809081600/004.jpg"
               data-description="Sep 8, 2018 - Thanjavur K. Murugaboopathi" />
            <img src="data/concerts/201809081600/thumbs/005.jpg"
               data-image="data/concerts/201809081600/005.jpg"
               data-description="Sep 8, 2018 - Bharat Sundar" />
            <img src="data/concerts/201809081600/thumbs/006.jpg"
               data-image="data/concerts/201809081600/006.jpg"
               data-description="Sep 8, 2018 - Rajeev Mukundan" />
            <img src="data/concerts/201809081600/thumbs/007.jpg"
               data-image="data/concerts/201809081600/007.jpg"
               data-description="Sep 8, 2018 - Thanjavur K. Murugaboopathi" />
            <img src="data/concerts/201804071630/thumbs/001.jpg"
               data-image="data/concerts/201804071630/001.jpg"
               data-description="Apr 7, 2018 - Thanjavur Murugaboopathi, K.N.Shashikiran, P.Ganesh and VVS Murari" />
            <img src="data/concerts/201804071630/thumbs/002.jpg"
               data-image="data/concerts/201804071630/002.jpg"
               data-description="Apr 7, 2018 - K.N.Shashikiran, P.Ganesh" />
            <img src="data/concerts/201804071630/thumbs/003.jpg"
               data-image="data/concerts/201804071630/003.jpg"
               data-description="Apr 7, 2018 - VVS Murari" />
            <img src="data/concerts/201804071630/thumbs/004.jpg"
               data-image="data/concerts/201804071630/004.jpg"
               data-description="Apr 7, 2018 - Thanjavur Murugaboopathi" />
            <img src="data/concerts/201804071630/thumbs/006.jpg"
               data-image="data/concerts/201804071630/006.jpg"
               data-description="Apr 7, 2018 - Thanjavur Murugaboopathi, K.N.Shashikiran, P.Ganesh and VVS Murari" />               
            <img src="data/concerts/201703251600/thumbs/IMG_0009.jpg"
               data-image="data/concerts/201703251600/IMG_0009.jpg"
               data-description="Mar 25, 2017,  Kunnakudi M.Balamuralikrishna & H.N.Bhaskar" />
            <img src="data/concerts/201704011500/thumbs/IMG_0001.jpg"
               data-image="data/concerts/201704011500/IMG_0001.jpg"
               data-description="Apr 1, 2017, Harikatha - N.C.Bharadwaj, Suchitra Balasubramanian & V.V.S.Murari" />
            <img src="data/concerts/201704011500/thumbs/IMG_0002.jpg"
               data-image="data/concerts/201704011500/IMG_0002.jpg"
               data-description="Apr 1, 2017, Harikatha - Suchitra Balasubramanian" />
            <img src="data/concerts/201704011500/thumbs/IMG_0003.jpg"
               data-image="data/concerts/201704011500/IMG_0003.jpg"
               data-description="Apr 1, 2017, Harikatha - Suchitra Balasubramanian" />
            <img src="data/concerts/201704011500/thumbs/IMG_0004.jpg"
               data-image="data/concerts/201704011500/IMG_0004.jpg"
               data-description="Apr 1, 2017, Harikatha - Suchitra Balasubramanian" />
            <img src="data/concerts/201704011500/thumbs/IMG_0005.jpg"
               data-image="data/concerts/201704011500/IMG_0005.jpg"
               data-description="Apr 1, 2017, V.V.S.Murari" />
            <img src="data/concerts/201704011500/thumbs/IMG_0008.jpg"
               data-image="data/concerts/201704011500/IMG_0008.jpg"
               data-description="Apr 1, 2017, N.C.Bharadwaj" />
            <img src="data/concerts/201704011500/thumbs/IMG_0012.jpg"
               data-image="data/concerts/201704011500/IMG_0012.jpg"
               data-description="Apr 1, 2017, Harikatha - Suchitra Balasubramanian & V.V.S.Murari" />
            <img src="data/concerts/201704011500/thumbs/IMG_0014.jpg"
               data-image="data/concerts/201704011500/IMG_0014.jpg"
               data-description="Apr 1, 2017, Harikatha - Suchitra Balasubramanian" />
            <img src="data/concerts/201704011500/thumbs/IMG_0016.jpg"
               data-image="data/concerts/201704011500/IMG_0016.jpg"
               data-description="Apr 1, 2017, Harikatha - N.C.Bharadwaj, Suchitra Balasubramanian & V.V.S.Murari" />
            <img src="data/concerts/201704011500/thumbs/IMG_0018.jpg"
               data-image="data/concerts/201704011500/IMG_0018.jpg"
               data-description="Apr 1, 2017, B.Sivaraman, Shashikiran, Ganesh, Rengarajan, Shenkottai Hariharasubramanian, Manikandan & V.V.S.Murari" />
            <img src="data/concerts/201704011500/thumbs/IMG_0019.jpg"
               data-image="data/concerts/201704011500/IMG_0019.jpg"
               data-description="Apr 1, 2017, B.Sivaraman, Shashikiran, Ganesh, Rengarajan, Shenkottai Hariharasubramanian, Manikandan & V.V.S.Murari" />
            <img src="data/concerts/201704011500/thumbs/IMG_0020.jpg"
               data-image="data/concerts/201704011500/IMG_0020.jpg"
               data-description="Apr 1, 2017, B.Sivaraman, Shashikiran, Ganesh, Rengarajan, Shenkottai Hariharasubramanian, Manikandan & V.V.S.Murari" />
            <img src="data/concerts/201704011500/thumbs/IMG_0021.jpg"
               data-image="data/concerts/201704011500/IMG_0021.jpg"
               data-description="Apr 1, 2017, Shashikiran, Ganesh, Rengarajan & Shenkottai Hariharasubramanian" />
            <img src="data/concerts/201704011500/thumbs/IMG_0023.jpg"
               data-image="data/concerts/201704011500/IMG_0023.jpg"
               data-description="Apr 1, 2017, Shashikiran, Ganesh, Rengarajan & Shenkottai Hariharasubramanian" />
            <img src="data/concerts/201704011500/thumbs/IMG_0025.jpg"
               data-image="data/concerts/201704011500/IMG_0025.jpg"
               data-description="Apr 1, 2017, Ganesh, Rengarajan, Shenkottai Hariharasubramanian, Manikandan & V.V.S.Murari" />
            <img src="data/concerts/201704011500/thumbs/IMG_0026.jpg"
               data-image="data/concerts/201704011500/IMG_0026.jpg"
               data-description="Apr 1, 2017, B.Sivaraman, Shashikiran, Ganesh, Rengarajan, Shenkottai Hariharasubramanian" />
            <img src="data/concerts/201704011500/thumbs/IMG_0027.jpg"
               data-image="data/concerts/201704011500/IMG_0027.jpg"
               data-description="Apr 1, 2017, B.Sivaraman, Shashikiran, Ganesh, Rengarajan, Shenkottai Hariharasubramanian, Manikandan & V.V.S.Murari" />
            <img src="data/concerts/201903231600/thumbs/002.jpg"
               data-image="data/concerts/201903231600/002.jpg"
               data-description="Mar 23, 2019 - Thanjavur Murugaboopathy, Sherthala K.N.Renganatha Sarma and B.U.Ganesh Prasad" />
            <img src="data/concerts/201905051630/thumbs/003.jpg"
                  data-image="data/concerts/201905051630/003.jpg"
                  data-description="May 5, 2019 - Ram Sriram" />
            <img src="data/concerts/201904271600/thumbs/006.jpg"
                  data-image="data/concerts/201904271600/006.jpg"
                  data-description="Apr 27, 2019 - Vijayalakshmi Subramaniam" />
            <img src="data/concerts/201905051630/thumbs/004.jpg"
                  data-image="data/concerts/201905051630/004.jpg"
                  data-description="May 5, 2019 - Srivani Yella" />
            <img src="data/concerts/201904271600/thumbs/002.jpg"
                  data-image="data/concerts/201904271600/002.jpg"
                  data-description="Apr 27, 2019 - Vijayalakshmi Subramaniam" />
            <img src="data/concerts/201904131600/thumbs/006.jpg"
                  data-image="data/concerts/201904131600/006.jpg"
                  data-description="Apr 13, 2019 - Arjun Ganesh" />
            <img src="data/concerts/201904061600/thumbs/002.jpg"
                  data-image="data/concerts/201904061600/002.jpg"
                  data-description="Apr 6, 2019 - V.K.Manimaran" />
            <img src="data/concerts/201904271600/thumbs/004.jpg"
                  data-image="data/concerts/201904271600/004.jpg"
                  data-description="Apr 27, 2019 - Karthik Narayanan" />
            <img src="data/concerts/201904131600/thumbs/005.jpg"
                  data-image="data/concerts/201904131600/005.jpg"
                  data-description="Apr 13, 2019 - Arjun Ganesh" />
            <img src="data/concerts/201905051630/thumbs/002.jpg"
                  data-image="data/concerts/201905051630/002.jpg"
                  data-description="May 5, 2019 - Ram Sriram & Srivani Yella" />
            <img src="data/concerts/201904061600/thumbs/004.jpg"
                  data-image="data/concerts/201904061600/004.jpg"
                  data-description="Apr 6, 2019 - Poongulam Subramaniam" />
            <img src="data/concerts/201904271600/thumbs/005.jpg"
                  data-image="data/concerts/201904271600/005.jpg"
                  data-description="Apr 27, 2019 - Vijayalakshmi Subramaniam" />
            <img src="data/concerts/201904271600/thumbs/006.jpg"
                  data-image="data/concerts/201904271600/006.jpg"
                  data-description="Apr 27, 2019 - Vijayalakshmi Subramaniam" />
            <img src="data/concerts/201904131600/thumbs/004.jpg"
                  data-image="data/concerts/201904131600/004.jpg"
                  data-description="Apr 13, 2019 - Rajeev Mukundan" />
            <img src="data/concerts/201903231600/thumbs/001.jpg"
                  data-image="data/concerts/201903231600/001.jpg"
                  data-description="Mar 23, 2019 - Thanjavur Murugaboopathy, Sherthala K.N.Renganatha Sarma and B.U.Ganesh Prasad" />
            <img src="data/concerts/201904061600/thumbs/001.jpg"
                  data-image="data/concerts/201904061600/001.jpg"
                  data-description="Apr 6, 2019 - Poongulam Subramaniam, V.K.Manimaran and B.Raghavendra Rao" />
            <img src="data/concerts/201904271600/thumbs/007.jpg"
                  data-image="data/concerts/201904271600/007.jpg"
                  data-description="Apr 27, 2019 - Karthik Narayanan, Vijayalakshmi Subramaniam and Ranjini Ramakrishnan" />
            <img src="data/concerts/201904131600/thumbs/001.jpg"
                  data-image="data/concerts/201904131600/001.jpg"
                  data-description="Apr 13, 2019 - Arjun Ganesh, Amrutha Venkatesh and Rajeev Mukundan" />
            <img src="data/concerts/201904131600/thumbs/002.jpg"
                  data-image="data/concerts/201904131600/002.jpg"
                  data-description="Apr 13, 2019 - Amrutha Venkatesh" />
            <img src="data/concerts/201904131600/thumbs/003.jpg"
                  data-image="data/concerts/201904131600/003.jpg"
                  data-description="Apr 13, 2019 - Arjun Ganesh" />
            <img src="data/concerts/201904131600/thumbs/004.jpg"
                  data-image="data/concerts/201904131600/004.jpg"
                  data-description="Apr 13, 2019 - Rajeev Mukundan" />
            <img src="data/concerts/201904131600/thumbs/005.jpg"
                  data-image="data/concerts/201904131600/005.jpg"
                  data-description="Apr 13, 2019 - Arjun Ganesh" />
            <img src="data/concerts/201904131600/thumbs/006.jpg"
                  data-image="data/concerts/201904131600/006.jpg"
                  data-description="Apr 13, 2019 - Arjun Ganesh" />
            <img src="data/concerts/201904061600/thumbs/001.jpg"
                  data-image="data/concerts/201904061600/001.jpg"
                  data-description="Apr 6, 2019 - Poongulam Subramaniam, V.K.Manimaran and B.Raghavendra Rao" />
            <img src="data/concerts/201904061600/thumbs/002.jpg"
                  data-image="data/concerts/201904061600/002.jpg"
                  data-description="Apr 6, 2019 - V.K.Manimaran" />
            <img src="data/concerts/201604301600/thumbs/01.jpg"
               data-image="data/concerts/201604301600/01.jpg"
               data-description="Apr 30, 2016, Vinod Seetharaman, Padma Sugavanam & Kamalakiran Vinjamuri" />
`            <img src="data/concerts/201604301600/thumbs/02.jpg"
               data-image="data/concerts/201604301600/02.jpg"
               data-description="Apr 30, 2016, Padma Sugavanam" />
            <img src="data/concerts/201604301600/thumbs/03.jpg"
               data-image="data/concerts/201604301600/03.jpg"
               data-description="Apr 30, 2016, Kamalakiran Vinjamuri" />
            <img src="data/concerts/201604301600/thumbs/04.jpg"
               data-image="data/concerts/201604301600/04.jpg"
               data-description="Apr 30, 2016, Vinod Seetharaman" />
            <img src="data/concerts/201604301600/thumbs/05.jpg"
               data-image="data/concerts/201604301600/05.jpg"
               data-description="Apr 30, 2016, Vinod Seetharaman & Padma Sugavanam" />
            <img src="data/events/201604090900/thumbs/debate1.JPG"
               data-image="data/events/201604090900/thumbs/debate1.JPG"
               data-description="Apr 9, 2016, Shruthi Santhanam, Nitheyaa Shree & Shashank Ganeshan during the Carnatic Mela debate" />
            <img src="data/events/201604090900/thumbs/debate2JPG"
               data-image="data/events/201604090900/thumbs/debate2.JPG"
               data-description="Apr 9, 2016, Smriti Suresh, Shree Varshney & Aditya Krishnaswamy during the Carnatic Mela debate" />
            <img src="data/events/201604090900/thumbs/debate3.JPG"
               data-image="data/events/201604090900/thumbs/debate3.JPG"
               data-description="Apr 9, 2016, Shruthi Santhanam, Nitheyaa Shree & Shashank Ganeshan during the Carnatic Mela debate" />
            <img src="data/concerts/201604091405/thumbs/Shivaani_Aditya_Tejas.png"  		data-image="data/concerts/201604091405/Shivaani_Aditya_Tejas.png"
               data-description="Apr 9, 2016, Tejas Nagendra, Shivaani Komanduri & Aditya Krishnaswamy " />
            <img src="data/concerts/201604091430/thumbs/Aishwarya_Raghavendra_Sriram_Sundar_2.JPG"  		data-image="data/concerts/201604091430/Aishwarya_Raghavendra_Sriram_Sundar_2.JPG"
               data-description="Apr 9, 2016, Ram Sriram, N.Sundar, S. Aishwarya & B.V.Raghavendra" />
            <img src="data/concerts/201604091430/thumbs/Aishwarya_Raghavendra_Sriram_Sundar_Smitha.JPG"  		data-image="data/concerts/201604091430/Aishwarya_Raghavendra_Sriram_Sundar_Smitha.JPG"
               data-description="Apr 9, 2016, Ram Sriram, N.Sundar, S. Aishwarya, B.V.Raghavendra & Smitha Madhav" />
            <img src="data/concerts/201604091630/thumbs/CarnaticaBros_Raghavendra_Vaidyanathan_GuruPrasad_SmithaMadhav.JPG"  		data-image="data/concerts/201604091630/CarnaticaBros_Raghavendra_Vaidyanathan_GuruPrasad_SmithaMadhav.JPG"
               data-description="Apr 9, 2016, Ram Sriram, N.Sundar, Carnatic Brothers, B.V.Raghavendra & Smitha Madhav" />
            <img src="data/concerts/201604021600/thumbs/IMG_0160.JPG"
               data-image="data/concerts/201604021600/IMG_0160.JPG"
               data-description="Apr 2, 2016, Thanjavur Murugabhoopathy, Guru Prasad, Aruna Sairam and B.Raghavendra Rao" />
            <img src="data/concerts/201603271600/thumbs/01.jpg"
               data-image="data/concerts/201603271600/01.jpg"
               data-description="Mar 27, 2016, Ram Sriram, Uma, Radhika and Prasad Mantraratnam" />
            <img src="data/concerts/201603271600/thumbs/02.jpg"
               data-image="data/concerts/201603271600/02.jpg"
               data-description="Mar 27, 2016, Chinmaya Sisters - Uma & Radhika" />
            <img src="data/concerts/201603271600/thumbs/03.jpg"
               data-image="data/concerts/201603271600/03.jpg"
               data-description="Mar 27, 2016, Uma of Cinmaya Sisters" />
            <img src="data/concerts/201603271600/thumbs/04.jpg"
               data-image="data/concerts/201603271600/04.jpg"
               data-description="Mar 27, 2016,  Radhika of Chinmaya Sisters" />
            <img src="data/concerts/201603271600/thumbs/05.jpg"
               data-image="data/concerts/201603271600/05.jpg"
               data-description="Mar 27, 2016 - Prasad Mantraratnam" />
            <img src="data/concerts/201603271600/thumbs/06.jpg"
               data-image="data/concerts/201603271600/06.jpg"
               data-description="Mar 27, 2016 - Ram Sriram" />
            <img src="data/concerts/201603271600/thumbs/07.jpg"
               data-image="data/concerts/201603271600/07.jpg"
               data-description="Mar 27, 2016 - Ram Sriram, Uma, Radhika and Prasad Mantraratnam" />
            <img src="data/concerts/201603271600/thumbs/08.jpg"
               data-image="data/concerts/201603271600/08.jpg"
               data-description="Mar 27, 2016 - Uma of Chinmaya Sisters" />
            <img src="data/concerts/201603271600/thumbs/09.jpg"
               data-image="data/concerts/201603271600/09.jpg"
               data-description="Mar 27, 2016 - Ram Sriram" />
            <img src="data/concerts/201603271600/thumbs/10.jpg"
               data-image="data/concerts/201603271600/10.jpg"
               data-description="Mar 27, 2016 - Prasad Mantraratnam" />
            <img src="data/concerts/201603271600/thumbs/11.jpg"
               data-image="data/concerts/201603271600/11.jpg"
               data-description="Mar 27, 2016 - Ram Sriram, Uma, Radhika and Prasad Mantraratnam" />
            <img src="data/concerts/201603271600/thumbs/12.jpg"
               data-image="data/concerts/201603271600/12.jpg"
               data-description="Mar 27, 2016 - Prasad Mantraratnam" />
            <img src="data/concerts/201603271600/thumbs/13.jpg"
               data-image="data/concerts/201603271600/13.jpg"
               data-description="Mar 27, 2016 - Ram Sriram" />
            <img src="data/concerts/201603271600/thumbs/14.jpg"
               data-image="data/concerts/201603271600/14.jpg"
               data-description="Mar 27, 2016 - Prasad Mantraratnam" />
            <img src="data/concerts/201603271600/thumbs/15.jpg"
               data-image="data/concerts/201603271600/15.jpg"
               data-description="Mar 27, 2016 - Chinmaya Sisters - Uma & Radhika" />
            <img src="data/concerts/201603131600/thumbs/IMG_0002.jpg"
               data-image="data/concerts/201603131600/IMG_0002.jpg"
               data-description="Mar 13, 2016, Sikkil Gurucharan" />
            <img src="data/concerts/201603131600/thumbs/IMG_0008.jpg"
               data-image="data/concerts/201603131600/IMG_0008.jpg"
               data-description="Mar 13, 2016, V.Sanjeev" />
            <img src="data/concerts/201603131600/thumbs/IMG_0011.jpg"
               data-image="data/concerts/201603131600/IMG_0011.jpg"
               data-description="Mar 13, 2016, Sikkil Gurucharan" />
            <img src="data/concerts/201603131600/thumbs/IMG_0016.jpg"
               data-image="data/concerts/201603131600/IMG_0016.jpg"
               data-description="Mar 13, 2016, Patri Satish Kumar, Sikkil Gurucharan & V.Sanjeev" />
            <img src="data/concerts/201603131600/thumbs/IMG_0023.jpg"
               data-image="data/concerts/201603131600/IMG_0023.jpg"
               data-description="Mar 13, 2016, Patri Satish Kumar" />
            <img src="data/concerts/201603131600/thumbs/IMG_0027.jpg"
               data-image="data/concerts/201603131600/IMG_0027.jpg"
               data-description="Mar 13, 2016, Patri Satish Kumar, Sikkil Gurucharan & V.Sanjeev" />                  
            <img src="data/concerts/201904271600/thumbs/001.jpg"
                  data-image="data/concerts/201904271600/001.jpg"
                  data-description="Apr 27, 2019 - Karthik Narayanan, Vijayalakshmi Subramaniam and Ranjini Ramakrishnan" />
            <img src="data/concerts/201904061600/thumbs/003.jpg"
                  data-image="data/concerts/201904061600/003.jpg"
                  data-description="Apr 6, 2019 - B.Raghavendra Rao" />
            <img src="data/concerts/201904061600/thumbs/004.jpg"
                  data-image="data/concerts/201904061600/004.jpg"
                  data-description="Apr 6, 2019 - Poongulam Subramaniam" />
            <img src="data/concerts/201903231600/thumbs/001.jpg"
                  data-image="data/concerts/201903231600/001.jpg"
                  data-description="Mar 23, 2019 - Thanjavur Murugaboopathy, Sherthala K.N.Renganatha Sarma and B.U.Ganesh Prasad" />
            <img src="data/concerts/201903231600/thumbs/002.jpg"
                  data-image="data/concerts/201903231600/002.jpg"
                  data-description="Mar 23, 2019 - Thanjavur Murugaboopathy, Sherthala K.N.Renganatha Sarma and B.U.Ganesh Prasad" />
         </div>
         <br/></br/>
         <div class="push"></div>      
      </div>

      <script src='thirdparty/unitegallery/unitegallery-master/package/unitegallery/js/unitegallery.min.js'></script>
      <script src='thirdparty/unitegallery/unitegallery-master/package/unitegallery/themes/compact/ug-theme-compact.js'></script>
      <script type="text/javascript">
         jQuery(document).ready(function(){
            jQuery("#gallery").unitegallery({
               gallery_theme: "compact",
               gallery_min_width: 150,
               slider_scale_mode: "down",
               theme_hide_panel_under_width: 4000,
               slider_enable_text_panel: true
            });
         });
      </script>

   </body>
</html>