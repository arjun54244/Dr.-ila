-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2025 at 11:59 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u240393233_ila`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_alt_tag` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `short_description`, `image`, `image_alt_tag`, `description`, `slug`, `meta_title`, `meta_desc`, `tags`, `status`, `created_at`, `updated_at`) VALUES
(23, 'A Guide to Healthy Pregnancy', 'Pregnancy is a beautiful journey, but it also comes with many questions and concerns. Taking care of yourself during these nine months is essential for your health and your baby’s well-being.', 'blogs/01JQ3HAH85XYQ2BAD7ZAEM8132.png', 'A Guide to Healthy Pregnancy', '<p>Pregnancy is a beautiful journey, but it also comes with many questions and concerns. Taking care of yourself during these nine months is essential for your health and your baby’s well-being. Here are some simple and effective tips to ensure a healthy pregnancy.<br><br><br>1. Eat a Nutritious Diet<br>Your baby gets all its nutrients from you, so eating a balanced diet is crucial. Include:<br><br>●	Fruits and vegetables<br>●	Whole grains<br>●	Protein sources like eggs, fish, and lean meats<br>●	Dairy products for calcium<br>●	Plenty of water to stay hydrated<br><br>Avoid raw seafood, unpasteurized dairy, and too much caffeine or sugary foods.<br><br>2. Take Prenatal Vitamins<br><br>Prenatal vitamins, especially folic acid, iron, and calcium, support your baby’s development and prevent birth defects. Consult your doctor to choose the right supplements.<br><br>3. Stay Active<br><br>Regular, gentle exercise like walking, swimming, or prenatal yoga can improve circulation, reduce stress, and prepare your body for labor. However, avoid high-impact activities and consult your doctor before starting any exercise routine. For expert guidance on prenatal care, visit the best gynecology in Ghaziabad.<br><br><br>4. Get Enough Rest<br><br>Your body is working hard to grow a baby, so rest is essential. Aim for 7-9 hours of sleep each night, and take short naps if needed. Sleeping on your left side can improve blood flow to the baby.<br><br>5. Avoid Harmful Substances<br><br>Stay away from alcohol, smoking, and drugs, as they can harm your baby’s development. Limit caffeine intake and avoid exposure to toxic chemicals.<br><br>6. Manage Stress<br><br>Pregnancy can be stressful, but relaxation techniques like meditation, deep breathing, and spending time with loved ones can help. Talking to a counselor or joining a support group may also be beneficial. If you\'re looking for expert guidance and care, consider consulting the best gynecology in Ghaziabad for personalized support and advice.<br><br>7. Attend Regular Check-Ups<br><br>Visiting your doctor regularly ensures that your pregnancy is progressing well. These visits help monitor your baby’s growth, detect any complications early, and provide necessary vaccinations or tests.<br><br>8. Educate Yourself<br><br>Read about pregnancy, childbirth, and newborn care to feel more confident and prepared. Taking prenatal classes can also help you understand labor, breastfeeding, and postpartum care.<br><br>9. Listen to Your Body<br><br>If you experience unusual symptoms like severe pain, heavy bleeding, or reduced fetal movement, contact your doctor immediately. Always trust your instincts when it comes to your health and your baby’s well-being.<br><br><br><br><br>FAQs<br><br>1. What foods should I avoid during pregnancy?<br><br>Avoid raw seafood, undercooked meats, unpasteurized dairy, excessive caffeine, alcohol, and processed junk food. These can pose risks to your baby’s health.<br><br>2. How much weight should I gain during pregnancy?<br><br>Weight gain depends on your pre-pregnancy BMI. On average, women should gain 25-35 pounds, but it varies. Your doctor can guide you based on your individual needs.<br><br>3. Is it safe to travel during pregnancy?<br><br>Traveling is generally safe in the second trimester, but always consult your doctor before making plans. Avoid long journeys in the final weeks of pregnancy.<br><br><br><br></p>', 'GuideHealthyPregnancy', 'A Guide to Healthy Pregnancy', 'Pregnancy is a beautiful journey, but it also comes with many questions and concerns. Taking care of yourself during these nine months is essential for your health and your baby’s well-being.', '[\"A Guide to Healthy Pregnancy\"]', 1, '2025-03-24 02:06:54', '2025-03-24 02:06:54'),
(24, 'Understanding Age-Related Fertility Decline in Women', 'Fertility is an important aspect of a woman’s health, and age plays a significant role in determining her ability to conceive. As women get older, their chances of getting pregnant naturally start to decrease. ', 'blogs/01JQ3HF2X27MNPBVV042KGZC09.png', 'Understanding Age-Related Fertility Decline in Women', '<p>Fertility is an important aspect of a woman’s health, and age plays a significant role in determining her ability to conceive. As women get older, their chances of getting pregnant naturally start to decrease. This is due to changes in egg quantity and quality. Understanding age-related fertility decline can help women make informed decisions about family planning.<br><br>How Age Affects Fertility<br><br>Women are born with all the eggs they will ever have. Over time, both the number and quality of these eggs decrease. Here’s how age impacts fertility:<br><br>●	In the 20s: This is the peak reproductive age. Women have the highest number of good-quality eggs, making conception easier.<br><br>●	In the 30s: Fertility gradually starts to decline, especially after the age of 35. The chances of miscarriage and chromosomal abnormalities also increase.<br><br>●	In the 40s: The decline in fertility becomes more pronounced. The number of healthy eggs is significantly lower, and the risk of complications during pregnancy is higher.<br><br>Factors Contributing to Fertility Decline<br><br>Apart from age, several other factors affect a woman’s fertility:<br><br>●	Hormonal Changes: As women age, hormone levels fluctuate, affecting ovulation and menstrual cycles.<br><br>●	Medical Conditions: Conditions like endometriosis, PCOS, and fibroids can impact fertility.<br><br>●	Lifestyle Choices: Smoking, excessive alcohol consumption, obesity, and stress can negatively influence fertility.<br>●	Diminished Ovarian Reserve: The number of eggs decreases over time, leading to lower chances of conception.<br><br>Seeking Help from Fertility Specialists<br><br>If you are struggling to conceive, consulting a fertility expert is a wise decision. The Best Fertility Specialists in Ghaziabad offer advanced treatments, including IVF, IUI, and egg freezing, to help women achieve pregnancy.<br><br>Modern reproductive technologies have made it possible for women in their late 30s and 40s to conceive successfully. A fertility specialist can assess your condition and recommend the best treatment options.<br><br>Ways to Improve Fertility Naturally<br><br>While age-related fertility decline is inevitable, certain lifestyle changes can help improve your chances of conception:<br><br>●	Eat a balanced diet rich in vitamins and minerals.<br>●	Maintain a healthy weight.<br>●	Exercise regularly but avoid excessive workouts.<br>●	Manage stress through meditation and relaxation techniques.<br>●	Avoid smoking and excessive alcohol intake.<br>●	Consider fertility preservation methods like egg freezing if you plan to delay pregnancy.<br><br>The Best Fertility Specialists in Ghaziabad can provide personalized guidance and treatment plans to address your fertility concerns.<br><br>FAQs<br><br>1. At what age does fertility decline significantly?<br>Fertility starts to decline after 30, with a more noticeable drop after 35. By the early 40s, the chances of natural conception are significantly lower.<br><br>2. Can I improve my fertility naturally?<br>Yes, maintaining a healthy lifestyle, eating a balanced diet, exercising, and managing stress can help improve fertility. However, if you have concerns, consult the Best Fertility Specialists in Ghaziabad for professional advice.<br><br>3. What are the treatment options for age-related infertility?<br>Options include IVF, IUI, egg donation, and fertility preservation techniques like egg freezing. A fertility specialist can recommend the best approach based on your condition.<br><br>Understanding age-related fertility decline is essential for making informed reproductive choices. If you are facing difficulties conceiving, seeking expert advice can help you explore your options and increase your chances of a successful pregnancy.<br><br><br><br></p>', 'UnderstandingAge-Related', 'Understanding Age-Related Fertility Decline in Women', 'Fertility is an important aspect of a woman’s health, and age plays a significant role in determining her ability to conceive. As women get older, their chances of getting pregnant naturally start to decrease. ', '[\"Understanding Age-Related Fertility Decline in Women\"]', 1, '2025-03-24 02:09:23', '2025-03-24 02:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('77de68daecd823babbb58edb1c8e14d7106e83bb', 'i:1;', 1743151234),
('77de68daecd823babbb58edb1c8e14d7106e83bb:timer', 'i:1743151234;', 1743151234),
('admin@gmail.com|127.0.0.1', 'i:1;', 1739170702),
('admin@gmail.com|127.0.0.1:timer', 'i:1739170702;', 1739170702),
('arjun@gmail.com|127.0.0.1', 'i:1;', 1738566119),
('arjun@gmail.com|127.0.0.1:timer', 'i:1738566119;', 1738566119),
('da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:2;', 1742553735),
('da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1742553735;', 1742553735),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1744265923),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1744265923;', 1744265923),
('livewire-rate-limiter:fac3513f04b17bb2418535e04e32e4d1fe100758', 'i:1;', 1744279844),
('livewire-rate-limiter:fac3513f04b17bb2418535e04e32e4d1fe100758:timer', 'i:1744279844;', 1744279844);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'Evernt Gallery',
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `images`, `status`, `created_at`, `updated_at`) VALUES
(3, 'bachha tere muthi me kay hai ', '[\"galleries\\/01JQ3QTER23PZYW1NCKZWEAEP5.jpeg\",\"galleries\\/01JQ3QTET8FN3NQW38YS3T1DT3.jpeg\",\"galleries\\/01JQ3QTEX17HVDBD972811BZSY.jpeg\"]', 1, '2025-03-24 04:00:28', '2025-03-24 04:32:46'),
(4, 'col2', '[\"galleries\\/01JQ3SVKCD7P6EX95YA7M7X79K.jpeg\",\"galleries\\/01JQ3SVKCSXVSZPN3DQMF3W1MJ.jpeg\",\"galleries\\/01JQ3SVKD3KR3R1JX49ZBTEAME.jpeg\",\"galleries\\/01JQ3SVKDBNVHA460MR3SWB37M.jpeg\",\"galleries\\/01JQ3SVKDT90HGF75NASJ3CAHV.jpeg\",\"galleries\\/01JQ3SVKE737YT79FND3VG7ZDZ.jpeg\",\"galleries\\/01JQ3SVKEFYGSHCVKDYYY9FX4X.jpeg\",\"galleries\\/01JQ3SVKETA0MPDKX50QS7H3S7.jpeg\",\"galleries\\/01JQ3SVKF333YQGTMPYHE8HGHM.jpeg\"]', 1, '2025-03-24 04:36:02', '2025-03-24 04:36:02'),
(5, 'COL3', '[\"galleries\\/01JQ3SZJYPBREQAFW5NN3TZ8HV.jpeg\",\"galleries\\/01JQ3SZJZ288KWHC47Q1TVJ4NW.jpeg\",\"galleries\\/01JQ3SZJZCHSMB0Q1ZZD5JK9E4.jpeg\",\"galleries\\/01JQ3SZJZQXWR5D2TP7GD50N3Z.jpeg\",\"galleries\\/01JQ3SZK05TBVBQ5G611ZF9730.jpeg\",\"galleries\\/01JQ3SZK0GXC1DCYT3F4E4G54E.jpeg\",\"galleries\\/01JQ3SZK0WG123BFWFP19R5NZT.jpeg\",\"galleries\\/01JQ3SZK1826HNB927ZTAG5AJ7.jpeg\",\"galleries\\/01JQ3SZK1PMYGZMN8770CWYBM8.jpeg\",\"galleries\\/01JQ3SZK201VAGRCAMN27QT4GD.jpeg\"]', 1, '2025-03-24 04:38:13', '2025-03-24 04:38:13'),
(6, 'COL4', '[\"galleries\\/01JQ3T14VVD1G9AVBJ2SGHBX7S.jpeg\",\"galleries\\/01JQ3T14W5KFRTB200CMGE9NBX.jpeg\",\"galleries\\/01JQ3T14WM7XWPY48DNBSGCA7C.jpeg\",\"galleries\\/01JQ3T14X25SD9BK758V5B465J.jpeg\"]', 1, '2025-03-24 04:39:04', '2025-03-24 04:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_13_094713_create_contacts_table', 1),
(5, '2025_01_13_095857_create_services_table', 1),
(6, '2025_01_13_100617_create_testimonials_table', 1),
(7, '2025_01_13_100906_create_blogs_table', 1),
(8, '2025_01_28_071318_create_galleries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_alt_tag` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `department`, `title`, `short_description`, `icon`, `image`, `image_alt_tag`, `description`, `slug`, `meta_title`, `meta_desc`, `tags`, `status`, `created_at`, `updated_at`) VALUES
(14, NULL, 'Infertility', 'A kid is the most lovely gift one can have, and each couple normally tries to have a child. The capacity to imitate is one of the most essential impulses in a person', 'service/icon/01JPYHRNJTYQ6D0TSNMTSV2F98.png', 'service/01JPYP299NRJ9RCDBZRXZEPAHE.png', 'Infertility', '<p><strong>Infertility Counselling</strong></p><p>A kid is the most lovely gift one can have, and each couple normally tries to have a child. The capacity to imitate is one of the most essential impulses in a person. This longing is exceptionally solid as a result of hereditary, organic, social, social, financial, and strict variables. Likewise, there is a solid conviction and reliance on family structure in numerous social orders all over the planet. Thinking about this large number of elements, it isn\'t is really to be expected that many couples experience pressure, tension, and other mental issues assuming they can\'t get pregnant soon enough. Fruitlessness is a genuine condition which must be addressed quickly to defeat genuine injury, misery, or gloom.</p><p><strong>Infertility Counselling Assessment</strong></p><ul><li>Whom do I tell my infertility related problems?</li><li>How can I share my fears and emotional issues with this person?</li><li>How much information on my infertility stress should I convey?</li><li>Should I discuss with my partner or spouse?</li><li>What are the difficulties I am facing during communication?</li><li>Should I visit fertility clinic or opt for psychological consultation?</li><li>How much assistance can I expect from the counsellor?</li><li>Would I be able to balance my personal and professional work during counselling?</li></ul>', 'Infertility', 'Infertility', 'A kid is the most lovely gift one can have, and each couple normally tries to have a child. The capacity to imitate is one of the most essential impulses in a person', '[\"Infertility\"]', 1, '2025-03-22 03:38:25', '2025-03-22 04:53:35'),
(15, NULL, 'Fibroid', 'Uterine fibroids are noncancerous growths of the uterus that often appear during childbearing years. Also called leiomyomas (lie-o-my-O-muhs) or myomas, uterine fibroids aren\'t associated with an increased risk of uterine cancer and almost never develop i', 'service/icon/01JPYP6ZZJG3QX9CBRCEEF5YT0.png', 'service/01JPYP6ZZRYJTVDEGMJA4S1Q01.png', 'Fibroid', '<p><strong>Overview</strong></p><p>Uterine fibroids are noncancerous growths of the uterus that often appear during childbearing years. Also called leiomyomas (lie-o-my-O-muhs) or myomas, uterine fibroids aren\'t associated with an increased risk of uterine cancer and almost never develop into cancer.</p><p>Fibroids range in size from seedlings, undetectable by the human eye, to bulky masses that can distort and enlarge the uterus. You can have a single fibroid or multiple ones. In extreme cases, multiple fibroids can expand the uterus so much that it reaches the rib cage and can add weight.</p><p>Many women have uterine fibroids sometime during their lives. But you might not know you have uterine fibroids because they often cause no symptoms. Your doctor may discover fibroids incidentally during a pelvic exam or prenatal ultrasound.</p>', 'Fibroid', 'Fibroid', 'Uterine fibroids are noncancerous growths of the uterus that often appear during childbearing years. Also called leiomyomas (lie-o-my-O-muhs) or myomas, uterine fibroids aren\'t associated with an increased risk of uterine cancer and almost never develop i', '[\"Fibroid\"]', 1, '2025-03-22 04:56:09', '2025-03-22 04:56:09'),
(16, NULL, 'Menopause', 'Menopause occurs when a woman hasn’t menstruated in 12 consecutive months and can no longer become pregnant naturally. It usually begins between the ages of 45 and 55, but can develop before or after this age range.', 'service/icon/01JPYPBQ1BP8XAZGSA2G3K9SEV.png', 'service/01JPYPBQ1K9BSYYEYENZVDW80V.png', 'Menopause', '<p><strong>Overview</strong></p><p>Menopause occurs when a woman hasn’t menstruated in 12 consecutive months and can no longer become pregnant naturally. It usually begins between the ages of 45 and 55, but can develop before or after this age range.</p><p>Menopause can cause uncomfortable symptoms, such as hot flashes and weight gain. For most women, medical treatment isn’t needed for menopause.</p><p>Read on to learn what you need to know about menopause.</p><p><strong>When does menopause begin and how long does it last?</strong></p><p>Most women first begin developing menopause symptoms about four years before their last period. Symptoms often continue until about four years after a woman’s last period.</p><p>A small number of women experience menopause symptoms for up to a decade before menopause actually occurs, and 1 in 10 women experience menopausal symptoms for 12 years following their last period.</p><p>The median age for menopause is 51, though it may occur on average up to two years earlier for Black and Latina women. More studies are needed to understand the onset of menopause for women of color.</p><p>There are many factors that help determine when you’ll begin menopause, including genetics and ovary health. Perimenopause occurs before menopause. Perimenopause is a time when your hormones begin to change in preparation for menopause.</p>', 'Menopause', 'Menopause', 'Menopause occurs when a woman hasn’t menstruated in 12 consecutive months and can no longer become pregnant naturally. It usually begins between the ages of 45 and 55, but can develop before or after this age range.', '[\"Menopause\"]', 1, '2025-03-22 04:58:44', '2025-03-22 04:58:44'),
(17, NULL, 'Irregular Periods', 'Every woman is different -- including their periods. Some happen like clockwork. Others are hit or miss and unpredictable. On average, a woman get their period every 24 to 38 days. A period usually lasts about 2 to 8 days. Is your period irregular -- and ', 'service/icon/01JPYPH89NJ6WE33807Z3SGK4N.png', 'service/01JPYPH89XW62DND4QNZVT306H.png', 'Irregular Periods', '<p><strong>What causes irregular periods?</strong></p><p>Every woman is different -- including their periods. Some happen like clockwork. Others are hit or miss and unpredictable. On average, a woman get their period every 24 to 38 days. A period usually lasts about 2 to 8 days. Is your period irregular -- and if so, does it need treatment?</p><p><strong>Causes</strong></p><p>Many things can cause irregular periods. Changes in your body\'s level of the hormones estrogen and progesterone can disrupt the normal pattern of your period. That\'s why young girls going through puberty and women approaching menopause commonly have irregular periods.</p><p><strong>Other common causes of irregular periods include:</strong></p><ul><li>Having an intrauterine device (IUD)</li><li>Changing birth control pills or using certain medications</li><li>Too much exercise</li><li>Polycystic ovary syndrome (PCOS)</li><li>Pregnancy or breastfeeding</li><li>Stress</li><li>Thickening of or polyps on the uterine lining</li><li>Uterine fibroids</li></ul>', 'IrregularPeriods', 'Irregular Periods', 'Every woman is different -- including their periods. Some happen like clockwork. Others are hit or miss and unpredictable. On average, a woman get their period every 24 to 38 days. A period usually lasts about 2 to 8 days. Is your period irregular -- and ', '[\"Irregular Periods\"]', 1, '2025-03-22 05:01:45', '2025-03-22 05:01:45'),
(18, NULL, 'Vaginal Discharge', 'Vaginal discharge is a normal and healthy part of the female reproductive system. It plays an essential role in maintaining vaginal health and is produced by the cervix and vaginal walls', 'service/icon/01JPYPXVJ91ZFJKWS0PYJ6NVEV.png', 'service/01JPYPXVJMSRF1TN7E74G1PAP3.png', 'Vaginal Discharge', '<p>Vaginal discharge is a normal and healthy part of the female reproductive system. It plays an essential role in maintaining vaginal health and is produced by the cervix and vaginal walls. The amount, color, and consistency of discharge can vary depending on the phase of the menstrual cycle, hormonal changes, or other factors like pregnancy or sexual activity.</p><p>Here’s an overview of vaginal discharge:</p><h3>1. <strong>Normal Vaginal Discharge</strong></h3><p>Normal vaginal discharge is clear or milky white and may have a mild odor or no odor at all. It is usually thin or slightly thick, and its consistency changes throughout the menstrual cycle. For instance:</p><ul><li><strong>Before ovulation</strong>: Discharge tends to be clear, slippery, and stretchy, similar to raw egg whites.</li><li><strong>After ovulation</strong>: Discharge may become thicker and whiter.</li><li><strong>During menstruation</strong>: There may be minimal discharge, or it may become more noticeable depending on the flow of menstruation.</li></ul><h3>2. <strong>Factors Affecting Discharge</strong></h3><p>Several factors can influence the characteristics of vaginal discharge, including:</p><ul><li><strong>Hormonal changes</strong>: During pregnancy, puberty, or menopause, hormonal fluctuations can alter discharge.</li><li><strong>Sexual activity</strong>: Increased blood flow during sexual arousal can lead to more discharge.</li><li><strong>Contraceptives</strong>: Birth control methods may impact the amount and consistency of discharge.</li><li><strong>Diet and hydration</strong>: What you eat and how hydrated you are can affect your vaginal health and discharge.</li></ul><h3>3. <strong>When to Seek Medical Attention</strong></h3><p>While vaginal discharge is typically normal, certain signs may indicate an infection or other medical conditions. You should consult a healthcare provider if:</p><ul><li>The discharge has an <strong>unpleasant or strong odor</strong>.</li><li>It changes in color to <strong>yellow, green, or gray</strong>.</li><li>There is <strong>itching</strong>, <strong>burning</strong>, or <strong>pain</strong> along with the discharge.</li><li>There is an unusual increase in discharge.</li><li>You experience <strong>painful urination</strong> or <strong>pain during intercourse</strong>.</li><li>It is accompanied by <strong>vaginal bleeding</strong> outside your normal period.</li></ul><h3>4. <strong>Common Causes of Abnormal Discharge</strong></h3><p>Some potential causes for abnormal discharge include:</p><ul><li><strong>Yeast infections</strong>: Can cause thick, white, cottage cheese-like discharge with itching.</li><li><strong>Bacterial vaginosis</strong>: Often leads to a thin, grayish discharge with a fishy odor.</li><li><strong>Trichomoniasis</strong>: A sexually transmitted infection (STI) that may cause frothy, yellow-green discharge with a strong odor.</li><li><strong>Cervical or vaginal infections</strong>: Other infections can change the characteristics of discharge.</li><li><strong>Sexually transmitted infections (STIs)</strong>: Some STIs may also lead to unusual discharge.</li></ul><h3>5. <strong>Maintaining Vaginal Health</strong></h3><p>To keep your vaginal health in check and avoid abnormal discharge:</p><ul><li>Practice good hygiene: Gently wash the external genital area with mild soap and water, and avoid douching, which can disrupt the natural balance of bacteria.</li><li>Wear breathable, cotton underwear to reduce moisture buildup.</li><li>Stay hydrated and eat a balanced diet.</li><li>Use condoms during sexual activity to prevent STIs.</li><li>Schedule regular gynecological check-ups to monitor any changes in vaginal health.</li></ul>', 'VaginalDischarge', 'Vaginal Discharge', 'Vaginal discharge is a normal and healthy part of the female reproductive system. It plays an essential role in maintaining vaginal health and is produced by the cervix and vaginal walls', '[\"Vaginal Discharge\"]', 1, '2025-03-22 05:08:38', '2025-03-22 05:08:38'),
(19, NULL, 'Normal Delivery', 'The first stage of the normal delivery process involves contractions which help the cervix dilate, soften and stretch so that the baby can be delivered.', 'service/icon/01JQ3B97D6NW7QPKWGC3J0CQB1.png', 'service/01JQ3B97E5B0H41P6756ZBJVG5.png', 'Normal Delivery', '<p><strong>Labour and effacement of the cervix</strong></p><p>The first stage of the normal delivery process involves contractions which help the cervix dilate, soften and stretch so that the baby can be delivered. This stage is the longest and can last up to 13 hours during a woman’s first delivery and about 7-8 hours for subsequent deliveries.</p><p><strong>Early labour</strong></p><p>The mother becomes aware of the contractions that occur at an interval of every 3 to 5 minutes. The cervix dilates up to 4 centimetres. The mother can spend early labour at home. However, the doctor should be informed.</p><p><strong>Active labour</strong></p><p>The mother transitions to the active phase when the contractions become stronger and more frequent. They occur at intervals of 3-4 minutes and each one lasts for about a minute. The cervix dilates up to 7 cm. The mother must be taken to the hospital for delivery. The water breaks as labour progress through this stage. Thereafter, contractions further speed</p>', 'NormalDelivery', 'Normal Delivery', 'The first stage of the normal delivery process involves contractions which help the cervix dilate, soften and stretch so that the baby can be delivered.', '[\"Normal Delivery\"]', 1, '2025-03-24 00:21:20', '2025-03-24 00:21:20'),
(20, NULL, 'High Risk Pregnancy', 'When it comes to conditions in pregnancies, it’s important to keep an eye out for common high-risk pregnancy conditions.', 'service/icon/01JQ3BE7RS1XAN7JHA5F0JMY2Y.png', 'service/01JQ3BE7S0DCQYFXTQZ1SS1Y86.png', 'High Risk Pregnancy', '<p><strong>What Are High-Risk Pregnancy Conditions?</strong></p><p>When it comes to conditions in pregnancies, it’s important to keep an eye out for common high-risk pregnancy conditions. High-risk pregnancies happen when the mother or fetus’ life is threatened or in danger. Some of these risks may have developed before you became pregnant, and some can develop during your pregnancy. It’s important to go to scheduled appointments throughout your pregnancy to monitor any risk factors.</p><p><strong>Risk factors for a high-risk pregnancy can include:</strong></p><ul><li>Autoimmune disorders, including lupus and myasthenia gravis</li><li>Diabetes</li><li>Infectious diseases, including viral hepatitis, HIV/AIDS and sexually transmitted infections</li><li>Maternal or fetal genetic disorders, including hemophilia, cystic fibrosis and Down syndrome</li><li>Getting pregnant when you’re over age 35</li><li>Teen pregnancy</li></ul>', 'HighRiskPregnancy', 'High Risk Pregnancy', 'When it comes to conditions in pregnancies, it’s important to keep an eye out for common high-risk pregnancy conditions.', '[\"High Risk Pregnancy\"]', 1, '2025-03-24 00:24:04', '2025-03-24 00:24:04'),
(21, NULL, 'Sexual Issues', 'Sexual dysfunction is normally treated by correcting or addressing the underlying problem or problems that are causing the dysfunction & other issues.', 'service/icon/01JQ3BSX9BRHSCNC3PN1YYN2GE.png', 'service/01JQ3BSXA98Y1400H2BVPHGWBX.png', 'Sexual Issues', '<p><strong>Treatments</strong></p><p>Sexual dysfunction is normally treated by correcting or addressing the underlying problem or problems that are causing the dysfunction &amp; other issues. We are equipped with the team of one of the best sexology professionals who have years of experience in managing such cases and deliver right prescription depending upon the merits\' complexity of the problems.</p>', 'SexualIssues', 'Sexual Issues', 'Sexual dysfunction is normally treated by correcting or addressing the underlying problem or problems that are causing the dysfunction & other issues.', '[\"Sexual Issues\"]', 1, '2025-03-24 00:30:27', '2025-03-24 00:30:27'),
(22, NULL, 'Breast Cancer', 'A variety of treatments for breast cancer exist, and treatment is available at every stage of cancer. Most people need a combination of two or more treatments.', 'service/icon/01JQ3BZDWGBVEF5A9EM8TKYSCB.png', 'service/01JQ3BZDWRPKEE3CWD80FK40T1.png', 'Breast Cancer', '<p><strong>Overview</strong></p><p>A variety of treatments for breast cancer exist, and treatment is available at every stage of cancer. Most people need a combination of two or more treatments.</p><p>After diagnosis, your doctor will determine the stage of your cancer. They will then decide on the best treatment options based on your stage and other factors, such as age, family history, genetic mutation status, and personal medical history.</p><p>Treatments for early stage breast cancer may not be effective for advanced stage breast cancer.</p><p><strong>Surgery for breast cancer</strong></p><p>Most people with breast cancer will undergo surgery to remove cancer cells or tumors from the breast and other affected areas.</p><p>Lumpectomy and mastectomy are two surgical options. Deciding which option to use is based on:</p><ul><li>the size and location of the primary tumor</li><li>personal preference</li><li>other factors such as genetic predisposition</li></ul>', 'BreastCancer', 'Breast Cancer', 'A variety of treatments for breast cancer exist, and treatment is available at every stage of cancer. Most people need a combination of two or more treatments.', '[\"Breast Cancer\"]', 1, '2025-03-24 00:33:28', '2025-03-28 03:18:56'),
(23, NULL, 'Cancer Screening', 'Diagnosing cancer at its earliest stages often provides the best chance for a cure. With this in mind, talk with your doctor about what types of cancer screening may be appropriate for you.', 'service/icon/01JQ3C42N8JHCSK8SVZQ9SDBE3.png', 'service/01JQDYGD3RW4CRGX110WBXQT8Q.jpg', 'Cancer Screening', '<p>Diagnosing cancer at its earliest stages often provides the best chance for a cure. With this in mind, talk with your doctor about what types of cancer screening may be appropriate for you.</p><p>For a few cancers, studies show that screening tests can save lives by diagnosing cancer early. For other cancers, screening tests are recommended only for people with increased risk.</p><p>A variety of medical organizations and patient-advocacy groups have recommendations and guidelines for cancer screening. Review the various guidelines with your doctor and together you can determine what\'s best for you based on your own risk factors for cancer.</p><p><strong>Cancer diagnosis</strong></p><ul><li><strong>Physical exam.</strong> Your doctor may feel areas of your body for lumps that may indicate cancer. During a physical exam, your doctor may look for abnormalities, such as changes in skin color or enlargement of an organ, that may indicate the presence of cancer.</li><li><strong>Laboratory tests.</strong> Laboratory tests, such as urine and blood tests, may help your doctor identify abnormalities that can be caused by cancer. For instance, in people with leukemia, a common blood test called complete blood count may reveal an unusual number or type of white blood cells.</li><li><strong>Imaging tests.</strong> Imaging tests allow your doctor to examine your bones and internal organs in a noninvasive way. Imaging tests used in diagnosing cancer may include a computerized tomography (CT) scan, bone scan, magnetic resonance imaging (MRI), positron emission tomography (PET) scan, ultrasound and X-ray, among others.</li><li><strong>Biopsy.</strong> During a biopsy, your doctor collects a sample of cells for testing in the laboratory. There are several ways of collecting a sample. Which biopsy procedure is right for you depends on your type of cancer and its location. In most situations, a biopsy is the only way to definitively diagnose cancer.</li></ul>', 'CancerScreening', 'Cancer Screening', 'Diagnosing cancer at its earliest stages often provides the best chance for a cure. With this in mind, talk with your doctor about what types of cancer screening may be appropriate for you.', '[\"Cancer Screening\"]', 1, '2025-03-24 00:36:00', '2025-03-28 03:18:50'),
(24, NULL, 'Laparoscopic Surgery', 'Laparoscopy, also known as diagnostic laparoscopy, is a surgical diagnostic procedure used to examine the organs inside the abdomen. It’s a low-risk, minimally invasive procedure that requires only small incisions.', 'service/icon/01JQ3C8263CZXXXVKAAK0M9GTF.png', 'service/01JQ3C826CMC59WDPPPSRT63KF.png', 'Laparoscopic Surgery', '<p>Laparoscopy, also known as diagnostic laparoscopy, is a surgical diagnostic procedure used to examine the organs inside the abdomen. It’s a low-risk, minimally invasive procedure that requires only small incisions.</p><p>Laparoscopy uses an instrument called a laparoscope to look at the abdominal organs. A laparoscope is a long, thin tube with a high-intensity light and a high-resolution camera at the front. The instrument is inserted through an incision in the abdominal wall. As it moves along, the camera sends images to a video monitor.</p><p>Laparoscopy allows your doctor to see inside your body in real time, without open surgery. Your doctor also can obtain biopsy samples during this procedure.</p><p><strong>Why is laparoscopy performed?</strong></p><ul><li>ultrasound, which uses high-frequency sound waves to create images of the body</li><li>CT scan, which is a series of special X-rays that take cross-sectional images of the body</li><li>MRI scan, which uses magnets and radio waves to produce images of the body</li></ul>', 'LaparoscopicSurgery', 'Laparoscopic Surgery', 'Laparoscopy, also known as diagnostic laparoscopy, is a surgical diagnostic procedure used to examine the organs inside the abdomen. It’s a low-risk, minimally invasive procedure that requires only small incisions.', '[\"Laparoscopic Surgery\"]', 1, '2025-03-24 00:38:10', '2025-03-24 00:38:10'),
(25, NULL, 'Polycystic Ovary', 'Women with PCOS produce higher-than-normal amounts of male hormones. This hormone imbalance causes their body to skip menstrual periods and makes it harder for them to get pregnant.', 'service/icon/01JQ3CC151RBSSYG1Z937HTJAH.png', 'service/01JQ3CC159DW82EEN7AMADRYVV.png', 'Polycystic Ovary', '<p>Polycystic ovary syndrome (PCOS) is a condition that affects a woman’s hormone levels.</p><p>Women with PCOS produce higher-than-normal amounts of male hormones. This hormone imbalance causes their body to skip menstrual periods and makes it harder for them to get pregnant.</p><p>PCOS also causes hair growth on the face and body, and baldness. And it can contribute to long-term health problems like diabetes and heart disease.</p><p>Birth control pills and diabetes drugs (which combat insulin resistance, a PCOS symptom) can help fix the hormone imbalance and improve symptoms.</p><p>Read on for a look at the possible causes of PCOS and its possible effects on a woman’s body.</p>', 'PolycysticOvary', 'Polycystic Ovary', 'Women with PCOS produce higher-than-normal amounts of male hormones. This hormone imbalance causes their body to skip menstrual periods and makes it harder for them to get pregnant.', '[\"Polycystic Ovary\"]', 1, '2025-03-24 00:40:20', '2025-03-24 00:40:20'),
(26, NULL, 'PAP Smear', 'A Pap smear, also called a Pap test, is a screening procedure for cervical cancer. It tests for the presence of precancerous or cancerous cells on your cervix. ', 'service/icon/01JQ3CGSEWA28K49C8BK3VHKJC.png', 'service/01JQ3CGSF4GYZXHJQWP210ARJE.png', 'PAP Smear', '<p><strong>Overview</strong></p><p>A Pap smear, also called a Pap test, is a screening procedure for cervical cancer. It tests for the presence of precancerous or cancerous cells on your cervix. The cervix is the opening of the uterus.</p><p>During the routine procedure, cells from your cervix are gently scraped away and examined for abnormal growth. The procedure is done at your doctor’s office. It may be mildly uncomfortable, but doesn’t usually cause any long-term pain.</p><p>Keep reading to learn more about who needs a Pap smear, what to expect during the procedure, how frequently you should have a Pap smear test, and more.</p>', 'PAPSmear', 'PAP Smear', 'A Pap smear, also called a Pap test, is a screening procedure for cervical cancer. It tests for the presence of precancerous or cancerous cells on your cervix. ', '[\"PAP Smear\"]', 1, '2025-03-24 00:42:56', '2025-03-24 00:42:56'),
(27, NULL, 'Abortion', 'There are a few types of abortion that are done in clinics or hospitals. The type you get will probably depend almost entirely on how far you are along in your pregnancy.', 'service/icon/01JQ3DJ6TX5RK3PHZGMQ3CMRDN.png', 'service/01JQ3DJ6V5RW0Z58R08ZHTA32A.png', 'Abortion', '<p><strong>Overview</strong></p><p>There are a few types of abortion that are done in clinics or hospitals. The type you get will probably depend almost entirely on how far you are along in your pregnancy.</p><p>If you’re in your first trimester, you’ll likely have a vacuum aspiration. If you’re in your second trimester (meaning that it’s been more than 13 weeks since your last menstrual period), you’ll likely have a dilation and evacuation, or D&amp;E. If you’re further along than that, you might have a dilation and extraction, or D&amp;X.</p><p>Almost all abortion procedures are out-patient, which means you won’t have to stay overnight in the doctor’s office, clinic, or hospital afterward.</p>', 'Abortion', 'Abortion', 'There are a few types of abortion that are done in clinics or hospitals. The type you get will probably depend almost entirely on how far you are along in your pregnancy.', '[\"Abortion\"]', 1, '2025-03-24 01:01:11', '2025-03-24 01:01:11'),
(28, NULL, 'Termination Pregnancy', 'Medication abortion (also referred to as medical abortion) is the termination of pregnancy by using medications to induce a process similar to a miscarriage.', 'service/icon/01JQ3DYFPEGPEKSRSSVPAT8MRQ.png', 'service/01JQ3DYFPPWJA55WF3E3GR7X9A.png', 'Termination Pregnancy', '<p><strong>Overview</strong></p><p>Medication abortion (also referred to as medical abortion) is the termination of pregnancy by using medications to induce a process similar to a miscarriage. It is an alternative to aspiration abortion (also known as aspiration curettage, suction curettage, dilation and curettage, dilation and evacuation, or surgical abortion) [1]. Use of a combination of mifepristone (an antiprogesterone) and misoprostol (a prostaglandin) is the primary method of medication abortion in the United States in pregnancies up to 77 days (11 weeks) of gestation. However, first-trimester medication abortion beyond 70 days may result in lower efficacy or more pronounced symptoms of bleeding or cramping [2-5].</p>', 'TerminationPregnancy', 'Termination Pregnancy', 'Medication abortion (also referred to as medical abortion) is the termination of pregnancy by using medications to induce a process similar to a miscarriage.', '[\"Termination Pregnancy\"]', 1, '2025-03-24 01:07:54', '2025-03-24 01:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3dtIVCaq7mSG54omLPkpdD2ukWUEuaN5L35YspPc', NULL, '133.242.174.119', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3pNQjNDU3BYWVVXWnU4amtUMXF1UzYyQVJUdmJBd3FUSWFCSTE2YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vaWxhLmRpZ2lkb3Rlcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1744328580),
('69Yf05flLlS5KTDUN3aJMSBIpzdFXiIjFMGqqtTF', NULL, '154.28.229.240', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2RLcUZuVm1zRncwWmtDUjczRm1waHlwVnhTUkFoQVJVSlRMRm42cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vaWxhLmRpZ2lkb3Rlcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1744287018),
('9W6ZQS1Ut9CEwO9jm2Kaj1vNT0sMt5QYf8CPqAUM', NULL, '154.28.229.56', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGczQ2hZVWhRYUNlbEdJb2I3WXVTTmRmZTgydXNJd29XUmE5bjdaUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vaWxhLmRpZ2lkb3Rlcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1744325343),
('d6HSOBhq0jFbIYMoArlfQVXURasB0t9ny2hDoHnm', NULL, '2a02:4780:1:5::1a', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidkZCRUh6UGd1ckJGTkwwQXRZem1EWWxVOWlHNlduZE96a3V1VXJqdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vaWxhLmRpZ2lkb3Rlcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1744333128),
('GUiarjNt0douVGZLYwmrLQky6H7dtqHowSl92Mux', NULL, '154.28.229.56', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidXozYnVuQ2FpSW9rbXFac0ZjT2Y2b0k4cGRXR1I5UVlWVUtuSFYwUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vaWxhLmRpZ2lkb3Rlcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1744325330),
('Jj4t5YUjenGv0UEDuLWPEa2acrt2Sgl88avy3lk6', 3, '2401:4900:839a:9157:74d5:2d40:d1bc:9cd9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiamd5R0l2VEFNa0tiWEhvUjRjNDdvY0lMbXN6dU5DRjMwTlhHRmdZTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHBzOi8vaWxhLmRpZ2lkb3Rlcy5jb20vYWRtaW4vdGVzdGltb25pYWxzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRmVjltU0NDemp4VHpidkdjLlprckRPTU1pWWNGZVlrZVFMandZYjBuLzVZNlNDSUJha3NIZSI7fQ==', 1744279941),
('JNWxZt9bjDSncPt5l2Ad4zpoFamiTPE32GZeLzKB', NULL, '107.189.7.156', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWthOGlXZUp0QmV2UzhNMXhtVVBoWWtnSnpyZzFPZ3JwMW9CT3JxUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vaWxhLmRpZ2lkb3Rlcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1744314179),
('LAfkCgCgd89Lun5QWkHadxdyMZJJlz6MvZ5X0UlS', NULL, '34.32.135.176', 'Scrapy/2.12.0 (+https://scrapy.org)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidXdGSERHVFJnV0lTV295eDEyblZaVUJJeFN5QTVWRFlseTBESlA5SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vaWxhLmRpZ2lkb3Rlcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1744298713),
('N3JF7H9XIkUvLfbGYvk7ivdmmA84p9LTIfVFZpu2', NULL, '154.28.229.200', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOVc2ZEJRZVpKV0V5dUxKWHloeHZyOWhHRG53VlpPcktpNVlDTWpCUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vaWxhLmRpZ2lkb3Rlcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1744298451),
('Y39ahqORT6sVvhA04fENJkSLS9aKoJICFzkKFXJF', NULL, '13.251.16.74', 'Mozilla/5.0 (Linux; Android 7.1.1; CPH1725 Build/N6F26Q; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/101.0.4951.61 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/360.0.0.10.113;]', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXhhRktxUTE0NU15bTdVMUdTTlhtSmJabGZjY3N0bHd3cDFHblVvWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vaWxhLmRpZ2lkb3Rlcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1744351672),
('zIDPmahcY2VaXYvCIZpu7smb6WETJqXSbU3hkEWy', NULL, '149.57.180.34', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUhKTVBIRXVxczJxRGd2ODg1a3lsNkdjY2hGYWxTUUNTMVNGOVhuQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vaWxhLmRpZ2lkb3Rlcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1744277798);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `position`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Nupur Jain', 'patient', 'testimonial/01JQ3PFGFD0B9G09TXP7XTAQ7X.png', 'I am very grateful that I am Ila Mam\'s patient. I had a few complications during my pregnancy but I had Ila ma\'am so I was relaxed and everything went perfectly. She is very sweet and will always address all your issues very patiently and nicely.', 1, '2025-03-24 03:37:00', '2025-03-24 03:37:00'),
(6, 'Jyoti Varshney', 'patient', 'testimonial/01JQ3PNGWVT0FN3V90HMX3X4S8.png', 'I\'m so grateful that I am your patient. She is a very friendly doctor & one of the finest doctors I have seen.. highly professional and co-operative', 1, '2025-03-24 03:40:17', '2025-03-24 03:40:17'),
(7, 'Harshita Singhal', 'patient', 'testimonial/01JQ3PQGN5NRVC4AHXE85G523X.png', 'Dr. Ila Gupta is very experienced and Her consultation is also very good. She takes care of her patients from start to finish and even answers queries on messages.\n', 1, '2025-03-24 03:41:23', '2025-03-24 03:41:23'),
(8, 'Lalit Mohan Varshney', 'patient', 'testimonial/01JQ3PRSY2EZR6H424DKPSXFXH.png', 'From start to finish , Dr. Ila Gupta was attentive and kind. Her diagnosis was spot-on  and I\'m very happy with her care.', 1, '2025-03-24 03:42:05', '2025-03-24 03:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Arjun', 'admin@gamil.com', NULL, '$2y$12$n.CDljYYTSUNR8MBPP6Ia.R1Upcjbpsn.MJ8IWlzbcX7VS6vbMKby', NULL, '2025-01-30 00:04:53', '2025-01-30 00:04:53'),
(3, 'Arjun Sharma', 'admin@gmail.com', NULL, '$2y$12$fV9mSCCzjxTzbvGc.ZkrDOMMiYcFeYkeQLjwYb0n/5Y6SCIBaksHe', NULL, '2025-03-22 02:11:13', '2025-03-22 02:11:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
