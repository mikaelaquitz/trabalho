-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela bilheteria.bilhetes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `bilhetes` DISABLE KEYS */;
INSERT INTO `bilhetes` (`id`, `created_at`, `updated_at`, `nome`, `data`, `num_assento`, `id_user`, `id_evento`) VALUES
	(1, '2022-06-21 03:19:14', '2022-06-21 03:19:14', 'Show Maria Lua', '2022-06-13', 4, 2, 2),
	(2, '2022-06-21 03:19:33', '2022-06-21 03:19:33', 'Show Zeca', '2022-06-22', 12, 2, 1),
	(3, '2022-06-21 03:19:54', '2022-06-21 03:19:54', 'Irmãos Petras', '2022-08-30', 11, 2, 3),
	(4, '2022-06-21 03:20:11', '2022-06-21 03:20:11', 'Lolo e popi', '2022-10-10', 9, 2, 4),
	(5, '2022-06-21 03:20:31', '2022-06-21 03:20:31', 'Lolo e popi', '2022-10-10', 12, 2, 4);
/*!40000 ALTER TABLE `bilhetes` ENABLE KEYS */;

-- Copiando dados para a tabela bilheteria.categorias: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nome`, `created_at`, `updated_at`, `descricao`) VALUES
	(1, 'Show', '2022-06-21 03:14:32', '2022-06-21 03:14:32', 'Apresentações musicais'),
	(2, 'Stand up', '2022-06-21 03:15:36', '2022-06-21 03:15:36', 'Apresentação de humor'),
	(3, 'Teatro', '2022-06-21 03:15:53', '2022-06-21 03:15:53', 'Peças teatrais');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Copiando dados para a tabela bilheteria.eventos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` (`id`, `created_at`, `updated_at`, `nome`, `data`, `qtd_assentos`, `ingressos_disponiveis`, `ingressos_vendidos`, `id_categoria`, `lugares`) VALUES
	(1, '2022-06-21 03:16:30', '2022-06-21 03:19:33', 'Show Zeca', '2022-06-22', 100, 99, 1, 1, '0'),
	(2, '2022-06-21 03:16:54', '2022-06-21 03:19:14', 'Show Maria Lua', '2022-06-13', 105, 104, 1, 1, '0'),
	(3, '2022-06-21 03:17:30', '2022-06-21 03:19:54', 'Irmãos Petras', '2022-08-30', 300, 299, 1, 2, '0'),
	(4, '2022-06-21 03:18:08', '2022-06-21 03:20:31', 'Lolo e popi', '2022-10-10', 235, 233, 2, 3, '0');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;

-- Copiando dados para a tabela bilheteria.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Copiando dados para a tabela bilheteria.migrations: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_06_12_214857_create_categorias_table', 1),
	(6, '2022_06_12_215255_create_eventos_table', 1),
	(7, '2022_06_12_221931_create_bilhetes_table', 1),
	(8, '2022_06_17_173312_alter_table_user_add_colmun', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando dados para a tabela bilheteria.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando dados para a tabela bilheteria.personal_access_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Copiando dados para a tabela bilheteria.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Administrador', 'teste@teste', NULL, '$2y$10$17HY80qi6OHK1Evj.xqW5.0FCnhFcOeXW87Wr9mj3NZOspYjFLA2e', 'admin', NULL, '2022-06-21 03:12:49', '2022-06-21 03:12:49'),
	(2, 'Karla Maria Rufino', 'karlarufino@mail.com', NULL, '$2y$10$mYu3ruOOP8b6./7EtH.t9O166cPjGwMgjyyxvvzGY0Qjn9.jXIwvW', 'cliente', NULL, '2022-06-21 03:18:56', '2022-06-21 03:18:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
