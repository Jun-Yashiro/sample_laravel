<?php
namespace App\Services;

use App\Repositories\WebSiteViewRepository;

class WebSiteViewService
{
    /**
     * {@inheritdoc}
     */
    public function getList($request =NULL)
    {
        $webSiteViewRepository = new WebSiteViewRepository();
        $result = $webSiteViewRepository->getList($request);
return $result;
    }

}
