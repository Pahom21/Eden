-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 12:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--
CREATE DATABASE `blog_db`;

USE `blog_db`;

CREATE TABLE `authors` (
  `userId` tinyint(4) NOT NULL,
  `fullname` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`userId`, `fullname`, `username`, `email`, `password`) VALUES
(1, 'Elvis ', 'elvis ', 'elviswahome.ew@gmail.com', '$2y$10$NeqnW7PRbByuUT2.8MiSbeJRShwkD.c49nEekyl2dvUdWNHDCnqBe'),
(2, 'Elvis Makara ', 'elvis ', 'elviswahome.ew@gmail.com', '$2y$10$ed3R6pXSAZNcXPeXvqvym.Zmxp7YJeuWWWUC4k2zo9wa2WyMu0Pc.');

-- --------------------------------------------------------

--
-- Table structure for table `main_table`
--

CREATE TABLE `main_table` (
  `ArticleId` int(11) NOT NULL,
  `Author_fullName` varchar(255) NOT NULL,
  `Article_Title` varchar(100) NOT NULL DEFAULT '',
  `Article_Text` longtext NOT NULL DEFAULT '"  "',
  `Publication_Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_table`
--

INSERT INTO `main_table` (`ArticleId`, `Author_fullName`, `Article_Title`, `Article_Text`, `Publication_Date`) VALUES
(1, 'Elvis Makara ', 'Understanding Taxation: A Comprehensive Overview', 'What Is Taxation?\r\nTaxation Refers To The Process Of Levying And Collecting Taxes From Individuals, Businesses, And Other Entities By A Governing Authority. Taxes Are Compulsory Payments Imposed On Citizens, Which Contribute To The Overall Functioning Of The Government And Its Various Initiatives. These Funds Are Utilized For Public Expenditure, Such As Education, Healthcare, Defense, And Infrastructure.\r\n\r\nTypes Of Taxes:\r\nA. Income Tax: One Of The Most Common Types Of Taxation, Income Tax Is Levied On An Individual\'s Earnings, Including Salaries, Wages, And Investment Gains. The Tax Rate Typically Varies Based On Income Brackets, With Higher Earners Facing Higher Tax Rates.\r\n\r\nB. Sales Tax: Sales Tax Is Imposed On The Purchase Of Goods And Services. It Is Usually A Percentage Of The Transaction Value And Is Collected By The Seller On Behalf Of The Government. Sales Tax Rates Can Vary Among Different Jurisdictions.\r\n\r\nC. Property Tax: Property Tax Is Assessed On The Value Of Real Estate Properties, Including Land, Buildings, And Homes. The Tax Revenue Generated Contributes To Local Government Funding And Services.\r\n\r\nD. Corporate Tax: Corporate Tax Is Levied On The Profits Of Businesses And Corporations. The Tax Rate Can Vary Based On Factors Such As The Size And Type Of The Company, As Well As The Jurisdiction In Which It Operates.\r\n\r\nE. Excise Tax: Excise Tax Is Imposed On Specific Goods Such As Tobacco, Alcohol, Gasoline, And Luxury Items. These Taxes Are Often Intended To Discourage The Consumption Of Certain Products And Generate Revenue Simultaneously.', '2023-07-08 09:25:56'),
(2, 'Isabel Makara ', 'Starting An Earrings Business: Sparkling Success In The Jewelry Industry', 'Introduction:\r\nEarrings Are Timeless Accessories That Have Captivated Individuals For Centuries. With Their Ability To Enhance Personal Style And Make A Fashion Statement, Earrings Have Become A Significant Part Of People\'s Wardrobes. If You Have A Passion For Jewelry And An Entrepreneurial Spirit, Starting An Earrings Business Can Be An Exciting Venture. In This Article, We Will Explore The Key Steps And Considerations For Launching A Successful Earrings Business.\r\n\r\nMarket Research:\r\nBefore Diving Into The Earrings Business, Conduct Thorough Market Research. Identify Your Target Audience, Understand Their Preferences, And Study The Latest Trends In The Jewelry Industry. Analyze Competitors To Identify Gaps And Opportunities In The Market That You Can Leverage. This Research Will Help You Develop A Unique Selling Proposition And Differentiate Your Earrings From Others.\r\n\r\nDefine Your Brand:\r\nDeveloping A Strong Brand Identity Is Crucial For Success In The Jewelry Industry. Consider Factors Such As The Style, Quality, And Price Range Of Your Earrings. Determine The Values And Aesthetics That Will Define Your Brand. Create A Compelling Brand Name, Logo, And Tagline That Resonate With Your Target Customers. Your Brand Should Evoke Emotions And Portray A Distinct Identity In The Market.\r\n\r\nSourcing Materials And Design:\r\nSelect High-quality Materials For Your Earrings That Align With Your Brand Image. Options Include Precious Metals Like Gold, Silver, Or Platinum, As Well As Alternative Materials Like Stainless Steel Or Brass. Consider Incorporating Gemstones, Pearls, Or Other Embellishments To Add Uniqueness To Your Designs. Collaborate With Skilled Artisans Or Jewelry Manufacturers To Bring Your Earring Designs To Life. Ensure That Your Designs Are Trendy, Versatile, And Appeal To Your Target Market.\r\n\r\nPricing And Profitability:\r\nPricing Your Earrings Appropriately Is Crucial For Maintaining Profitability. Consider Factors Such As Material Costs, Production Expenses, Overheads, And Desired Profit Margins. Research The Market To Determine Competitive Pricing While Considering The Perceived Value Of Your Earrings. Striking The Right Balance Between Affordability And Quality Will Attract Customers While Ensuring Sustainable Profitability For Your Business.\r\n\r\nSales And Distribution:\r\nDecide On Your Sales Channels And Distribution Strategy. Options Include Selling Earrings Through An Online Store, Physical Boutique, Or A Combination Of Both. Establish A User-friendly E-commerce Website With High-quality Product Images And Detailed Descriptions. Explore Partnerships With Local Retailers, Boutiques, Or Fashion Influencers To Expand Your Reach. Participate In Trade Shows, Exhibitions, Or Craft Fairs To Showcase Your Earrings To A Wider Audience.\r\n\r\nMarketing And Promotion:\r\nImplement A Comprehensive Marketing Strategy To Increase Brand Awareness And Drive Sales. Leverage Social Media Platforms Like Instagram, Facebook, And Pinterest To Showcase Your Earrings And Engage With Potential Customers. Develop A Content Strategy That Includes Captivating Visuals, Informative Blog Posts, And Video Tutorials To Highlight The Uniqueness Of Your Designs. Collaborate With Influencers Or Jewelry Enthusiasts To Gain Exposure And Endorsements. Implement Email Marketing Campaigns And Offer Incentives Such As Discounts Or Loyalty Programs To Encourage Repeat Purchases.\r\n\r\nCustomer Service And Feedback:\r\nProviding Exceptional Customer Service Is Crucial For Building A Loyal Customer Base. Offer A Seamless And Secure Online Shopping Experience, With Clear Communication And Prompt Responses To Customer Inquiries. Encourage Customers To Leave Reviews And Provide Feedback On Their Purchase Experience. Use Customer Feedback To Improve Your Products, Services, And Overall Customer Satisfaction.\r\n\r\nConclusion:\r\nStarting An Earrings Business Can Be An Exciting Journey For Jewelry Enthusiasts And Aspiring Entrepreneurs. With Careful Planning, A Strong Brand Identity, Quality Designs, And Effective Marketing Strategies, You Can Create A Thriving Earrings Business. Stay Attuned To The Latest Trends, Continuously Innovate Your Designs, And Provide Exceptional Customer Experiences To Establish A Strong Presence In The Competitive Jewelry Industry. Remember, Passion, Creativity, And A Commitment To Quality Will Be The Key Ingredients For Your Sparkling Success.', '2023-07-08 09:39:55'),
(3, 'Donald Ngure ', 'Startups: Fueling Innovation And Entrepreneurship', 'Startups are the lifeblood of innovation and entrepreneurship, driving economic growth and shaping industries. These agile and dynamic ventures are characterized by their innovative ideas, disruptive technologies, and ambitious founders who strive to create something new and impactful. In this article, we explore the world of startups, their significance, and the challenges they face in their quest for success.\r\n\r\nAt their core, startups are founded on a vision to solve a problem or meet an unfulfilled need in the market. They are fueled by passion, creativity, and a relentless drive to make a difference. Startups are often born out of an entrepreneur\'s desire to challenge the status quo and bring about positive change.\r\n\r\nOne of the key attributes of startups is their ability to embrace risk and uncertainty. Founders willingly take calculated risks, venturing into uncharted territories to pursue their visions. They understand that failure is an inherent part of the journey, and they view setbacks as learning opportunities. The startup culture encourages experimentation, adaptability, and continuous iteration to refine ideas and business models.\r\n\r\nIn addition to their innovative ideas, startups possess a distinct competitive advantage—their agility. Unlike large corporations burdened by bureaucracy and rigid processes, startups can swiftly respond to market dynamics. They can pivot their strategies, adapt to customer feedback, and quickly iterate their products or services. This flexibility allows startups to stay ahead in a rapidly changing business landscape.\r\n\r\nHowever, startups face numerous challenges on their path to success. Securing funding is often a significant hurdle. Many startups rely on external investments, such as angel investors, venture capital firms, or crowdfunding platforms, to fuel their growth. Convincing investors of the potential of their ideas and demonstrating a viable business model is critical for startups to attract the necessary financial resources.\r\n\r\nBuilding a talented team is another challenge. Startups require individuals with diverse skill sets who are passionate about the mission and willing to work in a dynamic and high-pressure environment. Finding and retaining top talent can be difficult, especially when competing against established companies with greater resources and brand recognition.\r\n\r\nMoreover, startups must navigate regulatory and legal frameworks, ensuring compliance while maintaining their innovative edge. Intellectual property protection, licensing agreements, and industry-specific regulations pose additional complexities for startups. Navigating these legal landscapes requires expert guidance and resources.\r\n\r\nDespite these challenges, startups have the potential to disrupt industries and transform the way we live and work. They have given rise to groundbreaking technologies, such as artificial intelligence, blockchain, and biotechnology, which are shaping the future. Startups also foster a culture of innovation that inspires larger organizations to adapt and evolve.\r\n\r\nIn conclusion, startups are the engines of innovation and entrepreneurship, propelling economic growth and societal progress. With their bold visions, resilience, and ability to navigate uncertainty, startups are rewriting the rules of business. As they continue to challenge norms, push boundaries, and create solutions, startups will remain at the forefront of driving positive change in our rapidly evolving world.', '2023-07-08 17:19:46'),
(4, 'Donald Ngure ', 'Startups: Fueling Innovation And Entrepreneurship', 'Startups are the lifeblood of innovation and entrepreneurship, driving economic growth and shaping industries. These agile and dynamic ventures are characterized by their innovative ideas, disruptive technologies, and ambitious founders who strive to create something new and impactful. In this article, we explore the world of startups, their significance, and the challenges they face in their quest for success.\r\n\r\nAt their core, startups are founded on a vision to solve a problem or meet an unfulfilled need in the market. They are fueled by passion, creativity, and a relentless drive to make a difference. Startups are often born out of an entrepreneur\'s desire to challenge the status quo and bring about positive change.\r\n\r\nOne of the key attributes of startups is their ability to embrace risk and uncertainty. Founders willingly take calculated risks, venturing into uncharted territories to pursue their visions. They understand that failure is an inherent part of the journey, and they view setbacks as learning opportunities. The startup culture encourages experimentation, adaptability, and continuous iteration to refine ideas and business models.\r\n\r\nIn addition to their innovative ideas, startups possess a distinct competitive advantage—their agility. Unlike large corporations burdened by bureaucracy and rigid processes, startups can swiftly respond to market dynamics. They can pivot their strategies, adapt to customer feedback, and quickly iterate their products or services. This flexibility allows startups to stay ahead in a rapidly changing business landscape.\r\n\r\nHowever, startups face numerous challenges on their path to success. Securing funding is often a significant hurdle. Many startups rely on external investments, such as angel investors, venture capital firms, or crowdfunding platforms, to fuel their growth. Convincing investors of the potential of their ideas and demonstrating a viable business model is critical for startups to attract the necessary financial resources.\r\n\r\nBuilding a talented team is another challenge. Startups require individuals with diverse skill sets who are passionate about the mission and willing to work in a dynamic and high-pressure environment. Finding and retaining top talent can be difficult, especially when competing against established companies with greater resources and brand recognition.\r\n\r\nMoreover, startups must navigate regulatory and legal frameworks, ensuring compliance while maintaining their innovative edge. Intellectual property protection, licensing agreements, and industry-specific regulations pose additional complexities for startups. Navigating these legal landscapes requires expert guidance and resources.\r\n\r\nDespite these challenges, startups have the potential to disrupt industries and transform the way we live and work. They have given rise to groundbreaking technologies, such as artificial intelligence, blockchain, and biotechnology, which are shaping the future. Startups also foster a culture of innovation that inspires larger organizations to adapt and evolve.\r\n\r\nIn conclusion, startups are the engines of innovation and entrepreneurship, propelling economic growth and societal progress. With their bold visions, resilience, and ability to navigate uncertainty, startups are rewriting the rules of business. As they continue to challenge norms, push boundaries, and create solutions, startups will remain at the forefront of driving positive change in our rapidly evolving world.', '2023-07-08 17:21:48'),
(5, 'Elvis Makara', 'BlackRock Investments: Empowering Financial Success', 'BlackRock Investments is a global investment management corporation that has emerged as a prominent player in the financial industry. With its vast expertise, cutting-edge technology, and commitment to delivering value to clients, BlackRock has established itself as a leader in the investment management space. In this article, we delve into the story of BlackRock, its investment philosophy, and its impact on the financial landscape.\r\n\r\nFounded in 1988, BlackRock has grown from a startup firm to become the world\'s largest asset manager, overseeing trillions of dollars in assets. The company\'s success can be attributed to its unwavering focus on meeting the diverse needs of its clients, which range from individual investors to institutional clients and governments.\r\n\r\nAt the core of BlackRock\'s investment approach is its belief in the power of long-term thinking and diversified portfolios. The company emphasizes the importance of asset allocation, risk management, and strategic planning to optimize investment outcomes. By leveraging its deep market insights and analytical capabilities, BlackRock helps clients navigate through complex financial landscapes and make informed investment decisions.\r\n\r\nOne of the key factors that sets BlackRock apart is its commitment to sustainability and responsible investing. The company recognizes the significance of environmental, social, and governance (ESG) factors in investment decisions. Through its ESG integration, BlackRock aims to generate long-term value while promoting sustainable practices and positive societal impact. This approach reflects a growing trend in the investment industry, where investors are increasingly seeking companies that align with their values and contribute to a more sustainable future.\r\n\r\nBlackRock\'s influence extends beyond its investment management services. The company plays an active role in shaping public policy, advocating for regulatory reforms, and engaging with companies on governance issues. BlackRock\'s voice carries weight in the corporate world, as its extensive holdings give it significant influence to drive positive change in corporate behavior and encourage responsible practices.\r\n\r\nIn recent years, BlackRock has also embraced technological advancements to enhance its investment capabilities. The company has invested heavily in data analytics, machine learning, and artificial intelligence to gain insights and identify investment opportunities. By harnessing the power of technology, BlackRock strives to deliver innovative solutions that provide value to its clients and help them achieve their financial goals.\r\n\r\nFurthermore, BlackRock recognizes the importance of education and empowering individuals to take control of their financial future. The company provides educational resources, tools, and insights to help investors make informed decisions and build robust investment portfolios. Through its educational initiatives, BlackRock aims to promote financial literacy and empower individuals to achieve long-term financial success.\r\n\r\nAs BlackRock continues to evolve and adapt to changing market dynamics, it remains committed to its core principles of transparency, integrity, and client-centricity. The company\'s strong ethical framework and dedication to excellence have earned it the trust of clients worldwide.\r\n\r\nIn conclusion, BlackRock Investments has emerged as a global powerhouse in the investment management industry. With its long-term approach, commitment to sustainability, and embrace of technology, BlackRock is at the forefront of driving positive change and empowering individuals and institutions to achieve financial success. As the financial landscape continues to evolve, BlackRock\'s leadership and innovative solutions position it to shape the future of investment management and contribute to a more prosperous and sustainable world', '2023-07-08 17:37:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `main_table`
--
ALTER TABLE `main_table`
  ADD PRIMARY KEY (`ArticleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `userId` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_table`
--
ALTER TABLE `main_table`
  MODIFY `ArticleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
