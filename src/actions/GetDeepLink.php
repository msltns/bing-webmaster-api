<?php

namespace bingWebmaster\actions;


class GetDeepLink implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $url;

    /**
     * GetDeepLink constructor.
     * @param $siteUrl
     * @param $url
     */
    public function __construct($siteUrl, $url)
    {
        $this->siteUrl = $siteUrl;
        $this->url = $url;
    }


    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;
}