<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class AdminContainer extends \PrestaShop\PrestaShop\Adapter\Container\LegacyContainer
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->methodMap = [
            'annotation_reader' => 'getAnnotationReaderService',
            'cache.doctrine.orm.default.metadata' => 'getCache_Doctrine_Orm_Default_MetadataService',
            'cache.doctrine.orm.default.query' => 'getCache_Doctrine_Orm_Default_QueryService',
            'cache.doctrine.orm.default.result' => 'getCache_Doctrine_Orm_Default_ResultService',
            'context.static' => 'getContext_StaticService',
            'doctrine' => 'getDoctrineService',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService',
            'filesystem' => 'getFilesystemService',
            'finder' => 'getFinderService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'hashing' => 'getHashingService',
            'hook_configurator' => 'getHookConfiguratorService',
            'hook_provider' => 'getHookProviderService',
            'hook_repository' => 'getHookRepositoryService',
            'prestashop.adapter.context_state_manager' => 'getPrestashop_Adapter_ContextStateManagerService',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService',
            'prestashop.adapter.data_provider.currency' => 'getPrestashop_Adapter_DataProvider_CurrencyService',
            'prestashop.adapter.environment' => 'getPrestashop_Adapter_EnvironmentService',
            'prestashop.adapter.legacy.configuration' => 'getPrestashop_Adapter_Legacy_ConfigurationService',
            'prestashop.adapter.legacy.context' => 'getPrestashop_Adapter_Legacy_ContextService',
            'prestashop.adapter.news.circuit_breaker' => 'getPrestashop_Adapter_News_CircuitBreakerService',
            'prestashop.adapter.news.circuit_breaker.settings' => 'getPrestashop_Adapter_News_CircuitBreaker_SettingsService',
            'prestashop.adapter.news.provider' => 'getPrestashop_Adapter_News_ProviderService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
            'prestashop.adapter.validate' => 'getPrestashop_Adapter_ValidateService',
            'prestashop.core.circuit_breaker.advanced_factory' => 'getPrestashop_Core_CircuitBreaker_AdvancedFactoryService',
            'prestashop.core.circuit_breaker.doctrine_cache' => 'getPrestashop_Core_CircuitBreaker_DoctrineCacheService',
            'prestashop.core.circuit_breaker.guzzle.cache_storage' => 'getPrestashop_Core_CircuitBreaker_Guzzle_CacheStorageService',
            'prestashop.core.circuit_breaker.guzzle.cache_subscriber' => 'getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberService',
            'prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory' => 'getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberFactoryService',
            'prestashop.core.circuit_breaker.storage' => 'getPrestashop_Core_CircuitBreaker_StorageService',
            'prestashop.core.localization.cache.adapter' => 'getPrestashop_Core_Localization_Cache_AdapterService',
            'prestashop.core.localization.cldr.cache.adapter' => 'getPrestashop_Core_Localization_Cldr_Cache_AdapterService',
            'prestashop.core.localization.cldr.datalayer.locale_cache' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService',
            'prestashop.core.localization.cldr.datalayer.locale_reference' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService',
            'prestashop.core.localization.cldr.locale_data_source' => 'getPrestashop_Core_Localization_Cldr_LocaleDataSourceService',
            'prestashop.core.localization.cldr.locale_repository' => 'getPrestashop_Core_Localization_Cldr_LocaleRepositoryService',
            'prestashop.core.localization.cldr.reader' => 'getPrestashop_Core_Localization_Cldr_ReaderService',
            'prestashop.core.localization.currency.datasource' => 'getPrestashop_Core_Localization_Currency_DatasourceService',
            'prestashop.core.localization.currency.middleware.cache' => 'getPrestashop_Core_Localization_Currency_Middleware_CacheService',
            'prestashop.core.localization.currency.middleware.database' => 'getPrestashop_Core_Localization_Currency_Middleware_DatabaseService',
            'prestashop.core.localization.currency.middleware.installed' => 'getPrestashop_Core_Localization_Currency_Middleware_InstalledService',
            'prestashop.core.localization.currency.middleware.reference' => 'getPrestashop_Core_Localization_Currency_Middleware_ReferenceService',
            'prestashop.core.localization.currency.repository' => 'getPrestashop_Core_Localization_Currency_RepositoryService',
            'prestashop.core.localization.locale.context_locale' => 'getPrestashop_Core_Localization_Locale_ContextLocaleService',
            'prestashop.core.localization.locale.repository' => 'getPrestashop_Core_Localization_Locale_RepositoryService',
            'prestashop.core.string.character_cleaner' => 'getPrestashop_Core_String_CharacterCleanerService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'product_comment_criterion_repository' => 'getProductCommentCriterionRepositoryService',
            'product_comment_repository' => 'getProductCommentRepositoryService',
            'ps_checkout.adapter.language' => 'getPsCheckout_Adapter_LanguageService',
            'ps_checkout.api.firebase.auth' => 'getPsCheckout_Api_Firebase_AuthService',
            'ps_checkout.api.firebase.auth.factory' => 'getPsCheckout_Api_Firebase_Auth_FactoryService',
            'ps_checkout.builder.payload.onboarding' => 'getPsCheckout_Builder_Payload_OnboardingService',
            'ps_checkout.configuration' => 'getPsCheckout_ConfigurationService',
            'ps_checkout.configuration.options.resolver' => 'getPsCheckout_Configuration_Options_ResolverService',
            'ps_checkout.context.prestashop' => 'getPsCheckout_Context_PrestashopService',
            'ps_checkout.context.shop' => 'getPsCheckout_Context_ShopService',
            'ps_checkout.env.segmentenv' => 'getPsCheckout_Env_SegmentenvService',
            'ps_checkout.env.sentry' => 'getPsCheckout_Env_SentryService',
            'ps_checkout.express_checkout.configuration' => 'getPsCheckout_ExpressCheckout_ConfigurationService',
            'ps_checkout.funding_source.collection' => 'getPsCheckout_FundingSource_CollectionService',
            'ps_checkout.funding_source.collection.builder' => 'getPsCheckout_FundingSource_Collection_BuilderService',
            'ps_checkout.funding_source.configuration' => 'getPsCheckout_FundingSource_ConfigurationService',
            'ps_checkout.funding_source.configuration.repository' => 'getPsCheckout_FundingSource_Configuration_RepositoryService',
            'ps_checkout.funding_source.eligibility_constraint' => 'getPsCheckout_FundingSource_EligibilityConstraintService',
            'ps_checkout.funding_source.entity' => 'getPsCheckout_FundingSource_EntityService',
            'ps_checkout.funding_source.presenter' => 'getPsCheckout_FundingSource_PresenterService',
            'ps_checkout.funding_source.provider' => 'getPsCheckout_FundingSource_ProviderService',
            'ps_checkout.funding_source.translation' => 'getPsCheckout_FundingSource_TranslationService',
            'ps_checkout.logger' => 'getPsCheckout_LoggerService',
            'ps_checkout.logger.configuration' => 'getPsCheckout_Logger_ConfigurationService',
            'ps_checkout.logger.directory' => 'getPsCheckout_Logger_DirectoryService',
            'ps_checkout.logger.factory' => 'getPsCheckout_Logger_FactoryService',
            'ps_checkout.logger.file.finder' => 'getPsCheckout_Logger_File_FinderService',
            'ps_checkout.logger.file.reader' => 'getPsCheckout_Logger_File_ReaderService',
            'ps_checkout.logger.filename' => 'getPsCheckout_Logger_FilenameService',
            'ps_checkout.logger.handler' => 'getPsCheckout_Logger_HandlerService',
            'ps_checkout.logger.handler.factory' => 'getPsCheckout_Logger_Handler_FactoryService',
            'ps_checkout.logger.sentry.handler' => 'getPsCheckout_Logger_Sentry_HandlerService',
            'ps_checkout.logger.sentry.processor' => 'getPsCheckout_Logger_Sentry_ProcessorService',
            'ps_checkout.manager.shopuuid' => 'getPsCheckout_Manager_ShopuuidService',
            'ps_checkout.module' => 'getPsCheckout_ModuleService',
            'ps_checkout.paypal.configuration' => 'getPsCheckout_Paypal_ConfigurationService',
            'ps_checkout.persistent.configuration' => 'getPsCheckout_Persistent_ConfigurationService',
            'ps_checkout.presenter.order.pending' => 'getPsCheckout_Presenter_Order_PendingService',
            'ps_checkout.presenter.transaction' => 'getPsCheckout_Presenter_TransactionService',
            'ps_checkout.repository.country' => 'getPsCheckout_Repository_CountryService',
            'ps_checkout.repository.order' => 'getPsCheckout_Repository_OrderService',
            'ps_checkout.repository.orderpayment' => 'getPsCheckout_Repository_OrderpaymentService',
            'ps_checkout.repository.paypal.account' => 'getPsCheckout_Repository_Paypal_AccountService',
            'ps_checkout.repository.paypal.code' => 'getPsCheckout_Repository_Paypal_CodeService',
            'ps_checkout.repository.prestashop.account' => 'getPsCheckout_Repository_Prestashop_AccountService',
            'ps_checkout.repository.pscheckoutcart' => 'getPsCheckout_Repository_PscheckoutcartService',
            'ps_checkout.sdk.paypal.linkbuilder' => 'getPsCheckout_Sdk_Paypal_LinkbuilderService',
            'ps_checkout.segment.tracker' => 'getPsCheckout_Segment_TrackerService',
            'ps_checkout.shop.provider' => 'getPsCheckout_Shop_ProviderService',
            'ps_checkout.step.live' => 'getPsCheckout_Step_LiveService',
            'ps_checkout.store.module.configuration' => 'getPsCheckout_Store_Module_ConfigurationService',
            'ps_checkout.store.module.context' => 'getPsCheckout_Store_Module_ContextService',
            'ps_checkout.store.module.firebase' => 'getPsCheckout_Store_Module_FirebaseService',
            'ps_checkout.store.module.paypal' => 'getPsCheckout_Store_Module_PaypalService',
            'ps_checkout.store.module.psx' => 'getPsCheckout_Store_Module_PsxService',
            'ps_checkout.store.store' => 'getPsCheckout_Store_StoreService',
            'ps_checkout.translations.translations' => 'getPsCheckout_Translations_TranslationsService',
            'ps_checkout.updater.paypal.account' => 'getPsCheckout_Updater_Paypal_AccountService',
            'theme_manager' => 'getThemeManagerService',
            'theme_validator' => 'getThemeValidatorService',
        ];
        $this->privates = [
            'annotation_reader' => true,
            'cache.doctrine.orm.default.metadata' => true,
            'cache.doctrine.orm.default.query' => true,
            'cache.doctrine.orm.default.result' => true,
            'context.static' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'filesystem' => true,
            'finder' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'hashing' => true,
            'hook_configurator' => true,
            'hook_provider' => true,
            'hook_repository' => true,
            'prestashop.database.naming_strategy' => true,
            'theme_manager' => true,
            'theme_validator' => true,
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'prestashop.core.localization.cldr.datalayer.top_layer' => 'prestashop.core.localization.cldr.datalayer.locale_cache',
            'prestashop.core.localization.currency.middleware.top_layer' => 'prestashop.core.localization.currency.middleware.cache',
        ];
    }

    public function getRemovedIds()
    {
        return [
            'Doctrine\\Bundle\\DoctrineBundle\\Registry' => true,
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => true,
            'Doctrine\\Common\\Persistence\\ObjectManager' => true,
            'Doctrine\\DBAL\\Connection' => true,
            'Doctrine\\DBAL\\Driver\\Connection' => true,
            'Doctrine\\ORM\\EntityManagerInterface' => true,
            'Doctrine\\Persistence\\ManagerRegistry' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Bridge\\Doctrine\\RegistryInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'annotation_reader' => true,
            'cache.doctrine.orm.default.metadata' => true,
            'cache.doctrine.orm.default.query' => true,
            'cache.doctrine.orm.default.result' => true,
            'context.static' => true,
            'data_collector.doctrine' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection' => true,
            'doctrine.dbal.connection.configuration' => true,
            'doctrine.dbal.connection.event_manager' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.default_connection.configuration' => true,
            'doctrine.dbal.default_connection.event_manager' => true,
            'doctrine.dbal.event_manager' => true,
            'doctrine.dbal.logger' => true,
            'doctrine.dbal.logger.backtrace' => true,
            'doctrine.dbal.logger.chain' => true,
            'doctrine.dbal.logger.chain.default' => true,
            'doctrine.dbal.logger.profiling' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'doctrine.dbal.schema_asset_filter_manager' => true,
            'doctrine.dbal.well_known_schema_asset_filter' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => true,
            'doctrine.orm.configuration' => true,
            'doctrine.orm.container_repository_factory' => true,
            'doctrine.orm.default_annotation_metadata_driver' => true,
            'doctrine.orm.default_configuration' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.event_manager' => true,
            'doctrine.orm.default_entity_manager.metadata_factory' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.default_metadata_cache' => true,
            'doctrine.orm.default_metadata_driver' => true,
            'doctrine.orm.default_query_cache' => true,
            'doctrine.orm.default_result_cache' => true,
            'doctrine.orm.entity_manager.abstract' => true,
            'doctrine.orm.listeners.resolve_target_entity' => true,
            'doctrine.orm.manager_configurator.abstract' => true,
            'doctrine.orm.metadata.annotation_reader' => true,
            'doctrine.orm.naming_strategy.default' => true,
            'doctrine.orm.naming_strategy.underscore' => true,
            'doctrine.orm.naming_strategy.underscore_number_aware' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.quote_strategy.ansi' => true,
            'doctrine.orm.quote_strategy.default' => true,
            'doctrine.orm.security.user.provider' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine.twig.doctrine_extension' => true,
            'doctrine_cache.abstract.apc' => true,
            'doctrine_cache.abstract.apcu' => true,
            'doctrine_cache.abstract.array' => true,
            'doctrine_cache.abstract.chain' => true,
            'doctrine_cache.abstract.couchbase' => true,
            'doctrine_cache.abstract.file_system' => true,
            'doctrine_cache.abstract.memcache' => true,
            'doctrine_cache.abstract.memcached' => true,
            'doctrine_cache.abstract.mongodb' => true,
            'doctrine_cache.abstract.php_file' => true,
            'doctrine_cache.abstract.predis' => true,
            'doctrine_cache.abstract.redis' => true,
            'doctrine_cache.abstract.riak' => true,
            'doctrine_cache.abstract.sqlite3' => true,
            'doctrine_cache.abstract.void' => true,
            'doctrine_cache.abstract.wincache' => true,
            'doctrine_cache.abstract.xcache' => true,
            'doctrine_cache.abstract.zenddata' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'filesystem' => true,
            'finder' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'hashing' => true,
            'hook_configurator' => true,
            'hook_provider' => true,
            'hook_repository' => true,
            'prestashop.database.naming_strategy' => true,
            'theme_manager' => true,
            'theme_validator' => true,
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\DBAL\Logging\LoggerChain();
        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(NULL, NULL));
        $b->addLogger(new \Doctrine\DBAL\Logging\DebugStack());

        $a->setSQLLogger($b);

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : ($this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))) && false ?: '_'}->createConnection(['driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => '', 'dbname' => 'testprestashop', 'user' => 'root', 'password' => '$corvo$', 'charset' => 'utf8mb4', 'driverOptions' => [1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))'], 'defaultTableOptions' => []], $a, new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), ['enum' => 'string']);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();

        $c = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : ($this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader())) && false ?: '_'};
        $d = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => 'C:\\laragon\\www\\testPrestashop\\modules\\productcomments\\src\\Entity']);
        $d->addExcludePaths([0 => 'C:\\laragon\\www\\testPrestashop\\modules\\productcomments\\src\\Entity/index.php']);
        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => 'C:\\laragon\\www\\testPrestashop\\modules\\ps_checkout\\src\\Entity']);
        $e->addExcludePaths([0 => 'C:\\laragon\\www\\testPrestashop\\modules\\ps_checkout\\src\\Entity/index.php']);

        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => 'C:\\laragon\\www\\testPrestashop\\src\\PrestaShopBundle\\Entity']), 'PrestaShop');
        $b->addDriver($d, 'PrestaShop\\Module\\ProductComment\\Entity');
        $b->addDriver($e, 'PrestaShop\\Module\\PrestashopCheckout\\Entity');

        $a->setEntityNamespaces(['PrestaShopBundle\\Entity' => 'PrestaShop']);
        $a->setMetadataCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] : $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService()) && false ?: '_'});
        $a->setQueryCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] : $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService()) && false ?: '_'});
        $a->setResultCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] : $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()) && false ?: '_'});
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir('C:\\laragon\\www\\testPrestashop/var/cache/dev\\/doctrine/orm/Proxies');
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(${($_ = isset($this->services['prestashop.database.naming_strategy']) ? $this->services['prestashop.database.naming_strategy'] : ($this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_'))) && false ?: '_'});
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : ($this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this))) && false ?: '_'});
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator([])));
        $a->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');
        $a->addEntityNamespace('Moduleproductcomments', 'PrestaShop\\Module\\ProductComment\\Entity');
        $a->addEntityNamespace('ModulepsCheckout', 'PrestaShop\\Module\\PrestashopCheckout\\Entity');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, $a);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : ($this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.adapter.context_state_manager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\ContextStateManager
     */
    protected function getPrestashop_Adapter_ContextStateManagerService()
    {
        return $this->services['prestashop.adapter.context_state_manager'] = new \PrestaShop\PrestaShop\Adapter\ContextStateManager(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext());
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.country' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CountryService()
    {
        return $this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.currency' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CurrencyService()
    {
        return $this->services['prestashop.adapter.data_provider.currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}, ((${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop) ? (${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop->id) : (null)));
    }

    /**
     * Gets the public 'prestashop.adapter.environment' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Environment
     */
    protected function getPrestashop_Adapter_EnvironmentService()
    {
        return $this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(true);
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getPrestashop_Adapter_Legacy_ConfigurationService()
    {
        return $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.context' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getPrestashop_Adapter_Legacy_ContextService()
    {
        return $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext('/mails/themes', ${($_ = isset($this->services['prestashop.adapter.tools']) ? $this->services['prestashop.adapter.tools'] : ($this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.adapter.news.circuit_breaker' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\Contract\CircuitBreakerInterface
     */
    protected function getPrestashop_Adapter_News_CircuitBreakerService()
    {
        return $this->services['prestashop.adapter.news.circuit_breaker'] = ${($_ = isset($this->services['prestashop.core.circuit_breaker.advanced_factory']) ? $this->services['prestashop.core.circuit_breaker.advanced_factory'] : ($this->services['prestashop.core.circuit_breaker.advanced_factory'] = new \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory())) && false ?: '_'}->create(${($_ = isset($this->services['prestashop.adapter.news.circuit_breaker.settings']) ? $this->services['prestashop.adapter.news.circuit_breaker.settings'] : $this->getPrestashop_Adapter_News_CircuitBreaker_SettingsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.adapter.news.circuit_breaker.settings' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\FactorySettings
     */
    protected function getPrestashop_Adapter_News_CircuitBreaker_SettingsService()
    {
        $this->services['prestashop.adapter.news.circuit_breaker.settings'] = $instance = new \PrestaShop\CircuitBreaker\FactorySettings(3, 3, 86400);

        $instance->setStrippedFailures(3);
        $instance->setStrippedTimeout(3);
        $instance->setStorage(${($_ = isset($this->services['prestashop.core.circuit_breaker.storage']) ? $this->services['prestashop.core.circuit_breaker.storage'] : $this->getPrestashop_Core_CircuitBreaker_StorageService()) && false ?: '_'});
        $instance->setClientOptions(['method' => 'GET', 'subscribers' => [0 => ${($_ = isset($this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber']) ? $this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber'] : $this->getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberService()) && false ?: '_'}]]);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.adapter.news.provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\News\NewsDataProvider
     */
    protected function getPrestashop_Adapter_News_ProviderService()
    {
        return $this->services['prestashop.adapter.news.provider'] = new \PrestaShop\PrestaShop\Adapter\News\NewsDataProvider(${($_ = isset($this->services['prestashop.adapter.news.circuit_breaker']) ? $this->services['prestashop.adapter.news.circuit_breaker'] : $this->getPrestashop_Adapter_News_CircuitBreakerService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.country']) ? $this->services['prestashop.adapter.data_provider.country'] : ($this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.tools']) ? $this->services['prestashop.adapter.tools'] : ($this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.validate']) ? $this->services['prestashop.adapter.validate'] : ($this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->mode);
    }

    /**
     * Gets the public 'prestashop.adapter.tools' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        return $this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /**
     * Gets the public 'prestashop.adapter.validate' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Validate
     */
    protected function getPrestashop_Adapter_ValidateService()
    {
        return $this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.advanced_factory' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_AdvancedFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.advanced_factory'] = new \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.doctrine_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\FilesystemCache
     */
    protected function getPrestashop_Core_CircuitBreaker_DoctrineCacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.doctrine_cache'] = new \Doctrine\Common\Cache\FilesystemCache((${($_ = isset($this->services['prestashop.adapter.environment']) ? $this->services['prestashop.adapter.environment'] : ($this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(true))) && false ?: '_'}->getCacheDir() . "/circuit_breaker"));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.guzzle.cache_storage' shared service.
     *
     * @return \GuzzleHttp\Subscriber\Cache\CacheStorage
     */
    protected function getPrestashop_Core_CircuitBreaker_Guzzle_CacheStorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.guzzle.cache_storage'] = new \GuzzleHttp\Subscriber\Cache\CacheStorage(${($_ = isset($this->services['prestashop.core.circuit_breaker.doctrine_cache']) ? $this->services['prestashop.core.circuit_breaker.doctrine_cache'] : $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()) && false ?: '_'}, 'circuit_breaker_', 86400);
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.guzzle.cache_subscriber' shared service.
     *
     * @return \GuzzleHttp\Subscriber\Cache\CacheSubscriber
     */
    protected function getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberService()
    {
        return $this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber'] = ${($_ = isset($this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory']) ? $this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory'] : ($this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory'] = new \PrestaShopBundle\Cache\Factory\CacheSubscriberFactory())) && false ?: '_'}->create(${($_ = isset($this->services['prestashop.core.circuit_breaker.guzzle.cache_storage']) ? $this->services['prestashop.core.circuit_breaker.guzzle.cache_storage'] : $this->getPrestashop_Core_CircuitBreaker_Guzzle_CacheStorageService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory' shared service.
     *
     * @return \PrestaShopBundle\Cache\Factory\CacheSubscriberFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory'] = new \PrestaShopBundle\Cache\Factory\CacheSubscriberFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.storage' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\Storage\DoctrineCache
     */
    protected function getPrestashop_Core_CircuitBreaker_StorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.storage'] = new \PrestaShop\CircuitBreaker\Storage\DoctrineCache(${($_ = isset($this->services['prestashop.core.circuit_breaker.doctrine_cache']) ? $this->services['prestashop.core.circuit_breaker.doctrine_cache'] : $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPrestashop_Core_Localization_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_Localization_Cldr_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, 'C:\\laragon\\www\\testPrestashop/var/cache/dev\\/localization');
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()
    {
        $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache(${($_ = isset($this->services['prestashop.core.localization.cldr.cache.adapter']) ? $this->services['prestashop.core.localization.cldr.cache.adapter'] : ($this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, 'C:\\laragon\\www\\testPrestashop/var/cache/dev\\/localization'))) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.cldr.datalayer.locale_reference']) ? $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] : $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()
    {
        return $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference(${($_ = isset($this->services['prestashop.core.localization.cldr.reader']) ? $this->services['prestashop.core.localization.cldr.reader'] : ($this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader())) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_data_source' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_data_source'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource(${($_ = isset($this->services['prestashop.core.localization.cldr.datalayer.locale_cache']) ? $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] : $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_repository'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_data_source']) ? $this->services['prestashop.core.localization.cldr.locale_data_source'] : $this->getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.reader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader
     */
    protected function getPrestashop_Core_Localization_Cldr_ReaderService()
    {
        return $this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader();
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.datasource' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource
     */
    protected function getPrestashop_Core_Localization_Currency_DatasourceService()
    {
        return $this->services['prestashop.core.localization.currency.datasource'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.cache']) ? $this->services['prestashop.core.localization.currency.middleware.cache'] : $this->getPrestashop_Core_Localization_Currency_Middleware_CacheService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localization.currency.middleware.installed']) ? $this->services['prestashop.core.localization.currency.middleware.installed'] : $this->getPrestashop_Core_Localization_Currency_Middleware_InstalledService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_CacheService()
    {
        $this->services['prestashop.core.localization.currency.middleware.cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache(${($_ = isset($this->services['prestashop.core.localization.cache.adapter']) ? $this->services['prestashop.core.localization.cache.adapter'] : ($this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.database']) ? $this->services['prestashop.core.localization.currency.middleware.database'] : $this->getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.database' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()
    {
        $this->services['prestashop.core.localization.currency.middleware.database'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase(${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->getPrestashop_Adapter_DataProvider_CurrencyService()) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.reference']) ? $this->services['prestashop.core.localization.currency.middleware.reference'] : $this->getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.installed' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_InstalledService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.installed'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled(${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->getPrestashop_Adapter_DataProvider_CurrencyService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.reference'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_repository']) ? $this->services['prestashop.core.localization.cldr.locale_repository'] : $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\Repository
     */
    protected function getPrestashop_Core_Localization_Currency_RepositoryService()
    {
        return $this->services['prestashop.core.localization.currency.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\Repository(${($_ = isset($this->services['prestashop.core.localization.currency.datasource']) ? $this->services['prestashop.core.localization.currency.datasource'] : $this->getPrestashop_Core_Localization_Currency_DatasourceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.context_locale' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale
     */
    protected function getPrestashop_Core_Localization_Locale_ContextLocaleService()
    {
        return $this->services['prestashop.core.localization.locale.context_locale'] = ${($_ = isset($this->services['prestashop.core.localization.locale.repository']) ? $this->services['prestashop.core.localization.locale.repository'] : $this->getPrestashop_Core_Localization_Locale_RepositoryService()) && false ?: '_'}->getLocale(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->language->getLocale());
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale\Repository
     */
    protected function getPrestashop_Core_Localization_Locale_RepositoryService()
    {
        return $this->services['prestashop.core.localization.locale.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Locale\Repository(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_repository']) ? $this->services['prestashop.core.localization.cldr.locale_repository'] : $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localization.currency.repository']) ? $this->services['prestashop.core.localization.currency.repository'] : $this->getPrestashop_Core_Localization_Currency_RepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.string.character_cleaner' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\String\CharacterCleaner
     */
    protected function getPrestashop_Core_String_CharacterCleanerService()
    {
        return $this->services['prestashop.core.string.character_cleaner'] = new \PrestaShop\PrestaShop\Core\String\CharacterCleaner();
    }

    /**
     * Gets the public 'product_comment_criterion_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository
     */
    protected function getProductCommentCriterionRepositoryService()
    {
        return $this->services['product_comment_criterion_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ps_');
    }

    /**
     * Gets the public 'product_comment_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository
     */
    protected function getProductCommentRepositoryService()
    {
        return $this->services['product_comment_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ps_', ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->get("PRODUCT_COMMENTS_ALLOW_GUESTS"), ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->get("PRODUCT_COMMENTS_MINIMAL_TIME"));
    }

    /**
     * Gets the public 'ps_checkout.adapter.language' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter
     */
    protected function getPsCheckout_Adapter_LanguageService()
    {
        return $this->services['ps_checkout.adapter.language'] = new \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter(${($_ = isset($this->services['ps_checkout.context.shop']) ? $this->services['ps_checkout.context.shop'] : ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.api.firebase.auth' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Api\Firebase\Auth
     */
    protected function getPsCheckout_Api_Firebase_AuthService()
    {
        return $this->services['ps_checkout.api.firebase.auth'] = new \PrestaShop\Module\PrestashopCheckout\Api\Firebase\Auth();
    }

    /**
     * Gets the public 'ps_checkout.api.firebase.auth.factory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Api\Firebase\AuthFactory
     */
    protected function getPsCheckout_Api_Firebase_Auth_FactoryService()
    {
        return $this->services['ps_checkout.api.firebase.auth.factory'] = new \PrestaShop\Module\PrestashopCheckout\Api\Firebase\AuthFactory(${($_ = isset($this->services['ps_checkout.api.firebase.auth']) ? $this->services['ps_checkout.api.firebase.auth'] : ($this->services['ps_checkout.api.firebase.auth'] = new \PrestaShop\Module\PrestashopCheckout\Api\Firebase\Auth())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.persistent.configuration']) ? $this->services['ps_checkout.persistent.configuration'] : $this->getPsCheckout_Persistent_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.builder.payload.onboarding' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\Payload\OnboardingPayloadBuilder
     */
    protected function getPsCheckout_Builder_Payload_OnboardingService()
    {
        return $this->services['ps_checkout.builder.payload.onboarding'] = new \PrestaShop\Module\PrestashopCheckout\Builder\Payload\OnboardingPayloadBuilder(${($_ = isset($this->services['ps_checkout.repository.prestashop.account']) ? $this->services['ps_checkout.repository.prestashop.account'] : $this->getPsCheckout_Repository_Prestashop_AccountService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.adapter.language']) ? $this->services['ps_checkout.adapter.language'] : $this->getPsCheckout_Adapter_LanguageService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration
     */
    protected function getPsCheckout_ConfigurationService()
    {
        return $this->services['ps_checkout.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration(${($_ = isset($this->services['ps_checkout.configuration.options.resolver']) ? $this->services['ps_checkout.configuration.options.resolver'] : $this->getPsCheckout_Configuration_Options_ResolverService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.configuration.options.resolver' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver
     */
    protected function getPsCheckout_Configuration_Options_ResolverService()
    {
        return $this->services['ps_checkout.configuration.options.resolver'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver(${($_ = isset($this->services['ps_checkout.shop.provider']) ? $this->services['ps_checkout.shop.provider'] : ($this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())) && false ?: '_'}->getIdentifier());
    }

    /**
     * Gets the public 'ps_checkout.context.prestashop' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext
     */
    protected function getPsCheckout_Context_PrestashopService()
    {
        return $this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext();
    }

    /**
     * Gets the public 'ps_checkout.context.shop' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ShopContext
     */
    protected function getPsCheckout_Context_ShopService()
    {
        return $this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext();
    }

    /**
     * Gets the public 'ps_checkout.env.segmentenv' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Environment\SegmentEnv
     */
    protected function getPsCheckout_Env_SegmentenvService()
    {
        return $this->services['ps_checkout.env.segmentenv'] = new \PrestaShop\Module\PrestashopCheckout\Environment\SegmentEnv();
    }

    /**
     * Gets the public 'ps_checkout.env.sentry' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Environment\SentryEnv
     */
    protected function getPsCheckout_Env_SentryService()
    {
        return $this->services['ps_checkout.env.sentry'] = new \PrestaShop\Module\PrestashopCheckout\Environment\SentryEnv();
    }

    /**
     * Gets the public 'ps_checkout.express_checkout.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration
     */
    protected function getPsCheckout_ExpressCheckout_ConfigurationService()
    {
        return $this->services['ps_checkout.express_checkout.configuration'] = new \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.collection' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection
     */
    protected function getPsCheckout_FundingSource_CollectionService()
    {
        return $this->services['ps_checkout.funding_source.collection'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection(${($_ = isset($this->services['ps_checkout.funding_source.collection.builder']) ? $this->services['ps_checkout.funding_source.collection.builder'] : $this->getPsCheckout_FundingSource_Collection_BuilderService()) && false ?: '_'}->create());
    }

    /**
     * Gets the public 'ps_checkout.funding_source.collection.builder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder
     */
    protected function getPsCheckout_FundingSource_Collection_BuilderService()
    {
        return $this->services['ps_checkout.funding_source.collection.builder'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder(${($_ = isset($this->services['ps_checkout.funding_source.configuration']) ? $this->services['ps_checkout.funding_source.configuration'] : $this->getPsCheckout_FundingSource_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.eligibility_constraint']) ? $this->services['ps_checkout.funding_source.eligibility_constraint'] : ($this->services['ps_checkout.funding_source.eligibility_constraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration
     */
    protected function getPsCheckout_FundingSource_ConfigurationService()
    {
        return $this->services['ps_checkout.funding_source.configuration'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration(${($_ = isset($this->services['ps_checkout.funding_source.configuration.repository']) ? $this->services['ps_checkout.funding_source.configuration.repository'] : $this->getPsCheckout_FundingSource_Configuration_RepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.configuration.repository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository
     */
    protected function getPsCheckout_FundingSource_Configuration_RepositoryService()
    {
        return $this->services['ps_checkout.funding_source.configuration.repository'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository(${($_ = isset($this->services['ps_checkout.context.prestashop']) ? $this->services['ps_checkout.context.prestashop'] : ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.eligibility_constraint' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint
     */
    protected function getPsCheckout_FundingSource_EligibilityConstraintService()
    {
        return $this->services['ps_checkout.funding_source.eligibility_constraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint();
    }

    /**
     * Gets the public 'ps_checkout.funding_source.entity' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEntity
     */
    protected function getPsCheckout_FundingSource_EntityService()
    {
        return $this->services['ps_checkout.funding_source.entity'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEntity();
    }

    /**
     * Gets the public 'ps_checkout.funding_source.presenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter
     */
    protected function getPsCheckout_FundingSource_PresenterService()
    {
        return $this->services['ps_checkout.funding_source.presenter'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter(${($_ = isset($this->services['ps_checkout.funding_source.translation']) ? $this->services['ps_checkout.funding_source.translation'] : $this->getPsCheckout_FundingSource_TranslationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.country']) ? $this->services['ps_checkout.repository.country'] : ($this->services['ps_checkout.repository.country'] = new \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.provider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider
     */
    protected function getPsCheckout_FundingSource_ProviderService()
    {
        return $this->services['ps_checkout.funding_source.provider'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider(${($_ = isset($this->services['ps_checkout.funding_source.collection.builder']) ? $this->services['ps_checkout.funding_source.collection.builder'] : $this->getPsCheckout_FundingSource_Collection_BuilderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.presenter']) ? $this->services['ps_checkout.funding_source.presenter'] : $this->getPsCheckout_FundingSource_PresenterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.translation' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider
     */
    protected function getPsCheckout_FundingSource_TranslationService()
    {
        return $this->services['ps_checkout.funding_source.translation'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger' shared service.
     *
     * @return \Psr\Log\LoggerInterface
     */
    protected function getPsCheckout_LoggerService()
    {
        return $this->services['ps_checkout.logger'] = ${($_ = isset($this->services['ps_checkout.logger.factory']) ? $this->services['ps_checkout.logger.factory'] : $this->getPsCheckout_Logger_FactoryService()) && false ?: '_'}->build(${($_ = isset($this->services['ps_checkout.logger.directory']) ? $this->services['ps_checkout.logger.directory'] : ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.7.0', 'C:\\laragon\\www\\testPrestashop'))) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration
     */
    protected function getPsCheckout_Logger_ConfigurationService()
    {
        return $this->services['ps_checkout.logger.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.directory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory
     */
    protected function getPsCheckout_Logger_DirectoryService()
    {
        return $this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.7.0', 'C:\\laragon\\www\\testPrestashop');
    }

    /**
     * Gets the public 'ps_checkout.logger.factory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory
     */
    protected function getPsCheckout_Logger_FactoryService()
    {
        return $this->services['ps_checkout.logger.factory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.logger.handler']) ? $this->services['ps_checkout.logger.handler'] : $this->getPsCheckout_Logger_HandlerService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger.sentry.handler']) ? $this->services['ps_checkout.logger.sentry.handler'] : $this->getPsCheckout_Logger_Sentry_HandlerService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger.sentry.processor']) ? $this->services['ps_checkout.logger.sentry.processor'] : $this->getPsCheckout_Logger_Sentry_ProcessorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.file.finder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder
     */
    protected function getPsCheckout_Logger_File_FinderService()
    {
        return $this->services['ps_checkout.logger.file.finder'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder(${($_ = isset($this->services['ps_checkout.logger.directory']) ? $this->services['ps_checkout.logger.directory'] : ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.7.0', 'C:\\laragon\\www\\testPrestashop'))) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger.filename']) ? $this->services['ps_checkout.logger.filename'] : $this->getPsCheckout_Logger_FilenameService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.file.reader' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileReader
     */
    protected function getPsCheckout_Logger_File_ReaderService()
    {
        return $this->services['ps_checkout.logger.file.reader'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileReader();
    }

    /**
     * Gets the public 'ps_checkout.logger.filename' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename
     */
    protected function getPsCheckout_Logger_FilenameService()
    {
        return $this->services['ps_checkout.logger.filename'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.shop.provider']) ? $this->services['ps_checkout.shop.provider'] : ($this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())) && false ?: '_'}->getIdentifier());
    }

    /**
     * Gets the public 'ps_checkout.logger.handler' shared service.
     *
     * @return \Monolog\Handler\HandlerInterface
     */
    protected function getPsCheckout_Logger_HandlerService()
    {
        return $this->services['ps_checkout.logger.handler'] = ${($_ = isset($this->services['ps_checkout.logger.handler.factory']) ? $this->services['ps_checkout.logger.handler.factory'] : $this->getPsCheckout_Logger_Handler_FactoryService()) && false ?: '_'}->build();
    }

    /**
     * Gets the public 'ps_checkout.logger.handler.factory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory
     */
    protected function getPsCheckout_Logger_Handler_FactoryService()
    {
        return $this->services['ps_checkout.logger.handler.factory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory(${($_ = isset($this->services['ps_checkout.logger.directory']) ? $this->services['ps_checkout.logger.directory'] : ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.7.0', 'C:\\laragon\\www\\testPrestashop'))) && false ?: '_'}->getPath(), ${($_ = isset($this->services['ps_checkout.logger.filename']) ? $this->services['ps_checkout.logger.filename'] : $this->getPsCheckout_Logger_FilenameService()) && false ?: '_'}->get(), ${($_ = isset($this->services['ps_checkout.logger.configuration']) ? $this->services['ps_checkout.logger.configuration'] : $this->getPsCheckout_Logger_ConfigurationService()) && false ?: '_'}->getMaxFiles(), ${($_ = isset($this->services['ps_checkout.logger.configuration']) ? $this->services['ps_checkout.logger.configuration'] : $this->getPsCheckout_Logger_ConfigurationService()) && false ?: '_'}->getLevel());
    }

    /**
     * Gets the public 'ps_checkout.logger.sentry.handler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Sentry\SentryHandler
     */
    protected function getPsCheckout_Logger_Sentry_HandlerService()
    {
        return $this->services['ps_checkout.logger.sentry.handler'] = new \PrestaShop\Module\PrestashopCheckout\Sentry\SentryHandler(${($_ = isset($this->services['ps_checkout.env.sentry']) ? $this->services['ps_checkout.env.sentry'] : ($this->services['ps_checkout.env.sentry'] = new \PrestaShop\Module\PrestashopCheckout\Environment\SentryEnv())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.sentry.processor' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Sentry\SentryProcessor
     */
    protected function getPsCheckout_Logger_Sentry_ProcessorService()
    {
        return $this->services['ps_checkout.logger.sentry.processor'] = new \PrestaShop\Module\PrestashopCheckout\Sentry\SentryProcessor(${($_ = isset($this->services['ps_checkout.repository.prestashop.account']) ? $this->services['ps_checkout.repository.prestashop.account'] : $this->getPsCheckout_Repository_Prestashop_AccountService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.manager.shopuuid' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ShopUuidManager
     */
    protected function getPsCheckout_Manager_ShopuuidService()
    {
        return $this->services['ps_checkout.manager.shopuuid'] = new \PrestaShop\Module\PrestashopCheckout\ShopUuidManager();
    }

    /**
     * Gets the public 'ps_checkout.module' shared service.
     *
     * @return \Ps_checkout
     */
    protected function getPsCheckout_ModuleService()
    {
        return $this->services['ps_checkout.module'] = \Module::getInstanceByName('ps_checkout');
    }

    /**
     * Gets the public 'ps_checkout.paypal.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration
     */
    protected function getPsCheckout_Paypal_ConfigurationService()
    {
        return $this->services['ps_checkout.paypal.configuration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.paypal.code']) ? $this->services['ps_checkout.repository.paypal.code'] : ($this->services['ps_checkout.repository.paypal.code'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.persistent.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PersistentConfiguration
     */
    protected function getPsCheckout_Persistent_ConfigurationService()
    {
        return $this->services['ps_checkout.persistent.configuration'] = new \PrestaShop\Module\PrestashopCheckout\PersistentConfiguration(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.presenter.order.pending' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Order\OrderPendingPresenter
     */
    protected function getPsCheckout_Presenter_Order_PendingService()
    {
        return $this->services['ps_checkout.presenter.order.pending'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Order\OrderPendingPresenter();
    }

    /**
     * Gets the public 'ps_checkout.presenter.transaction' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Transaction\TransactionPresenter
     */
    protected function getPsCheckout_Presenter_TransactionService()
    {
        return $this->services['ps_checkout.presenter.transaction'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Transaction\TransactionPresenter();
    }

    /**
     * Gets the public 'ps_checkout.repository.country' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository
     */
    protected function getPsCheckout_Repository_CountryService()
    {
        return $this->services['ps_checkout.repository.country'] = new \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository();
    }

    /**
     * Gets the public 'ps_checkout.repository.order' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\OrderRepository
     */
    protected function getPsCheckout_Repository_OrderService()
    {
        return $this->services['ps_checkout.repository.order'] = new \PrestaShop\Module\PrestashopCheckout\Repository\OrderRepository();
    }

    /**
     * Gets the public 'ps_checkout.repository.orderpayment' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\OrderPaymentRepository
     */
    protected function getPsCheckout_Repository_OrderpaymentService()
    {
        return $this->services['ps_checkout.repository.orderpayment'] = new \PrestaShop\Module\PrestashopCheckout\Repository\OrderPaymentRepository();
    }

    /**
     * Gets the public 'ps_checkout.repository.paypal.account' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PaypalAccountRepository
     */
    protected function getPsCheckout_Repository_Paypal_AccountService()
    {
        return $this->services['ps_checkout.repository.paypal.account'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PaypalAccountRepository(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.repository.paypal.code' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository
     */
    protected function getPsCheckout_Repository_Paypal_CodeService()
    {
        return $this->services['ps_checkout.repository.paypal.code'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository();
    }

    /**
     * Gets the public 'ps_checkout.repository.prestashop.account' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository
     */
    protected function getPsCheckout_Repository_Prestashop_AccountService()
    {
        return $this->services['ps_checkout.repository.prestashop.account'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.repository.pscheckoutcart' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository
     */
    protected function getPsCheckout_Repository_PscheckoutcartService()
    {
        return $this->services['ps_checkout.repository.pscheckoutcart'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository();
    }

    /**
     * Gets the public 'ps_checkout.sdk.paypal.linkbuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\PayPalSdkLink\PayPalSdkLinkBuilder
     */
    protected function getPsCheckout_Sdk_Paypal_LinkbuilderService()
    {
        return $this->services['ps_checkout.sdk.paypal.linkbuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\PayPalSdkLink\PayPalSdkLinkBuilder(${($_ = isset($this->services['ps_checkout.repository.paypal.account']) ? $this->services['ps_checkout.repository.paypal.account'] : $this->getPsCheckout_Repository_Paypal_AccountService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->getPsCheckout_Paypal_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.configuration.repository']) ? $this->services['ps_checkout.funding_source.configuration.repository'] : $this->getPsCheckout_FundingSource_Configuration_RepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.segment.tracker' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Segment\SegmentTracker
     */
    protected function getPsCheckout_Segment_TrackerService()
    {
        return $this->services['ps_checkout.segment.tracker'] = new \PrestaShop\Module\PrestashopCheckout\Segment\SegmentTracker(${($_ = isset($this->services['ps_checkout.env.segmentenv']) ? $this->services['ps_checkout.env.segmentenv'] : ($this->services['ps_checkout.env.segmentenv'] = new \PrestaShop\Module\PrestashopCheckout\Environment\SegmentEnv())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.manager.shopuuid']) ? $this->services['ps_checkout.manager.shopuuid'] : ($this->services['ps_checkout.manager.shopuuid'] = new \PrestaShop\Module\PrestashopCheckout\ShopUuidManager())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.shop.provider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider
     */
    protected function getPsCheckout_Shop_ProviderService()
    {
        return $this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider();
    }

    /**
     * Gets the public 'ps_checkout.step.live' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep
     */
    protected function getPsCheckout_Step_LiveService()
    {
        return $this->services['ps_checkout.step.live'] = new \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.module.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule
     */
    protected function getPsCheckout_Store_Module_ConfigurationService()
    {
        return $this->services['ps_checkout.store.module.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule(${($_ = isset($this->services['ps_checkout.express_checkout.configuration']) ? $this->services['ps_checkout.express_checkout.configuration'] : $this->getPsCheckout_ExpressCheckout_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->getPsCheckout_Paypal_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.provider']) ? $this->services['ps_checkout.funding_source.provider'] : $this->getPsCheckout_FundingSource_ProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.module.context' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule
     */
    protected function getPsCheckout_Store_Module_ContextService()
    {
        return $this->services['ps_checkout.store.module.context'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->module_key, ${($_ = isset($this->services['ps_checkout.context.prestashop']) ? $this->services['ps_checkout.context.prestashop'] : ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->getPsCheckout_Paypal_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.step.live']) ? $this->services['ps_checkout.step.live'] : $this->getPsCheckout_Step_LiveService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.translations.translations']) ? $this->services['ps_checkout.translations.translations'] : $this->getPsCheckout_Translations_TranslationsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.context.shop']) ? $this->services['ps_checkout.context.shop'] : ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.shop.provider']) ? $this->services['ps_checkout.shop.provider'] : ($this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.module.firebase' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\FirebaseModule
     */
    protected function getPsCheckout_Store_Module_FirebaseService()
    {
        return $this->services['ps_checkout.store.module.firebase'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\FirebaseModule(${($_ = isset($this->services['ps_checkout.repository.prestashop.account']) ? $this->services['ps_checkout.repository.prestashop.account'] : $this->getPsCheckout_Repository_Prestashop_AccountService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.module.paypal' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule
     */
    protected function getPsCheckout_Store_Module_PaypalService()
    {
        return $this->services['ps_checkout.store.module.paypal'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule(${($_ = isset($this->services['ps_checkout.repository.paypal.account']) ? $this->services['ps_checkout.repository.paypal.account'] : $this->getPsCheckout_Repository_Paypal_AccountService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.module.psx' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PsxModule
     */
    protected function getPsCheckout_Store_Module_PsxService()
    {
        return $this->services['ps_checkout.store.module.psx'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PsxModule(${($_ = isset($this->services['ps_checkout.context.prestashop']) ? $this->services['ps_checkout.context.prestashop'] : ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.prestashop.account']) ? $this->services['ps_checkout.repository.prestashop.account'] : $this->getPsCheckout_Repository_Prestashop_AccountService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.store' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter
     */
    protected function getPsCheckout_Store_StoreService()
    {
        return $this->services['ps_checkout.store.store'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter([0 => ${($_ = isset($this->services['ps_checkout.store.module.context']) ? $this->services['ps_checkout.store.module.context'] : $this->getPsCheckout_Store_Module_ContextService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['ps_checkout.store.module.firebase']) ? $this->services['ps_checkout.store.module.firebase'] : $this->getPsCheckout_Store_Module_FirebaseService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['ps_checkout.store.module.paypal']) ? $this->services['ps_checkout.store.module.paypal'] : $this->getPsCheckout_Store_Module_PaypalService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['ps_checkout.store.module.psx']) ? $this->services['ps_checkout.store.module.psx'] : $this->getPsCheckout_Store_Module_PsxService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['ps_checkout.store.module.configuration']) ? $this->services['ps_checkout.store.module.configuration'] : $this->getPsCheckout_Store_Module_ConfigurationService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'ps_checkout.translations.translations' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Translations\Translations
     */
    protected function getPsCheckout_Translations_TranslationsService()
    {
        return $this->services['ps_checkout.translations.translations'] = new \PrestaShop\Module\PrestashopCheckout\Translations\Translations(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.updater.paypal.account' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Updater\PaypalAccountUpdater
     */
    protected function getPsCheckout_Updater_Paypal_AccountService()
    {
        return $this->services['ps_checkout.updater.paypal.account'] = new \PrestaShop\Module\PrestashopCheckout\Updater\PaypalAccountUpdater(${($_ = isset($this->services['ps_checkout.persistent.configuration']) ? $this->services['ps_checkout.persistent.configuration'] : $this->getPsCheckout_Persistent_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'context.static' shared service.
     *
     * @return \Context
     */
    protected function getContext_StaticService()
    {
        return $this->services['context.static'] = new \Context();
    }

    /**
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        return $this->services['doctrine.cache_clear_metadata_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        return $this->services['doctrine.cache_clear_query_cache_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        return $this->services['doctrine.cache_clear_result_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        return $this->services['doctrine.cache_collection_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        return $this->services['doctrine.clear_entity_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        return $this->services['doctrine.clear_query_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        return $this->services['doctrine.database_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        return $this->services['doctrine.database_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        return $this->services['doctrine.database_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]);
    }

    /**
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        return $this->services['doctrine.ensure_production_settings_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.generate_entities_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand
     */
    protected function getDoctrine_GenerateEntitiesCommandService()
    {
        return $this->services['doctrine.generate_entities_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        return $this->services['doctrine.mapping_convert_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        return $this->services['doctrine.mapping_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, []);
    }

    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        return $this->services['doctrine.mapping_info_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['cache.doctrine.orm.default.metadata']) ? $this->services['cache.doctrine.orm.default.metadata'] : ($this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['cache.doctrine.orm.default.query']) ? $this->services['cache.doctrine.orm.default.query'] : ($this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['cache.doctrine.orm.default.result']) ? $this->services['cache.doctrine.orm.default.result'] : ($this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this);
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}->getMetadataFactory());
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []);
    }

    /**
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        return $this->services['doctrine.query_dql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        return $this->services['doctrine.query_sql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        return $this->services['doctrine.schema_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        return $this->services['doctrine.schema_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        return $this->services['doctrine.schema_update_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        return $this->services['doctrine.schema_validate_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();
    }

    /**
     * Gets the private 'doctrine_cache.contains_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand
     */
    protected function getDoctrineCache_ContainsCommandService()
    {
        return $this->services['doctrine_cache.contains_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand();
    }

    /**
     * Gets the private 'doctrine_cache.delete_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand
     */
    protected function getDoctrineCache_DeleteCommandService()
    {
        return $this->services['doctrine_cache.delete_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand();
    }

    /**
     * Gets the private 'doctrine_cache.flush_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand
     */
    protected function getDoctrineCache_FlushCommandService()
    {
        return $this->services['doctrine_cache.flush_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand();
    }

    /**
     * Gets the private 'doctrine_cache.stats_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand
     */
    protected function getDoctrineCache_StatsCommandService()
    {
        return $this->services['doctrine_cache.stats_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand();
    }

    /**
     * Gets the private 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the private 'finder' shared service.
     *
     * @return \Symfony\Component\Finder\Finder
     */
    protected function getFinderService()
    {
        return $this->services['finder'] = new \Symfony\Component\Finder\Finder();
    }

    /**
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'hashing' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Crypto\Hashing
     */
    protected function getHashingService()
    {
        return $this->services['hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing();
    }

    /**
     * Gets the private 'hook_configurator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Module\HookConfigurator
     */
    protected function getHookConfiguratorService()
    {
        return $this->services['hook_configurator'] = new \PrestaShop\PrestaShop\Core\Module\HookConfigurator(${($_ = isset($this->services['hook_repository']) ? $this->services['hook_repository'] : $this->getHookRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'hook_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Hook\HookInformationProvider
     */
    protected function getHookProviderService()
    {
        return $this->services['hook_provider'] = new \PrestaShop\PrestaShop\Adapter\Hook\HookInformationProvider();
    }

    /**
     * Gets the private 'hook_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Module\HookRepository
     */
    protected function getHookRepositoryService()
    {
        return $this->services['hook_repository'] = new \PrestaShop\PrestaShop\Core\Module\HookRepository(${($_ = isset($this->services['hook_provider']) ? $this->services['hook_provider'] : ($this->services['hook_provider'] = new \PrestaShop\PrestaShop\Adapter\Hook\HookInformationProvider())) && false ?: '_'}, ${($_ = isset($this->services['shop']) ? $this->services['shop'] : $this->get('shop')) && false ?: '_'}, ${($_ = isset($this->services['db']) ? $this->services['db'] : $this->get('db')) && false ?: '_'});
    }

    /**
     * Gets the private 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_');
    }

    /**
     * Gets the private 'theme_manager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager
     */
    protected function getThemeManagerService()
    {
        return $this->services['theme_manager'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager(${($_ = isset($this->services['shop']) ? $this->services['shop'] : $this->get('shop')) && false ?: '_'}, ${($_ = isset($this->services['configuration']) ? $this->services['configuration'] : $this->get('configuration')) && false ?: '_'}, ${($_ = isset($this->services['theme_validator']) ? $this->services['theme_validator'] : ($this->services['theme_validator'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeValidator())) && false ?: '_'}, ${($_ = isset($this->services['employee']) ? $this->services['employee'] : $this->get('employee')) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'}, ${($_ = isset($this->services['finder']) ? $this->services['finder'] : ($this->services['finder'] = new \Symfony\Component\Finder\Finder())) && false ?: '_'}, ${($_ = isset($this->services['hook_configurator']) ? $this->services['hook_configurator'] : $this->getHookConfiguratorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'theme_validator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeValidator
     */
    protected function getThemeValidatorService()
    {
        return $this->services['theme_validator'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeValidator();
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'database_host' => '127.0.0.1',
            'database_port' => '',
            'database_name' => 'testprestashop',
            'database_user' => 'root',
            'database_password' => '$corvo$',
            'database_prefix' => 'ps_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => '42oOLRbJMXEinvNdWQBxCT4AuUvhL7IXOIHL66gQ7IsQKKkCLInYTuyqzpS8hxNU',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2021-01-04',
            'locale' => 'es-ES',
            'use_debug_toolbar' => true,
            'cookie_key' => 'ftOnRmyCph0uvGaqeKhJimVew9DZgaEOY9hXtUSWPaDnDKOcpUcxTOKkAgwMesK0',
            'cookie_iv' => 'HVW1H4JAdSvo5Gv1Z7vJXH03DZaSfikN',
            'new_cookie_key' => 'def00000c5e90ac1ab7ae51b40a645280cced7a6af7b044b0961e66fd718bf909c5b78784d2f0a0b90b707a9c07e7c8d48dd368b28beabef56238109605e8fc3196187d0',
            'cache.driver' => 'array',
            'kernel.bundles' => [

            ],
            'kernel.root_dir' => 'C:\\laragon\\www\\testPrestashop/app',
            'kernel.project_dir' => 'C:\\laragon\\www\\testPrestashop',
            'kernel.name' => 'app',
            'kernel.debug' => true,
            'kernel.environment' => 'dev',
            'kernel.cache_dir' => 'C:\\laragon\\www\\testPrestashop/var/cache/dev\\',
            'kernel.active_modules' => [
                0 => 'contactform',
                1 => 'dashactivity',
                2 => 'dashgoals',
                3 => 'dashproducts',
                4 => 'dashtrends',
                5 => 'graphnvd3',
                6 => 'gridhtml',
                7 => 'gsitemap',
                8 => 'pagesnotfound',
                9 => 'productcomments',
                10 => 'ps_banner',
                11 => 'ps_categorytree',
                12 => 'ps_checkpayment',
                13 => 'ps_contactinfo',
                14 => 'ps_crossselling',
                15 => 'ps_currencyselector',
                16 => 'ps_customeraccountlinks',
                17 => 'ps_customersignin',
                18 => 'ps_customtext',
                19 => 'ps_dataprivacy',
                20 => 'ps_emailsubscription',
                21 => 'ps_faviconnotificationbo',
                22 => 'ps_featuredproducts',
                23 => 'ps_imageslider',
                24 => 'ps_languageselector',
                25 => 'ps_linklist',
                26 => 'ps_mainmenu',
                27 => 'ps_searchbar',
                28 => 'ps_sharebuttons',
                29 => 'ps_shoppingcart',
                30 => 'ps_socialfollow',
                31 => 'ps_themecusto',
                32 => 'ps_wirepayment',
                33 => 'sekeywords',
                34 => 'statsbestcategories',
                35 => 'statsbestcustomers',
                36 => 'statsbestproducts',
                37 => 'statsbestsuppliers',
                38 => 'statsbestvouchers',
                39 => 'statscarrier',
                40 => 'statscatalog',
                41 => 'statscheckup',
                42 => 'statsdata',
                43 => 'statsequipment',
                44 => 'statsforecast',
                45 => 'statslive',
                46 => 'statsnewsletter',
                47 => 'statsorigin',
                48 => 'statspersonalinfos',
                49 => 'statsproduct',
                50 => 'statsregistrations',
                51 => 'statssales',
                52 => 'statssearch',
                53 => 'statsstock',
                54 => 'statsvisits',
                55 => 'welcome',
                56 => 'gamification',
                57 => 'emarketing',
                58 => 'psaddonsconnect',
                59 => 'psgdpr',
                60 => 'ps_mbo',
                61 => 'ps_buybuttonlite',
                62 => 'ps_checkout',
                63 => 'blockreassurance',
                64 => 'ps_facetedsearch',
            ],
            'ps_cache_dir' => 'C:\\laragon\\www\\testPrestashop/var/cache/dev\\',
            'mail_themes_uri' => '/mails/themes',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => 'C:\\laragon\\www\\testPrestashop/var/cache/dev\\/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
        ];
    }
}
