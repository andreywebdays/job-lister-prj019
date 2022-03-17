CREATE TABLE `categories` (
    `category_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `category_name` varchar(255) NOT NULL
);

CREATE TABLE `jobs` (
    `job_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `category_id` int(11) NOT NULL,
    `job_company` varchar(255) NOT NULL,
    `job_title` varchar(255) NOT NULL,
    `job_desc` varchar(255) NOT NULL,
    `job_salary` varchar(255) NOT NULL,
    `job_location` varchar(255) NOT NULL,
    `job_contact_user` varchar(255) NOT NULL,
    `job_contact_email` varchar(255) NOT NULL
)