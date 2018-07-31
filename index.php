<?php
// bootstrap
use Patterns\StrategyPattern\Runner;

ini_set("user_agent", "Opera/9.80 (Windows NT 6.1; U; Edition Campaign 21; en-GB) Presto/2.7.62 Version/11.00");
define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);
define('VENDOR', ROOT . 'vendor' . DIRECTORY_SEPARATOR);

error_reporting(E_ALL);
ini_set('display_errors', 1);

require VENDOR . 'autoload.php';
echo '<pre>';

/*
$StrategyRunner = new Runner();
print_r($StrategyRunner->Run());
*/


/*
$ObserverRunner = new \Patterns\ObserverPattern\Runner();
print_r($ObserverRunner->run());
*/

/*$FactoryRunner = new \Patterns\FactoryPattern\Runner();
print_r($FactoryRunner->Run());*/

/*$oAbstractFactoryRunner = new \Patterns\AbstractFactoryPattern\Runner();
print_r($oAbstractFactoryRunner->Run());*/

/*$oSingletonRunner = new \Patterns\SingletonPattern\Runner();
print_r($oSingletonRunner->Run());*/

/*$oBuilderRunner = new \Patterns\BuilderPattern\Runner();
print_r($oBuilderRunner->Run());*/

/*$oPrototypeRunner = new \Patterns\PrototypePattern\Runner();
print_r($oPrototypeRunner->fire());*/

/*$oDecorationRunner = new \Patterns\DecoratorPattern\Runner();
print_r($oDecorationRunner->fire());*/

/*$oCommandRunner = new \Patterns\CommandPattern\Runner();
print_r($oCommandRunner->fire());*/

/*$oAdapterRunner = new \Patterns\AdapterPattern\Runner();
print_r($oAdapterRunner->fire());*/

/*$oFacadeRunner = new \Patterns\FacadePattern\Runner();
print_r($oFacadeRunner->fire());*/

/*$oBridgeRunner = new \Patterns\BridgePattern\Runner();
print_r($oBridgeRunner->fire());*/

/*$oCompositeRunner = new \Patterns\CompositePattern\Runner();
print_r($oCompositeRunner->fire());*/

/*$oTemplateMethodRunner = new \Patterns\TemplateMethodPattern\Runner();
print_r($oTemplateMethodRunner->fire());*/

$oIteratorRunner = new \Patterns\IteratorPattern\Runner();
print_r($oIteratorRunner->fire());

echo '</pre>';
echo '<br><br><br><br><br><hr>End';
?>
