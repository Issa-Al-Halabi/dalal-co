-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 10:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dalalco`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'rerg', 'age', 'eesamousa2000@gmail.com', '234', 'sad', 'sacsa', '2024-05-13 10:11:35', '2024-05-13 10:11:35'),
(2, 'rerg', 'age', 'mousahlp@gmail.com', '345543', 'dsfgsdgfs', 'sdhgsfdh', '2024-05-13 10:24:18', '2024-05-13 10:24:18'),
(3, 'rerg', 'sdsds', 'eesamousa2000@gmail.com', '23424234', 'sdf', 'sdf', '2024-05-13 10:29:35', '2024-05-13 10:29:35'),
(4, 'rerg', 'sdfsdf', 'eesamousa2000@gmail.com', '234124', 'dcvfdsxc', 'zdxvsdxv', '2024-05-13 10:32:00', '2024-05-13 10:32:00'),
(5, 'rergsdf', 'asfasfafafafafaf', 'eesamousa2000@gmail.com', '4554343434', 'sdfcdf', 'sdfsdfsdf', '2024-05-13 10:33:30', '2024-05-13 10:33:30'),
(6, 'rerg', 'asfasfafafafafafasASasASasASs', 'eesamousa2000@gmail.com', '4554343434', '345345', 'sdfsdfsfs', '2024-05-13 10:52:11', '2024-05-13 10:52:11'),
(7, 'rerg', 'asfasfafafafafafasASasASasASs', 'eesamousa2000@gmail.com', '4554343434', '345345', 'sdfsdfsfs', '2024-05-13 10:53:09', '2024-05-13 10:53:09');

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

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '935ca23f-0497-4a16-bfe3-56e2d0a91cff', 'database', 'default', '{\"uuid\":\"935ca23f-0497-4a16-bfe3-56e2d0a91cff\",\"displayName\":\"App\\\\Jobs\\\\GenerateSiteMap\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateSiteMap\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\GenerateSiteMap\\\":1:{s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-05-12 13:36:52.722079\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\GenerateSiteMap has been attempted too many times. in C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\MaxAttemptsExceededException.php:24\nStack trace:\n#0 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(785): Illuminate\\Queue\\MaxAttemptsExceededException::forJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(519): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#2 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 1)\n#3 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#4 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(333): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->runNextJob(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#6 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#7 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#8 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#13 C:\\xampp\\htdocs\\DalalCo\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#15 C:\\xampp\\htdocs\\DalalCo\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 C:\\xampp\\htdocs\\DalalCo\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 C:\\xampp\\htdocs\\DalalCo\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 C:\\xampp\\htdocs\\DalalCo\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2024-05-12 10:43:20'),
(2, 'eaa655d9-29f9-41c8-a0eb-8e5efb20c0d9', 'database', 'default', '{\"uuid\":\"eaa655d9-29f9-41c8-a0eb-8e5efb20c0d9\",\"displayName\":\"App\\\\Jobs\\\\GenerateSiteMap\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateSiteMap\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\GenerateSiteMap\\\":1:{s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-05-12 13:47:29.996842\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\GenerateSiteMap has been attempted too many times. in C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\MaxAttemptsExceededException.php:24\nStack trace:\n#0 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(785): Illuminate\\Queue\\MaxAttemptsExceededException::forJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(519): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#2 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 1)\n#3 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#4 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#6 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#7 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#8 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#13 C:\\xampp\\htdocs\\DalalCo\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArrayInput), Object(Illuminate\\Console\\OutputStyle))\n#14 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArrayInput), Object(Illuminate\\Console\\OutputStyle))\n#15 C:\\xampp\\htdocs\\DalalCo\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArrayInput), Object(Symfony\\Component\\Console\\Output\\BufferedOutput))\n#16 C:\\xampp\\htdocs\\DalalCo\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArrayInput), Object(Symfony\\Component\\Console\\Output\\BufferedOutput))\n#17 C:\\xampp\\htdocs\\DalalCo\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArrayInput), Object(Symfony\\Component\\Console\\Output\\BufferedOutput))\n#18 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(162): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArrayInput), Object(Symfony\\Component\\Console\\Output\\BufferedOutput))\n#19 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(400): Illuminate\\Console\\Application->call(\'queue:work\', Array, NULL)\n#20 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php(355): Illuminate\\Foundation\\Console\\Kernel->call(\'queue:work\', Array)\n#21 C:\\xampp\\htdocs\\DalalCo\\routes\\web.php(48): Illuminate\\Support\\Facades\\Facade::__callStatic(\'call\', Array)\n#22 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\CallableDispatcher.php(40): Illuminate\\Routing\\RouteFileRegistrar->{closure}()\n#23 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(237): Illuminate\\Routing\\CallableDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Closure))\n#24 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(208): Illuminate\\Routing\\Route->runCallable()\n#25 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(806): Illuminate\\Routing\\Route->run()\n#26 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#27 C:\\xampp\\htdocs\\DalalCo\\app\\Http\\Middleware\\LocaleMiddleware.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#28 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): App\\Http\\Middleware\\LocaleMiddleware->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#31 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#32 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#33 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#34 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#35 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#36 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))\n#37 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#38 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#39 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#40 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#41 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#42 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#43 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(805): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#44 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(784): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#45 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(748): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#46 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(737): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#47 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(200): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))\n#48 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#49 C:\\xampp\\htdocs\\DalalCo\\vendor\\livewire\\livewire\\src\\Features\\SupportDisablingBackButtonCache\\DisableBackButtonCacheMiddleware.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#50 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): Livewire\\Features\\SupportDisablingBackButtonCache\\DisableBackButtonCacheMiddleware->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#51 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#52 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#53 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#54 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#55 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#56 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#57 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#58 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#59 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(99): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#60 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#61 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#62 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#63 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#64 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#65 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#66 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(175): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#67 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(144): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#68 C:\\xampp\\htdocs\\DalalCo\\public\\index.php(51): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#69 C:\\xampp\\htdocs\\DalalCo\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\resources\\server.php(16): require_once(\'C:\\\\xampp\\\\htdocs...\')\n#70 {main}', '2024-05-12 11:16:26');

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

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(9, 'default', '{\"uuid\":\"fbdb1418-4013-4472-9ad1-9b1f39520c3b\",\"displayName\":\"App\\\\Jobs\\\\GenerateSiteMap\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateSiteMap\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\GenerateSiteMap\\\":1:{s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-05-12 14:00:21.359467\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1715522421, 1715522420),
(10, 'default', '{\"uuid\":\"a4ffb991-82da-4663-a750-a5d09dd02e2d\",\"displayName\":\"App\\\\Jobs\\\\GenerateSiteMap\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateSiteMap\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\GenerateSiteMap\\\":1:{s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-05-12 14:10:25.716037\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1715523025, 1715523024),
(11, 'default', '{\"uuid\":\"0adda2ef-264f-4def-bf43-d68e17cf6e0e\",\"displayName\":\"queue:work\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Foundation\\\\Console\\\\QueuedCommand\",\"command\":\"O:43:\\\"Illuminate\\\\Foundation\\\\Console\\\\QueuedCommand\\\":10:{s:7:\\\"\\u0000*\\u0000data\\\";a:2:{i:0;s:10:\\\"queue:work\\\";i:1;a:1:{s:7:\\\"--queue\\\";s:7:\\\"default\\\";}}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1715523024, 1715523024),
(12, 'default', '{\"uuid\":\"3022c214-d33f-4739-b999-6a20c0632fcf\",\"displayName\":\"queue:work\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Foundation\\\\Console\\\\QueuedCommand\",\"command\":\"O:43:\\\"Illuminate\\\\Foundation\\\\Console\\\\QueuedCommand\\\":10:{s:7:\\\"\\u0000*\\u0000data\\\";a:2:{i:0;s:10:\\\"queue:work\\\";i:1;a:1:{s:7:\\\"--queue\\\";s:7:\\\"default\\\";}}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1715523157, 1715523157),
(13, 'default', '{\"uuid\":\"4ef9dff4-3777-4111-bade-f756aabbeed6\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:5:\\\"seeIt\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"See it\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:39:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/contactuses\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:48:\\\" تم التواصل معك من قبل rerg age\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:21:\\\"التواصل بنا\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"7d2b1a05-1243-47a6-bf7d-70a61912c472\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1715605907, 1715605907),
(14, 'default', '{\"uuid\":\"1163433b-ba32-41b1-b4eb-92a13b492e6c\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:5:\\\"seeIt\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"See it\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:39:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/contactuses\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:48:\\\" تم التواصل معك من قبل rerg age\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:21:\\\"التواصل بنا\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"f3873bbe-742a-4376-8c9a-29eeb41fd695\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1715605907, 1715605907),
(15, 'default', '{\"uuid\":\"74e627f2-bd3e-446f-aa3b-dfdc9f1a4a23\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:5:\\\"seeIt\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"See it\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:39:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/contactuses\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:48:\\\" تم التواصل معك من قبل rerg age\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:21:\\\"التواصل بنا\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"5c5c7391-7e34-4bd1-8574-001bbffec7e6\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1715606665, 1715606665),
(16, 'default', '{\"uuid\":\"7708df60-c692-4b9f-9d69-9774d754b18a\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:5:\\\"seeIt\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"See it\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:39:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/contactuses\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:48:\\\" تم التواصل معك من قبل rerg age\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:21:\\\"التواصل بنا\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"2a32c73a-7ca6-4a89-a322-7e591f1c27a8\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1715606665, 1715606665),
(17, 'default', '{\"uuid\":\"e19c0e2d-43cf-4793-b17f-8c857d3e45a8\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:5:\\\"seeIt\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"See it\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:39:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/contactuses\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:50:\\\" تم التواصل معك من قبل rerg sdsds\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:21:\\\"التواصل بنا\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"b64c7625-094f-4b8b-a263-7dac87ec0ea9\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1715606983, 1715606983),
(18, 'default', '{\"uuid\":\"c21b82cd-32b1-4b65-8155-909d29a25b30\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:5:\\\"seeIt\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"See it\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:39:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/contactuses\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:50:\\\" تم التواصل معك من قبل rerg sdsds\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:21:\\\"التواصل بنا\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"4ed608e6-34a6-436e-b70d-371a750d12ee\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1715606983, 1715606983),
(19, 'default', '{\"uuid\":\"a16fd8ad-1e2d-4529-85ff-2274e4dd9e16\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:5:\\\"seeIt\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"See it\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:39:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/contactuses\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:51:\\\" تم التواصل معك من قبل rerg sdfsdf\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:21:\\\"التواصل بنا\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"420104a9-c437-424f-9b3d-23e498d2986f\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1715607127, 1715607127),
(20, 'default', '{\"uuid\":\"ad79238a-530d-4bf9-80e6-078ac177e780\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:5:\\\"seeIt\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"See it\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:39:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/contactuses\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:51:\\\" تم التواصل معك من قبل rerg sdfsdf\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:21:\\\"التواصل بنا\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"462806f8-4a94-48d4-852f-39197232faba\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1715607127, 1715607127),
(21, 'default', '{\"uuid\":\"b5cabdbe-87cd-4f88-9a2a-9fa3c68bd44e\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:5:\\\"seeIt\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"See it\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:39:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/contactuses\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:64:\\\" تم التواصل معك من قبل rergsdf asfasfafafafafaf\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:21:\\\"التواصل بنا\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"fdf49c7a-3ea2-4184-a779-4f85d4530370\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1715607217, 1715607217),
(22, 'default', '{\"uuid\":\"90555f02-ddf8-4153-9d4f-759dbb7d43d0\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:5:\\\"seeIt\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"See it\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:39:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/contactuses\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:64:\\\" تم التواصل معك من قبل rergsdf asfasfafafafafaf\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:21:\\\"التواصل بنا\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"8488e1a9-7f64-4726-9f3b-a6c72ae17ac9\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1715607217, 1715607217),
(23, 'default', '{\"uuid\":\"c5923ce7-4b46-48ce-a28b-009f54d5478d\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:5:\\\"seeIt\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"See it\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:39:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/contactuses\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:74:\\\" تم التواصل معك من قبل rerg asfasfafafafafafasASasASasASs\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:21:\\\"التواصل بنا\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"e1b8817b-7776-47bd-9c2a-3c7acbef6f9e\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1715608397, 1715608397),
(24, 'default', '{\"uuid\":\"0ccd291c-679f-468c-99d0-3b25007ca8c2\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:5:\\\"seeIt\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"See it\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:39:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/contactuses\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:74:\\\" تم التواصل معك من قبل rerg asfasfafafafafafasASasASasASs\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:21:\\\"التواصل بنا\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"ef195d13-a05b-4ee9-8618-33eddf331bc1\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1715608397, 1715608397);
INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(25, 'default', '{\"uuid\":\"8865169b-e5ac-4c43-bd70-bfba14958622\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:2:{i:0;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:29:\\\"issa تم طلب من قبل \\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:48:\\\"طلب تسجيل طلبك لخدمتك جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"8f025cca-8b13-4701-8830-35b87667d98c\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722175631, 1722175631),
(26, 'default', '{\"uuid\":\"c8430016-2206-4e77-9298-36c971f08ea4\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:2:{i:0;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:29:\\\"issa تم طلب من قبل \\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:48:\\\"طلب تسجيل طلبك لخدمتك جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"eb96a50f-f2c7-4529-a7bb-70ef1950fb76\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722175631, 1722175631),
(27, 'default', '{\"uuid\":\"f39fe30a-152d-4da3-983e-8a2a5112a15e\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:2:{i:0;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:29:\\\"issa تم طلب من قبل \\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:48:\\\"طلب تسجيل طلبك لخدمتك جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"c1cc814e-2a46-4015-9aa6-d952b44f0f27\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722175649, 1722175649),
(28, 'default', '{\"uuid\":\"e6039982-54ae-4f6c-a943-682268fe16ee\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:2:{i:0;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:29:\\\"issa تم طلب من قبل \\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:48:\\\"طلب تسجيل طلبك لخدمتك جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"5e7bafe5-7c76-4324-b8f5-49b57a855b5c\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722175649, 1722175649),
(29, 'default', '{\"uuid\":\"3f29f520-20c6-4a1e-a2ff-18b9c7c64439\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:9:\\\"makeOrder\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:10:\\\"Make order\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:41:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\\/create\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:46:\\\"خادمة 5  تم طلبها من قبل issa\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:26:\\\"طلب خادمة جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"8ec8675a-13f0-4dfe-adec-ef8c0ebeb2f2\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722237633, 1722237633),
(30, 'default', '{\"uuid\":\"2984d766-2099-4257-80f4-a1bf2ba77e3b\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:9:\\\"makeOrder\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:10:\\\"Make order\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:41:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\\/create\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:46:\\\"خادمة 5  تم طلبها من قبل issa\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:26:\\\"طلب خادمة جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"a55d99ac-de41-4762-a816-616ccf08ca9e\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722237633, 1722237633),
(31, 'default', '{\"uuid\":\"8ba318f8-c5a4-4e81-a0c4-bdb4d0e766c0\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:9:\\\"makeOrder\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:10:\\\"Make order\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:41:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\\/create\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:46:\\\"خادمة 5  تم طلبها من قبل issa\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:26:\\\"طلب خادمة جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"2203e83a-10f4-4b7b-924f-936c1d5a7d5b\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722237637, 1722237637),
(32, 'default', '{\"uuid\":\"3e8a3021-a3c2-4965-8b3e-26fb2c4ea70f\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:9:\\\"makeOrder\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:10:\\\"Make order\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:41:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\\/create\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:46:\\\"خادمة 5  تم طلبها من قبل issa\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:26:\\\"طلب خادمة جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"4b4f26a1-af95-411a-8b96-7db15c0a3560\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722237637, 1722237637),
(33, 'default', '{\"uuid\":\"a6bf8c30-91f4-43dc-ba0e-270010e8b1bc\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:9:\\\"makeOrder\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:10:\\\"Make order\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:41:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\\/create\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:46:\\\"خادمة 5  تم طلبها من قبل issa\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:26:\\\"طلب خادمة جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"b1baee95-fe06-4c3a-874b-0783ead907af\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722237781, 1722237781),
(34, 'default', '{\"uuid\":\"c7357d5b-55e4-44f1-b863-90169893fd40\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:9:\\\"makeOrder\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:10:\\\"Make order\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:41:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\\/create\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:46:\\\"خادمة 5  تم طلبها من قبل issa\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:26:\\\"طلب خادمة جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"e27f0583-cd6a-4ec8-a1aa-ae26804b53c0\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722237781, 1722237781),
(35, 'default', '{\"uuid\":\"a0777401-2ecb-4a94-a7b7-212fa513db1d\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:9:\\\"makeOrder\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:10:\\\"Make order\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:41:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\\/create\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:46:\\\"خادمة 5  تم طلبها من قبل issa\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:26:\\\"طلب خادمة جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"10a4a0de-361c-4fb1-9843-beea7c423c29\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722237809, 1722237809),
(36, 'default', '{\"uuid\":\"321d1688-e001-4b1c-b608-53889d320d32\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:9:\\\"makeOrder\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:10:\\\"Make order\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:41:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\\/create\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:46:\\\"خادمة 5  تم طلبها من قبل issa\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:26:\\\"طلب خادمة جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"078ffba2-8a30-42d6-93ad-33e2519b2e0a\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722237809, 1722237809),
(37, 'default', '{\"uuid\":\"063b4c9b-070c-4f70-b4fd-938de13b2e0a\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:9:\\\"makeOrder\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:10:\\\"Make order\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:41:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\\/create\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:46:\\\"خادمة 5  تم طلبها من قبل issa\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:26:\\\"طلب خادمة جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"7ba3ccff-a858-44d3-b983-6d3e896742f4\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722237953, 1722237953),
(38, 'default', '{\"uuid\":\"09301bf0-b2df-443c-868d-74484714c3e2\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:3:{i:0;a:21:{s:4:\\\"name\\\";s:9:\\\"makeOrder\\\";s:5:\\\"color\\\";s:7:\\\"success\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:10:\\\"Make order\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";s:41:\\\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\\/create\\\";s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:2;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:46:\\\"خادمة 5  تم طلبها من قبل issa\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:26:\\\"طلب خادمة جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"7580a2e4-479f-416d-a865-456878934364\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722237953, 1722237953);
INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(39, 'default', '{\"uuid\":\"48797820-d911-41f1-90c3-062f021598b8\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:2:{i:0;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:29:\\\"issa تم طلب من قبل \\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:48:\\\"طلب تسجيل طلبك لخدمتك جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"5144f488-6f5e-4fc0-9fb8-896d8100d411\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722238015, 1722238015),
(40, 'default', '{\"uuid\":\"90743e7b-f6bd-48ab-abd6-aa04e23510a9\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:2:{i:0;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:29:\\\"issa تم طلب من قبل \\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:48:\\\"طلب تسجيل طلبك لخدمتك جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"bdbade04-5e26-4f55-bb75-be8baaac850f\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722238016, 1722238016),
(41, 'default', '{\"uuid\":\"cce1ac4e-b7a7-4906-a1e6-167295114f3f\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:2:{i:0;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:36:\\\"issa halabi تم طلب من قبل \\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:48:\\\"طلب تسجيل طلبك لخدمتك جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"332d3df8-da52-4e05-acfe-2aa1349d98fa\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722238706, 1722238706),
(42, 'default', '{\"uuid\":\"b7f0feb8-69cb-4ab2-acdd-ecc1bd5fa8ac\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:2:{i:0;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:36:\\\"issa halabi تم طلب من قبل \\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:48:\\\"طلب تسجيل طلبك لخدمتك جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"4c1960f9-346a-4561-a949-3dffd0bc7b7e\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722238706, 1722238706),
(43, 'default', '{\"uuid\":\"8f0c07d6-e406-40b0-a5f8-3208091b9b0e\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:2:{i:0;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:36:\\\"issa halabi تم طلب من قبل \\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:48:\\\"طلب تسجيل طلبك لخدمتك جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"c1b745ee-3226-4a4c-8d39-7985cc43f0b6\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722239163, 1722239163),
(44, 'default', '{\"uuid\":\"b3685a37-2c09-499c-b43c-da9599cdc7d2\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:2:{i:0;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:36:\\\"issa halabi تم طلب من قبل \\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:48:\\\"طلب تسجيل طلبك لخدمتك جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"7b897aec-af75-47fb-9d7b-7574ebddf67d\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722239163, 1722239163),
(45, 'default', '{\"uuid\":\"a80776a9-9491-4d70-a901-3501c279c484\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:2:{i:0;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:36:\\\"issa halabi تم طلب من قبل \\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:48:\\\"طلب تسجيل طلبك لخدمتك جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"48117b69-7b69-4f47-829e-902dbc5e6cb2\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722239226, 1722239226),
(46, 'default', '{\"uuid\":\"a3604123-dcc7-4a39-a91f-c671e32fae54\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:2:{i:0;a:21:{s:4:\\\"name\\\";s:10:\\\"markAsRead\\\";s:5:\\\"color\\\";N;s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";E:42:\\\"Filament\\\\Support\\\\Enums\\\\IconPosition:Before\\\";s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:12:\\\"Mark as read\\\";s:11:\\\"shouldClose\\\";b:0;s:16:\\\"shouldMarkAsRead\\\";b:1;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";E:39:\\\"Filament\\\\Support\\\\Enums\\\\ActionSize:Small\\\";s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}i:1;a:21:{s:4:\\\"name\\\";s:6:\\\"remove\\\";s:5:\\\"color\\\";s:6:\\\"danger\\\";s:5:\\\"event\\\";N;s:9:\\\"eventData\\\";a:0:{}s:17:\\\"dispatchDirection\\\";b:0;s:19:\\\"dispatchToComponent\\\";N;s:15:\\\"extraAttributes\\\";a:0:{}s:4:\\\"icon\\\";N;s:12:\\\"iconPosition\\\";r:21;s:8:\\\"iconSize\\\";N;s:10:\\\"isOutlined\\\";b:0;s:10:\\\"isDisabled\\\";b:0;s:5:\\\"label\\\";s:6:\\\"Remove\\\";s:11:\\\"shouldClose\\\";b:1;s:16:\\\"shouldMarkAsRead\\\";b:0;s:18:\\\"shouldMarkAsUnread\\\";b:0;s:21:\\\"shouldOpenUrlInNewTab\\\";b:0;s:4:\\\"size\\\";r:30;s:7:\\\"tooltip\\\";N;s:3:\\\"url\\\";N;s:4:\\\"view\\\";s:31:\\\"filament-actions::button-action\\\";}}s:4:\\\"body\\\";s:36:\\\"issa halabi تم طلب من قبل \\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:23:\\\"heroicon-o-check-circle\\\";s:9:\\\"iconColor\\\";s:7:\\\"success\\\";s:6:\\\"status\\\";s:7:\\\"success\\\";s:5:\\\"title\\\";s:48:\\\"طلب تسجيل طلبك لخدمتك جديد\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"9dcf3d70-d5d2-4a3a-ba6c-8d62b9448f11\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1722239226, 1722239226);

-- --------------------------------------------------------

--
-- Table structure for table `laws`
--

CREATE TABLE `laws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maids`
--

CREATE TABLE `maids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `nationality_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL,
  `countries` varchar(255) DEFAULT NULL,
  `experiences` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maids`
--

INSERT INTO `maids` (`id`, `first_name`, `last_name`, `age`, `nationality_id`, `description`, `languages`, `countries`, `experiences`, `image`, `video`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"الأسم \",\"en\":\"\"}', '{\"ar\":\"الكنية\",\"en\":\"\"}', 23, 4, '{\"ar\":\"<p><span style=\\\"color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px; background-color: #ffffff;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span></p>\",\"en\":\"\"}', '{\"ar\":[\"ar\",\"en\"],\"en\":\"\"}', '{\"ar\":[\"syria\"],\"en\":\"\"}', '{\"ar\":\"الخبرات\",\"en\":\"\"}', 'images/maids/01HXE4GB04YPJ5MN8ZRQ12GD3S.png', 'videos/maids/01HXE4GB0YD4B5RA6FVS12C9H2.mp4', '2024-05-09 04:36:24', '2024-07-28 07:16:17'),
(2, '{\"ar\":\"الأسم 1\",\"en\":\"\"}', '{\"ar\":\"الكنية1\",\"en\":\"\"}', 32, 5, '{\"ar\":\"<p><span style=\\\"color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px; background-color: #ffffff;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span></p>\",\"en\":\"\"}', '{\"ar\":[\"ar\",\"en\"],\"en\":[]}', '{\"ar\":[\"leabanon\"],\"en\":[]}', '{\"ar\":\"الخبرات\",\"en\":\"\"}', 'images/maids/01HXEKQWACF680XG0T3Q02HX8N.png', 'videos/maids/01HXEKQWB02GZD1Q8NAHMCRY65.mp4', '2024-05-09 09:02:40', '2024-07-28 07:16:33'),
(3, '{\"ar\":\"الأسم \",\"en\":\"\"}', '{\"ar\":\"الكنية\",\"en\":\"\"}', 23, 7, '{\"ar\":\"<p><span style=\\\"color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px; background-color: #ffffff;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span><span style=\\\"background-color: #ffffff; color: #09090b; font-family: Inter, ui-sans-serif, system-ui, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 14px;\\\">الوصف&nbsp;</span></p>\",\"en\":\"\"}', '{\"ar\":[\"en\"],\"en\":[]}', '{\"ar\":[\"ghana\",\"syria\"],\"en\":[]}', '{\"ar\":\"الخبرات الخبرات الخبرات الخبرات الخبرات الخبرات \",\"en\":\"\"}', 'images/maids/01HXNV2MWQ9YQDWKPJ37Y3BJCD.png', NULL, '2024-05-12 04:25:34', '2024-07-28 07:18:15'),
(4, '{\"en\":\"الأسم \",\"ar\":\"\"}', '{\"en\":\"الكنية\",\"ar\":\"\"}', 324, 9, '{\"en\":\"<p>dfvgsdfb edvg</p>\",\"ar\":\"\"}', '{\"ar\":[],\"en\":[\"dgf rfdv\"]}', '{\"ar\":[],\"en\":[\"sdfv\",\"رتار\",\"نتلان\"]}', '{\"en\":\"dfvgfd\",\"ar\":\"\"}', NULL, NULL, '2024-05-15 14:54:01', '2024-07-28 07:17:56'),
(6, '{\"ar\":\"خادمة 5\"}', '{\"ar\":null}', 20, 4, '{\"ar\":null}', '{\"ar\":[],\"en\":[]}', '{\"ar\":[],\"en\":[]}', '{\"ar\":null}', NULL, NULL, '2024-07-29 04:04:50', '2024-07-29 04:04:50');

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
(149, '2014_10_12_000000_create_users_table', 1),
(150, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(151, '2019_08_19_000000_create_failed_jobs_table', 1),
(152, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(153, '2024_05_02_124932_create_maids_table', 1),
(154, '2024_05_02_124934_create_statuses_table', 1),
(155, '2024_05_02_124935_create_orders_table', 1),
(156, '2024_05_02_124936_create_order_status_table', 1),
(157, '2024_05_02_132604_create_permission_tables', 1),
(158, '2024_05_06_110134_create_contact_us_table', 1),
(159, '2024_05_08_074440_create_laws_table', 1),
(160, '2024_05_09_065411_create_notifications_table', 2),
(161, '2024_05_12_130436_create_jobs_table', 3),
(162, '2024_07_22_085310_create_nationalities_table', 4),
(164, '2024_07_28_103047_create_m_c_q_s_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `m_c_q_s`
--

CREATE TABLE `m_c_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `elderly_care` tinyint(1) NOT NULL,
  `children_care` int(11) NOT NULL,
  `nursing_course` tinyint(1) NOT NULL,
  `homework_experience` tinyint(1) NOT NULL,
  `reception` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_c_q_s`
--

INSERT INTO `m_c_q_s` (`id`, `user_id`, `elderly_care`, `children_care`, `nursing_course`, `homework_experience`, `reception`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 0, 0, 1, 1, '2024-07-28 10:53:26', '2024-07-28 10:53:26'),
(3, 2, 1, 0, 1, 1, 1, '2024-07-28 11:07:07', '2024-07-28 11:07:07'),
(4, 2, 1, 4, 1, 0, 1, '2024-07-28 11:07:24', '2024-07-28 11:07:24'),
(5, 2, 0, 0, 1, 1, 0, '2024-07-29 04:26:46', '2024-07-29 04:26:46'),
(6, 5, 0, 5, 1, 0, 1, '2024-07-29 04:38:22', '2024-07-29 04:38:22'),
(7, 5, 0, 5, 0, 1, 0, '2024-07-29 04:45:59', '2024-07-29 04:45:59'),
(8, 5, 1, 0, 0, 0, 0, '2024-07-29 04:47:03', '2024-07-29 04:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE `nationalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`id`, `nationality`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"سوريا\"}', 8, 1, '2024-07-28 05:51:24', '2024-07-29 03:53:12'),
(4, '{\"ar\":\"بنغلادش\"}', 3, 1, '2024-07-28 06:27:48', '2024-07-29 03:53:12'),
(5, '{\"ar\":\"فيتنام\"}', 4, 1, '2024-07-28 06:28:06', '2024-07-29 03:53:12'),
(6, '{\"ar\":\"باكستان\"}', 2, 1, '2024-07-28 06:28:57', '2024-07-29 03:53:12'),
(7, '{\"ar\":\"غانا\",\"en\":\"ghana\"}', 1, 1, '2024-07-28 06:54:41', '2024-07-29 03:53:12'),
(8, '{\"ar\":\"كازاخستان\"}', 5, 1, '2024-07-28 07:07:31', '2024-07-29 03:53:12'),
(9, '{\"ar\":\"نيجيريا\"}', 6, 1, '2024-07-28 07:08:26', '2024-07-29 03:53:12'),
(10, '{\"ar\":\"السنغال\"}', 7, 1, '2024-07-28 07:09:12', '2024-07-29 03:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `maid_id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `book_ticket` varchar(255) DEFAULT NULL,
  `deliver_service` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `maid_id`, `type`, `status_id`, `book_ticket`, `deliver_service`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 14, '3245', NULL, '2024-05-09 04:37:08', '2024-05-09 08:53:39'),
(2, 1, 2, 2, 2, NULL, '34552', '2024-05-09 09:03:20', '2024-07-02 11:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `specifications` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`specifications`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `order_id`, `status_id`, `specifications`, `created_at`, `updated_at`) VALUES
(7, 1, 1, '{\"input1\":\"34634\"}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(8, 1, 2, '{\"input1\":true}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(9, 1, 3, '{\"input1\":\"12\"}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(10, 1, 4, '{\"input1\":\"2024-05-06\",\"input2\":\"35\"}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(11, 1, 5, '{\"input1\":\"34634\"}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(12, 1, 6, '{\"input1\":true}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(13, 1, 7, '{\"input1\":\"12\"}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(14, 1, 8, '{\"input1\":\"2024-05-06\",\"input2\":\"35\"}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(15, 1, 9, '{\"input1\":\"34634\"}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(16, 1, 10, '{\"input1\":true}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(17, 1, 11, '{\"input1\":\"12\"}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(18, 1, 12, '{\"input1\":\"2024-05-06\",\"input2\":\"35\"}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(19, 1, 13, '{\"input1\":\"34634\"}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(20, 1, 14, '{\"input1\":true}', '2024-05-09 08:07:03', '2024-05-09 08:07:03'),
(24, 2, 1, '{\"input1\":\"325\"}', '2024-07-02 11:17:20', '2024-07-02 11:17:20'),
(25, 2, 2, '{\"input1\":true}', '2024-07-02 11:17:20', '2024-07-02 11:17:20');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_any_role', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(2, 'view_role', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(3, 'create_role', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(4, 'update_role', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(5, 'delete_role', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(6, 'delete_any_role', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(7, 'view_any_user', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(8, 'view_user', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(9, 'create_user', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(10, 'update_user', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(11, 'delete_user', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(12, 'delete_any_user', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(13, 'replicate_user', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(14, 'reorder_user', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(15, 'view_maid', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(16, 'view_any_maid', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(17, 'create_maid', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(18, 'update_maid', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(19, 'restore_maid', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(20, 'restore_any_maid', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(21, 'replicate_maid', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(22, 'reorder_maid', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(23, 'delete_maid', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(24, 'delete_any_maid', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(25, 'force_delete_maid', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(26, 'force_delete_any_maid', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(27, 'view_contact::us', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(28, 'view_any_contact::us', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(29, 'create_contact::us', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(30, 'update_contact::us', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(31, 'restore_contact::us', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(32, 'restore_any_contact::us', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(33, 'replicate_contact::us', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(34, 'reorder_contact::us', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(35, 'delete_contact::us', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(36, 'delete_any_contact::us', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(37, 'force_delete_contact::us', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(38, 'force_delete_any_contact::us', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(39, 'view_law', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(40, 'view_any_law', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(41, 'create_law', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(42, 'update_law', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(43, 'restore_law', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(44, 'restore_any_law', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(45, 'replicate_law', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(46, 'reorder_law', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(47, 'delete_law', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(48, 'delete_any_law', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(49, 'force_delete_law', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(50, 'force_delete_any_law', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(51, 'view_order', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(52, 'view_any_order', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(53, 'create_order', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(54, 'update_order', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(55, 'restore_order', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(56, 'restore_any_order', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(57, 'replicate_order', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(58, 'reorder_order', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(59, 'delete_order', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(60, 'delete_any_order', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(61, 'force_delete_order', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(62, 'force_delete_any_order', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(63, 'restore_user', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(64, 'restore_any_user', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(65, 'force_delete_user', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(66, 'force_delete_any_user', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(67, 'widget_Filters', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(68, 'widget_StateWidget', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(69, 'widget_UsersChart', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(70, 'widget_OrdersChart', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(71, 'replicate_role', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(72, 'reorder_role', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(73, 'view_any_panel', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(2, 'user', 'web', '2024-05-09 04:29:26', '2024-05-09 04:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `specifications` longtext NOT NULL,
  `order_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `title`, `description`, `specifications`, `order_type`) VALUES
(1, '{\"ar\":\"تم استلام الدفعة الأولى و البالغة (الدفعة الأولى)\",\"en\":\"The First Payment Has Been Received (First Payment)\"}', '{\"ar\":\"<div>\\n                    تم استلام الدفعة الأولى و البالغة (input1) ل.س\\n                يرجى تزويدنا بالوثائق التالية للمباشرة الفورية بطلب الاستقدام الخاص بكم:\\n                <ul>\\n                    <li>صورة هوية</li>\\n                    <li>سند إقامة مصدّق من المختار و البلدية (أربع نسخ) </li>\\n                    <li>توقيع سند التوكيل لإجراء المعاملة بالنيابة عنكم (سيتم التواصل معكم من قبل القسم القانوني)</li>\\n                    <li>توقيع عقد الأستخدام (سيتم التواصل معكم من قبل القسم القانوني)</li>\\n                </ul>\\n                </div>\",\"en\":\"<div>\\n                    The first payment amounting to (input1) S.P. was received\\n                        Please provide us with the following documents to immediately proceed with your recruitment application:\\n                        <ul>\\n                            <li>ID Photo</li>\\n                            <li>Residence certificate certified by the mayor and the municipality (four copies)</li>\\n                            <li>Sign the power of attorney to conduct the transaction on your behalf (the legal department will contact you)</li>\\n                            <li>Signing the employment contract (the legal department will contact you)</li>\\n                        </ul>\\n                        </div>\"}', '{\"input1\":{\"type\":2,\"label\":\"قيمة الدفعة الأولى\"}}', 2),
(2, '{\"ar\":\"تم تقديم طلبك إلى الجهات الرسمية\",\"en\":\"Your application has been submitted to the official authorities\"}', '{\"ar\":\"<div>تم تقديم طلبك إلى الجهات الرسمية</div>\",\"en\":\"<div>Your application has been submitted to the official authorities</div>\"}', '{\"input1\":{\"type\":3,\"label\":\"هل تم تقدبم الطلب ؟\"}}', 2),
(3, '{\"ar\":\"الوقت المتوقع لإصدار الفيزا الخاصة بالعاملة هو () يوم عمل\",\"en\":\"The expected time for issuing the worker\'s visa is () working days\"}', '{\"ar\":\"<div>الوقت المتوقع لإصدار الفيزا الخاصة بالعاملة هو (input1) يوم عمل</div>\",\"en\":\"<div>The expected time for issuing a worker’s visa is (input1) working days</div>\"}', '{\"input1\":{\"type\":2,\"label\":\"عدد الأيام المتوقعة لإصدار الفيزا الخاصة بالعاملة\"}}', 2),
(4, '{\"ar\":\"يرجى أخذ العلم أن العاملة ستصل إلى مطار دمشق بتاريخ (), يرجى تسديد الدفعة الثانية()\",\"en\":\"Please note that the worker will arrive at Damascus Airport on (), please pay the second payment ()\"}', '{\"ar\":\"<div> يرجى أخذ العلم أن العاملة ستصل إلى مطار دمشق بتاريخ (input1), يرجى تسديد الدفعة الثانية البالغة (input2) ل.س</div>\",\"en\":\"<div> Please note that the worker will arrive at Damascus Airport on (input1), please pay the second payment of (input2) SYP</div>\"}', '{\"input1\":{\"type\":1,\"label\":\"موعد وصول الخادمة الى مطار دمشق الدولي\"},\"input2\":{\"type\":2,\"label\":\"قيمة الدفعة الثانية (رسوم الدولة)\"}}', 2),
(5, '{\"ar\":\"تم تحديد موعد الفحص الطبي بتاريخ ()\",\"en\":\"The medical examination date has been scheduled at ()\"}', '{\"ar\":\"<div>تم تحديد موعد الفحص الطبي بتاريخ (input1)</div>\",\"en\":\"<div>The medical examination has been scheduled at (input1)</div>\"}', '{\"input1\":{\"type\":1,\"label\":\"موعد الفحص الطبي\"}}', 2),
(6, '{\"ar\":\"يرجى تسديد الدفعة الثالثة و الأخيرة و البالغة ()\",\"en\":\"Please pay the third and final payment ()\"}', '{\"ar\":\"<div> يرجى تسديد الدفعة الثالثة و الأخيرة و البالغة (input1) ل.س</div>\",\"en\":\"<div> Please pay the third and final payment (input1) for SYP</div>\"}', '{\"input1\":{\"type\":2,\"label\":\"قيمة الدفعة الثالثة و الأخيرة\"}}', 2),
(7, '{\"ar\":\"تم تحديد موعد المطابقة بتاريخ ()\",\"en\":\"The matching date has been set on ()\"}', '{\"ar\":\"<div>تم تحديد موعد المطابقة بتاريخ (input1)</div>\",\"en\":\"<div>The matching date is set at (input1)</div>\"}', '{\"input1\":{\"type\":1,\"label\":\"موعد المطابقة\"}}', 2),
(8, '{\"ar\":\"جاري الانتظار لإصدار الإقامة\",\"en\":\"Waiting for the residence permit to be issued\"}', '{\"ar\":\"<div> جاري الانتظار لإصدار الإقامة</div>\",\"en\":\"<div>Waiting for the residence permit to be issued</div>\"}', '{\"input1\":{\"type\":3,\"label\":\"هل يتم الانتظار لإصدار الإقامة ؟\"}}', 2),
(9, '{\"ar\":\"يرجى مراجعة المكتب للحصول على الإقامة و جواز السفر و تصريح العمل\",\"en\":\"Please visit the office to obtain residency, passport and work permit\"}', '{\"ar\":\"<div>يرجى مراجعة المكتب للحصول على الإقامة و جواز السفر و تصريح العمل</div>\",\"en\":\"<div>Please visit the office to obtain residency, passport and work permit</div>\"}', '{\"input1\":{\"type\":3,\"label\":\"الإنتقال للمرحلة القادمة\"}}', 2),
(10, '{\"ar\":\"إن صلاحية الإقامة الخاصة بالعاملة ستنتهي بتاريخ ()\",\"en\":\"The worker’s residence permit will expire on ()\"}', '{\"ar\":\"<div>إن صلاحية الإقامة الخاصة بالعاملة (name) ستنتهي بتاريخ (input1) يرجى مراجعة المكتب للتجدبد</div>\",\"en\":\"<div>The residency permit for the worker (name) will expire on (input1). Please contact the office for renewal</div>\"}', '{\"input1\":{\"type\":1,\"label\":\"تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثانية\"}}', 2),
(11, '{\"ar\":\"تم تجديد إقامة السنة الثانية\",\"en\":\"The residency was renewed for the second year\"}', '{\"ar\":\"<div>تم تجديد إقامة السنة الثانية بنجاح</div>\",\"en\":\"<div>The second year residence permit was successfully renewed</div>\"}', '{\"input1\":{\"type\":3,\"label\":\"هل تم تجديد إقامة السنة الثانية ؟\"}}', 2),
(12, '{\"ar\":\"إن صلاحية الإقامة الخاصة بالعاملة ستنتهي بتاريخ ()\",\"en\":\"The worker’s residence permit will expire on ()\"}', '{\"ar\":\"<div>إن صلاحية الإقامة الخاصة بالعاملة (name) ستنتهي بتاريخ (input1) يرجى مراجعة المكتب للتجدبد</div>\",\"en\":\"<div>The residency permit for the worker (name) will expire on (input1). Please contact the office for renewal</div>\"}', '{\"input1\":{\"type\":1,\"label\":\"تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثالثة\"}}', 2),
(13, '{\"ar\":\"تم تجديد إقامة السنة الثالثة\",\"en\":\"The residence permit was renewed for the third year\"}', '{\"ar\":\"<div>تم تجديد إقامة السنة الثالثة بنجاح</div>\",\"en\":\"<div>The third year residence permit was successfully renewed</div>\"}', '{\"input1\":{\"type\":3,\"label\":\"هل تم تجديد إقامة السنة الثالثة ؟\"}}', 2),
(14, '{\"ar\":\"إن عقد العاملة سينتهي بتاريخ ()\",\"en\":\"The worker’s contract will expire on ()\"}', '{\"ar\":\"<div>\\n                    إن عقد العاملة سينتهي بتاريخ (input1)\\n                يرجى مراجعة المكتب للعمل على استصدار الوثائق التالية :\\n                    <ul>\\n                        <li>براءة ذمة</li>\\n                        <li> انفكاك من التأمينات</li>\\n                    </ul>\\n                </div>\",\"en\":\"<div>\\n                    The worker’s contract will end on (input1)\\n                Please visit the office to obtain the following documents:\\n                    <ul>\\n                        <li>Disclaimer</li>\\n                        <li>Disconnection from insurance</li>\\n                    </ul>\\n                </div>\"}', '{\"input1\":{\"type\":1,\"label\":\"تاريخ إنتهاء العقد الخاص بالعاملة\"}}', 2),
(15, '{\"ar\":\"تم استلام الدفعة الأولى و البالغة (الدفعة الأولى)\",\"en\":\"The first and final payment has been received (first payment)\"}', '{\"ar\":\"<div>\\n        تم استلام الدفعة الأولى و البالغة (input1) ل.س\\n    يرجى تزويدنا بالوثائق التالية للمباشرة الفورية بطلب التنازل الخاص بكم:\\n    <ul>\\n        <li>صورة هوية</li>\\n        <li>سند إقامة مصدّق من المختار و البلدية (نسختين) </li>\\n        <li>توقيع سند التوكيل لإجراء معاملة التنازل (سيتم التواصل معكم من قبل القسم القانوني)</li>\\n        <li>توقيع العقد (سيتم التواصل معكم من قبل القسم القانوني)</li>\\n    </ul>\\n</div>\",\"en\":\"<div>\\n        The first payment amounting to (input1) S.P. was received\\n    Please provide us with the following documents to immediately initiate your waiver request:\\n    <ul>\\n        <li>Photo ID</li>\\n        <li>Residence certificate certified by the mukhtar and the municipality (two copies)</li>\\n        <li>Signing the power of attorney to conduct the assignment transaction (the legal department will contact you)</li>\\n        <li>Signing the contract (the legal department will contact you)</li>\\n    </ul>\\n</div>\"}', '{\"input1\":{\"type\":2,\"label\":\"قيمة الدفعة الأولى\"}}', 1),
(16, '{\"ar\":\"تم تحديد موعد للتنازل بالهجرة و الجوازات بتاريخ()\",\"en\":\"A date has been set for the waiver of immigration and passports on ()\"}', '{\"ar\":\"<div>تم تحديد موعد للتنازل بالهجرة و الجوازات بتاريخ (input1)</div>\",\"en\":\"<div>A date has been set for the Immigration and Passports waiver on (input1)</div>\"}', '{\"input1\":{\"type\":1,\"label\":\"تاريخ موعد التنازل\"}}', 1),
(17, '{\"ar\":\"تم تحديد موعد المطابقة بتاريخ ()\",\"en\":\"The matching date has been set on ()\"}', '{\"ar\":\"<div> تم تحديد موعد المطابقة بتاريخ (input1)</div>\",\"en\":\"<div>The matching date is set to (input1)</div>\"}', '{\"input1\":{\"type\":1,\"label\":\"موعد المطابقة\"}}', 1),
(18, '{\"ar\":\"تم تحديد موعد توقيع العقد في مديرية الشؤون الاجتماعية و العمل بتاريخ ()\",\"en\":\"The date for signing the contract has been set at the Directorate of Social Affairs and Labor on ()\"}', '{\"ar\":\"<div> تم تحديد موعد توقيع العقد في مديرية الشؤون الاجتماعية و العمل بتاريخ (input1)</div>\",\"en\":\"<div> The date for signing the contract has been set at the Directorate of Social Affairs and Labor on (input1)</div>\"}', '{\"input1\":{\"type\":1,\"label\":\"موعد توقيع العقد\"}}', 1),
(19, '{\"ar\":\"جاري الانتظار لإصدار الإقامة\",\"en\":\"Waiting for the residence permit to be issued\"}', '{\"ar\":\"<div>جاري الانتظار لإصدار الإقامة</div>\",\"en\":\"<div>Waiting to issue residency</div>\"}', '{\"input1\":{\"type\":3,\"label\":\"يتم الانتظار لإصدار الإقامة ؟\"}}', 1),
(20, '{\"ar\":\"يرجى مراجعة المكتب للحصول على الإقامة و جواز السفر و تصريح العمل\",\"en\":\"Please visit the office to obtain residency, passport and work permit\"}', '{\"ar\":\"<div>يرجى مراجعة المكتب للحصول على الإقامة و جواز السفر و تصريح العمل</div>\",\"en\":\"<div>Please visit the office to obtain residency, passport and work permit</div>\"}', '{\"input1\":{\"type\":3,\"label\":\"مراجعة المكتب ؟\"}}', 1),
(21, '{\"ar\":\"إن صلاحية الإقامة الخاصة بالعاملة ستنتهي بتاريخ ()\",\"en\":\"The Maid’s residence permit will expire on ()\"}', '{\"ar\":\"<div>إن صلاحية الإقامة الخاصة بالعاملة (name) ستنتهي بتاريخ (input1) يرجى مراجعة المكتب للتجدبد</div>\",\"en\":\"<div>The residency permit for the worker (name) will expire on (input1). Please contact the office for renewal</div>\"}', '{\"input1\":{\"type\":1,\"label\":\"تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثانية\"}}', 1),
(22, '{\"ar\":\"تم تجديد إقامة السنة الثانية\",\"en\":\"The residency was renewed for the second year\"}', '{\"ar\":\"<div>تم تجديد إقامة السنة الثانية بنجاح</div>\",\"en\":\"<div>The second year residence permit was successfully renewed</div>\"}', '{\"input1\":{\"type\":3,\"label\":\"هل تم تجديد إقامة السنة الثانية ؟\"}}', 1),
(23, '{\"ar\":\"إن صلاحية الإقامة الخاصة بالعاملة ستنتهي بتاريخ ()\",\"en\":\"The Maid’s residence permit will expire on ()\"}', '{\"ar\":\"<div>إن صلاحية الإقامة الخاصة بالعاملة (name) ستنتهي بتاريخ (input1) يرجى مراجعة المكتب للتجدبد</div>\",\"en\":\"<div>The residency permit for the worker (name) will expire on (input1). Please contact the office for renewal</div>\"}', '{\"input1\":{\"type\":1,\"label\":\"تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثالثة\"}}', 1),
(24, '{\"ar\":\"تم تجديد إقامة السنة الثالثة\",\"en\":\"The residence permit was renewed for the third year\"}', '{\"ar\":\"<div>تم تجديد إقامة السنة الثالثة بنجاح</div>\",\"en\":\"<div>The third year residence permit was successfully renewed</div>\"}', '{\"input1\":{\"type\":3,\"label\":\"هل تم تجديد إقامة السنة الثالثة ؟\"}}', 1),
(25, '{\"ar\":\"إن عقد العاملة سينتهي بتاريخ ()\",\"en\":\"The Maid’s contract will expire on ()\"}', '{\"ar\":\"<div>\\n        إن عقد العاملة سينتهي بتاريخ (input1)\\n    يرجى مراجعة المكتب للعمل على استصدار الوثائق التالية :\\n        <ul>\\n            <li>براءة ذمة</li>\\n            <li> انفكاك من التأمينات</li>\\n        </ul>\\n    </div>\",\"en\":\"<div>\\n        The Maid’s contract will end on (input1)\\n    Please visit the office to obtain the following documents:\\n        <ul>\\n            <li>Disclaimer</li>\\n            <li>Disconnection from insurance</li>\\n        </ul>\\n    </div>\"}', '{\"input1\":{\"type\":1,\"label\":\"تاريخ إنتهاء العقد الخاص بالعاملة\"}}', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mousa', 'mousa@gmail.com', '$2y$10$.IJM9UvqVzaAgywx2GMVUevVjsYZ03BWtX8UoAVrXtHRsXkK/39Zq', '0987654321', 'u8GmfAPaThcrQxC7MFROWnLdamto9EZzJtzGTzTYGuHeU5rKRI17iO5dfdaD', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(2, 'issa', 'issa@gmail.com', '$2y$10$VlHSGAMzXDJTL4aU3ihfFeYq7soZBJHbN1kS3nZ3Eowd/pYlCuV1G', '0987654321', '', '2024-05-09 04:29:26', '2024-05-09 04:29:26'),
(3, 'sdvsdv', 'mousa2@gmail.com', '$2y$10$/FBbtykG6ceZtPGJ.sRqzu4bB6rbpJoYV6aBsOEwEIqU3j7jt0CT6', '2345452', '', '2024-05-13 08:16:13', '2024-05-13 08:16:13'),
(4, 'اسمك', 's@gmail.com', '$2y$10$S1fwHdZgO004RU8ca.hZKe405tZH4CvPUOxdW9PODFU6UQRV/IMT2', '2345452', NULL, '2024-07-02 10:32:20', '2024-07-02 10:32:20'),
(5, 'issa halabi', 'eesahalabi@gmail.com', '$2y$10$Aq8vwGQpwJMMnCkVeJSIeuYvQuinTPdspJMjXzc/TAzQJNU7IqIwy', '946649531', NULL, '2024-07-29 04:34:33', '2024-07-29 04:34:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `laws`
--
ALTER TABLE `laws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maids`
--
ALTER TABLE `maids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nationalities_nationality_id_foreign` (`nationality_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `m_c_q_s`
--
ALTER TABLE `m_c_q_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_c_q_s_user_id_foreign` (`user_id`);

--
-- Indexes for table `nationalities`
--
ALTER TABLE `nationalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_maid_id_foreign` (`maid_id`),
  ADD KEY `orders_status_id_foreign` (`status_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_status_order_id_foreign` (`order_id`),
  ADD KEY `order_status_status_id_foreign` (`status_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
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
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `laws`
--
ALTER TABLE `laws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maids`
--
ALTER TABLE `maids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `m_c_q_s`
--
ALTER TABLE `m_c_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nationalities`
--
ALTER TABLE `nationalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `maids`
--
ALTER TABLE `maids`
  ADD CONSTRAINT `nationalities_nationality_id_foreign` FOREIGN KEY (`nationality_id`) REFERENCES `nationalities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `m_c_q_s`
--
ALTER TABLE `m_c_q_s`
  ADD CONSTRAINT `m_c_q_s_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_maid_id_foreign` FOREIGN KEY (`maid_id`) REFERENCES `maids` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_status`
--
ALTER TABLE `order_status`
  ADD CONSTRAINT `order_status_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_status_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
