<?php
namespace CargoConnect\Providers;

use Plenty\Modules\Order\Shipping\ServiceProvider\Services\ShippingServiceProviderService;
use Plenty\Plugin\ServiceProvider;

/**
 * Class CargoConnectServiceProvider
 * @package CargoConnect\Providers
 */
class CargoConnectServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
	    // add REST routes by registering a RouteServiceProvider if necessary
//	     $this->getApplication()->register(CargoConnectRouteServiceProvider::class);
    }

    public function boot(ShippingServiceProviderService $shippingServiceProviderService)
    {

        $shippingServiceProviderService->registerShippingProvider(
            'CargoConnect',
            ['de' => '*** CargoConnect plugin description ***', 'en' => '*** CargoConnect plugin description ***'],
            [
                'CargoConnect\\Controllers\\ShippingController@registerShipments',
                'CargoConnect\\Controllers\\ShippingController@deleteShipments',
            ]);
    }
}
