<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => 'v2.1.1@73e5b88775c64ccc0b84fb60836b30dc9d92ac4a',
  'backpack/crud' => '4.1.69@248e2e034cedcffe01732cdce01fb3d1ecad9ffa',
  'backpack/permissionmanager' => '6.0.11@656e8abc468a2fe6713a5ea4ad3b2e146bd8141b',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'creativeorange/gravatar' => 'v1.0.21@f5f25dda14aff8b296a52a92f375586114608cda',
  'dflydev/dot-access-data' => 'v3.0.1@0992cc19268b259a39e86f296da5f0677841f42c',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/dbal' => '3.3.3@82331b861727c15b1f457ef05a8729e508e7ead5',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'dragonmantank/cron-expression' => 'v3.3.1@be85b3f05b46c39bbc0d95f6c071ddff669510fa',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'ezyang/htmlpurifier' => 'v4.14.0@12ab42bd6e742c70c0a52f7b82477fcd44e64b75',
  'fruitcake/laravel-cors' => 'v2.2.0@783a74f5e3431d7b9805be8afb60fd0a8f743534',
  'graham-campbell/result-type' => 'v1.0.4@0690bde05318336c7221785f2a932467f98b64ca',
  'guzzlehttp/guzzle' => '7.4.2@ac1ec1cd9b5624694c3a40be801d94137afb12b4',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '2.2.1@c94a94f120803a18554c1805ef2e539f8285f9a2',
  'intervention/image' => '2.7.1@744ebba495319501b873a4e48787759c72e3fb8c',
  'laravel/framework' => 'v8.83.5@33b1b981266e3a19fbc826b60c4a6847e311ac95',
  'laravel/sanctum' => 'v2.14.2@dc5d749ba9bfcfd68d8f5c272238f88bea223e66',
  'laravel/serializable-closure' => 'v1.1.1@9e4b005daa20b0c161f3845040046dc9ddc1d74e',
  'laravel/tinker' => 'v2.7.1@1e2d500585a4e546346fadd3adc6f9c1a97e15f4',
  'league/commonmark' => '2.2.3@47b015bc4e50fd4438c1ffef6139a1fb65d2ab71',
  'league/config' => 'v1.1.1@a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e',
  'league/flysystem' => '1.1.9@094defdb4a7001845300334e7c1ee2335925ef99',
  'league/mime-type-detection' => '1.9.0@aa70e813a6ad3d1558fc927863d47309b4c23e69',
  'maatwebsite/excel' => '3.1.38@dff132ce4d30b19863f4e84de1613fca99604992',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '3.0.1@ab8bc271e404909db09ff2d5ffa1e538085c0f22',
  'markbaker/matrix' => '3.0.0@c66aefcafb4f6c269510e9ac46b82619a904c576',
  'monolog/monolog' => '2.4.0@d7fd7450628561ba697b7097d86db72662f54aef',
  'myclabs/php-enum' => '1.8.3@b942d263c641ddb5190929ff840c68f78713e937',
  'nesbot/carbon' => '2.57.0@4a54375c21eea4811dbd1149fe6b246517554e78',
  'nette/schema' => 'v1.2.2@9a39cef03a5b34c7de64f551538cbba05c2be5df',
  'nette/utils' => 'v3.2.7@0af4e3de4df9f1543534beab255ccf459e7a2c99',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'nwidart/laravel-modules' => '9.0.1@5483801843f653df5ffd074da373508f4d3925c9',
  'opis/closure' => '3.6.3@3d81e4309d2a927abbe66df935f4bb60082805ad',
  'phpoffice/phpspreadsheet' => '1.22.0@3a9e29b4f386a08a151a33578e80ef1747037a48',
  'phpoption/phpoption' => '1.8.1@eab7a0df01fe2344d172bff4cd6dbd3f8b84ad15',
  'prologue/alerts' => '0.4.8@a6412e318c0171526bc8b25ef597f2cc61f5b800',
  'psr/cache' => '3.0.0@aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'psr/simple-cache' => '1.0.0@753fa598e8f3b9966c886fe13f370baa45ef0e24',
  'psy/psysh' => 'v0.11.2@7f7da640d68b9c9fec819caae7c744a213df6514',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.2.3@fc9bb7fb5388691fd7373cd44dcb4d63bbcf24df',
  'spatie/laravel-permission' => '5.5.2@eb838cd2c539d1c97f8c997e67479cb68c2d0e36',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/console' => 'v5.4.5@d8111acc99876953f52fe16d4c50eb60940d49ad',
  'symfony/css-selector' => 'v6.0.3@1955d595c12c111629cc814d3f2a2ff13580508a',
  'symfony/deprecation-contracts' => 'v3.0.0@c726b64c1ccfe2896cb7df2e1331c357ad1c8ced',
  'symfony/error-handler' => 'v5.4.3@c4ffc2cd919950d13c8c9ce32a70c70214c3ffc5',
  'symfony/event-dispatcher' => 'v6.0.3@6472ea2dd415e925b90ca82be64b8bc6157f3934',
  'symfony/event-dispatcher-contracts' => 'v3.0.0@aa5422287b75594b90ee9cd807caf8f0df491385',
  'symfony/finder' => 'v5.4.3@231313534dded84c7ecaa79d14bc5da4ccb69b7d',
  'symfony/http-foundation' => 'v5.4.6@34e89bc147633c0f9dd6caaaf56da3b806a21465',
  'symfony/http-kernel' => 'v5.4.6@d41f29ae9af1b5f40c7ebcddf09082953229411d',
  'symfony/mime' => 'v5.4.3@e1503cfb5c9a225350f549d3bb99296f4abfb80f',
  'symfony/polyfill-ctype' => 'v1.25.0@30885182c981ab175d4d034db0f6f469898070ab',
  'symfony/polyfill-iconv' => 'v1.25.0@f1aed619e28cb077fc83fac8c4c0383578356e40',
  'symfony/polyfill-intl-grapheme' => 'v1.25.0@81b86b50cf841a64252b439e738e97f4a34e2783',
  'symfony/polyfill-intl-idn' => 'v1.25.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.25.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.25.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php72' => 'v1.25.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.25.0@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/polyfill-php80' => 'v1.25.0@4407588e0d3f1f52efb65fbe92babe41f37fe50c',
  'symfony/polyfill-php81' => 'v1.25.0@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/process' => 'v5.4.5@95440409896f90a5f85db07a32b517ecec17fa4c',
  'symfony/routing' => 'v5.4.3@44b29c7a94e867ccde1da604792f11a469958981',
  'symfony/service-contracts' => 'v2.4.1@d664541b99d6fb0247ec5ff32e87238582236204',
  'symfony/string' => 'v6.0.3@522144f0c4c004c80d56fa47e40e17028e2eefc2',
  'symfony/translation' => 'v6.0.6@f6639cb9b5e0c57fe31e3263b900a77eedb0c908',
  'symfony/translation-contracts' => 'v3.0.0@1b6ea5a7442af5a12dba3dbd6d71034b5b234e77',
  'symfony/var-dumper' => 'v5.4.6@294e9da6e2e0dd404e983daa5aa74253d92c05d0',
  'tijsverkoyen/css-to-inline-styles' => '2.2.4@da444caae6aca7a19c0c140f68c6182e337d5b1c',
  'vlucas/phpdotenv' => 'v5.4.1@264dce589e7ce37a7ba99cb901eed8249fbec92f',
  'voku/portable-ascii' => '1.6.1@87337c91b9dfacee02452244ee14ab3c43bc485a',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'backpack/generators' => 'v3.1.13@ca7f840d43de6e649fd2b22ef9a37cb2459dbc21',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'facade/flare-client-php' => '1.9.1@b2adf1512755637d0cef4f7d1b54301325ac78ed',
  'facade/ignition' => '2.17.5@1d71996f83c9a5a7807331b8986ac890352b7a0c',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'fakerphp/faker' => 'v1.19.0@d7f08a622b3346766325488aa32ddc93ccdecc75',
  'filp/whoops' => '2.14.5@a63e5e8f26ebbebf8ed3c5c691637325512eb0dc',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'laracasts/generators' => '2.0.1@5527f50260c6d3bf50a8e62e902e3fb44e87c4d8',
  'laravel/sail' => 'v1.13.7@2092e1ce6e4ba534bff443de8c3a7bb280aba121',
  'mockery/mockery' => '1.5.0@c10a5f6e06fc2470ab1822fa13fa2a7380f8fbac',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'nunomaduro/collision' => 'v5.11.0@8b610eef8582ccdc05d8f2ab23305e2d37049461',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.0@93ebd0014cab80c4ea9f5e297ea48672f1b87706',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '9.2.15@2e9da11878c4202f97915c1cb4bb1ca318a63f5f',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.19@35ea4b7f3acabb26f4bb640f8c30866c401da807',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.5@0ca8db5a5fc9c8646244e629625ac486fa286bf2',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.0.0@b233b84bc4465aff7b57cf1c4bc75c86d00d6dad',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'laravel/laravel' => 'dev-main@53321914fab9b5d937812b725b4fa30664ef8380',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}