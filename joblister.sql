SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `joblister` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `joblister`;

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Business'),
(2, 'Technology'),
(3, 'Retail'),
(4, 'Construction');

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `job_company` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_desc` varchar(255) NOT NULL,
  `job_salary` varchar(255) NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `job_contact_user` varchar(255) NOT NULL,
  `job_contact_email` varchar(255) NOT NULL,
  `job_post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `jobs` (`job_id`, `category_id`, `job_company`, `job_title`, `job_desc`, `job_salary`, `job_location`, `job_contact_user`, `job_contact_email`, `job_post_date`) VALUES
(1, 1, 'Wells Fargo', 'Sr. Investment Manager', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus dictum bibendum. Praesent ultricies est elit, nec fermentum libero porttitor consequat. Curabitur volutpat sem tellus, vitae eleifend dolor ullamcorper vitae.', '90k', 'Seattle, WA', 'John Wensley', 'johnwensley@email.com', '2022-03-17 23:49:05'),
(2, 2, 'Meta', 'Senior PHP Developer', 'Donec lacinia pharetra tortor posuere malesuada. Nullam vulputate ante vitae tellus fermentum pretium. Fusce et gravida leo. Cras sem nisi, scelerisque sed nulla in, gravida mattis tellus. Pellentesque aliquet varius maximus.', '100k', 'Portland, OR', 'Mike Kinsley', 'mikekinsley@email.com', '2022-03-17 23:49:05');


ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);


ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
