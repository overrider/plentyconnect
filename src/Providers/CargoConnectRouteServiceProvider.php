<?php
namespace CargoConnect\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class CargoConnectRouteServiceProvider
 * @package CargoConnect\Providers
 */
class CargoConnectRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->post('shipment/plenty_tutorial/register_shipments', [
            'middleware' => 'oauth',
            'uses'       => 'CargoConnect\Controllers\ShipmentController@registerShipments'
        ]);
  	}

}
