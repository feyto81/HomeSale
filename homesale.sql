-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Feb 2021 pada 10.10
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homesale`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agen`
--

CREATE TABLE `agen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agen`
--

INSERT INTO `agen` (`id`, `name`, `email`, `phone`, `no_wa`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Aan Febriyan', 'Aan@gmail.com', '+62882718721627', '628382783728387', 'Bumiharjo', '2021-02-03 08:06:18', '2021-02-03 08:06:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apartemen`
--

CREATE TABLE `apartemen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedrooms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathrooms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agen_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `apartemen`
--

INSERT INTO `apartemen` (`id`, `name`, `thumbnail`, `gambar1`, `gambar2`, `gambar3`, `price`, `luas`, `address`, `city`, `provinsi`, `room`, `bedrooms`, `bathrooms`, `description`, `details`, `features`, `video_link`, `location`, `status`, `agen_id`, `created_at`, `updated_at`) VALUES
(1, 'Contoh', 'apartemen/yECQ8tLUi794j67GiLkJQMWdjHYZJlxXYC8VtOAi.jpg', 'apartemen/1Bjyj7IlAWeFJFEN6MjgdTe8K99PS0FAvJLcTz1I.jpg', 'apartemen/rQyiaOqSjpf3jPu9KGavA2Li7vOzg5z0f7nUj8U5.jpg', 'apartemen/maMCfZC5eTrcWGRiM9xKa1HYQrwzmbQqw8X2X5vO.jpg', '2000000', '12m x 16m', 'Ngemplak', 'Kediri', 'Jawa Timur', '2', '3', '3', 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus turpis.', 'Building Age: 2 Years\r\nParking: Attached Garage\r\nCooling: Central Cooling\r\nHeating: Forced Air, Gas\r\nSewer: Public/City\r\nWater: City\r\nExercise Room: Yes\r\nStorage Room: Yes', 'Air Conditioning\r\nSwimming Pool\r\nCentral Heating\r\nLaundry Room\r\nGym\r\nAlarm\r\nWindow Covering\r\nInternet', 'https://www.youtube.com/embed/rkOG7ehp-SM', 'https://www.youtube.com/embed/rkOG7ehp-SM', 'Jual', 2, '2021-02-05 11:24:45', '2021-02-05 11:24:45'),
(2, 'Contoh', 'apartemen/8fBlmWtWtI0Xjp2spZgh2c4HH5j3Ckq6OVTiV0ha.jpg', 'apartemen/Kcoub1Aj3rRfsfRoWJOtZF0egjASddjmNNFFCcjQ.jpg', 'apartemen/EtRTmJBcxu5juAKS3X09AjTEuGsFc0hcNn7iUjWa.jpg', 'apartemen/QYzgP4iAAEfJu66yhlYCsBPshVU0Ql1Zdwi1iA0r.jpg', '100000000', '12m x 12m', 'Donorojo', 'Jepara', 'Jawa Tengah', '2', '2', '3', 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.', 'Building Age: 2 Years Parking: Attached Garage Cooling: Central Cooling Heating: Forced Air, Gas Sewer: Public/City Water: City Exercise Room: Yes Storage Room: Yes', 'Air Conditioning Swimming Pool Central Heating Laundry Room Gym Alarm Window Covering Internet', 'https://www.youtube.com/embed/rkOG7ehp-SM', 'https://www.youtube.com/embed/rkOG7ehp-SM', 'Sewa', 2, '2021-02-06 08:50:17', '2021-02-06 08:50:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `slug`, `content`, `gambar`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '8 Tips to Help You Finding New Home', '8-tips-to-help-you-finding-new-home', 'n ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.\r\n\r\nPhasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio.', 'artikel/I0tGZAeonrUMslxSc64PW7Y3skacLsQkYPzZL79f.jpg', 1, '2021-02-06 12:16:20', '2021-02-06 12:16:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `name`, `mobile_number`, `email`, `address`, `kodepos`, `password`, `created_at`, `updated_at`) VALUES
(1, 'contoh', '088228740010', 'contoh@gmail.com', 'Bumiharjo RT 01 RW 01', '59454', '$2y$10$78eQ5M5iqh87UlKIwx8ql.Szs16xOejqivVTFeZF6EaD2kQQU3RgO', '2021-01-21 07:24:01', '2021-01-21 07:24:01'),
(2, 'dsdj', '082271827', 'sherien@gmail.com', 'hdsahsag', '2372', '$2y$10$s1UqHhhlvqDh85TjnMjGTeKO83SSULnJ.GHISyiLs2oWbvojIAFrK', '2021-01-21 07:26:59', '2021-01-21 07:26:59'),
(3, 'cdsd', '9382832738', 'dsdj@gmail.com', 'jssh', '72812', '$2y$10$Hogkuwlup0SQ9i/uKihaW.WiGHnlkYCqFYPh/0e73fG6qx39Kh4SS', '2021-01-21 07:29:30', '2021-01-21 07:29:30'),
(4, 'dsddsd', '0328348343847', 'dskjdsd@gmail.com', 'jsahsjahsj', 'jdahsja', '$2y$10$1NfbW4VE9wUO9ikNZP9y0.DIRjpVdV9epOc9NJDg7Pq8cNL1/T8hS', '2021-01-21 11:34:40', '2021-01-21 12:17:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', '2021-01-21 04:21:33', '2021-01-21 04:21:33'),
(2, 'owner', '2021-01-21 19:41:25', '2021-01-21 19:41:25');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_01_21_041743_create_level_table', 1),
(4, '2021_01_21_042006_create_users_table', 2),
(5, '2021_01_21_092005_create_customer_table', 3),
(6, '2021_01_21_124655_create_customer_table', 4),
(7, '2021_01_21_195520_create_owner_table', 5),
(8, '2021_02_03_143840_create_agen_table', 6),
(9, '2021_02_03_152611_create_perumahan_table', 7),
(10, '2021_02_04_055251_create_apartemen_table', 8),
(11, '2021_02_06_185018_create_artikel_table', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `owner`
--

CREATE TABLE `owner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `owner`
--

INSERT INTO `owner` (`id`, `name`, `mobile_number`, `email`, `address`, `kodepos`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Aan Febriyan', '08058848239', 'Aan@gmail.com', 'sasasaas', '0839238', '$2y$10$BIiTOSEEsASXKFLWX3ZoReuP/c7pKhrM0B2lEll8HNskJLKbQeoMi', '2021-01-21 13:11:59', '2021-01-21 13:12:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perumahan`
--

CREATE TABLE `perumahan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedrooms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathrooms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agen_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perumahan`
--

INSERT INTO `perumahan` (`id`, `name`, `thumbnail`, `gambar1`, `gambar2`, `gambar3`, `price`, `luas`, `address`, `city`, `provinsi`, `room`, `bedrooms`, `bathrooms`, `description`, `details`, `features`, `video_link`, `location`, `status`, `agen_id`, `created_at`, `updated_at`) VALUES
(4, 'Selway Apartments', 'perumahan/O5MqS0nw0nHoGgg9pvDPOkoawx1WX6B2w0WrHvCM.jpg', 'perumahan/A2pAMWTCZNwlu4LZYR6m3sspapEWdmJBXbZSb0iS.jpg', 'perumahan/JhZp7Q3WIyDrmEsCyRRFhmyW6UTl6yeJlEdPeXeS.jpg', 'perumahan/Bm2wLJXAWVRJvoahlqFZv7Vdd6LEi27gLWGbE7zr.jpg', '3000000', '12 m', 'Kelet,Jepara', 'Semarang', 'Jawa Tengah', '2', '3', '2', 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus turpis.', 'Building Age: 2 Years\r\nParking: Attached Garage\r\nCooling: Central Cooling\r\nHeating: Forced Air, Gas\r\nSewer: Public/City\r\nWater: City\r\nExercise Room: Yes\r\nStorage Room: Yes', 'Air Conditioning\r\nSwimming Pool\r\nCentral Heating\r\nLaundry Room\r\nGym\r\nAlarm\r\nWindow Covering\r\nInternet', 'https://www.youtube.com/embed/rkOG7ehp-SM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63436.1425443225!2d110.90137715277793!3d-6.425013963616947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7130bce4a99e5b%3A0x90921c40e897c4be!2sBenteng%20Portugis!5e0!3m2!1sid!2sid!4v1612443408045!5m2!1sid!2sid', 'Jual', 2, '2021-02-04 12:59:15', '2021-02-04 12:59:15'),
(5, 'Serene Uptown', 'perumahan/swdaO8kfqcbxbwe53ImbwNdEA5lclklwGGolzopj.jpg', 'perumahan/Ga3Jsy06YXNmLK7LV1XVyF9VVOPQZ5ldZmIiao6B.jpg', 'perumahan/4fzMLdE6I0iFFDY1qR5SlBr0JzYFxXQC0IqbZ68M.jpg', 'perumahan/GFXIx3Mgk2XKvkdZVJ8jTaTIMIqjaO64lVKjOmvA.jpg', '100000', '12m x 12m', 'Bumiharjo,Keling,Jepara', 'Jepara', 'Jawa Tengah', '2', '2', '3', 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus turpis.', 'Building Age: 2 Years\r\nParking: Attached Garage\r\nCooling: Central Cooling\r\nHeating: Forced Air, Gas\r\nSewer: Public/City\r\nWater: City\r\nExercise Room: Yes\r\nStorage Room: Yes', 'Air Conditioning\r\nSwimming Pool\r\nCentral Heating\r\nLaundry Room\r\nGym\r\nAlarm\r\nWindow Covering\r\nInternet', 'https://www.youtube.com/embed/rkOG7ehp-SM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63436.1425443225!2d110.90137715277793!3d-6.425013963616947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7130bce4a99e5b%3A0x90921c40e897c4be!2sBenteng%20Portugis!5e0!3m2!1sid!2sid!4v1612443408045!5m2!1sid!2sid', 'Jual', 2, '2021-02-05 10:13:20', '2021-02-05 10:13:20'),
(6, 'Seas s', 'perumahan/RHU0gAAdNBalUzDanGzMQMFUP0hSufgJaGhbZCxg.jpg', 'perumahan/WCK2azipZ9svtcNe9aQJVjS4td9Gr18SVxxnMH3d.jpg', 'perumahan/I1Y259l7DWtW62YBuF4j7sKaHAI7zurUMaxkNJt7.jpg', 'perumahan/VZ4U3Y9APiSvgxPkVVYTEsZctC9gwzvW8HOjqQGh.jpg', '2000000', '14m x 19m', 'Pluit', 'Jakarta Utara', 'Jakarta', '2', '2', '3', 'Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.', 'Building Age: 2 Years\r\nParking: Attached Garage\r\nCooling: Central Cooling\r\nHeating: Forced Air, Gas\r\nSewer: Public/City\r\nWater: City\r\nExercise Room: Yes\r\nStorage Room: Yes', 'Air Conditioning\r\nSwimming Pool\r\nCentral Heating\r\nLaundry Room\r\nGym\r\nAlarm\r\nWindow Covering\r\nInternet', 'https://www.youtube.com/embed/rkOG7ehp-SM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63436.1425443225!2d110.90137715277793!3d-6.425013963616947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7130bce4a99e5b%3A0x90921c40e897c4be!2sBenteng%20Portugis!5e0!3m2!1sid!2sid!4v1612443408045!5m2!1sid!2sid', 'Sewa', 2, '2021-02-05 12:04:17', '2021-02-05 12:04:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `foto`, `email`, `password`, `level_id`, `created_at`, `updated_at`) VALUES
(1, 'Aan', 'avatar/lpHt5twvn2CLQqEHNWmYGVOzn8qBgpoDs8H75xML.jpg', 'admin@gmail.com', '$2y$10$Pw75GEdqTC4oWXnnQY.YUOSlsTZhwq03UtJ0N3KTdgsBYJX78NZIu', 1, '2021-01-21 04:22:15', '2021-02-04 00:01:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `apartemen`
--
ALTER TABLE `apartemen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apartemen_agen_id_foreign` (`agen_id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikel_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `perumahan`
--
ALTER TABLE `perumahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perumahan_agen_id_foreign` (`agen_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_level_id_foreign` (`level_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agen`
--
ALTER TABLE `agen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `apartemen`
--
ALTER TABLE `apartemen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `owner`
--
ALTER TABLE `owner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `perumahan`
--
ALTER TABLE `perumahan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `apartemen`
--
ALTER TABLE `apartemen`
  ADD CONSTRAINT `apartemen_agen_id_foreign` FOREIGN KEY (`agen_id`) REFERENCES `agen` (`id`);

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `perumahan`
--
ALTER TABLE `perumahan`
  ADD CONSTRAINT `perumahan_agen_id_foreign` FOREIGN KEY (`agen_id`) REFERENCES `agen` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
