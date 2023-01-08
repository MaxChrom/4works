-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 08 2023 г., 19:30
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `4works`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Volvo', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 61878, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(2, 'Ferrari', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 18390, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(3, 'Ford', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 77204, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(4, 'Porsche', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 15639, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(5, 'Honda', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 46524, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(6, 'Lamborghini', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 44043, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(7, 'Skoda', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 49152, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(8, 'Tayota', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 89387, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(9, 'Maserati', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 27425, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(10, 'Jeep', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 34642, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(11, 'Subaru', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 22524, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(12, 'Dodge', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 20708, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(13, 'Jaguar', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 75415, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(14, 'Mazda', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 49029, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(15, 'Rolls Royse', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 71582, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(16, 'Mercedes', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 88348, 16, '2023-01-08 18:23:50', '2023-01-08 18:23:50'),
(17, 'Volvo', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 17619, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(18, 'Ferrari', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 45707, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(19, 'Ford', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 54544, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(20, 'Porsche', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 52505, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(21, 'Honda', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 42345, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(22, 'Lamborghini', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 99518, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(23, 'Skoda', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 73197, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(24, 'Tayota', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 13886, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(25, 'Maserati', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 20465, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(26, 'Jeep', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 89280, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(27, 'Subaru', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 65199, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(28, 'Dodge', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 80643, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(29, 'Jaguar', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 93396, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(30, 'Mazda', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 73806, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(31, 'Rolls Royse', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 25310, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(32, 'Mercedes', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.', 82815, 17, '2023-01-08 18:24:51', '2023-01-08 18:24:51'),
(35, 'Aston Martin', 'sport car', 29000, 16, '2023-01-08 18:29:10', '2023-01-08 18:29:10');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_hash`, `created_at`, `updated_at`) VALUES
(16, 'test@gmail.com', '224cf2b695a5e8ecaecfb9015161fa4b', '7671499b6688c2b6e176357999454891', '2023-01-08 18:23:27', '2023-01-08 18:28:57'),
(17, 'test2@gmail.com', '224cf2b695a5e8ecaecfb9015161fa4b', '2f00ec44782c81c1321f34dcce46eb52', '2023-01-08 18:24:33', '2023-01-08 18:29:27');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
