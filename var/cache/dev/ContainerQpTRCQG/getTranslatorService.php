<?php

namespace ContainerQpTRCQG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation-contracts\\TranslatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\TranslatorBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation-contracts\\LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Translator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Translation\\Translator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Formatter\\MessageFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Formatter\\IntlFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Formatter\\MessageFormatter.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation-contracts\\TranslatorTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\IdentityTranslator.php';

        $container->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', true],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($container->targetDir.''.'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ar.xlf')], 'az' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.bg.xlf')], 'ca' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ca.xlf')], 'cs' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.cs.xlf')], 'cy' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.da.xlf')], 'de' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.de.xlf')], 'el' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.el.xlf')], 'en' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.en.xlf')], 'es' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.es.xlf')], 'et' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.eu.xlf')], 'fa' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.fa.xlf')], 'fi' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.fi.xlf')], 'fr' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.fr.xlf')], 'gl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.gl.xlf')], 'he' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.hr.xlf')], 'hu' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.hu.xlf')], 'hy' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.id.xlf')], 'it' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.it.xlf')], 'ja' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ja.xlf')], 'lb' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.lb.xlf')], 'lt' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.lt.xlf')], 'lv' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.lv.xlf')], 'mn' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.nl.xlf')], 'nn' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.no.xlf')], 'pl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.pl.xlf')], 'pt' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.pt.xlf')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.pt_BR.xlf')], 'ro' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ro.xlf')], 'ru' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ru.xlf')], 'sk' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sk.xlf')], 'sl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sl.xlf')], 'sq' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sv.xlf')], 'th' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.tr.xlf')], 'uk' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.uk.xlf')], 'vi' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.zh_CN.xlf')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.zh_TW.xlf')], 'pt_PT' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.pt_PT.xlf')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/translations'), 4 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/translations'), 5 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle/translations'), 6 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/translations'), 7 => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src/translations'), 8 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src/translations'), 9 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle/translations'), 10 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/translations'), 11 => (\dirname(__DIR__, 4).'\\vendor\\symfonycasts\\verify-email-bundle\\src/translations'), 12 => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src/translations'), 13 => (\dirname(__DIR__, 4).'/translations')], 'cache_vary' => ['scanned_directories' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/translations'), 4 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/translations'), 5 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle/translations'), 6 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/translations'), 7 => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src/translations'), 8 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src/translations'), 9 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle/translations'), 10 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/translations'), 11 => (\dirname(__DIR__, 4).'\\vendor\\symfonycasts\\verify-email-bundle\\src/translations'), 12 => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src/translations'), 13 => 'translations']]], []);

        $instance->setConfigCacheFactory(($container->privates['config_cache_factory'] ?? $container->getConfigCacheFactoryService()));
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }
}
