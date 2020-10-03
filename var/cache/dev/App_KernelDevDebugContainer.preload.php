<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/Container7IDRPvU/App_KernelDevDebugContainer.php';
require __DIR__.'/Container7IDRPvU/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/Container7IDRPvU/getValidator_ExpressionService.php';
require __DIR__.'/Container7IDRPvU/getValidator_EmailService.php';
require __DIR__.'/Container7IDRPvU/getValidator_BuilderService.php';
require __DIR__.'/Container7IDRPvU/getValidatorService.php';
require __DIR__.'/Container7IDRPvU/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/Container7IDRPvU/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/Container7IDRPvU/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/Container7IDRPvU/getTwig_Form_RendererService.php';
require __DIR__.'/Container7IDRPvU/getTwigService.php';
require __DIR__.'/Container7IDRPvU/getTranslatorService.php';
require __DIR__.'/Container7IDRPvU/getTranslation_Loader_YmlService.php';
require __DIR__.'/Container7IDRPvU/getTranslation_Loader_XliffService.php';
require __DIR__.'/Container7IDRPvU/getTranslation_Loader_ResService.php';
require __DIR__.'/Container7IDRPvU/getTranslation_Loader_QtService.php';
require __DIR__.'/Container7IDRPvU/getTranslation_Loader_PoService.php';
require __DIR__.'/Container7IDRPvU/getTranslation_Loader_PhpService.php';
require __DIR__.'/Container7IDRPvU/getTranslation_Loader_MoService.php';
require __DIR__.'/Container7IDRPvU/getTranslation_Loader_JsonService.php';
require __DIR__.'/Container7IDRPvU/getTranslation_Loader_IniService.php';
require __DIR__.'/Container7IDRPvU/getTranslation_Loader_DatService.php';
require __DIR__.'/Container7IDRPvU/getTranslation_Loader_CsvService.php';
require __DIR__.'/Container7IDRPvU/getSession_Storage_NativeService.php';
require __DIR__.'/Container7IDRPvU/getSessionService.php';
require __DIR__.'/Container7IDRPvU/getServicesResetterService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_PasswordEncoderService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_HttpUtilsService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_EncoderFactory_GenericService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_ContextListener_0Service.php';
require __DIR__.'/Container7IDRPvU/getSecurity_ChannelListenerService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_Authentication_Provider_Guard_MainService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_Authentication_Provider_Dao_MainService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_Authentication_Listener_Guard_MainService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_Authentication_Listener_Form_MainService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_Authentication_Listener_Anonymous_MainService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_Authentication_GuardHandlerService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_AccessMapService.php';
require __DIR__.'/Container7IDRPvU/getSecurity_AccessListenerService.php';
require __DIR__.'/Container7IDRPvU/getSecrets_VaultService.php';
require __DIR__.'/Container7IDRPvU/getRouting_LoaderService.php';
require __DIR__.'/Container7IDRPvU/getPropertyAccessorService.php';
require __DIR__.'/Container7IDRPvU/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/Container7IDRPvU/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/Container7IDRPvU/getMailer_TransportFactory_NullService.php';
require __DIR__.'/Container7IDRPvU/getMailer_MailerService.php';
require __DIR__.'/Container7IDRPvU/getFragment_Renderer_InlineService.php';
require __DIR__.'/Container7IDRPvU/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/Container7IDRPvU/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/Container7IDRPvU/getForm_TypeExtension_Upload_ValidatorService.php';
require __DIR__.'/Container7IDRPvU/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/Container7IDRPvU/getForm_TypeExtension_Form_TransformationFailureHandlingService.php';
require __DIR__.'/Container7IDRPvU/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/Container7IDRPvU/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/Container7IDRPvU/getForm_Type_FormService.php';
require __DIR__.'/Container7IDRPvU/getForm_Type_FileService.php';
require __DIR__.'/Container7IDRPvU/getForm_Type_EntityService.php';
require __DIR__.'/Container7IDRPvU/getForm_Type_ColorService.php';
require __DIR__.'/Container7IDRPvU/getForm_Type_ChoiceService.php';
require __DIR__.'/Container7IDRPvU/getForm_ServerParamsService.php';
require __DIR__.'/Container7IDRPvU/getForm_RegistryService.php';
require __DIR__.'/Container7IDRPvU/getForm_FactoryService.php';
require __DIR__.'/Container7IDRPvU/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/Container7IDRPvU/getFilesystemService.php';
require __DIR__.'/Container7IDRPvU/getErrorControllerService.php';
require __DIR__.'/Container7IDRPvU/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/Container7IDRPvU/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/Container7IDRPvU/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/Container7IDRPvU/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/Container7IDRPvU/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/Container7IDRPvU/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/Container7IDRPvU/getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService.php';
require __DIR__.'/Container7IDRPvU/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/Container7IDRPvU/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/Container7IDRPvU/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/Container7IDRPvU/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/Container7IDRPvU/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/Container7IDRPvU/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/Container7IDRPvU/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/Container7IDRPvU/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/Container7IDRPvU/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/Container7IDRPvU/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/Container7IDRPvU/getContainer_EnvVarProcessorService.php';
require __DIR__.'/Container7IDRPvU/getCacheClearerService.php';
require __DIR__.'/Container7IDRPvU/getCache_SystemClearerService.php';
require __DIR__.'/Container7IDRPvU/getCache_SystemService.php';
require __DIR__.'/Container7IDRPvU/getCache_GlobalClearerService.php';
require __DIR__.'/Container7IDRPvU/getCache_AppClearerService.php';
require __DIR__.'/Container7IDRPvU/getCache_AppService.php';
require __DIR__.'/Container7IDRPvU/getCache_AnnotationsService.php';
require __DIR__.'/Container7IDRPvU/getAnnotations_CacheService.php';
require __DIR__.'/Container7IDRPvU/getTemplateControllerService.php';
require __DIR__.'/Container7IDRPvU/getRedirectControllerService.php';
require __DIR__.'/Container7IDRPvU/getServiceCommandeService.php';
require __DIR__.'/Container7IDRPvU/getAppAuthentificatorAuthenticatorService.php';
require __DIR__.'/Container7IDRPvU/getUserRepositoryService.php';
require __DIR__.'/Container7IDRPvU/getQuantityCommandRepositoryService.php';
require __DIR__.'/Container7IDRPvU/getProduitsRepositoryService.php';
require __DIR__.'/Container7IDRPvU/getProducteursRepositoryService.php';
require __DIR__.'/Container7IDRPvU/getPaniersRepositoryService.php';
require __DIR__.'/Container7IDRPvU/getNewsletterRepositoryService.php';
require __DIR__.'/Container7IDRPvU/getEmailContactRepositoryService.php';
require __DIR__.'/Container7IDRPvU/getContactRepositoryService.php';
require __DIR__.'/Container7IDRPvU/getCommandeRepositoryService.php';
require __DIR__.'/Container7IDRPvU/getRegistrationFormTypeService.php';
require __DIR__.'/Container7IDRPvU/getNewsletterFormTypeService.php';
require __DIR__.'/Container7IDRPvU/getContactFormTypeService.php';
require __DIR__.'/Container7IDRPvU/getUserControllerService.php';
require __DIR__.'/Container7IDRPvU/getSecurityControllerService.php';
require __DIR__.'/Container7IDRPvU/getRegistrationControllerService.php';
require __DIR__.'/Container7IDRPvU/getPaniersControllerService.php';
require __DIR__.'/Container7IDRPvU/getPaiementControllerService.php';
require __DIR__.'/Container7IDRPvU/getNewsletterControllerService.php';
require __DIR__.'/Container7IDRPvU/getMentionsControllerService.php';
require __DIR__.'/Container7IDRPvU/getIndexControllerService.php';
require __DIR__.'/Container7IDRPvU/getHomeControllerService.php';
require __DIR__.'/Container7IDRPvU/getContactControllerService.php';
require __DIR__.'/Container7IDRPvU/getCommandeControllerService.php';
require __DIR__.'/Container7IDRPvU/getAdminControllerService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_XA8Fw_Service.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_UxleHkzService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_QTb19JvService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_QTAx_HaService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_N_Axm49Service.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_HEwcf7AService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_G9CqTPpService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_FzUjnh0Service.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_Beq5mCoService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_BJL9NdoService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_Tpcd01ZService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_TcUodWIService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_PvZNPVService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_KE9_MAuService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_IRXhcBXService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_HLlm193Service.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_GN5J0qkService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_FXD6KYrService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_EMI6ndwService.php';
require __DIR__.'/Container7IDRPvU/get_ServiceLocator_C9JCBPCService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\SymfonyCastsVerifyEmailBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\AdminController';
$classes[] = 'App\Controller\CommandeController';
$classes[] = 'App\Controller\ContactController';
$classes[] = 'App\Controller\HomeController';
$classes[] = 'App\Controller\IndexController';
$classes[] = 'App\Controller\MentionsController';
$classes[] = 'App\Controller\NewsletterController';
$classes[] = 'App\Controller\PaiementController';
$classes[] = 'App\Controller\PaniersController';
$classes[] = 'App\Controller\RegistrationController';
$classes[] = 'App\Security\EmailVerifier';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\Util\VerifyEmailQueryUtility';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator';
$classes[] = 'App\Controller\SecurityController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\Form\ContactFormType';
$classes[] = 'App\Form\NewsletterFormType';
$classes[] = 'App\Form\RegistrationFormType';
$classes[] = 'App\Repository\CommandeRepository';
$classes[] = 'App\Repository\ContactRepository';
$classes[] = 'App\Repository\EmailContactRepository';
$classes[] = 'App\Repository\NewsletterRepository';
$classes[] = 'App\Repository\PaniersRepository';
$classes[] = 'App\Repository\ProducteursRepository';
$classes[] = 'App\Repository\ProduitsRepository';
$classes[] = 'App\Repository\QuantityCommandRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Security\AppAuthentificatorAuthenticator';
$classes[] = 'App\Service\ServiceCommande';
$classes[] = 'Symfony\Component\Security\Core\Security';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\Mailer';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Guard\GuardAuthenticatorHandler';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler';
$classes[] = 'Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Encoder\EncoderFactory';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Core\Encoder\UserPasswordEncoder';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\UserChecker';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'App\Service\ServiceNewsletter';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

Preloader::preload($classes);
