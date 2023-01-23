-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 05:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject_licoreria`
--

-- --------------------------------------------------------

--
-- Table structure for table `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` bigint(20) UNSIGNED NOT NULL,
  `crg_nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crg_acceso_admin` tinyint(1) NOT NULL,
  `crg_descripcion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `crg_nombre`, `crg_acceso_admin`, `crg_descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Cliente', 0, NULL, NULL, NULL),
(2, 'Administrador', 1, NULL, NULL, NULL),
(3, 'Vendedor', 1, 'Encargado del proceso de venta', '2022-12-08 20:06:11', '2022-12-08 20:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `ctg_nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctg_descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `ctg_nombre`, `ctg_descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Licores', NULL, NULL, '2022-10-07 21:18:07'),
(2, 'Camping', NULL, '2022-10-05 05:30:14', '2022-10-05 05:30:14'),
(10, 'Pack bebidas', 'Conjunto de bebidas a menor precio', '2022-10-07 21:28:29', '2022-10-07 21:28:29'),
(11, 'Cerveza', NULL, '2022-11-05 03:51:39', '2022-11-05 03:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `comprobantes`
--

CREATE TABLE `comprobantes` (
  `id_comprobante` bigint(20) UNSIGNED NOT NULL,
  `cmp_serie` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmp_tipo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmp_numero` int(11) NOT NULL,
  `cmp_pdf_path` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmp_descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `descuentos`
--

CREATE TABLE `descuentos` (
  `id_descuento` bigint(20) UNSIGNED NOT NULL,
  `id_tipo_descuento` bigint(20) UNSIGNED NOT NULL COMMENT '1=Individual, 2=General, 3=Cupón',
  `dsc_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dsc_cantidad` int(11) NOT NULL,
  `dsc_codigo` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dsc_estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `descuentos`
--

INSERT INTO `descuentos` (`id_descuento`, `id_tipo_descuento`, `dsc_nombre`, `dsc_cantidad`, `dsc_codigo`, `dsc_estado`, `created_at`, `updated_at`) VALUES
(1, 2, 'Precio Online', 2, NULL, 1, NULL, NULL),
(2, 2, 'Primera compra', 3, NULL, 1, NULL, NULL),
(3, 3, 'Cupón por primera compra', 10, '1STBUY', 1, NULL, '2022-12-07 11:48:53'),
(4, 1, 'Campaña de Burgos', 15, NULL, 1, NULL, '2023-01-12 02:39:37'),
(5, 3, 'Cupón por día de las madres', 15, 'MOMDAY', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detalles_pedidos`
--

CREATE TABLE `detalles_pedidos` (
  `id_detalle_pedido` bigint(20) UNSIGNED NOT NULL,
  `id_pedido` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `dtl_precio` double(8,2) NOT NULL,
  `dtl_cantidad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detalles_users`
--

CREATE TABLE `detalles_users` (
  `id_dtl_user` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `dtl_usr_firstBuy` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `direcciones`
--

CREATE TABLE `direcciones` (
  `id_direccion` bigint(20) UNSIGNED NOT NULL,
  `id_distrito` bigint(20) UNSIGNED NOT NULL DEFAULT 13,
  `drc_direccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distritos`
--

CREATE TABLE `distritos` (
  `id_distrito` bigint(20) UNSIGNED NOT NULL,
  `id_provincia` bigint(20) UNSIGNED NOT NULL,
  `dst_nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dst_ubigueo` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dst_precio_delivery` double(4,2) DEFAULT 5.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distritos`
--

INSERT INTO `distritos` (`id_distrito`, `id_provincia`, `dst_nombre`, `dst_ubigueo`, `dst_precio_delivery`, `created_at`, `updated_at`) VALUES
(1, 1, 'Carhuacallanga', '120104', 5.00, NULL, NULL),
(2, 1, 'Chacapampa', '120105', 5.00, NULL, NULL),
(3, 1, 'Chicche', '120106', 5.00, NULL, NULL),
(4, 1, 'Chilca', '120107', 5.00, NULL, NULL),
(5, 1, 'Chongos Alto', '120108', 5.00, NULL, NULL),
(6, 1, 'Chupuro', '120111', 5.00, NULL, NULL),
(7, 1, 'Colca', '120112', 5.00, NULL, NULL),
(8, 1, 'Cullhuas', '120113', 5.00, NULL, NULL),
(9, 1, 'El Tambo', '120114', 5.00, NULL, NULL),
(10, 1, 'Huacrapuquio', '120116', 5.00, NULL, NULL),
(11, 1, 'Hualhuas', '120117', 5.00, NULL, NULL),
(12, 1, 'Huancán', '120119', 5.00, NULL, NULL),
(13, 1, 'Huancayo', '120101', 5.00, NULL, NULL),
(14, 1, 'Huasicancha', '120120', 5.00, NULL, NULL),
(15, 1, 'Huayucachi', '120121', 5.00, NULL, NULL),
(16, 1, 'Ingenio', '120122', 5.00, NULL, NULL),
(17, 1, 'Pariahuanca', '120124', 5.00, NULL, NULL),
(18, 1, 'Pilcomayo', '120125', 5.00, NULL, NULL),
(19, 1, 'Pucará', '120126', 5.00, NULL, NULL),
(20, 1, 'Quichuay', '120127', 5.00, NULL, NULL),
(21, 1, 'Quilcas', '120128', 5.00, NULL, NULL),
(22, 1, 'San Agustín de Cajas', '120129', 5.00, NULL, NULL),
(23, 1, 'San Jerónimo de Tunán', '120130', 5.00, NULL, NULL),
(24, 1, 'San Pedro de Saño', '120132', 5.00, NULL, NULL),
(25, 1, 'Santo Domingo de Acobamba', '120135', 5.00, NULL, NULL),
(26, 1, 'Sapallanga', '120133', 5.00, NULL, NULL),
(27, 1, 'Sicaya', '120134', 5.00, NULL, NULL),
(28, 1, 'Viques', '120136', 5.00, NULL, NULL),
(29, 2, 'La Merced', NULL, 5.00, NULL, NULL),
(30, 2, 'San Luis de Shuaro', NULL, 5.00, NULL, NULL),
(31, 2, 'Perené', NULL, 5.00, NULL, NULL),
(32, 2, 'Pichanaqui', NULL, 5.00, NULL, NULL),
(33, 2, 'San Ramón', NULL, 5.00, NULL, NULL),
(34, 2, 'Vítoc', NULL, 5.00, NULL, NULL),
(35, 3, 'Chupaca', NULL, 5.00, NULL, NULL),
(36, 3, 'Áhuac', NULL, 5.00, NULL, NULL),
(37, 3, 'Chongos Bajo', NULL, 5.00, NULL, NULL),
(38, 3, 'Huáchac', NULL, 5.00, NULL, NULL),
(39, 3, 'Huamancaca Chico', NULL, 5.00, NULL, NULL),
(40, 3, 'San Juan de Yscos', NULL, 5.00, NULL, NULL),
(41, 3, 'San Juan de Jarpa', NULL, 5.00, NULL, NULL),
(42, 3, 'Tres de Diciembre', NULL, 5.00, NULL, NULL),
(43, 3, 'Yanacancha', NULL, 5.00, NULL, NULL),
(44, 4, 'Concepción', NULL, 5.00, NULL, NULL),
(45, 4, 'Aco', NULL, 5.00, NULL, NULL),
(46, 4, 'Andamarca', NULL, 5.00, NULL, NULL),
(47, 4, 'Chambara', NULL, 5.00, NULL, NULL),
(48, 4, 'Cochas', NULL, 5.00, NULL, NULL),
(49, 4, 'Comas', NULL, 5.00, NULL, NULL),
(50, 4, 'Heroínas Toledo', NULL, 5.00, NULL, NULL),
(51, 4, 'Manzanares', NULL, 5.00, NULL, NULL),
(52, 4, 'Mariscal Castilla', NULL, 5.00, NULL, NULL),
(53, 4, 'Matahuasi', NULL, 5.00, NULL, NULL),
(54, 4, 'Mito', NULL, 5.00, NULL, NULL),
(55, 4, 'Nueve de Julio', NULL, 5.00, NULL, NULL),
(56, 4, 'Orcotuna', NULL, 5.00, NULL, NULL),
(57, 4, 'San José de Quero', NULL, 5.00, NULL, NULL),
(58, 4, 'Santa Rosa de Ocopa', NULL, 5.00, NULL, NULL),
(59, 5, 'Jauja', NULL, 5.00, NULL, NULL),
(60, 5, 'Acolla', NULL, 5.00, NULL, NULL),
(61, 5, 'Apata', NULL, 5.00, NULL, NULL),
(62, 5, 'Ataura', NULL, 5.00, NULL, NULL),
(63, 5, 'Canchayllo', NULL, 5.00, NULL, NULL),
(64, 5, 'Curicaca', NULL, 5.00, NULL, NULL),
(65, 5, 'El Mantaro', NULL, 5.00, NULL, NULL),
(66, 5, 'Huamalí', NULL, 5.00, NULL, NULL),
(67, 5, 'Huaripampa', NULL, 5.00, NULL, NULL),
(68, 5, 'Huertas', NULL, 5.00, NULL, NULL),
(69, 5, 'Janjaillo', NULL, 5.00, NULL, NULL),
(70, 5, 'Julcán', NULL, 5.00, NULL, NULL),
(71, 5, 'Leonor Ordóñez', NULL, 5.00, NULL, NULL),
(72, 5, 'Llocllapampa', NULL, 5.00, NULL, NULL),
(73, 5, 'Marco', NULL, 5.00, NULL, NULL),
(74, 5, 'Masma', NULL, 5.00, NULL, NULL),
(75, 5, 'Masma Chicche', NULL, 5.00, NULL, NULL),
(76, 5, 'Molinos', NULL, 5.00, NULL, NULL),
(77, 5, 'Monobamba', NULL, 5.00, NULL, NULL),
(78, 5, 'Muqui', NULL, 5.00, NULL, NULL),
(79, 5, 'Muquiyauyo', NULL, 5.00, NULL, NULL),
(80, 5, 'Paca', NULL, 5.00, NULL, NULL),
(81, 5, 'Paccha', NULL, 5.00, NULL, NULL),
(82, 5, 'Pancán', NULL, 5.00, NULL, NULL),
(83, 5, 'Parco', NULL, 5.00, NULL, NULL),
(84, 5, 'Pomacancha', NULL, 5.00, NULL, NULL),
(85, 5, 'Ricrán', NULL, 5.00, NULL, NULL),
(86, 5, 'San Lorenzo', NULL, 5.00, NULL, NULL),
(87, 5, 'San Pedro de Chunán', NULL, 5.00, NULL, NULL),
(88, 5, 'Sausa', NULL, 5.00, NULL, NULL),
(89, 5, 'Sincos', NULL, 5.00, NULL, NULL),
(90, 5, 'Tunanmarca', NULL, 5.00, NULL, NULL),
(91, 5, 'Yauli', NULL, 5.00, NULL, NULL),
(92, 5, 'Yauyos', NULL, 5.00, NULL, NULL),
(93, 6, 'Junín', NULL, 5.00, NULL, NULL),
(94, 6, 'Carhuamayo', NULL, 5.00, NULL, NULL),
(95, 6, 'Ondores', NULL, 5.00, NULL, NULL),
(96, 6, 'Ulcumayo', NULL, 5.00, NULL, NULL),
(97, 7, 'Satipo', NULL, 5.00, NULL, NULL),
(98, 7, 'Coviriali', NULL, 5.00, NULL, NULL),
(99, 7, 'Llaylla', NULL, 5.00, NULL, NULL),
(100, 7, 'Mazamari', NULL, 5.00, NULL, NULL),
(101, 7, 'Pampa Hermosa', NULL, 5.00, NULL, NULL),
(102, 7, 'Pangoa', NULL, 5.00, NULL, NULL),
(103, 7, 'Río Ene', NULL, 5.00, NULL, NULL),
(104, 7, 'Río Negro', NULL, 5.00, NULL, NULL),
(105, 7, 'Río Tambo', NULL, 5.00, NULL, NULL),
(106, 7, 'Vizcatán del Ene', NULL, 5.00, NULL, NULL),
(107, 8, 'Tarma', NULL, 5.00, NULL, NULL),
(108, 8, 'Acobamba', NULL, 5.00, NULL, NULL),
(109, 8, 'Huaricolca', NULL, 5.00, NULL, NULL),
(110, 8, 'Huasahuasi', NULL, 5.00, NULL, NULL),
(111, 8, 'La Unión', NULL, 5.00, NULL, NULL),
(112, 8, 'Palca', NULL, 5.00, NULL, NULL),
(113, 8, 'Palcamayo', NULL, 5.00, NULL, NULL),
(114, 8, 'San Pedro de Cajas', NULL, 5.00, NULL, NULL),
(115, 8, 'Tapo', NULL, 5.00, NULL, NULL),
(116, 9, 'La Oroya', NULL, 5.00, NULL, NULL),
(117, 9, 'Chacapalpa', NULL, 5.00, NULL, NULL),
(118, 9, 'Huayhuay', NULL, 5.00, NULL, NULL),
(119, 9, 'Marcapomacocha', NULL, 5.00, NULL, NULL),
(120, 9, 'Morococha', NULL, 5.00, NULL, NULL),
(121, 9, 'Paccha', NULL, 5.00, NULL, NULL),
(122, 9, 'Santa Bárbara de Carhuacayán', NULL, 5.00, NULL, NULL),
(123, 9, 'Santa Rosa de Sacco', NULL, 5.00, NULL, NULL),
(124, 9, 'Suitucancha', NULL, 5.00, NULL, NULL),
(125, 9, 'Yauli', NULL, 5.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` bigint(20) UNSIGNED NOT NULL,
  `mrc_nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mrc_descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mrc_image_path` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`id_marca`, `mrc_nombre`, `mrc_descripcion`, `mrc_image_path`, `created_at`, `updated_at`) VALUES
(1, 'Abrogatto', NULL, 'http://127.0.0.1:8080/images/logos_marcas/logo_abrogatto18.png', '2022-10-05 07:51:35', '2022-10-05 07:51:35'),
(2, 'Andean', NULL, 'http://127.0.0.1:8080/images/logos_marcas/logo-ANDEAN-VODKA.png', '2022-10-05 07:59:08', '2022-10-05 07:59:08'),
(3, 'Burgos', NULL, NULL, '2022-10-05 09:05:45', '2022-10-05 09:05:45'),
(5, 'Aperol', 'El aperol es un aperitivo amargo italiano elaborado con genciana, ruibarbo y cinchona, entre otros ingredientes.', 'http://127.0.0.1:8080/images/logos_marcas/logo_aperol.png', '2022-10-07 21:24:53', '2022-10-07 21:24:53'),
(6, 'Cusqueña', NULL, 'http://127.0.0.1:8080/images/logos_marcas/logo_cusquena.png', '2022-11-05 03:51:20', '2022-11-05 03:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_09_26_172152_create_sessions_table', 1),
(7, '2022_09_30_153224_create_categorias_table', 1),
(8, '2022_09_30_153259_create_productos_table', 1),
(9, '2022_09_30_155639_create_detalles_pedidos_table', 1),
(10, '2022_09_30_163759_create_comprobantes_table', 1),
(11, '2022_09_30_170150_create_pedidos_table', 1),
(12, '2022_09_30_174230_create_tipos_empleados_table', 1),
(13, '2022_09_30_174323_create_empleados_table', 1),
(14, '2022_10_04_042625_create_tipos_pedidos_table', 1),
(15, '2022_10_04_043424_create_direcciones_table', 1),
(16, '2022_10_04_043727_create_distritos_table', 1),
(17, '2022_10_04_043922_create_provincias_table', 1),
(18, '2022_10_04_223933_create_marcas_table', 1),
(19, '2022_10_05_175942_create_cargos_table', 2),
(20, '2022_10_25_000222_create_proveedores_table', 3),
(21, '2022_10_25_145349_create_descuentos_table', 4),
(22, '2022_10_25_150545_create_pedidos_descuentos_table', 5),
(23, '2022_10_25_151616_create_tipos_descuentos_table', 6),
(24, '2022_10_25_145350_create_descuentos_table', 7),
(25, '2022_11_15_172326_create_detalles_users_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` bigint(20) UNSIGNED NOT NULL,
  `id_tipo_pedido` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_comprobante` bigint(20) UNSIGNED NOT NULL,
  `id_empleado` bigint(20) UNSIGNED DEFAULT NULL,
  `pdd_direccion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdd_total` double(8,2) NOT NULL,
  `pdd_fecha_entrega` datetime DEFAULT NULL,
  `pdd_fecha_recepcion` datetime DEFAULT NULL,
  `pdd_descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdd_estado` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=no pagado, 1=pagado, 2=enviado, 3=recibido',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidos_descuentos`
--

CREATE TABLE `pedidos_descuentos` (
  `id_pedido_descuentos` bigint(20) UNSIGNED NOT NULL,
  `id_pedido` bigint(20) UNSIGNED NOT NULL,
  `id_descuento` bigint(20) UNSIGNED NOT NULL,
  `pds_cantidad_desc` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `id_marca` bigint(20) UNSIGNED NOT NULL,
  `id_proveedor` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `id_descuento` bigint(20) UNSIGNED DEFAULT NULL,
  `prd_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prd_stock` int(11) NOT NULL DEFAULT 0,
  `prd_precio` double(6,2) NOT NULL,
  `prd_fecha_vencimiento` date DEFAULT NULL,
  `prd_presentacion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unidad',
  `prd_descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prd_imagen_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prd_contador_vistas` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `id_categoria`, `id_marca`, `id_proveedor`, `id_descuento`, `prd_nombre`, `prd_stock`, `prd_precio`, `prd_fecha_vencimiento`, `prd_presentacion`, `prd_descripcion`, `prd_imagen_path`, `prd_contador_vistas`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, 4, 'Licor de Crema BURGOS Manzana ', 0, 44.90, '2025-05-14', 'Unidad', 'Botella 750ml', 'http://127.0.0.1:8080/images/productos/Licor-de-Crema-de-Manzana-y-Canela-Burgos-Botella-750-ml.png', 42, NULL, '2023-01-21 07:46:56'),
(2, 1, 2, 1, NULL, 'Crema de Licor ANDEAN CREAM Botella 700ml', 32, 89.90, '2024-12-27', 'Unidad', 'Botella 700ml', 'http://127.0.0.1:8080/images/productos/Crema-de-Licor-ANDEAN-CREAM-Botella-700ml.png', 5, '2022-10-05 09:09:01', '2023-01-21 07:46:56'),
(3, 1, 1, 1, NULL, 'Licor ABROGATTO 18 Negroni Botella 110ml', 0, 72.90, '2027-02-20', 'Unidad', 'Paquete 2un', 'http://127.0.0.1:8080/images/productos/Licor-ABROGATTO-18-Negroni-Botella-110ml.png', 6, '2022-10-07 17:10:13', '2023-01-05 22:03:25'),
(11, 11, 6, 2, NULL, 'Cerveza Cusqueña 310ml', 16, 10.00, NULL, 'Unidad', 'Und. 310ml', 'http://127.0.0.1:8080/images/productos/cervezacusquena310ml.png', 23, '2022-11-05 03:53:36', '2023-01-21 07:46:56'),
(13, 10, 5, 1, NULL, 'testNewProd2', 22, 32.10, NULL, 'Unidad', NULL, 'http://127.0.0.1:8080/images/productos/testnewprod2.gif', 0, '2023-01-20 23:07:27', '2023-01-21 07:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` bigint(20) UNSIGNED NOT NULL,
  `prv_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prv_anotaciones` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prv_estado` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `prv_nombre`, `prv_anotaciones`, `prv_estado`, `created_at`, `updated_at`) VALUES
(1, 'Alicorp', NULL, 1, '2022-12-06 05:51:50', '2022-12-07 10:42:17'),
(2, 'Aje', 'Especializado en bebidas alcohólicas', 0, '2022-12-06 06:17:33', '2022-12-06 08:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `provincias`
--

CREATE TABLE `provincias` (
  `id_provincia` bigint(20) UNSIGNED NOT NULL,
  `prv_nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provincias`
--

INSERT INTO `provincias` (`id_provincia`, `prv_nombre`, `created_at`, `updated_at`) VALUES
(1, 'Huancayo', NULL, NULL),
(2, 'Chanchamayo', NULL, NULL),
(3, 'Chupaca', NULL, NULL),
(4, 'Concepción', NULL, NULL),
(5, 'Jauja', NULL, NULL),
(6, 'Junín', NULL, NULL),
(7, 'Satipo', NULL, NULL),
(8, 'Tarma', NULL, NULL),
(9, 'Yauli', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipos_descuentos`
--

CREATE TABLE `tipos_descuentos` (
  `id_tipo_descuento` bigint(20) UNSIGNED NOT NULL,
  `tds_nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tds_descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipos_descuentos`
--

INSERT INTO `tipos_descuentos` (`id_tipo_descuento`, `tds_nombre`, `tds_descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Individual', 'Aplicable solo a un producto', NULL, NULL),
(2, 'General', 'Aplicable al monto total de la compra', NULL, NULL),
(3, 'Cupón', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipos_pedidos`
--

CREATE TABLE `tipos_pedidos` (
  `id_tipo_pedido` bigint(20) UNSIGNED NOT NULL,
  `tpe_nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tpe_descripcion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipos_pedidos`
--

INSERT INTO `tipos_pedidos` (`id_tipo_pedido`, `tpe_nombre`, `tpe_descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Online', 'Realizado mediante la web', NULL, NULL),
(2, 'Presencial', 'Venta en persona, sin delivery', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cargo` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usr_apellidos` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_direccion` bigint(20) UNSIGNED DEFAULT NULL,
  `usr_fecha_nacimiento` date DEFAULT NULL,
  `usr_num_documento` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '70405032',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `comprobantes`
--
ALTER TABLE `comprobantes`
  ADD PRIMARY KEY (`id_comprobante`);

--
-- Indexes for table `descuentos`
--
ALTER TABLE `descuentos`
  ADD PRIMARY KEY (`id_descuento`),
  ADD KEY `descuentos_id_tipo_descuento_index` (`id_tipo_descuento`);

--
-- Indexes for table `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  ADD PRIMARY KEY (`id_detalle_pedido`),
  ADD KEY `detalles_pedidos_id_pedido_index` (`id_pedido`),
  ADD KEY `detalles_pedidos_id_producto_index` (`id_producto`);

--
-- Indexes for table `detalles_users`
--
ALTER TABLE `detalles_users`
  ADD PRIMARY KEY (`id_dtl_user`),
  ADD KEY `detalles_users_id_user_index` (`id_user`);

--
-- Indexes for table `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `direcciones_id_distrito_index` (`id_distrito`);

--
-- Indexes for table `distritos`
--
ALTER TABLE `distritos`
  ADD PRIMARY KEY (`id_distrito`),
  ADD KEY `distritos_id_provincia_index` (`id_provincia`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `pedidos_id_tipo_pedido_index` (`id_tipo_pedido`),
  ADD KEY `pedidos_id_user_index` (`id_user`),
  ADD KEY `pedidos_id_comprobante_index` (`id_comprobante`),
  ADD KEY `pedidos_id_empleado_index` (`id_empleado`);

--
-- Indexes for table `pedidos_descuentos`
--
ALTER TABLE `pedidos_descuentos`
  ADD PRIMARY KEY (`id_pedido_descuentos`),
  ADD KEY `pedidos_descuentos_id_pedido_index` (`id_pedido`),
  ADD KEY `pedidos_descuentos_id_descuento_index` (`id_descuento`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `productos_id_categoria_index` (`id_categoria`),
  ADD KEY `productos_id_marca_index` (`id_marca`),
  ADD KEY `productos_id_proveedor_index` (`id_proveedor`) USING BTREE,
  ADD KEY `productos_id_descuento_index` (`id_descuento`) USING BTREE;

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`) USING BTREE;

--
-- Indexes for table `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id_provincia`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tipos_descuentos`
--
ALTER TABLE `tipos_descuentos`
  ADD PRIMARY KEY (`id_tipo_descuento`);

--
-- Indexes for table `tipos_pedidos`
--
ALTER TABLE `tipos_pedidos`
  ADD PRIMARY KEY (`id_tipo_pedido`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_cargo_index` (`id_cargo`) USING BTREE,
  ADD KEY `users_id_direccion_index` (`id_direccion`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comprobantes`
--
ALTER TABLE `comprobantes`
  MODIFY `id_comprobante` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `descuentos`
--
ALTER TABLE `descuentos`
  MODIFY `id_descuento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  MODIFY `id_detalle_pedido` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detalles_users`
--
ALTER TABLE `detalles_users`
  MODIFY `id_dtl_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id_direccion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distritos`
--
ALTER TABLE `distritos`
  MODIFY `id_distrito` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedidos_descuentos`
--
ALTER TABLE `pedidos_descuentos`
  MODIFY `id_pedido_descuentos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id_provincia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tipos_descuentos`
--
ALTER TABLE `tipos_descuentos`
  MODIFY `id_tipo_descuento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipos_pedidos`
--
ALTER TABLE `tipos_pedidos`
  MODIFY `id_tipo_pedido` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
