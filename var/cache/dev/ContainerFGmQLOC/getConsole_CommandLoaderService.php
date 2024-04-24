<?php

namespace ContainerFGmQLOC;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_CommandLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'CommandLoader'.\DIRECTORY_SEPARATOR.'CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'CommandLoader'.\DIRECTORY_SEPARATOR.'ContainerCommandLoader.php';

        return $container->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Command\\BooksImporterCommand' => ['privates', '.App\\Command\\BooksImporterCommand.lazy', 'getBooksImporterCommand_LazyService', true],
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => ['privates', 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'getRunSqlCommandService', true],
            'console.command.about' => ['privates', '.console.command.about.lazy', 'get_Console_Command_About_LazyService', true],
            'console.command.assets_install' => ['privates', '.console.command.assets_install.lazy', 'get_Console_Command_AssetsInstall_LazyService', true],
            'console.command.cache_clear' => ['privates', '.console.command.cache_clear.lazy', 'get_Console_Command_CacheClear_LazyService', true],
            'console.command.cache_pool_clear' => ['privates', '.console.command.cache_pool_clear.lazy', 'get_Console_Command_CachePoolClear_LazyService', true],
            'console.command.cache_pool_delete' => ['privates', '.console.command.cache_pool_delete.lazy', 'get_Console_Command_CachePoolDelete_LazyService', true],
            'console.command.cache_pool_invalidate_tags' => ['privates', '.console.command.cache_pool_invalidate_tags.lazy', 'get_Console_Command_CachePoolInvalidateTags_LazyService', true],
            'console.command.cache_pool_list' => ['privates', '.console.command.cache_pool_list.lazy', 'get_Console_Command_CachePoolList_LazyService', true],
            'console.command.cache_pool_prune' => ['privates', '.console.command.cache_pool_prune.lazy', 'get_Console_Command_CachePoolPrune_LazyService', true],
            'console.command.cache_warmup' => ['privates', '.console.command.cache_warmup.lazy', 'get_Console_Command_CacheWarmup_LazyService', true],
            'console.command.config_debug' => ['privates', '.console.command.config_debug.lazy', 'get_Console_Command_ConfigDebug_LazyService', true],
            'console.command.config_dump_reference' => ['privates', '.console.command.config_dump_reference.lazy', 'get_Console_Command_ConfigDumpReference_LazyService', true],
            'console.command.container_debug' => ['privates', '.console.command.container_debug.lazy', 'get_Console_Command_ContainerDebug_LazyService', true],
            'console.command.container_lint' => ['privates', '.console.command.container_lint.lazy', 'get_Console_Command_ContainerLint_LazyService', true],
            'console.command.debug_autowiring' => ['privates', '.console.command.debug_autowiring.lazy', 'get_Console_Command_DebugAutowiring_LazyService', true],
            'console.command.dotenv_debug' => ['privates', '.console.command.dotenv_debug.lazy', 'get_Console_Command_DotenvDebug_LazyService', true],
            'console.command.event_dispatcher_debug' => ['privates', '.console.command.event_dispatcher_debug.lazy', 'get_Console_Command_EventDispatcherDebug_LazyService', true],
            'console.command.router_debug' => ['privates', '.console.command.router_debug.lazy', 'get_Console_Command_RouterDebug_LazyService', true],
            'console.command.router_match' => ['privates', '.console.command.router_match.lazy', 'get_Console_Command_RouterMatch_LazyService', true],
            'console.command.secrets_decrypt_to_local' => ['privates', '.console.command.secrets_decrypt_to_local.lazy', 'get_Console_Command_SecretsDecryptToLocal_LazyService', true],
            'console.command.secrets_encrypt_from_local' => ['privates', '.console.command.secrets_encrypt_from_local.lazy', 'get_Console_Command_SecretsEncryptFromLocal_LazyService', true],
            'console.command.secrets_generate_key' => ['privates', '.console.command.secrets_generate_key.lazy', 'get_Console_Command_SecretsGenerateKey_LazyService', true],
            'console.command.secrets_list' => ['privates', '.console.command.secrets_list.lazy', 'get_Console_Command_SecretsList_LazyService', true],
            'console.command.secrets_remove' => ['privates', '.console.command.secrets_remove.lazy', 'get_Console_Command_SecretsRemove_LazyService', true],
            'console.command.secrets_set' => ['privates', '.console.command.secrets_set.lazy', 'get_Console_Command_SecretsSet_LazyService', true],
            'console.command.serializer_debug' => ['privates', '.console.command.serializer_debug.lazy', 'get_Console_Command_SerializerDebug_LazyService', true],
            'console.command.translation_debug' => ['privates', '.console.command.translation_debug.lazy', 'get_Console_Command_TranslationDebug_LazyService', true],
            'console.command.translation_extract' => ['privates', '.console.command.translation_extract.lazy', 'get_Console_Command_TranslationExtract_LazyService', true],
            'console.command.translation_pull' => ['privates', '.console.command.translation_pull.lazy', 'get_Console_Command_TranslationPull_LazyService', true],
            'console.command.translation_push' => ['privates', '.console.command.translation_push.lazy', 'get_Console_Command_TranslationPush_LazyService', true],
            'console.command.xliff_lint' => ['privates', '.console.command.xliff_lint.lazy', 'get_Console_Command_XliffLint_LazyService', true],
            'console.command.yaml_lint' => ['privates', '.console.command.yaml_lint.lazy', 'get_Console_Command_YamlLint_LazyService', true],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', true],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', true],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', true],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', true],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', true],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', true],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', true],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', true],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', true],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', true],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', true],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', true],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', true],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', true],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', true],
            'doctrine_migrations.current_command' => ['privates', '.doctrine_migrations.current_command.lazy', 'get_DoctrineMigrations_CurrentCommand_LazyService', true],
            'doctrine_migrations.diff_command' => ['privates', '.doctrine_migrations.diff_command.lazy', 'get_DoctrineMigrations_DiffCommand_LazyService', true],
            'doctrine_migrations.dump_schema_command' => ['privates', '.doctrine_migrations.dump_schema_command.lazy', 'get_DoctrineMigrations_DumpSchemaCommand_LazyService', true],
            'doctrine_migrations.execute_command' => ['privates', '.doctrine_migrations.execute_command.lazy', 'get_DoctrineMigrations_ExecuteCommand_LazyService', true],
            'doctrine_migrations.generate_command' => ['privates', '.doctrine_migrations.generate_command.lazy', 'get_DoctrineMigrations_GenerateCommand_LazyService', true],
            'doctrine_migrations.latest_command' => ['privates', '.doctrine_migrations.latest_command.lazy', 'get_DoctrineMigrations_LatestCommand_LazyService', true],
            'doctrine_migrations.migrate_command' => ['privates', '.doctrine_migrations.migrate_command.lazy', 'get_DoctrineMigrations_MigrateCommand_LazyService', true],
            'doctrine_migrations.rollup_command' => ['privates', '.doctrine_migrations.rollup_command.lazy', 'get_DoctrineMigrations_RollupCommand_LazyService', true],
            'doctrine_migrations.status_command' => ['privates', '.doctrine_migrations.status_command.lazy', 'get_DoctrineMigrations_StatusCommand_LazyService', true],
            'doctrine_migrations.sync_metadata_command' => ['privates', '.doctrine_migrations.sync_metadata_command.lazy', 'get_DoctrineMigrations_SyncMetadataCommand_LazyService', true],
            'doctrine_migrations.up_to_date_command' => ['privates', '.doctrine_migrations.up_to_date_command.lazy', 'get_DoctrineMigrations_UpToDateCommand_LazyService', true],
            'doctrine_migrations.version_command' => ['privates', '.doctrine_migrations.version_command.lazy', 'get_DoctrineMigrations_VersionCommand_LazyService', true],
            'doctrine_migrations.versions_command' => ['privates', '.doctrine_migrations.versions_command.lazy', 'get_DoctrineMigrations_VersionsCommand_LazyService', true],
            'maker.auto_command.make_auth' => ['privates', '.maker.auto_command.make_auth.lazy', 'get_Maker_AutoCommand_MakeAuth_LazyService', true],
            'maker.auto_command.make_command' => ['privates', '.maker.auto_command.make_command.lazy', 'get_Maker_AutoCommand_MakeCommand_LazyService', true],
            'maker.auto_command.make_controller' => ['privates', '.maker.auto_command.make_controller.lazy', 'get_Maker_AutoCommand_MakeController_LazyService', true],
            'maker.auto_command.make_crud' => ['privates', '.maker.auto_command.make_crud.lazy', 'get_Maker_AutoCommand_MakeCrud_LazyService', true],
            'maker.auto_command.make_docker_database' => ['privates', '.maker.auto_command.make_docker_database.lazy', 'get_Maker_AutoCommand_MakeDockerDatabase_LazyService', true],
            'maker.auto_command.make_entity' => ['privates', '.maker.auto_command.make_entity.lazy', 'get_Maker_AutoCommand_MakeEntity_LazyService', true],
            'maker.auto_command.make_fixtures' => ['privates', '.maker.auto_command.make_fixtures.lazy', 'get_Maker_AutoCommand_MakeFixtures_LazyService', true],
            'maker.auto_command.make_form' => ['privates', '.maker.auto_command.make_form.lazy', 'get_Maker_AutoCommand_MakeForm_LazyService', true],
            'maker.auto_command.make_listener' => ['privates', '.maker.auto_command.make_listener.lazy', 'get_Maker_AutoCommand_MakeListener_LazyService', true],
            'maker.auto_command.make_message' => ['privates', '.maker.auto_command.make_message.lazy', 'get_Maker_AutoCommand_MakeMessage_LazyService', true],
            'maker.auto_command.make_messenger_middleware' => ['privates', '.maker.auto_command.make_messenger_middleware.lazy', 'get_Maker_AutoCommand_MakeMessengerMiddleware_LazyService', true],
            'maker.auto_command.make_migration' => ['privates', '.maker.auto_command.make_migration.lazy', 'get_Maker_AutoCommand_MakeMigration_LazyService', true],
            'maker.auto_command.make_registration_form' => ['privates', '.maker.auto_command.make_registration_form.lazy', 'get_Maker_AutoCommand_MakeRegistrationForm_LazyService', true],
            'maker.auto_command.make_reset_password' => ['privates', '.maker.auto_command.make_reset_password.lazy', 'get_Maker_AutoCommand_MakeResetPassword_LazyService', true],
            'maker.auto_command.make_schedule' => ['privates', '.maker.auto_command.make_schedule.lazy', 'get_Maker_AutoCommand_MakeSchedule_LazyService', true],
            'maker.auto_command.make_security_form_login' => ['privates', '.maker.auto_command.make_security_form_login.lazy', 'get_Maker_AutoCommand_MakeSecurityFormLogin_LazyService', true],
            'maker.auto_command.make_serializer_encoder' => ['privates', '.maker.auto_command.make_serializer_encoder.lazy', 'get_Maker_AutoCommand_MakeSerializerEncoder_LazyService', true],
            'maker.auto_command.make_serializer_normalizer' => ['privates', '.maker.auto_command.make_serializer_normalizer.lazy', 'get_Maker_AutoCommand_MakeSerializerNormalizer_LazyService', true],
            'maker.auto_command.make_stimulus_controller' => ['privates', '.maker.auto_command.make_stimulus_controller.lazy', 'get_Maker_AutoCommand_MakeStimulusController_LazyService', true],
            'maker.auto_command.make_test' => ['privates', '.maker.auto_command.make_test.lazy', 'get_Maker_AutoCommand_MakeTest_LazyService', true],
            'maker.auto_command.make_twig_component' => ['privates', '.maker.auto_command.make_twig_component.lazy', 'get_Maker_AutoCommand_MakeTwigComponent_LazyService', true],
            'maker.auto_command.make_twig_extension' => ['privates', '.maker.auto_command.make_twig_extension.lazy', 'get_Maker_AutoCommand_MakeTwigExtension_LazyService', true],
            'maker.auto_command.make_user' => ['privates', '.maker.auto_command.make_user.lazy', 'get_Maker_AutoCommand_MakeUser_LazyService', true],
            'maker.auto_command.make_validator' => ['privates', '.maker.auto_command.make_validator.lazy', 'get_Maker_AutoCommand_MakeValidator_LazyService', true],
            'maker.auto_command.make_voter' => ['privates', '.maker.auto_command.make_voter.lazy', 'get_Maker_AutoCommand_MakeVoter_LazyService', true],
            'maker.auto_command.make_webhook' => ['privates', '.maker.auto_command.make_webhook.lazy', 'get_Maker_AutoCommand_MakeWebhook_LazyService', true],
        ], [
            'App\\Command\\BooksImporterCommand' => '?',
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand',
            'console.command.about' => '?',
            'console.command.assets_install' => '?',
            'console.command.cache_clear' => '?',
            'console.command.cache_pool_clear' => '?',
            'console.command.cache_pool_delete' => '?',
            'console.command.cache_pool_invalidate_tags' => '?',
            'console.command.cache_pool_list' => '?',
            'console.command.cache_pool_prune' => '?',
            'console.command.cache_warmup' => '?',
            'console.command.config_debug' => '?',
            'console.command.config_dump_reference' => '?',
            'console.command.container_debug' => '?',
            'console.command.container_lint' => '?',
            'console.command.debug_autowiring' => '?',
            'console.command.dotenv_debug' => '?',
            'console.command.event_dispatcher_debug' => '?',
            'console.command.router_debug' => '?',
            'console.command.router_match' => '?',
            'console.command.secrets_decrypt_to_local' => '?',
            'console.command.secrets_encrypt_from_local' => '?',
            'console.command.secrets_generate_key' => '?',
            'console.command.secrets_list' => '?',
            'console.command.secrets_remove' => '?',
            'console.command.secrets_set' => '?',
            'console.command.serializer_debug' => '?',
            'console.command.translation_debug' => '?',
            'console.command.translation_extract' => '?',
            'console.command.translation_pull' => '?',
            'console.command.translation_push' => '?',
            'console.command.xliff_lint' => '?',
            'console.command.yaml_lint' => '?',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\MetadataCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\ResultCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\CollectionRegionCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\EntityRegionCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryRegionCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\InfoCommand',
            'doctrine.query_dql_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\RunDqlCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\CreateCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\DropCommand',
            'doctrine.schema_update_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\UpdateCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ValidateSchemaCommand',
            'doctrine_migrations.current_command' => '?',
            'doctrine_migrations.diff_command' => '?',
            'doctrine_migrations.dump_schema_command' => '?',
            'doctrine_migrations.execute_command' => '?',
            'doctrine_migrations.generate_command' => '?',
            'doctrine_migrations.latest_command' => '?',
            'doctrine_migrations.migrate_command' => '?',
            'doctrine_migrations.rollup_command' => '?',
            'doctrine_migrations.status_command' => '?',
            'doctrine_migrations.sync_metadata_command' => '?',
            'doctrine_migrations.up_to_date_command' => '?',
            'doctrine_migrations.version_command' => '?',
            'doctrine_migrations.versions_command' => '?',
            'maker.auto_command.make_auth' => '?',
            'maker.auto_command.make_command' => '?',
            'maker.auto_command.make_controller' => '?',
            'maker.auto_command.make_crud' => '?',
            'maker.auto_command.make_docker_database' => '?',
            'maker.auto_command.make_entity' => '?',
            'maker.auto_command.make_fixtures' => '?',
            'maker.auto_command.make_form' => '?',
            'maker.auto_command.make_listener' => '?',
            'maker.auto_command.make_message' => '?',
            'maker.auto_command.make_messenger_middleware' => '?',
            'maker.auto_command.make_migration' => '?',
            'maker.auto_command.make_registration_form' => '?',
            'maker.auto_command.make_reset_password' => '?',
            'maker.auto_command.make_schedule' => '?',
            'maker.auto_command.make_security_form_login' => '?',
            'maker.auto_command.make_serializer_encoder' => '?',
            'maker.auto_command.make_serializer_normalizer' => '?',
            'maker.auto_command.make_stimulus_controller' => '?',
            'maker.auto_command.make_test' => '?',
            'maker.auto_command.make_twig_component' => '?',
            'maker.auto_command.make_twig_extension' => '?',
            'maker.auto_command.make_user' => '?',
            'maker.auto_command.make_validator' => '?',
            'maker.auto_command.make_voter' => '?',
            'maker.auto_command.make_webhook' => '?',
        ]), ['app:book_importer' => 'App\\Command\\BooksImporterCommand', 'app:add-books' => 'App\\Command\\BooksImporterCommand', 'about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:invalidate-tags' => 'console.command.cache_pool_invalidate_tags', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:dotenv' => 'console.command.dotenv_debug', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:serializer' => 'console.command.serializer_debug', 'debug:translation' => 'console.command.translation_debug', 'translation:extract' => 'console.command.translation_extract', 'translation:pull' => 'console.command.translation_pull', 'translation:push' => 'console.command.translation_push', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'dbal:run-sql' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:sync-metadata-storage' => 'doctrine_migrations.sync_metadata_command', 'doctrine:migrations:list' => 'doctrine_migrations.versions_command', 'doctrine:migrations:current' => 'doctrine_migrations.current_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command', 'make:auth' => 'maker.auto_command.make_auth', 'make:command' => 'maker.auto_command.make_command', 'make:twig-component' => 'maker.auto_command.make_twig_component', 'make:controller' => 'maker.auto_command.make_controller', 'make:crud' => 'maker.auto_command.make_crud', 'make:docker:database' => 'maker.auto_command.make_docker_database', 'make:entity' => 'maker.auto_command.make_entity', 'make:fixtures' => 'maker.auto_command.make_fixtures', 'make:form' => 'maker.auto_command.make_form', 'make:listener' => 'maker.auto_command.make_listener', 'make:subscriber' => 'maker.auto_command.make_listener', 'make:message' => 'maker.auto_command.make_message', 'make:messenger-middleware' => 'maker.auto_command.make_messenger_middleware', 'make:registration-form' => 'maker.auto_command.make_registration_form', 'make:reset-password' => 'maker.auto_command.make_reset_password', 'make:schedule' => 'maker.auto_command.make_schedule', 'make:serializer:encoder' => 'maker.auto_command.make_serializer_encoder', 'make:serializer:normalizer' => 'maker.auto_command.make_serializer_normalizer', 'make:twig-extension' => 'maker.auto_command.make_twig_extension', 'make:test' => 'maker.auto_command.make_test', 'make:unit-test' => 'maker.auto_command.make_test', 'make:functional-test' => 'maker.auto_command.make_test', 'make:validator' => 'maker.auto_command.make_validator', 'make:voter' => 'maker.auto_command.make_voter', 'make:user' => 'maker.auto_command.make_user', 'make:migration' => 'maker.auto_command.make_migration', 'make:stimulus-controller' => 'maker.auto_command.make_stimulus_controller', 'make:security:form-login' => 'maker.auto_command.make_security_form_login', 'make:webhook' => 'maker.auto_command.make_webhook']);
    }
}