-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2021 pada 07.27
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sintaka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinations`
--

CREATE TABLE `destinations` (
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `destination_type_id` bigint(20) UNSIGNED NOT NULL,
  `destination_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_profil` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_facility` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_ticket_price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `destinations`
--

INSERT INTO `destinations` (`destination_id`, `destination_type_id`, `destination_name`, `destination_profil`, `destination_facility`, `destination_ticket_price`, `destination_address`, `destination_image`, `created_at`, `updated_at`) VALUES
(3, 4, 'asdaasadw', 'asdccc', 'asdvas', '12123123sss', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15827.693948212202!2d109.25673832735744!3d-7.362473633732882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655f5b62137ba5%3A0x5027a76e35502e0!2sBanteran%2C%20Kec.%20Sumbang%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1636064223230!5m2!1sid!2sid', '', NULL, '2021-11-04 15:56:25'),
(6, 1, 'Nama Wisata1', 'Profil Wisata', 'Place <em>some</em> <u>text</u> <strong>hereasdaasd</strong>', 'Place <em>some</em> <u>text</u> <strong>herecasw2</strong>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1020885.8518197088!2d117.03836196146659!3d1.806492733729201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320db9032df93133%3A0x2cea5b974756a685!2sKabupaten%20Berau%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1636064913855!5m2!1sid!2sid', 'yjaSsevbeTRVBMkmMsw1iA4DJ3FfArqNbFP2ze6B.jpg', '2021-11-04 15:28:44', '2021-11-07 21:42:57'),
(8, 4, 'Lilyan Dicki PhD', 'Laborum dolor adipisci quia nulla. Debitis itaque fuga facilis incidunt voluptatibus quod quisquam. Sunt error tenetur sunt impedit.', 'Nemo possimus illo nemo. Maiores assumenda dicta modi id autem. Earum aut perspiciatis odio dolorem.', 'Ullam et architecto est voluptatem deserunt sunt. Doloremque ipsa necessitatibus omnis corrupti tempore nobis. Quia alias eaque amet autem qui. Ut dolor soluta nisi nam sint.', 'Molestiae atque atque dignissimos asperiores consequatur. Nulla dolorem dolores sequi consequatur ea dolorum aspernatur.', '', '2021-11-07 21:29:39', '2021-11-07 21:29:39'),
(9, 3, 'Thurman Olson', 'Labore ipsum consectetur non illum. Dolorem sed blanditiis ratione et corporis. Asperiores corrupti officia omnis praesentium nobis ab repudiandae. Nihil occaecati nesciunt et reprehenderit eaque.', 'Hic omnis distinctio quisquam qui. Sed sed beatae reprehenderit qui. Et et sunt sapiente est et nihil. Nostrum et iste atque molestiae.', 'Soluta voluptatum fuga eos quia molestiae sed. Ea doloribus et enim ut totam. Necessitatibus aut sint consectetur repudiandae cupiditate nostrum.', 'Velit eum veritatis impedit. Quis ipsam soluta eum molestiae. Ut ut autem hic vel aspernatur ratione omnis. Minima amet unde sapiente et quia perferendis.', '', '2021-11-07 21:29:39', '2021-11-07 21:29:39'),
(10, 5, 'Jaylin Reilly', 'Totam animi dolores dolor. Ea magni molestiae nisi voluptatem omnis et. Saepe sed corrupti et tempora. Architecto fuga et totam quia minus. Omnis molestiae et et facere deleniti culpa et.', 'Ut sed neque exercitationem amet hic qui sit. Ratione similique ut officiis. Sit minima iure adipisci sed ab. Est beatae vitae ut aut.', 'Animi quas molestias voluptas possimus voluptatibus necessitatibus accusantium. Aspernatur adipisci repudiandae ratione id odio qui sint. Non nihil molestiae et eaque.', 'Eaque est sint enim assumenda perferendis minima culpa minus. Exercitationem ratione id repellat accusamus minima dolorem. Iusto eius perferendis totam. Iste accusantium quam optio commodi ab.', '', '2021-11-07 21:29:39', '2021-11-07 21:29:39'),
(11, 5, 'Prof. Hubert Vandervort', 'Corrupti eos impedit optio ratione. Ad beatae sapiente iste quia itaque et repudiandae et. Et incidunt nihil qui sint vel pariatur alias. Magnam ea esse placeat reiciendis aliquam.', 'Dicta aspernatur et qui illo voluptatum. Ex sed quam voluptas est. Debitis nam maxime aliquid sapiente consectetur exercitationem quo. Amet alias nostrum ipsa asperiores animi aperiam est.', 'Temporibus qui quaerat tempore. Soluta molestias tempore labore officiis nostrum nam. Autem fugit et omnis ullam. Maiores fugit laudantium cumque qui et culpa impedit.', 'Assumenda non placeat aliquam eaque corrupti. Provident sed ea explicabo debitis illo atque cum. Dolores qui dolore iste consequatur.', '', '2021-11-07 21:29:39', '2021-11-07 21:29:39'),
(12, 3, 'Chadrick Hermann', 'Architecto suscipit commodi magnam quis ullam. Alias hic sit magnam ea quod sunt. Eius nobis corrupti sed itaque quaerat laborum blanditiis. Non id nisi nobis labore harum sequi aspernatur qui.', 'Eum et at illo molestiae facilis aperiam ex. Libero quo quis fugit ut id. Accusamus cum totam magni ipsa autem qui.', 'Ea et ad excepturi consequatur. Quibusdam consequatur magni libero ex illo. Qui at maiores eum incidunt iusto consequatur minus. Sed soluta est hic aut animi aut.', 'Officiis consequatur id nihil voluptatem. Illo corrupti dolores debitis et. Quibusdam magnam nihil sed expedita pariatur a hic voluptas. Corrupti facere dolorum iure nulla minima deleniti earum.', '', '2021-11-07 21:29:39', '2021-11-07 21:29:39'),
(13, 1, 'Prudence Walker', 'Aliquam molestiae laborum aperiam delectus et. Maxime voluptatem nostrum sint esse quam. Sed mollitia fugiat nisi ducimus. Cum rerum maiores consequatur repudiandae error deserunt ullam.', 'Perspiciatis eos facere beatae dolorem. Dicta nihil at deleniti autem quia quibusdam. Ratione quidem enim aut pariatur quo impedit.', 'Ut magni iusto ad quia molestiae reprehenderit qui. Et accusamus qui et molestiae ut culpa fuga. Veritatis magni dolorem quaerat ad non. Amet dolorem laborum dolores.', 'Non ut alias et dolorem voluptatem ut quasi. Sunt quasi nihil consequuntur magni voluptate natus. Sint vitae ut illum illo quas.', '', '2021-11-07 21:29:39', '2021-11-07 21:29:39'),
(14, 4, 'Nigel Torphy', 'Sit repellendus sit ut esse esse. Et placeat porro accusantium. Voluptas unde porro rerum delectus odio officiis. Nihil accusantium quia aut odio qui.', 'Facilis perferendis natus voluptatem esse laborum corrupti. Qui quasi voluptate velit ducimus beatae assumenda non. Ratione alias asperiores consequuntur dolores provident.', 'Architecto id aut rerum totam voluptas numquam. Ab magni impedit at laudantium placeat rerum rerum pariatur. Fuga qui sequi quod incidunt. In ipsa et ut maiores.', 'Quia est dolore tenetur odio aut nisi perspiciatis. Autem fugit accusamus quo numquam. Eaque magnam dolorem est et quaerat minima velit itaque.', '', '2021-11-07 21:29:39', '2021-11-07 21:29:39'),
(15, 6, 'Terrell Casper', 'Eos rerum soluta quasi. Voluptatibus ut est sed ut dicta aperiam quia. Eius sint molestias soluta accusamus laboriosam quis pariatur.', 'Nesciunt enim enim corporis qui dolore fugiat ut. Iusto dolorem aut similique deleniti architecto. Voluptatem iste in sapiente sit. Iusto ex culpa inventore nulla consequuntur sed animi.', 'Neque deleniti ea et dolorem minus saepe cumque. Excepturi dignissimos incidunt omnis. Neque voluptas qui aperiam. Numquam error et nisi nostrum error velit.', 'Quaerat velit quisquam eos. Blanditiis ad voluptatem magni et ullam et hic. Impedit doloremque quis quam. Aperiam explicabo eum molestias.', '', '2021-11-07 21:29:39', '2021-11-07 21:29:39'),
(16, 6, 'Owen Emmerich', 'Necessitatibus facere et recusandae commodi. Non facilis quia reprehenderit modi ut quas.', 'Magni numquam soluta ipsam est aspernatur et qui. Velit accusantium est magni temporibus perspiciatis voluptatum suscipit. Molestiae est deserunt quam molestiae ipsum.', 'Sit beatae non porro quia aperiam nemo impedit deserunt. Ea optio nemo provident et quod architecto. Velit et quo doloremque commodi nulla voluptatem dolores.', 'Enim numquam minus est dolorum. Quos enim ut et nihil impedit vitae.', '', '2021-11-07 21:29:39', '2021-11-07 21:29:39'),
(17, 4, 'Mr. Rudy Green', 'Excepturi accusantium minima cum velit debitis asperiores. Aspernatur numquam libero assumenda facere nihil consequatur cupiditate. Velit ut exercitationem nisi. Quas dignissimos qui inventore quos.', 'Itaque omnis maxime suscipit vel distinctio consequatur sit. Consequatur quia nobis nihil eaque quis debitis fuga. Non quo adipisci eveniet qui.', 'Et quod ut assumenda voluptatem non. Non perferendis ipsam dicta fugit est qui mollitia. Est aperiam doloremque laudantium nihil. Soluta ex natus et sit officia voluptate.', 'Dignissimos voluptas occaecati sit deleniti. Velit molestiae necessitatibus et id placeat. Aliquam eum nihil optio impedit ut omnis a id.', '', '2021-11-07 21:29:39', '2021-11-07 21:29:39'),
(18, 1, 'Neil Smith V', 'Officiis dignissimos impedit vel sint nihil provident reiciendis. Illum id repudiandae eos placeat quos. Neque necessitatibus numquam voluptas culpa.', 'Quo est aut aut. Delectus recusandae quasi est eligendi esse ut maxime vitae. Ratione minus dolore nisi qui et.', 'Et nobis possimus reprehenderit alias voluptates possimus. Laboriosam occaecati voluptas ad. Facere architecto eos eum numquam et. Magni eos nostrum rem.', 'Nisi velit vero eos nemo eveniet. Expedita rerum modi non praesentium. Accusantium quia cumque aliquam modi. Eos nesciunt facere excepturi rerum in nulla.', '', '2021-11-07 21:29:39', '2021-11-07 21:29:39'),
(19, 3, 'Amie Conn', 'Vitae repellendus quaerat porro rerum ut nesciunt. Et vero dolorem voluptas dignissimos quos aut. Vitae vitae possimus occaecati dolorum.', 'Facilis ex ratione fugit ex cupiditate. Neque delectus deleniti qui ut qui deleniti quam.', 'Ipsa commodi necessitatibus vitae. Asperiores dolor exercitationem quibusdam ab est soluta consequatur. Hic ut sed deleniti minus possimus. Aut velit modi ea hic rerum maxime rerum.', 'Minus est ipsam fugiat ipsum deserunt nobis. Eos et totam in dignissimos eum eos est. Dolorum qui ut aut corrupti beatae id et dolores. Doloremque esse magnam assumenda repellendus laudantium ad sed.', '', '2021-11-07 21:29:39', '2021-11-07 21:29:39'),
(20, 6, 'Mya Strosin MD', 'Illum nostrum non et soluta labore. Cupiditate quo reiciendis ea quasi eaque ea.', 'Voluptate et ea harum perspiciatis libero neque quae eveniet. Eum cum culpa consequatur quis dolores.', 'Voluptatum atque a reprehenderit excepturi velit ea est. Et similique nihil culpa quia tempore. Ea qui aspernatur nihil tenetur recusandae voluptatem expedita nostrum.', 'Ut adipisci iste rem. Ex quisquam earum in nemo incidunt sed. Velit accusamus ducimus ut asperiores ut.', '', '2021-11-07 21:29:39', '2021-11-07 21:29:39'),
(21, 1, 'Salvador Reinger IV', 'Cumque nostrum consequatur perferendis odit neque. Quisquam iusto porro dolores enim sit minus. Quos cumque quam nihil asperiores iusto. Est reprehenderit debitis repellat aut eum.', 'Maiores delectus autem facilis sed aut quod aut. Eum qui ut modi ullam at. Molestias officia et dolorem natus unde quidem possimus facilis.', 'Modi et ut at totam voluptas illum. Neque non optio ut quisquam. Sunt numquam sint enim nihil deserunt vel. Iste deleniti deserunt quia id corrupti sapiente vel.', 'Et et occaecati et distinctio. Qui commodi minima enim quas.', '', '2021-11-07 21:29:40', '2021-11-07 21:29:40'),
(22, 3, 'Prof. Natalia Sawayn', 'Est odit id qui non. Dolorem corrupti ea non quae voluptatem voluptas. Suscipit ipsum iste soluta pariatur fugit nihil voluptas maxime. Iure consectetur sit ut.', 'Vitae est adipisci fugit quo explicabo. Aut officia qui eaque non quos voluptatem. Architecto minima sunt sapiente architecto rem.', 'Esse accusamus incidunt ut nulla laboriosam. Laboriosam facere sed occaecati nobis quis. Fuga rem sit sapiente libero itaque inventore. Omnis accusantium facere ut nam vel nihil.', 'Tempore quis veritatis enim neque aspernatur maiores. Est consequatur excepturi perspiciatis delectus. Quos distinctio sed sed reiciendis non.', '', '2021-11-07 21:29:40', '2021-11-07 21:29:40'),
(23, 3, 'Ms. Lia Donnelly', 'Optio praesentium porro rem tempore natus. Vel non ad perspiciatis vel est cumque. Dolorem nostrum facere veritatis voluptas.', 'Et voluptas dolor voluptatem et corporis in. Et cum quo eum vel molestiae et. Beatae sint odit tenetur aut repellat quis nihil. Autem voluptas eum sit sed sunt iusto.', 'Fuga modi enim recusandae omnis. Ipsum esse dolores quis iusto quidem qui. Perspiciatis quo voluptates quis at et odio debitis. Beatae accusamus accusantium sit sunt vero.', 'Impedit ut qui quidem ut sequi voluptatibus est. Earum assumenda rem hic enim reiciendis itaque modi. Eveniet occaecati placeat possimus qui qui. Qui et iste modi repellat consequuntur labore.', '', '2021-11-07 21:29:40', '2021-11-07 21:29:40'),
(24, 2, 'Alejandra Carroll', 'Deleniti eius rem ipsam fugit modi. Eos sed qui et aut corporis officia nesciunt. Cumque ducimus culpa quae occaecati ut fugit voluptatem.', 'Eveniet delectus ratione perferendis quisquam. Aliquam est natus porro deserunt. Expedita non voluptatem ea sunt distinctio. Non nihil cum eos mollitia reprehenderit et non.', 'Minima delectus autem est reprehenderit. Odio architecto laboriosam iusto doloremque sunt. Hic quam consequuntur dolorum maxime dolores sunt odit.', 'Reprehenderit tenetur omnis sed dolorem. Asperiores sint possimus et dicta ipsum fugiat fugit voluptatem. Non accusamus aliquam aut saepe et. Impedit culpa rerum quis placeat explicabo.', '', '2021-11-07 21:29:40', '2021-11-07 21:29:40'),
(25, 6, 'Brooks Von MD', 'Earum nam possimus fuga reiciendis magni. Sit cumque officiis unde. Adipisci consequatur possimus consequuntur consequatur.', 'Dicta eos dolores at. Adipisci earum facilis nemo. Et sit qui vel ipsam aut dolor.', 'Ipsum qui perferendis doloremque. Dolor asperiores ullam doloribus et odio ipsum laudantium.', 'Cupiditate sunt non et voluptatum aut aut perferendis. Qui aut cum voluptas est beatae earum repellat. Aut consectetur omnis eum harum.', '', '2021-11-07 21:29:40', '2021-11-07 21:29:40'),
(26, 7, 'Joesph Weber', 'Enim suscipit voluptatem provident beatae voluptate. Ut necessitatibus tempora et enim. Architecto saepe alias eligendi fuga. Quasi consequatur aliquid voluptates doloremque quam eaque est.', 'Voluptatem placeat sunt consectetur quod aperiam. Corporis laboriosam quo pariatur ullam. Porro officiis labore ex architecto qui.', 'Rem officiis aut dolor quod. Nostrum quos quia ullam deleniti praesentium. Qui necessitatibus omnis voluptas quidem consectetur ex. Nam rem odit consequatur ex.', 'Reprehenderit quo tempora harum quae consectetur totam error dolor. Rerum modi porro architecto. Nesciunt aperiam quia nam.', '', '2021-11-07 21:29:40', '2021-11-07 21:29:40'),
(27, 6, 'Dagmar Champlin', 'Rerum rerum doloribus est non. Harum voluptas quia dicta dignissimos eligendi sit. Ut modi voluptatem nemo maxime. Officiis velit alias ab hic quia omnis.', 'Deleniti nam soluta tempora dolores accusamus. Quas quia nemo corrupti eligendi. Quasi eius nihil ad rerum.', 'Sunt consectetur rerum magnam omnis dignissimos assumenda tenetur. Rerum nihil illum nisi soluta. Nemo minima repellendus dolor non nostrum alias aut quod.', 'Vitae et dicta accusantium pariatur officia reiciendis consequatur. Iste corrupti quia et assumenda velit. Optio ea et quas maiores laudantium. Natus ea ipsum non quia odit.', '', '2021-11-07 21:29:40', '2021-11-07 21:29:40'),
(28, 1, 'a', 'asdadw', 'Place <em>some</em> <u>text</u> <strong>here</strong>', 'Place <em>some</em> <u>text</u> <strong>here</strong>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1020885.8518197088!2d117.03836196146659!3d1.806492733729201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320db9032df93133%3A0x2cea5b974756a685!2sKabupaten%20Berau%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1636064913855!5m2!1sid!2sid', 'QdbPezvH226UFOLfmDSJJa9e58X4M4nFtg5VGvER.jpg', '2021-11-07 21:36:28', '2021-11-07 21:36:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `destination_images`
--

CREATE TABLE `destination_images` (
  `destination_image_id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `destination_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `destination_images`
--

INSERT INTO `destination_images` (`destination_image_id`, `destination_id`, `destination_image`, `created_at`, `updated_at`) VALUES
(9, 3, 'cy2exZ06lSxDoMxGTcfiRJxa5Apa9qoEgZtVlsfA.png', '2021-11-04 15:03:17', '2021-11-04 15:03:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `destination_types`
--

CREATE TABLE `destination_types` (
  `destination_type_id` bigint(20) UNSIGNED NOT NULL,
  `destination_type_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `destination_types`
--

INSERT INTO `destination_types` (`destination_type_id`, `destination_type_nama`, `created_at`, `updated_at`) VALUES
(1, 'Wisata Alam', NULL, NULL),
(2, 'Wisata Belanja', NULL, NULL),
(3, 'Wisata Kuliner', NULL, NULL),
(4, 'Wisata Religi', NULL, NULL),
(5, 'Wisata Budaya', NULL, NULL),
(6, 'Wisata Agro', NULL, NULL),
(7, 'Wisata Minat Khusus', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date_start` date NOT NULL,
  `event_date_end` date NOT NULL,
  `event_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_desc`, `event_place`, `event_date_start`, `event_date_end`, `event_image`, `created_at`, `updated_at`) VALUES
(3, 'Name 2adasd', 'asdasdadwasdad', 'place1dwadasd', '2021-11-04', '2021-11-04', 'KezchRpAhurqHzv6jopeIrA8w8maLuR8Y2L8wC7D.jpg', '2021-11-03 02:11:59', '2021-11-03 10:20:26'),
(4, 'Name 2', 'Place <em>some</em> <u>text</u> <strong>here</strong>', 'place1', '2021-11-11', '2021-11-22', 'oinHkilT3UPnNPJZAgQ7BTmuPTl0nwDjWHjQl0rZ.png', '2021-11-03 02:12:20', '2021-11-03 02:12:20'),
(6, 'judul 1', '<p>                        Place <em>some</em> <u>text</u> <strong>hereasdawda<font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\">dwadasdaw</span></font></strong></p><ol><li><strong><font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\">adadawdadad</span></font></strong></li><li><strong><font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\">adwad</span></font></strong></li><li><strong><font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\">adwda</span></font></strong></li><li><strong><font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\">asdawdasdw</span></font></strong></li><li><strong><font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\">adad</span></font></strong></li></ol><p><strong><font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\">adwasdw</span></font></strong></p>', 'Banyumas', '2021-11-17', '2021-11-30', '6GWRhvcYyDiiKxxEkTea4b4XCxCcdwFoEfWZdKdd.jpg', '2021-11-03 02:37:53', '2021-11-03 02:37:53'),
(8, 'bb', 'Place <em>some</em> <u>text</u> <strong>here123</strong>', 'dd', '2021-11-26', '2021-11-26', 'rkLjufV3BiqN9cIvvZ1FpTEFJaCM6VS3sxXMI7L3.png', '2021-11-04 16:07:54', '2021-11-04 16:07:54'),
(10, 'Dr. Athena Parker III', 'Nulla qui ut autem necessitatibus rerum perspiciatis. Consectetur ex dolor architecto repellendus ex.', '828 Wyman Route Suite 118\nWest Martafort, TN 67456', '2011-10-02', '1977-07-25', 'Dr. Stan Feil', '2021-11-07 21:52:50', '2021-11-07 21:52:50'),
(11, 'Leola Walter', 'Nostrum voluptas et illum. Qui aperiam qui et fuga. Sunt minima voluptas et recusandae. Molestias perferendis laborum nemo sit molestiae saepe.', '517 Armstrong Courts Apt. 999\nWeimannborough, CA 60948-3685', '1978-04-01', '1995-04-03', 'Gertrude Ratke I', '2021-11-07 21:52:50', '2021-11-07 21:52:50'),
(12, 'Alice Hoeger MD', 'Ut quia occaecati natus. Molestias quis laudantium explicabo quo nobis laboriosam. Voluptatum et recusandae sed et et sed aut qui.', '623 Jadyn Way\nBernardmouth, OK 47510-8993', '2006-08-11', '2018-10-17', 'Vernon Ernser', '2021-11-07 21:52:51', '2021-11-07 21:52:51'),
(13, 'Darlene Jacobson', 'Quis consequatur dolores reiciendis non sit optio voluptas. Laborum voluptas veniam ut ea odio. Inventore molestias vel ab ea voluptate voluptas harum dolor.', '85587 Mike Tunnel Apt. 407\nProsaccoville, MA 34239', '1997-01-02', '1998-04-10', 'Prof. Estell Considine DVM', '2021-11-07 21:52:51', '2021-11-07 21:52:51'),
(14, 'Prof. Kaden Nikolaus', 'Laudantium earum ea numquam veritatis at. Ut numquam occaecati repellat perferendis nobis aut odio. Placeat enim facere et aut beatae sunt.', '3421 Georgiana Neck Apt. 329\nSadieport, VA 16370-0059', '2003-04-14', '1986-03-20', 'Greta Medhurst PhD', '2021-11-07 21:52:51', '2021-11-07 21:52:51'),
(15, 'Nikki Rogahn', 'Cumque veritatis explicabo nam aperiam recusandae et quibusdam enim. Autem totam dolor velit eum. Id consequatur libero molestiae soluta quaerat. Ad adipisci dignissimos vel quia aut itaque omnis.', '279 Kaylin Field Suite 470\nTwilaborough, VA 65041', '2018-06-24', '2007-05-15', 'Mr. Alexie Boehm Jr.', '2021-11-07 21:52:51', '2021-11-07 21:52:51'),
(16, 'Prof. Kenyatta Lueilwitz IV', 'Sed hic qui voluptas libero nostrum. Rerum veritatis eum velit ducimus ut quo veniam. Quia et sed et. Illo labore est beatae dolorum aliquam possimus autem aut.', '219 Bailey Burgs\nLake Alexandraside, IA 36194-1940', '1998-01-14', '1990-03-20', 'Andreane Harris', '2021-11-07 21:52:51', '2021-11-07 21:52:51'),
(17, 'Ryleigh Kirlin', 'Sit et voluptatum incidunt quod tenetur optio explicabo consequuntur. Culpa quasi aliquid rerum vel aperiam cumque qui. Beatae et nostrum expedita neque libero cupiditate.', '157 Treutel Centers\nWest Saul, MN 51429-5413', '2005-02-13', '1975-03-03', 'Prof. Lexie Kuhn', '2021-11-07 21:52:51', '2021-11-07 21:52:51'),
(18, 'Paolo Kertzmann', 'Repellendus dolores delectus repellat recusandae et. Velit et dolorem illum aliquid totam suscipit. Corrupti aliquid doloremque sed ex magni rerum enim.', '483 Arnoldo Road Suite 116\nNew Joanniefurt, MD 50708', '1972-11-04', '1994-08-25', 'Prof. Andre Block', '2021-11-07 21:52:51', '2021-11-07 21:52:51'),
(19, 'Mrs. Giovanna Lesch', 'Illum cum laboriosam esse facilis odit. Autem aut iure at enim. Tempora provident ut asperiores qui ut quis. Debitis pariatur dolor veritatis. Laborum sapiente suscipit consequatur et deserunt.', '67826 Crist Mills Suite 433\nNorth Vena, NJ 11171-6771', '1998-07-13', '1989-11-06', 'Erich Waelchi', '2021-11-07 21:52:52', '2021-11-07 21:52:52'),
(20, 'Mr. Rod Kling MD', 'Et et delectus minus deleniti esse accusamus minima. Est suscipit eaque qui dolore dolorem praesentium quasi. Maiores aut qui quis voluptates voluptate recusandae aut.', '7987 Estelle Ferry\nNorth Averychester, NV 91356', '2002-06-02', '2004-03-21', 'Gina Torp', '2021-11-07 21:52:52', '2021-11-07 21:52:52'),
(21, 'Dr. Edna Stroman', 'Ut voluptas minus est non. Ut eligendi velit alias at ut.', '88389 Chaim Flats\nCarliechester, KS 57898', '2000-12-31', '1975-02-19', 'Prof. Myrtis Schoen Jr.', '2021-11-07 21:52:52', '2021-11-07 21:52:52'),
(22, 'Ima Schulist', 'Inventore voluptatem nobis non et asperiores. Nihil sunt nam itaque. Placeat excepturi nesciunt dolore autem vel. Enim distinctio aut sequi sed.', '812 Layla Land\nHartmannchester, CO 92550', '1974-08-29', '2006-11-15', 'Ariel DuBuque', '2021-11-07 21:52:52', '2021-11-07 21:52:52'),
(23, 'Prof. Stanford Lebsack V', 'Eos pariatur quo delectus quidem. Nam et dolorem qui quia labore et voluptas.', '5838 White Mountain Suite 920\nWest Priscilla, WI 56567', '1970-01-16', '1995-02-11', 'Sylvan Willms', '2021-11-07 21:52:52', '2021-11-07 21:52:52'),
(24, 'Moriah Huels', 'Praesentium est dicta soluta. Sequi harum ipsa sint sed. Accusamus aspernatur aut molestiae est qui. Exercitationem magni dolor ut quasi. Iure sed ut minus natus autem iusto sint.', '226 Stanford Roads Apt. 260\nValerieberg, MO 93616-4811', '1974-03-17', '2011-05-12', 'Mercedes Lehner', '2021-11-07 21:52:52', '2021-11-07 21:52:52'),
(25, 'Makenna Yundt', 'Beatae et quis dolore officia quia. Quia laudantium similique porro rerum ut. Tempora nostrum ut possimus et atque corporis dolore. Cum architecto sit veniam ea natus ex repellendus.', '420 Guy Plain Suite 884\nWest Ferne, VA 32440', '1980-02-29', '1980-08-03', 'Godfrey Halvorson', '2021-11-07 21:52:52', '2021-11-07 21:52:52'),
(26, 'Ford Franecki III', 'Quaerat ut exercitationem corrupti mollitia. Omnis illum maxime quod illo. Doloribus et libero labore eos quod qui aut.', '5650 Osinski Centers Apt. 512\nLake Lilyan, KS 51831-1745', '2000-07-15', '2005-10-21', 'Domenic Ryan', '2021-11-07 21:52:52', '2021-11-07 21:52:52'),
(27, 'Bianka Botsford IV', 'Omnis nulla deleniti harum nulla vel dolores est. Dolores molestiae aut vel magni. Saepe ab consequatur aut. Deleniti error magni et eius.', '58471 Lynch Plains Suite 870\nBartonstad, MI 30138', '1989-05-05', '1975-01-14', 'Eloy Brekke', '2021-11-07 21:52:52', '2021-11-07 21:52:52'),
(28, 'Cecelia McClure', 'Asperiores aut aut sit ratione. Enim omnis architecto vel voluptatem est maiores. Dicta dicta qui illum et eos eaque sequi. Est sunt sed itaque minus.', '2888 Aufderhar Bridge\nNorth Muhammadberg, CO 15963-0952', '1979-02-05', '1984-12-15', 'Julianne Goyette PhD', '2021-11-07 21:52:52', '2021-11-07 21:52:52'),
(29, 'Maximillian Yundt', 'Ea repudiandae et quia qui nobis delectus praesentium. Corrupti ratione minima omnis beatae debitis. Illum id rem aliquam ut.', '1165 Mertz Roads\nKesslershire, MT 15978-2859', '2011-07-02', '2010-11-28', 'Adell Sporer', '2021-11-07 21:52:52', '2021-11-07 21:52:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2021_10_31_153017_create_events_table', 1),
(11, '2021_11_02_015526_create_destinations_table', 2),
(12, '2021_11_04_214011_create_videos_table', 3),
(13, '2021_11_07_174606_create_testimonis_table', 4),
(14, '2014_10_12_100000_create_password_resets_table', 5),
(15, '2021_11_08_053614_user', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('whytrno2205@gmail.com', '$2y$10$KkCiQbrdw/dWJhz4EyXjA.5v4HSC3wOILLeBViv3Y.gibVlffRFCy', '2021-11-07 23:22:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `setting_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `address_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`setting_id`, `name`, `description`, `logo`, `no_hp`, `email`, `address`, `address_url`, `created_at`, `updated_at`) VALUES
(1, 'SINTAKA1', 'SINTAKA adalah sistem indeks berbasis website yang berfungsi untuk memberikan informasi mengenai pariwisata di Kabupaten Karanganyar2', 'logo.jpg', '0812273855982', 'SINTAKAranganyar@gmail.com.com1', 'Karanganyar, Jawa Tengah1', 'https://goo.gl/maps/yXsADQ9otVcCdrbX7', '2021-11-08 03:05:17', '2021-11-07 20:05:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `slider_desc` text NOT NULL,
  `slider_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider_title`, `slider_desc`, `slider_img`, `created_at`, `updated_at`) VALUES
(3, 'Selamat datang di SINTAKA1', 'SINTAKA merupakan sistem indeks berbasis website yang berfungsi untuk memberikan informasi mengenai pariwisata di Kabupaten Karanganyar2', 'VgWLJEQgroriTGYiX7hSwlqmRIFq1pgHbtFchLjB.jpg', '2021-11-07 17:35:16', '2021-11-07 10:35:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonis`
--

CREATE TABLE `testimonis` (
  `testimoni_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonis`
--

INSERT INTO `testimonis` (`testimoni_id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Bambang', 'Wah bagus banget', NULL, NULL),
(2, 'Siti', 'Heh kamu berdosa bambang!', NULL, NULL),
(4, 'Bambang', 'Heh kamu siti, nakal sekali ya kamu!', '2021-11-07 19:38:07', '2021-11-07 19:39:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bambang', 'whytrno2205@gmail.com', NULL, '$2y$10$SH1wzZ5QoXc9pxL0oLJ8Z.z4UR8RY/0sG1LsHvBbjLKxPy28K9x8.', NULL, '2021-11-07 22:38:58', '2021-11-07 22:38:58'),
(2, 'Bambang', 'admin@admin.com', NULL, '$2y$10$wWJEYRBrhwIFRmV9l06x8e8K/moZ7J2Ul7EgZghEJtrvCc8z5QkG6', NULL, '2021-11-07 22:52:36', '2021-11-07 22:52:36'),
(3, 'awdawd', 'admin@gmail.com', NULL, 'admin123', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `video_id` bigint(20) UNSIGNED NOT NULL,
  `video_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `videos`
--

INSERT INTO `videos` (`video_id`, `video_url`, `created_at`, `updated_at`) VALUES
(2, '<blockquote class=\"tiktok-embed\" cite=\"https://www.tiktok.com/@laaatief/video/7009728881989045531\" data-video-id=\"7009728881989045531\" style=\"max-width: 605px;min-width: 325px;\" > <section> <a target=\"_blank\" title=\"@laaatief\" href=\"https://www.tiktok.com/@laaatief\">@laaatief</a> <a title=\"fyp\" target=\"_blank\" href=\"https://www.tiktok.com/tag/fyp\">#fyp</a> <a title=\"xyzbca\" target=\"_blank\" href=\"https://www.tiktok.com/tag/xyzbca\">#xyzbca</a> <a title=\"palembang\" target=\"_blank\" href=\"https://www.tiktok.com/tag/palembang\">#palembang</a> <a title=\"kejujogetgoldslice\" target=\"_blank\" href=\"https://www.tiktok.com/tag/kejujogetgoldslice\">#kejujogetgoldslice</a> <a title=\"popiceactivelawanhalu\" target=\"_blank\" href=\"https://www.tiktok.com/tag/popiceactivelawanhalu\">#PopIceActiveLawanHalu</a> <a title=\"fypsounds\" target=\"_blank\" href=\"https://www.tiktok.com/tag/fypsounds\">#fypsounds</a> <a target=\"_blank\" title=\"♬ suara asli - 🤡😜🤪 - Budak.nyakhaga\" href=\"https://www.tiktok.com/music/suara-asli-🤡😜🤪-7003029193571240731\">♬ suara asli - 🤡😜🤪 - Budak.nyakhaga</a> </section> </blockquote> <script async src=\"https://www.tiktok.com/embed.js\"></script>', NULL, NULL),
(3, '<blockquote class=\"tiktok-embed\" cite=\"https://www.tiktok.com/@de.vinaalmira/video/7020669601990151451\" data-video-id=\"7020669601990151451\" style=\"max-width: 605px;min-width: 325px;\" > <section> <a target=\"_blank\" title=\"@de.vinaalmira\" href=\"https://www.tiktok.com/@de.vinaalmira\">@de.vinaalmira</a> <p>Sound ini menyadarkan kita semua 🥲👍🏼</p> <a target=\"_blank\" title=\"♬ suara asli  - jokosusilo\" href=\"https://www.tiktok.com/music/suara-asli-jokosusilo-7018179614690822938\">♬ suara asli  - jokosusilo</a> </section> </blockquote> <script async src=\"https://www.tiktok.com/embed.js\"></script>', NULL, NULL),
(4, '<blockquote class=\"tiktok-embed\" cite=\"https://www.tiktok.com/@aniyahlovers1/video/7021442587122765083\" data-video-id=\"7021442587122765083\" style=\"max-width: 605px;min-width: 325px;\" > <section> <a target=\"_blank\" title=\"@aniyahlovers1\" href=\"https://www.tiktok.com/@aniyahlovers1\">@aniyahlovers1</a> <p>Diam memantau, bergerak jadi beban🤣 <a title=\"fyp\" target=\"_blank\" href=\"https://www.tiktok.com/tag/fyp\">#fyp</a> <a title=\"samasamaberkarya\" target=\"_blank\" href=\"https://www.tiktok.com/tag/samasamaberkarya\">#samasamaberkarya</a> <a title=\"transisi\" target=\"_blank\" href=\"https://www.tiktok.com/tag/transisi\">#transisi</a></p> <a target=\"_blank\" title=\"♬ suara asli - Aniyah Lovers - Aniyah Lovers✨\" href=\"https://www.tiktok.com/music/suara-asli-Aniyah-Lovers-7018559168000871195\">♬ suara asli - Aniyah Lovers - Aniyah Lovers✨</a> </section> </blockquote> <script async src=\"https://www.tiktok.com/embed.js\"></script>', '2021-11-07 20:45:34', '2021-11-07 20:45:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`destination_id`),
  ADD KEY `destinations_destination_type_id_foreign` (`destination_type_id`);

--
-- Indeks untuk tabel `destination_images`
--
ALTER TABLE `destination_images`
  ADD PRIMARY KEY (`destination_image_id`),
  ADD KEY `destinations_image_destination_id_foreign` (`destination_id`);

--
-- Indeks untuk tabel `destination_types`
--
ALTER TABLE `destination_types`
  ADD PRIMARY KEY (`destination_type_id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indeks untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`testimoni_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `destinations`
--
ALTER TABLE `destinations`
  MODIFY `destination_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `destination_images`
--
ALTER TABLE `destination_images`
  MODIFY `destination_image_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `destination_types`
--
ALTER TABLE `destination_types`
  MODIFY `destination_type_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `testimoni_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `destinations_destination_type_id_foreign` FOREIGN KEY (`destination_type_id`) REFERENCES `destination_types` (`destination_type_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `destination_images`
--
ALTER TABLE `destination_images`
  ADD CONSTRAINT `destinations_image_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`destination_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
