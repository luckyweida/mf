<?php

namespace MillenniumFalcon\Core\Controller\Traits\Cms\Core;

use BlueM\Tree;
use BlueM\Tree\Node;
use Cocur\Slugify\Slugify;

use MillenniumFalcon\Core\ORM\_Model;
use MillenniumFalcon\Core\Service\ModelService;
use MillenniumFalcon\Core\Twig\Extension;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

trait CmsCoreRestProductTrait
{
    /**
     * @route("/manage/rest/product-variants")
     * @return Response
     */
    public function cmsProductVariants()
    {
        $pdo = $this->container->get('doctrine.dbal.default_connection');

        $request = Request::createFromGlobals();
        $productUniqid = $request->get('productUniqid');
        $fullClass = ModelService::fullClass($pdo, 'ProductVariant');
        $data = $fullClass::data($pdo, [
            'whereSql' => 'm.productUniqid = ?',
            'params' => [$productUniqid],
        ]);
        return new JsonResponse($data);
    }
}