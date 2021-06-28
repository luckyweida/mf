<?php

namespace MillenniumFalcon\Core\Controller;

use Doctrine\DBAL\Connection;
use MillenniumFalcon\Cart\Service\CartServiceWrapper;
use MillenniumFalcon\Core\Controller\Traits\Web\Cart\WebCartAjaxTrait;
use MillenniumFalcon\Core\Controller\Traits\Web\Cart\WebCartPageTrait;
use MillenniumFalcon\Core\Controller\Traits\Web\Core\WebCoreAssetTrait;
use MillenniumFalcon\Core\Controller\Traits\Web\Core\WebCoreTrait;
use MillenniumFalcon\Core\RouterController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Mailer\MailerInterface;
use Twig\Environment;

class WebController extends RouterController
{
    const AB_TEST_TOKEN_NAME = '_abt';

    use
        WebCoreAssetTrait,
        WebCoreTrait
        ;

    /**
     * @var Connection
     */
    protected $connection;

    /**
     * @var KernelInterface
     */
    protected $kernel;


    protected $cartService;

    /**
     * WebController constructor.
     * @param Connection $connection
     * @param KernelInterface $kernel
     * @param CartService $cartService
     * @param Environment $environment
     */
    public function __construct(Connection $connection, KernelInterface $kernel, CartServiceWrapper $cartService)
    {
        $this->connection = $connection;
        $this->kernel = $kernel;
        $this->cartService = $cartService;
    }
}